<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
  <div class="imgpadding">
  <?php
      foreach ($data['info'] as $info)
      {
        echo '<img class="img-fluid" src="' . $info['ImageURL'] . '">';
      }
      ?>
  </div>
  <div class="welcometo">
  <?php
      foreach ($data['info'] as $info)
      {
        echo $info['Title'];
      }
      ?>
  </div>
  <div class="centre">
    <div class="shop">
      <img src="Images/shop.jpg" alt="..." class="shop">
    </div>
    <div class="containerright">
      <?php
      foreach ($data['info'] as $info)
      {
        echo $info['Info'];
      }
      ?>
      
    </div>
  </div>
</div>

<?php include(APPROOT . "/views/includes/footer.php"); ?>