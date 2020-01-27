



<?php

$host='localhost';
$user='root';
$pass='';
$db='tt';


  $db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"tt");
$totalcompany=mysqli_query($db,"select count(*) as tc from company");
$tcompany=mysqli_fetch_array($totalcompany);
$tcom=$tcompany["tc"];



$totalcustomer=mysqli_query($db,"select count(*) as tcus from customers");
$tcustomer=mysqli_fetch_array($totalcustomer);
$tcus=$tcustomer["tcus"];


$totalitem=mysqli_query($db,"select count(*) as titem from items");
$titem=mysqli_fetch_array($totalitem);
$tit=$titem["titem"];



$logo=mysqli_query($db,"select distinct logo as logos from company");



        
        ?>















<?php

$host='localhost';
$user='root';
$pass='';
$db='tt';
$logged=1;

if(isset($_POST['login'])){
    
    $useremail=$_POST['email'];
    $userpassword=$_POST['password'];
    $userrole=$_POST['role'];
  //  $con=mysqli_connect($host,$user,$pass,$db);
    if($userrole=="Customer")
    {
              

        
    $db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"tt");
        
        
       $dis=mysqli_query($db,"select * from customers");
        
        while($row=mysqli_fetch_array($dis))
        {
            if($row["username"]==$useremail && $row["password"]==$userpassword){
                $logged=0;
                session_start();
                $_SESSION["name"] = $row["name"];
                $_SESSION["logo"] = $row["logo"];
               if($row["permission"]=="deney")
                {
                 $logged=4; 
                    break;
                // header("Location: homepage.php");

                }
                else {
                header("Location: cuspanel.php");
                }
                exit();
            }
            
            
        }
        
        if($logged==1)
        {
        
                $logged=2;
        
        }
   /*   if($logged==0)
       {
       echo  " <div class='alert alert-danger alert-dismissible fade in'>";
          echo  " <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
            echo  "<strong>Wrong password!</strong>
         </div>";
           
       }
       
       */
        
    }
   if($userrole=="Company")
    {
       
         $db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"tt");
        
        
        
     $dis=mysqli_query($db,"select * from company");
        
        
         while($row=mysqli_fetch_array($dis))
        {
           
            
            if($row["userid"]==$useremail && $row["password"]==$userpassword){
                      $logged=0;
                session_start();
                $_SESSION["name"] = $row["name"];
                $_SESSION["logo"] = $row["logo"];
                if($row["permission"]=="deney")
                {
                 $logged=4; 
                    break;
                // header("Location: homepage.php");

                }
                else {
                header("Location: companel.php");
                }
                exit();
            }
            
        }
        if($logged==1)
        {
        
                $logged=2;
        
        }
 /*   if($logged==0)
       {                         
          echo  " <div class='alert alert-danger alert-dismissible fade in'>";
          echo  " <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
            echo  "<strong>Wrong password!</strong>
         </div>";
           
       }
       
       */
       
       
        
        
    }
    
    
}
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<title>Footer With Address And Phones</title>
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
      
        
        }
        .container{
            
            
          height: 80%;
            width: 100%;
            
        }
        
        
        .mynav{
            
            margin-bottom: 5%;
            
            
        }
        
        
       .mySlides {display:none;}
        
        footer{
           
            
        }
        .cards{
            
            width: 100%;
            margin-left: 23%;
            
            margin-top: 3%;
            margin-bottom: 12%;
          
            
        }
        .card{
            
            width: 15%;
            float: left;
           text-align: center;
            height: 10%;
            background: #F46E4A;
            color: aliceblue;
            margin-left: 2%;
            border-radius: 30%;
            
            
        }
        .logos{
            
            
            width: 100%;
            margin-bottom: 5%;
            height: 20%;
            
        }
        .logos img{
            margin-right: 15px;

          
        }
        
        .downloadlink{

            width: 100%;
        
           margin-bottom: 30%;
                       margin-top: 5%;

            
            text-align: center;

        }
     
        .link{
            
            width: 50%;
            float: left;

        }
        .link img{
            
            width: 30%;
            margin-bottom: 2%;
            
            
        }
        .downloadlink p{
            
            margin-bottom: 2%;
        }

        
        
        
        
        
        
        
        
        
        
        .box{
            
            width: 40%;
            margin-left: 30%;
            
            
            
        }
        .box h2{
            margin-left: 60%;
            padding: 10px;
            color: aliceblue;
            text-align: right;
            background: #034F6D;
            border-top-left-radius: 10px;
        
        
        }
    
              .box .inputbox input{
         
            width: 85%;
            padding: 2px 2px;
            font-size: 16px;
            color: black;
            margin-bottom: 30px;
          border: none;
        background: transparent;
       border-bottom: 1px solid black;
                        margin-left: 35px;
            
            transition: all 0.5s;
            
        }
        .box .inputbox input:hover{
            
            width: 90%; 
            border-bottom: 2px solid #F46E4A;
            transition: all 0.5s;

            
            
        }
        .box .inputbox label{
            
            top: 18px;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: black;
            pointer-events: none;
            transition: .5s;
            margin-left: 20px;
            letter-spacing: 2px;
            
        }
           .box input[type="submit"]
        {
            width: 20%;
            background: transparent;
            border: none;
            outline: none;
            color: aliceblue;
            background: #F46E4A;
            padding: 10px 20px;
            cursor: pointer;
            margin-left:50%;
            border-radius: 10px;
            transition: all 0.5s;
            margin-bottom: 20px;
            font-size: 16px;
            margin-top: 10px;
        }
        
        .box input[type="submit"]:hover
        {
                        
            width: 25%;
            transition: all 0.5s;

        }
        
        
        
         .box a{
            
            text-decoration: none;
            padding: 10px;
            color: #034F6D;
            font-size: 16px;
            letter-spacing: 1px;
            margin-top: 20px;
        }
        
        .alert-danger{
            
         width: 50%;
            align-content: center;
            text-align: center;
            
            overflow: hidden;
            height: 5%;
            
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
             <li><a href="#interest">Signup</a></li>
            <li><a href="#education">Newsfeed</a></li>
       <li><a href="upab.php">About us</a></li>
           </b>
       
       </ul>

    </div> 
        
        
       
      <div class="container">
          
          
          
          
          
          <div class="w3-content w3-section" style="max-width:40%">
  <img class="mySlides w3-animate-fading" src="img/slider/cleg.jpg" style="width:700px" height="500px">
  <img class="mySlides w3-animate-fading" src="img/slider/a.jpg" style="width:700px" height="500px">
  <img class="mySlides w3-animate-fading" src="img/slider/pasta.jpg" style="width:700px" height="500px">
  <img class="mySlides w3-animate-fading" src="img/slider/1.jpeg" style="width:700px" height="500px">
  <img class="mySlides w3-animate-fading" src="img/slider/2.png" style="width:700px" height="500px">
  <img class="mySlides w3-animate-fading" src="img/slider/3.jpg" style="width:700px" height="500px">


</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>

 
</div>
        
        <div class="cards">
        
        <div class="card">
                      <h1><i class="fas fa-utensils"></i></h1>  
            
          <h3><?php echo "$tcom" ?></h3>
            
            
        </div>
         <div class="card">
                      <h1><i class="fas fa-users"></i></h1>  
             <h3><?php echo "$tcus" ?></h3>

            
        </div>
         <div class="card">
                      <h1><i class="fas fa-drumstick-bite"></i></h1>  

              <h3><?php echo "$tit" ?></h3>
        </div>
        
        
        
        
        </div>
        
      <marquee behavior="scroll" > <div class="logos"> 
        
            <?php 
            
      
              
    while($row=mysqli_fetch_array($logo)){
                
                         echo "<img src='".$row["logos"]."' height='80px' width='80px' >";  

                
            }
                      
            
            
            
            ?>
            
        
        </div></marquee>
        
        
        <div class="downloadlink">
                        <p><i class="fas fa-download" style="font-size:40px;color:#F46E4A;"></i></p>

           
        
        <div class="link">
            
            <a><img src="img/linkpic/computer-icon.png" alt="pc"></a><br>

            
            
        </div>
         <div class="link">
            
                        <img src="img/linkpic/frame.png"><br>


            
        </div>
       
        
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
         <div class="box">
        
        
        <h2>Login</h2>
         <form action="homepage.php" method="post">
         <div class="inputbox">
               <label>Username</label>
             <input type="text" name="email" placeholder="username" required>
           
        </div>
             
             
         <div class="inputbox">
               <label>Password</label>
             <input type="password" name="password" placeholder="password" required>
           
        </div>
            <center><div class="radioo">
             <select name="role" required>
  <option value="Customer">Customer</option>
  <option value="Company">Company</option>
          </select>
             </div> </center>

           <center><input type="submit" name="login" value="Login"> </center>  
         
         </form>  
            
            <div class="sotorko">
            
                <?php
                
                if($logged==2)
       {
       echo  " <center><div class='alert alert-danger alert-dismissible fade in'>";
          echo  " <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
            echo  "<strong>Wrong password!</strong>
         </div></center>";
           
       }
                
                   else if($logged==4)
       {
                     echo  " <center><div class='alert alert-danger alert-dismissible fade in'>";
          echo  " <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
            echo  "<strong>Permission Denied!</strong>
         </div></center>";
           

       }
                
                
                ?>
            
            
            </div>
            
            <center><a href="registration.php">Create Account</a></center>
        
        
        </div> 
        
        
        
        
        
        
        
        
              
 
      
        
        
        <!----part3-->
    
      <div class="footer">

        
        <!---------- Footer ------------------------------------------------------------------>
    <footer class="footer-distributed">

			<div class="footer-left">

				<h3>food<span>Bangla</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Developed by III-Proton . &copy; 2018</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>16/A</span>Farmgate, Dhaka, Bangladesh</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+88016-12112123</p>
				</div>

				<div class="mail">
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:imrul.cse273@gmail.com">support@calgary.com</a>
                    </p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a id="fb" href="facebook.com/backstreetimrul"><i class="fa fa-facebook"></i></a>
					<a id="tw" href="#"><i class="fa fa-twitter"></i></a>
					<a id="li" href="#"><i class="fa fa-linkedin"></i></a>
					<a id="gh" href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
    
    
    
    
    
    </div>
    
      
      
      
      
      
      
      
      
    
   
</body>
</html> 
    <?php  

if(isset($_POST['sub'])){
    
    $sql="insert into company (name,location,userid,password,logo) values ('$name','$location','$username','$password','$folder')";
$query=mysqli_query($con,$sql);
    
    $tname=str_replace(" ", "", "$name");
    
    $ct="CREATE TABLE $tname(
   name varchar(100),
   description varchar(200),
   available varchar(10),
   image varchar(200),
   price float,
   rating float,
   reviewNo int(100)
   
);";
        
    $query=mysqli_query($con,$ct);

   
}


?>