<?php
session_start();
require_once("class.php");
require_once("functions.php");
function login()
{
    if(isset($_SESSION['id']) and isset($_SESSION['name']) and isset($_SESSION['status']))
        return true;
    else
     return false;
}

function destroysession()
{
    session_unset();
    session_destroy();
}
function createsession($red)
{
    $_SESSION['name']="$red->name $red->surname";
    $_SESSION['id']=$red->id;
    $_SESSION['status']=$red->status;

}

?>