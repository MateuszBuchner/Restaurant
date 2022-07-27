@extends('mainFront')
@section('content')

<section class="food_section layout_padding-bottom" id="section1">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Nasze Kategorie</h2>
        </div>
        <div class="d-flex flex-wrap-reverse" >
            @foreach ($category->menu as $menu)
                <div class="col-sm-6 col-lg-4 all ">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('storage/' . $menu->image) }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>{{ $menu->name }}</h5>
                                <p>{{ $menu->description }}</p>
                                <h6>{{ $menu->price }} PLN</h6>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
