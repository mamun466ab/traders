<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        <link rel="icon" type="image/gif" href="{{asset('asset/libs/logo/app_logo.png')}}" />
        <!-- Bootstrap core CSS -->
        <link href="{{asset('asset/libs/css/bootstrap.css')}}" rel="stylesheet">
        <!--external css-->
        <link href="{{asset('asset/libs/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{asset('asset/libs/css/zabuto_calendar.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/libs/js/gritter/css/jquery.gritter.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('asset/libs/lineicons/style.css')}}">    

        <!-- Custom styles for this template -->
        <link href="{{asset('asset/libs/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('asset/libs/css/style-responsive.css')}}" rel="stylesheet">

        <script src="{{asset('asset/libs/js/chart-master/Chart.js')}}"></script>

        <!-- HTML5 shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js')}}/1.4.2/respond.min.js')}}"></script>
        <![endif]-->
        <script type="text/javascript">
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('clk').innerHTML =
            h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 1000);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    }
    ;  // add zero in front of numbers < 10
    return i;
}
        </script>
    </head>

    <body onload="startTime()">

        <section id="container" >
            <!-- **********************************************************************************************************************************************************
            TOP BAR CONTENT & NOTIFICATIONS
            *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="{{URL::to('/sAdmin-cPanel')}}" class="logo"><b>BIZ APP</b></a>
                <!--logo end-->
                <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">
                        <li><a href="{{URL::to('/sAdmin-cPanel')}}" style="font-size: 12px;">Super Admin Control Panel</a></li>

                    </ul>
                    <!--  notification end -->
                </div>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu" style="margin-right: 4%;">
                        <!--<li><a class="logout" href="login.html">Logout</a></li>-->
                        <!-- settings start -->
                        <li id="header_inbox_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-theme" style="background: none; color: #FF865C;">10</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <div class="notify-arrow notify-arrow-green"></div>
                                <li>
                                    <p class="green">You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="{{asset('asset/libs/img/ui-zac.jpg')}}"></span>
                                        <span class="subject">
                                            <span class="from">Zac Snider</span>
                                            <span class="time">Just now</span>
                                        </span>
                                        <span class="message">
                                            Hi mate, how is everything?
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="{{asset('asset/libs/img/ui-divya.jpg')}}"></span>
                                        <span class="subject">
                                            <span class="from">Divya Manian</span>
                                            <span class="time">40 mins.</span>
                                        </span>
                                        <span class="message">
                                            Hi, I need your help with this.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="{{asset('asset/libs/img/ui-danro.jpg')}}"></span>
                                        <span class="subject">
                                            <span class="from">Dan Rogers</span>
                                            <span class="time">2 hrs.</span>
                                        </span>
                                        <span class="message">
                                            Love your new Dashboard.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="{{asset('asset/libs/img/ui-sherman.jpg')}}"></span>
                                        <span class="subject">
                                            <span class="from">Dj Sherman</span>
                                            <span class="time">4 hrs.</span>
                                        </span>
                                        <span class="message">
                                            Please, answer asap.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- settings end -->
                        <!-- inbox dropdown start-->
                        <li id="header_inbox_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge bg-theme" style="background: none; color: #FF865C;">10</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <div class="notify-arrow notify-arrow-green"></div>
                                <li>
                                    <p class="green">You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="{{asset('asset/libs/img/ui-zac.jpg')}}"></span>
                                        <span class="subject">
                                            <span class="from">Zac Snider</span>
                                            <span class="time">Just now</span>
                                        </span>
                                        <span class="message">
                                            Hi mate, how is everything?
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="{{asset('asset/libs/img/ui-divya.jpg')}}"></span>
                                        <span class="subject">
                                            <span class="from">Divya Manian</span>
                                            <span class="time">40 mins.</span>
                                        </span>
                                        <span class="message">
                                            Hi, I need your help with this.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="{{asset('asset/libs/img/ui-danro.jpg')}}"></span>
                                        <span class="subject">
                                            <span class="from">Dan Rogers</span>
                                            <span class="time">2 hrs.</span>
                                        </span>
                                        <span class="message">
                                            Love your new Dashboard.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="{{asset('asset/libs/img/ui-sherman.jpg')}}"></span>
                                        <span class="subject">
                                            <span class="from">Dj Sherman</span>
                                            <span class="time">4 hrs.</span>
                                        </span>
                                        <span class="message">
                                            Please, answer asap.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <li id="header_inbox_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <i class="fa fa-cog"></i>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <div class="notify-arrow notify-arrow-green"></div>
                                <li>
                                    <p class="green">You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="profile">User Profile</a>
                                </li>
                                <li>
                                    <a href="index.html#">Change Password</a>
                                </li>
                                <li>
                                    <a href="index.html#">Lock Screen</a>
                                </li>
                                <li>
                                    <a href="sAdmin-Logout">Logout</a>
                                </li>
                            </ul>
                        </li>
                        <!-- inbox dropdown end -->
                    </ul>
                </div>
            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">

                        <p class="centered"><a href="#"><img src="{{asset('asset/libs/img/super-admin.png')}}" class="img-circle" width="60"></a></p>
                        <h5 class="centered">
                            {{Session::get('admn_nm')}}<br />
                            (<span style="color: #48cfad; font-size: 12px;">Super Admin</span>)
                        </h5>

                        <li class="mt">
                            <a class="active" href="{{URL::to('/sAdmin-cPanel')}}">
                                <i class="fa fa-dashboard"></i>
                                <span>Add Organization</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-usd"></i>
                                <span>Cost</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="buy-product">Buy Product</a></li>
                                <li><a  href="carrying-cost">Carrying Cost</a></li>
                                <li><a  href="others-cost">Others Cost</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-university"></i>
                                <span>Bank</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="cash-in">Cash In</a></li>
                                <li><a  href="cash-out">Cash Out</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="donate">
                                <i class="fa fa-money"></i>
                                <span>Donate</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-flag"></i>
                                <span>Reports</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="report-by-project">By Project</a></li>
                                <li><a  href="daily-report">Daily</a></li>
                                <li><a  href="report-by-date">By Date</a></li>
                                <li><a  href="report-by-product">By Product</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->

            <!-- **********************************************************************************************************************************************************
            MAIN CONTENT
            *********************************************************************************************************************************************************** -->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <div class="row">
                        <div class="col-md-12" style="height: 53px; background-color: #424A5D;">
                            <div id="navbar">    
                                <nav class="navbar navbar-default navbar-static-top" role="navigation" id="menu-bar" data-spy="affix" data-offset-top="1">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                        <ul class="nav navbar-nav" id="dropdown-ul">
                                            <li><a href="{{URL::to('/sAdmin-cPanel')}}" id="menu-line-height" style="margin-top: 5px;"><i class="fa fa-home fa-2x"></i></a></li>
                                            <li><a href="{{URL::to('/sAdmin-cPanel')}}" id="menu-line-height">Add Organization</a></li>

                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-line-height">Staff <b class="caret"></b></a> 

                                                <ul class="dropdown-menu" id="dropdown-menu">
                                                    <li><a href="/add-organization">Add Organization</a></li>
                                                    <li><a href="/all-staff">Stuff List</a></li>
                                                    <li><a href="/delete-staff">Delete Stuff</a></li>
                                                    <li><a href="/block-staff">Block Stuff</a></li>
                                                    <li><a href="/edit-staff-info">Edit Info</a></li>                                
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-line-height">Contructors <b class="caret"></b></a> 

                                                <ul class="dropdown-menu" id="dropdown-menu">
                                                    <li><a href="/new-contractor">New Contractor</a></li>
                                                    <li><a href="/block-contractor">Block Contractor</a></li>
                                                    <li><a href="/contractor-info-edit">Edit Info</a></li>                                
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-line-height">Settings <b class="caret"></b></a> 

                                                <ul class="dropdown-menu" id="dropdown-menu">
                                                    <li><a href="/new-product">New Product</a></li>
                                                    <li><a href="/product-grade">Product Grade</a></li>
                                                    <li><a href="/unit">Unit</a></li>                                  
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-line-height">Menu3 <b class="caret"></b></a> 

                                                <ul class="dropdown-menu" id="dropdown-menu">
                                                    <li><a href="#">Dropdown</a></li>
                                                    <li><a href="#">Dropdown Link 1</a></li>
                                                    <li><a href="#">Dropdown Link 2</a></li>
                                                    <li><a href="#">Dropdown Link 3</a></li>
                                                    <li><a href="#">Dropdown Link 4</a></li>
                                                    <li><a href="#">Dropdown Link 5</a></li>                                   
                                                </ul>
                                            </li>
                                            <!--                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-line-height">Menu4 <b class="caret"></b></a>
                                                                                            <ul class="dropdown-menu"  id="dropdown-menu">
                                                                                                <li class="kopie"><a href="#">Dropdown2</a></li>
                                                                                                <li><a href="#">Dropdown2 Link 1</a></li>
                                                                                                <li><a href="#">Dropdown2 Link 2</a></li>
                                                                                                <li><a href="#">Dropdown2 Link 3</a></li>
                                            
                                                                                                <li class="dropdown dropdown-submenu" id="dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown2 Link 4</a>
                                                                                                    <ul class="dropdown-menu"  id="dropdown-menu">
                                                                                                        <li class="kopie"><a href="#">Dropdown2 Link 4</a></li>
                                                                                                        <li><a href="#">Dropdown2 Submenu Link 4.1</a></li>
                                                                                                        <li><a href="#">Dropdown2 Submenu Link 4.2</a></li>
                                                                                                        <li><a href="#">Dropdown2 Submenu Link 4.3</a></li>
                                                                                                        <li><a href="#">Dropdown2 Submenu Link 4.4</a></li>
                                            
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li class="dropdown dropdown-submenu" id="dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown2 Link 5</a>
                                                                                                    <ul class="dropdown-menu"  id="dropdown-menu">
                                                                                                        <li class="kopie"><a href="#">Dropdown Link 5</a></li>
                                                                                                        <li><a href="#">Dropdown2 Submenu Link 5.1</a></li>
                                                                                                        <li><a href="#">Dropdown2 Submenu Link 5.2</a></li>
                                                                                                        <li><a href="#">Dropdown2 Submenu Link 5.3</a></li>
                                                                                                        <li class="dropdown dropdown-submenu" id="dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
                                                                                                            <ul class="dropdown-menu"  id="dropdown-menu">
                                                                                                                <li class="kopie"><a href="#">Dropdown2 Submenu Link 5.4</a></li>
                                                                                                                <li><a href="#">Dropdown2 Submenu Link 5.4.1</a></li>
                                                                                                                <li><a href="#">Dropdown2 Submenu Link 5.4.2</a></li>
                                            
                                                                                                            </ul>
                                                                                                        </li>                                  
                                                                                                    </ul>
                                                                                                </li>                                  
                                                                                            </ul>
                                                                                        </li>-->
                                        </ul>
                                    </div><!-- /.navbar-collapse -->
                                </nav>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10" style="color: #000 !important; font-family: arial,sans-serif; font-size: 14px;">
                            @yield('content')
                        </div><!-- /col-lg-9 END SECTION MIDDLE -->


                        <!-- **********************************************************************************************************************************************************
                        RIGHT SIDEBAR CONTENT
                        *********************************************************************************************************************************************************** -->                  

                        <div class="col-lg-2 ds">
                            <!-- CALENDAR-->
                            <div id="calendar" class="mb">
                                <div class="panel green-panel no-margin">
                                    <div class="panel-body">
                                        <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                            <div class="arrow"></div>
                                            <h3 class="popover-title" style="disadding: none;"></h3>
                                            <div id="date-popover-content" class="popover-content"></div>
                                        </div>
                                        <div id="my-calendar" style="color: #000000 !important; font-weight: bold; font-family:'digital-clock-font';"><span id="clk" style="font-size: 22px;"></span><br /><?php echo date('d M Y'); ?></div>
                                    </div>
                                </div>
                            </div><!-- / calendar -->
                            <!--COMPLETED ACTIONS DONUTS CHART-->
                            <h3>NOTIFICATIONS</h3>

                            <!-- First Action -->
                            <div class="desc">
                                <div class="details">
                                    <p><muted>2 Minutes Ago</muted><br/>
                                    <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                                    </p>
                                </div>
                            </div>
                            <!-- Second Action -->
                            <div class="desc">
                                <div class="details">
                                    <p><muted>3 Hours Ago</muted><br/>
                                    <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                                    </p>
                                </div>
                            </div>
                            <!-- Third Action -->
                            <div class="desc">
                                <div class="details">
                                    <p><muted>7 Hours Ago</muted><br/>
                                    <a href="#">Brandon Page</a> purchased a year subscription.<br/>
                                    </p>
                                </div>
                            </div>
                            <!-- Fourth Action -->
                            <div class="desc">
                                <div class="details">
                                    <p><muted>11 Hours Ago</muted><br/>
                                    <a href="#">Mark Twain</a> commented your post.<br/>
                                    </p>
                                </div>
                            </div>
                            <!-- Fifth Action -->
                            <div class="desc">
                                <div class="details">
                                    <p><muted>18 Hours Ago</muted><br/>
                                    <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>
                                    </p>
                                </div>
                            </div>

                            <!-- USERS ONLINE SECTION -->
                            <h3>TEAM MEMBERS</h3>
                            <!-- First Member -->
                            <div class="desc">
                                <div class="thumb">
                                    <img class="img-circle" src="{{asset('asset/libs/img/ui-divya.jpg')}}" width="35px" height="35px" align="">
                                </div>
                                <div class="details">
                                    <p><a href="#">DIVYA MANIAN</a><br/>
                                    <muted>Available</muted>
                                    </p>
                                </div>
                            </div>
                            <!-- Second Member -->
                            <div class="desc">
                                <div class="thumb">
                                    <img class="img-circle" src="{{asset('asset/libs/img/ui-sherman.jpg')}}" width="35px" height="35px" align="">
                                </div>
                                <div class="details">
                                    <p><a href="#">DJ SHERMAN</a><br/>
                                    <muted>I am Busy</muted>
                                    </p>
                                </div>
                            </div>
                            <!-- Third Member -->
                            <div class="desc">
                                <div class="thumb">
                                    <img class="img-circle" src="{{asset('asset/libs/img/ui-danro.jpg')}}" width="35px" height="35px" align="">
                                </div>
                                <div class="details">
                                    <p><a href="#">DAN ROGERS</a><br/>
                                    <muted>Available</muted>
                                    </p>
                                </div>
                            </div>
                            <!-- Fourth Member -->
                            <div class="desc">
                                <div class="thumb">
                                    <img class="img-circle" src="{{asset('asset/libs/img/ui-zac.jpg')}}" width="35px" height="35px" align="">
                                </div>
                                <div class="details">
                                    <p><a href="#">Zac Sniders</a><br/>
                                    <muted>Available</muted>
                                    </p>
                                </div>
                            </div>
                            <!-- Fifth Member -->
                            <div class="desc">
                                <div class="thumb">
                                    <img class="img-circle" src="{{asset('asset/libs/img/ui-sam.jpg')}}" width="35px" height="35px" align="">
                                </div>
                                <div class="details">
                                    <p><a href="#">Marcel Newman</a><br/>
                                    <muted>Available</muted>
                                    </p>
                                </div>
                            </div>



                        </div><!-- /col-lg-3 -->
                    </div><! --/row -->
                </section>
            </section>

            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    2014 - Web Application of Business Management.
                    <a href="index.html#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <!--<script src="{{asset('asset/libs/js/jquery.js')}}"></script>-->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="{{asset('asset/libs/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('asset/libs/js/jquery-3.3.1.min.js')}}"></script>
        <script class="include" type="text/javascript" src="{{asset('asset/libs/js/jquery.dcjqaccordion.2.7.js')}}"></script>
        <script src="{{asset('asset/libs/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('asset/libs/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('asset/libs/js/jquery.sparkline.js')}}"></script>


        <!--common script for all pages-->
        <script src="{{asset('asset/libs/js/common-scripts.js')}}"></script>

        <!--<script type="text/javascript" src="{{asset('asset/libs/js/gritter/js/jquery.gritter.js')}}"></script>-->
        <!--<script type="text/javascript" src="{{asset('asset/libs/js/gritter-conf.js')}}"></script>-->

        <!--script for this page-->
        <!--<script src="{{asset('asset/libs/js/sparkline-chart.js')}}"></script>-->    
<!--        <script src="{{asset('asset/libs/js/zabuto_calendar.js')}}"></script>-->

        <script type="text/javascript">
//$(document).ready(function () {
//    var unique_id = $.gritter.add({
//        // (string | mandatory) the heading of the notification
//        title: 'Welcome to Dashgum!',
//        // (string | mandatory) the text inside the notification
//        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
//        // (string | optional) the image to display on the left
//        image: "{{asset('asset/libs/logo/app_logo.png')}}",
//        // (bool | optional) if you want it to fade out on its own or just sit there
//        sticky: true,
//        // (int | optional) the time you want it to be alive for before fading out
//        time: '',
//        // (string | optional) the class name you want to apply to that specific message
//        class_name: 'my-sticky-class'
//    });
//
//    return false;
//});
        </script>

<!--        <script type="application/javascript">
            $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
            $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
            action: function () {
            return myDateFunction(this.id, false);
            },
            action_nav: function () {
            return myNavFunction(this.id);
            },
            ajax: {
            url: "show_data.php?action=1",
            modal: true
            },
            legend: [
            {type: "text", label: "Special event", badge: "00"},
            {type: "block", label: "Regular event", }
            ]
            });
            });


            function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
            }
        </script>-->

        <script type="text/javascript">
            //Company code generate
            $(document).ready(function () {
                $('#org_name').keyup(function () {
                    var org_name = $('#org_name').val();
                    var matches = org_name.match(/\b(\w)/g);
                    var org_code = matches.join('').toUpperCase();
                    $('#org_code').val(org_code);
                });
            });
            //company code generate end
            
            //auto load division by select country
