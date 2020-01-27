     <?php
    
     session_start();
    $name=$_SESSION["name"];
    $imgpath=$_SESSION["logo"];
?>
<?php
    

$host='localhost';
$user='root';
$pass='';
$db='tt';
 $con=mysqli_connect($host,$user,$pass,$db);

 $db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"tt");
    
            
        $dis=mysqli_query($db,"select * from items");
?>




<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="cssman/headercss.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    
    <!-- imr-->
    
        <link rel="stylesheet" href="css/notice.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css_login/login.css">
    
    
     <!-- Botsrap --------------------------------------------------------------->
   
<!--------------------------------------------------------------------------------->
     <style>
      
          .card{
              width: 70%;
              margin-left: 5%;
              

          float: left;
          
          }
         footer{
             
            
         }
         
         
         .sidenav {
   
    height: 20%;
    width: 10%;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #F46E4A;
    overflow-x: hidden;
    padding-top: 25px;
             margin-top: 8%;
             text-align: center;
             border-bottom-right-radius: 20px;
             border-top-right-radius: 20px;
           
}

.sidenav a {
   
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 15px;
    color: white;
    display: block;
    text-align: left;
    margin-bottom: 5%;
  

}
.sidenav img{
    border-radius: 50%;
    
    margin-bottom: 15%;
}
.sidenav h3{
    
   color: white;
}

.sidenav a:hover {
    color: white;
     background: #034F6D;
    text-decoration: none;
    transition: all 0.5s;
}
         @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
         
         
         .contain{

             width: 100%;
         
         }
         
         .fooditems{
             
             width: 100%;
             margin-left: 12%;
             
             
             
             
         }
         .items{
             
             width: 30%;
             float: left;
             margin-bottom: 2%;
             margin-top: 2%;
             
         }
         .items p{
             
             width: 15%;
             
         }
            .items h5{
                
              font-family: ItalicT;
              
                
                
         }
         .pricetag{
             
             background: #F46E4A;
             color: aliceblue;
             padding: 7px;
             margin-right: 1%;

         }
         
         .banner{

          margin-top: -20%;
             
         
         }
         .btn-primary{

                margin-left: 20%;
}
         
         
      </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />

	<title>Footer With Address And Phones</title>
            <link rel="stylesheet" href="css/animate.css">


	<link rel="stylesheet" href="css_footer/demo_footer.css">
	<link rel="stylesheet" href="css_footer/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    
    
        <!-- imr-->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    
    
     <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    
</head>
<body>

<div class="header">
    
    <img class="wow lightSpeedIn" src="image/pp.png" alt="Picture" width="10%" height="50%">
    
    <b> <p class="wow lightSpeedIn">food <i> bangla</i></p></b>
    
 </div>
    
   
    
    <div class="contain">
      
    <div class="sidenav">
    
    <?php
    
    
  echo "<img src='".$imgpath."' height='80' width='80'; >"; ?>
        
        <?php
    
    echo "<h3>$name</h3>";
   
    ?>
    
  

        
  <a href="#about"><i class="fas fa-home"></i>    Home</a>
 <a href="homepage.php"> <i class="fas fa-sign-out-alt"></i>    Logout</a>
</div>
        
        
     <div class="banner">
        <img src="img/offers/biryani-chicken-close-up-263173.jpg" width="900px" height="300px">
        
     
        
        </div>
        
        
        
        
          
        
        <div class="fooditems">
            
           

         
              <?php
  
             while($row=mysqli_fetch_array($dis))
             {
                 echo '<div class="items">';
                
                echo "<img src='".$row["image"]."' width='380px' height='250px'>";
                ?>
                 
                  <h5><?php echo $row["name"]    ?></h5> 
            
             <h6><?php echo $row["cname"]    ?>
                 <?php   echo "<img src='".$row["clogo"]."' width='38px' height='38px'>";   ?></h6> 
            
                     <label class="pricetag">BDT  <?php echo $row["price"]    ?>   </label>
                 
                 
                 <a href='t.php?nm=<?php echo $row["name"]?>&cm=<?php echo $row["cname"]?>&cuspic=<?php echo $imgpath ?>&cusnam=<?php echo $name ?>' class="btn btn-primary">Buy</a>
                 
                 <?php
                    echo  "</div>";
                 
             }
    
  
    
                 
     
            ?> 
       
        
        
        
        
        
        
        
        
        
        
 
        
        
        
        

        
    </div>
    </div>
   

    
    
   
    
   
</body>
</html> 