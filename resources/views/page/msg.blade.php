@extends('layouts.nologin')
@section('content')
    <section id="msg" tabindex='1'>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 npd msglist">
                    <div class="msg_head">
                        <h4>Сообщения</h4>
                    </div>
                    <div style="margin-top:15px;">
                        <div class="msg_list active" data-msg-list="1" >
                            <img src="img/cooper.jpg" class="middle-ava circle-img" alt="" />
                            <h3><img src="img/new_msg.png" alt="" />Евгений Никитин<i>2 часа назад</i></h3>
                            <h5><img src="img/msg.png" alt="" />Депозит 10 000 рублей</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 msgfull">
                    <img src="img/button_msg.png" alt="" class="msg_trigger" />
                    <script>
                        $('.msg_trigger').click(function(){
                            $('.msglist').toggleClass('active');
                        })
                    </script>
                    <div class="msg_head">
                        <img src="img/someone1.jpg" class="middle-ava circle-img" alt="" />
                        <div class="col-lg-10 col-md-8 npd">
                            <button class="white"><a href="#">Отказ</a></button>
                            <button class="white"><a href="#">Мы договорились</a></button>
                            <h3>Евгений Никитин</h3>
                            <h5>Компания: Rent Phuket Car</h5>

                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div data-msg="1" class="active">
                        <div class="msg_history" style="margin-top:15px;">
                            <div class="msgs from_me">
                                <img src="img/someone1.jpg" class="mess-ava circle-img"  alt="" />
                                <div>Супер! Есть фото?</div>
                                <div>Какие условия аренды?</div>
                            </div>
                            <div class="msgs to_me">
                                <img src="img/someone1.jpg" class="mess-ava circle-img" alt="" />
                                <div>Здраствуйте!</div>
                                <div>Есть машина под ваши параметры</div>
                            </div>
                            <div class="msgs from_me">
                                <img src="img/someone.png" class="mess-ava circle-img" alt="" />
                                <div>Супер! Есть фото?</div>
                                <div>Какие условия аренды?</div>
                            </div>
                            <div class="msgs to_me">
                                <img src="img/someone.png" class="mess-ava circle-img" alt="" />
                                <div>Здраствуйте!</div>
                                <div>Есть машина под ваши параметры</div>
                            </div>
                            <div class="msgs from_me">
                                <img src="img/someone.png" class="mess-ava circle-img" alt="" />
                                <div>Супер! Есть фото?</div>
                                <div>Какие условия аренды?</div>
                            </div>

                            <div class="accept_block text-center">
                                <h4>Пользователь утверждает, что вы договорились</h4>
                                <button class="white"><a href="#">Мы договорились</a></button>
                                <button class="white"><a href="#">Продолжить диалог</a></button>
                                <h4>Поздравляю! Скоро у вас появится рейтинг!</h4>
                            </div>
                        </div>
                    </div>

                    <div data-msg="2" class="">
                        <div class="msg_history" style="margin-top:15px;">
                            <div class="msgs from_me">
                                <img src="img/someone.png" class="mess-ava circle-img" alt="" />
                                <div>Супер! Есть фото?</div>
                                <div>Какие условия аренды?</div>
                            </div>
                            <div class="msgs to_me">
                                <img src="img/someone.png" class="mess-ava circle-img" alt="" />
                                <div>Здраствуйте!</div>
                                <div>Есть машина под ваши параметры</div>
                            </div>
                            <div class="msgs from_me">
                                <img src="img/someone.png" class="mess-ava circle-img" alt="" />
                                <div>Супер! Есть фото?</div>
                                <div>Какие условия аренды?</div>
                            </div>
                            <div class="msgs to_me">
                                <img src="img/someone.png" class="mess-ava circle-img" alt="" />
                                <div>Здраствуйте!</div>
                                <div>Есть машина под ваши параметры</div>
                            </div>
                            <div class="msgs from_me">
                                <img src="img/someone.png" class="mess-ava circle-img" alt="" />
                                <div>Супер! Есть фото?</div>
                                <div>Какие условия аренды?</div>
                            </div>

                            <div class="accept_block text-center">
                                <h4>Пользователь утверждает, что вы договорились</h4>
                                <button class="white"><a href="#">Мы договорились</a></button>
                                <button class="white"><a href="#">Продолжить диалог</a></button>
                                <h4>Поздравляю! Скоро у вас появится рейтинг!</h4>
                            </div>
                        </div>
                    </div>




                    <input type="text" class="input_msg" placeholder="Напишите сообщение...">
                    <input type="submit" class="send_msg" value="Отправить">
                    <div style="clear:both;"></div>
                    <button><img src="img/attach.png" alt="" /></button>
                    <button><img src="img/emoji.png" alt="" /></button>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
    </section>
    @endsection