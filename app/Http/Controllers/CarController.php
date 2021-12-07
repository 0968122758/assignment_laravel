<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index(){
        $car = Car::all();
        return view('admin.car.index', compact('car'));
    }
    public function add(){
        return view('admin.car.add');
    }
    public function remove($id){
        Car::destroy($id);
        return redirect(route('car.index'));
    }
    public function saveAdd(Request $rq){
        $validate = $rq->validate([
            'plate_number' => 'required|unique:cars',
            'owner' => 'required',
            'travel_fee' => 'nullable|integer|min:0',
            'plate_image' => 'required|mimes:jpg,png,gif'
        ],
        [
            'required' => 'Trường này không được để trống',
            'travel_fee.min' => 'số âm',
            'plate_image.mimes' => 'ảnh không đúng định dạng',
            'plate_number.unique' => 'Tên đã tồn tại' 

        ]
    );
        $model = new Car();
        if($rq->hasFile('plate_image')){
            $imgPath = $rq->file('plate_image')->store('public/car');
            $imgPath = str_replace('public/', 'storage/', $imgPath);
            $model->plate_image = $imgPath;
        }
        $model->fill($rq->all());
        $model->save();
        return redirect(route('car.index'))->with('message','Thêm Mới Thành Công');;
    }
    public function edit($id){
        $model = Car::find($id);
        return view('admin.car.edit',compact('model'));
    }
    public function saveEdit(Request $request, $id){
        $validate = $request->validate([
            'plate_number' => 'required',
            'owner' => 'required',
            'travel_fee' => 'integer|min:0'
        ],
        [
            'required' => 'Trường này không được bỏ trống!',
            'travel_fee.min' => 'số âm'
        ]
    );
        $model = Car::find($id);
        if($request->hasFile('plate_image')){
            $oldImg = str_replace('storage/', 'public/', $model->image);
            Storage::delete($oldImg);

            $imgPath = $request->file('plate_image')->store('public/car');
            $imgPath = str_replace('public/', 'storage/', $imgPath);
            $model->plate_image = $imgPath;
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('car.index'))->with('message','Update Thành Công');
    }
}
