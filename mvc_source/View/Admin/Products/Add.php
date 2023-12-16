<form action="" method="post"  id="add">
<div class="mb-3 mt-3">
        <label  class="form-label">Mã Sản phẩm</label>
        <input type="text" class="form-control add" id="masp" placeholder="VD: SP + số thứ tự " name="masp">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Tên Sản phẩm</label>
        <input type="text" class="form-control add" id="tensp" placeholder="Tên Sản Phẩm" name="tensp">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Số lượng trong kho</label>
        <input type="number" class="form-control add" placeholder="Số Lượng" name="number">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Giá</label>
        <input type="number" class="form-control add" placeholder="Giá" name="price" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Mã Xuất xứ</label>
        <select name="country" id="">
            <option value="VN">Việt Nam</option>
            <option value="JPN">Nhật Bản</option>
            <option value="SIN">Singapore</option>
            <option value="TQ">Trung Quốc</option>
            <option value="USA">Mỹ</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Mã Loại hàng</label>
        <select name="category" id="">
            <option value="snk">sneaker</option>
            <option value="lth">leather</option>
            <option value="pmp">Pump</option>
            <option value="spt">Sport</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Hình ảnh</label>
        <input type="file" class="form-control add" placeholder="" name="image">
    </div>
    <button type="submit" class="btn" name="add" style = 'border:3px solid #000; background-color: #ff4757; border-radius:10px; color:#fff;'>Thêm Sản Phẩm</button>
</form>