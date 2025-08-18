@extends('layouts.panel')
@section('title', 'Marca')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-itemd-center">
                        <h3 class="mb-0">Marca</h3>
                        <a href="{{ route('marks.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Marca
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-user"></i> Nombre del representante</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Nombre de la compañia</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Nombre de contacto</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Correo del provedor</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Direccion del provedor</th>
                                <th scope="col"><i class="fas fa-list-user"></i> Acciones</th>
                            </tr>
                        </thead>

                    <tbody>
                        @foreach ($suppliers as $supplier )
                        <tr>
                            <td> {{ $supplier->representative_name}}</td>
                            <td> {{ $supplier->company_name }}</td>
                            <td> {{ $supplier->phone_number }}</td>
                            <td> {{ $supplier->email }}</td>
                            <td> {{ $supplier->physical_Address }}</td>
                            <td> {{ $supplier->created_at }}</td>

                            <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route('marks.edit', $mark->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action="{{ route('marks.destroy', $mark->id) }}" method="POST"
                                    style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                    onsubmit="return confirm('¿Esta seguro que desea eliminar esta marca? Esta accion no se puede deshacer,');">
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
                    {{ $marks->links() }}
                </nav>
             </div>
         </div>
    </div>
</div>

@endsection
