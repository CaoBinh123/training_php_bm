<?php
namespace Controllers;

use Core\Controller;
use Models\TaskModel;
use Models\TaskRepository;

class taskController extends Controller
{
    private $taskReponsitory;
    private $task;

    public function __construct()
    {
        $this->task = new TaskModel();
        $this->taskReponsitory = new TaskRepository($this->task);
    }

    public function index()
    {
        $d['tasks'] = $this->taskReponsitory->getAll();
        $this->set($d);
        $this->render('index');
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            $this->task->setTitle(Controller::secure_input($_POST['title']));
            $this->task->setDescription(Controller::secure_input($_POST['description']));
            if ($this->taskReponsitory->create()) {
                header("Location: " . WEBROOT . "Task/index");
            }
        }
        $this->render('create');
    }

    public function update($id)
    {
        if (isset($_POST['submit'])) {
            $this->task->setTitle(Controller::secure_input($_POST['title']));
            $this->task->setDescription(Controller::secure_input($_POST['description']));
            if ($this->taskReponsitory->update($id)) {
                header("Location: " . WEBROOT . "Task/index");
            }
        }
        $d['task'] = $this->taskReponsitory->getById($id);
        $this->set($d);
        $this->render('update');
    }

    public function delete($id)
    {
        if ($this->taskReponsitory->delete($id)) {
            header("Location: " . WEBROOT . "Task/index");
        }
    }
}
