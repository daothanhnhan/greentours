<?php
    $rows = $acc->getList("itinerary","product_id",$_GET['product_id'],"id","asc",$trang, 20, "hanh-trinh");//var_dump($rows);
?>	
    <div class="boxPageNews">
        <h1><a href="index.php?page=them-hanh-trinh&product_id=<?= $_GET['product_id'] ?>">Thêm hành trình</a></h1>
        <p style="clear: both;"><a href="index.php?page=sua-san-pham&id=<?= $_GET['product_id'] ?>">Quay lại</a></p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <!-- <th>Ảnh</th> -->
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
                            
                            <td style="float: none;"><a href="index.php?page=xoa-hanh-trinh&id=<?= $row['id'] ?>" style="float: none;" onclick="return confirm('Bạn có chắc muốn xóa.')">Xóa</a> | <a href="index.php?page=sua-hanh-trinh&id=<?= $row['id'] ?>" style="float: none;">Sửa</a></td>
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