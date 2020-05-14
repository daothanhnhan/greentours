<?php
    $rows = $acc->getList("order_evisa","country","3","id","desc",$trang, 20, "dat-evisa-cambodia");//var_dump($rows);
?>	
    <div class="boxPageNews">
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Visa type</th>
                    <th>Purpose of visit</th>
                    <th>Arrival airport</th>
                    <th>Entry date</th>
                    <th>Exit date</th>
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
                            <td><?= $row['type']?></td>
                            <td><?= $row['purpose']?></td>
                            <td><?= $row['port']?></td>
                            <td><?= $row['date_entry']?></td>
                            <td><?= $row['date_exit']?></td>
                            <td style="float: none;"><a href="index.php?page=xoa-dat-evisa-cambodia&id=<?= $row['id'] ?>" style="float: none;" onclick="return confirm('Bạn có chắc muốn xóa.')">Xóa</a> | <a href="index.php?page=dat-evisa-cambodia-detail&id=<?= $row['id'] ?>" style="float: none;">Chi tiết</a></td>
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