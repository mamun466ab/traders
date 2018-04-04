<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="WBD Biz">
        <meta name="keyword" content="Web Application, Business Management Software,">

        <title>Super Admin Login</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('asset/libs/css/bootstrap.css')}}" rel="stylesheet">
        <!--external css-->
        <link href="{{asset('asset/libs/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="{{asset('asset/libs/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('asset/libs/css/style-responsive.css')}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/{{asset('')}}asset/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/{{asset('')}}asset/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->

        <div id="login-page">
            <div class="container">
                <img class="center-block img-circle bg-danger" src="{{asset('asset/libs/logo/app_logo.png')}}" alt="Main Logo" width="10%"/>
                <h3 class="centered"style="color: #fff;">Web Application of Business Management</h3>
                <h3 class="centered"style="color: #fff;">(Super Admin)</h3>
                <!--<form class="form-login" action="index.html">-->
                {!! Form::open(['url' => '/sadmin-login-action', 'class' => 'form-login']) !!}
                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">

                    <?php
                    $errormsg = Session::get('error');
                    if ($errormsg):
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $errormsg;
                            ?>
                        </div>
                        <?php
                        Session::forget('error');
                    endif;
                    ?>

                    <input name="sadmneml" type="text" class="form-control" placeholder="User Email Address" />
                    <br>
                    <input name="sadmnpsd" type="password" class="form-control" placeholder="Password" />
                    <label class="checkbox">
                        <span class="pull-right">
                            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>

                        </span>
                    </label>
                    <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                    <hr>

                    <div class="login-social-link centered">
                        <p>or you can sign in via your social network</p>
                        <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
                        <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
                    </div>
                    <div class="registration">
                        Don't have an account yet?<br/>
                        <a class="" href="#">
                            Create an account
                        </a>
                    </div>

                </div>

                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Forgot Password ?</h4>
                            </div>
                            <div class="modal-body">
                                <p>Enter your e-mail address below to reset your password.</p>
                                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                <button class="btn btn-theme" type="button">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->
                {!! Form::close() !!}
                <!--</form>-->	  	

            </div>
        </div>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{asset('asset/libs/js/jquery.js')}}"></script>
        <script src="{{asset('asset/libs/js/bootstrap.min.js')}}"></script>

        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="{{asset('asset/libs/js/jquery.backstretch.min.js')}}"></script>
        <script>
$.backstretch("{{asset('asset/libs/img/login-bg.png')}}", {speed: 500});
        </script>


    </body>
</html>
