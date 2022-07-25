@extends('layouts.mainAdmin')
@section('content')


<div class="main">
    <h1>Menu</h1>

    <div class="">
        <a class="btn btn-dark" href="{{ route('admin.menus.create') }}" role="button">Nowa kategoria</a>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nr</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Cena</th>
                <th scope="col">Kategoria</th>
                <th scope="col">Zdjęcie</th>
                <th scope="col">Opis</th>
                <th scope="col">Akcja</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $menu->name }}</td>
                        <td>{{ $menu->price }}</td>
                        <td>{{ $menu->ca }}</td>
                        <td><img class="image_index" src="{{ asset('storage/' . $menu->image) }}"></td>
                        <td>{{ $menu->description }}</td>
                        <td>
                            <a class="btn btn-dark" href="{{ route('admin.menus.edit', $menu->id) }}" role="button">Edytuj</a>
                            <form method="POST" action="{{ route('admin.menus.destroy', $menu->id) }}" onsubmit="return confirm('Na pewno chcesz usunąć?');">
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
