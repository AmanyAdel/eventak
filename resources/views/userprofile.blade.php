<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="front/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>User profile</title>
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" /> 

    <!-- Animation library for notifications   -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet"/>

  <link href="{{asset('css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />

<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" src="../../public/css/images/sidebar-4.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Eventak
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="active">
                    <a href="">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <p>Edit Profile</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-gratipay" aria-hidden="true"></i>
                        <p>Interested Events</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                        <p>Approved Events</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-pause" aria-hidden="true"></i>
                        <p>Waiting Events</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-circle" aria-hidden="true"></i>
                        <p>Rejected Events</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-pencil-square" aria-hidden="true"></i>
                        <p>Manage Events </p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-bell-o" aria-hidden="true"></i>
                        <p>Notifications</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Profile</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret"></b>
                                    <span class="notification">5</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               Create Event
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    User name
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Log out</a></li>
                              </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"></h4>
                                <p class="category"></p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"></h4>
                                <p class="category"></p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"></h4>
                                <p class="category"></p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">hamada</h4>
                                <p class="category">menna</p>
                            </div>
                            <div class="content">
                                Amany
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth">Asmaa </div>
                            </div>
                        </div>
                    </div>
                    <!-- 
                    <div class="col-md-2 col-md-offset-6">
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                     <img class="avatar border-gray" src="../../public/css/images/face-0.jpg" alt="..."/> -->
                                      <h4 class="title"><br />
                                         <small></small>
                                      </h4>
                                    </a>
                                </div>
                                                    
                                
                            </div>
                           
                    </div> -->

                </div>
            </div>
        </div>

</body>

     <script src="../../public/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../../public/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../../public/js/bootstrap-checkbox-radio-switch.js"></script>
	<script src="../../public/js/chartist.min.js"></script>
    <script src="../../public/js/bootstrap-notify.js"></script>
    <script src="../../public/js/demo.js"></script>
</html>
