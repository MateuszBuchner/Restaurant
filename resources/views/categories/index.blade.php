@extends('mainFront')
@section('content')

<section class="food_section layout_padding-bottom" id="section1">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Nasze Kategorie</h2>
        </div>

        <div class="d-flex flex-wrap-reverse" >
            @foreach ($categories as $category)
                <div class="p-2" style="width:33.33333333%">
                    <div class="col-sm-6 col-lg-4 all ">
                        <div class="box">
                            <div>
                                <div class="img-box">
                                    <a href="{{ route('categories.show', $category->id) }}">
                                        <img src="{{ asset('storage/' . $category->image) }}" alt="">
                                    </a>
                                </div>
                                <div class="detail-box">
                                    <h5>{{ $category->name }}</h5>
                                    <p>{{ $category->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
