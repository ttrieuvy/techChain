@extends('layoutt.layout')
@section('content')
    @if(session()->has('thongbao')==true){
        <div class="alert alert-info h3 text-center text-danger">

            {{ session()->get('thongbao') }}
        
        </div>
        
    }
    @endif
@endsection