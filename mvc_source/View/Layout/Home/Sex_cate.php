<div class="category-content">
    <h2 class="cat-title">Categories</h2>
        <ul class="pl-0 mb-0">
        <?php
            $sex = $data[1];
            for ($i = 0;$i< count($sex);$i++){
        ?>
            <li><a href="<?php echo URL.'Layout/filter_sex/'. $sex[$i][0];?> "><?php echo $sex[$i][0]?></a></li>
        <?php
            }
        ?>
    </ul>
</div>