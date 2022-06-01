<?php
    session_start();
    if(!isset($_SESSION['name'])){
        header("location:login.php?mes=<h1>first you need to login</h1>");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion Forum Website</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        form {
            padding: 5px;
        }
        
        body {
            background-color: #424242;
            color: white;
        }
        
        #textarea {
            color: #d1cdcd;
            text-align: center;
            margin-top: 30px;
            background-color: #2e2d2d;
            padding: 40px;
            border-radius: 20px;
        }
        
        nav {
            box-shadow: 6px 6px 29px -4px rgba(0, 0, 0, 0.75);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
            <form class="form-inline my-2 my-lg-0">

                <div class="log">
                    <a href="logout.php">logout</a>
                </div>
            </form>
        </div>
    </nav>
    <?php
            if(isset($_GET['mes'])){
                echo $_GET['mes'];
            }

        ?>
    

</body>
<html>