@extends('welcome')
@section('page')

    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Submission Form</h4>



            <form action="{{route('prescriptions.list')}}"method="post">
                @csrf

                 <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="patientId" class="form-control" placeholder="Patient ID" type="number">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>

                    <input name="quantity" class="form-control" placeholder="Quantity" type="number">
                </div> <!-- form-group// -->

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="consumptionAmount" class="form-control" placeholder="Amount" type="number">
                </div>



                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <select name="department" class="form-control">
                        <option selected="department"> Select Department</option>
                        <option value="medicine">Medicine</option>
                        <option value="Physiology"> Physiology</option>
                        <option value="Ophthalmology"> Ophthalmology</option>
                        <option value="Microbiology"> Microbiology</option>
                        <option value="Pathology"> Pathology </option>
                        <option value="Pharmacology"> Pharmacology</option>
                        <option value="Community Medicine"> Community Medicine</option>
                        <option value="Surgery"> Surgery </option>

                    </select>
                </div> <!-- form-group end.// -->

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="date" class="form-control" placeholder="Date" type="date">
                </div>

                <!-- form-group// -->
                <div class="form-group">


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>

                    </div>
            </form>
        </article>




    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">





@endsection
