<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700|Open+Sans:300,400,400i,600,700|Oswald:200,300,400,500,600,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all'>
    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?//= $_SERVER['DOCUMENT_ROOT']?>
<div class="menu">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3 menu-logo col-xs-6">
                <img src="img/logo.png" alt="">
                <h3>ATENA</h3>
                <h5>RENTCAR</h5>
            </div>
            @if(Auth::guest())
                <div class="col-md-2 col-sm-3 menu-rent  col-xs-6">
                    <img src="img/car_mini.png" alt="">
                    <h4>СДАТЬ СВОЁ АВТО</h4>
                </div>
                <div class="col-md-4 col-md-offset-4 col-sm-6 text-right menu-buttons col-xs-12">
                    <a class="white button" href="{{ url('/login')}}">Вход</a>
                    <a class="black button" href="{{ url('/register') }}">Регистрация</a>
                </div>
        </div>
    </div>
</div>
@else
<div class="col-md-4 col-md-offset-6 col-sm-6 text-right menu-buttons col-xs-12">
<button data-route="/Orders/Create" class="blue">Создать заказ</button>
<a class="notifContainer" href="javascript:bells();">
<img src="img/hellsbells.png" alt="">

<div class="notifications notif1">
<h4>Оповещения</h4>
<hr>
<div class="msg_notify">
<h5>Оповещения очищены</h5>
</div>
</div>
</a>
<a>
<img id="header-ava" class="mini-ava" src="profile\content\images\48bf-b881-19c094ceabc9\2017-07-09_19-02-57.png" alt="">

<sub></sub>
</a>
    <a id="logOutBtn" class="black button" href="{{ url('/logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Выход
    </a>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</div>
</div>
</div>
</div>

<div class="menu_line">
<div class="colored">
<div class="container">
<div class="row">
<ul>
<li class="cssFixes" id="one" data-route="/Orders/MyOrders">
Мои заказы
</li>
<li class="cssFixes" id="two">
    <a href="{{url('/profile')}}">Мой профиль</a>
</li>
<li class="cssFixes" id="three">
    <a href="{{url('/offers')}}">Заказы клиентов</a>
</li>
<li class="cssFixes" id="four">
    <a href="{{url('/msg')}}">Сообщения</a>
</li>
</ul>
</div>


</div>
</div>
</div>
<script>
function bells(){
$('.notif1').toggleClass('active');

$.ajax({
url: '/api/Notifications',
type: "DELETE",
async: true,
success: function (data) {
var count = parseInt($('#notif').html());

if (count != undefined) {
var finalCount = count - data.removeCount;

if (finalCount === 0) {
$('#notif').remove();
}
$('#notif').text(finalCount);
}
},
error: function(jqXHR, textStatus, errorThrown) {
alert('Ошибка, не удалось очистить оповещения.');
console.log(textStatus);
console.log(jqXHR);

}
});
}
function bells2(){
$('.notif2').toggleClass('active');
}
</script>

<script src="js/jquery.min.js"></script>
<script src="/Scripts/jquery.signalR-2.2.2.js"></script>
<script src="/signalr/hubs"></script>


<input id="files" type="file" name="files" style="display: none;">
@endif

@yield('content')
{{--</div>--}}

<!-- Scripts -->
<script src="/js/app.js"></script>
<section id="footer">
    <div class="container">
        <div class="row" style="margin:0 -30px;">
            <div class="col-md-4 col-sm-6">
                <a href="javascript:void(0);">Политика конфиденциальности</a>
            </div>

            <div class="col-md-2 col-sm-3 col-sm-offset-3 col-md-offset-6 text-center dropup">
                <h6 type="button" data-toggle="dropdown">ЯЗЫК: <span>РУССКИЙ</span><span class="caret" style="color:#d7d7d7;top: -3px; left: 5px;"></span></h6>
                <ul class="dropdown-menu dropup">
                    <li class="selected"><a href="#">РУССКИЙ</a></li>
                    <li><a href="#">ENGLISH</a></li>
                </ul>
            </div>
        </div>
        <div class="row" style="margin:30px -30px;">
            <div class="col-md-4">
                <h5>© 2017 <span>Athena</span> - Все права защищены.</h5>
            </div>
            <div class="col-md-2 col-md-offset-6 text-center">
                <div class="social">
                    <div><img src="img/fb.png" alt=""></div>
                    <div><img src="img/vk.png" alt=""></div>
                    <div><img src="img/insta.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
