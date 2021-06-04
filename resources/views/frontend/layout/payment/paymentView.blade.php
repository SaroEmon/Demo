@extends('frontend.layout.UserProfile.userProfile')
@section('user')


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
    <title> Payment Form</title>

    <!-- Icons font CSS-->
    <link href="{{asset("Form2")}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="{{asset("Form2")}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset("Form2")}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset("Form2")}}/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset("Form2")}}/css/main.css" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Payment Form</h2>
                <h3 style="color: #0b93d5">Pay the payment amount 2000 BDT on this BKash Number: 01679571537</h3><br>
                <form action="{{route('payment.view')}}" method="POST">
                    @csrf
                    <div class="row row-space">
                        <div class="col-8">
                            <div class="input-group">
                                <label class="label">Appointment ID</label>
                                <input value="{{$payment->id}}" readonly class="input--style-4" type="number" name="appointmentId">
                            </div>
                        </div>

                    </div>
                    <div class="row row-space">
                        <div class="col-6">
                            <div class="input-group">
                                <label class="label">Bkash Number</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 " type="number" name="bkashNo">
{{--                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>--}}
                                </div>
                            </div>
                        </div>
{{--                        <div class="col-6">--}}
{{--                            <div class="input-group">--}}
{{--                                <label class="label">Gender</label>--}}
{{--                                <div class="p-t-10">--}}
{{--                                    <label class="radio-container m-r-45">Male--}}
{{--                                        <input type="radio" checked="checked" name="gender">--}}
{{--                                        <span class="checkmark"></span>--}}
{{--                                    </label>--}}
{{--                                    <label class="radio-container">Female--}}
{{--                                        <input type="radio" name="gender">--}}
{{--                                        <span class="checkmark"></span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="row row-space">
                        <div class="col-8">
                            <div class="input-group">
                                <label class="label">Transaction ID</label>
                                <input class="input--style-4" type="number" name="transactionId">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="input-group">
                                <label class="label">Amount</label>
                                <input class="input--style-4" disabled type="number" placeholder="2000 BDT">
                            </div>
                        </div>
                    </div>
{{--                    <div class="input-group">--}}
{{--                        <label class="label">Subject</label>--}}
{{--                        <div class="rs-select2 js-select-simple select--no-search">--}}
{{--                            <select name="subject">--}}
{{--                                <option disabled="disabled" selected="selected">Choose option</option>--}}
{{--                                <option>Subject 1</option>--}}
{{--                                <option>Subject 2</option>--}}
{{--                                <option>Subject 3</option>--}}
{{--                            </select>--}}
{{--                            <div class="select-dropdown"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <br>
                    <center><div class="col-12">
                        <button class="btn btn--radius-2 btn--green" type="submit">Confirm Payment</button>
                    </div></center>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="{{asset("Form2")}}/vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="{{asset("Form2")}}/vendor/select2/select2.min.js"></script>
<script src="{{asset("Form2")}}/vendor/datepicker/moment.min.js"></script>
<script src="{{asset("Form2")}}/vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="{{asset("Form2")}}/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->


@endsection
