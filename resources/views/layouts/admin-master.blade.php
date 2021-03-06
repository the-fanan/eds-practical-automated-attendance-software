<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
    	<!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
         <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
            <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
         <!-- GOOGLE FONTS-->
       <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>
    <body>
        <div id="wrapper">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="adjust-nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            EAS<!--img src="assets/img/logo.png" /-->
                        </a>

                    </div>

                    <span class="logout-spn" >
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </span>
                </div>
            </div>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">



                        <!--li @yield('active-dashboard')>
                            <a href="/home" ><i class="fa fa-desktop "></i>Dashboard</a>
                        </li-->

                        <li @yield('active-attendance-upload')>
                            <a href="/attendance-upload"><i class="fa fa-upload "></i>Upload Attendance</a>
                        </li>

                        <li @yield('active-attendance')>
                            <a href="/attendance"><i class="fa fa-table "></i>Compute Attendance</a>
                        </li>

                        <li @yield('active-attendance-view')>
                            <a href="/attendance-view"><i class="fa fa-eye "></i>View Attendance</a>
                        </li>

                        <li @yield('active-event')>
                            <a href="/event"><i class="fa fa-calendar "></i>Event</a>
                        </li>

                        <li @yield('active-exeat')>
                            <a href="/exeat"><i class="fa fa-home "></i>Exeat</a>
                        </li>

                    </ul>
                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>@yield('main-title')</h2>
                        </div>
                    </div>

                    <hr />

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @include('alert')
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
       @include('footer')
    </body>
</html>
