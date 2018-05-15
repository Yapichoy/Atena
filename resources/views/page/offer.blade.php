@extends('layouts.nologin')
@section('content')
    <section id="my_dv">
        <div class="container">
            <div class="row">
                <h2>Новые заказы</h2>
                <h3>Обрабатывайте быстро новые заказы</h3>
                @foreach($orders as $order)
                <div class="dv offer col-md-4 col-sm-6">
                    <img src="img/someone1.jpg" class="big-ava circle-img"  alt="">
                    <h1>{{$order->name}}</h1>
                    <h3>{{$order->city}}</h3>
                    <h2>
                        С {{$order->start_date}} до {{$order->end_date}}
                        <br>Бюджет: {{$order->money}}
                        <br>Тип авто: {{$order->type_auto}}
                        <br>Доставка: {{$order->dest}}
                    </h2>
                    <button class="aqua">Принять</button>
                    <button class="white">Отклонить</button>
                </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection