<?php

class PDOUtil
{
    public static function CreateConnection()
    {
        $con = new PDO("mysql:host=localhost; dbname=DB_NAME", "USERNAME", "PASSWORD");
        $con->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    }

    public static function CloseConnection(PDO $con)
    {
        if ($con != null) {
            $con = null;
        }
    }
}
