@extends('layouts.panel')
@section('title', 'Inventario')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-itemd-center">
                        <h3 class="mb-0">Inventario</h3>
                        <a href="{{ route('careers.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Iventario
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-user"></i>fecha de ingreso</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Modo de la Carrera</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Turno de la Carrera</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Código de la Carrera</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Duración de la Carrera</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Especialidad de la Carrera</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Acciones</th>
                            </tr>
                        </thead>

                    <tbody>
                        @foreach ($inventories as $inventory )
                        <tr>
                            <td> {{ $inventory->name }}</td>
                            <td> {{ $inventory->mode }}</td>
                            <td> {{ $inventory->shift }}</td>
                            <td> {{ $inventory->code_career }}</td>
                            <td> {{ $inventory->duration }}</td>
                            <td> {{ $inventory->specialty }}</td>

                            <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route('careers.show', $inventories->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px">
                                    <i class="fas fa-eye"></i> Mostrar
                                </a>
                                <a href="{{ route('careers.edit', $inventories->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action="{{ route('careers.destroy', $inventories->id) }}" method="POST"
                                    style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                    onsubmit="return confirm('¿Esta seguro que desea eliminar esta carrera? Esta accion no se puede deshacer,');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>

             <div class="card-footer py-4">
                <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                    {{ $inventories->links()}}
                </nav>
             </div>
         </div>
    </div>
</div>

@endsection
