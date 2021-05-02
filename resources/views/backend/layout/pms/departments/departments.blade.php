@extends('backend.welcome')
@section('page')
    <!-- Button trigger modal -->
    <br>
    <center><a href="{{route('departments.create')}}"><button type="button" class="btn btn-warning" >
                ADD DEPARTMENT
            </button></a></center><br>



    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}

        </div>
    @endif






{{--    --}}{{--    //Search Panel--}}

{{--    <div class="row-cols-4">--}}
{{--        <div class="col-md-4">--}}
{{--            <div class="col-md-3">--}}
{{--                <div class="col-md-2">--}}


{{--                    <form action="{{route('department.search')}}"method="POST">--}}
{{--                        @csrf--}}
{{--                        <input name="search" type="text" placeholder="search" class="form-control">--}}
{{--                        <button type="submit" class="btn btn-info">Search </button>--}}


{{--                    </form>--}}

{{--                </div>--}}
{{--            </div>--}}



            {{--    //End Search Panel--}}







            <table  class="table table-responsive table-bordered table-hover">
                <thead>

                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">CONTACT</th>
                <th scope="col">ROOM NO</th>
                <th scope="col">ACTION</th>


                </thead>
                <tbody>


                @foreach ($departments as $data)
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->contact}}</td>
                        <td>{{$data->room_no}}</td>

                        <td>
                            <a class="btn btn-success" href="">view</a>
                            <a class="btn btn-info " href="">Edit</a>
                            <a class="btn btn-danger" href="{{route('department.delete',$data->id)}}">Delete</a>

                        </td>



                    </tr>


                @endforeach


                </tbody>






            </table>
    {{$departments->links()}}



@stop
