<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
        <title>Registration</title>
        <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'assets/css/bootstrap-theme.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/css/dashboard.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/layout.css'); ?>" rel="stylesheet">
        <script src="<?php echo base_url('assets/js/metro.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/metro-dropdown.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/sorttable.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.9.1.js') ?>" /></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.js') ?>" /></script>
        <script> $(function() { $( "#accordion1" ).accordion({ collapsible: true, active: false }); }); </script>
        <script> $(function() { $( "#ranking" ).accordion({ collapsible: true, active: false }); }); </script>
        <script> $(function() { $( "#accordion2" ).accordion({ collapsible: true, active: false }); }); </script>
        <script> $(function() { $( "#promotions" ).accordion({ collapsible: true, active: false }); }); </script>
        <script> $(function() { $( "#faculty" ).accordion({ collapsible: true, active: false }); }); </script>
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a id="header" class="navbar-brand" href="http://localhost/Mobile/index.php/home"><b>Dengue 101: Monitoring and Reporting Dengue Cases</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php echo form_open('search/execute_search');?>
                    <form id="searchBar" class="navbar-form navbar-left" role="search">
                        <div class="col-md-15">
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="Search Patient">
                            </div>
                        </div>
                    </form>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-cog"></span><b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="http://localhost/hr_recordsystem/index.php/change_pass">Change Password</a>
                        </li>
                        <li>
                            <a href="http://localhost/hr_recordsystem/index.php/login/logout">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar nav-stacked">
                    <li>
                        <a href="http://localhost/Mobile/index.php/home">
                            <img id="ProfPic" src = "<?php echo base_url('uploads/Android') ?>"></img>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/Mobile/index.php/home">
                            <h4>Home</h4>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/Mobile/index.php/registration">
                            <h4>Register</h4>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/Mobile/index.php/tips">
                            <h4>F.A.Q</h4>
                        </a>
                    </li>
                </ul>
            </div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">