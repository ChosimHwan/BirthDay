<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>세은아 생일축하해 = @yield('title')</title>
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <style>
        .body-color{
            background-color:#aaf0d1;
        }
        .head-wrap{
            text-align: center;
        }
        .navbar-wrap{
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .navbar-wrap div{
            width: 300px;
            font-weight: bold;
            font-size: 20px;
            cursor: pointer;
        }
        .head-img{
            width: 100%;
            max-width: 380px;
            cursor:pointer;
        }
        .item-top{
            align-self: flex-start;
        }
        .item-end{
            align-self: flex-end;
        }
        .img-wrap{
            text-align: center;
            margin: 60px 0 50px 0;
        }
        .img-wrap img{
            border-radius: 20px;
            width: 100%;
            max-width: 601px;
        }
    </style>
    @stack('css')
</head>
<body class="body-color">
<title>세은이의 생일을 축하합니다</title>
<section>
    <div class="head-wrap">
        <img class="head-img" src="/img/cake.png" onclick="location.href='/'"/>
        <div class="navbar-wrap">
            <div class="item-top">GIFT</div>
            <div onclick="location.href='{{route('letterMain')}}'">LETTER</div>
            <div class-="item-end">PICTURE</div>
        </div>
    </div>
    <div class="img-wrap">
        @yield('contents')
    </div>
</section>
</body>
@stack('scripts')
</html>
