<?php
    
    class ObjectFactory{ 

        public function build($connection, $query){
            $empty = array();
            $data = mysqli_query($connection, $query);
            return self::fillWithData($empty, $data);
        }

        private function fillWithData($container, $data){
            while($row = mysqli_fetch_assoc($data))
            {
                array_push($container, $row);
            }
            return $container;
        }
    }
?>