@extends('master.main')
@section('title','롤링페이퍼')
@push('css')
<style>
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
@endpush
@section('contents')
    <div class="img-wrap">
        <img src="/img/seun_main1.jpg"/>
    </div>
@endsection