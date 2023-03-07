@extends('layouts.main')
@section('main-container')
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
  </div>
  <section id="wrapper" class="login-register">
    <div class="login-box login-sidebar">
      <div class="white-box">
        <form method="POST" class="form-horizontal form-material" id="passwordresetform" action="{{ route('reset.password') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
          <a href="javascript:void(0)" class="text-center db"><img src="{{url('plugins/images/eliteadmin-logo-dark.png')}}" alt="Home" /><br/><img src="{{url('plugins/images/eliteadmin-text-dark.png')}}" alt="Home" /></a>
          <h3 class="box-title m-t-40 m-b-0">Reset Password</h3>
          <div class="form-group m-t-20">
            <div class="col-xs-12">
              <input class="form-control" type="text" name="email" value="{{ $email ?? old('email') }}">
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <input class="form-control" type="password"  placeholder="Password" name="password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <input class="form-control" type="password" placeholder="Confirm Password" name="confim_passsword">
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
              <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset Password</button>
            </div>
          </div>
          <div class="form-group m-b-0">

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
    jQuery('#passwordresetform').validate({
        rules:{
            password:{
                required:true,
                minlength:5,
                strong_password: true,
            },
            confim_passsword:{
                required:true,
                minlength:5,
                strong_password: true,
            },
        },
        messages:{
            password:{
                required:"Please enter email",
                email:"Please enter valid email",
            },
            confim_passsword:{
                required:"Please enter your password",
                minlength:"Password must be 5 char long"
            },
        },
        submitHandler:function(form){
          swal({
            position: 'top-end',
            title: "password update Successful!",
            text: "Thank you for with us.",
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

  </body>
  </html>
@endsection
