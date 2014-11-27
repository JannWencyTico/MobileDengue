<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
        <title>Dengue 101</title>
        <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'assets/css/bootstrap-theme.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/css/signin.css'); ?>" rel="stylesheet">
    </head>
<body>
    <div class="container"> 
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title"><b>Dengue 101: Monitoring and Reporting Dengue Cases</b></div>
                    <!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="http://localhost/Mobile/index.php/gfp" id="forgotPass">Forgot password?</a></div> -->
                </div>     
                <div style="padding-top:30px" class="panel-body" >
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    <form id="loginform" class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/form_login/login" method="post" name="login">
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="username" type="text" class="form-control" name="username" value="<?php echo set_value('username');?>" placeholder="Username"> 
                            <?php echo form_error('username');?>   
                        </div> 
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" value="<?php echo set_value('password');?>" placeholder="Password">
                            <?php echo form_error('password');?>
                        </div>
                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls">
                            <input style="float: right" id="btn-login" type="submit" name="login" value="Login" class="btn btn-primary">
                            </div>
                        </div>
                        <div class="form-group">
                            <hr>
                            <div class="col-md-12 control">
                                <div style="float: right; font-size:11px" >
                                    © Davao City 8000 Philippines
                                </div>
                            </div>
                        </div>
                    </form>
                </div>                     
            </div>  
        </div>
    </div>
</body>
</html>
