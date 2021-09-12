@extends('layouts.main')
@section('title',"events")
@section('styles')
<link rel="stylesheet" href="/css/reset.css">
<link rel="stylesheet" href="/css/navbar.css">
<link rel="stylesheet" href="/css/globals.css">
<link rel="stylesheet" href="/css/fw/css/all.css" >
@endsection
@section('content')

<link rel="stylesheet" href="css/home.css">
<section id="Home">
    <div id="search-container">
        <h2 class='search-title'>
            Busque um evento
        </h2>
        <form action="/" method="GET">
            <input type="text" id='search' name='search' class='' placeholder='procurar...'>  
            <input id="search_btn" value="Pesquisar" type="submit">
        </form>
    </div>
    <section class="events-section">
        @if($search && count($events)==0)
            <h2 class="events-section_title">
                Não foi possível encontrar por {{$search}}!
            </h2>
            <h2>
                <a href="/">Voltar</a>
            </h2>
        @elseif($search)
            <h2 class="events-section_title">
                    Resultados para {{$search}}:
            </h2>
            <br>
        @else
            <h2 class="events-section_title">
                Todos os eventos
            </h2>
            <br>
        @endif

        
        <div class="events-container">
        @foreach($events as $event)
        <div class='event-card'>
            <div class="event-card_media">
                @if($event['image']!='')
                
                    <img src="{{asset('storage/'.$event->image)}}" alt="{{$event['title']}}">
                @else    
                    <img src="/assets/media.jpg" alt="{{$event['title']}}">
                @endif
            </div>
            <h2 class="event-card_title">
                {{$event['title']}}
            </h2>
            <span class='event-card_city'>
                <i class="fas fa-map-marker-alt"></i>
                {{$event['city']}}
            </span>
            <p class='event-card_description'>
                {{$event['description']}}
            </p>
            <a class ='event-card_see-more' href="/event/{{$event['id']}}">
                Veja mais
            </a>
        </div>
        @endforeach
        </div>
    </section>
</section>

@stop