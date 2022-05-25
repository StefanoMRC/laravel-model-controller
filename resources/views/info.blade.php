@extends('layout.layout')
@section('titolo')
    <h1 class="text-center py-5">Dettagli Film</h1>
@endsection
@section('cont')
<div class="d-flex justify-content-center">
    <div class="card mx-2 my-2 text-center" style="width: 18rem;">
        <div class="card-body">
          <h3 class="card-title">{{$movie -> title}}</h3>
          <h6 class="card-title">Titolo originale:{{$movie -> title}}</h6>
          <h6 class="card-title">Nazionalità:{{$movie -> nationality}}</h6>
          <h6 class="card-title">Data uscita:{{$movie -> date}}</h6>
          <h6 class="card-title">Votazione:{{$movie -> vote}}</h6>
          <a href="{{route('home')}}" class="btn btn-primary">torna alla home</a>
        </div>
    </div> 
</div>

    
@endsection