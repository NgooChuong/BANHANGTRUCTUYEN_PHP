<?php
   class ProductController extends BaseControllers{
    private $productModel;
    public function __construct(){
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel();
    }
    public function index(){
        $data = $this->productModel->GetAll();   
        $main = 'Products/index'; 
        $this->loadView('Admin.index',$data,[],'',$main);
    }
    public function Insert(){
        if(isset($_POST['add'])){
            $product = [
                'masp' => $_POST['masp'],
                'tensp' => $_POST['tensp'],
                'soluongtrongkho' => $_POST['number'],
                'gia' => $_POST['price'],
                'maXX' => $_POST['country'],
                'maloai' => $_POST['category'],
                'anhSP' => $_FILES['image']['name']
            ];
            $this->productModel->AddOneProduct($product);
        }
        $main = 'Products/Add';
        $this->loadView('Admin.index',[],[],'',$main);
    }
    public function Change($id){
        if(isset($_POST['edit'])){
            $product = [
                'masp' => $_POST['masp'],
                'tensp' => $_POST['tensp'],
                'soluongtrongkho' => $_POST['number'],
                'gia' => $_POST['price'],
                'maXX' => $_POST['country'],
                'maloai' => $_POST['category'],
                'anhSP' => $_FILES['image']['name']
            ];
            $main = 'Products/index'; 
            $this->productModel->UpdateOneProduct($product,$id);
            header("location:" .URL."Products");
        }
        else{
            $main = 'Products/Edit';
            $product = $this->productModel->Search($id);
            $this->loadView('Admin.index',$product,[],'',$main);
        }
    }
    public function Delete($id){
        $this->productModel->Destroy($id);
        $this->index();
    }
   } 
?>