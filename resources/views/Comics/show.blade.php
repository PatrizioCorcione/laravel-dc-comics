@extends('layout.main')

@section('content')
  <div class="container show ">
    <div class="row">
      <div class="col">
        <img class=" show-img" src="{{ $comic->thumb }}" alt={{ $comic->title }}>
      </div>
      <div class="col text-center ">
        <h3>
          Trama

          <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning "><i class="fa-solid fa-pencil"></i></a>
          <form class="d-inline-block " action="{{ route('comics.destroy', $comic->id) }}" method="POST"
            onsubmit="return confirm('Sei sicuro di voler eliminare questo fumetto ?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></button>
          </form>
        </h3>
        <h3>{{ $comic->title }}</h3>
        <p>{{ $comic->description }}</p>
        <h3>Generi</h3>
        <p>{{ $comic->series }}</p>
        <h3>Artisti e scrittori</h3>
        @php
          $artist_array = explode(',', $comic->artists);
          $writesr_array = explode(',', $comic->writers);
        @endphp
        <div class="d-flex justify-content-center">
          <ul class="list-unstyled  mx-2">
            @foreach ($artist_array as $item)
              <li>{{ $item }}</li>
            @endforeach
          </ul>
          <ul class="list-unstyled  mx-2">
            @foreach ($writesr_array as $item)
              <li>{{ $item }}</li>
            @endforeach
          </ul>
        </div>
        <h3>Data di vendita</h3>
        <p>{{ $comic->sale_date }}</p>
      </div>
    </div>
  </div>
@endsection
