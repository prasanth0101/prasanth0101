<?php
    include 'connection.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        .content{
            background-color:white;
            margin:50px 400px 20px;
            padding:40px;
            border-radius:4px;

        }
        .content h1{
            text-align:center;
            justify-content:center;
            margin-bottom:20px;
        }
        nav{
        box-shadow: 6px 6px 29px -4px rgba(0,0,0,0.75);
        }
        body{
            background-color:#424242;
        }
        #logbtn{
            margin:5px;
        }
        #or{
        
            margin-left:50%;
            margin-right:50%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <a class="navbar-brand" href="index.php">Forum</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
        </li>
        
        </ul>
        <form class="form-inline my-2 my-lg-0" id="navl">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <form class="form-inline my-2 my-lg-0" >
        
        <div class="log">
        <a href="login.php" class="btn btn-primary" id="logbtn">Login</a>
        </div>
        </form>
       </div>
    </nav>
    <div class="container">
        <?php
            if(isset($_GET['mes'])){
                echo $_GET['mes'];
            }

        ?>
        <div class="content">
            <h1>Login</h1>
            <form action="login.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Email" name="email" autocomplete="off" required >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" autocomplete="off" required >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary form-control" name="submit">Login</button>
                </div>
                <p><a href="#">Forgot Password?</a></p>
                <p>Don't have account? <a href="signin.php">Sign in</a></p>
                <p id="or">or</p>
                <a href="" class="goo">login with google</a>
        </form>
        </div>
       
    </div>
    <?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $email= $_POST['email'];
        $password = $_POST['password'];
        if($email!="" && $password!=""){
            $sql="select email,password from `user_data` where email='$email' and password='$password'";
            $result = mysqli_query($con,$sql);
            if($result->num_rows==1){
                $_SESSION['name']=$email;
                header("location:main.php");
            }
        }
    }

    ?>
</body>
</html>
