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
                                <label for="">plate_number</label>
                                <input type="text" name="plate_number" value="{{$model->plate_number}}" class="form-control" placeholder="">
                            </div>
                            @error('plate_number')
                            <p class="text-danger">{{$message}}</p>
                      @enderror
                            <div class="form-group">
                                <label for="">Ảnh</label>
                                <input type="file" name="plate_image" class="form-control" placeholder="">
                            </div>
                           
                            <div class="form-group">
                                <label for="">owner</label>
                                <input type="text" name="owner" value="{{$model->owner}}" class="form-control" placeholder="">
                            </div>
                            @error('owner')
                            <p class="text-danger">{{$message}}</p>
                      @enderror
                        </div>
                        
                            <div class="form-group">
                                <label for="">travel_fee</label>
                                <input type="number" name="travel_fee" value="{{$model->travel_fee}}" class="form-control" placeholder="">
                            </div>
                            @error('travel_fee')
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