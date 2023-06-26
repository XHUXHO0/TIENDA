<?php

namespace App\Http\Livewire\Tablas;

use App\Models\Categoria;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CategoriasDatatable extends DataTableComponent
{
    protected $model = Categoria::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Nombre', 'nombre'),
            Column::make('Descripcion', 'descripcion'),
            Column::make('Acciones ', 'id')->format(function ($row) {
                return view('Categorias.BotonesTabla', ['id' => $row]);
            }),
        ];
    }
}
