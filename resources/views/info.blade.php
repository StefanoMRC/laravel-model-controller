@extends('layout.layout')
@section('cont')
<div class="card mx-2 my-2 m-auto" style="width: 18rem;">
    <div class="card-body">
      <h3 class="card-title">{{$movie -> title}}</h3>
      <h6 class="card-title">Titolo originale:{{$movie -> title}}</h6>
      <h6 class="card-title">Nazionalità:{{$movie -> nationality}}</h6>
      <h6 class="card-title">Data uscita:{{$movie -> date}}</h6>
      <h6 class="card-title">Votazione:{{$movie -> vote}}</h6>
      <a href="{{route('home')}}" class="btn btn-primary">torna alla home</a>
    </div>
</div> 
    
@endsection