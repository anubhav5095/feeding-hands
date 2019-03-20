<?php

session_start();
if(isset($_SESSION['mail']))
{
  header('location:profile.php');
  exit();
}
include 'header.php';
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  width: 30%;
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 80%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}


/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.jumbotron1 {
  padding-left: 60px;

}


/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}


/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>
<body style="background-color: grey;">

<br><br><br>
<div class="container" style="border: 1px solid black;">
    
        <h2 style="text-align:center">Login Customer</h2>
<br>
        <div class="hide-md-lg">
          <p>Customer login</p>
        </div>
  <div class="jumbotron1">

        <form method="post" action="login.php">
            <input type="text" name="mail2" placeholder="Email" required style="border: 1px solid grey;"><br><br>
            <input type="password" name="password2" placeholder="Password" required style="border: 1px solid grey;">
            <br><br><input type="submit" name="login" value="Login">  
        </form>
        
  </div>
</div>

</body>
</html>



<?php
$pDatabase = Database::getInstance(); // ye db.php wale class ka object

if (isset($_POST['login'])) 
 {
    $email=$_POST['mail2'];
    $pwd=$_POST['password2'];

    $quer="SELECT `email`, `pass` FROM `login` WHERE email='$email' and pass='$pwd'";
    $q1=$pDatabase->query($quer);

    if(mysqli_num_rows($q1)>0)
      {
        $_SESSION['mail']=$email;
        echo'<script> window.location="profile.php"; </script>';
      }
      else
      {
            echo'<script>window.location="login.php";
                    alert("Invalid Email or Password!!");  </script>';        
      }
 
 }
?>
