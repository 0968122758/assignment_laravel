@extends('admin.index');
@section('content')
    <section class="content">
            @if(session('msg'))
            <div class="alert alert-success">{{session('msg')}}</div>
            @endif
            <div class="row">
                <table>
                    <thead>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th>Role</th>
                    <th>
                        <a href="{{route('user.add')}}"><button class="btn btn-success">Add New</button></a>
                    </th>
                    </thead>
                    <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                <img src="{{asset($item->avatar)}}" width="100">
                            </td>

                            <td>{{$item->Role->name}}</td>
                            <td>
                            @if($item->email == Auth::user()->email || Auth::user()->role_id != 1 )
                                <button  disabled="disabled"  class="btn btn-primary">Edit</button>
                                <button disabled="disabled" class="btn btn-danger">Delete</button>
                               @else
                               <a style="color:rgb(248, 29, 0)" href="{{route('user.edit', ['id' => $item->id])}}">
                                <button  class="btn btn-primary">Edit</button>
                                </a>
                               <a style="color:rgb(248, 29, 0)" href="{{route('user.remove', ['id' => $item->id])}}" onclick="return confirm('Có không giữ, Mất đừng tìm!')" >
                            <button class="btn btn-danger">Delete</button>
                            </a>
                               @endif
                            </td>         
                        </tr>
                    @endforeach

                    </tbody>
                </table>



            </div>
    </section>
@endsection