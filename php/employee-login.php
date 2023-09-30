<?php
$servername="localhost";
$username="root";
$qpassword="";
$shailesh = "peoplecare";
$UserID=$_POST['username'];
$password=$_POST['pass'];
$con=mysqli_connect($servername,$username,$qpassword,$shailesh);
$sql="select UserID, password from employeelogin where UserID='$UserID' and password='$password'";
$result=$con-> query($sql);
    if($result->num_rows>0)
    {
        header("location:../index.html");
        // echo "login successfully";

    ?>
    <!-- <a href="reg.html">clcik here</a> -->
    <!-- password
    <input type="password"> -->
   
    <?php
    }
    else
    // echo "error:".$sql."<br>".$con-> error;
    // echo "User ID and Password does not matches"
    echo '<script>alert("User ID and Password does not matches") 
    </script>';
?>