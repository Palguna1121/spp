<?php

class Database
{
    protected $conn;
    protected PDOStatement $stmt;

    public function __construct()
    {
        $host = DB_HOST;
        $db_name = DB_NAME;
        $user = DB_USER;
        $pass = DB_PASS;

        $conn = new PDO("mysql:host=$host;dbname=$db_name",$user,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_PERSISTENT, true);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->conn = $conn;
    }

    public function __destruct()
    {
        $this->conn = null;
    }

    public function bind($param, $value)
    {
        $type = PDO::PARAM_STR;

        $gettedType = strtolower(gettype($param));

        if($gettedType == 'integer'){
            $type = PDO::PARAM_INT;
        }

        if($gettedType == 'null'){
            $type = PDO::PARAM_NULL;
        }

        if($gettedType == 'boolean'){
            $type = PDO::PARAM_BOOL;
        }

        $this->stmt->bindValue($param, $value, $type);
        return $this;
    }

    public function query($q)
    {
        $this->stmt = $this->conn->prepare($q);
        return $this;
    }
    
    public function execute()
    {
        $this->stmt->execute();
    }

    public function get()
    {
        $this->execute();
        return $this->stmt->fetchAll();
    }

    public function flat()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public function flatFirst()
    {
        $this->execute();
        return $this->stmt->fetchColumn();
    }

    public function first()
    {
        $this->execute();
        return $this->stmt->fetch();
    }

    public function rowCount()
    {
        $this->execute();
        return $this->stmt->rowCount();
    }

    public function beginTransaction()
    {
        $this->conn->beginTransaction();
    }

    public function rollback()
    {
        $this->conn->rollback();
    }

    public function commit()
    {
        $this->conn->commit();
    }
}