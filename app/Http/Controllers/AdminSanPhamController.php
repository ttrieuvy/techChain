<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

Paginator::useBootstrap();

class AdminSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perpage = 10;

        $dssp = DB::table('sanpham')->orderBy('id_sp', 'desc')
            ->join('loai', 'sanpham.id_loai', '=', 'loai.id_loai')
            ->paginate($perpage);
        // ->get();
        return view('admin/dssp', ['dssp' => $dssp]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listloai = DB::table('loai')->orderBy('thutu')->get();
        return view('admin/themsp', ['listloai' => $listloai]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ten_sp = $request['ten_sp'];
        $gia = $request['gia'];
        $gia_km = $request['gia_km'];
        $hinh = $request['hinh'];
        $ngay = $request['ngay'];
        $hot = $request['hot'];
        $anhien = $request['anhien'];
        $tinhchat = $request['tinhchat'];
        $mota = $request['mota'];
        $id_loai = $request['id_loai'];

        DB::table('sanpham')->insert(['id_loai' => $id_loai, 'ten_sp' => $ten_sp, 'gia' => $gia, 'gia_km' => $gia_km, 'hinh' => $hinh, 'ngay' => $hinh, 'ngay' => $ngay, 'hot' => $hot, 'anhien' => $anhien, 'tinhchat' => $tinhchat, 'mota' => $mota]);
        return redirect('/admin/sanpham');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $sp = DB::table('sanpham')->where('id_sp', $id)->first();

        if ($sp == null) {
            $request->session()->flash('thongbao', 'San pham khong ton tai');
            return redirect('admin/sanpham');
        }
        $listloai = DB::table('loai')->orderBy('thutu', 'asc')->get();

        return view('/admin/suasp', ['sp' => $sp, 'listloai' => $listloai]);

        // $sp = \DB::table('sanpham')->where('id_sp', $id)->first();

        // if ($sp==null){

        //     $request->session()->flash('thongbao','Không có sản phẩm này: '. $id);

        //     return redirect('/admin/sanpham');

        // }

        // return view('admin/suasp' , ['sp'=>$sp]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ten_sp = $request['ten_sp'];
        $gia = (int) $request['gia'];
        $gia_km = (int) $request['gia_km'];
        $anhien = (int) $request['anhien'];
        $hot = (int) $request['hot'];
        $id_loai = (int) $request['id_loai'];
        $tinhchat = (int) $request['tinhchat'];
        $ngay = $request['ngay'];
        $hinh = $request['hinh'];
        $mota = $request['mota'];
        DB::table('sanpham')->where('id_sp', $id)
            ->update([

                'ten_sp' => $ten_sp, 'gia' => $gia, 'gia_km' => $gia_km,

                'anhien' => $anhien, 'hot' => $hot, 'id_loai' => $id_loai,

                'tinhchat' => $tinhchat, 'ngay' => $ngay, 'hinh' => $hinh, 'mota' => $mota,

            ]);
        $request->session()->flash('thongbao', 'San pham co id ' . $id . ' da duoc sua');
        return redirect('/admin/sanpham');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $id = DB::table('sanpham')->where('id_sp', $id)->count();

        if ($id == 0) {
            $request->session()->flash('thongbao', 'San pham khong ton tai');
            return redirect('/admin/sanpham');
        }

        DB::table('sanpham')->where('id_sp', $id)->delete();
        $request->session()->flash('thongbao', 'Đã xóa san pham');
        return redirect('/admin/sanpham');
    }
}
