<!DOCTYPE html>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Advance PHP CRUD</title>
</head>
<body>

<div class="topnav">
	

<a class="active" href="index.php">Home</a>

<span  style="float:right">
	





<a href="add.php">Add User</a>




</span>






</div>

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









</body>
</html>