<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/poly.css">
    <style>
        #userinfo{

position: absolute; top: 20px; right: 40px;

color: white; font-weight: bold; text-align: right;

}

#userinfo a { text-decoration: none; color: white}

#userinfo a:hover { color: yellow}
    </style>
</head>

<body>
    <div id="userinfo">

        @if (Auth::check())          
    
            Chào {{Auth::user()->ho}} {{Auth::user()->ten}}!
    
            <a href="/thoat">Thoát</a>
    
        @else
    
            Chào bạn !
    
            <a href="/dangnhap">Đăng nhập</a>
    
        @endif
    
    </div>
    <div class="row" style="background-image: url(image/background.png);">
        <div class="container col-lg-11 col-md-11">

            <div class="row pb-3 pt-3">
                <div class="col-sm-12 text-center">
                    <a href="index.html" class="nav-link">
                        <img src="image/Supreme-logo-newyork.png" alt="logo" width="200px">
                    </a>
                </div>

            </div>

            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light rounded-2" style="background-color: #e5201a;">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

                                <li class="nav-item">
                                    <a class="nav-link text-light fw-bold" aria-current="page" href="category.html">Áo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light fw-bold" href="category.html">Quần</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light fw-bold" href="category.html">Giày</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light fw-bold" href="category.html">Phụ kiện</a>
                                </li>
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
                                            <a href="cart.html" class="nav-link text-light fw-bold"><i class="fa-solid fa-cart-shopping fa-xl" style="color: white;"></i>Giỏ hàng</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link text-light fw-bold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-user fa-xl" style="color: white;"></i>Tài khoản
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Đăng nhập</a></li>
                                            <li><a class="dropdown-item" href="#">Đăng ký</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="row bg-light">
                <div class="col-lg-6"> </div>
                <!-- Pills navs -->
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <!-- Pills navs -->

                <!-- Pills content -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form>
                            <div class="text-center mb-3">
                                <p>Sign in with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>

                            <p class="text-center">or:</p>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="loginName" class="form-control" />
                                <label class="form-label" for="loginName">Email or username</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="loginPassword" class="form-control" />
                                <label class="form-label" for="loginPassword">Password</label>
                            </div>

                            <!-- 2 column grid layout -->
                            <div class="row mb-4">
                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-3 mb-md-0">
                                        <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                        <label class="form-check-label" for="loginCheck"> Remember me </label>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Simple link -->
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="#!">Register</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form>
                            <div class="text-center mb-3">
                                <p>Sign up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>

                            <p class="text-center">or:</p>

                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerName" class="form-control" />
                                <label class="form-label" for="registerName">Name</label>
                            </div>

                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerUsername" class="form-control" />
                                <label class="form-label" for="registerUsername">Username</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="registerEmail" class="form-control" />
                                <label class="form-label" for="registerEmail">Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerPassword" class="form-control" />
                                <label class="form-label" for="registerPassword">Password</label>
                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerRepeatPassword" class="form-control" />
                                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
                                <label class="form-check-label" for="registerCheck">
                                    I have read and agree to the terms
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
                        </form>
                    </div>
                </div>
                <!-- Pills content -->
                <div class="row mt-3">
                    <footer class="text-center text-bg-light">
                        <!-- Grid container -->
                        <div class="container py-4">

                            <div class="row">


                                <div class="hop col-lg-2 col-md-2 col-sm-2 mb-4 mb-md-0">
                                    <div class="overlay">
                                    </div>
                                    <img src="https://cdn.sanity.io/images/ldn4d4qt/production-fw23/1f30dbd6e624f4f4ee00f48b37b9257d9321a3c5-1140x1140.jpg?w=768&h=768&auto=format" alt="Avatar" class="image w-100">
                                    <div class="middle align-middle">
                                        <div class="text ">Berlin</div>
                                    </div>
                                </div>
                                <div class="hop col-lg-2 col-md-2 col-sm-2 mb-4 mb-md-0">
                                    <div class="overlay">
                                    </div>
                                    <img src="https://cdn.sanity.io/images/ldn4d4qt/production-fw23/fe18eae10b2574c45a19bc98bc8a3feb14a311ff-1140x1140.jpg?w=768&h=768&auto=format" alt="Avatar" class="image w-100">
                                    <div class="middle">
                                        <div class="text">Shibuya</div>
                                    </div>
                                </div>
                                <div class="hop col-lg-2 col-md-2 col-sm-2 mb-4 mb-md-0">
                                    <div class="overlay">
                                    </div>
                                    <img src="https://cdn.sanity.io/images/ldn4d4qt/production-fw23/e483af8cd0b15ce2adb384b4e3666f80e86fba78-1140x1140.jpg?w=768&h=768&auto=format" alt="Avatar" class="image w-100">
                                    <div class="middle">
                                        <div class="text">Osaka</div>
                                    </div>
                                </div>
                                <div class="hop col-lg-2 col-md-2 col-sm-2 mb-4 mb-md-0">
                                    <div class="overlay">
                                    </div>
                                    <img src="https://cdn.sanity.io/images/ldn4d4qt/production-fw23/e8780745134f5a2557276d9b8d7df833f683ba5e-1140x1140.jpg?w=768&h=768&auto=format" alt="Avatar" class="image w-100">
                                    <div class="middle">
                                        <div class="text">Fukuoka</div>
                                    </div>
                                </div>
                                <div class="hop col-lg-2 col-md-2 col-sm-2 mb-4 mb-md-0">
                                    <div class="overlay">
                                    </div>
                                    <img src="https://cdn.sanity.io/images/ldn4d4qt/production-fw23/8660af375ecd1983170d9d9302fd5f65a3cc7acd-2280x2280.jpg?w=768&h=768&auto=format" alt="Avatar" class="image w-100">
                                    <div class="middle">
                                        <div class="text">Harajuku</div>
                                    </div>
                                </div>
                                <div class="hop col-lg-2 col-md-2 col-sm-2 mb-4 mb-md-0">
                                    <div class="overlay">
                                    </div>
                                    <img src="https://cdn.sanity.io/images/ldn4d4qt/production-fw23/6dd4a7f6ed65636746575bbf98ddd1b1d2b6d52c-1140x1140.jpg?w=768&h=768&auto=format" alt="Avatar" class="image w-100">
                                    <div class="middle">
                                        <div class="text">Daikanyama</div>
                                    </div>
                                </div>

                            </div>

                            <!-- Section: Images -->
                        </div>
                        <!-- Grid container -->

                        <!-- Copyright -->
                        <div class="text-center text-light p-3" style="background-color: #e5201a;">
                            © 2020 Copyright
                            <a class="text-white" href="https://supreme.com/" style="text-decoration: none;"><b>Supreme</b></a>
                        </div>
                        <!-- Copyright -->
                    </footer>
                </div>
            </div>

        </div>




    </div>


    </div>



    <script src="https://kit.fontawesome.com/98d296ff70.js" crossorigin="anonymous"></script>
    <!-- khai báo dòng này để dùng các icon -->
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script> <!-- khai báo dòng này để dùng boostrap -->
</body>

</html>