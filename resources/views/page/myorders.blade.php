@extends('layouts.nologin')
@section('title','Мои заказы')
@section('content')
    <section id="my_dv">
        <div class="container">
            <div class="row">
                <h2>Мои заказы</h2>
                <h3>Здесь отображаются ваши заказы</h3>
                <div class="dv">
                    <img src="img/car_min2.png" alt="" />
                    <h1>Аренда авто</h1>
                    <h2>С 23.11.17 - 05.12.17 <span>(62 дня)</span> <a href="javascript:modal_call('modal_delete');">Удалить</a></h2>
                    <h3><img src="img/loc.png" alt=""> Пхукет</h3>
                    <div style="clear:both;"></div>
                </div>
                <div class="dv">
                    <img src="img/car_min2.png" alt="" />
                    <h1>Аренда авто</h1>
                    <h2>С 23.11.17 - 05.12.17 <span>(62 дня)</span> <a href="javascript:modal_call('modal_delete_search');">Удалить</a></h2>
                    <h3><img src="img/loc.png" alt=""> Пхукет</h3>
                    <div style="clear:both;"></div>
                </div>
                <div class="dv">
                    <img src="img/car_min2.png" alt="" />
                    <h1>Аренда авто</h1>
                    <h2>С 23.11.17 - 05.12.17 <span>(62 дня)</span> <a href="javascript:modal_call('modal_msg');">Удалить</a></h2>
                    <h3><img src="img/loc.png" alt=""> Пхукет</h3>
                    <div style="clear:both;"></div>
                </div>
            </div>
        </div>
    </section>
    @endsection
