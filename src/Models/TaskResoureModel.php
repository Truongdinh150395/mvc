<?php
namespace AHT\Models;
use AHT\Core\ResoureModel;
use AHT\Models\Taskmodel;
    class TaskResoureModel extends ResoureModel
    {
        public function __construct(Taskmodel $model)
        {
            return $this->_init('tasks', 'id', $model);
        }
    }
?>