<?php
$title = 'dashboard';
require 'functions.php';
require 'layout_header.php';
include 'koneksi.php';

$user = mysqli_query($koneksi, "SELECT * FROM user");
$member = mysqli_query($koneksi,"SELECT * FROM member");
$outlet = mysqli_query($koneksi,"SELECT * FROM outlet");




?>


    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                
                <h4>Selamat Datang <b><?php echo ucwords($_SESSION['role']); ?></b></h4>

            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                   <div class="icon">
                    <center><img src="analis.png" height="100px;" alt=""></center>
               
                    <div class="text-box">
                        <center><p class="main-text">
                            User</p>
                        <p class="main-text"><?=  mysqli_num_rows($user);
 ?></p></center>
                    </div>
                </div>
            </div>
        </div>

            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                   <div class="icon">
                    <center><img src="siswa.png" height="100px;" alt=""></center>
                    <div class="text-box">
                        <center><p class="main-text">
                            Member</p>
                        <p class="main-text"><?=  mysqli_num_rows($member);
 ?></p></center>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                   <div class="icon">
                    <center><img src="buku.png" height="100px;" alt=""></center>
             
                    <div class="text-box">
                        <center><p class="main-text">
                            outlet</p>
                        <p class="main-text"><?=  mysqli_num_rows($outlet);
 ?></p>
                    </div></center>
                </div>
            </div>
        </div>