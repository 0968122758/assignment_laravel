<?php

namespace App\Http\Controllers;

use App\Models\passengers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Car;


class PassengersController extends Controller
{
    public function index(){
        $passengers  = passengers::all();
        return view('admin.passengers.index',compact('passengers'));
    }
    public function add(){
        $car_id = Car::all();
        return view('admin.passengers.add', compact('car_id'));
    }
    public function remove($id){
        Passengers::destroy($id);
        return redirect(route('passengers.index'));
    }
    public function saveAdd(Request $rq){
        $validate = $rq->validate([
            'name' => 'required',
            'travel_time' => 'required',
            'avatar' => 'required',
        ],
        [
            'required' => 'Trường này không được bỏ trống'
        ]
    );
        $model = new Passengers();
        if($rq->hasFile('avatar')){
            $imgPath = $rq->file('avatar')->store('passengers');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->avatar = $imgPath;
        }
        $model->fill($rq->all());
        $model->save();
        return redirect(route('passengers.index'))->with('message','Thêm Mới Thành Công');
    }
    public function edit($id){
        $model = Passengers::find($id);
        $car = Car::all();
        return view('admin.passengers.edit',compact('model','car'));
    }
    public function saveEdit(Request $request, $id){
        $validate = $request->validate([
            'name' => 'required',
            'travel_time' => 'required',
        ],
        [
            'required' => 'Trường này không được bỏ trống'
        ]
    );
        $model = Passengers::find($id);
        if($request->hasFile('avatar')){
            $oldImg = str_replace('', 'public/', $model->image);
            Storage::delete($oldImg);

            $imgPath = $request->file('avatar')->store('passengers');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->avatar = $imgPath;
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('passengers.index'))->with('message','Update Thành Công');
    }
}
