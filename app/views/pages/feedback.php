<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="welcometo">
      Feedback Form
    </div>
    <div class="container1">
      <form action="/action_page.php">
        <label for="fname">Name</label>
        <input type="text" id="name" name="names" placeholder="Full name">

        <label for="ph">PhoneNumber</label>
        <input type="text" id="ph" name="phone" placeholder="02712345678">

        <label for="email">Email</label>
        <input type="text" id="email" name="emails" placeholder="abc@gmail.com">
    
        <label for="subject">Place Feedback</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    
    
        <input type="submit" value="Submit">
      </form>
    </div>


<?php include(APPROOT . "/views/includes/footer.php"); ?>