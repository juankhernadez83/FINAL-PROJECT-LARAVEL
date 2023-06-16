@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('dynamic_body')
<div class="container-fluid p-3 col-auto col-md"> 
    <h1 class="text-star text-black">Stock</h1>

    <a href="#" target="_blank" class="btn btn-success mb-3">Create Report</a>
    <div class="row">
        <table class="table table-light table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Product</th> 
                    <th scope="col">Total</th>
                </tr>
            </thead>
            @foreach ($stock as $item)
                <tbody>
                    <tr>
                        <th scope="row">{{ $item->product }}</th>
                        <td>{{ $item->total }}</td>
                        
                    </tr>
                </tbody>
            @endforeach
        </table>
        
    </div>
</div>
@endsection