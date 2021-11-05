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
   </section>
@endsection