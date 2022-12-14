<?php

namespace dkaframework\database;

use PDO;
use dkaframework\database\interfaces\ConnectionInterfaces;

class Connection extends PDO implements ConnectionInterfaces {

    /**
     * @param $configuration array configuration array connection
     * @param $pdo_default_fetchmode int the fecth mode options
     * @param $error_mode int error mode options
     * @return PDO
     */
    public static function MariaDB(array $configuration, int $pdo_default_fetchmode = PDO::FETCH_ASSOC, int $error_mode = PDO::ERRMODE_SILENT) : PDO {
        /** ==============================
         * Mapping variable $Connector :
         * ---------------------------- */

        $db_user = $configuration['user'];
        $db_pass = $configuration['password'];
        $db_host = $configuration['host'];
        $db_name = $configuration['database'];
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE            => $error_mode, //turn on errors in the form of exceptions
            PDO::ATTR_DEFAULT_FETCH_MODE => $pdo_default_fetchmode, //make the default fetch be an associative array
        ];
        /** =============================================
         * Placing Open Object into variable $connect :
         * -------------------------------------------- */
        $toString = strval($db_name);
        $dsn = 'mysql:host=' . $db_host . ';dbname=' .$toString;
        /** ==============
         * Return Data :
         * ------------- */
        return new PDO($dsn, $db_user,$db_pass, $options);
    }
}