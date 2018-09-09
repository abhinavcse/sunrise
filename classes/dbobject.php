<?php

class dbobject
{
    function create($email,$name,$pwd)
    {
        global $database;
        return $database->query("insert into `users`(`email`,`uname`,`password`)
         values('$email','$name','$pwd')"); 
    } 
    function redirect($page)
    {
        echo"<script>location.href='".$page."';</script>";
    } 
    
}
$dbobject= new dbobject();


?>