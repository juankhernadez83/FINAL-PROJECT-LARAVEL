@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('dynamic_body')
    <h1 class="text-center text-primary">Roles</h1>

    <a href="{{ url('/formRol') }}" class="btn btn-secondary mb-3">Add Product</a>

    <a href="#" target="_blank" class="btn btn-success mb-3">Create Report</a>
    <div class="row">
        <table class="table table-light table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Unit of measurement</th>                     
                    <th scope="col">Actions</th>
                    </tr>
            </thead>
            @foreach ($rol as $item)
                <tbody>
                    <tr>
                        <th scope="row">{{ $item->name }}</th>
                        <td>
                            <button class="btn btn-primary">Editar</button>
                            <button class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        
    </div>
@endsection