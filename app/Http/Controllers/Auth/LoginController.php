<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


    protected function redirectTo()
    {
        $UserId = Auth::id();

        // if(Auth::check() && Auth::user()->role == 'Inquilino')
        // {
        //     return redirect()->route('workspace',['id' => $UserId]);
        // }
        // elseif (Auth::check() && Auth::user()->role == 'Propietario')
        // {
        //     return redirect()->route('dashboard',['id' => $UserId]);
        // }
        return redirectTo('/');
    }

    public function login()
    {

      return view('frontend.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $request->password=Hash::make($request->password);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user =Auth::user();
            if(isset($user) && $user->role === 'admin'){
                return redirect()->intended('/')->with('status', 'Đăng nhập thành công');
            }
            return redirect()->intended('trang-chu')->with('status', 'Đăng nhập thành công');
        }

        return redirect('/dang-nhap')->with('error', 'Tên đăng nhập hoặc mật khẩu không đúng');
    }

    public function logout() {
      Auth::logout();

      return redirect('/dang-nhap');
    }

}