@extends('backend.welcome')
@section('page')

    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Submission Form</h4>



            <form action="{{route('admin.update',$admin->id)}}" method="post" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input value="{{$admin->name}}" name="name" class="form-control" placeholder="Full name" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input value="{{$admin->email}}" name="email" class="form-control" placeholder="Email address" type="email">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>

                    <input value="{{$admin->contact}}" name="contact" class="form-control" placeholder="Phone number" type="text">
                </div> <!-- form-group// -->


                {{--                PICTURE--}}
                <div class="form-group">
                    <label for="">Upload photo:</label><br>
                    <input value="{{$admin->image}}" type="file" name="adminImage" placeholder="please Select an Image">


                </div>





                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <select name="gender" class="form-control">
                        <option selected=""> Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female"> Female</option>

                    </select>
                </div>




                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <select name="shift" class="form-control">
                        <option selected=""> Select Shift</option>
                        <option value="day">Day</option>
                        <option value="night"> Night</option>


                    </select>
                </div> <!-- form-group end.// -->


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input value="{{$admin->address}}" name="address" class="form-control" placeholder="Address" type="text">
                </div>

                s

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input value=""   name="password" class="form-control" placeholder="Create password" type="password">
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
