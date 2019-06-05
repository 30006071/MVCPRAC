<?php include(APPROOT . "/views/includes/header.php"); ?>

div class="welcometo">
      Booking Form
    </div>
    <div class="container1">
      <form action="/action_page.php">
        <label for="fname">Name</label>
        <input type="text" id="name" name="names" placeholder="Full name">
    
        <label for="rego">CarRego</label>
        <input type="text" id="rego" name="regos" placeholder="abc123">

        <label for="ph">PhoneNumber</label>
        <input type="text" id="ph" name="phone" placeholder="02712345678">

        <label for="email">Email</label>
        <input type="text" id="email" name="emails" placeholder="abc@gmail.com">
    
        <label for="type">Bookin</label>
        <select id="type" name="type">
          <option value="Modifications">Modifications</option>
          <option value="Repairs">Repairs</option>
          <option value="Servicing">Servicing</option>
          <option value="WarrantOfFitness">WarrantOfFitness</option>
        </select>
    
    
        <input type="submit" value="Submit">
      </form>
    </div>
     
<?php include(APPROOT . "/views/includes/footer.php"); ?>