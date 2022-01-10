<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up </title>
    <link rel="stylesheet" href="style2.css">
    <style>
        body{
            background-image: url(workplace.jpg);
            background-size: 100%;
        }
    </style>
</head>
<body>
    <a class="home" href="Home.html"><input type="button" value="Home" name="home" id="home"></a>
    <fieldset>
        <form action="" method="POST" >
            <p id="head" >Welcome</p>
            <p id="detail">Enter your credentials</p>
        <div class="page">

           First Name <input type="text" id="firstname" name="firstname" required><br><br>
           Last Name <input type="text" name="lastname" id="lastname"><br><br>
           Username <input type="text" name="username" id="username" required><br><br>
           Email <input type="email" name="email" id="email" required><br><br>
           Password <input type="password" name="password"  id="password" required>

        </div>
        <input class="submit" value="Sign up" type="submit" name="submit" id="submit">
        <p style="margin-left:190px; font-size: large" >Already have an account? <a href="login.php"> click here</a></p>
    </form>
    <p id="instructions">* First name, email and password are compulsory <br>
    * Passwords must be greater than 5 characters</p>
    </fieldset>
</body>
</html>
<?php
    $server="localhost";
    $dbname="login_page";
    $username="root";
    $password="";

    $con= new mysqli("localhost", "root", "", "login_page");

    if($con)
    {
        echo "connected successfully";
    }
    else
    {
        echo "error: ";
    }
    if(!empty($_POST['username']))
    {
        $firstname= $_POST['firstname'];
        $lastname= $_POST['lastname'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $username= $_POST['username'];

        //checking if username already exists or not

        $stmt= $con->prepare("select * from login_page where username= ?"); 
       $stmt->bind_param("s", $username);
       $stmt->execute();
       $stmt_result= $stmt->get_result();
       if($stmt_result->num_rows> 0){
           echo "Username already taken<br>" ;
           exit;
       }
       //check for password size
       else if(strlen($password)<=5){
           echo "<p>Password must be greater than 5 characters</p>";
       }
       else
       {
        $sql = "INSERT INTO `login_page` (`username`, `firstname`, `lastname`, `email`, `password`) VALUES ('$username', '$firstname', '$lastname', '$email', '$password')";
        if($con->query($sql) == true)
        {
            echo "Inserted successfully";
        }
        else
        {
            echo "Error";
        }
    }
}
    $con->close();

?>