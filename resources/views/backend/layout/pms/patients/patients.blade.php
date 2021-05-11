@extends('backend.welcome')
@section('page')
    <!-- Button trigger modal -->
    <br>
    <center><a href="{{route('patients.create')}}"><button type="button" class="btn btn-danger" >
                ADD PATIENTS
            </button></a></center><br>
    <table  class="table table-responsive table-bordered table-hover">
        <thead>

        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">CONTACT</th>
        <th scope="col">GENDER</th>
        <th scope="col">DEPARTMENT</th>
        <th scope="col">ADDRESS</th>
        <th scope="col">WORD NO</th>
        <th scope="col">ACTION</th>



        </thead>
        <tbody>


        @foreach ($patients as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->patientname}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->contact}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->department}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->word_no}}</td>

                <td>
                    <a class="btn btn-success" href="">view</a>
                    <a class="btn btn-info " href="{{route('patient.edit',$data->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('patient.delete',$data->id)}}">Delete</a>

                </td>



            </tr>


        @endforeach


        </tbody>






    </table>
    {{$patients->links()}}



@stop
