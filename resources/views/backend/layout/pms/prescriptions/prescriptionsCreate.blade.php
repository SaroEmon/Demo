@extends('backend.welcome')
@section('page')

    <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>MediCare Prescription Form</title>

    <!-- Icons font CSS-->
    <link href="{{asset("Form")}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="{{asset("Form")}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset("Form")}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset("Form")}}/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset("Form")}}/css/main.css" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">Prescription Form </h2>
            </div>
            <div class="card-body">
                <form action="{{route('prescriptions.list')}}" method="POST">
                    @csrf



                    <div class="form-row "> <center>
                            <label class="label label--block">Select Patient Gender</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Male
                                    <input type="radio" value="male" checked="checked" name="patient_gender">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" value="female" name="patient_gender">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </center>
                    </div>

                    <div class="form-row m-b-55">
                        <div class="name">Patient Name</div>
                        <div class="value">
                            <div class="row row-refine">
                                <div class="col-9">
                                    <div class="input-group-desc">
                                        <input  value="{{$prescription->patientname}}" class="input--style-5" type="text" name="name">
                                        <label class="label--desc"></label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>




                    <div class="form-row m-b-55">
                        <div class="name">Patient ID</div>
                        <div class="value">
                            <div class="row row-refine">
                                <div class="col-9">
                                    <div class="input-group-desc">
                                        <input   value="{{$prescription->id}}" class="input--style-5" type="number" name="patientId">
                                        <label class="label--desc"></label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="form-row m-b-55">
                        <div class="name">Patient Age</div>
                        <div class="value">
                            <div class="row row-refine">
                                <div class="col-3">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="number" name="age">
                                        <label class="label--desc"></label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="form-row m-b-55">
                        <div class="name">Date</div>
                        <div class="value">
                            <div class="row row-refine">
                                <div class="col-lg-6">
                                    <div class="input-group-desc">
                                        <input value="{{$prescription->date}}" class="input--style-5" type="date" name="date">
                                        <label class="label--desc"></label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>




                    <div class="form-row">
                        <div class="name">Medicine Name</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" name="medicine_name">
                            </div>
                        </div>
                    </div>



                    <div class="form-row">
                        <div class="name">Department</div>
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="department">
                                        <option disabled="disabled" selected="selected">select department</option>
                                        <option value="Medicine">Medicine</option>
                                        <option value="Physiology">Physiology</option>
                                        <option value="Surgery">Surgery</option>
                                        <option value="Ophthalmology">Ophthalmology</option>
                                        <option value="Microbiology">Microbiology</option>
                                        <option value="Pathology">Pathology</option>
                                        <option value="Pharmacology">Pharmacology</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="form-row m-b-55">
                        <div class="name">content</div>
                        <div class="value">
                            <div class="row row-refine">

                                <div class="col-3">
                                    <div class="input-group-desc">
                                        <textarea name="prescription_content" id="" cols="30" rows="10"></textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div>
                        <center>
                        <button class="btn btn--radius-2 btn--green" type="submit">Submit</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="{{asset("Form")}}/vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="{{asset("Form")}}/vendor/select2/select2.min.js"></script>
<script src="{{asset("Form")}}/vendor/datepicker/moment.min.js"></script>
<script src="{{asset("Form")}}/vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="{{asset("Form")}}/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->




@endsection
