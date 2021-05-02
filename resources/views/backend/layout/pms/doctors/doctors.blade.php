@extends('backend.welcome')
@section('page')
    <!-- Button trigger modal -->
    <br>
    <center><a href="{{route('doctors.create')}}"><button type="button" class="btn btn-warning" >
        Add Doctors
            </button></a></center><br>



    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}

        </div>
    @endif






{{--    //Search Panel--}}

    <div class="row-cols-4">
    <div class="col-md-4">

        <form class="form-control" action="{{route('doctor.search')}}"method="POST">
            @csrf
            <input type="text" placeholder="Search here.." name="search">
            <button type="submit"><i class="fa fa-search"></i>Search</button>
        </form>


    </div>



        {{--    //End Search Panel--}}







    <table  class="table table-responsive table-bordered table-hover">
        <thead>

            <th scope="col">ID</th>
            <th scope="col">IMAGE</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">CONTACT</th>
            <th scope="col">GENDER</th>
            <th scope="col">DEPARTMENT</th>
            <th scope="col">ADDRESS</th>
            <th scope="col">ROOM NO</th>
            <th scope="col">ACTION</th>


        </thead>
        <tbody>


            @foreach ($doctors as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>

                    <img style="width:100px " src="{{url('/img/doctors/'.$data->image)}}" alt="Picture Not Found !!">

                </td>

                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->contact}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->department}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->room_no}}</td>

                <td>
                    <a class="btn btn-success" href="">view</a>
                    <a class="btn btn-info " href="">Edit</a>
                    <a class="btn btn-danger" href="{{route('doctor.delete',$data->id)}}">Delete</a>

                </td>



            </tr>


            @endforeach


        </tbody>






    </table>
    {{$doctors->links()}}



@stop
