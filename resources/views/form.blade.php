<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ball Hockey | Register</title>

        <!-- Styles -->
        <style>

            @import url(https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,600);
            @import url(https://fonts.googleapis.com/css?family=Lato:100,200,300,400,700);
            @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css);

            * {
              margin: 0;
              padding: 0;
              border: 0;
              font-size: 100%;
              font-family: "Raleway", sans-serif;
              font-weight: 300;
              font-size: 16px;
              color: #36383c;
              text-decoration: none;
              outline: none;
              box-sizing: border-box; }

            html, body {
              background-color: #edeff0; }

            input[type=submit] {
              -webkit-appearance: none; }

            input:focus {
              outline: none; }
            .alert {
              position: absolute;
              top: 0px;
              left: 0px;
              right: 0px;
              height: 36px;
              line-height: 36px;
              z-index: 10; }
              .alert > span {
                font-weight: 400;
                margin-right: auto;
                padding-left: 12px; }
              .alert > button {
                position: absolute;
                background-color: transparent;
                cursor: pointer;
                font-size: 18px;
                top: 6px;
                right: 16px;
                font-weight: 400; }
              .alert.alert-success {
                background-color: #508a51; }
                .alert.alert-success > span, .alert.alert-success > button {
                  color: white; }
              .alert.alert-fail {
                background-color: #a94442; }
                .alert.alert-fail > span, .alert.alert-fail > button {
                  color: white; }
              .alert.alert-warning {
                background-color: #9e814f; }
                .alert.alert-warning > span, .alert.alert-warning > button {
                  color: white; }


            .container-soccer {
              display: -webkit-box;
              display: flex;
              -webkit-box-align: center;
              align-items: center;
              align-content: center;
              -webkit-box-pack: center;
              justify-content: center;
              flex-wrap: wrap;
              display: -webkit-flex;
              -webkit-flex-wrap: wrap; }

              .container-soccer.full-height {
                height: 100vh; }
              .container-soccer > span {
                text-align: center;
                position: relative;
                top: -128px;
                color: #636b6f;
                font-weight: 100;
                font-size: 44px;
                width: 100%; }
                @media only screen and (min-width: 414px) {
                  .container-soccer > span {
                    font-size: 56px; } }
                @media only screen and (min-width: 768px) {
                  .container-soccer > span {
                    font-size: 72px; } }
                @media only screen and (min-width: 1024px) {
                  .container-soccer > span {
                    font-size: 80px; } }

            .form-login {
              margin: auto;
              position: relative;
              top: -136px;
                }
              .form-login > div {
                position: relative;
                margin: 20px 0px 20px 0px; }

            input[type="email"], input[type="password"], input[type="text"] {
              padding-left: 32px;
              font-size: 18px;
              color: #636b6f;
              background-color: #edeff0;
              height: 40px;
              border: none;
              border-bottom: 1px solid #636b6f;
              width: 260px;
              border-radius: 0px; }

            input:-webkit-autofill {
              -webkit-box-shadow: 0 0 0px 1000px #edeff0 inset;
              -webkit-text-fill-color: #636b6f !important; }

            .label, .label-icon {
              color: #636b6f;
              font-weight: 400;
              position: absolute;
              pointer-events: none;
              left: 2px;
              top: 14px;
              letter-spacing: 1px;
              opacity: 1;
              -webkit-transition: all 0.3s ease-in-out;
              transition: all 0.3s ease-in-out; }

            .label-icon {
              opacity: 0;
              left: 100px; }
              .label-icon i {
                color: #4b5154; }
              .label-icon .fa-lock {
                font-size: 20px; }

            input:focus ~ .label, input:focus ~ .label-icon, input:valid ~ .label, input:valid ~ .label-icon {
              left: 80px;
              opacity: 0; }

            input:focus ~ .label-icon, input:valid ~ .label-icon {
              left: 4px;
              opacity: 1; }

            .btn-login {
                position: relative;
                top: 270px;
                width: 100%;
                padding: 6px 0px;
                border-radius: 2px;
                margin-top: 12px;
                font-size: 14px;
                text-align: center;
                border: none;
                color: white;
                background-color: #636b6f;
                text-transform: uppercase;
                cursor: pointer;
            }

             div.options {
                 position: absolute;
                 left: 50%;
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
                border-radius: 2px;
                border: 1px solid #636b6f;
                background-color: white;
                padding: 8px;
                margin-top: 0px;
                width: 312px;

                display: -webkit-box;
                display: flex;
                display: -webkit-flex;
                -webkit-box-align: center;
                align-items: center;
                align-content: center;
                -webkit-box-pack: center;
                justify-content: center;
                flex-wrap: wrap;
             }

             @media only screen and (min-width: 414px) {
                div.options {
                   padding: 16px;
                   width: 408px;
                }
             }

             div.options > span {
                 font-size: 22px;
                 font-weight: 400;
                 text-transform: uppercase;
                 margin-top: 4px;
                 margin-bottom: 24px;
             }

            div.options .radio {
                display: -webkit-box;
                display: flex;
                -webkit-box-align: center;
                align-items: center;
                align-content: center;
                -webkit-box-pack: center;
                justify-content: center;
                flex-wrap: wrap;
                display: -webkit-flex;
                -webkit-flex-wrap: wrap;
                width: 100%;
            }

            div.options .radio label {
                width: 100%;
            }

            div.options .radio label span {
                width: 100%;
                margin-left: 30px;
                position: relative;
                font-size: 14px;
                top: 0px;
                text-align: left;
            }

            @media only screen and (min-width: 413px) {
               div.options .radio label span {
                   font-size: 18px;
               }
            }

            div.options .reveal-if-active {
                display: -webkit-box;
                display: flex;
                -webkit-box-align: center;
                align-items: center;
                align-content: center;
                -webkit-box-pack: center;
                justify-content: center;
                flex-wrap: wrap;
                display: -webkit-flex;
                -webkit-flex-wrap: wrap;

                width: 100%;
                position: relative;
                right: 20px;

                opacity: 0;
                max-height: 0;
                overflow: hidden;

                -webkit-transform: scale(0.8);
                        transform: scale(0.8);
                -webkit-transition: 0.5s;
                transition: 0.5s;
            }

            div.options .radio .reveal-if-active > span {
                width: 36%;
                font-size: 14px;
                position: relative;
                top: 22px;
                left: -8px;
            }

            @media only screen and (min-width: 413px) {
               div.options .radio .reveal-if-active > span {
                   left: 8px;
               }
            }

            div.options .radio .reveal-if-active label {
                width: 12%;
            }

            div.options .radio .reveal-if-active .control {
                margin-top: 40px;
                margin-bottom: 0px;
            }

            div.options .radio .reveal-if-active .control--checkbox span {
                position: relative;
                font-size: 14px;
                display: inline-block;
                text-transform: uppercase;
                width: 24px;
                text-align: center;
                top: -22px;
                left: -32px;
                color: #636b6f;
            }

            .has-error input[type="email"], .has-error input[type="text"] {
                box-shadow: 0 1px 0px #d14848;
                border-bottom: 1px solid #d14848;
            }

            .control {
                font-size: 18px;
                position: relative;
                display: block;
                margin-bottom: 22px;
                cursor: pointer;
            }

            /*@media only screen and (min-width: 414px) {

                .control {
                	margin-left: 32px;
                }
            }*/

            .control span {
                color: #636b6f;
            }

            .control input {
            	position: absolute;
            	z-index: -1;
            	opacity: 0;
            }

            .control__indicator {
            	position: absolute;
            	top: 2px;
            	left: 0;
            	width: 20px;
            	height: 20px;
            	background: #e6e6e6;
            }

            /* Hover and focus states */
            .control input:focus ~ .control__indicator {
            	background: #ccc;
            }

            /* Checked state */
            .control input:checked ~ .control__indicator {
            	background: #636b6f;
            }

            /* Check mark */
            .control__indicator:after {
            	position: absolute;
            	display: none;
            	content: '';
            }

            /* Show check mark */
            .control input:checked ~ .control__indicator:after {
            	display: block;
            }

            /* Checkbox tick */
            .control--checkbox .control__indicator:after {
            	top: 4px;
            	left: 8px;
            	width: 3px;
            	height: 8px;
            	transform: rotate(45deg);
            	border: solid #fff;
            	border-width: 0 2px 2px 0;
            }


input[type="radio"]:checked ~ .reveal-if-active, input[type="checkbox"]:checked ~ .reveal-if-active {
  opacity: 1;
  max-height: 100px;

  -webkit-transform: scale(1);
          transform: scale(1);
  overflow: visible;
}

        </style>

    </head>

    <body>
        @if(Session::has('success'))
            <span class="alert alert-success">
                <span>{{ Session::get('success') }}</span>
            </span>
        @endif

        @if(Session::has('fail'))
            <span class="alert alert-fail">
                <span>{{ Session::get('fail') }}</span>
            </span>
        @endif

        @if(Session::has('warning'))
            <span class="alert alert-warning">
                <span>{{ Session::get('warning') }}</span>
            </span>
        @endif

        <div class="container-soccer full-height">

            <span>Ball Hockey</span>

            <form class="form-login" role="form" method="POST" action="{{ url('/post') }}">
                {{ csrf_field() }}

                <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required>
                    <span class="label">Full Name</span>
                    <span class="label-icon"><i class="fa fa-pencil" ></i></span>
                </div>

                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">

                    <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                    <span class="label">Email</span>
                    <span class="label-icon"><i class="fa fa-envelope" ></i></span>
                </div>

                <div class="{{ $errors->has('email_confirmation') ? ' has-error' : '' }}">

                    <input id="email_confirmation" type="email" name="email_confirmation" required>
                    <span class="label">Confirm Email</span>
                    <span class="label-icon"><i class="fa fa-envelope" ></i></span>
                </div>

                <div class="options">
                    <span>Playing Options</span>

                    <div class="radio">
                        <label class="control control--checkbox"><span>Friday Night League</span>
                    		<input type="radio" name="option" value="o1"/>
                    		<div class="control__indicator"></div>
                    	</label>

                        <label class="control control--checkbox"><span>Friday Night League + Second Session</span>
                    		<input type="radio" name="option" value="o2"/>
                    		<div class="control__indicator"></div>

                            <div class="reveal-if-active">
                                <span>Nights Available</span>

                                <label class="control control--checkbox"><span>m</span>
                            		<input type="checkbox" name="m" value="y"/>
                            		<div class="control__indicator"></div>
                            	</label>
                                <label class="control control--checkbox"><span>t</span>
                            		<input type="checkbox" name="t" value="y"/>
                            		<div class="control__indicator"></div>
                            	</label>
                                <label class="control control--checkbox"><span>w</span>
                            		<input type="checkbox" name="w" value="y"/>
                            		<div class="control__indicator"></div>
                            	</label>
                                <label class="control control--checkbox"><span>su</span>
                            		<input type="checkbox" name="su" value="y"/>
                            		<div class="control__indicator"></div>
                            	</label>
                          </div>
                    	</label>

                        <label class="control control--checkbox"><span>Second Session Only</span>
                    		<input type="radio" name="option" value="o3"/>
                    		<div class="control__indicator"></div>

                            <div class="reveal-if-active">
                                <span>Nights Available</span>

                                <label class="control control--checkbox"><span>m</span>
                            		<input type="checkbox" name="m" value="y"/>
                            		<div class="control__indicator"></div>
                            	</label>
                                <label class="control control--checkbox"><span>t</span>
                            		<input type="checkbox" name="t" value="y"/>
                            		<div class="control__indicator"></div>
                            	</label>
                                <label class="control control--checkbox"><span>w</span>
                            		<input type="checkbox" name="w" value="y"/>
                            		<div class="control__indicator"></div>
                            	</label>
                                <label class="control control--checkbox"><span>su</span>
                            		<input type="checkbox" name="su" value="y"/>
                            		<div class="control__indicator"></div>
                            	</label>
                          </div>
                    	</label>
                    </div>
                </div>

                <input type="submit" name="submit" value="submit" class="btn-login">
            </form>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

        <script>

            $('.alert').delay(1000).fadeOut(2000, function(){ $(this).remove();});

        </script>
    </body>
</html>
