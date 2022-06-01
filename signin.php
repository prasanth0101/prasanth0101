


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
            margin:40px 400px 20px;

        }
        .content h1{
            text-align:center;
        }
        nav{
        box-shadow: 6px 6px 29px -4px rgba(0,0,0,0.75);
        }
        body{
            background-color:#424242;
        }
        .flex{
            display:flex;
            align-item:center;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <a class="navbar-brand" href="index.html">Forum</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
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
        <a href="login.php">login</a>
        </div>
        </form>
       </div>
    </nav>
    <div class="container">
        <div class="content">
            <h1>Sign in</h1>
            <form method="post">
                <div class="flex">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name" name="fname" autocomplete="off" required >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name" name="lname" autocomplete="off" required>
                </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Email" name="email" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="create Password" name="password" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary form-control" name="submit">Sign up</button>
                </div>
        </form>
        </div>
       
    </div>
</body>
</html>


<?php
    //sending inputed data to database
    require_once 'connection.php';
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($fname!="" && $lname!="" && $email!="" && $password!=""){
            $sql = "insert into `user_data` (fname,lname,email,password) values ('$fname','$lname','$email','$password')";
            $result=mysqli_query($con,$sql);
            if($result){
                header("location:login.php?mes=<p style='color:white'; >you have sucessfully created account.Please Login.</p>");
            }else{
                echo '<p>Plese Enter Valid details</p>';
            }
    
        }
    }
?>

