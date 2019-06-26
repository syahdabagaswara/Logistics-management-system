<!DOCTYPE html>
<html class="no-js" lang=""> 
<head>
	
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Estu Sae</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('images/favicon.png')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pe-icon-7-filled.css')}}">


    <link href="{{asset('assets/weather/css/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/calendar/fullcalendar.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="{{asset('assets/css/charts/chartist.min.css')}}" rel="stylesheet"> 
    <link href="{{asset('assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet"> 
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker3.css')}}"> 
    <link href="{{asset('assets/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/modalwizard.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/daterangepicker.css')}}">
</head>
<body>
 
 
	
	<div class="container-fluid">
	<div class="row" style="background-color: #fff;">
		<div class="col-lg-7 col-md-7 " style="background:linear-gradient(0deg,rgba(3,187,211,0.4),rgba(3,187,211,0.4)),url({{asset('images/bg_login_asli.jpg')}});background-repeat: no-repeat;background-size:100% 100%;padding:0px;height:100vh;max-width: 55%;flex: 0 0 55%;">
			<div class=" text-left" style="position:relative;margin: auto; width: 90.8%; ">
				<div style="position:absolute;top: 5vh;width: 380px">
					<b class="login-bg-tittle ">Estu Sae</b>
				</div>
			</div>
			<div class=" text-right" style="position:relative;margin: auto; width: 53%; ">
				<div style="position:absolute;top: 80vh;width: 520px;">
					<b class="login-bg-quote ">" Kesuksesan pasti ada digenggaman, Jika Anda bersedia mengengam keberanian "</b>
				</div>
			</div>
			
		</div>
		<div class="col-lg-5 col-md-5 " style="background-color: #fff;  height: 100vh;max-width: 43%;flex: 0 0 43%;">
			<div class=" text-left" style="position:relative;margin: auto; width: 65.8%; ">
				<div style="position:absolute;top: 20vh;width: 380px">
					<b class="login-tittle " style="color:#8c8e8d;margin-left:10px;font-weight: 800!important">Sistem <a style="color:#03bbd3;">Estu Sae</a></b>
					<p class="text-left" style="font-size:18px;margin-left:10px;margin-bottom: 0px">Selamat Datang, Silahkan Masuk</p>
					<p class="text-left" style="font-size:18px;margin-left:10px;margin-bottom: 75px">ke akun Anda</p>
					<form id="login" action="{{ url('login') }}" method="post">
                    {{ csrf_field() }}
					<div class="form-space"> 
                        <input  type="text" id="username" name="username" placeholder="Username" class="login-form required form-control  ">
                    </div>
                    <div class="form-space">
                        <input  type="password" id="password" name="password" placeholder="Password" class="required form-control login-form">
                    </div>
                    <div class="login-control-button text-left">
                    	<input  type="submit" value="Masuk" class="login-button btn btn-success">
                    </div>
                    </form>
				</div>
			</div>
		</div>
		
	</div>
	</div>
	<script src="{{asset('assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
	<script src="{{asset('assets/js/lib/validate/jquery.validate.js')}}"></script>
	<script type="text/javascript">
		 $('#login').validate({
            ignore: [],
            rules: {
                    username: { required: true },
                    password: { required: true }
                    },
            messages: {
                    username: { required: "Username tidak boleh kosong!" },
                    password: { required: "Password tidak boleh kosong!" }
                    },
            errorPlacement: function(error, element) {
            if (element.is('select:hidden')) {
                error.insertAfter(element.next('.nice-select'));
            } else {
                error.insertAfter(element);
            }
            }

            });
           
	</script>
 
	
 
 
</body>
</html>