<?php
require_once('../connect.php');
session_start();

if(isset($_POST['action'])){
	$action = $_POST['action'];
} else if (isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = "manager";
}

switch($action){
	case "manager":
		if(isset($_SESSION['user_id'])){
			$results = $db->query("select * from news");
			include ('manager.php');
		} else {
			header("Location: ../lienhe.php?error=wrong");
		}
		break;
	case "insert":
		include ("insert.php");
		break;
	case "insert_process":
		$title = $_POST['title'];
		$content = $_POST['content'];
		$image = $_FILES['thumbnail'];
		$image_name = $image['name'];
		$type = explode(".", $image_name);
		if ($type[1] == 'jpg' || $type[1] == 'png' || $type[1] == 'gif') {
			move_uploaded_file($image['tmp_name'], '../img/'.$image_name);
			$db->exec("insert into news values(null, '$title', '$content', '$image_name')");
			header("Location: ?");
		} else {
			$status = 'Tập tin không hợp lệ';
			include ("notification.php");
		}
		break;
	case "update":
		$news_id = $_GET['id'];
		$result = $db->query("select * from news where news_id = $news_id");
		$set = $result->fetch();
		include("update.php");
		break;
	case "update_process":
		$id = $_POST['news_id'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		$image = $_FILES['thumbnail'];
		$image_name = $image['name'];
		if($image_name != "") {
			$type = explode(".", $image_name);
			if ($type[1] == 'jpg' || $type[1] == 'png' || $type[1] == 'gif') {
				move_uploaded_file($image['tmp_name'], '../img/'.$image_name);
				$db->exec("update news set news_title = '$title', news_thumbnail = '$image_name', news_content = '$content' where news_id = $id");
				header("Location: ?");
			} else {
				$status = 'Tập tin không hợp lệ';
				include ("notification.php");
			}
		} else {
			$db->exec("update news set news_title = '$title', news_content = '$content' where news_id = $id");
			header("Location: ?");
		}
		break;
	case "login":
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$result = $db->query("select * from users where username = '$username' and password = '$password'");
		if($set = $result->fetch()){ // Dang nhap thanh cong
			$_SESSION['user_id'] = $set['user_id'];
			header("Location: ?action=manager");

		} else {// Dang nhap that bai
			header("Location: ../lienhe.php?error=wrong");
		}
		break;
	case "logout":
		session_destroy();
		header("Location: ../index.html");
		break;
	case "delete":
		$news_id = $_GET['id'];
		include ('notification.php');
		break;
	case "delete_process":
		$news_id = $_GET['id'];
		$db->exec("delete from news where news_id = $news_id");
		header("Location: ?");
		break;
}
?>