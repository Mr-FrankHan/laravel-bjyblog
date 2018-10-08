@extends('layouts.home')

@section('title', $title)

@section('keywords', config('hzfblog.head.keywords'))

@section('description', config('hzfblog.head.description'))

@section('bgimg')
    <img src="{{ asset('images/home/banner1.jpg') }}" width="100%" />
@endsection

@section('content')
    <!-- 左侧列表开始 -->
    <div class="col-xs-12 col-md-12 col-lg-9 b-chat">
        <div class="b-chat-left">
            @foreach($chat as $k => $v)
                @if($k%2 == 0)
                    <ul class="b-chat-one animated bounceInLeft">
                        <img src="{{ $v->image }}" alt="" style="width: 100%">
                        <li class="b-chat-title ">{{ $v->created_at }}</li>
                        <li class="b-chat-content">{{ $v->content }}</li>
                        <div class="b-arrows-right1">
                            <div class="b-arrows-round"></div>
                        </div>
                        <div class="b-arrows-right2"></div>
                    </ul>
                @endif
            @endforeach
        </div>
        <div class="b-chat-middle"></div>
        <div class="b-chat-right">
            @foreach($chat as $k => $v)
                @if($k%2 == 1)
                    <ul class="b-chat-one animated bounceInRight">
                        <img src="{{ $v->image }}" alt="" style="width: 100%">
                        <li class="b-chat-title ">{{ $v->created_at }}</li>
                        <li class="b-chat-content">{{ $v->content }}</li>
                        <div class="b-arrows-right1">
                            <div class="b-arrows-round"></div>
                        </div>
                        <div class="b-arrows-right2"></div>
                    </ul>
                @endif
            @endforeach
        </div>
    </div>
    <!-- 左侧列表结束 -->
@endsection
