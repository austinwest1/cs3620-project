<?php
require_once('./header.php');
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="./css/login.css" rel="stylesheet">
    <title>Register</title>

</head>

<body>
    <header>
        <h1>Very Official Website</h1>
    </header>

    <h1 id="signup">Sign Up</h1>

    <form id="signupform" method="POST" action="user_insert.php">
        <div class="form-group">
            <label id="lbl" for="exampleInputEmail1">Email address/username</label>
            <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label id="lbl" for="firstname">First Name</label>
            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name">
        </div>
        <div class="form-group">
            <label id="lbl" for="lastname">Last Name</label>
            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label id="lbl" for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button id="submitbtn" type="submit" class="btn btn-primary">Submit</button>
    </form>


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
        width: 1000;
        min-height: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    h1#signup {
        padding-top: 40;
        text-align: center;
        color: grey;
    }

    form#signupform {
        width: 400;
        margin-left: auto;
        margin-right: auto;
        padding: 20;
        margin-top: 15;
        border-style: solid;
        border-color: grey;
        border-width: 2px;
        border-radius: 9px;
    }

    #lbl {
        float: right;
        padding-top: 10;
    }

    #submitbtn {
        margin-top: 20;
        text-align: center;
    }

    footer#foot {
        bottom: 0;
        margin-left: auto;
        margin-right: auto;
        position: fixed;
        text-align: center;
        background-color: rgb(75, 118, 197);
        width: 1000;
        padding: 10px;
    }
</style>

</html>