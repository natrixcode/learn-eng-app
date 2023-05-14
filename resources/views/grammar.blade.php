@extends('layouts.user_type.auth')

@section('content')

    <div class="col-lg-4 px-4">
      <div class="card h-100 p-3">
          <span class="mask bg-gradient-dark border-radius-lg"></span>
          <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
            <h5 class="text-white font-weight-bolder mb-4 pt-2">Стверджувальне речення</h5>
            <p class="text-white">
            I study French. <br>
            – Я вчу французьку мову.
            <br>
            <br>
            You speak English. <br>
            – Ти розмовляєш англійською.
            <br>
            <br>
            We play the violins. <br>
            – Ми граємо на скрипках.
            <br>
            <br>
            Cats like milk. <br>
            – Коти люблять молоко.
            </p>
            <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
              Read More
              <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection