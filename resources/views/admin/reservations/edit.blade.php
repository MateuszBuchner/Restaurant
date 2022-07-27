@extends('layouts.mainAdmin')
@section('content')

<div class="main">
    <h1>Menu</h1>

    <div class="">
        <a class="btn btn-dark button-back" href="{{ route('admin.reservations.index') }}" role="button">Powrót do karegori</a>
    </div>

    <div class="smal main">
        <form method="POST" action="{{ route('admin.reservations.update', $reservation->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="form-label">Nazwa</label>
                <input class="form-control" type="text" name="first_name" value="{{ $reservation->first_name }}">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Cena</label>
                <input class="form-control" type="text" name="last_name" value="{{ $reservation->last_name }}">
            </div>
            <div class="form-group">
                <label for="description">Opis</label>
                <textarea class="form-control" name="email" id="exampleFormControlTextarea1">{{ $reservation->email }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">Opis</label>
                <textarea class="form-control" name="phone" id="exampleFormControlTextarea1">{{ $reservation->phone }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">Opis</label>
                <textarea class="form-control" name="res_date" id="exampleFormControlTextarea1">{{ $reservation->res_date }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">Opis</label>
                <textarea class="form-control" name="table_id" id="exampleFormControlTextarea1">{{ $reservation->table_id }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">Opis</label>
                <textarea class="form-control" name="guest_number" id="exampleFormControlTextarea1">{{ $reservation->guest_number }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Aktualizuj</button>
        </form>
    </div>
</div>
@endsection
