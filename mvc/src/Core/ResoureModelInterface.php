<?php
    namespace AHT\Core;
    
    interface ResoureModelInterface {

        public function _init($table, $id, $model);
        public function Save($model);
        public function Delete($model);
    
    }
?>