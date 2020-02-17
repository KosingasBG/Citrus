<?php
//uključivanje sesije i povezivanje na bazu

require_once("class.php");
require_once("functions.php");
if(isset($_GET['signout']))
{
    destroysession();
}
$db=new Baza();
$db->connect();
$poruka="";
if(isset($_POST['email']) and isset($_POST['password']))
{   
    $email=$_POST['email'];
    $password=$_POST['password'];
    if($email!="" and $password!="")
    {
        $upit="SELECT * FROM users WHERE email='{$email}' ";
        $rez=$db->query($upit);
        if($db->num_rows($rez)>0)
        {
            $red=$db->fetch_object($rez);
            if($password==$red->password)
            {
                //ako je tačan email i password kreiranje sesije za koriniska
                $_SESSION['name']="$red->name $red->surname";
                $_SESSION['id']=$red->id;
                $_SESSION['status']="$red->status";
                $poruka="you have logged in successfully as <b>$red->name $red->surname</b>";   
            }
            else
            $poruka="Incorect password for user <b>$red->name $red->surname</b> ";
        }
        else
        $poruka="Incorect email: <b>$email</b> ";
    }
    else
    $poruka="Please fill out all fields";
}
else 
$poruka="Welcome "
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
<body >
    <?php
include("_header.php");
    ?>
    <br>
    <br>
    <div class="pages">
        <h1>Login</h1>
    <form action="login.php" method="post">
        <input type="text" name="email" id="email" placeholder="Enter your email"><br><br>
        <input type="password" name="password" id="password" placeholder="Enter your password">
         <br><br>
        <button>Login</button>
        <br>
        <br>
    </form>
        <?=$poruka?>
        <br>
        <br>
    </div>
<?php
    include("_footer.php");
 ?>
</body>
</html>