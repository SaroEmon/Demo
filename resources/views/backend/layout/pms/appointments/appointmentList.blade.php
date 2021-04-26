@extends('backend.welcome')
@section('page')
    <!-- Button trigger modal -->
    <br>
    <center><a href="{{route('receptionists.create')}}"><button type="button" class="btn btn-info" >
                ADD APPOINTMENT
            </button></a></center><br>



    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}

        </div>
    @endif




    <table  class="table table-responsive table-bordered table-hover">
        <thead>

        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">CONTACT</th>
        <th scope="col">DEPARTMENT ID</th>
        <th scope="col">DOCTOR ID</th>
        <th scope="col">DATE</th>
        <th scope="col">MESSAGE</th>


        <th scope="col">ACTION</th>


        </thead>
        <tbody>


        @foreach ($appointments as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>


                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->contact}}</td>
                <td>{{$data->department_id}}</td>
                <td>{{$data->doctor_id}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->message}}</td>

                <td>
                    <a class="btn btn-success" href="">view</a>
                    <a class="btn btn-info " href="">Edit</a>
                    <a class="btn btn-danger" href="{{route('appointment.delete',$data->id)}}">Delete</a>

                </td>



            </tr>


        @endforeach


        </tbody>






    </table>
    {{$appointments->links()}}



@stop
