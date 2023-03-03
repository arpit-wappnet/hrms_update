@extends('layouts.main')
@section('main-container')

<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
  </div>
  <section id="wrapper" class="login-register">
    <div class="login-box login-sidebar">
      <div class="white-box">
        <form class="form-horizontal form-material" method="POST" id="loginform" action="{{ route('check.login') }}">

         @csrf   <a href="javascript:void(0)" class="text-center db"><img src="{{url('plugins/images/eliteadmin-logo-dark.png')}}" alt="Home" /><br/><img src="{{url('plugins/images/eliteadmin-text-dark.png')}}" alt="Home" /></a>

          <div class="form-group m-t-40">
            <div class="col-xs-12">
              <input class="form-control" type="text" required="" placeholder=" Enter Username / Email " name="email" >
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <input class="form-control" type="password" required="" placeholder="Password" name="password" >
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <div class="checkbox checkbox-primary pull-left p-t-0">
                <input id="checkbox-signup" type="checkbox">
                <label for="checkbox-signup"> Remember me </label>
              </div>
              <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
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
              <input class="form-control" type="email" required placeholder="Email" name="email" >
            </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" >Reset Link send</button>
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
</body>
</html>
@endsection
