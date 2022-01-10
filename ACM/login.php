
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="login.css">
    <style>
        fieldset{
            background-image: repeating-linear-gradient(white,blue);
        }
        #login{
            background-color: darkblue;
            color: white;
        }
        body{
            background-image: url(login.png);
            background-size: 75%;
        }
    </style>
</head>
<body>
    <form action="valid.php" method="post">    
        <header>
        <a href="home.html"><input id="home" type="button" value="Home"></a>
    </header>
    <nav>
        <a  href="#">Home  </a>
        <a href="#">See more  </a>
    </nav>
    <fieldset>
        <div id="area">       
        <p> username <input type="text" name="username" id="username" required></p><br>
        <p>Password <input type="password" name="password" id="password" required></p>
        <input type="submit" value="LOGIN" id="login">
        
    </div>

    </fieldset>
</form>

</body>
</html>