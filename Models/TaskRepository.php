<?php
namespace Models;

use Models\TaskResourceModel;
use Models\TaskModel;

class TaskRepository
{
    protected $taskResourceModel;
    public function __construct(TaskModel $task)
    {
        $this->taskResourceModel = new TaskResourceModel($task);
    }

    public function create()
    {
        return $this->taskResourceModel->create();
    }

    public function update($id)
    {
        return $this->taskResourceModel->update($id);
    }

    public function delete($id)
    {
        return $this->taskResourceModel->delete($id);
    }

    public function getById($id)
    {
        return $this->taskResourceModel->getById($id);
    }

    public function getAll()
    {
        return $this->taskResourceModel->getAll();
    }
}
