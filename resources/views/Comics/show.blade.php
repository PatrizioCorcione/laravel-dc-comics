@extends('layout.main')

@section('content')
  <div class="container show ">
    <div class="row">
      <div class="col">
        <img class=" show-img" src="{{ $comic->thumb }}" alt={{ $comic->title }}>
      </div>
      <div class="col">
        <h3>Trama</h3>
        <p>{{ $comic->description }}</p>
        <h3>Generi</h3>
        <p>{{ $comic->series }}</p>
        <h3>Artisti e scrittori</h3>
        <p>{{ $comic->artists }}</p>
        <p>{{ $comic->writers }}</p>
        <h3>Data di vendita</h3>
        <p>{{ $comic->sale_date }}</p>
      </div>
    </div>
  </div>
@endsection
