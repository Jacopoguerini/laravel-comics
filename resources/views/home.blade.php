@extends('layouts.main')

@section('main-content')
    <div class="container container-flex">
        <span class="label">current series</span>

            @foreach ($comics as $item)
            <div class="series">
                <img src="{{ $item["thumb"] }}" alt="{{ $item["title"] }}">
                <h2>{{ $item["title"] }}</h2>
            </div>
            @endforeach

        <span class="load">load more</span>
    </div>

    <section class="main-section">
        <div class="container">

            <div class="column">
                <img src="{{ asset("../img/buy-comics-digital-comics.png") }}" alt=""/>
                <a href="#">buy digital comics</a>
            </div>
            <div class="column">
                <img src="{{ asset("../img/buy-comics-merchandise.png") }}" alt=""/>
                <a href="#">dc merchandise</a>
            </div>
            <div class="column">
                <img src="{{ asset("../img/buy-comics-subscriptions.png") }}" alt=""/>
                <a href="#">subscription</a>
            </div>
            <div class="column">
                    <img src="{{ asset("../img/buy-comics-shop-locator.png") }}" alt=""/>
                    <a href="#">comic shop locator</a>
            </div>
            <div class="column">
                <img src="{{ asset("../img/buy-dc-power-visa.svg") }}" alt=""/>
                <a href="#">dc power visa</a>
            </div>                    
        </div>   
    </section>
@endsection