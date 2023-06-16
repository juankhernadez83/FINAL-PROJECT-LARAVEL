@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('dynamic_body')
    <h1 class="text-center text-primary">Add User</h1>

    <!-- haciendo un llamado al name de la ruta de saveCourse -->
    <form action="{{ route('saveAdmin') }}" method="POST">
        <!-- solicitamos token para el envio de datos -->
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">

        <label for="">Last name</label>
        <input type="text" name="last_name" class="form-control">

        <label for="">Phone</label>
        <input type="text" name="phone" class="form-control">

        <label for="">Password</label>
        <input type="text" name="password" class="form-control">

        <label for="">Email</label>
        <input type="text" name="email" class="form-control">

        <label for="">Select a rol</label>
        <select name="rol" class="form-control">
            @foreach ($rol as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>

        
        <input type="submit" class="btn btn-success mt-3" value="Guardar Datos">
    </form>
@endsection