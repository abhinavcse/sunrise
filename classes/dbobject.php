<?php

class dbobject
{
    public $email;public $name;public $pwd;public $stmt;public $page;
    function create()
    {
        global $database;
        return $database->query("insert into `users`(`email`,`uname`,`password`)
         values('".$this->email."','".$this->name."','".$this->pwd."')"); 
    } 
    function redirect()
    {
        echo"<script>location.href='".$this->page."';</script>";
    } 
    public function auth()
    {
        global $database;
        $this->stmt=$database->query("SELECT * FROM `users` WHERE `email`='".$this->email."' and 
        `password`='".$this->pwd."'"); 
        return $database->count();
        
    }
    
}
$dbobject= new dbobject();


?>