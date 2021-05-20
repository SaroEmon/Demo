
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Password Recovery </title>
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







            <form  action="{{route('password.recover.email.post')}}" method="post" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                @csrf





                <span class="login100-form-title">
                Password Recovery
                </span>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}

                    </div>
                @endif

                @if(session()->has('successError'))
                    <div class="alert alert-danger">
                        {{session()->get('successError')}}

                    </div>
                @endif






                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
                    <input class="input100" type="text" name="email" placeholder="Enter email">
                    <span class="focus-input100"></span>
                </div>

                <div class="text-right p-t-13 p-b-23">



                </div>
                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Reset Password
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
