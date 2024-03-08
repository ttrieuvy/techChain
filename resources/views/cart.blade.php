@extends('layoutt.layout')
@section('content')
    <div class="container col-lg-12 col-md-12">

        <!-- <div class="container mt-3 flex-column align-items-center"> -->
        <div class="container mt-3" style="display: flex; flex-direction: column; align-items: center;">
            @php
                $tongtien = 0;
                $tongsoluong = 0;
                foreach ($products as $p) {
                    $id_sp = $p['id_sp'];
                    $soluong = $p['soluong'];

                    $ten_sp = DB::table('sanpham')
                        ->where('id_sp', '=', $id_sp)
                        ->value('ten_sp');

                    $gia = DB::table('sanpham')
                        ->where('id_sp', '=', $id_sp)
                        ->value('gia');

                    $hinh = DB::table('sanpham')
                        ->where('id_sp', '=', $id_sp)
                        ->value('hinh');

                    $thanhtien = $gia * $soluong;
                    $tongtien += $thanhtien;
                    $tongsoluong += $soluong;
                    $thanhtien = number_format($thanhtien, 0, ',', '.');
                    $gia = number_format($gia, 0, ',', '.');

                    echo '<div class="card mb-3 " style="max-width: 800px;">
            <div class="row g-0">
                <div class="col-sm-1 border-end" style="display: flex; align-items: center; justify-content: center;">
                    <input class="form-check-input border-danger-subtle" type="checkbox" value="" aria-label="Checkbox for following text input">
                </div>
                <div class="col-md-4">
                    <img src="' .
                        $hinh .
                        '" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">' .
                        $ten_sp .
                        '
                        </h5>
                        <p class="card-text"> ' .
                        $gia .
                        '</p>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary">-</button>
                                    
                                    <input type="text" class="form-control text-center" value="' .
                        $soluong .
                        '" min="1">
                                    <button type="button" class="btn btn-primary">+</button>
                                </div>
                            </div>
                            <div class="col-sm-8 text-end middle-y">
                                <a href="xoasptronggio/' .
                        $id_sp .
                        '" class="nav-link">
                                    <button type="button" class="btn"><i class="fa-solid fa-trash-can fa-lg" style="color: #fa0000;"></i></button>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>';
                }

            @endphp

        </div>
    </div>

    <div class="container buynow rounded-top-2 shadow-lg shadow-sm z-1" style="background-color: #e5201ac9;">
        <div class="row " style="height: 100%;">
            <div class="col-sm-6 muangay text-light">
                <p class="mb-0">Thanh tien</p>
                <b>10000000</b>
            </div>

            <div class="col-sm-6 muangay">
                <a href="/thanhtoan" class="btn btn-light text-danger">Mua ngay</a>

            </div>
        </div>
    </div>
@endsection
