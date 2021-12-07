@extends('admin.index');
@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="container">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">name</label>
                            <select name="role_id" class="form-control">
                                @foreach ($role as $item)
                                <option @if($item->role_id == $model->role_id) selected @endif value="{{$item->Role->id}}">{{$item->Role->name}}</option>
                                @endforeach
                            </select>
                            </div>
                            
                        <div class="col-12 d-flex justify-content-end">
                            <br>
                            {{-- <a href="{{route('product.index')}}" class="btn btn-danger">Hủy</a> --}}
                            &nbsp;
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection