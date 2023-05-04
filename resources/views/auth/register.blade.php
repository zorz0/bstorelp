@extends('layouts.app')

@section('header')



    <!-- END HEAD -->

    <body class=" login">

        <div class="content">
            <!-- BEGIN LOGIN FORM -->

            <form class="register-form" action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-title"style="text-align:center;">
                    <span class="form-title">{{ __('signup.register_title') }}</span>
                </div>
                <p class="hint" dir="{{ getDirection() }}"> {{ __('signup.instruction')  }}: </p>
                <div class="form-group" dir="{{ getDirection() }}">
                    <label class="control-label visible-ie8 visible-ie9">{{ __('Name') }}</label>
                    <input style="font-size: 15px" class="form-control placeholder-no-fix" type="text" placeholder="{{ __('signup.full_name')  }}" name="name" value="{{ old('name') }}" /> </div>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <div class="form-group" dir="{{ getDirection() }}">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">{{ __('Email Address') }}</label>
                    <input  style="font-size: 15px" class="form-control placeholder-no-fix" type="text" placeholder="{{ __('signup.email')  }}" name="email" value="{{ old('email') }}" /> </div>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <div class="form-group" dir="{{ getDirection() }}">
                    <label class="control-label visible-ie8 visible-ie9">{{ __('Password') }}</label>
                    <input style="font-size: 15px" class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="{{ __('signup.password')  }}" name="password" required /> </div>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <div class="form-group" dir="{{ getDirection() }}">
                    <label class="control-label visible-ie8 visible-ie9">{{ __('Confirm Password') }}</label>
                    <input style="font-size: 15px" class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="{{ __('signup.re_password')  }}" name="password_confirmation" required /> </div>
                <div class="form-group margin-top-20 margin-bottom-20">

                </div>
                <div class="form-actions" style="display: flex; justify-content: center"  >
                    <button type="submit" id="register-submit-btn" class="btn red uppercase pull-right"> {{ __('signup.button') }}</button>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
        </div>
        <!-- END LOGIN -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/login.min.js" type="text/javascript">
        document.querySelector("#navbarSupportedContent > ul.navbar-nav.ms-auto > li.nav-item.dropdown.open > div > a").style.setProperty("color", "black", "important");
</script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
       {{--  <script>
document.querySelector('.register-form').style.display="block";
let element = document.querySelector("#app > nav");

// Remove a class from the element
element.classList.remove("bg-white");
element.classList.remove("shadow-sm");


element.style.fontSize = "15px";
document.querySelector("#app > nav > div > a").style.fontSize="20px";
document.querySelector("#app > nav > div > a").style.marginTop="20px";
document.querySelector(".login a").style.color="black";

        </script> --}}

    </body>

</html>
@endsection
