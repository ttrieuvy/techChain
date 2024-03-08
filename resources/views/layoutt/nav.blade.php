<div class="row">
    <nav class="navbar navbar-expand-lg navbar-light rounded-2" style="background-color: #e5201a;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    @foreach($loaisp as $type)
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold" aria-current="page" href="/loai/{{$type->id_loai}}">{{$type->ten_loai}}</a>
                    </li>
                    @endforeach


                    <li class="nav-item dropdown">
                        <a class="nav-link text-light fw-bold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Chăm sóc khách
                            hàng
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Giới thiệu</a></li>
                            <li><a class="dropdown-item" href="#">Liên hệ</a></li>
                            <li><a class="dropdown-item" href="#">Góp ý</a></li>
                            <li><a class="dropdown-item" href="#">Hỏi - đáp</a></li>
                        </ul>
                    </li>


                </ul>

                <div class="d-flex">
                    <ul class="navbar-nav mb-2 mb-lg-0">

                        <li class="nav-item ">
                            <div class="text-end ">
                                <a href="/hiengiohang" class="nav-link text-light fw-bold"><i class="fa-solid fa-cart-shopping fa-xl me-2" style="color: white;"></i>Giỏ hàng</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light fw-bold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular fa-user fa-xl me-2" style="color: white;"></i>Tài khoản
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dangnhap">Đăng nhập</a></li>
                                <li><a class="dropdown-item" href="/dangky">Đăng ký</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>