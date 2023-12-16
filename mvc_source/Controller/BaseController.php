<?php
    class BaseControllers{
        public function loadView($path,$data,$dataCustomer,$warning,$main){
            //$path = user/index => user.index
            require '../SalesManagemnet/mvc_source/View/'.str_replace('.','/',$path) .'.php';
        }
        public function loadModel($path){
            //$path = UserModel hoac Products
            require '../SalesManagemnet/mvc_source/Model/'.$path.'.php';
        }
    }
?>