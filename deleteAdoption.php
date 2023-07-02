<?php
$conn=mysqli_connect('localhost','root','','stray');
     $id=$_GET['d'];
      $delete="DELETE FROM adoption WHERE a_id='$id'";
       mysqli_query($conn,$delete);
       header('Location:index.php');
;
?>