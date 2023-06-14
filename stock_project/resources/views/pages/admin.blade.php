@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('dynamic_body')
    <h1 class="text-center text-primary">Users</h1>

    <a href="{{ url('/formAdmin') }}" class="btn btn-secondary mb-3">Add User</a>

    <a href="#" target="_blank" class="btn btn-success mb-3">Create Report</a>
    <div class="row">
        <table class="table table-light table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th> 
                    <th scope="col">Status</th>
                    <th scope="col">Rol</th>                       
                    <th scope="col">Actions</th>
                    </tr>
            </thead>
            @foreach ($admin as $item)
                <tbody>
                    <tr>
                        <th scope="row">{{ $item->name }}</th>
                        <td>{{ $item->last_name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->password }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->rol }}</td>
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