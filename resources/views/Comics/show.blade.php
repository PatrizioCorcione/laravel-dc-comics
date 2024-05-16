@extends('layout.main')

@section('content')
  <div class="container my-5 ">
    <div class="row">
      <div class="col">
        <img class=" show-img" src="{{ $comic->thumb }}" alt={{ $comic->title }}>
      </div>
      <div class="col">
        <h5>Trama</h5>
        <p>{{ $comic->description }}</p>
        <h5>Generi</h5>
        <p>{{ $comic->series }}</p>
        <h5>Artisti e scrittori</h5>
        <p>{{ $comic->artists }}</p>
        <p>{{ $comic->writers }}</p>
        <h5>Data di vendita</h5>
        <p>{{ $comic->sale_date }}</p>
      </div>
    </div>
  </div>
@endsection
