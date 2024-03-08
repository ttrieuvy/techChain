<div class="row mt-3">
    <h2 class="rounded-2">Sản phẩm xem nhiều</h2>
@foreach($spxemnhieu as $sp)

<div class="col-lg-3 col-md-4 mb-md-2">
    <a href="sp/{{$sp->id_sp}}" class="nav-link">
        <div class="card">
            <img src="{{$sp->hinh}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{$sp->ten_sp}}</h5>
                <p class="card-text">{{ number_format($sp->gia, 0 , ',', '.') }} VNĐ</p>
                <div class="text-end">
                    <a href="cart.html" class="btn btn-danger text-end">Mua ngay</a>
                </div>
            </div>
        </div>
    </a>
</div>

@endforeach
</div>