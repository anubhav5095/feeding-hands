<?php
include 'db.php';
$pDatabase = Database::getInstance(); // ye db.php wale class ka object
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
  </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>

.fa-star{
color: #d6d6c2;
}

.checked {
    color: grey;
}
.navbar{
  padding: 0px;
  margin:0px;
}
.header {
    position: absolute;
    width: 100%;
    z-index: 10;
    filter: blur(0px);
  }

#search{
  text-align: center;

}

#renterprofile{
  padding: 50px;
}
#radio_search{
  text-align: left;
  font-size: 18px;
}

</style>
</head>
<body>
  <div class="header" id="navbar" style="position:absolute; " style="opacity:0.9; background-color:;">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav" style="margin:0px;">
      <li class="headerLinks"> <a href="index.php"><i class="fa fa-fw fa-home"> </i> Home</a> </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="headerLinks"> <a href="logout.php"><i class="fa fa-fw fa-"> </i>Logout</a> </li>

    </ul>
  </div>
  </nav>
  </div>
  <div id="renterprofile">
     <br><br>
  
<div class="tab-content">
  <div id="profile" class="tab-pane fade in active">
    <?php 
        $email=$_SESSION['mail'];
        $query="SELECT * FROM `register` WHERE email='$email'";
        $q1=$pDatabase->query($query);

        while($row =mysqli_fetch_array($q1))
        {
        ?>

      <div class="row">
          <div class="col-sm-10">

             <h1 class="">Hey !!<?php echo $row['name']?></h1>
  <br>
          </div>
        <div  class="col-sm-2" >
          </div>
      </div>
    <br>
      <div class="row">
          <div class="col-sm-3">
              <!--left col-->
              <div class="panel panel-default">  
          
                <div class="panel-heading">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Edit profile</button>
                </div>

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Account</h4>
                        </div>
                        
                        <div class="modal-body">
                            <form method="post" action="profile.php">
                                Change Password :
                                <input type="password" name="password2" placeholder="Password" required>
                                <br><br><input type="submit" name="login" value="Login">  
                            </form>
                        </div>
                            
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                </div>

            

            </div>           
              <ul class="list-group"><br>
                
                <br>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Name: </strong></span> <?php echo $row['name'];?></li>
               
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Email: </strong></span> <?php echo $row['email'];?></li>
                
                
               <li class="list-group-item text-muted" contenteditable="false">Contact Details</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Cellphone Number: </strong></span><?php echo $row['phone'];
              }?></li>
            </ul>
             



          </div>

          <!--/col-3-->
  </div><!--row-->
</div><!--profile tab-->


</div><!--tab content-->

  </body>
  </html>
<?php 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
