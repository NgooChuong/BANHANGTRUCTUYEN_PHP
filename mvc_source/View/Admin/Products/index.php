<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Edit Table With Button</h4>
                <p class="text-muted mb-4 font-13">Add toolbar column with edit and delete buttons.</p>

                <table class="table mb-0" id="my-table">
                    <thead>
                        <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng trong kho</th>
                        <th>Giá</th>
                        <th>Mã xuất xứ</th>
                        <th>Mã loại </th>
                        <th>Ảnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($data as $value){
                         ?>
                                <tr>
                                    <td><?php echo $value['0']?></td>
                                    <td><?php echo $value['1']?></td>
                                    <td><?php echo $value['2']?></td>
                                    <td><?php echo $value['3']?></td>
                                    <td><?php echo $value['4']?></td>
                                    <td><?php echo $value['5']?></td>
                                    <td><img src="<?php echo URL_ADMIN.'/images/PicturesProject/'. $value['6']?>" alt="" style = "width:100px;"></td>
                                    <td><a href="<?php echo URL .'Product/Change/'.$value['0']?>" class = 'Edit'><i class="fa-solid fa-pen-to-square"></i></a></td>
                                    <td><a href="<?php echo URL .'Product/Delete/'.$value['0']?>" class = 'Delete'><i class="fa-solid fa-trash"></i></a></td>
                                </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table><!--end table-->     
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!-- end col -->
</div> <!-- end row -->