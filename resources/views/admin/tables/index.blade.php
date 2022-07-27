@extends('layouts.mainAdmin')
@section('content')


<div class="main">
    <h1>Stoliki</h1>

    <div class="">
        <a class="btn btn-dark" href="{{ route('admin.tables.create') }}" role="button">Nowa kategoria</a>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nr</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Ilość osób</th>
                <th scope="col">Status</th>
                <th scope="col">Miejsce</th>
                <th scope="col" id="table_akcja">Akcja</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($tables as $table )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $table->name }}</td>
                        <td>{{ $table->guest_number }}</td>
                        <td>{{ $table->status }}</td>
                        <td>{{ $table->location }}</td>
                        <td>
                            <a class="btn btn-dark" href="{{ route('admin.tables.edit', $table->id) }}" role="button">Edytuj</a>
                            <form method="POST" action="{{ route('admin.tables.destroy', $table->id) }}" onsubmit="return confirm('Na pewno chcesz usunąć?');">
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
