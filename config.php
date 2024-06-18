<?php

class BDConnection
{
    public static $type = 'mysql';
    public static $server = 'web.cti.ugal.ro';
    public static $db = 'ds220';
    public static $port = '3306';
    public static $charset = 'utf8mb4';
    public static $username = 'ds220';
    public static $password = 'wbasyq78';
    public static $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    public static $pdo;

    public static function getConn()
    {
        $dsn = self::$type . ":host=" . self::$server . ";dbname=" . self::$db . ";port=" . self::$port . ";charset=" . self::$charset;
        try {
            if (!BDConnection::$pdo) {
                BDConnection::$pdo = new PDO($dsn, BDConnection::$username, BDConnection::$password, BDConnection::$options);
            }
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), $e->getCode());
        }

        return BDConnection::$pdo;
    }

    public static function runSQL(string $sql, $arguments = null)
    {
        if (!$arguments) {
            return BDConnection::getConn()->query($sql);
        }
        $statement = BDConnection::getConn()->prepare($sql); // If still running prepare statement
        $statement->execute($arguments);

        return $statement;
    }

    public static function generateTable($th, $td) {



        echo '<table><tr>';
        foreach ($th as $header) {
        echo '<th>' . $header . '</th>';
        }
        echo '</tr>';
        foreach ($td as $key => $data) {



        echo '<tr>';
        foreach ($data as $key1 => $field) {



        echo '<td>' . $field . '</td>';
        }
        echo '</tr>';
        }



        echo '</table>';
        }


}


