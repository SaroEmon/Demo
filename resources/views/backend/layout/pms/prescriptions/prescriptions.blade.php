@extends('backend.welcome')
@section('page')
    <!-- Button trigger modal -->
    <br>
    <center><a href="{{route('prescriptions.create')}}"><button type="button" class="btn btn-danger" >
                ADD PRESCRIPTION
            </button></a></center><br>
    <table  class="table table-responsive table-bordered table-hover">
        <thead>

        <th scope="col">#ID</th>
        <th scope="col">PATIENT ID</th>
        <th scope="col">QUANTITY</th>
        <th scope="col">AMOUNT</th>
        <th scope="col">DEPARTMENT</th>
        <th scope="col">DATE</th>

        <th scope="col">ACTION</th>


        </thead>
        <tbody>


       @foreach($prescriptions as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->quantity}}</td>
                <td>{{$data->patient_id}}</td>
                <td>{{$data->consumption_amount}}</td>
                <td>{{$data->department}}</td>

                <td>{{$data->date}}</td>
                <td>
                    <a class="btn btn-success" href="">view</a>
                    <a class="btn btn-info " href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>

                </td>



            </tr>


        @endforeach


        </tbody>






    </table>



@stop
