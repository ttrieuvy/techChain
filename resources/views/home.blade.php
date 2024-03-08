<!-- nhúng file layout -->
@extends('layoutt.layout')

<!-- tạo một vùng để nhúng giao diện của từng phần vô -->
@section ('content')

{{-- banner --}}
@include('layoutt.banner')

@include('sanphamxemnhieu')

@include('sanphamnoibat')

@include('layoutt.cate')
<!-- kết thúc việc nhúng giao diện của khu vực này -->
@endsection


