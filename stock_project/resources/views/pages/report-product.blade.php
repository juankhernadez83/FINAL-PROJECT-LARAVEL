@extends('template')

@section('dynamic_body')

    <h1 class="text-center text-primary" style="margin: 25px;"> Products Report </h1>

    @php
        $top = ($product->count() >= 5) ? 5 : $product->count();
    @endphp

    <div class="row">
    
        <h3 class="text-info" style="margin-top: 40px;"> 1. Top 5 products with the highest price</h3>
        
        <table class="table table-light table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Measurement</th>
                    <th scope="col">Price</th>
                    <th scope="col">Supplier</th>  
                    </tr>
            </thead>

            <tbody>
                @for( $i=0; $i<$top; $i++)
                    <tr>
                        <th scope="row">{{ $product[$i]->name }}</th>
                        <td>{{ $product[$i]->measure }}</td>
                        <td>{{ $product[$i]->price }}</td>
                        <td>{{ $product[$i]->supplier }}</td>
                    </tr>
                @endfor
            </tbody>

        </table>
    </div>

    <div class="row">
    
        <h3 class="text-info" style="margin-top: 40px;"> 2. Top 5 products with the lowest price</h3>
        
        <table class="table table-light table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Measurement</th>
                    <th scope="col">Price</th>
                    <th scope="col">Supplier</th>  
                    </tr>
            </thead>

            <tbody>
                @for( $i=$top-1; $i>=0; $i--)
                    <tr>
                        <th scope="row">{{ $product[$i]->name }}</th>
                        <td>{{ $product[$i]->measure }}</td>
                        <td>{{ $product[$i]->price }}</td>
                        <td>{{ $product[$i]->supplier }}</td>
                    </tr>
                @endfor
            </tbody>

        </table>
    </div>

    <div class="row">

        <h3 class="text-info" style="margin-top: 40px;"> List of products ordered by price </h3>
            
        <table class="table table-light table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Measurement</th>
                    <th scope="col">Price</th>
                    <th scope="col">Supplier</th>  
                    </tr>
            </thead>
            @foreach ($product as $item)
                <tbody>
                    <tr>
                        <th scope="row">{{ $item->name }}</th>
                        <td>{{ $item->measure }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->supplier }}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>

        <p class="text-center"> Total products : {{$product->count()}} </p>

    </div>

@endsection