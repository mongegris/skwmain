<?php

namespace App\DataTables;

use App\Cliente;
use App\User;
use function MongoDB\BSON\toJSON;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class ClientesDataTable extends DefaultDataTable
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
        $dataTable
            ->addColumn(
                'accion',
                function ($cliente) {
                    return '<a href="/' . $cliente->id . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
                }
            );
        return $dataTable->rawColumns(['accion']);
        //);
    }
    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */


    public function query()
    {

        $query = Cliente::query()->select($this->getSimpleColumns())
            //->where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc');

        return $this->applyScopes($query);
    }


    protected function getSimpleColumns()
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
     * Get columns.
     *
     * @return array
     */

    protected function getColumns()
    {
        return [
            ['data' => 'id', 'title' => 'ID'],
            ['data' => 'name', 'title' => 'Nombre'],
            ['data' => 'lastname', 'title' => 'Apellido'],
            ['data' => 'created_at', 'title' => 'Creado'],
            ['data' => 'updated_at', 'title' => 'Modificado'],
            ['data'=> 'accion', 'name' => 'accion', 'title' => 'Accion'],

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
