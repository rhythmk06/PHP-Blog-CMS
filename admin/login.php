<?php
include "includes/header.php";
if(!isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/main.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Filmyhu-Watch Latest Hindi movies,latest hollywood movies,latest south movies download,movis download,new movie download</title>
</head>

<body style="">
    <div class="row" style="margin-top:100px">
        <div class="col l6 offset-l3 m8 offset-m2 s12">
            <div class="card-panel center pink darken-2" style="margin-bottom:0px">
                <ul class="tabs pink darken-2">
                    <li class="tab">
                        <a href="#login" class="white-text">Login</a>
                    </li>
                    <li class="tab">
                        <a href="#signup" class="white-text">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col l6 offset-l3 m8 offset-m2 s12" id="login">
            <div class="card-panel center grey lighten-4" style="margin-top:1px">
                <h5>Login Here</h5>
                <?php
                if(isset($_SESSION['message']))
                {
                  echo $_SESSION['message'];
                  unset($_SESSION['message']);
                }
                ?>
                <form action="login_check.php" method="POST">
                    <div class="input-field">
                        <input type="text" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Password text-white">
                    </div>
                    <input type="submit" name="login" value="Login" class="btn green">
                </form>
            </div>
        </div>
        <div class="col l6 offset-l3 m8 offset-m2 s12" id="signup">
            <div class="card-panel center grey lighten-4" style="margin-top:1px">
                <h5>SignUp Now!</h5>
                <form action="signup.php" method="POST" >
                    <div class="input-field">
                        <input type="email" name="email" id="email" placeholder="Enter Email" class="validate" class="white-text">
                        <label for="email" data-error="Invalid Email Format" data-success="Valid Email"></label>
                    </div>
                    <div class="input-field">
                        <input type="text" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <input type="submit" name="signup" class="btn green" value="Sign Up">
                </form>
            </div>
        </div>
        <!--Sign up and LOGIN area-->
    </div>
    <?php
    include "includes/footer.php";
    }
    else
    {
       header("Location: dashboard.php");
    }
    ?>