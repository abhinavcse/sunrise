<?php

class database
{
    private $connection; 
       
    public function __construct()
    {
        $this->connection=mysqli_connect("localhost","root","","sunrise");
    }   

    public function query($sql)
    {
       return  mysqli_query($this->connection,$sql);
    }
      
}
$database= new database();


?>