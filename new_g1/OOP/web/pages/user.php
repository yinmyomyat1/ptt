<?php
    require_once("model.php");
    require_once("DBConn.php");

    class User extends Model{
        private static $table = "users";

        public $id;
        public $name;
        public $gender;
        public $email;
        public $password;

        public $role;
        public $role_id;

        public function getRoleName(){
            $name = '';
            $role = Role::find($this->role_id);
            if(isset($role)) $name = $role->name;
            return $name;
            //return Role::find($this->role_id)->name;
        }


        public static function getAll(){
            $query = "SELECT * FROM ". User::$table;
            $db = new DBConnection();
            $conn = $db->getConnection();
            $results = $conn->query($query);
            $users = [];

            while($row = mysqli_fetch_object($results)){
                $user = new User();
                $user-> id = $row->id;
                $user->name = $row->name;
                $user->gender = $row->gender;
                $user->email = $row->email;
                $user->password = $row->password;
                $user->role = $row->role;
                $users[] = $user;
            }
            return $users;
        }
        public static function find($id){
            $query = "SELECT * FROM ". User::$table . " where id = $id limit 1;";
            $db = new DBConnection();
            $conn = $db->getConnection();
            $results = $conn->query($query);
            $row = mysqli_fetch_object($results);
            $user = null;
            if(isset($row)){
                $user = new User();
                $user->name = $row->name;
                $user-> email = $row->email;
                $user->password = $row->password;
                $user->gender = $row->gender;
                $user->role = $row->role;
                $users[] = $user;
            }
            return $user;
        }
        public static function delete($id){
            $query = "DELETE FROM ". User::$table . " where id = $id limit 1;";
            $db = new DBConnection();
            $conn = $db->getConnection();
            $results = $conn->query($query);
            return true;
        }

        public static function update($user){
            $id = $user['id'];
            $name = $user['name'];
            $email = $user['email'];
            $password = $user['password'];
            $gender = $user['gender'];
            $role = $user['role'];
            $table = USER::$table;

            $query = "
                        UPDATE $table 
                        SET name = '$name',email = '$email', password = '$password',role = '$role'
                        WHERE id = '$id'
                    ";
            $db = new DBConnection();
            $conn = $db->getConnection();
            $results = $conn->query($query);
            var_dump($results);
            return true;
        }

         public static function updateProfile($user){
            echo "this is updateProfile";
            $id = $user['id'];
            $name = $user['name'];
            $email = $user['email'];
            $password = $user['password'];
            $gender = $user['gender'];
            $role = $user['role'];
            $table = USER::$table;

            $query = "
                        UPDATE $table 
                        SET name = '$name',email = '$email', password = '$password',gender = '$gender',role = '$role'
                        WHERE id = '$id';
                    ";
            $db = new DBConnection();
            $conn = $db->getConnection();
            $results = $conn->query($query);
            echo "this is in the profileEdit";
            var_dump($results);
            return true;
        }

        public static function checkBymailandPsw($email,$password){
            $query = "SELECT * FROM ". User::$table . " where email = '$email' AND password = '$password' Limit 1;";
            $db = new DBConnection();
            $conn = $db->getConnection();
            $results = $conn->query($query);
            echo "this is in the checkBymailandPsw function";
             var_dump($results);
             echo"<hr>";
            $row = mysqli_fetch_object($results);
            $user = null;
            if(isset($row)){
                $user = new User();
                $user->name = $row->name;
                $user-> email = $row->email;
                $user->password = $row->password;
                $user->gender = $row->gender;
                $user->role = $row->role;
                $users[] = $user;
            }
            var_dump( $users );
            echo"<hr><hr><hr>";
            return $users;
        }

        public static function getTeacherStudent($user){
          
            // foreach($user as $u){
            //     print_r($u);
            //     echo"<hr>";
            // }

            // echo"<hr>";
            
            $query = "SELECT * FROM " . User::$table . " WHERE role IN ('teacher', 'student')";
           
          
            $db = new DBConnection();
            $conn = $db->getConnection();
            $results = $conn->query($query);
           
            
            $row = mysqli_fetch_object($results);
            // $TSuser = null;
            while($row = mysqli_fetch_object($results)){
                $TSuser = new User();
                $TSuser-> id = $row->id;
                $TSuser->name = $row->name;
                $TSuser->gender = $row->gender;
                $TSuser->email = $row->email;
                $TSuser->password = $row->password;
                $TSuser->role = $row->role;
                $users[] = $TSuser;
            }
           
            // foreach($users as $user){
            //     print_r($user);
            //     echo"<hr>";
            // }
            
            return $users;
            

        }

        public static function getTeacherStudentStaff($user){
          
            // foreach($user as $u){
            //     print_r($u);
            //     echo"<hr>";
            // }

            // echo"<hr>";
            
            $query = "SELECT * FROM " . User::$table . " WHERE role IN ('teacher', 'student', 'staff')";
           
          
            $db = new DBConnection();
            $conn = $db->getConnection();
            $results = $conn->query($query);
           
            
            $row = mysqli_fetch_object($results);
            // $TSuser = null;
            while($row = mysqli_fetch_object($results)){
                $TSuser = new User();
                $TSuser-> id = $row->id;
                $TSuser->name = $row->name;
                $TSuser->gender = $row->gender;
                $TSuser->email = $row->email;
                $TSuser->password = $row->password;
                $TSuser->role = $row->role;
                $users[] = $TSuser;
            }
           
            // foreach($users as $user){
            //     print_r($user);
            //     echo"<hr>";
            // }
            
            return $users;
            

        }
    }
?>