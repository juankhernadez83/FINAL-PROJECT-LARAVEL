@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('dynamic_body')
    <h1 class="text-center text-primary">Add Unit of Measurement</h1>

    <!-- haciendo un llamado al name de la ruta de saveCourse -->
    <form action="{{ route('saveMeasure') }}" method="POST">
        <!-- solicitamos token para el envio de datos -->
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">

      
        <input type="submit" class="btn btn-success mt-3" value="Guardar Datos">
    </form>
@endsection