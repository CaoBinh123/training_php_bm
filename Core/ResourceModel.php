<?php
namespace Core;

use Config\Database;
use Core\ResourceModelInterface;
use Core\Model;
use Models\TaskModel;

class ResourceModel implements ResourceModelInterface
{
    private $table = null;
    private $id = null;
    private $model = null;

    public function _init($table, $id, $model)
    {
        $this->table = $table;
        $this->id = $id;
        $this->model = $model;
    }

    public function create()
    {
        require_once "../bootstrap.php";
        $this->model->setTitle(Controller::secure_input($_POST['title']));
        $this->model->setDescription(Controller::secure_input($_POST['description']));
        $entityManager->persist($this->model);
        $entityManager->flush();
        return true;
    }

    public function update($id)
    {
        require_once "../bootstrap.php";
        $result =  $entityManager->getRepository(TaskModel::class)->find($id);
        $result->setTitle(Controller::secure_input($_POST['title']));
        $result->setDescription(Controller::secure_input($_POST['description']));
        $entityManager->flush();
        return true;
    }

    public function delete($id)
    {
        require_once "../bootstrap.php";
        $result =  $entityManager->find(TaskModel::class, $id);
        if ($result != null) {
            $entityManager->remove($result);
            $entityManager->flush();
            return true;
        } else {
            die("ID not exist !");
        }
    }

    public function getAll()
    {
        require_once "../bootstrap.php";
        $result = $entityManager->getRepository(TaskModel::class)->findAll();
        return $result;
    }

    public function getById($id)
    {
        require_once "../bootstrap.php";
        $result =  $entityManager->getRepository(TaskModel::class)->find($id);
        return $result;
    }
}
