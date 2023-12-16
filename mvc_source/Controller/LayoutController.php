<?php
    class LayoutController extends BaseControllers{
        private $productsModel;
        private $cartModel;
        private $cartDetailModel;
        private $Sex_cate;
        private $avatar = 'Sign In';
        private $sex_id ;
        function __construct()
        {
            $this->LoadModels();
            $this->productsModel = new ProductModel;
            $this->cartModel = new CartModel;
            $this->cartDetailModel = new CartDetailModel;
            $this->Sex_cate = new Sex_cate;
            
        }
        private function LoadModels(){
            $this->loadModel("ProductModel");
            $this->loadModel("CartModel");
            $this->loadModel("CartDetailModel");
            $this->loadModel('Sex_cate');
        }
        public function index(){
            $main = "Home/contant";
            $dataSex = $this->Sex_cate->getAll();
            $dataProduct = $this->productsModel->GetAll();
            $this->loadView("Layout.index", [$dataProduct,$dataSex],$this->avatar,'', $main);
        }
        public function logout(){
            if(isset($_SESSION['cart'])|| isset($_SESSION['customer']['username'])){
                $i = 0 ;
                foreach($_SESSION['cart'] as $value){
                    $str = "GH".sprintf("%07d",$i);
                    $currentDay = date('Y-m-d');
                    var_dump($str);die;
                    $arrCart =  [
                        'maGH' => $str,
                        'soluong' => $value['num'],
                        'masp' => $value[0]['masp']
                    ];
                    $cartDeitail = [
                        'maGH' => $str,
                        'makh' => $_SESSION['customer']['id'],
                        'ngaymua'=> $currentDay
                    ];
                    $this->cartModel->AddAllCart($arrCart);
                    $this->cartDetailModel-> AddAllCartDetail($cartDeitail);
                    $i++;
                }
                session_destroy();
            }
            header("location:".URL);
        }
        public function filter_sex($sexid = ''){
            $main = "Home/contant";
            $dataSex = $this->Sex_cate->getAll();
            $dataProduct = $this->productsModel->GetAll();
            $data_sex_fil = [];
            if($sexid != ''){
                for($i=0; $i<$this->productsModel->Products_number();$i++){
                    if($dataProduct[$i][7] == $sexid){
                        array_push($data_sex_fil,$dataProduct[$i]);   
                    }
                }
            }
            $this->loadView("Layout.index", [$data_sex_fil,$dataSex],$this->avatar,'', $main);
        }
    }
?>