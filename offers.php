

<?php

$host='localhost';
$user='root';
$pass='';
$db='tt';

global $name;
global $query;
global $folder;


$con=mysqli_connect($host,$user,$pass,$db);


?>





<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="cssman/headercss.css">
        
    <!-- imr-->
    
        <link rel="stylesheet" href="css/notice.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css_login/login.css">
    
    
     <!-- Botsrap --------------------------------------------------------------->
   
<!--------------------------------------------------------------------------------->
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />

	<title>Footer With Address And Phones</title>

	<link rel="stylesheet" href="css_footer/demo_footer.css">
	<link rel="stylesheet" href="css_footer/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    
    
        <!-- imr-->

    
    
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    
    
    
     <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    
    
    
    <style>

        body{

            margin: 0;
            padding: 0;
            font-family: sans-serif;
         
            background-size: cover;
        
        
        }
        .newsbox{
            
          
            height: 100%;
            width: 100%;
            margin-top: 10%;
            margin-left: 30%;
            
            
        }
        .underbox img{
            
            background: #F46E4A;
            padding: 5px;
            border-radius: 40%;
            margin-bottom: 2%;
            
            
        }
                .newsbox p{
                    font-size: 18px;
                    font-family: arial;
                    letter-spacing: 1px;
                   color: coral;
                    position: absolute;
                    
        }
        .newsbox span{
            
        margin-left: 30%;
            background: #034F6D;
            color: aliceblue;
            border-top-left-radius: 10px;
                        border-top-right-radius: 10px;
            padding: 1%;
            padding-bottom: 0.3%;
                        padding-top: 0.3%;

            

            
        }
        .posttime{
            padding-bottom: 0.8%;
            padding-left: .5%;
            padding-right: .3%;
            width: 3.8%;
            margin-left: 35.15%;
            background: #F46E4A;
            color: aliceblue;
            border-bottom-left-radius: 10px;
                        border-bottom-right-radius: 10px;
         

        }

        
    </style>
    
</head>
    
    
    <body>

<div class="header">
    
    <img class="wow lightSpeedIn" src="image/pp.png" alt="Picture" width="10%" height="50%">
    
    <b> <p class="wow lightSpeedIn">food <i> bangla</i></p></b>
    
 </div>
    
   <div class="mynav">
       <ul class="wow bounceInUp">
      <b>  <li><a href="homepage.php">Home</a></li>
            <li><a href="#education">Newsfeed</a></li>
       <li><a href="upab.php">About us</a></li>
           </b>
       
       </ul>

    </div> 
        
        
        <div class="newsbox">
          
            
             <?php 
            
            $host='localhost';
$user='root';
$pass='';
$db='tt';

global $name;
global $query;
global $folder;


$con=mysqli_connect($host,$user,$pass,$db);


     $db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"tt");    
        $dis=mysqli_query($db,"select * from offers ");

    while($row=mysqli_fetch_array($dis))
    {
        $postcom=$row["companyname"];
        $posterlogo=$row["companylogo"];
        $image=$row["postingimg"];
        $postdescription=$row["description"];
        $day=$row["postday"];
        $day=substr($day,0,3);
        $posttime=$row["posttime"];
        
        
      ?><h4><?php echo $postcom; ?>
            <img  <?php echo"src='$posterlogo'" ?>class="img-circle"  height='50px' width='50px'> <span>  <?php  echo "$day"; ?></span>
            <div class="posttime"> <?php  echo "$posttime"; ?></div>
           </h4>
      <?php
   
    
         echo '<div class="underbox">';
        echo "<img src='$image'  height='300px' width='450px'><br>";
         echo "</div>";
      
         echo "<p>$postdescription</p><br>"; 
         ?>
     <hr><?php
    
    }
    
    ?>

            
            
            
            
            
            
        
        
        
        
        
        </div>
        
        
        
 
      
        
     
      
    
   
</body>
</html> 
    