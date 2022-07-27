@extends('layouts.mainAdmin')
@section('content')

<div class="main">
    <h1>Kategorie</h1>

    <div class="">
        <a class="btn btn-dark" href="{{ route('admin.categories.create') }}" role="button">Nowa kategoria</a>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nr</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Zdjęcie</th>
                <th scope="col">Opis</th>
                <th scope="col" id="table_akcja">Akcja</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $category->name }}</td>
                        <td><img class="image_index" src="{{ asset('storage/' . $category->image) }}"></td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a class="btn btn-dark" href="{{ route('admin.categories.edit', $category->id) }}" role="button">Edytuj</a>
                            <form method="POST" action="{{ route('admin.categories.destroy', $category->id) }}" onsubmit="return confirm('Na pewno chcesz usunąć?');">
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
