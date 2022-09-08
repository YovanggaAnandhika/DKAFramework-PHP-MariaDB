<?php

namespace dkaframework\database\Interfaces;
use PDO;

interface CRUDInterfaces {

    /**
     * @param $Connector PDO
     * @param $table_name String
     * @param bool $json_format
     */
    public static function Read(PDO $Connector, string $table_name, bool $json_format = false);
}