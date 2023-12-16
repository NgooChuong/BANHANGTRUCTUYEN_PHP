<form action="" method="post" enctype="multipart/form-data" id="add">
<div class="mb-3 mt-3">
        <label  class="form-label">Mã Sản phẩm</label>
        <input type="text" class="form-control add" id="masp" placeholder="VD: SP + số thứ tự " name="masp" value = <?php echo $data['masp'];?>>
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Tên Sản phẩm</label>
        <input type="text" class="form-control add" id="tensp" placeholder="Tên Sản Phẩm" name="tensp" value="<?php echo $data['tensp'];?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Số lượng trong kho</label>
        <input type="number" class="form-control add" placeholder="Số Lượng" name="number" value="<?php echo $data['soluongtrongkho'];?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Giá</label>
        <input type="number" class="form-control add" placeholder="Giá" name="price" value="<?php echo $data['gia'];?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Mã Xuất xứ</label>
        <select name="country" id="">
            <?php
                $listCountry = [
                    'VN' => 'Việt Nam',
                    'JPN' => 'Nhật Bản',
                    'SIN' => 'Singapore',
                    'TQ' => 'Trung Quốc',
                    'USA' => 'Mỹ'
                ]; 
                foreach ($listCountry as $key => $val){
                    if($data['maXX'] != $key){
                ?>
                <option value="<?php echo $key?>" ><?php echo $val?></option>
                <?php   
                    }    
                    else {
                 ?>
                 <option value="<?php echo $key?>" selected><?php echo $val?></option>
                <?php 
                    }
                }
                ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Mã Loại hàng</label>
        <select name="category" id="">
        <?php
                $listCategory = [
                    'snk' => 'sneaker',
                    'lth' => 'leather',
                    'pmp' => 'Pump',
                    'spt' => 'Sport'
                ]; 
                foreach ($listCategory as $key => $val){
                    if($data['maloai'] != $key){
                ?>
                <option value="<?php echo $key?>" ><?php echo $val?></option>
                <?php   
                    }    
                    else {
                 ?>
                 <option value="<?php echo $key?>" selected><?php echo $val?></option>
                <?php 
                    }
                }
                ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Hình ảnh</label>
        <input type="file" class="form-control add" placeholder="" name="image">
    </div>
    <button type="submit" class="btn" name="edit" style = 'border:3px solid #000; background-color: #ff4757; border-radius:10px; color:#fff;'>Cập nhật</button>
</form>