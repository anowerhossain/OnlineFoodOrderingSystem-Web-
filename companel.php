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
$folder='';

if(isset($_FILES['logo'])){

              
    $target = $_FILES['logo']['name'];
    $targettmp = $_FILES['logo']['tmp_name'];
    $folder="img/pics/".$target;
    move_uploaded_file($targettmp,$folder); 
            
}
    if(isset($_POST['add'])){ 
$iname=$_POST['name'];
$idesr=$_POST['desrp'];
$iprice=$_POST['price'];


    $con=mysqli_connect($host,$user,$pass,$db);
       
      


        
    $tname=str_replace(" ", "", "$name");


     $sql="insert into $tname (name,description,price,image) values ('$iname','$idesr','$iprice','$folder')";
$query=mysqli_query($con,$sql);
        
        
        
     $sql="insert into items (cname,clogo,name,description,price,image) values ('$name','$imgpath','$iname','$idesr','$iprice','$folder')";
$query=mysqli_query($con,$sql);
        
     //   if($query)
     //   {
     //       echo "Inserted into table";
     //   }
        
      //   $sqli="insert into items (cname,clogo,name,description,price,image) values ('$name','$imgpath',$iname','$idesr','$iprice','$folder')";
//$query2=mysqli_query($con,$sqli);
     //   
     //    if($query2)
     //   {
     //       echo "Inserted into items";
     //   }
        
        
    
}
    if(isset($_POST['del'])){ 
    
    $dname=$_POST['idel'];
        
         $con=mysqli_connect($host,$user,$pass,$db);
        
    $tname=str_replace(" ", "", "$name");
     $sql="delete from $tname where name='$dname'";
$query=mysqli_query($con,$sql);
    
    }

?>


<?php



$host='localhost';
$user='root';
$pass='';
$db='tt';
$folder='';

    $comname=$_SESSION["name"];
    $companylogo=$_SESSION["logo"];
 
     
if(isset($_FILES['selectimg'])){

              
    $target = $_FILES['selectimg']['name'];
    $targettmp = $_FILES['selectimg']['tmp_name'];
    $folder="img/offers/".$target;
    move_uploaded_file($targettmp,$folder); 
            
}

  if(isset($_POST['postoffer'])){ 
      
      date_default_timezone_set("Asia/Dhaka");
$posttime=date("h:i");
      $ampm=date("a");
      
      
$description=$_POST['offers'];
      $postday=date("l");
      $cdate=date("Y-m-d");
      $vdate=date("Y-m-d",strtotime('+1 days', strtotime($cdate)));


   
        

     $sql="insert into offers (companyname,description,companylogo,postday,posttime,ampm,postingimg,currentdate,validitydate) values ('$comname','$description','$companylogo','$postday','$posttime','$ampm','$folder','$cdate','$vdate')";
$query=mysqli_query($con,$sql);

}

?>


<?php


$host='localhost';
$user='root';
$pass='';
$db='tt';


 $tname=str_replace(" ", "", "$name");


if(isset($_POST['update'])){
    
    $colname=$_POST['colname'];
        $keyvalue=$_POST['keyvalue'];

        $newvalue=$_POST['newvalue'];
            $keycol=$_POST['keycol'];

    
     $con=mysqli_connect($host,$user,$pass,$db);
    $updatequ="update $tname set $colname ='$newvalue' where $keycol ='$keyvalue'";
    $exeupdate=mysqli_query($con,$updatequ);
}





?>


<?php
$db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"tt");
$totalorder=mysqli_query($db,"select count(*) as totalorder from orders where comname='$name'");
$torder=mysqli_fetch_array($totalorder);
$tor=$torder["totalorder"];


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
          
          }
         footer{
             position: fixed;
            
         }
         
         
