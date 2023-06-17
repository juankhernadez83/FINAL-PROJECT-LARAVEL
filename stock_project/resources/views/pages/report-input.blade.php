@extends('template')

@section('dynamic_body')

    <h1 class="text-center text-primary" style="margin: 25px;">Inputs Report</h1>

    <h2 class="text-secondary">List of inputs by date</h2>

    <div class="row">

        @foreach ($dates as $itemDate)

            <h3 class="text-info" style="margin-top: 40px;">{{ $loop->index + 1 }}. Date: {{ $itemDate->date }} </h3>
            
            <table class="table table-light table-striped table-hover">

                <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>

                @foreach ($input as $item)
                    @if($itemDate->date == $item->date_input)
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $item->product }}</th>
                                    <td>{{ $item->quantity }}</td>
                                </tr>
                            </tbody>
                    @endif
                @endforeach

            </table>

            <p class="text-center"> Total inputs : {{$dates[$loop->index]->total}}</p>
        @endforeach

    </div>

@endsection