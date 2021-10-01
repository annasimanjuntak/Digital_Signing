<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Register</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <style>
        * {
            margin: 0;
            padding: 0
        }

        html {
            height: 100%
        }

        p {
            color: grey
        }

        #heading {
            text-transform: uppercase;
            color: #1F96ED;
            font-weight: normal;
            font-family: 'Roboto';
            font-size: 22px;
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        .form-card {
            text-align: left
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }

        #msform input,
        #msform textarea {
            padding: 8px 15px 8px 15px;
            border: 1px solid #C4C4C4;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: 'Roboto';
            color: #2C3E50;
            font-size: 14px;
            letter-spacing: 1px
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #1F96ED;
            outline-width: 0
        }

        #msform .action-button {
            width: 100px;
            background: #1F96ED;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 15px 0px 0px;
            float: right
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #14279B
        }

        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px 10px 0px;
            float: right
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            background-color: #000000
        }

        .card {
            z-index: 0;
            border: none;
            position: relative
        }

        .fs-title {
            font-size: 25px;
            color: #1F96ED;
            margin-bottom: 15px;
            font-weight: normal;
            text-align: left
        }

        .purple-text {
            color: #1F96ED;
            font-weight: normal
        }

        .steps {
            font-size: 25px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right
        }

        .fieldlabels {
            color: #212529;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #1F96ED
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f13e"
        }

        #progressbar #office:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #akun:before {
            font-family: FontAwesome;
            content: "\f030"
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #1F96ED;
        }

        .progress {
            height: 20px
        }

        .progress-bar {
            background-color: #1F96ED;
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }

        .card-0 {
            min-height: 110vh;
            background: linear-gradient(-20deg, rgb(255, 255, 255) 50%, #0275d8 50%);
            color: white;
            border: 0px
        }

        p {
            font-size: 15px;
            line-height: 25px !important;
            font-weight: 500;
            font-family: 'Roboto';
        }

        .container {
            padding-top: 100px !important;
            border-radius: 20px
        }

        .btn {
            letter-spacing: 1px
        }

        select:active {
            box-shadow: none !important;
            outline-width: 0 !important
        }

        select:after {
            box-shadow: none !important;
            outline-width: 0 !important
        }

        input,
        textarea {
            padding: 10px 12px 10px 12px;
            border: 1px solid lightgrey;
            border-radius: 0px !important;
            margin-bottom: 5px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            color: #2C3E50;
            font-size: 14px;
            letter-spacing: 1px;
            resize: none
        }

        select:focus,
        input:focus {
            box-shadow: none !important;
            border: 1px solid #2196F3 !important;
            outline-width: 0 !important;
            font-weight: 400
        }

        label {
            margin-bottom: 2px;
            font-weight: bolder;
            font-size: 14px
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #304FFE;
            outline-width: 0
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        .form-control {
            height: calc(2em + .75rem + 3px)
        }

        .inner-card {
            margin: 79px 0px 70px 0px
        }

        .card-0 {
            margin-top: 100px;
            margin-bottom: 100px
        }

        .card-1 {
            border-radius: 17px;
            color: black;
            box-shadow: 2px 4px 15px 0px rgb(0, 0, 0, 0.5) !important
        }

        #file {
            border: 2px dashed #92b0b3 !important
        }

        .color input {
            background-color: #f1f1f1
        }

        .files:before {
            position: absolute;
            bottom: 60px;
            left: 0;
            width: 100%;
            content: attr(data-before);
            color: #000;
            font-size: 12px;
            font-weight: 600;
            text-align: center
        }

        #file {
            display: inline-block;
            width: 100%;
            padding: 95px 0 0 100%;
            background: url('https://i.imgur.com/VXWKoBD.png') top center no-repeat #fff;
            background-size: 55px 55px
        }
    </style>
</head>

