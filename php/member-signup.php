<?php
$servername="localhost";
$username="root";
$qpassword="";
$shailesh = "peoplecare";    #-----------peoplecare is a database name-----------
$name=$_POST['username'];
$mobno=$_POST['phone'];
$password=$_POST['pass'];
$cpassword=$_POST['cpass'];


$con=mysqli_connect($servername,$username,$qpassword,$shailesh);

  
    $sql="INSERT INTO membersignup(UserID,Mobile,password,confirmPassword) VALUES('$name','$mobno','$password','$cpassword')";
    if($con-> query($sql)===TRUE)
    {
        echo "your form is successfully Submitted";
    }
    else
     echo "error:".$sql."<br>".$con-> error; 
      
        ?>
        


