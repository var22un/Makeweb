<?php include("messagecon.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>


    * {
  box-sizing: border-box;
}


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #ccc;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

@media(max-width:430px){
  #tog_l{
    font-size: 15px;
    color: #ccc;
  }
  #img{
  max-height: 140px;
}

  .navbar-brand{
    font-size: 8px;
  }
  .car2{
    max-width: 200px;
  max-height: 180px;
  }
  #p_r{
    font-size: 13px;
  }
  #m_b_t{
    flex-wrap: wrap;
    
  }
  #b_t{
    max-width: 100%px;
    max-height: 200px;
  }
  #l_t{
    padding-top: 10px;
  }
  
  #m_l{
    max-width: 500px;
    text-align: left;
    max-height: 500px;
   
   
    
  }
  #sh_w{
    display: none;
  }
 #i_i{
  font-size: 10px;
 }
 #p_p{
  font-size: 5px;
  display: none;
 }
  
  
  #n_m{
    font-size: 10px;
   
  }
  #lin_n{
    max-width: 100%;
    height: 280px;
    
   
    
  }
  #m_K{
   max-height: fit-content;
   box-sizing: border-box;
   max-width: max-content;
  
   
   
  
   
  }
  #pic{
    max-width: 200px;
    max-height: 100px;
    margin-top:  50px;
    
    
    
  }
  
  #hed_r{
    max-height: 30px;
    
  }
  #n_v{
    width: 100%;
  }
  #foot_r{
    flex-wrap: wrap;
    max-height: 250px;
  }
#sec_d{
  display: none;
}
#fo_img{
  max-width: 180px;
  max-height: 180px;
  margin: auto;
}
#fot_n{
  font-size: 5px;
}
}

/* search mainu*/

* {
  box-sizing: border-box;
}


#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}

#myInput{
  border-radius: 10px;
  width: 225px;
  height: 33px;
  border-top: none;
  border-left: none;
  border-right: none;
  padding-left: 10px;
  background: none;
  border-bottom-color:solid gray;
  margin-right: 20px;
}
#myInput:hover{
  border: solid gray;
  color: whitesmoke;
  box-shadow: 2px 5px 8px gray;
  transition: 0.3s;
  width: 229px;
  height: 35px;
  
  
}
#hide_l{
  width: 140px;
  height: 35px;
  
  padding-left: 15px;
  padding-top: 5px;
  background-color: gray;
  color: black;
  border-radius: 10px;
  text-decoration: none;
}
#hide_l:hover{
  border: solid gray;
  color: whitesmoke;
  box-shadow: 2px 5px 8px gray;
  transition: 0.3s;
}
#t_b{
  width: 250px;
    height: 210px;
    border: none;
    background-image: url(images/263e02e428c2e7d838996346bdb5e772.gif);
    background-size: 100% 100%;
    border-radius: 10px;
    box-shadow: 2px 5px 8px #ccc;
  
}
#t_b_b{
  width: 250px;
    height: 210px;
    border: none;
    background-image: url(images/responsive-gif.gif);
    background-size: 100% 100%;
    border-radius: 10px;
    box-shadow: 2px 5px 8px #ccc;
  
}
#branding{
    text-shadow: 2px 1px 2px wheat;
    
 }
 ::-webkit-scrollbar{
 background-color: cadetblue;
 scroll-behavior: smooth;
 scroll-snap-type: mandatory;
 border-radius: 20px;
 scrollbar-track-color: #f7ef02;
 color: #f7ef02;
 width: 10px;
 }
#varu::before{
  content: "varun";
  animation: change_color infinite 10s;
