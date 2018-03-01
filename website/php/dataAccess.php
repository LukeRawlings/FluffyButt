<?php

    class DataAccess 
    {
        static public function get($credentials, $queries, $factory){
            $connection = self::connectToServer($credentials);	
            if($connection)
            {
                self::connectToDatabase($connection, $credentials);
                $query = self::getQuery($queries, $_GET["target"]);
                $objects = $factory->build($connection, $query);
                self::sendObjectsToJavascript($objects);
            }
        }

        static private function connectToServer($credentials){
            return mysqli_connect($credentials["DB_SERVER"], $credentials["DB_USER"], $credentials["DB_PASSWORD"]);
        }
        
        static private function connectToDatabase($connection, $credentials){
            mysqli_select_db($connection, $credentials["DB_NAME"]);
        }

        static private function getQuery($queries, $target){
            return $queries[$target];
        }

        static private function sendObjectsToJavascript($objects){
            echo json_encode(array_values($objects));
        }	
    }
?>