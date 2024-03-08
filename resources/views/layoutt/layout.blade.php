<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supreme</title>
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style/poly.css">
    <style>
        h2 {
            color: white;
            background-color: #e5201a;
        }
    </style>
</head>

<body>
    <div class="row " style="background-image: url(/image/background.png);">

        <div class="container col-lg-11 col-md-11">
            
            <div class="row pb-3 pt-3">
                <div class="col-lg-12 text-center">
                    <a href="/" class="nav-link">
                        <img src="/image/Supreme-logo-newyork.png" alt="logo" width="200px">
                    </a>
                </div>

            </div>
            {{-- nav --}}
            @include('layoutt.nav')
            
            

            {{-- content --}}
           

                @yield('content')
            
            {{-- cate --}}
            

            {{-- footer --}}
            @include('layoutt.footer')
        </div>
    </div>



    <script src="https://kit.fontawesome.com/98d296ff70.js" crossorigin="anonymous"></script>
    <!-- khai báo dòng này để dùng các icon -->
    <script src="/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script> <!-- khai báo dòng này để dùng boostrap -->
</body>

</html>