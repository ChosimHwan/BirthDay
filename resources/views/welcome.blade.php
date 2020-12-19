<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                max-width: 20%;
            }
            .item-top{
                align-self: flex-start;
            }
            .item-end{
                align-self: flex-end;
            }
            .img-wrap{
                text-align: center;
                margin-top: 50px;
            }
            .img-wrap img{
                border-radius: 20px;
            }
        </style>
    </head>
    <body class="body-color">
        <title>세은이의 생일을 축하합니다</title>
        <section>
            <div class="head-wrap">
                <img class="head-img" src="/img/cake.png"/>
                <div class="navbar-wrap">
                    <div class="item-top">GIFT</div>
                    <div>LETTER</div>
                    <div class-="item-end">PICTURE</div>
                </div>
            </div>
            <div class="img-wrap">
                <img src="/img/seun_main.jpg"/>
            </div>
        </section>
    </body>
</html>
