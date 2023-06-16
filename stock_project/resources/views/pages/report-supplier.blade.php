@extends('template')

@section('dynamic_body')

    <h1 class="text-center text-primary" style="margin: 25px;">Suppliers Report</h1>

    <h2 class="text-secondary">List of products by supplier</h2>

    <div class="row">

        @foreach ($supplier as $itemSupplier)

            <h3 class="text-info" style="margin-top: 40px;">{{ $loop->index + 1 }}. Supplier: {{ $itemSupplier->name }} {{ $itemSupplier ->last_name }}</h3>
            
            <table class="table table-light table-striped table-hover">

                <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Measurement</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>

                @foreach ($products as $item)
                    @if($item->id_supplier == $itemSupplier->id)
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $item->name }}</th>
                                    <td>{{ $item->measure }}</td>
                                    <td>{{ $item->price }}</td>
                                </tr>
                            </tbody>
                    @endif
                @endforeach

            </table>

            <p class="text-center"> Total of different products : {{$totals[$loop->index]->total}}</p>
        @endforeach

    </div>

@endsection