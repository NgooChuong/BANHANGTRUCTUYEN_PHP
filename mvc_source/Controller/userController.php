<?php
     class userController extends BaseControllers{
        private $userModel;
        function __construct(){
            $this->loadModel( "usersModel");
            $this->userModel = new usersModel();
        }
        function index(){
            $data = $this->userModel->getAll();
            $main = "Administator/index"; // muc dich la k cho header va footer thay doi
            $this->loadView("Admin.index",$data,'','',$main);
            // echo __METHOD__;
        }
        function add(){
            if(isset($_POST['add'])){
                $user = [
                    'username' => $_POST['username'],
                    'pswd' => $_POST['password'],
                    'quyentruycap' => $_POST['QTC'],
                    'anhDaiDien' => $_FILES['image']['name']
                ];
                $this->userModel->store($user);
            }
            $main = "Administator/Add";
            $this->loadView("Admin.index",[],'','',$main);
        }
        public function delete($id){
            $this->userModel->destroy($id);
            // header("location:" .URL ."user/index");
             $main = "Administator/index";
             $data = $this->userModel->getAll();
             $this->loadView("Admin.index",$data,'','',$main);
            }
        public function edit($id){
            if(isset($_POST['edit'])){
                    $user = [
                    'username' => $_POST['username'],
                    'pswd' => $_POST['password'],
                    'quyentruycap' => $_POST['QTC'],
                    'anhDaiDien' => $_FILES['image']['name']
                    ];
                $this->userModel->update($user,$id);
                header("location:" .URL."user/index");
            }
            $main = "Administator/Edit";
            $data = $this->userModel->findById($id);
            $this->loadView("Admin.index",$data,'','',$main);
        }
        // public function find (){
        //     $data = [];
        //     if(isset($_POST['search'])){
        //         $name = $_POST['Srch']; 
        //         $data = $this->userModel->findByName($name,1);
        //     }
        //     $main = "user/index";
        //     $this->loadView("Admin.index",$data,$main);
        // }
    }
?>