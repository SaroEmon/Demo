@extends('backend.welcome')
@section('page')

    <div class="card bg-blue-gradient">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Submission Form</h4>



            <form action="{{route('admins.list')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="name" class="form-control" placeholder="Full name" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email address" type="email">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>

                    <input name="contact" class="form-control" placeholder="Phone number" type="text">
                </div> <!-- form-group// -->


                {{--                PICTURE--}}
                <div class="form-group">
                    <label for="">Upload photo:</label><br>
                    <input type="file" name="adminImage" placeholder="please Select an Image">


                </div>





                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-genderless"></i> </span>
                    </div>
                    <select name="gender" class="form-control">
                        <option selected=""> Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female"> Female</option>

                    </select>
                </div>




                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-calendar-times"></i> </span>
                    </div>
                    <select name="shift" class="form-control">
                        <option selected=""> Select Shift</option>
                        <option value="day">Day</option>
                        <option value="night"> Night</option>


                    </select>
                </div> <!-- form-group end.// -->



                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-calendar-times"></i> </span>
                    </div>
                    <select name="adminRole" class="form-control">
                        <option selected=""> Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="doctor"> Doctor</option>
                        <option value="receptionist"> Receptionist</option>
                        <option value="nurse"> Nurse</option>


                    </select>
                </div>


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="address" class="form-control" placeholder="Address" type="text">
                </div>



                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input value="{{}}" name="password" class="form-control" placeholder="Create password" type="password">
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
