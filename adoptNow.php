<!DOCTYPE html>
<html lang="en">
<?php
$conn=mysqli_connect('localhost','root','','stray');
   if(isset($_POST['submit']))
   { 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $animalId = $_POST['animalid'];
    $animalName = $_POST['animalname'];
    $contactNumber = $_POST['contact'];
    $address = $_POST['address'];
    $howwill = $_POST['howwill'];
    // Create SQL query to insert data into the "adoption-requests" table
    $sql = "INSERT INTO adoption(a_email,a_password,a_animalId,a_animalName,a_contact,a_address,a_manage) VALUES ('$email', '$password', '$animalId', '$animalName', '$contactNumber', '$address', '$howwill')";
    $qu=mysqli_query($conn,$sql);
  }
  ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Now</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="/img/notCroped.png">
</head>

<body>
    <div class="body">
        <nav class="navbar navbar-expand-lg navbar-dark coloring ">
            <a class="navbar-brand" href="/index.php">
                <img src="img/notCroped.png" alt="Logo" style="width:70px;">
            </a>
            <a class="navbar-brand" href="/index.php">Stray Adoption</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="/index.php"><b>Home</b> <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/loginAndSignup.php"><b>Login/Signup</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/adoptionCriteria.html"><b>Adoption Criteria</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/adoptNow.php"><b>Adopt Now</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutUs.html"><b>About Us</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/contactUs.html"><b>Contact Us</b></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/adminLogin.html"><b>Admin Panel</b></a>                    </li>

                </ul>
            </div>
        </nav>
        <div class="container adopt mt-4">
            <img class="logocontact" src="img/notCroped.png" alt="">
            <h4 class="tocentercontact"><b>Stray Adoption</b></h4>
            <form method="post" action="#">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Id of animal</label>
                  <input type="text" name="animalid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Of Animal">
                  <small id="emailHelp" class="form-text text-muted">Id is specific for every animal and it is mentioned on their post.</small>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Name of animal</label>
                  <input type="text" name="animalname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name Of Animal">
                  <small id="emailHelp" class="form-text text-muted">Name is specific for every animal and it is mentioned on their post.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contact Number</label>
                    <input type="phone" name="contact" class="form-control" id="exampleInputPassword1" placeholder="Contact Number">
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="address" name="address" class="form-control" id="exampleInputPassword1" placeholder="Address">
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">How will manage taking care of this animal both financialy and emotionaly?</label>
                    <textarea class="form-control" name="howwill"id="exampleFormControlTextarea1" rows="3" placeholder="I have a job and I also come home early..."></textarea>
                  </div>
                  <div class="form-check">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="checkbox"name="inspect" value="agree" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">We will meet you and then will decide to consider you for adoption or not.</label>
                    
                  <div class="form-check">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox"name="criteria" value="agree"  class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I Accept Adoption Criteria</label>
                    <a class="nav-link" href="/adoptionCriteria.html"><b>Adoption Criteria</b></a>
                  </div>
                <button type="submit" class="btn btn-primary btncontact" name="submit">Submit</button>
              </form>



        </div>




    </div>
</body>

</html>