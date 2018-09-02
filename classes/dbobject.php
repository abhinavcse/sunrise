<?php

class dbobject
{
      public $data;   
      function calculate($a,$b)
    {
        $this->data = $a*$b;
        
        return $this->data;      
    }  
}
$dbobject= new dbobject();


?>