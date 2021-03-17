<?php
include_once('./header.php');
?>

<!doctype html>
<html lang="en">


<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>


<h1>I created this page first and then implemented the add show button on the home page. The home page method is better.</h1>

<form action="show_create.php" method="POST">
    <div class="login-wrap">
        <div class="login-html">
            <h2 id="addShowHeader">Add a show</h2>
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Title and Rating</label>
            <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Description</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Title</label>
                        <input id="user" type="text" class="input" name="title">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Rating</label>
                        <input id="pass" type="text" class="input" name="rating">
                    </div>
                    <div class="group">
                        <!-- <input type="submit" class="button" value="Sign In"> -->
                    </div>
                    <div class="hr"></div>
                </div>
                <div class="for-pwd-htm">
                    <div class="group">
                        <label for="user" class="label">Description</label>
                        <textarea id="user" type="text" class="input" name="description"></textarea>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Add Show">
                    </div>
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </div>
</form>

<style>
    body {
        margin: 0;
        color: grey;
        background: white;
        background-size: cover;
        /* font: 600 16px/18px 'Open Sans', sans-serif; */
    }

    h1 {
        margin-top: 100px;
        text-align: center;
        font-size: 2em;
    }



    :after,
    :before {
        box-sizing: border-box
    }

    .clearfix:after,
    .clearfix:before {
        content: '';
        display: table
    }

    .clearfix:after {
        clear: both;
        display: block
    }

    a {
        color: inherit;
        text-decoration: none
    }

    .login-wrap {
        width: 100%;
        margin: auto;
        margin-top: 100px;
        /* max-width: 510px;
        min-height: 510px; */
        max-width: 500px;
        min-height: 400px;
        position: relative;
        background-size: cover;
        box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
        border-radius: 10px;
    }

    .login-html {
        width: 100%;
        height: 100%;
        position: absolute;
        padding: 40px 70px 50px 70px;
        background: rgba(1, 1, 1, 0);
    }

    .login-html .sign-in-htm,
    .login-html .for-pwd-htm {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        -webkit-transform: rotateY(180deg);
        transform: rotateY(180deg);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: all .4s linear;
        transition: all .4s linear;
    }

    .login-html .sign-in,
    .login-html .for-pwd,
    .login-form .group .check {
        display: none;
    }

    .login-html .tab,
    .login-form .group .label,
    .login-form .group .button {
        text-transform: uppercase;

        /* color: black; */
    }

    .login-html .tab {
        font-size: 22px;
        margin-right: 15px;
        padding-bottom: 5px;
        margin: 0 15px 10px 0;
        display: inline-block;
        border-bottom: 2px solid transparent;
    }

    .login-html .sign-in:checked+.tab,
    .login-html .for-pwd:checked+.tab {
        color: black;
        border-color: #1161ee;
    }

    .login-form {
        min-height: 345px;
        position: relative;
        -webkit-perspective: 1000px;
        perspective: 1000px;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .login-form .group {
        margin-bottom: 15px;
    }

    .login-form .group .label,
    .login-form .group .input,
    .login-form .group .button {
        width: 100%;
        color: black;
        display: block;
    }

    /* text boxes */
    .login-form .group .input,
    .login-form .group .button {
        border: none;
        padding: 15px 20px;
        border-radius: 25px;
        background: rgba(221, 221, 221, .5);


    }

    .login-form .group input[data-type="password"] {
        text-security: circle;
        -webkit-text-security: circle;
    }

    .login-form .group .label {
        color: #aaa;
        font-size: 12px;
    }

    .login-form .group .button {
        color: white;
        background: #1F9D8C;
    }

    .login-form .group label .icon {
        width: 15px;
        height: 15px;
        border-radius: 2px;
        position: relative;
        display: inline-block;
        background: rgba(255, 255, 255, .1);
    }

    .login-form .group label .icon:before,
    .login-form .group label .icon:after {
        content: '';
        width: 10px;
        height: 2px;
        background: #fff;
        position: absolute;
        -webkit-transition: all .2s ease-in-out 0s;
        transition: all .2s ease-in-out 0s;
    }

    .login-form .group label .icon:before {
        left: 3px;
        width: 5px;
        bottom: 6px;
        -webkit-transform: scale(0) rotate(0);
        transform: scale(0) rotate(0);
    }

    .login-form .group label .icon:after {
        top: 6px;
        right: 0;
        -webkit-transform: scale(0) rotate(0);
        transform: scale(0) rotate(0);
    }

    .login-form .group .check:checked+label {
        color: #fff;
    }

    .login-form .group .check:checked+label .icon {
        background: #1161ee;
    }

    .login-form .group .check:checked+label .icon:before {
        -webkit-transform: scale(1) rotate(45deg);
        transform: scale(1) rotate(45deg);
    }

    .login-form .group .check:checked+label .icon:after {
        -webkit-transform: scale(1) rotate(-45deg);
        transform: scale(1) rotate(-45deg);
    }

    .login-html .sign-in:checked+.tab+.for-pwd+.tab+.login-form .sign-in-htm {
        -webkit-transform: rotate(0);
        transform: rotate(0);
    }

    .login-html .for-pwd:checked+.tab+.login-form .for-pwd-htm {
        -webkit-transform: rotate(0);
        transform: rotate(0);
    }

    .hr {
        height: 2px;
        margin: 60px 0 50px 0;
        background: rgba(255, 255, 255, .2);
    }

    .foot-lnk {
        text-align: center;
    }
</style>




<?php include_once('./footer.php'); ?>