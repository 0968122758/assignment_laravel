@extends('admin.index');
@section('content')
    <section class="content">
            @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="row">
                <table>
                    <thead>
                    <th>name</th>
                    <th>car_id</th>
                    <th>travel_time</th>
                    <th>avatar</th>
                    <th></th>

                    <th>
                        {{-- <a href="{{route('categories.add')}}">Add new</a> --}}
                    </th>
                    </thead>
                    <tbody>
                    @foreach ($passengers as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->car_id}}</td>
                            <td>{{$item->travel_time}}</td>
                            <td>
                                <img src="{{asset($item->avatar)}}" width="100">
                            </td>

                            <td>
                                <a href="{{route('passengers.edit', ['id' => $item->id])}}"  >Edit</a>
                                <a href="{{route('passengers.remove', ['id' => $item->id])}}" onclick="return confirm('Có không giữ, Mất đừng tìm!')" >Remove</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>



            </div>
    </section>
@endsection