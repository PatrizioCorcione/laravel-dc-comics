@extends('layout.main')

@section('content')
  <div class="container my-5 ">

    <form action="{{ route('comics.store') }}" method='POST' class="row g-3">
      @csrf

      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Data di uscita</label>
        <input name='sale_date' type="text" class="form-control" id="inputPassword4">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Titolo</label>
        <input name='title' type="text" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Link immagine</label>
        <input name='thumb' type="text" class="form-control" id="inputPassword4">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Prezzo</label>
        <input name='price' type="text" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Generi</label>
        <input name='series' type="text" class="form-control" id="inputPassword4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Tipi</label>
        <input name='type' type="text" class="form-control" id="inputPassword4">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Disegnatori</label>
        <input name='artists' type="text" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Scrittori</label>
        <input name='writers' type="text" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12 input-group">
        <span class="input-group-text">Trama</span>
        <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Invia</button>
      </div>
    </form>

  </div>
@endsection
