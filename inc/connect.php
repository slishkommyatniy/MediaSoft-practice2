<?php

class DataBase
{
    protected $connect;

    //connect to bd
    public function __construct()
    {
            $this->connect = new PDO("mysql:dbname=recipe_manager;host=localhost:3306", "root", "root");
    }

    //insert row
    public function insertRow($values = [])
    {
        $stmt = $this->connect->prepare('INSERT INTO users (`full_name`, `email`, `username`, `password`) VALUES ( ?, ?, ?, ?)');
        $stmt->execute($values);
    }

    public function query($stmt)  {
        return $this ->connect ->query($stmt);
    }

    public function SelectUsers(){
        $stmt = $this -> connect ->query('SELECT `id`, `full_name`, `email`,`username`,`password` FROM users');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function SelectImages(){
        $stmt = $this -> connect ->query('SELECT `name_image`,`username`,`name` FROM recipe');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function InsertRecipe($values = []){
        $statement = $this->connect->prepare('INSERT INTO recipe (`name`,`ingredients`,`recipe`,`username`,`name_image`) VALUES (?,?,?,?,?)');
        $statement->execute($values);
    }
    public function SelectRecipes(){
        $stmt = $this -> connect ->query('SELECT `name`,`Ingredients`,`recipe`,`username`,`name_image`,`id` FROM recipe');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function execute ($sql, $options){
        $stmt = $this->connect->prepare($sql);
        $stmt->execute($options);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }




}
