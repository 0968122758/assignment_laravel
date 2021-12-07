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
                                <input type="text" name="name" class="form-control" placeholder="">
                            </div>
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                      @enderror
                            <div class="form-group">
                                <label for="">avatar</label>
                                <input type="file" name="avatar" class="form-control" placeholder="">
                            </div>
                            @error('avatar')
                            <p class="text-danger">{{$message}}</p>
                      @enderror
                            <label for="">car_id</label>
                            <select name="car_id" class="form-control">
                                @foreach ($car_id as $item)
                                    <option value="{{$item->id}}">{{$item->plate_number}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                            <div class="form-group">
                                <label for="">travel_time</label>
                                <input type="date" name="travel_time" class="form-control" placeholder="">
                            </div>
                            @error('travel_time')
                            <p class="text-danger">{{$message}}</p>
                      @enderror

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