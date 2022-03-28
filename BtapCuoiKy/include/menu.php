<head>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<?php
		$sql_dm = mysqli_query($mysqli,"select * from danhmuc order by dm_id asc");
	?>
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
						<i class="material-icons">home</i>
							<a class="nav-link" href="index.php">Trang chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						
						<li class="nav-item  mr-lg-2 mb-lg-0 mb-2">
						<i class="material-icons">laptop</i>
<a class="nav-link " href="?quanly=dm&id=1" role="button" aria-haspopup="true" aria-expanded="false">
	Laptop							</a>
					<li class="nav-item  mr-lg-2 mb-lg-0 mb-2">
<i class="material-icons">kitchen</i>
<a class="nav-link " href="?quanly=dm&id=2" role="button" aria-haspopup="true" aria-expanded="false">
	Tủ lạnh							</a>
					<li class="nav-item  mr-lg-2 mb-lg-0 mb-2">
					<i class="material-icons">inventory</i>
<a class="nav-link " href="?quanly=dm&id=3" role="button" aria-haspopup="true" aria-expanded="false">
	Máy giặt							</a>
					<li class="nav-item  mr-lg-2 mb-lg-0 mb-2">
					<i class="material-icons">smartphone</i>
<a class="nav-link " href="?quanly=dm&id=4" role="button" aria-haspopup="true" aria-expanded="false">
	Điện thoại							</a>
					<li class="nav-item  mr-lg-2 mb-lg-0 mb-2">
					<i class="material-icons">tv</i>
<a class="nav-link " href="?quanly=dm&id=9" role="button" aria-haspopup="true" aria-expanded="false">
	TiVi							</a>
					</li>

						
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
						<i class="material-icons">newspaper</i>
						<?php 
						$sql_danhmuctin=mysqli_query($mysqli,"select * from danhmuc_tin order by danhmuctin_id desc");
						 ?>
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Tin tức
							</a>
							<div class="dropdown-menu">
								<?php 
								while($row_danhmuctin=mysqli_fetch_array($sql_danhmuctin)){
								?>
								 <a class="dropdown-item" href="?quanly=tintuc&id_tin=<?php echo $row_danhmuctin['danhmuctin_id'] ?>"><?php echo $row_danhmuctin['tendanhmuc']  ?></a>
								<?php
								}
								?>
							</div>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
						<i class="material-icons">feed</i>
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Trang
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="html/product.html">Sản phẩm mới</a>
								
								
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="html/checkout.html">Kiểm tra hàng</a>
								<a class="dropdown-item" href="html/payment.html">Thanh toán</a>
							</div>
						</li>
						<li class="nav-item">
						<i class="material-icons">contact_support</i>
							<a class="nav-link" href="?quanly=lienhe">LH & Phản Hồi</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->