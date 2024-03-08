@extends('layoutt.layout')
@section('content')

   
        <div class="container col-lg-11 col-md-11">

            <div class="row mt-3">
                <div class="col-lg-7 col-md-8 bg-light rounded-2">
                    <h2 class="my-3 text-center">CHECK OUT</h2>
                    <form action="/luu" method="POST" class=" pb-3 needs-validation" novalidate>
                        @csrf
                        <input type="text" name="ho_ten" class="form-control mb-3" placeholder="Họ và tên" required>


                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control " placeholder="Email" pattern="[a-z0-9._%+-]$"
                                required>
                            <!-- <span class="input-group-text"> @gmail.com</span> -->

                            <select class="input-group-text" aria-label="Default select example" id="duoiemail">
                                <option selected>@gmail.com</option>
                                <option value="1">@fpt.edu.com</option>
                                <option value="2">@icloud.com</option>
                            </select>

                        </div>
                        <select class="form-select mb-3" aria-label="Default select example" id="tp">
                            <option selected>Tỉnh/Thành phố</option>
                            <option value="1">Hà Nội</option>
                            <option value="2">HCM</option>
                            <option value="3">BMT</option>
                            <option value="4">Đà Nẵng</option>
                        </select>
                        <select class="form-select mb-3" aria-label="Default select example" id="qh">
                            <option selected>Quận/Huyện</option>
                            <option value="1">Hà Nội</option>
                            <option value="2">HCM</option>
                            <option value="3">BMT</option>
                            <option value="4">Đà Nẵng</option>
                        </select>
                        <select class="form-select mb-3" aria-label="Default select example" id="px">
                            <option selected>Phường/Xã</option>
                            <option value="1">Hà Nội</option>
                            <option value="2">HCM</option>
                            <option value="3">BMT</option>
                            <option value="4">Đà Nẵng</option>
                        </select>
                        <input type="text" name="dia_chi" class="form-control mb-3" placeholder="Địa chỉ" required>
                        <input type="text" name="dien_thoai" class="form-control mb-3" placeholder="Số điện thoại"
                            pattern="/^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/" required>
                        <textarea rows="3" cols="10" placeholder="Lưu ý" class="form-control mb-3"></textarea>

                        <div class="col-lg-12 text-end">

                            <button class="btn btn-light">Nhập lại</button>
                            <button class="btn btn-primary">Thanh toán</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-md-4 ">
                    <div class="card">
                        <h2 class=" my-3 text-center">Tạm tính</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col">Đơn giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col" class="text-end px-4">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                    $tongtien = 0;
                                    $tongsoluong = 0;
                                    foreach ($cart as $i => $p) {
                                        $i++;
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
                                        echo '
                                        <tr>
                                        <th scope="row">'.$i.'</th>
                                        <td>'. $ten_sp .'</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td class="text-end px-4">@mdo</td>
                                    </tr>
                                    ';
                                    }
                                @endphp

                            </tbody>

                        </table>



                        <div class="">
                            <div class="px-4" style="display: flex;justify-content: space-between;">
                                <b>Phí ship</b>
                                <p>Thành tiền</p>
                            </div>
                            <div class="px-4" style="display: flex;justify-content: space-between;">
                                <h5 class="fw-bold">Thành tiền</h5>
                                <p>r25255</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        
        </div>
@endsection