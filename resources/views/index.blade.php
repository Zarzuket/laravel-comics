@extends('layout.base')

@section('Content')
   <section class="section_main">
       <div class="container">
           <div class="container_comics">
               @foreach ($comics as $comic)
               <div class="card">
                   <img class="card_img" src="{{$comic["thumb"]}}" alt="com.series">
                   <div class="card_title">
                     {{$comic["series"]}}
                   </div>
           </div>
            @endforeach
       </div>
       <button class="main_button">LOAD MORE</button>
    </section>
    <div class="container_info">
        <div class="container">
            <div class="container_img">
                <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                <div class="container_text">
                    <p>DIGITAL COMICS</p> 
                </div>
            </div>
            <div class="container_img">
                <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
                <div class="container_text">
                    <p>DC MERCHANDISE</p>
                </div>
            </div>
            <div class="container_img">
                <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
                
                <div class="container_text">
                    <p>SUBSCRIPTION</p> 
                </div>
            </div>
            <div class="container_img">
                <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
                <div class="container_text">
                    <p>COMIC SHOP LOCATOR</p> 
                </div>
            </div>
            <div class="container_img">
                <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
                <div class="container_text">
                    <p>DC POWER VISA</p> 
                </div>
            </div>
        </div>    
    </div>
@endsection