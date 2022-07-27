@extends('layouts.mainAdmin')
@section('content')

<div class="main">
    <h1>Rezerwacje</h1>

    <div class="">
        <a class="btn btn-dark" href="{{ route('admin.reservations.create') }}" role="button">Nowa kategoria</a>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nr</th>
                <th scope="col">Imie</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">email</th>
                <th scope="col">Telefon</th>
                <th scope="col">Data rezerwacji</th>
                <th scope="col">Numer stolika</th>
                <th scope="col">Numer klienta</th>
                <th scope="col" id="table_akcja">Akcja</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $reservation->first_name	 }}</td>
                        <td>{{ $reservation->last_name }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->phone }}</td>
                        <td>{{ $reservation->res_date }}</td>
                        <td>{{ $reservation->table->name  ?? 'Brak Stolika' }}</td>
                        <td>{{ $reservation->guest_number }}</td>
                        <td>
                            <a class="btn btn-dark" href="{{ route('admin.reservations.edit', $reservation->id) }}" role="button">Edytuj</a>
                            <form method="POST" action="{{ route('admin.reservations.destroy', $reservation->id) }}" onsubmit="return confirm('Na pewno chcesz usunąć?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" role="button">Usuń</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection
