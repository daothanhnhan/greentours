<?php
    $rows = $acc->getList("khoi_hanh","producttag_id",$_GET['producttag_id'],"id","asc",$trang, 20, "khoi-hanh");//var_dump($rows);
?>	
    <div class="boxPageNews">
        <h1><a href="index.php?page=them-khoi-hanh&producttag_id=<?= $_GET['producttag_id'] ?>">Thêm khởi hành</a></h1>
        <p style="clear: both;"><a href="index.php?page=sua-tag-san-pham&id=<?= $_GET['producttag_id'] ?>" title="">Quay lại</a></p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Ngày đi</th>
                    <th>Ngày đến</th>
                    <th>Giá</th>
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
                            <td><?= $row['ngay_di']?></td>
                            <td><?= $row['ngay_den']?></td>
                            <td><?= number_format($row['price'])?></td>
                           
                            <td style="float: none;"><a href="index.php?page=xoa-khoi-hanh&id=<?= $row['id'] ?>" style="float: none;" onclick="return confirm('Bạn có chắc muốn xóa.')">Xóa</a> | <a href="index.php?page=sua-khoi-hanh&id=<?= $row['id'] ?>" style="float: none;">Sửa</a></td>
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