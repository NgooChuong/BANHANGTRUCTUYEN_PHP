<?php
    class Database{
        const HOST = 'localhost';
        const USERNAME = 'root';
        const PASSWORD = '';
        const DATABASE = 'salesmanagement';
        private $connect;
        public function connectDB(){// self with static member
            $this->connect = mysqli_connect(self::HOST,self::USERNAME,self::PASSWORD,self::DATABASE);
            mysqli_set_charset($this->connect, "utf8mb4");
            if(mysqli_connect_errno()==0) return $this->connect;
            else{
                return false;
            } 
        } 
    }
?>