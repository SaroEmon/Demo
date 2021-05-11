@extends('backend.welcome')
@section('page')

    <div class="card bg-purple-active">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Submission Form</h4>



            <form action="{{route('pharmacies.list')}}" method="post">

                @csrf
                @method('PUT')


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input value="{{$pharmacy->name}}" name="name" class="form-control" placeholder=" Name" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input value="{{$pharmacy->patient_id}}" name="patientId" class="form-control" placeholder="Patient ID" type="number">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>

                    <input value="{{$pharmacy->contact}}" name="contact" class="form-control" placeholder="Phone Number" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <select name="department" class="form-control">
                        <option selected="department"> Select Department</option>
                        <option @if ($pharmacy->department) selected @endif value="medicine">Medicine</option>
                        <option @if ($pharmacy->department) selected @endif value="Physiology"> Physiology</option>
                        <option @if ($pharmacy->department) selected @endif value="Ophthalmology"> Ophthalmology</option>
                        <option @if ($pharmacy->department) selected @endif  value="Microbiology"> Microbiology</option>
                        <option @if ($pharmacy->department) selected @endif value="Pathology"> Pathology </option>
                        <option @if ($pharmacy->department) selected @endif value="Pharmacology"> Pharmacology</option>
                        <option @if ($pharmacy->department) selected @endif value="Community Medicine"> Community Medicine</option>
                        <option @if ($pharmacy->department) selected @endif value="Surgery"> Surgery </option>

                    </select>
                </div> <!-- form-group end.// -->

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input  name="password" class="form-control" placeholder="Create password" type="password">
                </div>

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
