@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('dynamic_body')
    <h1 class="text-center text-primary">Add Output</h1>

    <!-- haciendo un llamado al name de la ruta de saveCourse -->
    <form action="{{ route('saveInput') }}" method="POST">
        <!-- solicitamos token para el envio de datos -->
        @csrf
        <label for="">Select a product</label>
        <select name="product" class="form-control">
            @foreach ($product as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>

        <label for="">Quantity</label>
        <input type="text" name="quantity" class="form-control">

        <label for="">Date of Output</label>
        <input type="date" name="date_output" class="form-control">        

        
        <input type="submit" class="btn btn-success mt-3" value="Guardar Datos">
    </form>
@endsection