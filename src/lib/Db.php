<?php

namespace lib;

use PDO;

use core\Controller;

class Db
{
    protected $db;


    public function __construct()
    {
            $config = require_once '../config/db.php';
            $db = $this->db = new PDO('mysql:host=mysql;dbname=Academy', 'root', 'rootpass');
    }

    public function query($sql)
    {
        $query = $this->db->query($sql);
        return $query;
    }

    public function prepare($sql) {
        $prepare = $this->db->prepare($sql);
        return $prepare;
    }

    public function row($sql)
    {
        $result = $this->query($sql);
        return $result->fetchall(PDO::FETCH_ASSOC);
    }

}