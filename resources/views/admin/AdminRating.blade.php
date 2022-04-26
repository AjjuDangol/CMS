@extends('layouts.main')
@section('content')
    <div class="container">
        {{-- Rating of users --}}
        <table class="table">
            <thead>
                <tr>
                    {{-- <th scope="col">Id</th> --}}
                    <th scope="col">Food</th>
                    <th scope="col">rating</th>
                    <th scope="col">review</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($ratings as $rating)
                    <tr>
                        {{-- <td>{{ $rating->id }} </td> --}}
                        <td>{{ $rating->item->itemName }}</td>
                        <td>{{ $rating->rating }}</td>
                        <td>{{ $rating->review }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>
@endsection