<body class='snippet-body'>
        
    <div class="row justify-content-center" style="background-color: #F3F6F9;">
        <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6 text-center p-0 mt-4 mb-3"
            style="background-color: #ffffff; border-radius: 16px;">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Register Your Account</h2>
                <p>Fill all form field to go to next step</p>
                <form method="POST" id="msform" action="{{ route('register') }}" enctype="multipart/form-data">
                    <!-- progressbar -->
                    @csrf
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Personal</strong></li>
                        <li id="office"><strong>Office</strong></li>
                        <li id="akun"><strong>Account</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset id="personal_information" class="">
                        <div class="form-card" style="width: 115%; margin-left: 18px;">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Personal Information:</h2>
                                </div>

                            </div>
                            <div class="row justify-content">
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group"><label for="nik">Nik</label><input type="text"
                                            class="form-control" id="nik" name="nik" placeholder="Type your nik" require> </div>
                                    <div class="form-group"> <label for="name">Name</label> <input type="text"
                                            class="form-control" id="id" name="name"placeholder="Type your name"> </div>
                                    <div class="form-group"> <label for="address">Address</label> <input
                                            type="text" class="form-control" id="address" name="address"
                                            placeholder="Type your address"> </div>
                                    <div class="form-group"> <label for="province">Province</label> <select
                                            class="form-control" name="province" style="border-radius: 0px;">
                                            <option>Sumatera Utara</option>
                                            <option>Aceh</option>
                                            <option>Jawa Barat</option>
                                        </select> </div>
                                    <div class="form-group"> <label for="city">City</label> <select
                                            class="form-control" name="city" style="border-radius: 0px;">
                                            <option>Tapanuli Utara</option>
                                            <option>Samosir</option>
                                            <option>Medan</option>
                                        </select> </div>

                                   

                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group"> <label for="place_of_birth">Place of Birth</label> <input
                                            type="text" class="form-control" id="place_of_birth" name="place_of_birth"
                                            placeholder="Type your Place of Birth "> </div>
                                    <div class="form-group"> <label for="date_of_birth">Date of Birth</label> <input
                                            type="date" class="form-control" id="date_of_birth"
                                            placeholder="Type your date of birth "> </div>
                                    <!-- <div class="form-group"> <label for="phone">Email</label> <input type="email"
                                            class="form-control" id="email" placeholder=""> </div> -->
                                    <div class="form-group"> <label for="last-name">Gender</label> <select
                                            class="form-control" name="gender" style="border-radius: 0px;">
                                            <option value="none" selected disabled hidden>
                                                Select your gender
                                            </option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select> </div>
                                        <div class="form-group"> <label for="phone">Mobile Phone</label> <input
                                            type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Type your mobile phone "> </div>
                                  
                                    <div class="form-group"> <label class="ktp_photo">Upload Your Ktp:</label>
                                        <input type="file" name="ktp_photo" accept="image/*">
                                    </div>
                                   
                                </div>
                            </div>
                        </div> <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset id="company_information">
                        <div class="form-card" style="margin: 0px 60px 0px 60px;">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Company Information:</h2>
                                </div>
                               
                            </div> <label class="fieldlabels">Npwp</label> <input type="text" name="npwp"
                                placeholder="Type your npwp" /> 
                                <label class="fieldlabels">Upload Your Npwp:</label> <input type="file" name="npwp_photo"
                                accept="image/*">
                                <label class="fieldlabels">Organization Unit</label> <input
                                type="text" name="org_unit" placeholder="Type your organization unit" /> 
                                <label class="fieldlabels">Work Unit</label> <input type="text" name="work_unit" placeholder="Type your organization unit" /> 
                                <label class="fieldlabels">Position</label> <input type="text" name="position" placeholder="Type your position" />
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                            type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset account_information>
                        <div class="form-card" style="margin: 0px 60px 0px 60px;">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Account Information:</h2>
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

                        <div class="form-group row">
                            <label for="captcha" class="col-md-4 col-form-label text-md-right">Captcha</label>
                            <div class="col-md-6 captcha">
                                <span>{!! captcha_img() !!}</span>
                                <button type="button" class="btn btn-danger" class="reload" id="reload">
                                &#x21bb;
                                </button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="captcha" class="col-md-4 col-form-label text-md-right">Enter Captcha</label>
                            <div class="col-md-6">
                                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                            </div>
                        </div>


                           <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    
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
    <script type='text/javascript'
        src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'>$(document).ready(function () {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function () {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({ opacity: 0 }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({ 'opacity': opacity });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            $(".previous").click(function () {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({ opacity: 0 }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({ 'opacity': opacity });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function () {
                return false;
            })

        });
        
        $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
        
        </script>
</body>

</html>