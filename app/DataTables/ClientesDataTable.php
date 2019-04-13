<?php

namespace App\DataTables;

use App\Cliente;
use App\User;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class ClientesDataTable extends DataTable
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

        return $dataTable;/*
        return $this->datatables
            ->eloquent( $this->query() )
            ->make(true);*/
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */


    public function query(Cliente $model)
    {

        //return $model->newQuery()->select('id','name','created_at','updated_at');
        $query = Cliente::query()->select($this->getColumns())//->where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc');

        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns([
                'id',
                'name',
                'lastname',
                'created_at',
                'updated_at',
            ])
            ->parameters([
                'dom' => 'Blfrtip',
                'buttons' => ['csv', 'excel', 'pdf'],
                "lengthMenu" => [[10, 25, 50,-1] , [10,25,50,"Todos"]],
                "pageLength" => 10
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
            'id',
            'name',
            'lastname',
            'created_at',
            'updated_at'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Clientes_' . date('YmdHis');
    }
}
