<?php

?>
<!Doctype Html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.headerLinks,a{
  font-size: 15px;
}

#headerLinks{
  font-style: 15px;
}

.navbar{
  padding: 0px;
  margin:0px;
}

.header 
  {
    position: absolute;
    width: 100%;
    z-index: 10;
    filter: blur(0px);
  }


  /* Set a style for all buttons */
  button 
  {
      background-color: #4CAF50;
      color: white;
      padding: 20px;
      margin: 10px 0;
      cursor: pointer;
      width: auto;
  }

  button:hover 
  {
      opacity: 0.8;
  }

  /* Extra styles for the cancel button */
</style>
</head>

<body>
<div class="header" id="navbar" style="position:absolute; " style="opacity:0.9; background-color:;">
<nav class="navbar navbar-inverse">
<div class="container-fluid">
  <ul class="nav navbar-nav" style="margin:0px;">
    <li class="headerLinks"> <a href="index.php"><i class="fa fa-fw fa-home"> </i> Home</a> </li>
  </ul>

</div>
</nav>
</div>

<script>
  window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</br></br>
</body>
</html>
