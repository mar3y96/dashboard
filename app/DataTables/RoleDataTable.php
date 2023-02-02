<?php

namespace App\DataTables;

use App\Models\Role;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class RoleDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'roles.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Role $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Role $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false, 'title' => __('header.Action')])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => false,
                'order'     => [[0, 'desc']],
                'buttons'   => [

                ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner', 'title' => __('header.create')],
                ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner', 'title' => __('header.export')],
                ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner', 'title' => __('header.print')],
                ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner', 'title' => __('header.reset')],
                ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner', 'title' => __('header.reload')],
                ],
                'language' => __('datatables')
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id' => ['searchable' => false],
            'name' => ['title' => __('fields.name'), 'data' => 'name', 'name' => 'name'],
            'title' => ['title' => __('fields.title'), 'data' => 'title', 'name' => 'title'],
            'guard_name' => ['title' => __('fields.title'), 'data' => 'name', 'name' => 'name'],
            'description' => ['title' => __('fields.description'), 'data' => 'description', 'name' => 'description'],
            
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename():string
    {
        return 'roles_datatable_' . time();
    }
}
