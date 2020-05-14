<?php
    $rows = $acc->getList("tourcat_faqs","productcat_id",$_GET['productcat_id'],"id","asc",$trang, 20, "danh-muc-tour-faqs");//var_dump($rows);
?>	
    <div class="boxPageNews">
        <h1><a href="index.php?page=them-danh-muc-tour-faqs&productcat_id=<?= $_GET['productcat_id'] ?>">Thêm câu hỏi</a></h1>
        <p style="clear: both;"><a href="index.php?page=sua-danh-muc-san-pham&id=<?= $_GET['productcat_id'] ?>">Quay lại</a></p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên câu hỏi</th>
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
                            
                            <td style="float: none;"><a href="index.php?page=xoa-danh-muc-tour-faqs&id=<?= $row['id'] ?>" style="float: none;" onclick="return confirm('Bạn có chắc muốn xóa.')">Xóa</a> | <a href="index.php?page=sua-danh-muc-tour-faqs&id=<?= $row['id'] ?>" style="float: none;">Sửa</a></td>
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