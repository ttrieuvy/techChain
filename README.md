# BUỔI 3:

## FILE: routes\web.php

use App\Http\Controllers\SanPhamController; //khai báo link controller để sử dụng SanPhamController::class ở dưới

@yield('trangNoiDung')

@extends('layout') //nhúng file layout vô trang chính

section('tenKhuVuc) //chèn các nội dung con vô trang chính, ví dụ: sản phẩm hot, sản phẩm nối bật

<h1> noi dung muon show</h1>
$show

## .env nơi cấu hình database (dòng 11)

# BUỔI 4:

-   trong giao diện

```
$list_sp->onEachSide(5)->links()
```

## controller

```
->paginate($perpage) //phương thức phân trang với $perpage là số sản phẩn mình muốn nó hiện ở mỗi trang

->value('ten_loai'); // lấy 1 row thông tin sản phẩm

function tenHam(Request $tenBien) //Request la mot bien session
$tenBien->session()->exists
```

form
@csrf thêm vào sau thẻ mở để có thể xử lý form

# BUỔI 5:

session
$request->session()->flash('tenTruong', 'noiDung') //hàm thông báo tức thì, sẽ mất sau khi thực thi 1 lần
session()->has('tenTruong') //kiểm tra sự tồn tại của một trường trong session

model

file config
