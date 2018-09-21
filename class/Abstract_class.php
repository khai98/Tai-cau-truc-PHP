<?php
/**
 * Created by PhpStorm.
 * User: hoangkhai
 * Date: 9/20/18
 * Time: 9:33 PM
 */
require (__DIR__."/../database/database.php");

abstract class Abstract_class
{
    protected $sql;
    protected $conn;
    protected $table;

    public function __construct($table)
    {
        $database = new Database();
        $this->conn = $database->connect('root', 'root', 'libary_app');
        $this->table = $table;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM " . $this->table;
        $query = $this->conn->query($sql);
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

    public function addCategories($name)
    {
        $sql = "INSERT INTO category (name) VALUES ('$name') ";
        $query = $this->conn->query($sql);
        return $query;
    }

    public function delete($id)
    {
        $sql = " DELETE FROM category WHERE id = $id ";
        $this->conn->query($sql);
    }

    public function update($id,$name)
    {
        $sql = "UPDATE category SET name='$name' WHERE id = $id ";
        $this->conn->query($sql);

    }

    public function getCategoryById($id)
    {
        $sql = "SELECT * FROM 	category WHERE id = $id ";
        $query = $this->conn->query($sql);
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

}