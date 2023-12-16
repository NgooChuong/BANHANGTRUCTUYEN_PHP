<?php
    class CartDetailModel extends BaseModel{
        const TABLE = "chitietgiohang";
        public function AddAllCartDetail($ListProduct){
            $this->Add(self::TABLE,$ListProduct);
        }
        public function GetCartDetail($key,$id){
            return $this->Find(self::TABLE,$key,$id);
        }
    }
?>