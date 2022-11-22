
<?php include_once('header.php');?>

<center>
  
<h1>Add user</h1>


</center>





<form action ="save.php" method="post">
  <div class="container">



    <label>First name:</label>


    <input type="text" placeholder="enter first name" name = "first_name" required>
  </br>

<label>last name:</label>


    <input type="text" placeholder="enter last name" name = "last_name" required>


</br>
    <label>Email:</label>


    <input type="text" placeholder="enter email" name = "email" required>

</br>

    <label>phone:</label>


    <input type="text" placeholder="enter phone number" name = "phone" required>

  </div>
  


  <button type="submit"  name="submit  value="submit">save</button>
</form>