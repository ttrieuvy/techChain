@extends('layoutt.layout')

@section('content')    
    <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <div class="mt-2 mb-3 card">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Keywords">
                                <input type="submit" class="input-group-text" value="Tìm kiếm"
                                    style="background-color: red; color: white;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">

                        @foreach ($list_sp as $sp)
                            <div class="col-lg-3 col-md-4 mb-md-2">
                                <a href="/sp/{{ $sp->id_sp }}" class="nav-link">
                                    <div class="card">
                                        <img src="{{ $sp->hinh }}" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $sp->ten_sp }}</h5>
                                            <p class="card-text">giá sản phẩm</p>
                                            <div class="text-end">
                                                <a href="/themvaogio/{{ $sp->id_sp }}/1"
                                                    class="btn btn-danger text-end">Mua ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach



                    </div>
                </div>

                <div class="p-2">
                    <!-- <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" style="color: #e5201a;">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" style="color: #e5201a;" href="index.html">1</a></li>
                            <li class="page-item"><a class="page-link" style="color: #e5201a;" href="index2.html">2</a></li>
    
                            <li class="page-item">
                                <a class="page-link" style="color: #e5201a;" href="#">Next</a>
                            </li>
                        </ul>
                    </nav> -->

                    {{ $list_sp->onEachSide(5)->links() }}
                </div>

            </div>

@endsection


   



