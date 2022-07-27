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
        <form method="POST" action="{{ route('admin.reservations.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Imie</label>
                <input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" placeholder="Podaj nazwe">
                @error('first_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Nazwisko</label>
                <input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" placeholder="Podaj nazwe">
                @error('first_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="Podaj nazwe">
                @error('first_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Telefon</label>
                <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" placeholder="Podaj nazwe">
                @error('first_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Stolik</label>
                <select class="form-control" id="table_id" name="table_id">
                    @foreach ($tables as $table)
                        <option value="{{ $table->id }}">{{ $table->name }} Liczba miejsc: {{ $table->guest_number }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name" class="form-label">liczba gości</label>
                <input class="form-control @error('guest_number') is-invalid @enderror" type="text" name="guest_number" placeholder="Podaj nazwe">
                @error('first_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Data rezerwacji</label>
                <div class="mt-1">
                    <input type="datetime-local" id="res_date" name="res_date" class="data @error('res_date') is-invalid @enderror"/>
                    @error('first_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @error('res_date')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
