@extends('master.main')
@section('title','롤링페이퍼')
@push('css')
<style>
    .letter-wrap{
        display:flex;
        align-items: center;
        justify-content: center;
        flex-flow: wrap;
    }
    .letter-content {
        position: relative;
        background-color: #B8DFF8;
        width: 20%;
        padding: 40px 10px;
        border-radius: 20px;
        text-align: center;
        margin-right: 20px;
        margin-bottom:50px;
        box-shadow: 1px 5px 5px;
        font-size: 20px;
        cursor: pointer;
    }
    .rolling-btn{
        margin: 0 auto 50px auto;
        width:300px;
        background-color:#ff622c ;
        color: #fff;
        padding: 20px 20px;
        border-radius: 20px;
        font-size: 20px;
        cursor: pointer;
        text-align: center;
    }
    .rolling-btn:hover{
        background-color: #ff4201;
        font-weight: bold;
    }
    .layout {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999;
        width: 100%;
        height: 100%;
        background-color: #000;
        opacity: 0.8;
        display: none;
    }
    .latter-box{
        width: 570px;
        padding: 90px 40px;
        background-color: #fff;
        z-index: 9999;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: none;
        border-radius: 20px;
        font-size: 18px;
    }
    .to_user{
        position: absolute;
        top: 12px;
        font-size: 15px;
    }
</style>
@endpush
@section('contents')
    <div class="rolling-btn" onclick="location.href='{{route('letterForm')}}'">
        롤링페이퍼 작성하기
    </div>
    <div class="letter-wrap">
        @foreach($letter_array as $list)
<?php
    //랜덤색상
    $mix = [dechex(rand(hexdec('51'),hexdec('C1'))),'F7','CF' ];
    shuffle($mix);
    $color = "#".$mix[0].$mix[1].$mix[2];
?>
        <div class="letter-content" id="letterContent" onclick="modalOpen('{{$list->letter_id}}')" style="background-color: {{$color}}">
            <div class="to_user">From. {{$list->u_name}}</div>
            {{$list->title}}
            <div class="content-text" id="contentText{{$list->letter_id}}" style="display:none">{{$list->content}}</div>
        </div>
        @endforeach
    </div>

    <!-- Modal창-->
    <div class="layout"></div>
    <div class="latter-box">
        세은아사랑해
    </div>
@endsection
@push('scripts')
    <script>
        function modalOpen(id){
            $(".layout").fadeIn();
            $(".latter-box").fadeIn();
            $(".latter-box").html($("#contentText"+id).html());
        }
        $(".layout").click(function(){
           $(".layout").fadeOut();
            $(".latter-box").fadeOut();
        });
    </script>
@endpush