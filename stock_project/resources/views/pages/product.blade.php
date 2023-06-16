@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('dynamic_body')
    <h1 class="text-center text-primary">Products</h1>

    <a href="{{ url('/formProduct') }}" class="btn btn-secondary mb-3">Add Product</a>

    <a href="#" target="_blank" class="btn btn-success mb-3">Create Report</a>
    <div class="row">
        <table class="table table-light table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Measurement</th>
                    <th scope="col">Price</th>
                    <th scope="col">Supplier</th>                        
                    <th scope="col">Actions</th>
                    </tr>
            </thead>
            @foreach ($product as $item)
                <tbody>
                    <tr>
                        <th scope="row">{{ $item->name }}</th>
                        <td>{{ $item->measure }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->supplier }}</td>
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