<?php

namespace App\Livewire;

use App\Models\Faq;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\DateFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class FaqsTable extends DataTableComponent
{
    protected $model = Faq::class;
    public bool $columnSelect = false;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setPaginationEnabled()
            ->setPaginationVisibilityEnabled()
            ->setPerPageAccepted([10, 25, 50, 100])
            ->setDefaultPerPage(10)
            ->setColumnSelectDisabled()
            ->setPaginationMethod('standard');
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")->sortable(),
            Column::make("Category Slug", "category_slug")->sortable()->searchable(),
            Column::make("Category Name", "category_name")->sortable()->searchable(),
            Column::make("Category Icon", "category_icon")->sortable()->searchable(),
            Column::make("Category Icon", "question")->sortable()->searchable()->collapseAlways(),
            Column::make("Category Icon", "answer")->sortable()->searchable()->collapseAlways(),
            Column::make("Category Icon", "order")->sortable()->searchable(),
            
        ];
    }
}
