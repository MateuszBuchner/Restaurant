@extends('layouts.mainAdmin')
@section('content')

<div class="main">
    <h1>Categories</h1>

    <div class="">
        <a class="btn btn-dark button-back" href="{{ route('admin.tables.index') }}" role="button">Powrót do karegori</a>

    </div>

    <div class="smal main">
        <form method="POST" action="{{ route('admin.tables.update', $table->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="form-label">Nazwa</label>
                <input class="form-control" type="text" name="name" value="{{ $table->name }}">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Ilość osób	</label>
                <input class="form-control" type="text" name="guest_number" value="{{ $table->guest_number }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Miejsce</label>
                <select class="form-control" id="exampleFormControlSelect1" name="location">
                    @foreach (App\Enums\TableLocation::cases() as $location)
                        <option value="{{ $location->value }}">{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="exampleFormControlSelect1" name="status">
                    @foreach (App\Enums\TableStatus::cases() as $status)
                        <option value="{{ $status->value }}">{{ $status->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
