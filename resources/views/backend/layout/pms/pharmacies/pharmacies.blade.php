@extends('backend.welcome')
@section('page')
    <!-- Button trigger modal -->
    <br>
    <center><a href="{{route('pharmacies.create')}}"><button type="button" class="btn btn-danger" >
                ADD PHARMACY
            </button></a></center><br>
    <table  class="table table-responsive table-bordered table-hover">
        <thead>

        <th scope="col">ID</th>
        <th scope="col">PATIENT_ID</th>
        <th scope="col">NAME</th>
        <th scope="col">CONTACT</th>
        <th scope="col">DEPARTMENT</th>
        <th scope="col">ACTION</th>


        </thead>
        <tbody>


        @foreach ($pharmacies as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->patient_id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->contact}}</td>
                <td>{{$data->department}}</td>

                <td>
                    <a class="btn btn-success" href="">view</a>
                    <a class="btn btn-info " href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>

                </td>



            </tr>


        @endforeach


        </tbody>






    </table>
    {{$pharmacies->links()}}


@stop
