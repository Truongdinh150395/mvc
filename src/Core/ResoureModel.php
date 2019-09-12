<?php
namespace AHT\Core;
use AHT\Core\ResoureModelInterface;
use AHT\Config\Database;
use AHT\Core\Model;
    class ResoureModel implements ResoureModelInterface
    {
        public function _init($table, $id, $model)
        {
            $this->table = $table;
            $this->id = $id;
            $this->model = $model;
        }
         public function Save($model)
         {
            $arr = $this->model->GetProperties();
            $keys = "";
            $values = "";
            unset($arr['$id']);
            foreach ($arr as $key => $value)
             {
                $keys .= $key .",";
                $values .= "'" .$value ."', ";
             }
             $sql = "INSERT INTO " .$this->table. " (".trim($keys,", ").") VALUES (".trim($values,", "). ")";
            //  echo $sql;
            //  die;
             $req = Database::getBdd()->prepare($sql);
             return $req->execute(['$id']);

         }
         public function Delete($id)
         {
            $sql = "DELETE FROM " .$this->table." WHERE " .$this->id."=" .$id;
            // echo $sql;
            // die;
            $req = Database::getBdd()->prepare($sql);
            return $req->execute();
            
         }
         public function Show($id)
         {
            $sql = "SELECT * FROM " .$this->table. " WHERE " .$this->id. "=" .$id;
            // echo $sql;
            // die;
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetch();
         }

         public function ShowAll()
         {
            $sql = "SELECT * FROM " .$this->table;
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll();
         }
         public function Edit($id)
         {
             $arr = $this->model->GetProperties();
             $update = "";
             foreach ($arr as $key => $value)
             {
                $update .= $key . " = ' " .$value. " ', ";
             }
             $sql = "UPDATE " .$this->table. " SET " .trim($update," ,") ." WHERE ".$this->id. " = " .$id;
            //  echo $sql;
            //  die;
             
             $req = Database::getBdd()->prepare($sql);
             //return $req->execute($id);

             return $req->execute(['$id']);

         }
    }
?>