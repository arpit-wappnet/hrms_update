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
        <form method="POST" class="form-horizontal form-material" name="registerform" id="registerform" action="{{ route('register.data') }}">
            @csrf
          <a href="javascript:void(0)" class="text-center db"><img src="{{url('plugins/images/eliteadmin-logo-dark.png')}}" alt="Home" /><br/><img src="{{url('plugins/images/eliteadmin-text-dark.png')}}" alt="Home" /></a>
          <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account and enjoy</small>
          <div class="form-group m-t-20">
            <div class="col-xs-12">
              <input class="form-control" type="text" placeholder="Enter Name" id="name" name="name">
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <input class="form-control" type="text" placeholder="Email" id="email" name="email" >
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <input class="form-control" type="password" placeholder="Password" id="password" name="password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <input class="form-control" type="password" placeholder="Confirm Password" id="confim_password" name="confim_password">
            </div>
        </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" id="register" type="submit">Sign Up</button>
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
  {{-- validation --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
      $('#registerform').validate({
        rules:{
          name:{
            required:true
          },
          email:{
            required:true,
            email:true
          },
          password:{
            required:true,
            minlength:5,
            strong_password: true
          },
          confirm_password:{
            required:true,
            minlength:5,
            equalTo: "#password"
          }
        },
        messages:{
          name:{
            required:"Please enter your name"
          },
          email:{
            required:"Please enter your email",
            email:"Please enter a valid email address"
          },
          password:{
            required:"Please enter your password",
            minlength:"Your password must be at least 5 characters long"
          },
          confirm_password:{
            required:"Please confirm your password",
            minlength:"Your password must be at least 5 characters long",
            equalTo:"Your passwords do not match"
          }
        },
        submitHandler:function(form){
          swal({
            position: 'top-end',
            title: "Registration Successful!",
            text: "Thank you for registering with us.",
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
      }, "Your password must contain at least one uppercase letter, one lowercase letter, one number, one special character (@#$%&) and must be between 8 to 20 characters long.");
    });
    </script>
  </body>
  </html>
@endsection
