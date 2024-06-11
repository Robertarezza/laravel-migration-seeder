@extends('layouts.app')

@section('content')
    <h1 class="text-center m-5">Home page Train</h1>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Compagnia</th>
            <th scope="col">Stazione di Partenza</th>
            <th scope="col">Orario di Partenza</th>
            <th scope="col">Giono di Partenza</th>
            <th scope="col">Stazione di Arrivo</th>
            <th scope="col">Orario di Arrivo</th>
            <th scope="col">Giorno di Arrivo</th>
            <th scope="col">Numero Treno</th>
            <th scope="col">Numero di carrozze</th>
            <th scope="col">In Orario</th>
            <th scope="col">Cancellato</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($trainList as $train)
        <tr>
            <th scope="row">{{ $train->id }}</th>
            <td>{{ $train->company }}</td>
            <td>{{ $train->departure_station }}</td>
            <td>{{ $train->arrival_station }}</td>
            <td>{{ $train->departure_time }}</td>
            <td>{{ $train->departure_date }}</td>
            <td>{{ $train->arrival_time }}</td>
            <td>{{ $train->arrival_date }}</td>
            <td>{{ $train->train_code }}</td>
            <td>{{ $train->number_of_carriages }}</td>
            <td>{{ $train->on_time ? 'Yes' : 'No' }}</td>
            <td>{{ $train->cancelled ? 'Yes' : 'No' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection