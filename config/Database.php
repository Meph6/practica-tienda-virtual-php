<?php 

class Database
{
    public static function conexionDB()
    {
        $db = new mysqli('host', 'user', 'pwd', 'tienda_master');
        $db->query("SET NAMES utf-8");

        return $db;
    }
}
