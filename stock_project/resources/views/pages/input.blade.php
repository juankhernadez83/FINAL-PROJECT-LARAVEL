@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('dynamic_body')
    <h1 class="text-center text-primary">Inputs</h1>

    <a href="{{ url('/formInput') }}" class="btn btn-secondary mb-3">Add Input</a>

    <a href="#" target="_blank" class="btn btn-success mb-3">Create Report</a>
    <div class="row">
        <table class="table table-light table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Date of Input</th>                    
                    <th scope="col">Actions</th>
                    </tr>
            </thead>
            @foreach ($input as $item)
                <tbody>
                    <tr>
                        <th scope="row">{{ $item->product }}</th>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->date_input }}</td>
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