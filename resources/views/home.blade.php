@extends('layout.main')

@section('content')
  <table class="table table-striped table-light  my-3">
    <thead>
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Serie</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Data di uscita</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comics as $comic)
        <tr>
          <td>{{ $comic['title'] }}</td>
          <td>{{ $comic['series'] }}</td>
          <td>{{ $comic['price'] }}</td>
          <td>{{ $comic['sale_date'] }}</td>
          <td>
            <div>
              <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary "><i class="fa-solid fa-eye"></i></a>
              <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning "><i
                  class="fa-solid fa-pencil"></i></a>
              <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id) }}" method="POST"
                onsubmit="return confirm('Sei sicuro di voler eliminare questo fumetto ?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger  "><i class="fa-solid fa-circle-xmark "></i></button>
              </form>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="container">
    {{ $comics->links() }}
  </div>
  {{-- <div id="carouselExampleSlidesOnly" class="carousel slide carousel-h" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active carousel-h">
        <div class="d-block w-100 ">
          <div class="video-container position-relative ">
            <div class="video-overlay"></div>
            <div class="btn-info position-absolute start-0 bottom-50 z-1 rounded-3">
              <div class="btn btn-outline-light border-2 rounded-0 bedge">SUPERMAN</div>
              <h2 class="tag">Superman: The Man of Steel</h2>
              <div class="read-more-btn button left">READ NOW!</div>
            </div>
            <iframe width="795" height="395"
              src="https://www.youtube.com/embed/uoOW_ggIEho?autoplay=1&loop=1&playlist=uoOW_ggIEho&mute=1&controls=0"
              title="How Strong Is Cosmic Armor Superman?" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="carousel-item carousel-h">
        <div class="d-block w-100 ">
          <div class="video-container position-relative ">
            <div class="video-overlay"></div>
            <div class="btn-info rounded-3  position-absolute start-0 bottom-50 z-1">
              <div class="btn btn-outline-light    rounded-0 bedge">batman</div>
              <h2 class="tag">The Adventures of the Outsiders</h2>
              <div class="read-more-btn button left">READ NOW!</div>
            </div>
            <iframe width="702" height="395"
              src="https://www.youtube.com/embed/IsRRMh_hUyQ?autoplay=1&loop=1&playlist=IsRRMh_hUyQ&mute=1&controls=0"
              title="Batman Motion Comics Season 1 Compilation Reel" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="carousel-item carousel-h">
        <div class="d-block w-100 ">
          <div class="video-container position-relative ">
            <div class="video-overlay"></div>
            <div class="btn-info rounded-3  position-absolute start-0 bottom-50 z-1">
              <div class="btn btn-outline-light    rounded-0 bedge">deadpool</div>
              <h2 class="tag">Deadpool Kills The Marvel Universe Again</h2>
              <div class="read-more-btn button left">READ NOW!</div>
            </div>
            <iframe width="702" height="395"
              src="https://www.youtube.com/embed/hrpWvlyR0Ng?autoplay=1&loop=1&playlist=hrpWvlyR0Ng&mute=1&controls=0"
              title="Deadpool Motion Comic short" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
@endsection
