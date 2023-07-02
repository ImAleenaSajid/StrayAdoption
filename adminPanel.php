<!DOCTYPE html>
<html lang="en">
<?php $conn=mysqli_connect('localhost','root','','stray'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="/img/notCroped.png">
</head>

<body>

    <div class="body">
        <nav class="navbar navbar-expand-lg navbar-dark  coloring ">
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
                        <a class="nav-link" href="/loginAndSignup.php"><b>Login/Signup</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/adoptionCriteria.html"><b>Adoption Criteria</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/adoptNow.php"><b>Adopt Now</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutUs.php"><b>About Us</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contactUs.html"><b>Contact Us</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/adminLogin.html"><b>Admin Panel</b></a>
                    </li>

                </ul>
                <a class="btn btn-success btn-lg btnaaboutus clrs "  role="button" id="out" href="/adminLogin.html"><b>Admin Log Out</b></a>

            </div>
        </nav>

        <div class="container mt-4">
           <table style="border: 3px solid black;" class="table">
           <caption style="font-size: 45px; color: black; text-align='center';">Adoption Requests</caption>
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">ID of animal</th>
          <th scope="col">Name of animal</th>
          <th scope="col">Contact Information</th>
          <th scope="col">Adress</th>
          <th scope="col">How Will He/She Manage</th>
          <th scope="col">Update</th>
          <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
          <?php
                   $select="SELECT * FROM adoption"; 
                  $queryz=mysqli_query($conn,$select);
                 foreach($queryz as $result)
               {
                  
          ?>
            <tr>
            <td><?php echo $result['a_id']; ?></td>
            <td><?php echo $result['a_email']; ?></td>
            <td><?php echo $result['a_password']; ?></td>
            <td><?php echo $result['a_animalId']; ?></td>
            <td><?php echo $result['a_animalName']; ?></td>
            <td><?php echo $result['a_contact']; ?></td>
            <td><?php echo $result['a_address']; ?></td>
            <td><?php echo $result['a_manage']; ?></td>
          <td><a href="updateAdoption.php?u=<?php echo $result['a_id']; ?>" class="btn btn-success">Update</a></td>
          <td><a href="deleteAdoption.php?d=<?php echo $result['a_id']; ?>" class="btn btn-danger">Delete</a> </td>
            </tr>
          <?php
            
                }
          ?>
        </div>
        <div class="container mt-4">
           <table style="border: 3px solid black;"class="table">
           <caption style="font-size: 45px; color: black; text-align='center';">User Accounts</caption>
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
          <th scope="col">Update</th>
          <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
          <?php
                   $select="SELECT * FROM accounts"; 
                  $queryz=mysqli_query($conn,$select);
                 foreach($queryz as $result)
               {
                  
          ?>
            <tr>
            <td><?php echo $result['u_id']; ?></td>
            <td><?php echo $result['u_name']; ?></td>
            <td><?php echo $result['u_email']; ?></td>
            <td><?php echo $result['u_password']; ?></td>
          <td><a href="updateAccounts.php?u=<?php echo $result['u_id']; ?>" class="btn btn-success">Update</a></td>
          <td><a href="deleteAccounts.php?d=<?php echo $result['u_id']; ?>" class="btn btn-danger">Delete</a> </td>
            </tr>
          <?php
            
                }
          ?>
          <hr>
        </div>
</body>

</html>