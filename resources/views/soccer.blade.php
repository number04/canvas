<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Summer Football | Register</title>

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
                top: -68px;
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
              top: -68px;
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
                top: 132px;
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

             div.nights {
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
                div.nights {
                   padding: 16px;
                   width: 408px;
                }

             }

            div.nights > span {
                color: #636b6f;
                font-weight: 400;
                font-size: 18px;
            }

            div.nights .checkbox {
                display: -webkit-box;
                display: flex;
                display: -webkit-flex;
                -webkit-box-align: center;
                align-items: center;
                align-content: center;
                -webkit-box-pack: center;
                justify-content: center;

                width: 100%;
                margin-top: 36px;
                position: relative;
                right: 14px;
            }

            .has-error input[type="email"], .has-error input[type="text"] {
                box-shadow: 0 1px 0px #d14848;
                border-bottom: 1px solid #d14848;
            }

            .control {
                font-size: 18px;
                position: relative;
                display: block;
                margin-bottom: 15px;
                margin-left: 16px;
                cursor: pointer;
            }

            @media only screen and (min-width: 414px) {

                .control {
                	margin-left: 32px;
                }
            }

            .control span {
                position: relative;
                font-size: 14px;
                display: inline-block;
                text-transform: uppercase;
                width: 24px;
                text-align: center;
                top: -22px;
                right: 3px;
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
            .control:hover input ~ .control__indicator,
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

        </style>

    </head>

    <body>
        @if(Session::has('success'))
            <span class="alert alert-success">
                <span>{{ Session::get('success') }}</span>
                <button>x</button>
            </span>
        @endif

        @if(Session::has('fail'))
            <span class="alert alert-fail">
                <span>{{ Session::get('fail') }}</span>
                <button>x</button>
            </span>
        @endif

        @if(Session::has('warning'))
            <span class="alert alert-warning">
                <span>{{ Session::get('warning') }}</span>
                <button>x</button>
            </span>
        @endif

        <div class="container-soccer full-height">

            <span>Summer Football</span>

            <form class="form-login" role="form" method="POST" action="{{ url('/form') }}">
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

                <div class="nights">
                    <span> Nights Available</span>

                    <div class="checkbox">
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
                        <label class="control control--checkbox"><span>th</span>
                    		<input type="checkbox" name="th" value="y"/>
                    		<div class="control__indicator"></div>
                    	</label>
                        <label class="control control--checkbox"><span>f</span>
                    		<input type="checkbox" name="f" value="y"/>
                    		<div class="control__indicator"></div>
                    	</label>
                        <label class="control control--checkbox"><span>s</span>
                    		<input type="checkbox" name="s" value="y"/>
                    		<div class="control__indicator"></div>
                    	</label>
                        <label class="control control--checkbox"><span>su</span>
                    		<input type="checkbox" name="su"/>
                    		<div class="control__indicator"></div>
                    	</label>
            		</div>
                </div>

                <input type="submit" name="submit" value="submit" class="btn-login">
            </form>
        </div>
    </body>
</html>
