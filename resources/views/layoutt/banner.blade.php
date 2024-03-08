<div class="row">
    <div class="col-lg-9">
        <div class="row mt-2">
            <div class="container col-lg-12">
                <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <a href="content.html">
                                <img src="image/banner/banner4.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <a href="content.html">
                                <img src="image/banner/banner2.png" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <a href="content.html">
                                <img src="image/banner/banner3.png" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <a href="content.html">
                                <img src="image/banner/banner1.png" class="d-block w-100" alt="...">
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-lg-12 mt-2">
                <div class="row">

                    <div class="col-lg-6 col-md-6 pe-1">
                        <a href="content.html">

                            <img src="image/banner/banner1.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 ps-1">
                        <a href="content.html">

                            <img src="image/banner/banner2.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-3">

        <div class="col-lg-12 mt-2 mb-3 card">
            <form action="">

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Keywords">
                    <input type="submit" class="input-group-text" value="Tìm kiếm" style="background-color: red; color: white;">
                </div>
            </form>
        </div>
        <div class="col-lg-12 mb-2 card ">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa-solid fa-bars fa-xl me-3" style="color: #ff0000;"></i> <b>Sản phẩm
                                nổi
                                bật</b>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">

                        @foreach($spnoibat as $sp)
                        <div class="accordion-body">
                            <a href="sp/{{$sp->id_sp}}" class="nav-link">{{$sp->ten_sp}}</a>
                        </div>
                       
@endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>