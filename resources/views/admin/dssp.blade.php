@extends('admin/layoutadmin')
@section('title') Danh sách sản phẩm  @endsection
@section('noidungchinh')

<h4 class="alert alert-info text-center">{{ Session::get('thongbao') }}</h4>
    <table class="table table-bordered m-auto" id="dssp">
        <caption align="top">DANH SÁCH SẢN PHẨM</caption>
        <tr> 
            <th>Tên loại </th> 
            <th>Tên sản phẩm </th> 
            <th>Giá</th> 
            <th>Hình</th> 
            <th>Sửa Xóa</th> 
        </tr>
        @foreach($dssp->withQueryString() as $sp)
        <tr>
            <td> {{$sp->ten_loai}} </td> 
            <td>{{$sp->ten_sp}}</td>
            <td>{{number_format($sp->gia, 0, ',', '.') }} VNĐ</td>
            <td><img src="{{$sp->hinh}}" alt="" class="img-fluid" width="200" height="200"></td>
            <td>  
                <a class="btn btn-primary btn-sm" href="{{route('sanpham.edit',$sp->id_sp)}}">Sửa </a>
                <form class="d-inline" action="{{ route('sanpham.destroy', $sp->id_sp) }}" method="POST">

                    @csrf  @method('DELETE')
                
                    <button type='submit' onclick="return confirm('Xóa hả')" class="btn btn-danger btn-sm" >
                        Xóa
                    </button>
                
                </form>
            </td>
        </tr>
        @endforeach
        <tr> <td colspan="6"> {{ $dssp->onEachSide(5)->links() }} </div> </td> </tr>
    </table>
@endsection