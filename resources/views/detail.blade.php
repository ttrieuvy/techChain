@extends('layoutt.layout')

@section('content')
            <div class="container  col-lg-11 col-md-11">
                <div class="row mt-3 flex-row-reverse">
                    <div class="col-lg-3 col-md-12">
                        <div class="col-lg-12 col-md-12 mb-3 card">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Keywords">
                                    <input type="submit" class="input-group-text" value="Tìm kiếm"
                                        style="background-color: red; color: white;">
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 mb-2 card ">
                            <div class="accordion " id="accordionExample  rounded-0">
                                <div class="accordion-item ">
                                    <h2 class="accordion-header ">
                                        <button class="accordion-button  rounded-0" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fa-solid fa-bars fa-xl me-3" style="color: #ff0000;"></i> <b>Sản phẩm
                                                nổi bật</b>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">

                                        @foreach ($splienquan as $sanpham)
                                            <div class="accordion-body">
                                                <a href="{{ $sanpham->id_sp }}" class="nav-link">{{ $sanpham->ten_sp }}
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="row pt-2 rounded-2 text-light" style="background-color: #e5201a;">
                            <div class="col-lg-6 col-md-6 mb-md-2">
                                <div class="col-lg-12 rounded-2">
                                    <img src="{{ $sp->hinh }}" alt="" class="img-fluid rounded-2">
                                </div>

                                <div class="col-lg-12 col-md-12 mt-2">
                                    <div class="row">

                                        <div class="col-lg-3 col-md-3"><img src="image/63ac48d3a3773.jpg" alt=""
                                                class="img-thumbnail">
                                        </div>
                                        <div class="col-lg-3 col-md-3"><img src="image/63ac48d3a5a32.jpg" alt=""
                                                class="img-thumbnail">
                                        </div>
                                        <div class="col-lg-3 col-md-3"><img src="image/63ac48d3be4ab.jpg" alt=""
                                                class="img-thumbnail">
                                        </div>
                                        <div class="col-lg-3 col-md-3"><img src="image/63ac48d3c3a53.jpg" alt=""
                                                class="img-thumbnail">
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $sp->ten_sp }}</h3>
                                    <p class="card-text">{{ $id_loai }}</p>

                                    <h5>{{ number_format($sp->gia, 0, ',', '.') }} VNĐ</h5>
                                    <ul>
                                        <li>Số lượng: <span class="badge text-bg-success">10</span></li>
                                        <li>Giảm giá: <span class="badge text-bg-primary">10%</span></li>
                                    </ul>
                                    <div class="text-end mx-5 my-5">
                                        <a href="/themvaogio/{{ $sp->id_sp }}/1"
                                            class="btn btn-light text-danger fw-bold text-end">Thêm vào
                                            giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="accordion mt-3 m-0 p-0  rounded-2" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item ">
                                    <h2 class="accordion-header  rounded-2">
                                        <button class="accordion-button collapsed  rounded-2" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseOne">
                                            <h5>Thông tin</h5>
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse ">
                                        <div class="accordion-body  rounded-0">
                                            Levents® Airplane Tee/ Black
                                            <br>
                                            <br>
                                            Material: Lì ven Original
                                            <br>
                                            <br>

                                            Size: 1/2/3/4
                                            <br>
                                            <br>
                                            <ul>
                                                <li>Áo oversize có độ dài phủ quá mông,phần tay áo rộng rãi, dài tay áo chạm
                                                    khuỷu
                                                    tay người mặc, form dáng thoải mái, rộng rãi khi mặc.</li>
                                                <li>Phù hợp cho những bạn không muốn khoe đường cong cơ thể, vì sự thoải mái
                                                    cũng
                                                    như tính năng tiện dụng khi có thể kết hợp với nhiều item khác nhau cho
                                                    mọi hoạt
                                                    động.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseTwo">
                                            <h5>Bảng size</h5>
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                        <div class="accordion-body row mx-2">
                                            <p class="col-lg-6 m-0 text-start ">8 US</p>
                                            <p class="col-lg-6 m-0 text-end ">10000000</p>
                                        </div>
                                        <hr class="m-1">
                                        <div class="accordion-body row mx-2">
                                            <p class="col-lg-6 m-0 text-start ">8 US</p>
                                            <p class="col-lg-6 m-0 text-end ">10000000</p>
                                        </div>
                                        <hr class="m-1">
                                        <div class="accordion-body row mx-2">
                                            <p class="col-lg-6 m-0 text-start ">8 US</p>
                                            <p class="col-lg-6 m-0 text-end ">10000000</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header  rounded-2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            <h5>Đổi trả</h5>
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            Nhằm mang lại cho bạn sự tiện lợi và những trải nghiệm tuyệt vời khi mua hàng,
                                            tụi mình đã phát triển dịch vụ đổi hàng tận nơi và chính sách bảo hành.
                                            <br><br>
                                            Tham khảo thêm thông tin về chính sách <a href=""
                                                class="link-danger">tại
                                                đây</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
      
@endsection
