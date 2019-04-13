<?php
/**
 * Created by PhpStorm.
 * User: HERNAN
 * Date: 13/4/2019
 * Time: 12:12 PM
 */

namespace App\DataTables;


use Yajra\DataTables\Services\DataTable;

class DefaultDataTable extends DataTable
{
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->parameters([
                'dom' => 'Blfrtip',
                'buttons' => ['csv', 'excel', 'pdf'],
                "lengthMenu" => [[10, 25, 50,-1] , [10,25,50,"Todos"]],
                "pageLength" => 10,
                "language" => ["url" => "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"],
            ]);
    }

}