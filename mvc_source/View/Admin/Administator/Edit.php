<form action="" method="post" enctype="multipart/form-data" id="add">
    <div class="mb-3 mt-3">
        <label class="form-label">Tài Khoản</label>
        <input type="text" class="form-control add" id="tensp" placeholder="" name="username" value="<?php echo $data['username']?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Mật Khẩu</label>
        <input type="text" class="form-control add" placeholder="" name="password"  value="<?php echo $data['pswd']?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Quyền truy cập</label>
        <input type="text" class="form-control add" placeholder="" name="QTC"value="<?php echo $data['quyentruycap']?>" >
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label"> Ảnh Đại Diện</label>
        <input type="file" class="form-control add" placeholder="" name="image">
    </div>
    <button type="submit" class="btn" name="edit" style = 'border:3px solid #000; background-color: #ff4757; border-radius:10px; color:#fff;'>Sửa</button>
</form>