@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('dynamic_body')
<div class="container-fluid p-3 col-auto col-md"> 
    <h1 class="text-center text-primary">Unit of measurement</h1>

    <a href="{{ url('/formMeasure') }}" class="btn btn-secondary mb-3">Add unit of measurement</a>

    <a href="#" target="_blank" class="btn btn-success mb-3">Create Report</a>
    <div class="row">
        <table class="table table-light table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Unit of measurement</th>                     
                    <th scope="col">Actions</th>
                    </tr>
            </thead>
            @foreach ($measure as $item)
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
</div>
@endsection