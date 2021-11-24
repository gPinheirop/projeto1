@extends('layouts.main')

@section('title', 'Projeto Laravel Para eventos')

@section('content')
        <h1>Testes com o blade</h1>
        <img src="/img/img01.png" alt="dinossauro do google">
        @if(10 > 5)
            <p>A condição é true</p>
        @endif
            <p>{{ $nome }}</p>
        @if($nome == "nomeAleatorio")
            <p>Seu nome é aleatorio</p>
        @else
            <p> Seu nome não é aleatorio, sendo ele {{$nome}} e possui {{$idade}} anos</p>
        @endif

        @for($i = 0 ; $i < count($arr); $i++)
            <p>{{$arr[$i]}}</p>
        @endfor
        
        @foreach($nomes as $nome)
            <p>{{$loop ->index}}</p>
            <p>{{$nome}}</p>
        @endforeach
        
        {{--Comentário do blade. Os mesmos não sã renderizados a view, ou seja não vão pro cliente--}}    
@endsection
