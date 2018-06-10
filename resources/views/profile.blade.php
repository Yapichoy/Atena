@extends('layouts.nologin')
@section('title', 'Профиль')
@section('content')
    <section id="client">
        <div id="chooseImgBg" class="bg_img"></div>

        <div id="client_info">
            <div class="container">
                <div class="profile-img circle-img">
                    <img class="circle-img" id="chooseImgAvatar" src="img/profile.png" alt="">
                </div>
                <h2>{{ Auth::user()->name }}</h2>

                <ul>
                    <li>
                        <h3>Email</h3>
                        <h4>{{ Auth::user()->email }}</h4>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <script>

        $('#chooseImgAvatar').click(function() {

            var isClick = true;

            function addPreview(data, fName) {

                if (!isClick)
                    return;
                isClick = false;


                $('#chooseImgAvatar').attr("src", data);
                $('#chooseImgAvatar').attr("title", fName);

                $.ajax({
                    url: '/api/Profile/MainImage',
                    type: "POST",
                    data: {
                        imageData: data,
                        imgName: fName
                    },
                    async: true,
                    success: function() {

                    },
                    //beforeSend: function (xhr) {
                    //	var token = window.localStorage.getItem("OtliAccessToken");
                    //	xhr.setRequestHeader("Authorization", "Bearer " + token);
                    //},
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Ошибка, возможно ваше сообщение не доставленно получателю, пожалуйста, свяжитесь с администрацией');
                        console.log(textStatus);
                        console.log(jqXHR);

                    }
                });
            }

            if (window.File && window.FileReader && window.FileList && window.Blob) {
                // Great success! All the File APIs are supported.
            } else {
                alert('Ваш браузер устарел и не поддерживает выбор файлов.');
            }

            function handleFileSelect(evt) {
                var files = evt.target.files; // FileList object

                for (var i = 0, f; f = files[i]; i++) {
                    if (!f.type.match('image.*')) {
                        continue;
                    }


                    var reader = new FileReader();

                    reader.onload = (function(theFile) {
                        return function(e) {
                            addPreview(e.target.result, theFile.name);
                        };
                    })(f);
                    reader.readAsDataURL(f);
                }
            }

            document.getElementById('files').addEventListener('change', handleFileSelect, false);

            $('#files').trigger('click');
        });


        $('#chooseImgBg').click(function() {

            var isClick = true;

            function addPreview(data, fName) {

                if (!isClick)
                    return;
                isClick = false;


                $('.bg_img').css("background-image", "url("+data+")");
                //$('#chooseImgBg').attr("title", fName);

                $.ajax({
                    url: '/api/Profile/BackgroundImage',
                    type: "POST",
                    data: {
                        imageData: data,
                        imgName: fName
                    },
                    async: true,
                    success: function() {

                    },
                    //beforeSend: function (xhr) {
                    //	var token = window.localStorage.getItem("OtliAccessToken");
                    //	xhr.setRequestHeader("Authorization", "Bearer " + token);
                    //},
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Ошибка, возможно ваше сообщение не доставленно получателю, пожалуйста, свяжитесь с администрацией');
                        console.log(textStatus);
                        console.log(jqXHR);

                    }
                });
            }

            if (window.File && window.FileReader && window.FileList && window.Blob) {
                // Great success! All the File APIs are supported.
            } else {
                alert('Ваш браузер устарел и не поддерживает выбор файлов.');
            }

            function handleFileSelect(evt) {
                var files = evt.target.files; // FileList object

                for (var i = 0, f; f = files[i]; i++) {
                    if (!f.type.match('image.*')) {
                        continue;
                    }


                    var reader = new FileReader();

                    reader.onload = (function(theFile) {
                        return function(e) {
                            addPreview(e.target.result, theFile.name);
                        };
                    })(f);
                    reader.readAsDataURL(f);
                }
            }

            document.getElementById('files').addEventListener('change', handleFileSelect, false);

            $('#files').trigger('click');
        });
    </script>


    <script>
        $("div.col-md-4").on('click', 'button.blue',
            function () {
                var route = $(this).data('route');
                post(route, undefined, 'GET');
            });
        $("div.row").on('click', 'div.col-md-2.col-sm-3',
            function () {
                var route = $(this).data('route');
                post(route, undefined, 'GET');
            });

        $("div.notif2").on('click', 'button.black',
            function () {
                var route = $(this).data('route');
                post(route, undefined, 'POST');
            });

        $(document).ready(function () {

            $.ajax({
                url: '/api/Notifications',
                type: "GET",
                async: false,
                success: function(data) {
                    if (data > 0) {
                        $('.notifContainer').append('<sub id="notif">' + data + '</sub>');
                    }
                }
            });

            var data = sessionStorage.getItem('bebebookingcomSelectedMenuElement');
            if (data !== undefined) {
                $('#' + data).attr('style', 'border-bottom:2px solid #000');
            }
        });

        $("ul").on('click', 'li',
            function(event) {

                var thisElem = $(event.target);
                var id = thisElem.attr('id');
                sessionStorage.setItem('bebebookingcomSelectedMenuElement', id);

                $(this).data('route');
                post(thisElem.data('route'));

            });

        $(function () {
            var chat = $.connection.onlineHub;

            //var chatMess = $.connection.messageHub;
            //// Объявление функции, которая хаб вызывает при получении сообщений
            //chatMess.client.newMessage = function(mess, conversationId, type) {
            //	if (type === 3) {
            //		AddMessageAsImage(mess, conversationId, 'to');
            //		AddLastMessageToConversation("[Image]", conversationId);

            //	}
            //	else if (type === 2) {
            //		Agreed(conversationId);
            //		AddLastMessageToConversation(mess, conversationId);
            //	}
            //	else{
            //		AddMessageToChat(mess, conversationId, 'to', false);
            //		AddLastMessageToConversation(mess, conversationId);

            //	}
            //};


            //chatMess.client.adgree = function (conversationId) {
            //	Agreed(conversationId);
            //};

            //chatMess.client.orderCompleted = function (conversationId) {
            //	document.getElementById('buttons_' + conversationId).innerHTML = '';
            //};

            //// Открываем соединение
            //$.connection.hub.start().done(function () {


            //});

            chat.client.addNotification = function(count) {

                if (isNaN(parseInt($('#notif').html()))) {
                    $('#notif').remove();
                    $('.notifContainer').append('<sub id="notif">' + count + '</sub>');
                }

                if (!isNaN(count)) {

                    if (count > 0) {
                        $('#notif').text(count);
                    }
                }
            };

            chat.client.clearNotification = function(count) {
                $('.notifContainer').append('<sub id="notif">'+count+'</sub>');
            };

            chat.client.online = function(userId) {
                if ($('#nameContainer_' + userId).find('img').length === 0)
                    $('#nameContainer_' + userId).prepend('<img src="img/new_msg.png" alt=""/>');
            };
            // Открываем соединение
            $.connection.hub.start().done(function () {


            });
        });

    </script>

@endsection