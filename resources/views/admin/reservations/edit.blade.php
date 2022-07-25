@extends('layouts.mainAdmin')
@section('content')

<div class="main">
    <h1>Menu</h1>

    <div class="">
        <a class="btn btn-dark button-back" href="{{ route('admin.reservation.index') }}" role="button">Powrót do karegori</a>
    </div>

    <div class="smal main">
        <form method="POST" action="{{ route('admin.reservation.update', $menu->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="form-label">Nazwa</label>
                <input class="form-control" type="text" name="name" value="{{ $menu->name }}">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Cena</label>
                <input class="form-control" type="text" name="price" value="{{ $menu->price }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label" >Zdjęcie</label>
                <input class="form-control" type="file" name="image" id="formFile" src="{{ asset('storage/' . $menu->image) }}">
                <img class="image_index" src="{{ asset('storage/' . $menu->image) }}">
            </div>
            <div class="form-group">
                <label for="description" >Opis</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1">{{ $menu->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kategoria</label>
                <select class="form-control" id="exampleFormControlSelect1" name="categories[]">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @selected($menu->categories->contains($category))>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Aktualizuj</button>
        </form>
    </div>
</div>
@endsection
