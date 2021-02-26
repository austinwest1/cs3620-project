<?php
require_once("sessioncheck.php");
?>

<!-- I am protected -->

<!-- <a href="logout.php">Logout</a> -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <header>
        <h1>Very Official Website</h1>
    </header>

    <h3>You have successfully logged in! </h2><br />
        <p>Click <a href="logout.php">here </a>to logout.</p>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

<footer id="foot">
    Austin West
</footer>

<style>
    html {
        height: 100%;
        background-color: azure;
    }

    header h1 {
        margin: auto;
        text-align: center;
        background-color: rgb(75, 118, 197);
        color: white;
    }

    body {
        width: 1000px;
        min-height: 100%;
        margin-left: auto;
        margin-right: auto;
    }



    footer#foot {
        bottom: 0px;
        margin-left: auto;
        margin-right: auto;
        position: fixed;
        text-align: center;
        background-color: rgb(75, 118, 197);
        width: 1000px;
        padding: 10px;
        color: white;
    }
</style>

</html>