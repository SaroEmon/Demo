@extends('backend.welcome')
@section('page')

<div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Submission Form</h4>



        <form action="{{route('doctor.update',$doctors->id)}}" method="post" enctype="multipart/form-data">

            @csrf
            @method('PUT'

)
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input value="{{$doctors->name}}" name="name" class="form-control" placeholder="Full name" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input value="{{$doctors->email}}" name="email" class="form-control" placeholder="Email address" type="email">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>

                <input value="{{$doctors->contact}}" name="contact" class="form-control" placeholder="Phone number" type="text">
            </div> <!-- form-group// -->


            {{--                PICTURE--}}
            <div class="form-group">
                <label for="">Upload photo:</label><br>
                <input type="file" name="doctorImage" placeholder="please Select an Image">


            </div>





            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-genderless"></i> </span>
                </div>
                <select name="gender" class="form-control">
                    <option > Select Gender</option>
                    <option @if($doctors->gender) selected @endif value="male">Male</option>
                    <option @if($doctors->gender) selected @endif value="female"> Female</option>

                </select>
            </div>




            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                </div>
                <select name="department" class="form-control">
                    <option > Select Department</option>
                    <option @if($doctors->department) selected @endif value="medicine">Medicine</option>
                    <option @if($doctors->department) selected @endif value="physiology"> Physiology</option>
                    <option @if($doctors->department) selected @endif value="ophthalmology"> Ophthalmology</option>
                    <option @if($doctors->department) selected @endif value="microbiology"> Microbiology</option>
                    <option @if($doctors->department) selected @endif value="pathology"> Pathology </option>
                    <option @if($doctors->department) selected @endif value="pharmacology"> Pharmacology</option>
                    <option @if($doctors->department) selected @endif value="community medicine"> Community Medicine</option>
                    <option @if($doctors->department) selected @endif value="surgery"> Surgery </option>

                </select>
            </div> <!-- form-group end.// -->


            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-location-arrow"></i> </span>
                </div>
                <input value="{{$doctors->address}}"  name="address" class="form-control" placeholder="Address" type="text">
            </div>

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-home"></i> </span>
                </div>
                <input value="{{$doctors->room_no}}"  name="room_no" class="form-control" placeholder="Room no" type="text">
            </div>

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input value="{{$doctors->password}}"   name="password" class="form-control" placeholder="Create password" type="password">
            </div> <!-- form-group// -->
            <!-- form-group// -->
            <div class="form-group">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </article>





</div> <!-- card.// -->

</div>
<!--container end.//-->


</article>





<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">





@endsection
