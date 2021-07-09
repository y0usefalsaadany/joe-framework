<?php

class Database extends DbConnection{
/*
    public $table = 'users';
    private $conn;
    function __construct()
    {
        $dbconn = new DbConnection();
        $this->conn = $dbconn->connect();
    }
    function select($table){
        $sql = "SELECT * FROM " . $table ;
        $query = mysqli_query($this-> conn, $sql);
        return $query;
    }
    function insert($table,$value1,$value2){
        $sql = "INSERT INTO " . $table . "(name,email) VALUE ('$value1','$value2')";
        $query = mysqli_query($this-> conn, $sql);
        if ($query){
            echo '<h5 class="alert alert-success text-center">Successfully added</h5>';
        }
        return $query;
    }
    function delete($table,$id){
        $sql = "SELECT * FROM " . $table ;
        $query = mysqli_query($this-> conn, $sql);
        $sql = "DELETE FROM users WHERE id='$id'";
        $query = mysqli_query($this-> conn, $sql);
        return $query;
    }

    function update($table,$value1,$value2,$id){
        $sql = "UPDATE " . $table ." SET name='$value1', email='$value2 WHERE id='$id' ";
        $query = mysqli_query($this-> conn, $sql);
        if ($query){
            echo '<h5 class="alert alert-success text-center">Successfully updated</h5>';
            header('refresh:3;url= index');
        }
        return $query;
    } */
}