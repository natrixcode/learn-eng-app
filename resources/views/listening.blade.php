@extends('layouts.user_type.auth')

@section('content')



<div class="col-lg-4">
      <div class="card h-100 p-3">
          <span class="mask bg-gradient-dark border-radius-lg"></span>
          <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
          <figure>
    <figcaption class="text-white">Listening task :</figcaption>
    <audio
        controls
        src="https://www.123listening.com/freeaudio/sportsgo-1.mp3">
            <a href="https://www.123listening.com/freeaudio/sportsgo-1.mp3">
                Download audio
            </a>
    </audio>
</figure>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection