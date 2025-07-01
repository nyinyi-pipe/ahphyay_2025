<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\DateFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Spatie\Permission\Models\Permission;


class PermissionsTable extends DataTableComponent
{
    protected $model = Permission::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setPaginationEnabled()
            ->setDefaultSort('id','asc')
            ->setPaginationVisibilityEnabled()
            ->setPerPageAccepted([10, 25, 50, 100])
            ->setDefaultPerPage(10)
            ->setPaginationMethod('standard');
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")->sortable(),
            Column::make("Permission Name", "name")->sortable()->searchable(),
            
        ];
    }
}
