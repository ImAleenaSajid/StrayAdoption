<?php 
 $conn=mysqli_connect('localhost','root','','stray');
    $id=$_GET['u'];
 if(isset($_POST['update']))
   { 
   $mail = $_POST['email'];
   $pass = $_POST['password']; 
   $animalid = $_POST['animalid']; 
   $animalname = $_POST['animalname']; 
   $contact = $_POST['contact'];
   $address= $_POST['address']; 
   $manage = $_POST['manage'];  

    $up="UPDATE adoption SET a_email='$mail',a_password='$pass',a_animalId='$animalid',a_animalName='$animalname',a_contact='$contact',a_address='$address',a_manage='$manage' 
      WHERE a_id='$id'";
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
       $select="SELECT * FROM adoption WHERE a_id = '$id'";
         $result=mysqli_query($conn,$select);
    foreach($result as $value)
{
?>
             <form method="post" action="#">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" value="<?php echo $value['a_email']; ?>" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" value="<?php echo $value['a_password']; ?>"name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Id of animal</label>
                  <input type="text" name="animalid" class="form-control" value="<?php echo $value['a_animalId']; ?>"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Of Animal">
                  <small id="emailHelp" class="form-text text-muted">Id is specific for every animal and it is mentioned on their post.</small>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Name of animal</label>
                  <input type="text" name="animalname" class="form-control" value="<?php echo $value['a_animalName']; ?>"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name Of Animal">
                  <small id="emailHelp" class="form-text text-muted">Name is specific for every animal and it is mentioned on their post.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contact Number</label>
                    <input type="phone" name="contact" class="form-control"value="<?php echo $value['a_contact']; ?>" id="exampleInputPassword1" placeholder="Contact Number">
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="address"value="<?php echo $value['a_address']; ?>" name="address" class="form-control" id="exampleInputPassword1" placeholder="Address">
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">How will manage taking care of this animal both financialy and emotionaly?</label>
                    <textarea class="form-control"name="howwill"id="exampleFormControlTextarea1" rows="3" placeholder="<?php echo $value['a_manage']; ?>"></textarea>
                  </div>
                  <div class="form-check">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="checkbox"name="inspect" value="agree" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">We will meet you and then will decide to consider you for adoption or not.</label>
                    
                  <div class="form-check">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox"name="criteria" value="agree"  class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I Accept Adoption Criteria</label>
                    <a class="nav-link" href="/adoptionCriteria.html"><b>Adoption Criteria</b></a>
                  </div>
                <button type="submit" class="btn btn-primary btncontact" name="update">Update</button>
              </form>
<?php
} ?>
</body>
</html>