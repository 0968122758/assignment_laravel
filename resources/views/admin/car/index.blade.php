@extends('admin.index');
@section('content')
<section class="content">
    <div class="container-fluid">
        @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <table>
                <thead>
                <th>plate_number</th>
                <th>owner</th>
                <th>travel_fee</th>
                <th>plate_image</th>
                <th></th>

                <th>
                    {{-- <a href="{{route('categories.add')}}">Add new</a> --}}
                </th>
                </thead>
                <tbody>
                @foreach ($car as $item)
                    <tr>
                        <td>{{$item->plate_number}}</td>
                        <td>{{$item->owner}}</td>
                        <td>{{$item->travel_fee}}</td>
                        <td>
                            <img src="{{asset($item->plate_image)}}" width="100">
                        </td>

                        <td>
                            <a href="{{route('car.edit', ['id' => $item->id])}}">Edit</a>
                            <a href="{{route('car.remove', ['id' => $item->id])}}" onclick="return confirm('Có không giữ, Mất đừng tìm!')" >Remove</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>



        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection