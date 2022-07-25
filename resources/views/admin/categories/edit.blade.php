@extends('layouts.mainAdmin')
@section('content')

<div class="main">
    <h1>Categories Edit</h1>

    <div class="">
        <a class="btn btn-dark button-back" href="{{ route('admin.categories.index') }}" role="button">Powrót do karegori</a>

    </div>

    <div class="smal main">
        <form method="POST" action="{{ route('admin.categories.update',$category->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="form-label">Default file input example</label>
                <input class="form-control" type="text" name="name" value="{{ $category->name }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label" >Default file input example</label>
                <input class="form-control" type="file" name="image" id="formFile" src="{{ asset('storage/' . $category->image) }}">
            </div>
            <div class="form-group">
                <label for="description" >Example textarea</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1">{{ $category->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary" >Submit</button>
        </form>
    </div>
</div>
@endsection
