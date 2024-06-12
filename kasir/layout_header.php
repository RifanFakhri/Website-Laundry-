<?php 
require 'koneksi.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>

    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>LAUNDRY SUPER</title>

        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

       
    </head>

<style>
    .kotak{
        padding: 15px 50px 5px 50px;
        float: left;
        font-size: 20px;
       color: white;
       margin-left: -40px;
    }
    #page-wrapper{
        padding : 30px 65px;
    }
    .dataTables_filter{
        margin-left : 300px;
    }
    .dataTables_paginate{
        margin-left: 300px;
    }
    .row{
        background: white;
        padding : 10px 5px;

    }
    .foto{
        height: 170px;
        margin-top: 20px;
        padding-bottom: 20px;
        margin-right: 30px;
    }
</style>
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
                </div>
                <div class="kotak">LAUNDRY</div>
                <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">Date :
                    <?php date_default_timezone_set('Asia/Jakarta');
echo date('d/m/Y'); ?> &nbsp; &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust" title="Logout">Keluar</a> </div>
            </nav>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center">
                            <img src="./assets/img/soto4.png" class="foto" />
                         
                        </li>
                       

                        <li>
                            <a href="dashboard.php"><i class="glyphicon glyphicon-home
"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="pelanggan.php"><i class="glyphicon glyphicon-tasks
"></i> Member</a>
                        </li>
                        <li>
                            <a href="transaksi.php"><i class="glyphicon glyphicon-user
"></i> Transaksi</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- /. NAV SIDE  -->

            <div id="page-wrapper">
                 <div id="page-inner">
                    
                        <div class="col-md-16">

                         

                        
                        
                <!-- /. PAGE INNER  -->
            
            <!-- /. PAGE WRAPPER  -->
        


        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
               <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
      