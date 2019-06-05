<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
  <div class="imgpadding">
  <?php
      echo '<img class="img-fluid" src="' . $data['info'][1]['ImageURL'] . '">';
    ?>
  </div>
  </div>
  <div class="welcometo">
  <?php
 
       echo $data['info'][0]['Title'];
       ?>
  </div>
  <div class="centre">
    <div class="shop">
    <?php
      echo '<img src="'.$data['info'][0]['ImageURL'].'"class="shop">';
    ?>
    </div>
    <div class="containerright">
      <?php
      echo $data['info'][0]['Inform'];
      ?>
      
    </div>
  
</div>
<?php include(APPROOT . "/views/includes/footer.php"); ?>