<?php
    $rows = $acc->getList("book_tour","","","id","desc",$trang, 20, "book-tour");//var_dump($rows);
?>	
    <div class="boxPageNews">
        <!-- <h1><a href="index.php?page=them-thuong-hieu">Thêm</a></h1> -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tour</th>
                    <th>Number people</th>
                    <th>Star Hotel</th>
                    <th>Start Date</th>
                    <th>Flights to the destination and back home</th>
                    <th>Accommodation before your trip</th>
                    <th>Accommodation after your trip</th>
                    <th>Total</th>
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
                            <td><?= $row['product_name'] ?></td>
                            <td><?= $row['people'] ?></td>
                            <td><?= $row['hotel'] ?></td>
                            <td><?= $row['date'] ?></td>
                            <td><?= $row['flights']==1 ? 'Yes' : 'No' ?></td>
                            <td><?= $row['before']==1 ? 'Yes' : 'No' ?></td>
                            <td><?= $row['after']==1 ? 'Yes' : 'No' ?></td>
                            <td><?= number_format($row['price']) ?> $</td>
                            <td style="float: none;"><a href="index.php?page=xoa-book-tour&id=<?= $row['id'] ?>" style="float: none;" onclick="return confirm('Bạn có chắc muốn xóa.')">Xóa</a> | <a href="index.php?page=chi-tiet-book-tour&id=<?= $row['id'] ?>" style="float: none;">chi tiết</a></td>
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