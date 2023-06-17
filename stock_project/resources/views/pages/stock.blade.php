@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('dynamic_body')
<div class="container-fluid p-3 col-auto col-md"> 
    <h1 class="text-star text-black">Stock</h1>

    <!-- <a href="#" target="_blank" class="btn btn-success mb-3">Create Report</a> -->
    <div class="row">
    <table class="table table-striped">
            <thead>
                    <th scope="col">Input</th>
                    <th scope="col">Output</th>
                    <th scope="col">Total</th>
            </thead>
            <tbody>
            @foreach ($Dato as $item)
                    <tr>
                        <td>{{ $item->Conteo }}</td>
                        <td>{{ $item->Conteo2 }}</td>
                        <td>{{$item->Conteo - $item->Conteo2}}</td>
                    </tr>
            @endforeach
            </tbody>
        </table>
        
    </div>
</div>
@endsection