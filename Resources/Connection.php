<?php
$conn = mysql_connect("127.0.0.1","root","","ruva restaurant");
if(!$conn){
    die('Could not connect: '.mysql_error());
}
else
{
echo "";
}

mysql_select_db("ruva restaurant", $conn);
session_start();
if(!empty($_POST['email'])){
    $query = mysql_query("SELECT * FROM login where email = '$_POST[email]' AND password = '$_POST[password]'") or die(mysql_error());
    $row = mysql_fetch_array($query) or die(mysql_error());
    if(!empty($row['email']) AND !empty($row['password']))
    {
        if($_SESSION['email'] = $row['password']){
        header("Location:Main-Menu.html");
        }
    
    else if(empty($row['email']) AND empty($row['password']))
    {
        header("Location:Invalid Details.html");
    }
    else {
        echo "Wrong Username or password";
    }
}
}