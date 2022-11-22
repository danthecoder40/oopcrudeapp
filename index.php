
<?php include_once('header.php');?>

<?php
$sql = "select * from users";

$objDB->setQuery($sql);
$objDB->select();

?>




              
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sr No.</th>
        <th>first name</th>
        <th>last name</th>
        <th>email</th>
        <th>phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>sam</td>
        <td>doe</td>

         <td>same@gmail.com</td>
        <td>090875778884</td>
        <td><a href="edit.php">Edit</a> | <a href="#">Delete</a></td>

      </tr>
      <tr>
        <td>2</td>
        <td>david</td>
        <td>roover</td>

         <td>david@gmail.com</td>
        <td>0804567889</td>
        <td><a href="edit.php">Edit</a> | <a href="#">Delete</a></td>



      </tr>
      <tr>
       
       <td>3</td>
        <td>Alberto</td>
        <td>Greek</td>

         <td>alberto@gmail.com</td>
        <td>080345689</td>
        <td><a href="edit.php">Edit</a> | <a href="#">Delete</a></td>



      </tr>
    </tbody>
  </table>
</div>









</body>
</html>