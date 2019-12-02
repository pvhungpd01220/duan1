<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang quản lý tin tức</title>
	<link href="../js/bootstrap.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
</head>

<body>
<?php

switch ($action) {
	case "insert_process":
		if(isset($status)): ?>

		<section class="col-sm-12" style="text-align: center;">
			<?php echo "<h3>".$status."</h3>"?>
			<a href="?"><input type="button" class="btn btn-primary" value="Trở lại" style="background-color:#F0F"></a>
		</section>

		<?php endif;
		break;
	case "update_process":
		if(isset($status)): ?>

		<section class="col-sm-12" style="text-align: center;">
			<?php echo "<h3>".$status."</h3>"?>
			<a href="?"><input type="button" class="btn btn-primary" value="Trở lại" style="background-color:#F0F"></a>
		</section>

		<?php endif;
		break;
	case "delete":
		$result = $db->query("select * from news where news_id = $news_id");
		$set = $result->fetch();
		?>
		<section class="col-sm-12" style="text-align: center;">
			<?php echo "<h3> Đồng ý xoá bài viết ". $set['news_id']. " - ". $set['news_title'] ."</h3>" ?>
			<a href="?"><input type="button" class="btn btn-primary" value="Trở lại" style="background-color:#F90"></a>
			<a href="?action=delete_process&id=<?php echo $set['news_id']?>"><input type="button" class="btn btn-danger" value="Đồng ý" style="background-color:#F90"></a>
		</section>
		<?php break;
} ?>