<head>

    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <link href="/css/admin.css" rel="stylesheet">
    
    <title> @yield('title')</title>
    <style>
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

#container {
    width: 1200px;
    margin: auto;
}

#container>header {
    background: darkcyan;
    height: 90px;
    position: relative;
}

#container>nav {
    height: 60px;
}

#container>footer {

    margin: 20px 0;
    height: 90px;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 1.5em;
    background: darkcyan;
    color: white;

}

#container #frm {
    width: 900px;
    border: 1px solid black;
}
    </style>
    </head>
    
    <body>
    
    <div id="container">
    
    <header>  </header>
    
    <nav class="bg-light">
    
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
    
        <div class="container-fluid">
    
            <a class="navbar-brand" href="#"></a>
    
            <button class="navbar-toggler" type="button"
    
    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" >
    
            <span class="navbar-toggler-icon"></span>
    
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
                <li class="nav-item">
    
                <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
    
                </li>
    
                <li class="nav-item dropdown">
    
                <a class="nav-link dropdown-toggle" href="#" role="button"
    
    data-bs-toggle="dropdown">Quản lý loại </a>
    
                <ul class="dropdown-menu">
    
                <li><a class="dropdown-item" href="/admin/loai/create">Thêm loại sản phẩm</a> </li>
    
              <li><a class="dropdown-item" href="/admin/loai">Danh sách loại SP</a></li>
    
                </ul>
    
                </li>
    
                <li class="nav-item dropdown">
    
                <a class="nav-link dropdown-toggle" href="#" role="button"
    
    data-bs-toggle="dropdown" >Quản lý sản phẩm </a>
    
                <ul class="dropdown-menu">
    
                  <li><a class="dropdown-item" href="/admin/sanpham/create">Thêm sản phẩm</a> </li>
    
                  <li><a class="dropdown-item" href="/admin/sanpham">Danh sách sản phẩm</a></li>
    
                </ul>
    
                </li>
    
            </ul>
    
            </div>
    
        </div>
    
        </nav>
    
    </nav>
    
    <main>   @yield('noidungchinh') </main>
    
    <footer> Dự án Tech chain ! Phát triển bởi sinh viên ...</footer>
    
    </div>
    
    </body>