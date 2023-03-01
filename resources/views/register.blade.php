@extends('layouts.main')
@section('main-container')
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
  </div>
  <section id="wrapper" class="login-register">
    <div class="login-box login-sidebar">
      <div class="white-box">
        <form method="POST" class="form-horizontal form-material" id="loginform" action="{{ route('register.data') }}">
            @csrf
          <a href="javascript:void(0)" class="text-center db"><img src="{{url('plugins/images/eliteadmin-logo-dark.png')}}" alt="Home" /><br/><img src="{{url('plugins/images/eliteadmin-text-dark.png')}}" alt="Home" /></a>
          <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account and enjoy</small>
          <div class="form-group m-t-20">
            <div class="col-xs-12">
              <input class="form-control" type="text" required="" placeholder="Enter Name" name="name">
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <input class="form-control" type="text" required="" placeholder="Email" name="email" >
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <input class="form-control" type="password" required="" placeholder="Password" name="password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <input class="form-control" type="password" required="" placeholder="Confirm Password" name="confim_password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <div class="checkbox checkbox-primary p-t-0">
                <input id="checkbox-signup" type="checkbox">
                <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
              </div>
            </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
            </div>
          </div>
          <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
              <p>Already have an account? <a href="/" class="text-primary m-l-5"><b>Sign In</b></a></p>
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
  </body>
  </html>
@endsection
