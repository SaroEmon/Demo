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




    <table  class="table table-borderless">
        <thead>

        <th scope="col">ID</th>
        <th scope="col">PATIENT ID</th>
        <th scope="col">APPOINTMENT ID</th>
        <th scope="col">AMOUNT</th>
        <th scope="col">BKASH NO</th>
        <th scope="col">TRANSACTION ID</th>
        <th scope="col">MESSAGE</th>


        <th scope="col">ACTION</th>


        </thead>
        <tbody>


        @foreach ($appointments as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>


                <td>{{$data->patient_id}}</td>
                <td>{{$data->appointment_id}}</td>
                <td>{{$data->amount}}</td>
                <td>{{$data->bkash_no}}</td>
                <td>{{$data->transaction_id}}</td>
                <td>{{$data->message}}</td>

                <td>
{{--                    <a class="btn btn-primary" href="{{route('payment.form',$data->id)}}">Make Payment</a>--}}


                </td>



            </tr>


        @endforeach


        </tbody>






    </table>




@stop
