<?php
$conn=mysqli_connect('localhost','root','','stray');
     $id=$_GET['d'];
      $delete="DELETE FROM accounts WHERE u_id='$id'";
       mysqli_query($conn,$delete);
       header('Location:index.php');
;
?>