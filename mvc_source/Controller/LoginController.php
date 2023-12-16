<?php
    class LoginController extends BaseControllers{
        private $loginModel;
        private $cartModel;
        private $cartDetailModel;
        private $customer=  'Sign In';
        private function LoadModels(){
            $this->loadModel("LoginModel");
            $this->loadModel("CartModel");
            $this->loadModel("CartDetailModel");
        }
        function __construct()
        {
            $this->loadModels();
            $this->loginModel = new LoginModel;
            $this->cartModel = new CartModel;
            $this->cartDetailModel = new CartDetailModel;
        }
        public function index(){
            $main = "Login/login";
            $LoginUser = [];
            if(isset($_POST['login'])){
                    $LoginUser = [
                    'username' => $_POST['E_username'],
                    'pswd' => $_POST['E_password']
                ];
                $checkID =  $this->loginModel->Login($LoginUser);
                if($checkID != ''){
                    $main = "Home/contant";
                    $this->loadModel("ProductModel");
                    $_SESSION['customer']['id'] = $checkID;
                    $_SESSION['customer']['username'] = $LoginUser['username'];
                    $_SESSION['customer']['password'] = $LoginUser['pswd'];
                     $this->customer = $_SESSION['customer']['username'];
                    // $this->loadView("Layout.index", $dataProduct,$_SESSION['customer']['username'],'', $main);
                    header("location:".URL);
                }
                else {
                    $this->loadView("Layout.index",[],$this->customer,'Vui lòng nhập đúng tài khoảng và mật khẩu',$main);
                }
            }
            else {
                $this->loadView("Layout.index",[],$this->customer,'',$main);// vo trang dang nhap
            }
        }
    }
?>