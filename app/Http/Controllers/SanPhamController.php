<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

Paginator::useBootstrap();

class SanPhamController extends Controller
{

    function __construct()
    {
        $loaisp = DB::table('loai')->where('anhien', 1)->orderBy('thutu')->get();
        View::share('loaisp', $loaisp);
    }

    public function tinhTich($a, $b)
    {
        return $a * $b;
    }

    function layoutt()
    {

        return view('admin.layoutadmin');
    }

    function index()
    {
        $spnoibat = DB::table('sanpham')
            ->where('hot', 1)
            ->orderBy('ngay', 'desc')
            ->limit(8)
            ->get();

        $spxemnhieu = DB::table('sanpham')
            ->orderBy('soluotxem', 'desc')
            ->limit(8)
            ->get();
        return view('home', ['spnoibat' => $spnoibat, 'spxemnhieu' => $spxemnhieu]);
    }

    function chitietsp($id_sp = 0)
    {
        $sp = DB::table('sanpham')
            ->where('id_sp', $id_sp)
            ->first();

        $idloai = $sp->id_loai;

        $splienquan = DB::table('sanpham')
            ->where('id_loai', $idloai)
            ->limit(4)
            ->get();

        return view('detail', ['id_sp' => $id_sp, 'sp' => $sp, 'id_loai' => $idloai, 'splienquan' => $splienquan]);
    }



    function loai($id_loai = 0)
    {
        $perpage = 12;
        $list_sp = DB::table('sanpham')
            ->where('anhien', 1)
            ->where('id_loai', $id_loai)
            ->paginate($perpage);

        $tenloai = DB::table('loai')
            ->where('id_loai', $id_loai)
            ->value('ten_loai');
        return view('category', ['list_sp' => $list_sp, 'tenloai' => $tenloai]);
    }


    function themvaogio($id_sp = 0, $soluong = 1, Request $request)
    {
        if ($request->session()->exists('cart') == false) { //chưa có cart trong session           
            $request->session()->push('cart', ['id_sp' => $id_sp,  'soluong' => $soluong]);
        } else { // đã có cart, kiểm tra id_sp có trong cart không
            $cart =  $request->session()->get('cart');
            $index = array_search($id_sp, array_column($cart, 'id_sp'));
            if ($index != '') { //id_sp có trong giỏ hàng thì tăhg số lượng
                $cart[$index]['soluong'] += $soluong;
                $request->session()->put('cart', $cart);
            } else { //sp chưa có trong arrary cart thì thêm vào 
                $cart[] = ['id_sp' => $id_sp, 'soluong' => $soluong];
                $request->session()->put('cart', $cart);
            }
        }
        return redirect('/hiengiohang');
    }

    function hiengiohang(Request $request)
    {
        $cart =  $request->session()->get('cart');
        return view('cart', ['products' => $cart]);
    }

    function xoasptronggio(Request $request, $id_sp = 0)
    {
        $cart =  $request->session()->get('cart');
        $index = array_search($id_sp, array_column($cart, 'id_sp'));
        if ($index != '') {
            array_splice($cart, $index, 1);
            $request->session()->put('cart', $cart);
        }
        return redirect('/hiengiohang');
    }

    function thanhtoan(Request $request)
    {
        return view('payment', ['cart' => $request->session()->get('cart')]);
    }

    function luudonhang(Request $request)
    {
        if ($request->session()->exists('cart') == false) { //chưa có cart trong session    

            $request->session()->flash('thongbao', 'Chưa có sản phẩm nào trong giỏ hàng');

            return redirect("/thongbao");
        }

        $ho_ten = $request->post('ho_ten');

        $dia_chi = $request->post('dia_chi');

        $dien_thoai = $request->post('dien_thoai');

        $email = $request->post('email');

        $id_dh = DB::table('donhang')->insertGetId([

            'ho_ten' => $ho_ten, 'dia_chi' => $dia_chi, 'dien_thoai' => $dien_thoai, 'email' => $email

        ]);

        $cart =  $request->session()->get('cart');

        foreach ($cart as $c) {

            $id_sp = $c['id_sp'];

            $soluong = $c['soluong'];

            $gia = DB::table('sanpham')->where('id_sp', '=', $id_sp)->value('gia');

            DB::table('donhangchitiet')->insert([

                'id_dh' => $id_dh, 'id_sp' => $id_sp, 'so_luong' => $soluong, 'gia' => $gia

            ]);
        }

        $request->session()->forget('cart');

        $request->session()->flash('thongbao', 'Cảm ơn bạn! Đơn hàng đã ghi nhận');

        return redirect('/thongbao');
    }

    function thongbao()
    {
        return view('thongbao');
    }
    function download()
    {
        return view("download");
    }
}
