<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function login(Request $request){
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],
    [
        'required' => 'Trường này không được để trống',
        'email' => 'email không đúng định dạng'
    ]);
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email'=>$email,'password' => $password], $request->remember)){
            return redirect(route('ad'));
        }
        return back()->with('msg', 'Tài khoản/mật khẩu không chính xác');
    }
    public function dang_ky(){
        return view('login.sign_in');
    }
    public function save_dang_ky(Request $request){
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'avatar' => 'required|mimes:jpeg,jpg,png,gif',
            'name' => 'required'

        ],
    [
        'required' => 'Trường này không được để trống',
        'email' => 'email không đúng định dạng',
        'min' => 'mật khẩu phải trên 6 ký tự',
        'mimes' => 'ảnh sai định dạng'
    ]);

        if($request->hasFile('avatar')){
            $imgPath = $request->file('avatar')->store('user');
            $imgPath = str_replace('public/', '', $imgPath);
            $request->avatar = $imgPath;
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'avatar' => $request->avatar,
            'role_id' => '123'
        ]);
        return redirect(Route('dang_nhap'))->with('message','Đăng ký Thành Công, Mời bạn đăng nhập');
        
      
    }
    
}
