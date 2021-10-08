<!doctype html>
<html lang="en">
    <head>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link href="../assets/vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <!-- Font Awesome CSS -->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer></script>
    </head>
    <style>
        html,
        body {
            height: 100%;
            font-family: 'Roboto';
        }
         
        .global-container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #F3F6F9;
           
        }
        .card {
    
            background: #FFFFFF;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 445px;
            height: 420px;
        }
         
        form {
            padding-top: 10px;
            font-size: 14px;
            margin-top: 10px;
        }
         
        .card-title {
            font-weight: 300;
        }
         
        .btn {
            font-size: 14px;
            margin-top: 20px;
        }
         
        .login-form {

            margin: 20px;
            height: 600px;
        }
         
        .sign-up {
            padding: 20px 0 0;
        }
         
        .alert {
            margin-bottom: -30px;
            font-size: 13px;
            margin-top: 20px;
        }
        .text-center{
            margin-top: 30px;
        }
        .form-group {
            margin-bottom: 0.5rem;
        }
        .label {
            color: #212529;
            font-size: 14px;
        }
        .form-control {
            border: 1px solid #ced4da;
            box-sizing: border-box;
            border-radius: 4.8px;
        }
        a {
        color: #2196F3;

        }

         
        </style>
    <body>
        <div class="global-container">
            <div class="card login-form">
                <div class="card-body">
                    <div class="text-center">
                    <img src="{{asset('../image/logo.png')}}">
                    </div>">
                    </div>
                    <div class="card-text">
                        @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <br />
                    @endif
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
               

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!-- <script type="text/javascript">
        var onloadCallback = function() {
          alert("grecaptcha is ready!");
        };
      </script> -->
</html>