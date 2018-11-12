<!DOCTYPE html>
<html lang="en" class="body-full-height">
    
<head>        
        <!-- META SECTION -->
        <title> Admin </title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{asset('public/admin/css/theme-default.css')}}"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
       
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <!-- <div class="login-logo"></div> -->
                <br><br><br>
                <div class="login-body">
                    <center><div class="login-title"><strong>Log In</strong> to your account</div></center>
                    <form action="#" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="E-mail"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{url('admin/dashboard')}}" class="btn btn-info btn-block">Log In</a>
                        </div>
                    </div>
                    <!-- <div class="login-or">OR</div> -->
                    <div class="form-group">
                        <!-- <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                        </div>
                        <div class="col-md-4">                            
                            <button class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button>
                        </div> -->
                    </div>
                    <div class="login-subtitle">
                        Don't have an account yet? <a href="#">Create an account</a>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <!-- <div class="pull-left">
                        &copy; 2018 AppName
                    </div> -->
                    <!-- <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div> -->
                </div>
            </div>
            
        </div>
        
    </body>

</html>






