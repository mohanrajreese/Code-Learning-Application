<?php

require_once "db/db_connect.php";
$lang = $_GET['lang'];
$val=$_GET['val'];
?>



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
  <link rel="stylesheet" href="mdb/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="mdb/css/mdb.min.css">

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

<body>


    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light fixed-top navbar-expand-lg scrolling-navbar double-nav">
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto">
          <a href="index.html"><h5 style="color: red;">&emsp;Code Learning Application</h5></a>
        </div>
  
        <!--Navbar links-->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">

          <li class="nav-item">
            <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
          </li>
  
        </ul>
        <!--/Navbar links-->
      </nav>
      <!--Navbar -->
      <br>

    <div class="container">
        <div class="p-5 rounded mt-3" id="toppage" style="background-color: #E4F1FB;">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-sm-12">
                    <p>
                        <?php if($lang == 'c_lang') { ?>
                            <img src="images/Index_image/c.PNG" class="rounded" alt="Error in Image">
                        <?php }  
                        elseif($lang == 'cpp_lang') {
                        ?>
                            <img src="images/Index_image/cpp.PNG" class="rounded" alt="Error in Image">
                        <?php }  
                        elseif($lang == 'java_lang') {
                        ?>
                            <img src="images/Index_image/java.PNG" class="rounded" alt="Error in Image">
                        <?php }  
                        else{ ?>
                            <img src="images/Index_image/python.PNG" class="rounded" alt="Error in Image">
                        <?php } ?>
                    </p>
                </div>
                
                <div class="col" style="justify-content: left;">

                    <?php if($lang == 'c_lang') { ?>
                        <h1><b>Learn C Programming</b></h1><br>
                    <?php }  
                    elseif($lang == 'cpp_lang') {
                    ?>
                        <h1><b>Learn C++ Programming</b></h1><br>
                    <?php }  
                    elseif($lang == 'java_lang') {
                    ?>
                        <h1><b>Learn Java Programming</b></h1><br>
                    <?php }  
                    else{ ?>
                        <h1><b>Learn Python Programming</b></h1><br>
                    <?php } ?>


                    <input type="text" class="form-control-lg" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                    <datalist id="datalistOptions">
                    <?php
                        $qry = mysqli_query($connect,"select * from " . $lang . "");
                        while($n = mysqli_fetch_array($qry)){
                    ?>
                    <option value="<?php echo $n[1]; ?>">
                    <?php } ?>
                    </datalist>
                    &emsp;
                    <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="search()" class="btn btn-primary">Search</button>
                    
                    <br><br>

                    <?php if($lang == 'c_lang') { ?>
                    <a href="learn/learn.php?id=1&lang=cpp_lang">
                        <button type="button" class="btn btn-primary btn-rounded" style="background-color:#03338F;">Start Learning C &nbsp;&nbsp;
                            <i class="fas fa-arrow-right"></i>
                        </button> &emsp;
                        <a href="comp.php?lang=c_lang" class="btn btn-primary btn-rounded" style="background-color:#03338F;">Online C Complier</button>
                    </a>
                    <?php }  
                    elseif($lang == 'cpp_lang') { ?>
                    <a href="learn/learn.php?id=1&lang=cpp_lang">
                        <button type="button" class="btn btn-primary btn-rounded">Start Learning Cpp &nbsp;&nbsp;
                            <i class="fas fa-arrow-right"></i>
                        </button> &emsp; 
                        <a href="comp.php?lang=cpp_lang" class="btn btn-primary btn-rounded" style="background-color:#03338F;">Online Cpp Complier</button>
                    </a>
                    <?php }  
                    elseif($lang == 'java_lang') { ?>
                    <a href="learn/learn.php?id=1&lang=java_lang">
                        <button type="button" class="btn btn-primary btn-rounded" style="background-color:#03338F;">Start Learning Java &nbsp;&nbsp;
                            <i class="fas fa-arrow-right"></i>
                        </button>  &emsp; 
                        <a href="comp.php?lang=java_lang" class="btn btn-primary btn-rounded" style="background-color:#03338F;">Online Java Complier</button>
                    </a>
                    <?php }  
                    else{ ?>
                    <a href="learn/learn.php?id=1&lang=python_lang">
                        <button type="button" class="btn btn-primary btn-rounded" style="background-color:#03338F;">Start Learning Python &nbsp;&nbsp;
                            <i class="fas fa-arrow-right"></i>
                        </button>   &emsp;
                        <a href="comp.php?lang=python_lang" class="btn btn-primary btn-rounded" style="background-color:#03338F;">Online python Complier</button>
                    </a>
                    <?php } ?>
                </div>
                
            </div>
        </div>


        <br><Br>
        
        <center>
        <div class="card" style="max-width:500px">
            <div class="card-header text-center" style="background-color:#CCCCCC;">
                <h3 style="padding-top:5px;">List of Topics</h3>
            </div>
            <div class="card-body text-left">
                <ul style="list-style: none;">
                <?php
                    $qry = mysqli_query($connect,"select * from " . $lang . "");
                    while($n = mysqli_fetch_array($qry)){
                ?>
                <li style="padding-top:5px">
                    <i class="fas fa-check"></i> &emsp;
                    <a style="text-decoration:none;font-size:17px" href="learn/learn.php?id=<?php echo $n[0]; ?>&lang=<?php echo $lang; ?>" ><?php echo $n[1]; ?></a><br>
                </li>
                <?php } ?>
                    </ul>
            </div>
        </div>
        </center>


        <br><br>


        <center>
        <div class="card" style="max-width:500px">
            <div class="card-header text-center" style="background-color:#CCCCCC;">
                <h3 style="padding-top:5px;">Reference Book</h3>
            </div>
            <div class="card-body text-left">
                <ul style="list-style: none;">
                    <?php
                        $book = mysqli_query($connect,"SELECT * FROM prog_lang WHERE tablename='" . $lang ."'");
                        while($nbook = mysqli_fetch_array($book)){
                    ?>
                    <li style="padding-top:5px">
                        <i class="fas fa-check"></i> &emsp;
                        <a style="text-decoration:none;font-size:17px" href="books/<?php echo $nbook[3]; ?>" > <?php echo $nbook[3]; ?> </a><br>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        </center>

    </div>
</body>


<script>
function search(){
    
    a = document.getElementById('exampleDataList').value;
    b = '<?php echo "$lang"; ?>';
    window.location.href="modal.php?lang="+b+"&val="+a;
}
</script>

<!-- Footer -->
<footer class="page-footer pt-0 mt-5">

  <!-- Copyright -->
  <div class="footer-copyright py-3 text-center">
    <div class="container-fluid" style="color:black">
        Anguarj and Mohanraj
    </div>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>
