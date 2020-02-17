<?php

require_once("class.php");
require_once("functions.php");
$db=new Baza;
$db->connect();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citrus</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
    <div class="wrapper">
        <div class="name">
            <h1>Citrus </h1>
            <h2>Company of selling citrus</h2>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="#">Contact</a></li>
               <!-- <li><a href="login.php">Login</a></li> -->
                <?php
                if (login())
                {
                    //echo "<li><a href='prijava.php?odjava' title='Odjava'>{$_SESSION['ime']} ({$_SESSION['status']})</a></li>";
                    echo "<li><a href='#'>{$_SESSION['name']} ({$_SESSION['status']})</a>";
					echo "<ul>";
					if($_SESSION['status']=="Admin")
					
                        echo "<li><a href='comments.php'>Coments</a></li>";
                        echo "<li><a href='login.php?signout'>Sign Out</a></li>";    	
                        echo	"</ul>";
                        echo "</li>";
                }
                    else
                        {
                            echo "<li><a href='login.php'>Login</a></li>";
                        }
                ?>
            </ul>  
        </nav>
    </div>
</header>