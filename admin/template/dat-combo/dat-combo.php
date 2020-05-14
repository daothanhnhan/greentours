<?php
    $rows = $acc->getList("order_combo","","","id","desc",$trang, 20, "dat-combo");//var_dump($rows);
?>	
    <div class="boxPageNews">
        <!-- <h1><a href="index.php?page=them-thuong-hieu">Thêm</a></h1> -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Combo</th>
                    <th>Ngày khởi hành</th>
                    <th>Số lượng</th>
                    <th>Khởi hành từ</th>
                    <th>Phòng</th>
                    <th>Tuổi trẻ em</th>
                    <th>Họ tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Hoạt động</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $d = 0;
                    foreach ($rows['data'] as $row) {
                        $d++;
                        $treem = json_decode($row['treem']);
                    ?>
                        <tr>
                            <td><?= $d ?></td>
                            <td><?= $row['combo_name']?></td>
                            <td><?= $row['date']?></td>
                            <td><?= $row['quantity']?></td>
                            <td><?= $row['depart']?></td>
                            <td><?= $row['room']?></td>
                            <td><?php
                                $tre = '';
                                foreach ($treem as $item) {
                                    if ($item > 0) {
                                        $tre .= $item.',';
                                    } else {
                                        $tre .= '< 1,';
                                    }
                                } 
                                $tre = substr($tre, 0, -1);
                                echo $tre;
                            ?></td>
                            <td><?= $row['name']?></td>
                            <td><?= $row['phone']?></td>
                            <td><?= $row['email']?></td>

                            <td style="float: none;"><a href="index.php?page=xoa-dat-combo&id=<?= $row['id'] ?>" style="float: none;" onclick="return confirm('Bạn có chắc muốn xóa.')">Xóa</a></td>
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