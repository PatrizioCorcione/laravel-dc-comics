@extends('layout.main')

@section('content')
  <div class="container-fluid">

    <div class="container index ">
      @if (session('deleted'))
        <div class="alert alert-primary" role='alert'>
          {{ session('deleted') }}
        </div>
      @endif
      <div class="row">
        @forelse ($comics as $item)
          <div class="col my-3 ">
            <div class="card index-card position-relative ">
              <img src="{{ $item->thumb }}" class="card-img-top" alt="{{ $item->title }}">
              <div class="absolut-index">
                <a href="{{ route('comics.show', $item->id) }}" class="btn btn-primary index-btn"><i
                    class="fa-solid fa-eye"></i></a>
                <a href="{{ route('comics.edit', $item->id) }}" class="btn btn-warning index-btn"><i
                    class="fa-solid fa-pencil"></i></a>
                <form class="d-inline-block" action="{{ route('comics.destroy', $item->id) }}" method="POST"
                  onsubmit="return confirm('Sei sicuro di voler eliminare questo fumetto ?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger  index-btn"><i
                      class="fa-solid fa-circle-xmark"></i></button>
                </form>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $item->title }}</h5>
                <p class="card-text">{{ $item->type }}</p>
                <p class="card-text">{{ $item->price }}</p>
              </div>
            </div>
          </div>
        @empty
          <h2>Nessun fumetto trovato</h2>
        @endforelse
      </div>
    </div>
  </div>
@endsection
