<?php
    class App {
        private $controller = "LayoutController";
        private $action = "index";
        private $params = [];
        public function __construct()
        {
            $url = "";
            if(isset($_GET['url'])){ 
                $url = $_GET['url'];// lay url tu duong dan
                $url = trim($_GET['url'],''); //xoa dau cuoi dau khoang cach
                $url = explode('/',$url);// chuyen chuoi thanh mảng
            }
            if(isset($url[0])){
                
                if(file_exists('mvc_source/Controller/'.$url[0].'Controller.php')){
                    $this->controller = $url[0].'Controller';
                    unset($url[0]);
                }
            }
            
            require_once("./mvc_source/Controller/$this->controller.php");
            $this->controller = new $this->controller();
            if(isset($url[1])){
                if(method_exists($this->controller,$url[1])){
                    $this->action = $url[1];
                    unset($url[1]);
                }
            }
            if($url){
                $this->params = $url;
            }
            call_user_func_array([$this->controller, $this->action],$this->params);
        }
    }
?>