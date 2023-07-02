<!DOCTYPE html>
<html lang="en">
<?php
$conn=mysqli_connect('localhost','root','','stray');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="/img/notCroped.png">
    <title>Stray Adoption</title>
</head>

<body>
    <div class="body indexmain">
        <nav class="navbar navbar-expand-lg navbar-dark coloring  ">
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
                    <li class="nav-item active">
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
                        <a class="nav-link" href="/aboutUs.html"><b>About Us</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contactUs.html"><b>Contact Us</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/adminLogin.html"><b>Admin Panel</b></a>
                    </li>



                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                        id="searchInput">
                    <button class="btn btn-outline-light my-2 my-sm-0" onclick="scrollToSection()"
                        type="submit"><b>Search</b></button>
                </form>
            </div>
        </nav>

        <div class="container mt-4 ">
            <div class="jumbotron">
                <h3 class="display-5 mb-5"><b>Adopt Animals in Need Instead of Imported Breeds!</b></h3>
                <p class="display-6 mb-2"><b>"Until one has loved an animal, a part of one's soul remains unawakened."
                        <i>- Anatole France</i></b></p>
                <p class="display-6 mb-3"><b>"Saving one dog will not change the world, but surely for that one dog, the
                        world will change forever." <i>- Karen Davison</i></b></p>
                <p class="display-5 ">
                    <a class="btn btn-light btn-lg " href="/adoptNow.php" role="button"><b>Adopt Now</b></a>
                </p>
            </div>
        </div>


        <nav class="navbar navbar-expand-lg navbar-dark coloring  " id="ThisIsACat">
            <a class="navbar-brand" href="/index.html">
                <img src="img/notCroped.png" alt="Logo" style="width:70px;">
            </a>
            <a class="navbar-brand" href="/index.html">Cats</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class="container">
            <hr class="hrnew">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/cat1.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: Aurora</label>
                    <label class="clrsind" for="Id">Id: #123</label>
                    <label class="clrsind" for="Id">Age: 2 Months</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/cat2.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: Ayra</label>
                    <label class="clrsind" for="Id">Id: #124</label>
                    <label class="clrsind" for="Id">Age: 1 year</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/cat3.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: Crazy</label>
                    <label class="clrsind" for="Id">Id: #125</label>
                    <label class="clrsind" for="Id">Age: 8 Months</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
            </div>
            <hr class="hrnew">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/cat4.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: Martin</label>
                    <label class="clrsind" for="Id">Id: #126</label>
                    <label class="clrsind" for="Id">Age: 1 year</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/cat5.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: andrew</label>
                    <label class="clrsind" for="Id">Id: #127</label>
                    <label class="clrsind" for="Id">Age: 4 months</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/cat6.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: Austin</label>
                    <label class="clrsind" for="Id">Id: #128</label>
                    <label class="clrsind" for="Id">Age: 2 years</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
            </div>
            <hr class="hrnew">
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark coloring  " id="ThisIsADog">
            <a class="navbar-brand" href="/index.html">
                <img src="img/notCroped.png" alt="Logo" style="width:70px;">
            </a>
            <a class="navbar-brand" href="/index.html">Dogs</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class="container">
            <hr class="hrnew">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/dog1.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: whitney</label>
                    <label class="clrsind" for="Id">Id: #131</label>
                    <label class="clrsind" for="Id">Age: 2 years</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/dog2.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: Romeo</label>
                    <label class="clrsind" for="Id">Id: #132</label>
                    <label class="clrsind" for="Id">Age: 1.5 year</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/dog3.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: wincy</label>
                    <label class="clrsind" for="Id">Id: #133</label>
                    <label class="clrsind" for="Id">Age: 2 years</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
            </div>
            <hr class="hrnew">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/dog4.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: grizzy</label>
                    <label class="clrsind" for="Id">Id: #134</label>
                    <label class="clrsind" for="Id">Age: 4 years</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/dog5.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: icy,nicy and wisy</label>
                    <label class="clrsind" for="Id">Id: #135</label>
                    <label class="clrsind" for="Id">Age: 4 months</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/dog6.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: Robert</label>
                    <label class="clrsind" for="Id">Id: #136</label>
                    <label class="clrsind" for="Id">Age: 6 months</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
            </div>
            <hr class="hrnew">
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark coloring mt-4  " id="ThisIsARabbit">
            <a class="navbar-brand" href="/index.html">
                <img src="img/notCroped.png" alt="Logo" style="width:70px;">
            </a>
            <a class="navbar-brand" href="/index.html">Rabbits</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class="container">
            <hr class="hrnew">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/rabbit1.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: cuppy rabie</label>
                    <label class="clrsind" for="Id">Id: #137</label>
                    <label class="clrsind" for="Id">Age: 2 years</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/rabbit2.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: jake rabie</label>
                    <label class="clrsind" for="Id">Id: #138</label>
                    <label class="clrsind" for="Id">Age: 1 year</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/rabbit3.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: winky rabie</label>
                    <label class="clrsind" for="Id">Id: #139</label>
                    <label class="clrsind" for="Id">Age: 1 year</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
            <hr class="hrnew">
        </div>
        <hr class="hrnew">
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark coloring mt-4  " id="ThisIsABird">
            <a class="navbar-brand" href="/index.html">
                <img src="img/notCroped.png" alt="Logo" style="width:70px;">
            </a>
            <a class="navbar-brand" href="/index.html">Birds</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class="container">
            <hr class="hrnew">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/bird1.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: bik bik birdy</label>
                    <label class="clrsind" for="Id">Id: #140</label>
                    <label class="clrsind" for="Id">Age: 6 months</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/bird2.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: jakie birdy</label>
                    <label class="clrsind" for="Id">Id: #141</label>
                    <label class="clrsind" for="Id">Age: 1 year</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/bird3.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: wisey birdy</label>
                    <label class="clrsind" for="Id">Id: #142</label>
                    <label class="clrsind" for="Id">Age: 8 months</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
                <hr class="hrnew">
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="container-fluid"><img src="img/bird4.jpg" alt="" class="animal"></div>
                        <label class="clrsind" for="name">Name: hobby birdy</label>
                        <label class="clrsind" for="Id">Id: #143</label>
                        <label class="clrsind" for="Id">Age: 2 years</label>
                        <label class="clrsind" for="Id">Health: 100% healthy</label>
                        <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                        <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>
    
                    </div>
                    <div class="col-md-4">
                        <div class="container-fluid"><img src="img/bird5.jpg" alt="" class="animal"></div>
                        <label class="clrsind" for="name">Name: humpy birdy</label>
                        <label class="clrsind" for="Id">Id: #144</label>
                        <label class="clrsind" for="Id">Age: 1 year</label>
                        <label class="clrsind" for="Id">Health: 100% healthy</label>
                        <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                        <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>
    
                    </div>
                    <div class="col-md-4">
                        <div class="container-fluid"><img src="img/bird6.jpg" alt="" class="animal"></div>
                        <label class="clrsind" for="name">Name: inno birdy</label>
                        <label class="clrsind" for="Id">Id: #145</label>
                        <label class="clrsind" for="Id">Age: 1 year</label>
                        <label class="clrsind" for="Id">Health: 100% healthy</label>
                        <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                        <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>
    
                    </div>
                    <hr class="hrnew">
                    <div class="row mt-4">
                        <hr class="hrnew">
                        <div class="col-md-4">
                            <div class="container-fluid"><img src="img/bird7.jpg" alt="" class="animal"></div>
                            <label class="clrsind" for="name">Name: haib birdy</label>
                            <label class="clrsind" for="Id">Id: #146</label>
                            <label class="clrsind" for="Id">Age: 9 months</label>
                            <label class="clrsind" for="Id">Health: 100% healthy</label>
                            <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                            <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>
        
                        </div>
                        <div class="col-md-4">
                            <div class="container-fluid"><img src="img/bird8.jpg" alt="" class="animal"></div>
                            <label class="clrsind" for="name">Name: kimp birdy</label>
                            <label class="clrsind" for="Id">Id: #147</label>
                            <label class="clrsind" for="Id">Age: 1 year</label>
                            <label class="clrsind" for="Id">Health: 100% healthy</label>
                            <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                            <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>
        
                        </div>
                        <div class="col-md-4">
                            <div class="container-fluid"><img src="img/bird9.jpg" alt="" class="animal"></div>
                            <label class="clrsind" for="name">Name: nano birdy</label>
                            <label class="clrsind" for="Id">Id: #148</label>
                            <label class="clrsind" for="Id">Age: 1 year</label>
                            <label class="clrsind" for="Id">Health: 100% healthy</label>
                            <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                            <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>
        
                        </div>
            <hr class="hrnew">
        </div>
