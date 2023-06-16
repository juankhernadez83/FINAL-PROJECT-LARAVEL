@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('dynamic_body')
    <h1 class="text-center text-primary">Add Products</h1>

    <!-- haciendo un llamado al name de la ruta de saveCourse -->
    <form action="{{ route('saveProduct') }}" method="POST">
        <!-- solicitamos token para el envio de datos -->
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">

        <label for="">Select a measurement unit</label>
        <select name="measure" class="form-control">
            @foreach ($measure as $element)
                <option value="{{ $element->id }}">{{ $element->name }}</option>
            @endforeach
        </select>

        <label for="">Price</label>
        <input type="text" name="price" class="form-control">

        <label for="">Select a supplier</label>
        <select name="supplier" class="form-control">
            @foreach ($supplier as $elements)
                <option value="{{ $elements->id }}">{{ $elements->name }}</option>
            @endforeach
        </select>

        
        <input type="submit" class="btn btn-success mt-3" value="Guardar Datos">
    </form>
@endsection