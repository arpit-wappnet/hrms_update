@extends('layouts.main')
@section('main-container')
@include('sweetalert::alert')
<link rel="stylesheet" media="screen" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
  </div>
  <section id="wrapper" class="login-register">
    <div class="login-box login-sidebar">
      <div class="white-box">
        <form class="form-horizontal form-material" method="POST" name="loginform" id="loginform" action="{{ route('check.login') }}">

         @csrf   <a href="javascript:void(0)" class="text-center db"><img src="{{url('plugins/images/eliteadmin-logo-dark.png')}}" alt="Home" /><br/><img src="{{url('plugins/images/eliteadmin-text-dark.png')}}" alt="Home" /></a>

          <div class="form-group m-t-40">
            <div class="col-xs-12">
              <input class="form-control" type="text" placeholder=" Enter Username / Email " id="email" name="email">
              <small id="emailvalid" class="form-text
                text-muted invalid-feedback">
                        Your email must be a valid email
                    </small>
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <input class="form-control" type="password" id="password"  placeholder="Password" name="password" >
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button  class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" id='login' type="submit">Log In</button>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
              <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"  title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"  title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> </div>
            </div>
          </div>
          <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
              <p>Don't have an account? <a href="/register" class="text-primary m-l-5"><b>Sign Up</b></a></p>
            </div>
          </div>
        </form>
        <form method="post" class="form-horizontal" id="recoverform" action="{{ route('forgot.password.link') }}">
            @csrf
          <div class="form-group ">
            <div class="col-xs-12">
              <h3>Recover Password</h3>
              <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <input class="form-control" type="email" required placeholder="Email" id="" name="email" >
            </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button id="sa-warning class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light img-responsive model_img" type="submit" >Reset Link send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
<!-- jQuery -->
<script src="{{url('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{url('bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{url('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>

<!--slimscroll JavaScript -->
<script src="{{url('js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{url('js/waves.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{url('js/custom.min.js')}}"></script>
<!--Style Switcher -->
<script src="{{url('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
 {{-- validation --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    jQuery('#loginform').validate({
        rules:{
            email:{
                required:true,
                email:true
            },
            password:{
                required:true,
                minlength:5,
                strong_password: true,
            },
        },
        messages:{
            email:{
                required:"Please enter email",
                email:"Please enter valid email",
            },
            password:{
                required:"Please enter your password",
                minlength:"Password must be 5 char long"
            },
        },
        submitHandler:function(form){
          swal({
            position: 'top-end',
            title: "Login Successful!",
            text: "Thank you for Login with us.",
            type: 'success',
            timer: 3000,
            showConfirmButton: false,

          }).then(function(){
            form.submit();
          });
        }
      });
    $.validator.addMethod("strong_password", function(value, element) {
        let password = value;
        if (!(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%&])(.{8,20}$)/.test(password))) {
            return false;
        }
        return true;
    }, function(value, element) {
        let password = $(element).val();
        if (!(/^(.{8,20}$)/.test(password))) {
            return 'Password must be between 8 to 20 characters long.';
        } else if (!(/^(?=.*[A-Z])/.test(password))) {
            return 'Password must contain at least one uppercase.';
        } else if (!(/^(?=.*[a-z])/.test(password))) {
            return 'Password must contain at least one lowercase.';
        } else if (!(/^(?=.*[0-9])/.test(password))) {
            return 'Password must contain at least one digit.';
        } else if (!(/^(?=.*[@#$%&])/.test(password))) {
            return "Password must contain special characters from @#$%&.";
        }
        return false;
    });
</script>


  <script>
  jQuery('#recoverform').validate({
	rules:{
		email:{
			required:true,
			email:true
		},

	},messages:{
		email:{
			required:"Please enter email",
			email:"Please enter valid email",
		},

	},
	submitHandler:function(form){
		form.submit();
	}
  });

    </script>


</body>
</html>
@endsection

