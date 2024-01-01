<?php include("apcan.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="form css/form.css">
<style>
#am_btn:hover{
background-color: #065974;
color: white;
border-radius: 10px;
width: 150px;
height: 40px;

transition: 0.5s;
box-shadow: 2px 5px 6px  #021e50 ;
}
  </style>


</head>
<body>
<div  style=" height: fit-content; background-image: url(../images/do.jpg); background-size:cover">
  <div>
    <nav id="nv" class="navbar navbar-expand-lg navbar-light " style=" background-color:rgb(10, 198, 198); backdrop-filter:blur(25px);" >
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a style=" font-size: 30px;" class="navbar-brand"  href="#"><b>HealthyLife.com</b></a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a id="hove" class="nav-link " href="../Tamplets/demos.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a  id="hove" class="nav-link" href="../form and data/apform.php">Online Appointments</a>
          </li>
          <li class="nav-item active">
            <a  id="hove" class="nav-link " href="#tirt">Treatments</a>
          </li>
          <li class="nav-item active">
            <a id="hove" class="nav-link " href="#">Contact us</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input id="hove" style="background: transparent; border:solid black; border-radius: 30px;  color: black;" class="form-control mr-sm-2" type="search" placeholder="Search Your Treatments" aria-label="Search">
          <button id="hove" class="btn  my-2 my-sm-0" style=" color: black; background: transparent;" type="submit"><i style="font-size: 25px;" class="fa-solid fa-magnifying-glass fa-bounce"></i></button>
        </form>
      </div>
    </nav>
  </div>
</div>

<br>
<center><h1>Appointment</h1></center>
<hr style="text-align: center; width: 250px; border: solid darkcyan; border-style: dashed; border-radius: 20px;">
<br>

<div class="container"  style=" height: fit-content; background-image: url(../images/do.jpg); background-size:cover; border-radius: 20px; box-shadow: 2px 6px 9px skyblue;"> 

<form method="POST">
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">Full Name</label>
    <input id="fo_ma" type="text"  placeholder="full name" required name="name">
   
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Agg</label>
    <input id="fo_ma" type="number"  placeholder="eg '25'"  required name="agg">
    
  </div>
  <div class="col-md-4 position-relative">
    <label  class="form-label">Address</label>
    <div class="input-group">
      
      <input id="fo_ma" type="address"  placeholder="full Address"  required name="add">
     
    </div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="validationTooltip03" class="form-label">Number</label>
    <input id="fo_ma" type="number" placeholder="+91"  required name="nub">
    <div class="invalid-tooltip">
      
    </div>
  </div>
 
  <div class="col-md-3 position-relative">
    <label  class="form-label">Appointment</label>

   
          <select id="fo_ma" class="form-control" name="select" >
            <option  selected >Choose..</option>
            <option >Cardiology</option>
            <option >Monthly Check up</option>
            <option >Skin Care</option>
            <option >Opthalmology</option>
          </select>

         

          <input type="submit" value = "Book" style="margin-top: 20px; width: 150px; height: 40px; border-radius: 20px;  border: solid rgb(162, 247, 162);"  id="am_btn" class="nav-link"  name="send">
         
          </div>
</form>
</div>
</body>
</html>
<?php

if($_POST["send"])
{
  $nam = $_POST['name'];
  $agg = $_POST['agg'];
  $add = $_POST['add'];
  $nub = $_POST['nub'];
  $selc = $_POST['select'];

  $varun = "INSERT INTO APPOINT_DATA VALUES('$nam','$agg','$add','$nub','$selc')";

 

  $divya = mysqli_query($can,$varun);

  

  if($divya)
  {
    //echo "sending";
  }
  else
  {
    echo "Not Sending";
  }
}




?>