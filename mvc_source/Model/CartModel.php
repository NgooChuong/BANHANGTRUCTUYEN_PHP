<?php
    class CartModel extends BaseModel{
        const TABLE = "giohang";
        public function AddAllCart($ListProduct){
            $this->Add(self::TABLE,$ListProduct);
        }
        public function ShowUpCard($key,$id){
            return $this->Find(self::TABLE,$key,$id);
        }
    }
?>