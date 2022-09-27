@extends('mainFront')
@section('content')

<section class="food_section layout_padding-bottom" id="section1">
    <div class="container">

    <div class="d-flex flex-wrap">
        <div class="p-2"style="width:50%">
            <div class="img-box2">
                <img src="{{ asset('libs/web/images/about-img.png') }}" id="img-res" alt="">
            </div>
        </div>
        <div class="p-2"style="width:50%">
            <div class="card px-0 pb-0 mt-3 mb-3">
                <h2 id="make-res"><strong>Stwórz rezerwacje</strong></h2>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form method="POST" action="{{ route('reservation.step-one') }}" id="msform">
                        @csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Krok pierwszy</strong></li>
                                <li id="payment"><strong>Payment</strong></li>
                                <li id="confirm"><strong>Krok pierwszy</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card shadow-lg p-3 mb-5 bg-body rounded">
                                    <div class="form-group">
                                        <input class="form-control" id="halo" type="text" name="first_name" placeholder="Podaj Imie" value="{{ $reservation->first_name ?? ''  }}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="last_name" placeholder="Podaj Nazwisko" value="{{ $reservation->last_name ?? ''  }}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="Podaj Email" value="{{ $reservation->email ?? ''  }}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="phone" placeholder="Podaj Telefon" value="{{ $reservation->phone ?? ''  }}">
                                    </div>
                                    <div class="form-group">
                                        <div class="mt-1">
                                            <input type="datetime-local" id="res_date" name="res_date" class="data @error('res_date') is-invalid @enderror "min="{{ $min_date->format('Y-m-d\TH:i:s') }}" max="{{ $max_date->format('Y-m-d\TH:i:s') }}" value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}">
                                            @error('first_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            @error('res_date')
                                                <div class="text-sm text-red-400">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="guest_number" placeholder="Podaj Liczbe Gości" value="{{ $reservation->guest_number ?? ''  }}">
                                    </div>

                                    <button type="submit" class="btn step-upd">Aktualizuj</button>

                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Payment Information</h2>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="make_payment" class="next action-button" value="Confirm"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



@endsection
