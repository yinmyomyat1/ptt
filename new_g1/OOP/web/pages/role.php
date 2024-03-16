<?php
    require_once("model.php");
    require_once("DBConnection.php");

    class Role extends Model{
        private static $table = "roles";

        public $id;
        public $name;

        public static function getAll(){
            $query = "SELECT * FROM ". Role::$table;
            $db = new DBConnection();
            $conn = $db->getConnection();
            $results = $conn->query($query);
            $roles = [];

            while($row = mysqli_fetch_object($results)){
                $role = new role();
                $role-> id = $row->id;
                $role->name = $row->name;
               
                $roles[] = $role;
            }
            return $roles;
        }
        public static function find($id){
            $query = "SELECT * FROM ". Role::$table . " where id = $id limit 1;";
            $db = new DBConnection();
            $conn = $db->getConnection();
            $results = $conn->query($query);
            $row = mysqli_fetch_object($results);
            $role = null;
            if(isset($row)){
                $role = new role();
                $role-> id = $row->id;
                $role->name = $row->name;
            }
            return $role;
        }

        public static function delete($id){
            $query = "DELETE FROM ". Role::$table . " where id = $id limit 1;";
            $db = new DBConnection();
            $conn = $db->getConnection();
            $results = $conn->query($query);
            return true;
        }

        public function update(){
            $table = Role::$table;

            $query = "
                        UPDATE $table 
                        SET name = '$this->name'
                        WHERE id = $this->id
                    ";
            $db = new DBConnection();
            $conn = $db->getConnection();
            $results = $conn->query($query);
            return true;
        }

        public static function create($role){
            $table = Role::$table;

            $query = "
                        INSERT INTO $table (id, name) values (null, '$role->name');
                    ";
            $db = new DBConnection();
            $conn = $db->getConnection();
            $results = $conn->query($query);
            return true;
        }

    }

?>