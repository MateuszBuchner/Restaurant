@extends('layouts.mainAdmin')
@section('content')


<div class="main">
    <h1>Categories</h1>

    <div class="">
        <a class="btn btn-dark" href="{{ route('admin.categories.create') }}" role="button">Nowa kategoria</a>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nr</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Handle</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category )
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $category->name }}</td>
                        <td><img class="image_index" src="{{ asset('storage/' . $category->image) }}"></td>
                        <td>{{ $category->description }}</td>
                        <td><a class="btn btn-dark" href="{{ route('admin.categories.edit', $category->id) }}" role="button">Edytuj</a></td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection
