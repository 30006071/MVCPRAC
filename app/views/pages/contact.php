<?php include(APPROOT . "/views/includes/header.php"); ?>


<div class="welcometo">
      Contact Form
    </div>
    <div class="container1">
      <form action="/Pages/contactsubmition">
        <label for="fname">Name</label>
        <input type="text" id="name" name="names" placeholder="Full name">

        <label for="ph">PhoneNumber</label>
        <input type="text" id="ph" name="phone" placeholder="02712345678">

        <label for="email">Email</label>
        <input type="text" id="email" name="emails" placeholder="abc@gmail.com">
    
  
        <label for="subject">Subject/Reason</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    
        <input type="submit" value="Submit">
      </form>
    </div> 

<?php include(APPROOT . "/views/includes/footer.php"); ?>