color: red;
font-size: 22px;
font-family: 'Architects Daughter';;

}
@keyframes change_color{
  0% {
color: #f7ef02;
  }
  10%{
    color: red;
  }
  20%{
    color: goldenrod;
  }
  30%{
    color:purple;
  }
  40%{
    color: rosybrown;
  }
  50%{
    color:brown;
  }
  60%{
    color:orange;
  }
  70%{
    color: red;
  }
  80%{
    color: rgb(9, 100, 32);
  }
  90%{
    color: green;
  }
  100%{
    color:whitesmoke;
  }



}
#hove{
    color: skyblue;
  }
  #hove:hover{
color: white;
border-radius: 10px;
box-shadow: 2px 5px 9px rgb(243, 243, 241);
transition: 0.3s;
}

</style>
<script>
     function myFunction() {
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName("li");
      for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("a")[0];
          txtValue = a.textContent || a.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "";
          } else {
              li[i].style.display = "none";
          }
      }
  }

  $(document).ready(function(){
    $("#myInput").click(function(){
        $("#myUL").show(1000);
    });
});

$(document).ready(function(){
    $("#myInput").click(function(){
        $("#hide_l").show(1000);
    });
});

$(document).ready(function(){
    $("#hide_l").click(function(){
        $("#myUL").hide(1000);
    });
});

</script>
</head>
<body>


<nav class="navbar navbar-expand-lg " style="background-color: black;  backdrop-filter:blur(25px); width: 100%; height: inherit;">
      <button style="width: 20px; height: inherit;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i id="tog_l" class="fa-solid fa-sliders"></i></span>
      </button>
      <a id="" class="navbar-brand" style="font-size: 20px; color: #f7ef02; font-family: sans-serif;">MakeWeb.com</a>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03" style="margin: auto;">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a id="hove" class="nav-link" href="../../index.html">Home <span class="sr-only">(current)</span></a>
          </li>
         
          <li class="nav-item active">
            <a  id="hove" class="nav-link " href="../dev.html">Developer Info.</a>
          </li>
  
          <li class="nav-item active">
            <a id="hove" class="nav-link " href="#foot_r">Contect As</a>
          </li>
         
        </ul>
        <form class="form-inline my-2 my-lg-0" style="display : none">
          <input type="text" id= "myInput" onkeyup="myFunction()" placeholder="Searcheing..........">
          <label for="username" title="Kullan adnz girin" data-title="Kullanc ad"></label>
          <a id="hide_l" href="" style="display: none;">Hide search list</a>
          
          
          
        </form>
      </div>
    
    </nav>
    <br>
    <ul id="myUL" style="float: right; display: none;  ">
      <li>
        <a href="Tamplets/page.html">One Page Web</a></li>
      <li><a href="Tamplets/demos.html">Templets</a></li>
    
      <li><a href="Tamplets/demos.html">docter web</a></li>
      <li><a href="Tamplets/page.html">travel web</a></li>
    
      <li><a href="devloper info/dev.html">develper info</a></li>
      <li><a href="devloper info/dev.html#lin_n">Varun</a></li>
      <li><a href="#bus_t">Bussines web</a></li>
      <li><a href="#pr_s">prosnol web</a></li>
    </ul>
  

<div class="container" >
  <form action="" method="POST">
  
    
      <label>Full Name</label>
    
    
      <input type="text" name="fullname" placeholder="Full Name.." required >
    
  
  
      <label for="lname">Email Id</label>
    
      <input type="text" id="lname" name="email" placeholder="Email Id.." required >
    
 
  
      <label for="subject">Type Message</label>
    
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required ></textarea>
    
  <br>
  
    <input type="submit" value="Send" name="geting">
 
  </form>
</div>
</body>
</html>
<?php

if($_POST['geting'])

{

  $fnam = $_POST['fullname'];
  $eml = $_POST['email'];
  $sub = $_POST['subject'];
  

  $varun = "INSERT INTO MESSAGES_DATA VALUES('$fnam','$eml','$sub')";

 

  $divya = mysqli_query($cann,$varun);

  

  if($divya)
  {
   echo "Sending";
  }
  else
  {
    echo "Not Sending";
  }
}


?>