<?php 
 $conn=mysqli_connect('localhost','root','','stray');
    $id=$_GET['u'];
 if(isset($_POST['update']))
   { 
   $name= $_POST['name'];
   $mail = $_POST['email'];
   $pass = $_POST['password']; 
    $up="UPDATE accounts SET u_name='$name',u_email='$mail',u_password='$pass' 
      WHERE u_id='$id'";
       $u=mysqli_query($conn,$up);
if($u)
{
  header("Location:index.php");
}
else
{
echo "Not Updated";
}
}


?>

<html>
<head>
	<title>UPDATE USER INFORMATION</title>
  <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

<?php  
       $select="SELECT * FROM accounts WHERE u_id = '$id'";
         $result=mysqli_query($conn,$select);
    foreach($result as $value)
{
?>
   <form method="post" action="#">
                    <div class="form-group">
                        <label for="exampleInputEmail1"><b>Name</b></label>
                        <input type="text" class="form-control"value="<?php echo $value['u_name'];?>" id="exampleInputEmail1"name="name" aria-describedby="emailHelp" placeholder="Enter your name">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1"><b>Email address</b></label>
                      <input type="email"value="<?php echo $value['u_email']; ?>" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputPassword1"><b>Password</b>
                      </label>
                      <input type="password" class="form-control"value="<?php echo $value['u_password']; ?>" name="password" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block butt " name="update"><b>update</b></button>
                  </form>
<?php
} ?>
</body>
</html>