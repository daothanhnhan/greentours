<?php
    $rows = $acc->getList("feedback","","","id","desc",$trang, 20, "feedback");//var_dump($rows);
?>	
    <div class="boxPageNews">
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Your trip code</th>
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
                            <td><?= $row['first_name']?></td>
                            <td><?= $row['last_name']?></td>
                            <td><?= $row['email']?></td>
                            <td><?= $row['code']?></td>
                            
                            <td style="float: none;"><a href="index.php?page=xoa-feedback&id=<?= $row['id'] ?>" style="float: none;" onclick="return confirm('Bạn có chắc muốn xóa.')">Xóa</a> | <a href="index.php?page=sua-feedback&id=<?= $row['id'] ?>" style="float: none;">Chi tiết</a></td>
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