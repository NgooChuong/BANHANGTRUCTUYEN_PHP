<?php
    class CartController extends BaseControllers{
        private $productsModel;
        private $patronID;
        private $cartModel;
        private $cartDetailModel;
        function __construct()
        {
            $this->loadModel("ProductModel");
            $this->loadModel("CartModel");
            $this->loadModel("CartDetailModel");
            $this->productsModel = new ProductModel();
            $this->cartModel = new CartModel;
            $this->cartDetailModel = new CartDetailModel;
        }
        public function index(){
            if(!isset($_SESSION['customer']['id'])) return; // yêu cầu dang nhap
            if(!isset($_SESSION['cart'])){
                $_SESSION['cart']=[];
            }
            // if(isset($_SESSION['customer']['username'])){
            //     $idDB = $this->cartDetailModel->GetCartDetail($_SESSION['customer']['username'])// id cua product trong database
            // }
            $main = 'Cart/cart';
            $this->loadView("Layout.index",$_SESSION['cart'],'','',$main);
        }
        public function store($id){ // them vo vo hang
            $product = $this->productsModel->Search($id);
            if(empty($_SESSION['cart']) || !array_key_exists($id,$_SESSION['cart'])){ // rỗng hoặc chưa tồn tại arrkeys
                $product['num'] = 1;
                $_SESSION['cart'][$id] = $product;
            }
            else {
                $_SESSION['cart'][$id]['num']+=1;
                
            }
            
            // $this->loadView("Layout.Cart.cart",$_SESSION['cart'],"");
              header("location:" .URL);
        }
        public function delete($id){
            unset($_SESSION['cart'][$id]);
            header("location:" .URL."Cart");
            echo "Xóa thành công";
        }
        public function inc($id){
            $_SESSION['cart'][$id]['num']+=1;
            header("location:" .URL."Cart");

        }
        public function dec($id){
            $count = $_SESSION['cart'][$id]['num']-1;
            if($count <=0){
                unset($_SESSION['cart'][$id]);
            }
            else{
                $_SESSION['cart'][$id]['num'] = $count;
            }
            header("location:" .URL."Cart");

        }
    }
?>