@extends('layouts.app')
@section('title',$event['title'])
@section('styles')
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="../css/show/navbar.css">
<link rel="stylesheet" href="../css/show/show.css">
<link rel="stylesheet" href="../css/globals.css">
<link rel="stylesheet" href="/fontawesome/css/all.css" >
@endsection
@section('content')
<section class='event_section'>
    <div class="event_thumb">
        @if($event['image']!='')    
            <img src="{{asset('storage/'.$event->image)}}" alt="{{$event['title']}}">
        @else    
            <img src="/assets/media.jpg" alt="{{$event['title']}}">
        @endif
    </div>
    <div class="event_details">
        <h1 class='event_title'>{{$event['title']}}</h1>
        <p class='event_city'><i class="fas fa-map-marker-alt"></i> {{$event['city']}}</p>
        <p class='event_owner'><i class="fas fa-user"></i> Dono do evento</p>
        <p>{{$event['description']}}</p>
    </div>
    <a href="index.php" class="event_button" >Participar</a>
    <div class='event_items'>
        @if($event->items !='')
            <h3>O evento contará com:</h3>
            @foreach($event->items as $item)
                <p class="item">
                    <i class='fas fa-play'></i> {{$item}}
                </p>
            @endforeach
        @endif
    </div>
</section>
@endsection