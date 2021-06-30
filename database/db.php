<?php

class DB
{
    private $db;
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $name = 'alfatravel';

    public function __construct()
    {
        try {
         $this->db = new PDO(sprintf("mysql:host=%s;dbname=%s", $this->host, $this->name), $this->user, $this->pass);
         $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function Read($table, $columns = '*', $where = '1')
    {
        $rows = [];
        $query = sprintf('SELECT %2$s FROM `%1$s` WHERE %3$s', $table, $columns, $where);
        $sth = $this->db->prepare($query);
        $sth->execute();

        while($row = $sth->fetch(PDO::FETCH_ASSOC))
        {
            $rows[] = $row;
        }
        return $rows;
    }

    public function Create($table, $columns,$values)
    {
        $query = sprintf('INSERT INTO %1$s (%2$s) VALUES (%3$s)', $table, $columns, $values);
        $sth = $this->db->prepare($query);
        $sth->execute();
        return true;
    }

    public function Update($table, $set, $where = '1')
    {
        $query = sprintf('UPDATE %1$s SET %2$s WHERE %3$s', $table, $set, $where);
        $sth = $this->db->prepare($query);
        $sth->execute();
        return true;
    }

    public function Delete($table, $where)
    {
        $query = sprintf('DELETE FROM %1$s WHERE %2$s', $table, $where);
        $sth = $this->db->prepare($query);
        $sth->execute();
        return true;
    }
}
  
$db = new DB;
