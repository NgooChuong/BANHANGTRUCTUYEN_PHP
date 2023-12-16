<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Frogetor - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by themesbrand" name="description" />
        <meta content="Mannatthemes" name="author" />

       <?php
            require_once 'Home/images.php';
            require_once 'Home/css.php';
       ?>
        <style>
            tr > td:last-child{
                display: none;
            }
            .Edit,.Delete{
                display: block;
                border-radius: 10px;

            }
            .Edit:hover,.Delete:hover{
                display: block;
                border-radius: 10px;
                box-shadow: none;
                transition: .3s;
            }
            .Edit{
                background-color: #7ed6df ;
                box-shadow: 5px 5px 10px #353b48;
            }
            .Delete{
                background-color: #e74c3c ;
                box-shadow: 5px 5px 10px #353b48;
            }
            .Edit> i,.Delete>i{
                color:#fff;
                padding:12px 2px 12px 12px;
            }
        </style>
    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar">
             <!-- Navbar -->
                    <?php require_once 'Home/navbar.php' ?>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
        <div class="page-wrapper-img">
            <div class="page-wrapper-img-inner">
                <div class="sidebar-user media">                    
                    <img src="<?php echo URL_ADMIN;?>/images/users/user-1.jpg" alt="user" class="rounded-circle img-thumbnail mb-1">
                    <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
                    <div class="media-body">
                        <h5 class="text-light">Mr. Michael Hill </h5>
                        <ul class="list-unstyled list-inline mb-0 mt-2">
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-account text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-power text-danger"></i></a>
                            </li>
                        </ul>
                    </div>                    
                </div>
                <!-- end page title end breadcrumb -->
            </div><!--end page-wrapper-img-inner-->
        </div><!--end page-wrapper-img-->
        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                <?php 
                    require_once 'Home/left-sidenav.php';
                ?>
                <!-- end left-sidenav-->

                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid"> 
                         <?php
                            require $main.'.php';
                         ?>
                    </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>
                <!-- end page content -->
            </div>
            <!--end page-wrapper-inner -->
        </div>
        <!-- end page-wrapper -->

       <?php
            require 'Home/js.php';
       ?>

    </body>
</html>