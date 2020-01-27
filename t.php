 <?php
  
    
    $db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"tt");
    
     $name=$_GET['nm'];
   
     $comnam=$_GET['cm'];
 
      $cuspic=$_GET['cuspic'];
      $cun=$_GET['cusnam'];




        $dis=mysqli_query($db,"insert into orders (iname,cusname,comname,cuspic) values ('$name','$cun','$comnam','$cuspic')");
  header("Location: cuspanel.php");


       



    


    
    ?> 
