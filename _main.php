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
<div class="grid-container">
    <?php
        $upit="SELECT * FROM products";
        $rez=$db->query($upit);
        while($red=$db->fetch_object($rez))
            {
                echo "  <div class='item'>";
                echo "<a href='#'>";
                $slika=(file_exists("images/$red->id.jpg"))?"images/$red->id.jpg":"images/1.jpg";
                echo  "<img src='$slika'>";
                echo "<h2>$red->name</h2>";
                echo "<p>$red->description</p>";
                echo " </a>  </div> ";
            }
    ?>         
    </div> 