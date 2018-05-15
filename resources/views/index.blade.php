@extends('layouts.nologin')

@section('content')

<section id="top">
    <div class="container">
        <div class="row">
            <h1>Арендуйте себе<br />автомобиль</h1>
            <h2>Потратье 2 минути и получите <br />лучшее предложение среди автовладельцев</h2>
            <div class="col-md-6 npd">
                <input type="text" placeholder="Пхукет"/>
                <button class="gray" onclick="">

                    <h4>НАЙТИ АВТОМОБИЛЬ</h4>
                </button>
                <img src="img/search.png" alt="">
                <h5>уже 1,765 автовладельцев готовы сдать свой автомобиль</h5>
            </div>
        </div>
    </div>
</section>

@endsection