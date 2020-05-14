<?php
    $rows = $acc->getList("customize","","","id","desc",$trang, 20, "customize");//var_dump($rows);
?>	
    <div class="boxPageNews">
        <!-- <h1><a href="index.php?page=them-thuong-hieu">Thêm</a></h1> -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tour</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Nationality</th>
                    <th>Tell</th>
                    <th>Number of Days</th>
                    <th>Departure date</th>
                    <th>Type of Group</th>
                    <th>Group Size</th>
                    <th>Adults</th>
                    <th>Children</th>
                    <th>Infants</th>
                    <th>Xóa</th>
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
                            <td><?= $row['product_name']?></td>
                            <td><?= $row['first_name']?></td>
                            <td><?= $row['last_name']?></td>
                            <td><?= $row['email']?></td>
                            <td><?= $row['phone']?></td>
                            <td><?= $action->getDetail('country', 'id',$row['nationality'])['name']?></td>
                            <td><?= $row['tell']?></td>
                            <td><?= $row['days']?></td>
                            <td><?= $row['date']?></td>
                            <td><?= $row['group']?></td>
                            <td><?= $row['group_size']?></td>
                            <td><?= $row['adults']?></td>
                            <td><?= $row['children']?></td>
                            <td><?= $row['infants']?></td>
                            
                            <td style="float: none;"><a href="index.php?page=xoa-customize&id=<?= $row['id'] ?>" style="float: none;" onclick="return confirm('Bạn có chắc muốn xóa.')">Xóa</a></td>
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