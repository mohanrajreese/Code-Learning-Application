<?php

require_once "db/db_connect.php";
$lang = $_GET['lang'];

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
    .bg {
      background-color: ;
    }
  </style>
</head>

<body>
<script type="text/javascript">
    $(document).ready(function(){
        $('#staticBackdrop').modal('show');
    });
</script>

    <!-- Button trigger modal -->
<button style="display:none;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal-dialog modal-dialog-centered p-3" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Online Complier</h5>
        <a class="btn-close" href="home.php?lang=<?php echo $lang; ?>" aria-label="Close"></a>
      </div>


      <!-- Form to redirect the page to C online compiler -->
      <?php if($lang == 'c_lang') { ?>
      <form method="post" target="_blank" action= "https://www.jdoodle.com/api/redirect-to-post/c-online-compiler">
      <?php }  
        elseif($lang == 'cpp_lang') { ?>
          <form method="post" target="_blank" action= "https://www.jdoodle.com/api/redirect-to-post/online-compiler-c++14/">
      <?php }  
        elseif($lang == 'java_lang') { ?>
          <form method="post" target="_blank" action= "https://www.jdoodle.com/api/redirect-to-post/online-java-compiler/">
        <?php }  
        else{ ?>
            <form method="post" target="_blank" action= "https://www.jdoodle.com/api/redirect-to-post/python3-programming-online/">
        <?php } ?>
      <div class="modal-body" style="width:480px;">
      
        <textarea name="initScript" rows="8" style="width:100%" placeholder="Write Your Code Here ..."></textarea> 
            
      </div>
      <div class="modal-footer">
      <a href="home.php?lang=<?php echo $lang; ?>"><button type="button" class="btn btn-danger">Close</button></a>
        <input type="submit" class="btn btn-primary" value="Run">
      </div>

      </form> 

    </div>
  </div>
</div>








</body>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>
