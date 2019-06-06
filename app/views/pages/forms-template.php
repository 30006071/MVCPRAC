<?php include(APPROOT . "/views/includes/header.php"); ?>
<div class="welcometo">
<?php
(array_key_exists("formsubmitted", $_GET)) ? $_GET['formsubmitted'] : $_GET['formsubmitted'] = NULL
?>
<?php echo ($_GET['formsubmitted'] !== NULL) ? "<h1>Form Submitted</h1>" : "<h1>" . $data['info'][0]['Heading'] . "</h1>" ?>
    </div>
    <div class="container1">
      <form name="myForm" action="<?php echo $data['info'][0]['FormAction'];?>" onsubmit="return validateForm()" method="POST">
        <label for="fname">Name</label>
        <input type="text" id="name" name="name" placeholder="Full name">

        <label for="ph">PhoneNumber</label>
        <input type="text" id="ph" name="phone" placeholder="02712345678">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="abc@gmail.com">

        <label for="subject"><?php echo $data['info'][0]['Title'];?></label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    
    
        <input type="submit" value="Submit">
      </form>
    </div>
    <?php include(APPROOT . "/views/includes/footer.php"); ?>




    <!-- <?php echo $data['info'][0]['FormAction'];?> -->