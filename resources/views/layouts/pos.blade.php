<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.html" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Pds - Digital Signature - @yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/turbo.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="../assets/vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet'>


</head>

<body>
    <div class="wrapper">
        <div class="sidebar">

            <div class="logo">
                <img src="../assets/img/logopds.png">
            </div>
            <div class="logo logo-mini shadow">
                <img src="../assets/img/logo.png">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <p>Home</p>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="material-icons">picture_as_pdf</i>
                            <p>Documents</p>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="material-icons">library_books</i>
                            <p>Templates</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">contact_mail</i>
                            <p>Contacts</p>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="main-panel" style="background-color: #F3F6F9">
            <nav class="navbar navbar-default navbar-absolute" data-topbar-color="blue" style="background-color: transparent;">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn  btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular f-26">menu</i>
                            <i class="material-icons visible-on-sidebar-mini f-26">menu</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <p class="user-name">Ryan Tanoto &nbsp;
                                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img style="width: 30px; height: 30px;" src="../assets/img/faces/profil.png" class="img-circle" alt="Avatar">
                                        <span></span> <i class="material-icons" style="color:#000000;">
                                            expand_more</i></a>
                                </p>
                                <!-- <ul class="dropdown-menu">
                                        <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                                    </ul> -->




                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
            <footer class="footer">
                <div class="container-fluid">

                    <p class="copyright pull-left">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">Peruri Digital Security</a> All rights reserved.
                    </p>
                </div>
            </footer>
        </div>

    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="../assets/vendors/jquery-ui.min.js" type="text/javascript"></script>
<script src="../assets/vendors/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/vendors/material.min.js" type="text/javascript"></script>
<script src="../assets/vendors/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<!-- Forms Validations Plugin -->
<script src="../assets/vendors/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../assets/vendors/moment.min.js"></script>

<!-- Material Dashboard javascript methods -->
<script src="../assets/js/turbo.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>





</html>






























