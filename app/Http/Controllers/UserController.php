<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Routing\Route;

use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return view('admin.user.index',compact('data'));
    }
    public function edit($id){
        $role = User::all();
        $model = User::find($id);
        return view('admin.user.edit',compact('role','model'));
    }
    public function saveEdit(Request $request, $id){
        $model = User::find($id);
        $model->fill($request->all());
        $model->save();
        return redirect(Route('user.index'))->with('msg','Cập nhật thành công');
    }
    public function add(){
        $role = Role::find('3');
        return view('admin.user.add',compact('role'));
    }
    public function saveAdd(Request $request){
        $model = new User();
        $validate = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required|min:5',
            'avatar' => 'required|mimes:png,jpg,gif',
        ],
        [
            'required' => 'Trường này không được bỏ trống',
            'min' => 'Mật khẩu phải trên 6 kí tự',
            'email' => 'email sai định dạng',
            'mimes' => 'ảnh sai định dạng'
            
        ]
    );
        if($request->hasFile('avatar')){
            $imgPath = $request->file('avatar')->store('user');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->avatar = $imgPath;
        }
        $model->fill($request->all());
        $model->password = bcrypt($request->password);
        $model->save();
        return redirect(Route('user.index'))->with('msg','Thêm member thành công');
    }
    public function remove($id){
        User::destroy($id);
        return redirect(Route('user.index'))->with('msg','Xóa user thành công');
    }
}
