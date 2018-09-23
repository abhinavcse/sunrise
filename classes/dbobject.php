<?php

class dbobject
{
    public $email;public $name;public $pwd;
    function create()
    {
        global $database;
        return $database->query("insert into `users`(`email`,`uname`,`password`)
         values('".$this->email."','".$this->name."','".$this->pwd."')"); 
    } 
    function redirect($page)
    {
        echo"<script>location.href='".$page."';</script>";
    } 
    
}
$dbobject= new dbobject();


?>