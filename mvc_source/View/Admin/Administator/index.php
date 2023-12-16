<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Edit Table With Button</h4>
                <p class="text-muted mb-4 font-13">Add toolbar column with edit and delete buttons.</p>

                <table class="table mb-0" id="my-table">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Tài Khoản</th>
                        <th>Mật Khẩu</th>
                        <th>Quyền truy cập</th>
                        <th>Ảnh Đại diện</th>
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
                                    <td><img src="<?php echo URL_ADMIN.'/images/PicturesProject/'. $value['4']?>" alt="" style = "width:100px;"></td>
                                    <td><a href="<?php echo URL .'user/edit/'.$value['0']?>" class = 'Edit' style="width: 40px; padding:0px 5px 0px 0px;"><i class="fa-solid fa-pen-to-square" ></i></a></td>
                                    <td><a href="<?php echo URL .'user/delete/'.$value['0']?>" class = 'Delete' style="width:40px; padding:0px 5px 0px 0px;"><i class="fa-solid fa-trash" ></i></a></td>
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