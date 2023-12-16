<?php
    class ProductModel extends BaseModel{
        private $table = 'sanpham';
        private $keyID = 'masp';
        public function GetAll(){
            return $this->SelectAll($this->table,'*');
        }
        public function AddOneProduct($product){
            $this->Add($this->table,$product);
        }
        public function UpdateOneProduct($product,$id){
            $this->Edit($this->table,$product,$this->keyID,$id);
        }
        public function Search($id){
            return $this->Find($this->table,$this->keyID,$id);
        }
        public function Destroy($id){
            $this->Erase($this->table,$this->keyID, $id);
        }
        public function Products_number(){
            return count($this->GetAll());
        }
        
    }
?>