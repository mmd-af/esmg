<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ارم صنعت موج گستر - دانش بنیان</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicons/favicon.ico')}}">
    <meta name="theme-color" content="#ccffff">
    <link href="{{asset('css/site.css')}}" rel="stylesheet"/>
    @yield('style')

</head>
<body>
<main class="" id="top">
    @include('site.sections.navbar')
    @yield('content')
    @include('site.sections.footer')
</main>
<div class="floating-chat">
    <i class="fa fa-comments" aria-hidden="true"></i>
    <div class="chat">
        <div class="header">
            <span class="title">
                از ما بپرسید؟
            </span>
            <button>
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
        </div>
        <div class="footer">
            <form action="" method="post">
                @csrf
                <input type="text" name="contact" class="form-control">
                <textarea name="message" class="form-control mt-3"></textarea>
                <button id="sendMessage mt-3">ارسال</button>
            </form>
            {{--            <div class="text-box" contenteditable="true" disabled="true"></div>--}}
            {{--            <div class="text-box" contenteditable="true" disabled="true"></div>--}}
            {{--            <div class="text-box" contenteditable="true" disabled="true"></div>--}}

        </div>
    </div>
</div>
<script src="{{asset('js/site.js')}}"></script>
<script src="{{asset('js/scrollreveal.js')}}"></script>
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>--}}
<script>
    window.addEventListener("load", function () {
        let carousel2 = document.querySelector('.carousel2');
        $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});
        $.ajax({
            type: 'get',
            url: "{{ route('site.slideshows.ajax.getData') }}",
            success: function (response) {
                carousel2.innerHTML = '';
                response.forEach(function (item, index) {
                    let slide = `
        <div class="carousel__face"
             style="background-image: url(${item.images.url})">
            <div class="m-auto text-center text-light">
                <h4>${item.title}</h4>
                <p class="small">
               ${item.description}
                </p>
            </div>
        </div>`;
                    carousel2.innerHTML += slide;
                });
            }
        });
    });

</script>
<script>
    var element = $('.floating-chat');
    var myStorage = localStorage;

    if (!myStorage.getItem('chatID')) {
        myStorage.setItem('chatID', createUUID());
    }

    setTimeout(function () {
        element.addClass('enter');
    }, 1000);

    element.click(openElement);

    function openElement() {
        var messages = element.find('.messages');
        var textInput = element.find('.text-box');
        element.find('>i').hide();
        element.addClass('expand');
        element.find('.chat').addClass('enter');
        var strLength = textInput.val().length * 2;
        textInput.keydown(onMetaAndEnter).prop("disabled", false).focus();
        element.off('click', openElement);
        element.find('.header button').click(closeElement);
        element.find('#sendMessage').click(sendNewMessage);
        messages.scrollTop(messages.prop("scrollHeight"));
    }

    function closeElement() {
        element.find('.chat').removeClass('enter').hide();
        element.find('>i').show();
        element.removeClass('expand');
        element.find('.header button').off('click', closeElement);
        element.find('#sendMessage').off('click', sendNewMessage);
        element.find('.text-box').off('keydown', onMetaAndEnter).prop("disabled", true).blur();
        setTimeout(function () {
            element.find('.chat').removeClass('enter').show()
            element.click(openElement);
        }, 500);
    }

    function createUUID() {
        // http://www.ietf.org/rfc/rfc4122.txt
        var s = [];
        var hexDigits = "0123456789abcdef";
        for (var i = 0; i < 36; i++) {
            s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
        }
        s[14] = "4"; // bits 12-15 of the time_hi_and_version field to 0010
        s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1); // bits 6-7 of the clock_seq_hi_and_reserved to 01
        s[8] = s[13] = s[18] = s[23] = "-";

        var uuid = s.join("");
        return uuid;
    }

    function sendNewMessage() {
        var userInput = $('.text-box');
        var newMessage = userInput.html().replace(/\<div\>|\<br.*?\>/ig, '\n').replace(/\<\/div\>/g, '').trim().replace(/\n/g, '<br>');

        if (!newMessage) return;

        var messagesContainer = $('.messages');

        messagesContainer.append([
            '<li class="self">',
            newMessage,
            '</li>'
        ].join(''));

        // clean out old message
        userInput.html('');
        // focus on input
        userInput.focus();

        messagesContainer.finish().animate({
            scrollTop: messagesContainer.prop("scrollHeight")
        }, 250);
    }

    function onMetaAndEnter(event) {
        if ((event.metaKey || event.ctrlKey) && event.keyCode == 13) {
            sendNewMessage();
        }
    }
</script>
<script>
    (function scrollReveal() {
        window.sr = ScrollReveal();
        sr.reveal('.reveal-content', {
            duration: 1000,
            distance: '70px',
            easing: 'ease-out',
            origin: 'bottom',
            reset: true,
            scale: 1,
            viewFactor: 0,
            afterReveal: revealChildren,
        }, 150);

        var revealChildren = sr.reveal('.card-title, .card-text', {
            duration: 1000,
            scale: 1,
            distance: '70px',
            origin: 'bottom',
            reset: true,
            easing: 'ease-out',
            viewFactor: 1,
        }, 75);

    })();
</script>
@yield('script')
</body>
</html>
