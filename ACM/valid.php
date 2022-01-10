<?php
   $username = $_POST['username'];
   $password = $_POST['password'];

   //database connection

   $con= new mysqli("localhost", "root", "", "login_page");

   if($con->connect_error)
   {
       die("Failed :");
   }
   else
   {
       $stmt= $con->prepare("select * from login_page where username= ?"); 
       $stmt->bind_param("s", $username);
       $stmt->execute();
       $stmt_result= $stmt->get_result();
       if($stmt_result->num_rows > 0)
       {
            $data= $stmt_result->fetch_assoc();
            if($data['password']== $password)
            {
                header("location: welcome.php");
            }
            else
            {
                echo "Wrong password";
            }
       }
       else{
           echo "<h2> Invalid Email or password</h2>";
       }
   }
?>