.sidenav {
   
    height: 20%;
    width: 10%;
    z-index: 1;
    margin-left: -20%;

    background-color: #F46E4A;
    overflow-x: hidden;
    padding-top: 25px;
             margin-top: 6%;
             text-align: center;
             border-bottom-right-radius: 20px;
             border-top-right-radius: 20px;
             float: left;
           
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
             height: 60%;
             padding-bottom: 20%;
           
             
         }
         
         .insertdata{
             width: 90%;
             margin-left: 5%;             
             
             
             
         }
         .form-group input[type="text"]{
             border: none;
             border-bottom: 1px solid #F46E4A;
             margin-right: 2px;
             background: none;

         
         }
         
         .mybtn{
             
                width: 60px;
             height: 30px;
             border-radius: 10px;
               border: none;
             background: #91CC41;
             color: aliceblue;
             transition: all 0.5s;
         }
         .mybtn:hover{
             
              width: 75px;
             transition: all 0.5s;
             
         }
         .mybtndel{
             
                width: 60px;
             height: 30px;
             border-radius: 10px;
               border: none;
             background: red;
             color: aliceblue;
             transition: all 0.5s;
             
         }
           .mybtndel:hover{
             
              width: 75px;
             transition: all 0.5s;
             
         }
         .mybtnpost{
              width: 60px;
             height: 30px;
             border-radius: 10px;
               border: none;
             background: #91CC41;
             color: aliceblue;
             transition: all 0.5s;
             
             
         }
         .mybtnpost:hover{
             
             
              width: 75px;
             transition: all 0.5s;
             
         }
         .resize input[type="text"]{
             
             
             margin-left: 230%;
             margin-right: 5px;
             
         }
         .resize input[type="file"]{
             
             margin-left: 200%;
             
         }
         .resize input[type="submit"]{
             margin-left: 430%;
             
             
         }
         .updatediv{

         margin-left: 17%;
         }
         .postdiv{
             
             margin-left: 17%;
             margin-bottom: 2%;
         }
         .mybtnupdate{
              width: 60px;
             height: 30px;
             border-radius: 10px;
               border: none;
             background: #0078D7;
             color: aliceblue;
             transition: all 0.5s;
             
             
         }
         .mybtnupdate:hover{
             
               width: 75px;
             transition: all 0.5s;
             
             
         }
         .search{
             margin-left: 30%;
             
             margin-top: -15%;
          
             
         }
         .search img{

          margin-bottom: 2%;
             }
         
         .search td{
             font-family: ItalicT;
         
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
    
    
    <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    
    
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
  <a href="#services"><i class="fas fa-bell"></i> Notifications{<?php echo "$tor" ?>}</a>
 <a href="homepage.php"> <i class="fas fa-sign-out-alt"></i>    Logout</a>
</div>
        
             
        
        <div class="insertdata">
         <form class="form-inline" action="companel.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    
    <input type="text" class="form-control" name="name" placeholder="Item Name">
  </div>
  <div class="form-group">
   
    <input type="text" class="form-control" name="desrp" placeholder="Destription" >
  </div>
             <div class="form-group">
  
    <input type="text" class="form-control" name="price" placeholder="Price">
  </div>
  <div class="form-group">

    <input type="file" name="logo">
  </div>
  <input type="submit" class="mybtn" value="Add" name="add">
</form><br>
            
            
            
            
        
                <form class="form-inline" action="companel.php" method="post" enctype="multipart/form-data">
                    
            <div class="form-group">
    
    <input type="text" class="form-control" name="idel" placeholder="Item Name">
  </div>
              <input type="submit" class="mybtndel" value="Del" name="del">

            
            </form><br><br>
        
            
            
            <div class="postdiv">
            
             <form class="form-inline" action="companel.php" method="post" enctype="multipart/form-data">
                    
            <div class="form-group">
   
    <input type="text" class="form-control" name="offers" placeholder="Post an Offer...."> </div>
  
                  <div class="form-group">
                    
                          <input type="file" name="selectimg"></div>

                      <input type="submit" class="mybtnpost" value="Post" name="postoffer">

            
            </form></div>
 
            
            
            
            
            
            
            
            <div class="updatediv">
            
             <form class="form-inline" action="companel.php" method="post" enctype="multipart/form-data">
                    
            <div class="form-group">
    
    <input type="text" class="form-control" name="colname" placeholder="Column Name"> </div>
                 
                 
                 
                 <div class="form-group">
    
    <input type="text" class="form-control" name="newvalue" placeholder="New Value"> </div>
                 
                 
                    <div class="form-group">
                        
    
    <input type="text" class="form-control" name="keycol" placeholder="Key column"> </div>
                    
                 <div class="form-group">
    
    <input type="text" class="form-control" name="keyvalue" placeholder="Key Value"> </div>
  
  
                 

                      <input type="submit" class="mybtnupdate" value="Update" name="update">

            
            </form></div>
 
            
     
            
        
</div>
        </div>
        
        <div class="search">
            
            <img src="css/Search-Icon-File.png" alt="search" width="2%" height="1.5%">   <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By Names..." title="Type in a name">
            
             <?php
  
    
    $db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"tt");
    
            
             $tname=str_replace(" ", "", "$name");
     
        $dis=mysqli_query($db,"select * from $tname order by name");
    ?> 


<table id="myTable" class="wow bounceInUp">
  <tr class="header">
     <th >Name</th>
         <th>Description</th>
       <th>Price</th>
       <th>Available?</th>
            <th>Image</th>
       </tr>    
     <?php   
    while($row=mysqli_fetch_array($dis))
    {
        
        ?>
   
     <tr class="info" >
        <td> <?php echo $row["name"];          ?> </td>
        <td><?php echo $row["description"];        ?></td>
        <td><?php  echo $row["price"];          ?></td>
        <td><?php echo $row["available"];         ?></td>
       
    <?php 
         echo "<td><img src='".$row["image"]."' height='80' width='80' ></td>";  
    ?>  
    <?php echo "</tr>";
        
    
        
         
       
    }
    
    ?>
      
     </table>
            
            
            <hr>
            <hr>
            <h3>Orders From Customers</h3>
            
            
            
      <table id="myTable" class="wow bounceInUp">
  <tr class="header">
     <th >Item Name</th>
         <th>Customer Name</th>
       <th>Customer Photo</th>
       
       </tr>        
              <?php   
        
          
         
    $order=mysqli_query($db,"select * from orders where comname='$name'");
          
    while($row=mysqli_fetch_array($order))
    {
        
        ?>
   
     <tr class="info" >
        <td> <?php echo $row["iname"];          ?> </td>
        <td><?php echo $row["cusname"];        ?></td>
        
    <?php 
         echo "<td><img src='".$row["cuspic"]."' height='80' width='80' ></td>";  
    ?>  
    <?php echo "</tr>";
    }
    
    ?>
      
    
    
         </table>

    
    
 </div>
    

    
    
</body>
    
</html>
 


            