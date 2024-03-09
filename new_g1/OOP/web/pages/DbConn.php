<?php
   class DBConnection{
        private $server = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "epda_dbms";

        function getConnection(){
            $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
            return $conn;
        }
   }
?>