@extends('frontend.layout.UserProfile.userProfile')
@section('user')
    <!-- Button trigger modal -->
{{--    <br>--}}
{{--    <center><a href="{{route('user.profileView')}}"><button type="button" class="btn btn-info" >--}}
{{--                ADD APPOINTMENT--}}
{{--            </button></a></center><br>--}}



    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}

        </div>
    @endif
    @if(session()->has('danger'))
        <div class="alert alert-danger">
            {{ session()->get('danger') }}
        </div>
    @endif



    <table  class="table table-borderless">
        <thead>

        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">CONTACT</th>
        <th scope="col">DOCTOR NAME</th>
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
                <td>{{$data->doctorAppointment->name}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->message}}</td>

                <td>
                    <a class="btn btn-primary" href="{{route('payment.form',$data->id)}}">Make Payment</a>


                </td>



            </tr>


        @endforeach


        </tbody>






    </table>




@stop
