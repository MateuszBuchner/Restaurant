@extends('layouts.mainAdmin')
@section('content')

<div class="main">
    <h1>Categories</h1>

    <div class="">
        <a class="btn btn-dark button-back" href="{{ route('admin.menus.index') }}" role="button">Powrót do karegori</a>

    </div>

    <div class="smal main">
        <form method="POST" action="{{ route('admin.menus.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Nazwa</label>
                <input class="form-control" type="text" name="name" placeholder="Podaj nazwe">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Cena</label>
                <input class="form-control" type="text" name="price" placeholder="Podaj cene">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label" >Zdjęcie</label>
                <input class="form-control" type="file" name="image" id="formFile">
              </div>
            <div class="form-group">
                <label for="description" >Opis</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kategoria</label>
                <select class="form-control" id="exampleFormControlSelect1" name="categories[]">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
