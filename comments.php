<?php
require_once("class.php");
require_once("functions.php");
$db=new Baza();
$db->connect();
$poruka="";
if(isset($_GET['id']) AND isset($_GET['funkcija']))
{
  $id=$_GET['id'];
  $funkcija=$_GET['funkcija'];
  if($funkcija=="approve") $upit="UPDATE comments SET approved=1 WHERE id={$id}";
  else $upit="DELETE FROM comments WHERE id={$id}";
  $db->query($upit);
}
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
<?php
   include("_header.php");
?>
   <div class="pages">
      <h1>Comments</h1>
   </div>
<?php	
		$upit="SELECT * FROM comments WHERE approved=0 ORDER BY vreme DESC";
		$rez=$db->query($upit);
    while($red=$db->fetch_object($rez))
    {
      echo "<div class='pages'>";
      echo "$red->vreme<br>";
      echo "$red->ime<br>";
      echo "$red->komentar<br>";
      echo "<a href='comments.php?id=$red->id&funkcija=approve'>Approve</a> | ";
      echo "<a href='comments.php?id=$red->id&funkcija=delete'>Delete</a>";
      echo "</div><br><br>";
    }
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php
   include("_footer.php");
?>
   </body>
</html>