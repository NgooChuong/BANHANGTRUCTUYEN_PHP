<?php
    class usersModel extends BaseModel{
       private const TABLE = "administrator";
       private const keyID = "ID";
       public function getAll($select='*',$orderBy=[]){
        return $this->SelectAll(self::TABLE, $select);
       }
        public function store($user = []){
            $this->Add(self::TABLE,$user);
        } // de userControl goi
        public function findById($id){
            return $this->Find(self::TABLE,self::keyID, $id);
        }
       public function update($data=[],$id){
            $this->Edit(self::TABLE,$data,self::keyID,$id);
       }
        public function destroy($id){
            $this->Erase(self::TABLE,self::keyID,$id);
        }
        // public function findByName($name,$key){
        //     return $this->search(self::TABLE,$name,$key);
        // }
    }
?>