</div>
</div>
<hr class="hrnew">
</div>
        <nav class="navbar navbar-expand-lg navbar-dark coloring mt-4  " id="ThisIsASquirrel">
            <a class="navbar-brand" href="/index.html">
                <img src="img/notCroped.png" alt="Logo" style="width:70px;">
            </a>
            <a class="navbar-brand" href="/index.html">Squirrels</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class="container">
            <hr class="hrnew">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/squirrel1.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: nip squirrely</label>
                    <label class="clrsind" for="Id">Id: #149</label>
                    <label class="clrsind" for="Id">Age: 6 months</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/squirrel2.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: haiz suirrely</label>
                    <label class="clrsind" for="Id">Id: #150</label>
                    <label class="clrsind" for="Id">Age: 1 year</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
                <div class="col-md-4">
                    <div class="container-fluid"><img src="img/squirrel3.jpg" alt="" class="animal"></div>
                    <label class="clrsind" for="name">Name: loppy squirrely</label>
                    <label class="clrsind" for="Id">Id: #151</label>
                    <label class="clrsind" for="Id">Age: 8 months</label>
                    <label class="clrsind" for="Id">Health: 100% healthy</label>
                    <label class="clrsind" for="Id">Found alone inside a car, terrified and hungry.</label>
                    <a class="btn btn-success btn-lg btnindex " href="/adoptNow.html" role="button"><b>Adopt Now</b></a>

                </div>
    
            <hr class="hrnew">
        </div>
        </div>
        </div>
        <div style="color: white; background-color: rgb(190, 177, 177); text-align: center; height: 25px; ">
            <p><b><i>(C)THIS SITE BELONGS TO ALEENA SAJID</i></b></p>
        </div>
</body>
<script>
    function scrollToSection() {
        var searchInput = document.getElementById("searchInput").value.toLowerCase();
        if (searchInput === "cat") {
            window.location.href = "#ThisIsACat";
        } else if (searchInput === "dog") {
            window.location.href = "#ThisIsADog";
        }
        else if (searchInput === "rabbit") {
            window.location.href = "#ThisIsARabbit";
        }
        else if (searchInput === "bird") {
            window.location.href = "#ThisIsABird";
        }
        else if (searchInput === "squirrel") {
            window.location.href = "#ThisIsASquirrel";
        }
    }
</script>

</html>