<?php
namespace dkaframework\database\Interfaces;
use PDO;

interface ConnectionInterfaces {

    /**
     * @param $configuration array[]
     * @param int $pdo_default_fetchmode
     * @param int $error_mode
     * @return PDO;
     */
    public static function MariaDB(array $configuration, int $pdo_default_fetchmode = PDO::FETCH_ASSOC, int $error_mode = PDO::ERRMODE_SILENT): PDO;
}