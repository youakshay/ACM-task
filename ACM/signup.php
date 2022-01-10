<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up </title>
    <style>
        body{
            background-color: springgreen;
        }
        div{

            margin-left: 200px;
            margin-top: 100px;
        }
        fieldset{
            width: 600px;
            margin-left: 400px;
            margin-top: 15px;
            height:700px;
            background-color: steelblue;
        }
        #page{
            background-color: rgb(255, 115, 0);
            
        }
        #submit{
            color: rgb(214, 198, 198);
            background-color: rgb(216, 22, 0);
            width: 200px;
            font-size: 30px;
            height: 60px;
            margin-left: 210px;
            margin-top: 30px;
            border-radius: 100px;
            border: rgb(255, 153, 0);
        }
        #home{
            margin-left: 610px;
            width: 200px;
            margin-top: 25px;
            background-color: rgb(185, 53, 29);
            height: 60px;
        }
        #head{
            margin-left: 250px;
            text-align: center;
            width: 150px;
            font-size: 30px;
            font-style: oblique;
            color: wheat;
            background-color: rgb(255, 44, 7);
            border-radius: 50px;
            ;
        }
        #detail{
            text-align: center;
            background-color: aqua;
            border

        }
    </style>
</head>
<body>
    <a class="home" href="Home.html"><input type="button" value="Home" name="home" id="home"></a>
    <fieldset>
        <form action="index.php" method="post" >
            <p id="head" >Welcome</p>
            <p id="detail">Enter your credentials</p>
        <div class="page">
           First Name <input type="text" id="firstname" name="firstname" required><br><br>
           Last Name <input type="text" name="lastname" id="lastname"><br><br>
           Email <input type="email" name="email" id="email" required><br><br>
           Password <input type="password" name="password"  id="password" required>
        </div>
        <input class="submit" value="Sign up" type="submit" name="submit" id="submit">
    </form>
    <p id="instructions">* First name, email and password are compulsory</p>
    </fieldset>
</body>
</html>