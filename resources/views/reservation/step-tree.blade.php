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
                        <form id="msform" method="POST" action="">
                        @csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Krok pierwszy</strong></li>
                                <li class="active" id="payment"><strong>Krok drugi</strong></li>
                                <li class="active" id="confirm"><strong>Rezerwacja</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Twoja rezerwacja została zakończona pomyślnie</label>
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
