@extends('layouts/layout')
@section('content')
    <div id="teenTitans"><div id="currentSeries">CURRENT SERIES</div></div>
    <div id="cards">
        @foreach ($carte as $card)
            <div id="carta">
                <img src="{{$card['thumb']}}" alt="{{$card['type']}}">
                <h2>{{ $card['series'] }}</h2>
          </div>
        @endforeach
        <button id="load">LOAD MORE</button>  
    </div>
    <div id="collectibles">
        <div id="item"><img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="errore"><span>DIGITAL COMICS</span></div>
        <div id="item"><img src="{{asset('images/buy-comics-merchandise.png')}}" alt="errore"><span>DC MERCHANDISE</span></div>
        <div id="item"><img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="errore"><span>SUBSCRIPTION</span></div>
        <div id="item"><img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="errore"><span>COMIC SHOP LOCATOR</span></div>
        <div id="item"><img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="errore"><span>DC POWER VISA</span></div>
    </div>
@endsection