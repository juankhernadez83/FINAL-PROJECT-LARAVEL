@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('dynamic_body')
<div class="container-fluid p-3 col-auto col-md"> 
    <h1 class="text-star text-black">Suppliers</h1>

    <a href="{{ url('/formSupplier') }}" class="btn btn-secondary mb-3">Add Supplier</a>

    <a href="#" target="_blank" class="btn btn-success mb-3">Create Report</a>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Supplier's name</th>
                    <th scope="col">Supplier's last name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>                      
                    <th scope="col">Actions</th>
                    </tr>
            </thead>
            @foreach ($supplier as $item)
                <tbody>
                    <tr>
                        <th scope="row">{{ $item->name }}</th>
                        <td>{{ $item->last_name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <button class="btn btn-primary">Editar</button>
                            <button class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        
    </div>
</div>
@endsection

<!--  -->
