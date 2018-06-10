@extends('layouts.nologin')
@section('content')
    <section id="my_dv">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 npd">
                    <h2>Создать заказ</h2>
                    <div class="row">
                        <form action="{{url('/order/create')}}" method="post">
                            {{ csrf_field() }}
                        <div class="col-sm-6">
                            <h3>Выберите тип автомобиля</h3>
                            <select name="type_auto">
                                <option>Бюджетный вариант</option>
                                <option>Дорогой вариант</option>
                                <option>Люкс вариант</option>
                            </select>
                        </div>
                        <div class="col-sm-6" >
                            <h3>Выберите ваш бюджет</h3>
                            <select name="money">
                                <option>По договоренности</option>
                                <option>Нал</option>
                                <option>Карта</option>
                            </select>
                        </div>
                        <div style="clear:both;"></div>
                        <div class="col-xs-12">
                            <h3>Напишите в каком городе хотите арендовать транспорт</h3>
                            <select name="city">
                                <option>Пхукет</option>
                                <option>Пхукет</option>
                                <option>Пхукет</option>
                            </select>
                            <h3>Впишите даты планируемой аренды?</h3>
                            <div class="col-sm-11 npd">
                                <div class='input-group date' id='datestart'>
                                    <input type='date' class="form-control" name="start_date" />
                                    <span class="input-group-addon">
		</span>
                                </div>
                                <div class='input-group date' id='dateend'>
                                    <input type='date' class="form-control" name="end_date"/>
                                    <span class="input-group-addon">
		</span>
                                </div>
                                <style>
                                    .date{float:left; width:50%; margin:0;}
                                    .date input{width:95% !important;}
                                    .input-group-addon{display:none;}
                                </style>
                            </div>
                            <div class="col-sm-1 npd" id="date">
                                <input type="text" style="text-align:center; padding:0;">
                            </div>

                            <h3>Куда доставить автомобиль?</h3>
                            <input type="text" name="dest">
                            <button class="aqua" type="submit">Начать поиск</button>
                            <button class="white">Отмена</button>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endsection