<?php
namespace AHT\Core;
    
    class Model
    { 
        //lay gia tri va thuoc tinh cua model
        public function GetProperties()
        {
            $arr = get_object_vars($this);
            return $arr;
        }
    }
?>