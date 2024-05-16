@extends('layout.main')

@section('content')
  <div class="container my-5 ">
    <div class="row">
      @forelse ($comics as $item)
        <div class="col my-3 ">
          <div class="card index " style="width: 18rem;">
            <img src="{{ $item->thumb }}" class="card-img-top" alt="{{ $item->title }}">
            <div class="card-body d-flex flex-column justify-content-between ">
              <h5 class="card-title">{{ $item->title }}</h5>
              <p class="card-text">{{ $item->type }}</p>
              <p class="card-text">{{ $item->price }}</p>
              <div>
                <a href="{{ route('comics.show', $item->id) }}" class="btn btn-primary"><i
                    class="fa-solid fa-eye"></i></a>
                <a href="#" class="btn btn-danger "><i class="fa-solid fa-circle-xmark"></i></a>
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
