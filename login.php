 
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
                header("Location: cuspanel.php");
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
                header("Location: companel.php");
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
        .box{

        position: absolute;
            margin-top: 20%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 550px;
            height: 450px;
            background: #fff 0.5;
            box-sizing: border-box;
            box-shadow: 0 5px 10px #F46E4A;
            border-radius: 10PX;
        
        
        }
        .box h2{
            margin-left: 80%;
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
      .box .inputbox input:focus ~ label,
        .box .inputbox input:valid ~ label{
            
            top: -10px;
            left: 0;
            color: aqua;
            font-size: 12px;
            
            
            
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
        
        
        
 
        <div class="box">
        
        
        <h2>Login</h2>
         <form action="login.php" method="post">
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
                
                
                ?>
            
            
            </div>
            
            <center><a href="#">Create Account</a></center>
        
        
        </div>   
        

        
        
        <!----part3-->
    
      
      
      
      
    
   
</body>
</html> 
    