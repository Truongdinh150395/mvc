<?php
namespace AHT\Models;
use AHT\Core\Model;
    class Taskmodel extends Model
    {
        public $title;
        public $description;
        // public $created_at;
        // public $updated_at;

        public function __construct()
        {
            $this->title ="";
            $this->description = "";
            // $this->created_at = "";
            // $this->updated_at = "";
        }

        public function SetTitle($title)
        {
            $this->title = $title;
        }
        public function GetTitle()
        {
            return $this->title;
        }
        public function SetDescription($description)
        {
            $this->description = $description;
        }
        public function GetDescription()
        {
            return $this->description;
        }
        // public function SetCreatedAt($created_at)
        // {
        //     $this->created_at = $created_at;
        // }
        // public function GetCreatedAt()
        // {
        //     return $this->created_at;
        // }
        // public function SetUpdatedAt($updated_at)
        // {
        //     $this->updated_at = $updated_at;
        // }
        // public function GetUpdatedAt()
        // {
        //     return $this->updated_at;
        // }
    }
?>