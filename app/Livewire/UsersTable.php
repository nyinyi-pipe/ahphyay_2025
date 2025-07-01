<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\DateColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\DateFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;

    // public array $bulkActions = [
    //     'exportSelected' => 'Export',
    // ];

    // public function exportSelected() {
    //     dd("hit");
    // }

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setPaginationEnabled()
            ->setPaginationVisibilityEnabled()
            ->setPerPageAccepted([10, 25, 50, 100])
            ->setDefaultPerPage(10)
            ->setActionsInToolbarEnabled() 
            ->setPaginationMethod('standard');
    }
    

    public function columns(): array
    {
        return [
            Column::make("ID", "id")->sortable(),
            ImageColumn::make("Profile")
                ->location(
                    fn($row) => $row->profile_image
                        ? asset('storage/' . $row->profile_image)
                        : 'https://media.istockphoto.com/id/1337144146/vector/default-avatar-profile-icon-vector.jpg?s=612x612&w=0&k=20&c=BIbFwuv7FxTWvh5S3vB6bkT0Qv8Vn8N5Ffseq84ClGI='
                )
                ->attributes(fn($row) => [
                    'class' => 'w-6 h-6',
                    'alt'   => $row->username . ' avatar',

                ]),

            Column::make("Username", "username")->sortable()->searchable(),
            Column::make("Email", "email")->sortable()->searchable(),
            Column::make("First Name", "first_name")->sortable()->searchable()->collapseAlways(),
            Column::make("Last Name", "last_name")->sortable()->searchable()->collapseAlways(),
            Column::make("Phone", "phone")->sortable()->searchable(),
            Column::make("Gender", "gender")->sortable(),
            Column::make("Status", "status")->sortable()
                ->attributes(fn($row) => [
                    'class' => 'text-green-500'
                ]),
            Column::make("DOB", "date_of_birth")->sortable()->searchable()->collapseAlways(),
            Column::make("Last Login", "last_login")->sortable()->collapseAlways(),
            Column::make("Active", "is_active")->sortable()->collapseAlways(),
            Column::make("Verified", "is_verified")->sortable()->collapseAlways(),

            DateColumn::make("Created At", "created_at")->sortable()->outputFormat('Y-m-d H:i')->collapseAlways(),
            DateColumn::make("Updated At", "updated_at")->sortable()->outputFormat('Y-m-d H:i')->collapseAlways(),
        ];
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Gender', 'gender')
                ->options([
                    ''       => 'All',
                    'Male'   => 'Male',
                    'Female' => 'Female',
                ])
                ->filter(function (Builder $builder, string $value) {
                    if ($value !== '') {
                        $builder->where('gender', $value);
                    }
                }),

            SelectFilter::make('Status', 'status')
                ->options([
                    ''    => 'All',
                    'On'  => 'On',
                    'Off' => 'Off',
                ])
                ->filter(function (Builder $builder, string $value) {
                    if ($value !== '') {
                        $builder->where('status', $value);
                    }
                }),
        ];
    }
}
