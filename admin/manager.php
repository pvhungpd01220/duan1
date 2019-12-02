<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Management</title>
	<link href="../js/bootstrap.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
    
</head>
<style type="text/css">
 body {
	font-family: 'Lato', Calibri, Arial, sans-serif;
	color: #89867e;
	
}

a {
	color: #333;
	text-decoration: none;
}

a:hover {
	color: #0F0;
}
header{
	height:270px;
	width:84%;
	margin:auto;
	background-color:#666;
}

#banner{
	width:100%;
	height:200px;
}

#menu-second {
	margin-top:10px;
	width:100%;
	overflow: hidden;
	height: 70px;
	background-color: #09F;
	
	margin:auto;
}

#menu-second ul{
	width: 100%;
	height: 15%;
}


#menu-second ul li{
	height: 70px;
	width:14%;
	line-height: 55px;
	display: block;
	float: left;
	
}


#menu-second ul li a{
	display: block;
	color: #ffffff;
	text-transform: uppercase;
	padding: 0 10px;
	text-align:center;
	font-size:15px;
	padding-top:10px;
}
#menu-second ul li a:hover{
	transition: .7s;
	background-color: #09F;
	color:#000;
}
#footer{
	width:100%;
	margin:auto;
	height:230px;
	background-color:#0CF;
}
</style>
<body style="height:2000px">
    <header style="width:100%;">
  <div id="banner"><img src="../image/LOGO+PANNER.jpg" width="1400" height="210" /></div>


  <div id="menu-second">
			  <ul>
				<li class="col-md-2 col-sm-2 col-xs-12"><a href="index.html">TRANG CHỦ</i></a> </li>
				<li><a href="gioithieu.html">GIỚI THIỆU</a> </li>
				<li><a href="#">HOẠT ĐỘNG</a> </li>
				<li><a href="#">TRUYỀN THỐNG</a></li>
				
				<li><a href="tochuc.html">TỔ CHỨC</a> </li>
                <li><a href="lienhe.html">LIÊN HỆ</a></li>				
                <li><a href="lienhe.php">ĐĂNG NHẬP</a></li>
			  </ul>
		</div>
   </div>
</header>
	<section class="title" style="text-align: center">
		<h2>Trang quản lý tin tức</h2>
	</section>
	<section class="col-sm-12">
		<a href="?action=insert" ><div class="btn btn-primary" style="background-color:#9CF; color:#F00"><span class="glyphicon glyphicon-plus" style="color:#F00"></span> Thêm tin tức</div></a>

		<a href="../index.html" style="float:right"><div class="btn btn-primary"><span class="glyphicon glyphicon-home" style="background-color:#9CF; color:#F00"></span> Đăng xuất</div></a>
		<table class="table table-hover" style="margin-top: 30px;">
			<tr>
				<td>Mã</td>
				<td>Tiêu đề</td>
				<td>Hình ảnh</td>
				<td>Nội dung</td>
				<td width="200"></td>
			</tr>
			<?php while($result = $results->fetch()) :?>
			<tr>
				<td><?php echo $result['news_id']; ?></td>
				<td><?php echo $result['news_title']; ?></td>
				<td><img src="../img/<?php echo $result['news_thumbnail']; ?>" style="max-width: 200px; max-height: 200px;"></td>
				<td><?php echo $result['news_content']; ?></td>
				<td>
					<a href="index.php?action=update&id=<?php echo $result['news_id']; ?>"><div class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Chỉnh sửa</div></a>
					<a href="index.php?action=delete&id=<?php echo $result['news_id'] ?>"><div class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Xoá</div></a>
				</td>
			</tr>
			<?php endwhile; ?>
		</table>
	</section>
    <div id="footer" style="margin-top:40%;">
       
		 <div class="fl" >
               <p>Bản quyền thuộc về: <span style="color:red;"><strong>Trường THPT Hoàng Diệu</strong> &copy;<strong> 2012 - 2013</strong></span></p>
               <p>Cơ quan chủ quản: <strong style="font-size: 12px; color: #F00;">Sở GD-ĐT Quảng Nam</strong></p>
               <p>Website: <strong>http://www.thpthoangdieun.edu.vn</strong></p>
                <p>Điện thoại: <strong>0553.851 226</strong> - Email: <strong>c3hoangdieu@quangnam.edu.vn</strong></p>
               <p>Địa chỉ <b><font color="red">Điện Thọ, Điện Bàn, Quảng nam</font></b></p>             
               <p>Chịu trách nhiệm nội dung: <strong>Hiệu trưởng : Hồ Tấn Sĩ</strong></p>
               <p>NGười thiết kế web: <strong>Phạm Văn Hùng</strong></p>
  
  
             
            
         </div>
 </div>
</body>
</html>