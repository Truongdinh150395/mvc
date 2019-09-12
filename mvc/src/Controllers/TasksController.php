<?php
    namespace AHT\Controllers;
    use AHT\Core\Controller;
    use AHT\Models\Taskmodel;
    use AHT\Models\TaskRepository;
    

class TasksController extends Controller
{
    public $task;
    public $TaskRepository;
    public function __construct()
    {
        $this->task = new Taskmodel();
        $this->TaskRepository = new TaskRepository($this->task);
    }
    public function index()
    {
 //   echo "ss"; die();
        //$tasks = new Task();

        $d["tasks"] = $this->TaskRepository->ShowAll();
        
        $this->set($d);
        $this->render("index");
    }

   public function Create()
    {
        if (isset($_POST["title"]))
        {
            $this->task ->SetTitle($_POST["title"]);
            $this->task ->SetDescription($_POST["description"]);
            // $this->task->SetCreatedAt(date('Y-m-d H:i:s'));
            // $this->task->SetUpdatedAt(date('Y-m-d H:i:s'));

            if ($this->TaskRepository->Add($this->task))
            {
                header("Location: http://localhost:8080/mvc/");
            }
        } else 
        {
            $this->render("create");
        }

        //     $task= new Task();

        //     if ($task->create($_POST["title"], $_POST["description"]))
        //     {
        //         header("Location: " . WEBROOT . "tasks/index");
        //     }
        // }

        // $this->render("create");
    }

    function Edit($id)
    {
       
        //$task= new Task();

        $d["task"] = $this->TaskRepository->Show($id);
        // var_dump($d);
        // die;

        if (isset($_POST["title"]))
        {
            $this ->task ->SetTitle($_POST["title"]);
            $this->task ->SetDescription($_POST["description"]);
            // $this->task->SetCreatedAt(date('Y-m-d H:i:s'));
            // $this->task->SetUpdatedAt(date('Y-m-d H:i:s'));
            if ($this->TaskRepository->Edit($id))
            {
                header("Location: http://localhost:8080/mvc/");
            }
                
        }
        $this->set($d);
        $this->render("edit");
      
    }

    function Delete($id)
    {
        
        
        if ($this->TaskRepository->Delete($id))
        {
            header("Location:  http://localhost:8080/mvc/");
        }
    }
}
?>