<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>세은아 생일축하해 - 롤링페이퍼 입력</title>
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <style>
        .body-color{
            background-color: #aaf0d1;
        }
        .input-wrap{
            text-align: center;
            width: 50%;
            height: 80%;
            position: fixed;
            left:50%;
            top:50%;
            transform: translate(-50%, -50%);
            overflow: hidden;
            padding: 30px;
        }
        .input-wrap input{
            width:95%;
            padding:10px;
            font-size:16px;
            text-align: center;
        }
        .title-wrap{
            margin: 15px 0;
        }
        .content-text{
            font-size:20px;
            padding:10px;
            width:95%;
            height: 500px;
            text-align: center;
        }
        .content-btn{
            margin: 18px auto 0 auto;
            width: 95%;
            background-color: #2a9eff;
            border-radius: 10px;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: #fff;
            cursor:pointer;
        }
        .content-btn:hover{
            background-color: #2a7fff;
        }
    </style>
</head>
<body class="body-color">
<section>
    <form action="{{route('letterSave')}}" method="post" id="letterFrm">
        @csrf
        <div class="input-wrap">
            <div class="user-wrap" style="text-align: left">
                <input type="text" name="user" id="user" value="" placeholder="너의 이름/닉네임을 입력해달라구!" style="width:40%; margin-left: 12px;"/>
            </div>
            <div class="title-wrap">
                <input type="text" name="title" id="title" value="" placeholder="제목을 입력해달라구!"/>
            </div>
            <div class="content">
                <textarea class="content-text" id="content" name="content"></textarea>
            </div>
            <div class="content-btn" onclick="contentFrm()">저장</div>
        </div>
    </form>
</section>
</body>
<script>
    function contentFrm(){
        if($("#title").val() == ""){
            alert("이름을 입력해주세요!");
            $("#title").focus();
            return false;
        }
        if($("#user").val() == ""){
            alert("제목을 입력해주세요!");
            $("#user").focus();
            return false;
        }
        if($("#content").val() == ""){
            alert("세은이에게 하고싶은 말을 적어주세요!");
            $("#content").focus();
            return false;
        }
        $("#letterFrm").submit();
    }
</script>
</html>
