<?php
/**
 * here ara all the database functions
 */
class db
{

  /**
  *logig in to the database
  */
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

/**
*read function
*/

public function Read($table, $columns = '*', $where = '1')
    {
        $rows = [];
        $query = sprintf('SELECT %2$s FROM `%1$s` WHERE %3$s', $table, $columns, $where);
        $sth = $this->db->prepare($query);
        $sth->execute();

        while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $rows[] = $row;
        }
        return $rows;
    }


public function rowCounter($table, $columns = '*')
    {
        $rows = [];
        $query = sprintf('SELECT COUNT(`%2$s`) FROM %1$s', $table, $columns);
        $sth = $this->db->prepare($query);
        $sth->execute();

        while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $rows[] = $row;
        }
        return $rows;
    }
  }
 ?>
