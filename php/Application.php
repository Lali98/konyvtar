<?php

include_once('debug.php');

class Application
{
    private $dbParams = array(
        'servername' => 'localhost',
        'username' => 'root',
        'password' => 'Passw123',
        'dbname' => 'library'
    );
    private $connection;
    private $connectionLive = false;

    public function __construct()
    {
        $this->connectDb();
    }

    protected function isConnectionLive(): bool
    {
        return $this->connectionLive;
    }

    private function connectDb()
    {
        $this->connection = new mysqli($this->dbParams['servername'], $this->dbParams['username'], $this->dbParams['password'], $this->dbParams['dbname']);
        if ($this->connection->connect_error)
        {
            die('Connection failed: ' . $this->connection->connect_error);
        }
        $this->connectionLive = true;
    }

    protected function getResultList($sql): array
    {
        $resultList = array();
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
                $resultList[] = $row;
            }
        }
        else
        {
            $this->writeLog('Nem talált értéket a lekérdezés', $sql);
        }
        return $resultList;
    }

    protected function getSingleResult($sql)
    {
        $resultList = $this->getResultList($sql);
        if (!$resultList)
        {
            $this->writeLog('Nem talált értéket a lekérdezés', $sql);
            return array();
        }
        else
        {
            return $resultList[0];
        }
    }

    public function writeLog($str, $sql = null)
    {
        $logStr = $str;
        if ($sql !== null)
        {
            $logStr .= '-- SQL QUERY: '.$sql;
        }

        $log = fopen('log/log.txt', 'a');
        fwrite($log, $logStr);
        fclose($log);
    }

    protected function isValidId($id): bool
    {
        if (is_int($id) && $id > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    protected function deleteRecordById($table, $id)
    {
        return $this->connection->query("delete form $table where id = $id");
    }
}


