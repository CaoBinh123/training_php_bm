<?php
namespace Core;

use Config\Database;
use Core\ResourceModelInterface;
use Core\Model;

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
        $model = $this->model->getProperties();
        $sql = "INSERT INTO " . $this->table;
        $sql .= " (`".implode("`, `", array_keys($model))."`)";
        $sql .= " VALUES (:".implode(", :", array_keys($model)).") ";
        $result = Database::getBdd()->prepare($sql);
        $result = $result->execute($model);
        return $result; // thuc thi dc se tra ve 1
        //return Database::getBdd()->lastInsertId();// tra ve id cua ban ghi vua ms insert;
    }

    public function update($id)
    {
        $model = $this->model->getProperties();
        $sql = "UPDATE $this->table SET ";
        foreach ($model as $key=>$value) {
            $sql .= "$key = :$key" . (next($model) ? ", " : "");
        }
        $sql .= " WHERE $this->id = $id";
        $result = Database::getBdd()->prepare($sql);
        $result = $result->execute($model);
        return $result;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE $this->id = $id";
        $result = Database::getBdd()->query($sql);
        return $result;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM " . $this->table;
        $result = Database::getBdd()->query($sql);
        return $result->fetchAll();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE $this->id = $id";
        $result = Database::getBdd()->query($sql);
        return $result->fetch();
    }
}
