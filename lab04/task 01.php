<?php
$username= $_post ['username'];
$password= $_post ['password'];
if($username ==||$password==""|| $username<=2|| $password>=8)
{
    echo "invalid";
}
else
{
    echo "good"
}
?>