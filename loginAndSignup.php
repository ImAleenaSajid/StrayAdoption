<!DOCTYPE html>
<html lang="en">
<?php
$conn=mysqli_connect('localhost','root','','stray');
if(isset($_POST['login'])){
    $email = $_POST['em'];
    $password = $_POST['pass'];
    $sql = "SELECT * FROM accounts WHERE u_email='$email' AND u_password='$password'";
    $res=mysqli_query($conn,$sql);

    if ($res->num_rows == 1) {
        // Login successful
        echo '<script> alert("Successfuly Logged In");</script>';
        echo '<form method="post" action="welcome.html">
        <input style="width:100%; background-color:green; color:white;" type="submit" value="Leave This Page"/></form>';
    } else {
        // Login failed
        echo '<script> alert("Invalid Credentials");</script>';
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="/img/notCroped.png">
</head>
<body>
  <?php
$conn=mysqli_connect('localhost','root','','stray');
   if(isset($_POST['signup']))
   { 
   $name= $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
    $insert="INSERT INTO accounts(u_name,u_email,u_password) VALUES ('$name','$email','$password')";
     $query=mysqli_query($conn,$insert);
     if($query)
     {
      echo '<script> alert("Successfuly Signed up");</script>';
      echo '<form method="post" action="welcome.html">
      <input style="width:100%; background-color:green; color:white;" type="submit" value="Leave This Page"/></form>';
     }
  }
?>
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
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item ">
                        <a class="nav-link" href="/index.php"><b>Home</b> <span class="sr-only">(current)</span></a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link active" href="/loginAndSignup.php"><b>Login/Signup</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/adoptionCriteria.html"><b>Adoption Criteria</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/adoptNow.php"><b>Adopt Now</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/aboutUs.html"><b>About Us</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contactUs.html"><b>Contact Us</b></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="/adminLogin.php"><b>Admin Panel</b></a>                        </li>
    
                  
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
              <div class="col-md-6 login clr">
                <img class="logo " src="img/notCroped.png" alt="">
                <h4 class="tocenter"><b>Stray Adoption</b></h4>
                <form method="post" action="#">
                    <div class="form-group">
                      <label for="exampleInputEmail1"><b>Email address</b></label>
                      <input type="email" name="em" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1"><b>Password</b></label>
                      <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1"><b>Keep me logged in</b></label>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block buttt" name="login" ><b>Login</b></button>
                  </form>
              </div>
              
              <div class="col-md-6 signup clr">
                <img class="logo" src="img/notCroped.png" alt="">
                <h4 class="tocenter"><b>Stray Adoption</b></h4>
                <form method="post" action="#">
                    <div class="form-group">
                        <label for="exampleInputEmail1"><b>Name</b></label>
                        <input type="text" class="form-control" id="exampleInputEmail1"name="name" aria-describedby="emailHelp" placeholder="Enter your name">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1"><b>Email address</b></label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputPassword1"><b>Password</b>
                      </label>
                      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block butt " name="signup"><b>SignUp</b></button>
                  </form>
              </div>
            </div>
          </div>

    </div>
</body>
</html>