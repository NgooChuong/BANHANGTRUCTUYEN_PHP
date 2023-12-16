<?php
    class LoginModel extends BaseModel{
        private const TABLE = 'khachhang';
        public function Login($data){
            return $this->checkAdmin(self::TABLE,$data);
        }
    }
?>