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
    <title>Products</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include("_header.php")
    ?> 
<?php
$upit="SELECT * FROM products ORDER by id DESC";
$rez=$db->query($upit);
while($red=$db->fetch_object($rez))
{
    echo "<div class='pages'>";
    echo "<div class='products'>";
    $slika=(file_exists("images/$red->id.jpg"))?"images/$red->id.jpg":"images/1.jpg";
    echo  "<img src='$slika'>";
    echo "<h2>".$red->name."</h2>";
    echo "<p>".$red->description."</p>";
    echo "</div>";
    echo "</div>";
}
?>
<?php
    include("_footer.php");
 ?>
</body>
</html>