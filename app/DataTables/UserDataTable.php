<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class UserDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'users.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->newQuery()->with('Attendances');
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
     * new Column(['title' => __('users.fields.position_name'), 'data' => 'position_name', 'orderable' => false, 'searchable' => false]),
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id' => ['searchable' => false],
            'name' => ['title' => __('fields.name'), 'data' => 'name', 'name' => 'name'],
            'email' => ['title' => __('fields.email'), 'data' => 'email', 'name' => 'email'],
            'status_online' => ['title' => __('fields.status_online'), 'data' => 'status_online', 'orderable' => false, 'searchable' => false],
            'role_text' => ['title' => __('fields.role'), 'orderable' => false, 'searchable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename():string
    {
        return 'users_datatable_' . time();
    }
}
