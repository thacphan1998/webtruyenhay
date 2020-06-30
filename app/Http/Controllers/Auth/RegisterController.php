<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;
use Hash;

class RegisterController extends Controller
{
    public function register()
  {

    return view('frontend.register');
  }

  public function storeUser(Request $request)
  {
      $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:8|confirmed',
          'password_confirmation' => 'required',
      ], [
        'email.required' => 'Email không được để trống',
        'email.unique' => 'Email đã tồn tại',
        'password.required' => 'Mật khẩu không được để trống',
        'password_confirmation.required' => 'Xác nhận mật khẩu không được để trống',
      ]);

      User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
      ]);

      return redirect('dang-nhap');
  }
}