@extends('layouts.user_type.auth')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
  <title>Dropdown Buttons</title>
  <style>
    .dropdown-menu a {
      padding: 0.25rem 2.2rem;
      display: block;
    }

  </style>
</head>
<body>

<h6 class="px-4 my-2">Click on each button to see the word list :)</h2>

<div class="container mt-4 px-4 col-lg-12">
    <div class="row">
      <div class="col">
        <div class="dropdown">
          <button class="btn p-7 w-100 bg-gradient-dark dropdown-toggle" type="button" id="foodDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Food
          </button>
          <div class="dropdown-menu p-4" aria-labelledby="foodDropdown">
            <a class="dropdown-item" href="#">Apple - Яблуко</a>
            <a class="dropdown-item" href="#">Banana - Банан</a>
            <a class="dropdown-item" href="#">Bread - Хліб</a>
            <a class="dropdown-item" href="#">Cheese - Сир</a>
            <a class="dropdown-item" href="#">Chicken - Курка</a>
            <a class="dropdown-item" href="#">Chocolate - Шоколад</a>
            <a class="dropdown-item" href="#">Rice - Рис</a>
            <a class="dropdown-item" href="#">Tomato - Помідор</a>
            <a class="dropdown-item" href="#">Pizza - Піца</a>
            <a class="dropdown-item" href="#">Ice cream - Морозиво</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="dropdown">
          <button class="btn p-7 w-100 bg-gradient-dark dropdown-toggle" type="button" id="emotionsDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Emotions
          </button>
          <div class="dropdown-menu p-4" aria-labelledby="emotionsDropdown">
            <a class="dropdown-item" href="#">Happy - Щасливий</a>
            <a class="dropdown-item" href="#">Sad - Сумний</a>
            <a class="dropdown-item" href="#">Angry - Злий</a>
            <a class="dropdown-item" href="#">Excited - Захоплений</a>
            <a class="dropdown-item" href="#">Surprised - Здивований</a>
            <a class="dropdown-item" href="#">Bored - Нудний</a>
            <a class="dropdown-item" href="#">Nervous - Нервовий</a>
            <a class="dropdown-item" href="#">Confused - Збентежений</a>
            <a class="dropdown-item" href="#">Content - Задоволений</a>
            <a class="dropdown-item" href="#">Proud - Гордий</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="dropdown">
        <button class="btn p-7 w-100 bg-gradient-dark dropdown-toggle" type="button" id="clothesDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Clothes
          </button>
          <div class="dropdown-menu p-4" aria-labelledby="clothesDropdown">
            <a class="dropdown-item" href="#">Shirt - Сорочка</a>
            <a class="dropdown-item" href="#">Pants - Штани</a>
            <a class="dropdown-item" href="#">Dress - Сукня</a>
            <a class="dropdown-item" href="#">Hat - Капелюх</a>
            <a class="dropdown-item" href="#">Shoes - Взуття</a>
            <a class="dropdown-item" href="#">Jacket - Куртка</a>
            <a class="dropdown-item" href="#">Skirt - Спідниця</a>
            <a class="dropdown-item" href="#">Socks - Шкарпетки</a>
            <a class="dropdown-item" href="#">Gloves - Рукавиці</a>
            <a class="dropdown-item" href="#">Sweater - Светр</a>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="dropdown">
          <button class="btn p-7 w-100 bg-gradient-dark dropdown-toggle" type="button" id="weatherDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Weather
          </button>
          <div class="dropdown-menu p-4" aria-labelledby="weatherDropdown">
            <a class="dropdown-item" href="#">Sunny - Сонячно</a>
            <a class="dropdown-item" href="#">Rainy - Дощить</a>
            <a class="dropdown-item" href="#">Cloudy - Хмарно</a>
            <a class="dropdown-item" href="#">Windy - Вітряно</a>
            <a class="dropdown-item" href="#">Snowy - Сніжно</a>
            <a class="dropdown-item" href="#">Stormy - Штормово</a>
            <a class="dropdown-item" href="#">Foggy - Туманно</a>
            <a class="dropdown-item" href="#">Hot - Гарячо</a>
            <a class="dropdown-item" href="#">Cold - Холодно</a>
            <a class="dropdown-item" href="#">Humid - Волого</a>
          </div>
        </div>
      </div>


      <!-- LOCKED -->

      <div class="col">
        <div class="dropdown">
          <button class="btn p-7 w-100 bg-gradient-secondary dropdown-toggle" type="button" id="weatherDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            Locked 
          </button>
          <!-- <div class="dropdown-menu p-4" aria-labelledby="weatherDropdown">
            <a class="dropdown-item" href="#">Sunny - Сонячно</a>
            <a class="dropdown-item" href="#">Rainy - Дощить</a>
            <a class="dropdown-item" href="#">Cloudy - Хмарно</a>
            <a class="dropdown-item" href="#">Windy - Вітряно</a>
            <a class="dropdown-item" href="#">Snowy - Сніжно</a>
            <a class="dropdown-item" href="#">Stormy - Штормово</a>
            <a class="dropdown-item" href="#">Foggy - Туманно</a>
            <a class="dropdown-item" href="#">Hot - Гарячо</a>
            <a class="dropdown-item" href="#">Cold - Холодно</a>
            <a class="dropdown-item" href="#">Humid - Волого</a>
          </div> -->
        </div>
      </div>

      <div class="col">
        <div class="dropdown">
          <button class="btn p-7 w-100 bg-gradient-secondary dropdown-toggle" type="button" id="weatherDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            Locked 
          </button>
          <!-- <div class="dropdown-menu p-4" aria-labelledby="weatherDropdown">
            <a class="dropdown-item" href="#">Sunny - Сонячно</a>
            <a class="dropdown-item" href="#">Rainy - Дощить</a>
            <a class="dropdown-item" href="#">Cloudy - Хмарно</a>
            <a class="dropdown-item" href="#">Windy - Вітряно</a>
            <a class="dropdown-item" href="#">Snowy - Сніжно</a>
            <a class="dropdown-item" href="#">Stormy - Штормово</a>
            <a class="dropdown-item" href="#">Foggy - Туманно</a>
            <a class="dropdown-item" href="#">Hot - Гарячо</a>
            <a class="dropdown-item" href="#">Cold - Холодно</a>
            <a class="dropdown-item" href="#">Humid - Волого</a>
          </div> -->
        </div>
      </div>

      <div class="col">
        <div class="dropdown">
          <button class="btn p-7 w-100 bg-gradient-secondary dropdown-toggle" type="button" id="weatherDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            Locked 
          </button>
          <!-- <div class="dropdown-menu p-4" aria-labelledby="weatherDropdown">
            <a class="dropdown-item" href="#">Sunny - Сонячно</a>
            <a class="dropdown-item" href="#">Rainy - Дощить</a>
            <a class="dropdown-item" href="#">Cloudy - Хмарно</a>
            <a class="dropdown-item" href="#">Windy - Вітряно</a>
            <a class="dropdown-item" href="#">Snowy - Сніжно</a>
            <a class="dropdown-item" href="#">Stormy - Штормово</a>
            <a class="dropdown-item" href="#">Foggy - Туманно</a>
            <a class="dropdown-item" href="#">Hot - Гарячо</a>
            <a class="dropdown-item" href="#">Cold - Холодно</a>
            <a class="dropdown-item" href="#">Humid - Волого</a>
          </div> -->
        </div>
      </div>

      <div class="col">
        <div class="dropdown">
          <button class="btn p-7 w-100 bg-gradient-secondary dropdown-toggle" type="button" id="weatherDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            Locked 
          </button>
          <!-- <div class="dropdown-menu p-4" aria-labelledby="weatherDropdown">
            <a class="dropdown-item" href="#">Sunny - Сонячно</a>
            <a class="dropdown-item" href="#">Rainy - Дощить</a>
            <a class="dropdown-item" href="#">Cloudy - Хмарно</a>
            <a class="dropdown-item" href="#">Windy - Вітряно</a>
            <a class="dropdown-item" href="#">Snowy - Сніжно</a>
            <a class="dropdown-item" href="#">Stormy - Штормово</a>
            <a class="dropdown-item" href="#">Foggy - Туманно</a>
            <a class="dropdown-item" href="#">Hot - Гарячо</a>
            <a class="dropdown-item" href="#">Cold - Холодно</a>
            <a class="dropdown-item" href="#">Humid - Волого</a>
          </div> -->
        </div>
      </div>

      <!-- <div class="col">
        <div class="dropdown">
          <button class="btn p-7 bg-gradient-dark dropdown-toggle" type="button" id="animalsDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Animals
          </button>
          <div class="dropdown-menu p-5" aria-labelledby="animalsDropdown">
            <a class="dropdown-item" href="#">Cat - Кіт</a>
            <a class="dropdown-item" href="#">Dog - Собака</a>
            <a class="dropdown-item" href="#">Elephant - Слон</a>
            <a class="dropdown-item" href="#">Lion - Лев</a>
            <a class="dropdown-item" href="#">Tiger - Тигр</a>
            <a class="dropdown-item" href="#">Rabbit - Кролик</a>
            <a class="dropdown-item" href="#">Horse - Кінь</a>
            <a class="dropdown-item" href="#">Bird - Птах</a>
            <a class="dropdown-item" href="#">Monkey - Мавпа</a>
            <a class="dropdown-item" href="#">Fish - Риба</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="dropdown">
          <button class="btn p-7 bg-gradient-dark dropdown-toggle" type="button" id="natureDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Nature
          </button>
          <div class="dropdown-menu p-5" aria-labelledby="natureDropdown">
            <a class="dropdown-item" href="#">Tree - Дерево</a>
            <a class="dropdown-item" href="#">River - Річка</a>
            <a class="dropdown-item" href="#">Mountain - Гора</a>
            <a class="dropdown-item" href="#">Flower - Квітка</a>
            <a class="dropdown-item" href="#">Forest - Ліс</a>
            <a class="dropdown-item" href="#">Lake - Озеро</a>
            <a class="dropdown-item" href="#">Beach - Пляж</a>
            <a class="dropdown-item" href="#">Sky - Небо</a>
            <a class="dropdown-item" href="#">Sun - Сонце</a>
            <a class="dropdown-item" href="#">Star - Зірка</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
</body>
</html>


@endsection