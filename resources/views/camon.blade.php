@extends('layoutt.layout')

@section('title') Đăng ký thành viên @endsection

@section('content')

    <div class="alert alert-info text-center">

    @if(Session::exists('thongbao'))

        <h4>{{ Session::get('thongbao') }}</h4> <hr>

    @endif

    <a href="/">Về trang chủ</a>

    </div>

@endsection