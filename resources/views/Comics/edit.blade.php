@extends('layout.main')

@section('content')
  <div class="container form">
    <form action="{{ route('comics.update', $comic) }}" method="POST" class="row g-3">
      @csrf
      @method('PUT')

      <div class="col-md-6">
        <label for="sale_date" class="form-label">Data di uscita</label>
        <input name="sale_date" type="date" class="form-control" id="sale_date" value="{{ $comic->sale_date }}">
      </div>

      <div class="col-md-6">
        <label for="title" class="form-label">Titolo</label>
        <input name="title" type="text" class="form-control" id="title" value="{{ $comic->title }}">
      </div>

      <div class="col-md-6">
        <label for="thumb" class="form-label">Link immagine</label>
        <input name="thumb" type="text" class="form-control" id="thumb" value="{{ $comic->thumb }}">
      </div>

      <div class="col-md-6">
        <label for="price" class="form-label">Prezzo</label>
        <input name="price" type="text" class="form-control" id="price" value="{{ $comic->price }}">
      </div>

      <div class="col-md-6">
        <label for="series" class="form-label">Generi</label>
        <input name="series" type="text" class="form-control" id="series" value="{{ $comic->series }}">
      </div>

      <div class="col-md-6">
        <label for="type" class="form-label">Tipi</label>
        <input name="type" type="text" class="form-control" id="type" value="{{ $comic->type }}">
      </div>

      <div class="col-md-6">
        <label for="artists" class="form-label">Disegnatori(separare con la virgola)</label>
        <input name="artists" type="text" class="form-control" id="artists" value="{{ $comic->artists }}">
      </div>

      <div class="col-md-6">
        <label for="writers" class="form-label">Scrittori(separare con la virgola)</label>
        <input name="writers" type="text" class="form-control" id="writers" value="{{ $comic->writers }}">
      </div>

      <div class="col-12 input-group">
        <span class="input-group-text">Trama</span>
        <textarea name="description" class="form-control" id="description" aria-label="With textarea">{{ $comic->description }}</textarea>
      </div>

      <div class="col-12">
        <button class="btn btn-primary" type="submit">Invia</button>
      </div>
    </form>
  </div>
@endsection
