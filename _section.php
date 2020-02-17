<?php

require_once("class.php");
require_once("functions.php");
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
<section>
     <br>
     <br>
     <div class="pages">
         <h1>Comments</h1>
          <form action="index.php" method="post" >
            <input type="text" name="name" placeholder="Inesrt your name"/><br><br>
            <textarea name="komentar" id="komentar" cols="30" rows="10" placeholder="Comment"></textarea><br><br>
            <button>Save your comment</button>		
          </form><br>
   
    <?php
      if (isset($_POST['name']) and isset($_POST['komentar']))
      {
        $name=$_POST['name'];
        $komentar=$_POST['komentar'];
        if($name!="" and $komentar!="")
        {
            $upit="INSERT INTO comments (ime, komentar) VALUES ( '{$name}', '{$komentar}')";
            $rez=$db->query($upit);
            echo "Thank you for comment. Comment is sent for approval <br><br>";
        }
        else
           echo "Please fill out all fields";
      }
    ?>
    </div>
    
<?php
  $upit="SELECT * FROM comments WHERE approved=1";
  $rez=$db->query($upit);
  while($red=$db->fetch_object($rez))
  {
      echo "<div class='pages'>";
      echo "<div class='products'>";
      echo $red->ime."<br><br>";
      echo $red->komentar."<br><br>";
      echo $red->vreme."<br><br>";
      echo "</div>";
      echo "</div>";
}
?>

    </div>
  </section>
</body>
</html>