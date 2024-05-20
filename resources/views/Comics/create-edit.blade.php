@extends('layout.main')

@section('content')
  <div class="container form">
    {{-- @if ($errors->any())
        <div class="alert alert-danger " role='alert'>
          <ul>
            @foreach ($errors->all() as $item)
              <li>{{ $item }}</li>
            @endforeach
          </ul>
        </div>
      @endif --}}
    <form action={{ $route }} method="POST" class="row g-3">
      @csrf
      @method($method)

      <div class="col-md-6 m-0">
        <label for="sale_date" class="form-label">Data di uscita</label>
        <input name="sale_date" type="date"
          class="form-control
        @error('sale_date')
        is-invalid
        @enderror" id="sale_date"
          value="{{ old('sale_date', $comic?->sale_date) }}">
        @error('sale_date')
          <small>{{ $message }}</small>
        @enderror
      </div>

      <div class="col-md-6 m-0">
        <label for="title" class="form-label">Titolo</label>
        <input name="title" type="text"
          class="form-control
        @error('title')
          is-invalid
        @enderror" id="title"
          value="{{ old('title', $comic?->title) }}">
        @error('title')
          <small>{{ $message }}</small>
        @enderror
      </div>

      <div class="col-md-6 m-0">
        <label for="thumb" class="form-label">Link immagine</label>
        <input name="thumb" type="text" class="form-control @error('thumb')
        is-invalid
        @enderror"
          id="thumb" value="{{ old('thumb', $comic?->thumb) }}">
        @error('thumb')
          <small>{{ $message }}</small>
        @enderror
      </div>

      <div class="col-md-6 m-0">
        <label for="price" class="form-label">Prezzo</label>
        <input name="price" type="text" class="form-control @error('price')
        is-invalid
        @enderror"
          id="price" value="{{ old('price', $comic?->price) }}">
        @error('price')
          <small>{{ $message }}</small>
        @enderror
      </div>

      <div class="col-md-6 m-0">
        <label for="series" class="form-label">Generi</label>
        <input name="series" type="text" class="form-control @error('series')
        is-invalid
        @enderror"
          id="series" value="{{ old('series', $comic?->series) }}">
        @error('series')
          <small>{{ $message }}</small>
        @enderror
      </div>

      <div class="col-md-6 m-0">
        <label for="type" class="form-label">Tipi</label>
        <input name="type" type="text" class="form-control @error('type')
        is-invalid
        @enderror"
          id="type" value="{{ old('type', $comic?->type) }}">
        @error('type')
          <small>{{ $message }}</small>
        @enderror
      </div>

      <div class="col-md-6 m-0">
        <label for="artists" class="form-label">Disegnatori (separare con la virgola)</label>
        <input name="artists" type="text" class="form-control @error('artists')
        is-invalid
        @enderror"
          id="artists" value="{{ old('artists', $comic?->artists) }}">
        @error('artists')
          <small>{{ $message }}</small>
        @enderror
      </div>

      <div class="col-md-6 m-0">
        <label for="writers" class="form-label">Scrittori (separare con la virgola)</label>
        <input name="writers" type="text" class="form-control @error('writers')
        is-invalid
        @enderror"
          id="writers" value="{{ old('writers', $comic?->writers) }}">
        @error('writers')
          <small>{{ $message }}</small>
        @enderror
      </div>

      <div class="col-12 input-group">
        <span class="input-group-text">Trama</span>
        <textarea name="description" class="form-control @error('description')
        is-invalid
        @enderror"
          id="description" aria-label="With textarea">{{ old('description', $comic?->description) }}</textarea>
      </div>
      @error('description')
        <small>{{ $message }}</small>
      @enderror

      <div class="col-12">
        <button class="btn btn-primary" type="submit">Invia</button>
      </div>
    </form>
  </div>
@endsection
