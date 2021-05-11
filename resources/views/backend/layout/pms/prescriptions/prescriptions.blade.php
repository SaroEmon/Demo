@extends('backend.welcome')
@section('page')
    <!-- Button trigger modal -->
    <br>
{{--    <center><a href="{{route('prescriptions.create')}}"><button type="button" class="btn btn-danger" >--}}
{{--                ADD PRESCRIPTION--}}
{{--            </button></a></center><br>--}}
    <table  class="table table-responsive table-bordered table-hover">
        <thead>

        <th scope="col">#ID</th>
        <th scope="col">PATIENT ID</th>
        <th scope="col">NAME</th>
        <th scope="col">AGE</th>
        <th scope="col">GENDER</th>
        <th scope="col">MEDICINE</th>
        <th scope="col">CONTENT</th>
        <th scope="col">DEPARTMENT</th>
        <th scope="col">DATE</th>

        <th scope="col">ACTION</th>


        </thead>
        <tbody>


       @foreach($prescriptions as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->patient_id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->age}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->medicine_name}}</td>
                <td>{{$data->content}}</td>
                <td>{{$data->department}}</td>

                <td>{{$data->date}}</td>
                <td>
{{--                    <a class="btn btn-success" href="">view</a>--}}
{{--                    <a class="btn btn-info " href="">Edit</a>--}}
                    <a class="btn btn-danger" href="{{route('prescription.delete',$data->id)}}">Delete</a>

                </td>



            </tr>


        @endforeach


        </tbody>






    </table>
{{$prescriptions->links()}}


@stop
