@extends('layouts.mainAdmin')
@section('content')

<div class="main">
    <h1>Categories</h1>

    <div class="">
        <a class="btn btn-dark button-back" href="{{ route('admin.reservation.index') }}" role="button">Powrót do karegori</a>

    </div>

    <div class="smal main">
        <form>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Default input">
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>

@endsection
