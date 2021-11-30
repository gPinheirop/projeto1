@extends('layouts.main')

@section('title', 'Projeto Laravel Para eventos')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="procurar">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach($events as $event)

            <div class="card col-md-3">
                <img src="https://img.olhardigital.com.br/wp-content/uploads/2018/09/20180910170515-695x500.jpg" alt="{{$event->title}}">
                <div class="card-body">
                    <p class="card-date">29/11/2021</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participantes">X Participantes</p>
                    <a href="#" class="btn-btn-primary">Saber mais</a>
                </div>
            </div>

            @endforeach
        </div>
    </div>

@endsection
