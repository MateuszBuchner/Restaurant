@extends('layouts.mainAdmin')
@section('content')

<div class="main">
    <h1>Menu</h1>

    <div class="">
        <a class="btn btn-dark button-back" href="{{ route('admin.menus.index') }}" role="button">Powrót do karegori</a>

    </div>

    <div class="smal main">
        <form method="POST" action="{{ route('admin.menus.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Nazwa</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Podaj nazwe">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Cena</label>
                <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" placeholder="Podaj cene">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image" class="form-label" >Zdjęcie</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="formFile">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description" >Opis</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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
