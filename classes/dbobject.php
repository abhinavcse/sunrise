<?php

class dbobject
{
      public $data;   
      function calculate($a,$b)
    {
        $this->data = $a*$b;
        
        return $this->data;      
    }
    
    function getUserData()
    {
        global $database;
        $result=$database->query("SELECT * FROM `users`");
        while($fetch=mysqli_fetch_array($result))  
            {
         print_r($fetch);   
            }   
    }  
}
$dbobject= new dbobject();


?>