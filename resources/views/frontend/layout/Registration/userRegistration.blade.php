
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Registration Form </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/css/util.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v8/css/main.css">

</head>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">







            <form  action="{{route('registration.create')}}" method="post" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                @csrf


                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}

                    </div>
                @endif


                <span class="login100-form-title">
REGISTRATION
</span>
{{--                @if ($errors->any())--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <div class="alert alert-danger">{{$error}}</div>--}}
{{--                    @endforeach--}}
{{--                @endif--}}




                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" type="text" name="userName" placeholder="UserName">
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" type="text" name="userEmail" placeholder="UserEmail">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" type="number" name="usercontact" placeholder="Contact">
                    <span class="focus-input100"></span>
                </div>

                <div class="form-group input-group">
                    <span class="focus-input100"></span>

                    <select name="department" class="form-control">
                        <option selected=""> Select Department</option>
                        <option value="medicine">Medicine</option>
                        <option value="physiology"> Physiology</option>
                        <option value="ophthalmology"> Ophthalmology</option>
                        <option value="microbiology"> Microbiology</option>
                        <option value="pathology"> Pathology </option>
                        <option value="pharmacology"> Pharmacology</option>
                        <option value="community medicine"> Community Medicine</option>
                        <option value="surgery"> Surgery </option>

                    </select>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <select name="gender" id="">
                        <span class="focus-input100"></span>


                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>


                    </select>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" type="text" name="address" placeholder="Address">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" type="text" name="nationalID" placeholder="National ID">
                    <span class="focus-input100"></span>
                </div>



                <div class="wrap-input100 validate-input" data-validate="Please enter password">
                    <input class="input100" type="password" name="userPassword" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>
                <div class="text-right p-t-13 p-b-23">

<span class="txt1 p-b-9">

</span>

                </div>
                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Submit
                    </button>
                </div>
                <div class="flex-col-c p-t-170 p-b-40">


                </div>
            </form>
        </div>
    </div>
</div>




<script src="https://colorlib.com/etc/lf/Login_v8/vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v8/vendor/animsition/js/animsition.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v8/vendor/bootstrap/js/popper.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v8/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v8/vendor/select2/select2.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v8/vendor/daterangepicker/moment.min.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v8/vendor/daterangepicker/daterangepicker.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v8/vendor/countdowntime/countdowntime.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v8/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
