

<?php

$host='localhost';
$user='root';
$pass='';
$db='tt';

global $name;
global $query;
global $target;

    if(isset($_FILES['logo'])){
        
$name=$_POST['name'];
$location=$_POST['location'];
$username=$_POST['username'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$folder='';

    
        
        
        
    $target = $_FILES['logo']['name'];
    $targettmp = $_FILES['logo']['tmp_name'];
    $folder="img/Customers_photo/".$target;
    move_uploaded_file($targettmp,$folder); 
    }

    

$con=mysqli_connect($host,$user,$pass,$db);
//if($con)
//{
 //   echo "connected";
    
    
//}

if(isset($_POST['sub'])){
    
    if($folder=="img/Customers_photo/")
    {
        
        $folder= "img/Customers_photo/defaultcustomer.png";
    }
    
    $sql="insert into customers (name,password,phone,username,location,logo) values ('$name','$password','$phone','$username','$location','$folder')";
$query=mysqli_query($con,$sql);
}




// delete unwanted rows

$del="Delete from customers where name =''";
$delete=mysqli_query($con,$del);
    
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

             
            margin-top: 5%;
            width: 70%;
            height: 60%;
            background: #fff 0.5;
           
        
          
        
        
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
         
            width: 100%;
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
       
        .box .inputbox label{
            font-family: sans-serif;
            font-size: 18px;
            color: black;
            pointer-events: none;
            margin-left: 20px;
            letter-spacing: 1px;
            transition: all 0.5s;
            
        }
        .box .inputbox h4:hover{
            
           font-family: sans-serif;
            font-size: 18px;
            color: #F46E4A;
            margin-left: 20px;
            letter-spacing: 2px;
            transition: all 0.5s;
               
            
        }

        .box input[type="submit"]
        {
            width: 10%;
            background: transparent;
            border: 1px solid black;
            outline: none;
            color: black;
            background: #c1fca5;
            padding: 10px 20px;
            cursor: pointer;
            margin-left:85%;
            transition: all 0.5s;
            margin-bottom: 20px;
            font-size: 18px;
            margin-top: 10px;
                        border-radius: 5px;

            
        }
        
        .box input[type="submit"]:hover
        {
                        
            width: 12%;
            transition: all 0.5s;
            background: #73D148;
            color: aliceblue;
            border-radius: 5px;

        }
        .box a{
            
            text-decoration: none;
            padding: 10px;
            color: #034F6D;
            font-size: 16px;
            letter-spacing: 1px;
            margin-top: 20px;
            margin-left: 40%;
         
        }
        footer{
           
        }
        .inputbox{
            
            margin-left: 30%;
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
        
        
        
 
        <div class="box">
        
        
        <h2>Registration</h2>
         <form action="cusregistration.php" method="post" enctype="multipart/form-data">
              <div class="inputbox">
               <h4>Customer Name</h4>
             <input type="text" name="name" placeholder="Customer name" required>
           
        </div>
              <div class="inputbox">
               <h4>Location</h4>
             <input type="text" name="location" placeholder="Location" required>
           
        </div>
              <div class="inputbox">
               <h4>Phone</h4>
             <input type="text" name="phone" placeholder="Phone" required>
           
        </div>
             
             
         <div class="inputbox">
               <h4>Username</h4>
             <input type="text" name="username" placeholder="username" required>
           
        </div>
             
             
         <div class="inputbox">
               <h4>Password</h4>
             <input type="password" name="password" placeholder="password" required>
           
        </div>
             <div class="inputbox">
               <h4>logo</h4>
             <input type="file" name="logo" placeholder="username" >
           
        </div>
             
           <center><input type="submit" name="sub" value="Submit"> </center>  
         
         </form>   
            
            <center><a href="login.php">Have an Account?</a></center>
        
        
        </div>   
        
          
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
     
      
    
   
</body>
</html> 
    