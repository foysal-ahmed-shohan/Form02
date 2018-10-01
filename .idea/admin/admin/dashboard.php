<?php
session_start();

if (!isset($_SESSION['adminName'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: adminlogin.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['adminName']);
    header("location: adminlogin.php");
}
?>







<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin </title>
    <link rel="icon" type="image/png" href="style/image/mLogo.jpg" />
    <!-- BOOTSTRAP STYLES-->
    <link href="style/css/bootstrap.min.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="style/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <!-- CUSTOM STYLES-->
    <link href="style/css/custom.css" rel="stylesheet" />
    <link href="style/css/login.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>body{background-color: unset;
            background-image: none;}</style>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Admin</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <a class="btn btn-danger square-btn-adjust" href="index.php?logout='1'" style="color:white;">logout</a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="style/image/find_user.png" class="user-image img-responsive"/>
                </li>


                <li>
                    <a class="active-menu"  href="dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-home fa-3x"></i> Home </a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-sitemap fa-3x"></i> Activity</a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="">Add New Employee</a>
                        </li>
                        <li>
                            <a href=" ">Get Attendance</a>
                        </li>
                        <li>
                            <a href=" ">Notice</a>
                        </li>
                    </ul>
                <li>
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-3x"></i> Employee Salary </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href=" ">Calculate Salary</a>
                        </li>
                        <li>
                            <a href=" ">Edit Salary</a>
                        </li>
                        <li>
                            <a href=" ">Salary Report</a>
                        </li>
                    </ul>
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-3x"></i> Status View </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Employee List</a>
                        </li>
                        <li>
                            <a href="#">Employee Profile</a>
                        </li>
                        <li>
                            <a href="#">Attendance Report</a>
                        </li>
                    </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <?php  if (isset($_SESSION['adminName'])) : ?>
                        <h3 style="color: red; ">Welcome <strong><?php echo $_SESSION['adminName']; ?></strong></h3>

                    <?php endif ?>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text">Employee Post</p>
                            <p class="text-muted">Employee posts view</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text">Create Notice</p>
                            <p class="text-muted">Notice for Employee</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                        <div class="text-box">
                            <p class="main-text">Report</p><br>
                            <p class="text-muted">Today's Attendance report</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text">Salary Report</p>
                            <p class="text-muted">Total information status</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
        </div>
            <footer class="main-footer">
                <p class="text-center;" style="color:white; margin-left: 260px">&copy; All rights reserved to <a class="text-center" href="#"> Paradise Kindergarten School</p>
            </footer>


</body>
</html>
