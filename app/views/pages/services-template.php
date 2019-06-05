<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="services">
      <?php
      foreach ($data['info'] as $info)
      {
        echo $info['Title'];
      }
          ?>
      </div>
      <div class="servicestitle">
      <?php
      echo $data['info'][0]['Heading'];
          ?>
      
      </div>
    <div class="centre">
        <div class="servicesimg">
              <?php
              echo '<img src="'.$data['info'][0]['ImageURL'].'" class="shop">';
                  ?>
            </div>
        <div class="containerrightservices">
        <?php
      echo $data['info'][0]['Text'];
          ?>
        </div>
    </div>
    <HR SIZE="10" COLOR="red">
    <div class="servicestitleright">
          
    <?php
      echo $data['info'][1]['Heading'];
          ?>
    </div>
  <div class="centre">
      
      <div class="containerleftservices">
      <?php
      echo $data['info'][1]['Text'];
          ?>
      </div>
      <div class="servicesimg">
              <?php
              echo '<img src="'.$data['info'][1]['ImageURL'].'" class="shop">';
                  ?>
                  </div>
  </div>


<?php include(APPROOT . "/views/includes/footer.php"); ?>