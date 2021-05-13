<?php
require_once "head-side.php";
require_once "../db/db_connect.php";
error_reporting(0);

$topicid=$_GET['id'];
$lang = $_GET['lang'];

$q = mysqli_query($connect,"select * from ". $lang ." where id='". $topicid ."'");

while($n =  mysqli_fetch_array($q)){

?>

<h1>  <?php echo $n['indextopic']; ?>  </h1>


<div class="row">
    <div class="col">
      <?php
        if($n[0]>1){
        $previousid = 0;
        $previousid = (int)$n[0]*1 - 1;
        $prev = mysqli_query($connect,"select * from ". $lang ." where id='". $previousid ."'");
        while($pt = mysqli_fetch_array($prev)){
      ?>
      <a type="button" data-mdb-toggle="tooltip" data-mdb-placement="right" 
      title="<?php echo $pt[1]; ?>" href="learn.php?id=<?php echo $pt[0]; ?>&lang=<?php echo $lang; ?>"
      class="btn btn-success"><i class="fas fa-caret-left"></i>&emsp;Pervious</a>
      <?php } } ?>
    </div>
    <div class="col">
      <?php

          $q_cnt_rows = mysqli_query($connect,"select * from ". $lang ."");
          $cnt_rows = mysqli_num_rows($q_cnt_rows);
          if($cid!=$cnt_rows){
          $nextid = 0;
          $nextid = (int)$n[0]*1 + 1;
          $nexttopic = mysqli_query($connect,"select * from ". $lang ." where id='". $nextid ."'");
          while($nxt = mysqli_fetch_array($nexttopic)){
        ?>
        <a type="button" data-mdb-toggle="tooltip" data-mdb-placement="left" style="float:right;"
        title="<?php echo $nxt[1]; ?>" href="learn.php?id=<?php echo $nxt[0]; ?>&lang=<?php echo $lang; ?>" 
        class="btn btn-success">Next &emsp;<i class="fas fa-caret-right"></i></a>
        <?php } } ?>
    </div>
</div>


<br><br>


<div class="row lead">
    <div class="col">
    </div>
    <div class="col-11">
      <p>  <?php echo $n['content']; ?>  </p>
    


    <?php if($n['syntax']) { ?>
      <div class="alert border border-dark rounded" style="background-color:#F1F1F1;" role="alert">
        <h4 class="alert-heading">Syntax</h4>
        <hr>
        <div id="copysyn1"> <?php echo $n['syntax']; ?> </div>
      </div>
    <?php } ?>


    <?php if($n['syntaxdef']) { ?>
      <div> <?php echo $n['syntaxdef']; ?> </div>
    <?php } ?>


    <br>
    


    <?php if($n['syntax2']) { ?>
      <div class="alert border border-dark rounded" style="background-color:#F1F1F1;" role="alert">
        <h4 class="alert-heading">Syntax</h4>
        <hr>
        <div id="copysyn2"> <?php echo $n['syntax2']; ?> </div>
      </div>
    <?php } ?>


    <?php if($n['syntaxdef2']) { ?>
      <div> <?php echo $n['syntaxdef2']; ?> </div>
    <?php } ?>


    <br>
    


    <?php if($n['example']) { ?>
      <div class="alert border border-dark rounded" style="background-color:#F1F1F1;" role="alert">
      
        <div class="row">
          <div class="col">
            <h4 class="alert-heading">Example</h4>
          </div>
          <div class="col">
            <a class="btn" id="copyexample1" style="float:right;background-color:#616161;color:white;"
            data-mdb-toggle="tooltip" data-mdb-placement="top" title="Copy to Clipboard">
            <i class="far fa-clipboard"></i>  &nbsp;Copy</a>
          </div>
      </div>
        <hr>
        <div id="copyeg1"> <?php echo $n['example']; ?> </div>
      </div>
    <?php } ?>


    <?php if($n['exampledef']) { ?>
      <div> <?php echo $n['exampledef']; ?> </div>
    <?php } ?>


    <br>


    <?php if($n['example2']) { ?>
      <div class="alert border border-dark rounded" style="background-color:#F1F1F1;" role="alert">
      
        <div class="row">
          <div class="col">
            <h4 class="alert-heading">Example</h4>
          </div>
          <div class="col">
            <a type="button" class="btn" id="copyexample2" style="float:right;background-color:#616161;color:white;"
            data-mdb-toggle="tooltip" data-mdb-placement="top" title="Copy to Clipboard">
            <i class="far fa-clipboard"></i>  &nbsp;Copy</a>
          </div>
      </div>
        <hr>
        <div id="copyeg2"> <?php echo $n['example2']; ?> </div>
      </div>
    <?php } ?>


    <?php if($n['exampledef2']) { ?>
      <div> <?php echo $n['exampledef2']; ?> </div>
    <?php } ?>


    <br>










</div>
    <div class="col">
    </div>
</div>
<!-- Close of div 11 and empty div aah -->


<br><br>


<div class="row">
    <div class="col">
      <?php
        if($n[0]>1){
        $previousid = 0;
        $previousid = (int)$n[0]*1 - 1;
        $prev = mysqli_query($connect,"select * from ". $lang ." where id='". $previousid ."'");
        while($pt = mysqli_fetch_array($prev)){
      ?>
      <a type="button" data-mdb-toggle="tooltip" data-mdb-placement="right" 
      title="<?php echo $pt[1]; ?>" href="learn.php?id=<?php echo $pt[0]; ?>&lang=<?php echo $lang; ?>"
      class="btn btn-success"><i class="fas fa-caret-left"></i>&emsp;Pervious</a>
      <?php } } ?>
    </div>
    <div class="col">
      <?php

          $q_cnt_rows = mysqli_query($connect,"select * from ". $lang ."");
          $cnt_rows = mysqli_num_rows($q_cnt_rows);
          if($cid!=$cnt_rows){
          $nextid = 0;
          $nextid = (int)$n[0]*1 + 1;
          $nexttopic = mysqli_query($connect,"select * from ". $lang ." where id='". $nextid ."'");
          while($nxt = mysqli_fetch_array($nexttopic)){
        ?>
        <a type="button" data-mdb-toggle="tooltip" data-mdb-placement="left" style="float:right;"
        title="<?php echo $nxt[1]; ?>" href="learn.php?id=<?php echo $nxt[0]; ?>&lang=<?php echo $lang; ?>"
        class="btn btn-success">Next &emsp;<i class="fas fa-caret-right"></i></a>
        <?php } } ?>
    </div>
</div>




<?php
} //while end

require_once "bottom-end.php";
?>
