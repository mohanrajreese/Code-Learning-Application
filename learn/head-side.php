<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Angu</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../mdb/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../mdb/css/mdb.min.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css" rel="stylesheet"/>


  <!-- Your custom styles (optional) -->
  <style>

  </style>
</head>

<body class="fixed-sn white-skin">

  <!--Main Navigation-->
  <header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav fixed">
      <ul class="custom-scrollbar">
        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
          <div class="text-center">
            <a href="../index.html" class="pl-0">Code Learning Application</a>
          </div>
        </li>
        <!-- Logo -->

        <!--Search Form-->
        <li>
          <form class="search-form" role="search">
            <div class="md-form mt-0 waves-light">
              <input type="text" class="form-control py-2" placeholder="Search">
            </div>
          </form>
        </li>
        <!--Search Form-->
        <!-- Side navigation links -->
              
            

        <li>
          <ul class="collapsible collapsible-accordion">

          
                  <li>
                    <a class="collapsible-header waves-effect arrow-r" style="color:black;">
                      <h5>C</h5> <i class="fas fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                      <ul>
                            <?php
                              require_once "head-side.php";
                              require_once "../db/db_connect.php";

                              error_reporting(0);
                              $q = mysqli_query($connect,"select * from c_lang");

                              while($n=mysqli_fetch_array($q)){

                            ?>
                              <li><a href="learn.php?id=<?php echo $n[0];?>&lang=c_lang" class="collapsible-header waves-effect"><i class=" fas fa-th-large"></i>
                                  <?php     echo $n['indextopic'];       ?>           </a>
                              </li>
                            <?php } ?>
                      </ul>
                  </li>


                  <li>
                    <a class="collapsible-header waves-effect arrow-r" style="color:black;">
                      <h5>C++</h5> <i class="fas fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                      <ul>
                            <?php
                              require_once "head-side.php";
                              require_once "../db/db_connect.php";

                              error_reporting(0);
                              $q = mysqli_query($connect,"select * from cpp_lang");

                              while($n=mysqli_fetch_array($q)){

                            ?>
                              <li><a href="learn.php?id=<?php echo $n[0];?>&lang=cpp_lang" class="collapsible-header waves-effect"><i class=" fas fa-th-large"></i>
                                  <?php     echo $n['indextopic'];       ?>           </a>
                              </li>
                            <?php } ?>
                      </ul>
                  </li>

                          
                  <li>
                    <a class="collapsible-header waves-effect arrow-r" style="color:black;">
                    <h5>Java</h5> <i class="fas fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                      <ul>
                            <?php
              
                              $q2 = mysqli_query($connect,"select * from java_lang");

                              while($n2=mysqli_fetch_array($q2)){

                            ?>
                              <li><a href="learn.php?id=<?php echo $n2[0];?>&lang=java_lang" class="collapsible-header waves-effect"><i class=" fas fa-th-large"></i>
                                  <?php     echo $n2['indextopic'];       ?>           </a>
                              </li>
                            <?php } ?>
                      </ul>
                  </li>


                  <li>
                    <a class="collapsible-header waves-effect arrow-r" style="color:black;">
                      <h5>Python</h5> <i class="fas fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                      <ul>
                            <?php
                              require_once "head-side.php";
                              require_once "../db/db_connect.php";

                              error_reporting(0);
                              $q = mysqli_query($connect,"select * from python_lang");

                              while($n=mysqli_fetch_array($q)){

                            ?>
                              <li><a href="learn.php?id=<?php echo $n[0];?>&lang=python_lang" class="collapsible-header waves-effect"><i class=" fas fa-th-large"></i>
                                  <?php     echo $n['indextopic'];       ?>           </a>
                              </li>
                            <?php } ?>
                      </ul>
                  </li>



                    <!-- Side navigation links -->
              </ul>
            </div>
          </li>
      </ul>
      <div class="sidenav-bg mask-strong"></div>
    </div>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
      </div>
      <!-- Breadcrumb-->
      <div class="breadcrumb-dn mr-auto">
        &emsp;
        <a href="../index.html"><h5 style="color: red;margin-top:-15px;">&emsp;Code Learning Application</h5></a>
      </div>

      <!--Navbar links-->
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-code"></i> <span class="clearfix d-none d-sm-inline-block">Online Compiler</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="../comp.php?lang=c_lang">C</a>
            <a class="dropdown-item" href="../comp.php?lang=cpp_lang">C++</a>
            <a class="dropdown-item" href="../comp.php?lang=java_lang">Java</a>
            <a class="dropdown-item" href="../comp.php?lang=python_lang">Python</a>
          </div>
        </li>
                  
        <li class="nav-item">
          <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
        </li>
        

      </ul>
      <!--/Navbar links-->
    </nav>
    <!--Navbar -->

  </header>
  <!--Main Navigation-->
  <!-- Main layout -->
  <main>
    <div class="container">