//            $('#adn_cnt').change(function(){
//                var adn_cnt = $(this).val();
//                $('#adn_dvn').html("");
//                if(adn_cnt == ""){
//                    $('#adn_dvn').css('color','red');
//                }else if(adn_cnt == 'Bangladesh'){
//                    $('#adn_dvn').append('<option value="">Select Division</option>');
//                    $('#adn_dvn').append('<option>Dhaka</option>');
//                    $('#adn_dvn').append('<option>Barshal</option>');
//                    $('#adn_dvn').append('<option>Dhaka</option>');
//                    $('#adn_dvn').append('<option>Dhaka</option>');
//                    $('#adn_dvn').append('<option>Dhaka</option>');
//                    $('#adn_dvn').append('<option>Dhaka</option>');
//                    $('#adn_dvn').append('<option>Dhaka</option>');
//                    $('#adn_dvn').css('color','#000');
//                }else{
//                    $('#adn_dvn').html('<option value="">Country Not Allow</option>');
//                    $('#adn_dvn').css('color','red');
//                }
//            });
            //auto load division by select country
        </script>

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#wbd_form').on('submit change', function (e) {
                e.preventDefault();
                data = $(this).serialize();
                url = $(this).attr('action');

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    success: function (data) {
                        console.log(data);
                        if ($.isEmptyObject(data.errors)) {
                            console.log(data.success);
                            $('#wbd_form')[0].reset();
                            $('.text-danger').remove();
                            $('.form-group').removeClass('has-error').removeClass('has-success');
                            $('.print-success-msg').html(data.success);
                            $('.print-success-msg').css('display', 'block');
                        } else {
                            printMessageErrors(data.errors);
                        }
                    }
                });
            });

            function printMessageErrors(msg) {
                $('.form-group').removeClass('has-error').find('.text-danger').remove();
                $.each(msg, function (key, value) {
                    var element = $('#' + key);
                    element.closest('div.form-group')
                            .addClass(value.length > 0 ? 'has-error' : 'has-success');
                    $('.control-label').css('color', '#000');
                    element.after('<span class="text-danger"><span class="glyphicon glyphicon-exclamation-sign text-danger"></span> ' + value + '</span>');
                });
            }
        </script>
    </body>
</html>
