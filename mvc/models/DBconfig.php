<?php
class Database
{
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'mvc';

    private $conn = NULL;
    private $result = NULL;

    public function connect()
    {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            echo "Could not connect to database";
            exit();
        } else {
            mysqli_set_charset($this->conn, 'utf8');
        }
        return $this->conn;
    }

    public function execute($sql)
    {
        $this->result = $this->conn->query($sql);
        return $this->result;
    }

    public function getTable($tableName)
    {
        $sql = "SELECT * FROM $tableName";
        $this->execute($sql);
        if ($this->result) {
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }

    public function getData()
    {
        if ($this->result) {
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }

    public function getAllData($table)
    {
        $sql = "SELECT * FROM $table";
        $this->execute($sql);
        if ($this->num_rows() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getData()) {
                $data[] = $datas;
            }
        }
        return $data;
    }

    public function getAllDataById($table, $id)
    {
        $sql = "SELECT * FROM `sanpham` WHERE `maloai` = $id";
        $this->execute($sql);
        if ($this->num_rows() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getData()) {
                $data[] = $datas;
            }
        }
        return $data;
    }

    public function getAllDataLimit($table,$num)
    {
        $sql = "SELECT * FROM $table limit $num";
        $this->execute($sql);
        if ($this->num_rows() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getData()) {
                $data[] = $datas;
            }
        }
        return $data;
    }

    public function num_rows()
    {
        if ($this->result) {
            $num = mysqli_num_rows($this->result);
        } else {
            $num = 0;
        }
        return $num;
    }
}
