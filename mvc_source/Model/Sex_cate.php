<?php
    class Sex_cate extends BaseModel{
        const TABLE = 'Sex_Category';
        public function getAll(){
           return $this->SelectAll(self::TABLE,'*');    
        }
    }
?>