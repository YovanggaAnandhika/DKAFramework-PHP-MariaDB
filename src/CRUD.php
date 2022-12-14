<?php

namespace dkaframework\database;
use PDO;
use dkaframework\database\Interfaces\CRUDInterfaces;

class CRUD extends PDO implements CRUDInterfaces {

    private static mixed $returnVar;
    /**
     * @return mixed
     */
    public static function getReturnVar(): mixed
    {
        return self::$returnVar;
    }
    /**
     * @param mixed $returnVar
     */
    public static function setReturnVar(mixed $returnVar): void
    {
        self::$returnVar = $returnVar;
    }
    /**
     * @param $Connector PDO
     * @param $table_name string
     * @param $json_format boolean
     * @return object|array
     */
    public static function Read(PDO $Connector, string $table_name, bool $json_format = false): object | array
    {
        self::setReturnVar(array(
            'status' => false,
            'code' => 500,
            'msg' => 'not initialization'
        ));
        $reformatTableName = strval($table_name);
        $statement = $Connector->prepare("SELECT * FROM $reformatTableName");
        $statement->execute();
        $fetch = $statement->fetchAll(PDO::FETCH_ASSOC);
        $errorInfo = $statement->errorInfo();
        $rowCount = $statement->rowCount();

        if (is_null($errorInfo[1])){
            if ($rowCount > 0){
                /** set Response Return Variable **/
                self::setReturnVar(array(
                    'status' => true,
                    'code' => 200,
                    'msg' => 'successfully to read data',
                    "data" => $fetch
                ));
                /** End set Response Return Variable **/
            }else{
                /** set Response Return Variable **/
                self::setReturnVar(array(
                    'status' => false,
                    'code' => 404,
                    'msg' => 'successfully, but not found data',
                    "error" => array(
                        "code" => $errorInfo[1],
                        'msg' => $errorInfo[2]
                    )
                ));
                /** End set Response Return Variable **/
            }
        }else{
            /** set Response Return Variable **/
            self::setReturnVar(array(
                'status' => false,
                'code' => 500,
                'msg' => 'fatal, error detected',
                "error" => array(
                    "code" => $errorInfo[1],
                    'msg' => $errorInfo[2]
                )
            ));
            /** End set Response Return Variable **/
        }
        /** Check return Format Json */
        ($json_format) ? $json = json_encode(self::getReturnVar(), true) : $json = self::getReturnVar();
        /** Return Variable */
        return $json;
    }


}
