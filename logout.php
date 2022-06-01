<?php
    session_start();
    session_destroy();
    header("location:login.php?mes=<h1>You are log out.</h1>")

?>