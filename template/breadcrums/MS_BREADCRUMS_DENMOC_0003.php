<?php 
	$crum_news = array();
	function getParentNews ($id) {
		global $conn_vn;
		global $crum_news;
		if ($id != 0) {
			$sql = "SELECT * FROM newscat WHERE newscat_id = $id";
			$result = mysqli_query($conn_vn, $sql);
			$row = mysqli_fetch_assoc($result);
			$crum_news[] = array(
					'url'  => $row['friendly_url'],
					'name' => $row['newscat_name']
				);
			getParentNews($row['newscat_parent']);
		}
	}
	getParentNews($row['newscat_id']);
	// echo $row['newscat_id'];
	// var_dump($crum_news);
	krsort($crum_news);
?>
<div class="gb-breadcrumbs_denmoc">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <?php foreach ($crum_news as $item) { ?>
        	<li><a href="/<?= $item['url'] ?>"><?= $item['name'] ?></a></li>
        	<?php } ?>
            <li class="active"><?= $title ?></li>
        </ol>
    </div>
</div>