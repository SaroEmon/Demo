@extends('backend.welcome')
@section('page')
    <!-- Button trigger modal -->
    <br>
    <center><a href="{{route('appointments.create')}}"><button type="button" class="btn btn-info" >
                ADD APPOINTMENT
            </button></a></center><br>



    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}

        </div>
    @endif




    <table  class="table table-borderless">
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


                <td>{{$data->patientname}}</td>
                <td>{{$data->patientemail}}</td>
                <td>{{$data->contact}}</td>
                <td>{{$data->department_id}}</td>
                <td>{{$data->doctor_id}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->message}}</td>

                <td>
                    <a class="btn btn-primary" href="{{route('prescriptions.create',$data->id)}}">ADD Prescription</a>
                    <a class="btn btn-success" href="{{route('prescriptions')}}">View </a>
                    <a class="btn btn-info " href="{{route('appointment.edit',$data->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('appointment.delete',$data->id)}}">Delete</a>

                </td>



            </tr>


        @endforeach


        </tbody>






    </table>
    {{$appointments->links()}}



@stop
