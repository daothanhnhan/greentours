<?php
    $rows = $acc->getList("why","","","id","asc",$trang, 20, "why");//var_dump($rows);
?>	
    <div class="boxPageNews">
        <h1><a href="index.php?page=them-why">Thêm Why</a></h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Note</th>
                    <th>Icon</th>
                    <th>Hoạt động</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $d = 0;
                    foreach ($rows['data'] as $row) {
                        $d++;
                    ?>
                        <tr>
                            <td><?= $d ?></td>
                            <td><?= $row['name']?></td>
                            <td><?= $row['note']?></td>
                            <!-- <td><i class="<?= $row['icon']?>"></i></td> -->
                            <td><img src="/images/<?= $row['icon'] ?>" alt="" style="width: 100px;"></td>
                            
                            <td style="float: none;"><a href="index.php?page=xoa-why&id=<?= $row['id'] ?>" style="float: none;" onclick="return confirm('Bạn có chắc muốn xóa.')">Xóa</a> | <a href="index.php?page=sua-why&id=<?= $row['id'] ?>" style="float: none;">Sửa</a></td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    	
        <div class="paging">             
        	<?= $rows['paging'] ?>
		</div>
    </div>
    <p class="footerWeb">Cảm ơn quý khách hàng đã tin dùng dịch vụ của chúng tôi<br />Sản phẩm thuộc Công ty TNHH Truyền Thông Và Công Nghệ Cafelink Việt Nam</p>             