<?php
namespace AHT\Models;
use AHT\Models\TaskResoureModel;
use AHT\Core\ResoureModel;
use AHT\Models\Taskmodel;

    class TaskRepository
    {
        public $TaskResoureModel;
        public function __construct(Taskmodel $model)
        {
            $this->TaskResoureModel = new TaskResoureModel($model);
        }

        public function Add($model)
        {
            return $this->TaskResoureModel->Save($model);
        }
        public function Edit($id)
        {
            return $this->TaskResoureModel->Save($id);
        }
        public function Delete($id)
        {
            return $this->TaskResoureModel->Delete($id);
        }
        public function Show($id)
        {
            return $this->TaskResoureModel->Show($id);
        }
        public function ShowAll()
        {
            return $this->TaskResoureModel->ShowAll();
        }
    }
?>