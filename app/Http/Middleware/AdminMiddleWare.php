<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleWare
{

    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        $user = Auth::guard('admin')->user();
        if ($user && $user->vaitro == 1) {
            return $next($request);
        } else {
            $request->session()->put('prevurl', url()->current());
            return redirect(url('admin/dangnhap'))->with('thongbao', 'Ban can dang nhap voi vai tro admin');
        }
    }
}
