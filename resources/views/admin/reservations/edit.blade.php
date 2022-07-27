@extends('layouts.mainAdmin')
@section('content')

    @if (session()->has('warning2'))
    <div class="alert alert-warning" role="alert">
        <span>{{ session()->get('warning2') }}</span>
    </div>
    @endif

<div class="main">
    <h1>Menu</h1>

    <div class="">
        <a class="btn btn-dark button-back" href="{{ route('admin.reservations.index') }}" role="button">Powrót do karegori</a>
    </div>

    <div class="smal main">
        <form method="POST" action="{{ route('admin.reservations.update', $reservation->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="form-label">Imie</label>
                <input class="form-control" type="text" name="first_name" value="{{ $reservation->first_name }}">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Nazwisko</label>
                <input class="form-control" type="text" name="last_name" value="{{ $reservation->last_name }}">
            </div>
            <div class="form-group">
                <label for="description">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{ $reservation->email }}">
            </div>
            <div class="form-group">
                <label for="description">Telefon</label>
                <textarea class="form-control" name="phone" id="exampleFormControlTextarea1">{{ $reservation->phone }}</textarea>
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Data rezerwacji</label>
                <div class="mt-1">
                    <input type="datetime-local" id="res_date" name="res_date" class="data @error('res_date') is-invalid @enderror" value="{{ $reservation->res_date }}"/>
                    @error('first_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @error('res_date')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="description">Stolik</label>
                <select class="form-control" id="table_id" name="table_id">
                    @foreach ($tables as $table)
                        <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>{{ $table->name }}
                            ({{ $table->guest_number }} Liczba miejsc)
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="description">Liczba gości</label>
                <textarea class="form-control" name="guest_number" id="exampleFormControlTextarea1">{{ $reservation->guest_number }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Aktualizuj</button>
        </form>
    </div>
</div>
@endsection
