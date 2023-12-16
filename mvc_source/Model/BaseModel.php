<?php
class BaseModel extends Database{
    private $connect;
    function __construct(){
        $this->connect = $this->connectDB();
    }
    protected function query($sql){
        return mysqli_query($this->connect,$sql);
    }
    protected function SelectAll($table,$select){
        $sql = 'select '. $select.' from '.$table;
        $res = $this->query($sql);
        $data = [];
        while($row = mysqli_fetch_row($res)){
            array_push($data,$row);
        }
        return $data;
    }
    protected function Add($table,$data){
        $values =  array_map(function($value){
            return "'".$value."'";
        },$data);// mac dinh $data là lấy gia tri
        // gán từng phần thử có thêm nháy đơn vào $values
        $values=  implode(',',$values); // nối và gán ngược lại
        $keys =  implode(",",array_keys($data));
        $sql = "insert into $table ($keys) values ($values)";
        $this->query($sql);
    }
    protected function Edit($table,$data,$keyID,$id){
        $list = [];
        foreach($data as $key=>$val){
            array_push($list, "${key} = '$val'");
        }
        $listData = implode(',',$list);
        $sql = "update ${table} set ${listData} where $keyID = '${id}'";
         $this->query($sql);
    }
    protected function Find($table,$keyID,$condition){
        $sql = 'Select * from '.$table.' where '. $keyID . '="'.$condition.'"';
        $res = $this->query($sql);
        $data = [];
        while($row = mysqli_fetch_assoc($res)){

            array_push($data,$row);
        }
        
        return $data; 
    }
    protected function Erase($table,$keyID,$id){
        $sql = 'Delete from '.$table.' where '.$keyID.' = "'.$id.'"';
         $this->query($sql);
    }

    protected function checkAdmin($table,$data){
        $list = $this->SelectAll($table,'*');
        $id = '';
        foreach ($list as $value){
             if(strcmp($data['username'],$value[1]) == 0 && strcmp($data['pswd'],$value[2])==0){
                $id = $value['0'];
                break;
            }
        }
        return $id;
    }
    protected function countProductsPatron ($table,$condition){
        $sql = "SELECT " .'COUNT(*)'." FROM $table WHERE $condition;";
        $count = $this->query($sql);
        return $count;
    }
}
?>