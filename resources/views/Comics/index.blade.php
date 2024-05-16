@extends('layout.main')

@section('content')
  <h1>Fumettoni</h1>
  <div class="container">
    <div class="row">
      @forelse ($comics as $item)
        <div class="col">
          <div class="card index " style="width: 18rem;">
            <img src="{{ $item->thumb }}" class="card-img-top" alt="{{ $item->title }}">
            <div class="card-body d-flex flex-column justify-content-between ">
              <h5 class="card-title">{{ $item->title }}</h5>
              <p class="card-text">{{ $item->type }}</p>
              <p class="card-text">{{ $item->price }}</p>
              <div>
                <a href="{{ route('comics.show', $item->id) }}" class="btn btn-primary">vedi</a>
                <a href="#" class="btn btn-warning">cancella</a>
              </div>
            </div>
          </div>
        </div>
      @empty
        <h2>Nessun fumetto trovato</h2>
      @endforelse
    </div>
  </div>
@endsection
