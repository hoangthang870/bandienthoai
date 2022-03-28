
<?php
//session_destroy();
//unset('dangnhap');
if(isset($_POST['dangnhap_home'])){
    $taikhoan=$_POST['email_login'];
    $matkhau=md5($_POST['password_login']);
    if($taikhoan==''||$matkhau==''){
        echo '<script>alert("Làm ơn không để trống!!!")</script>';
    }else{
        $sql_select_admin=mysqli_query($mysqli,"select * from khachhang where email='$taikhoan' and password='$matkhau' limit 1");
        $count=mysqli_num_rows($sql_select_admin);
        $row_dangnhap=mysqli_fetch_array($sql_select_admin);
        if($count>0){
            $_SESSION['dangnhap_home']=$row_dangnhap['name'];
			$_SESSION['khachhang_id']=$row_dangnhap['khachhang_id'];
			header('location:index.php?quanly=giohang');
        }else{
            echo '<script>alert("Tài khoản hoặc mật khẩu bị sai!!!")</script>';
        }
        
    }
}elseif(isset($_POST['dangky'])){
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$note=$_POST['note'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$giaohang=$_POST['giaohang'];
	$sql_khachhang=mysqli_query($mysqli,"insert into khachhang(name,phone,address,note,email,password,giaohang) value('$name','$phone','$address','$note','$email','$password','$giaohang')");
	$sql_select_khachhang=mysqli_query($mysqli,"select * from khachhang order by khachhang_id desc limit 1");
	$row_khachhang=mysqli_fetch_array($sql_select_khachhang);
	$_SESSION['dangnhap_home']=$name;
	$_SESSION['khachhang_id']=$row_khachhang['khachhang_id'];
	header('location:index.php?quanly=giohang');
}elseif(isset($_GET['dangxuat'])){
	$id=$_GET['dangxuat'];
	if($id==1){
		unset($_SESSION['dangnhap_home']);
	}
	header('location:index.php');
	
	
}
?>
<!-- top-header -->
<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<?php
						if(isset($_SESSION['dangnhap_home'])){
						?>
					<!--	<li class="text-center  text-white"style="float:right">
							<a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>" class="text-white">
								<i class="fas fa-truck mr-3"></i>Xem đơn hàng : <?php echo $_SESSION['dangnhap_home'] ?></a>
						</li>-->
<!--						<style>
							#nav {
    display:inline-block;
    position: relative;
}

#nav li {
    list-style-type:none;
	width:100%;

}
#nav > li {
    display: inline-block;
}
#nav li a {
    
    text-decoration: none;
   
    padding: 0 24px;
    display: block;
}
#nav li a {
    text-transform: uppercase;
}
#nav li:hover > a {
   
}

#nav .subnav {
    display: none;
    position: absolute;
    background-color: black;
    box-shadow: 0 0 10px rgb(0 0 0 / 30%);
    z-index: 2;
}
#nav .subnav a {
    display: inline-block;
    width: 100%;
}
#nav li:hover .subnav {
    display: block;
}
#nav .subnav li:hover a {
	display: inline-block;
    color:black;
    background-color: rgba(204, 204, 204, 0.5);
}-->
							<style>
								.nav{
									display: inline-block;
									right: -438px;
									padding: 0 0;
								}
							</style>
							<ul class="nav-link dropdown-toggle nav-item dropdown mr-lg-2 mb-lg-0 mb-2 nav">
								<li>
						<a class="text-white">
								<?php echo $_SESSION['dangnhap_home'] ?></a>
						<ul class="dropdown-menu">
                       		<li class="dropdown-item"><a href="index.php?quanly=giohang&dangxuat=1"  name="dangxuat" class="">
							Đăng xuất </a></li>
                       		<li class="dropdown-item"><a href="index.php?quanly=xemdonhang&khachhang=" class="">
								Xem đơn hàng</a></li>
                   		</ul>
						</li>
						</ul>
						<?php
						}  else { 
						?>
						<li class="text-center text-white" style="float:right;">
							<a href="#" data-toggle="modal" data-target="#dangky" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Đăng kí </a>
						</li>
						<li class="text-center  text-white" style="float:right; padding: 0px 5px">
							<a href="#" data-toggle="modal" data-target="#dangnhap" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Đăng nhập </a>
						</li>
						<?php
						}       
						?>
						<li class="text-center text-white" style="float:left;padding:2px 5px;margin: 0px 85px 0px 0px;">
							<i class=""></i> DI ĐỘNG NHẬT LỆ JAPAN 
						</li>
						<li class="text-center  text-white" style="float:left;padding:5px 0px">
						<a>Địa chỉ: Hàm Ninh - Quảng Bình</a>
						<a href="#" class="text-white">
							<i class="fas fa-phone mr-2"></i>0848348884</a>
						</li>
						
						
					<!--	<li class="text-center text-white" style="float:right;">
							<a href="#" data-toggle="modal" data-target="#dangky" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Đăng kí </a>
						</li>
					-->
					<!--	<li class="text-center text-white" style="float:right">
							<a href="index.php?quanly=giohang&dangxuat=1"  name="dangxuat" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Đăng xuất </a>
						</li>-->
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>
    
<!-- modals -->
	<!-- log in -->
	<div class="modal fade" id="dangnhap" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Đăng nhập</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email_login" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật khẩu</label>
							<input type="password" class="form-control" placeholder=" " name="password_login" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" name="dangnhap_home" value="Đăng nhập">
						</div>
						<p class="text-center dont-do mt-3">Chưa có tài khoản?
							<a href="#" data-toggle="modal" data-target="#dangky">
								Đăng ký</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
	<div class="modal fade" id="dangky" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Đăng ký</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="post">
						<div class="form-group">
							<label class="col-form-label">Tên khách hàng</label>
							<input type="text" class="form-control" placeholder=" " name="name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="password" required="">
							<input type="hidden" class="form-control" name="giaohang" value="1">
						</div>
						<div class="form-group">
							<label class="col-form-label">Phone</label>
							<input type="text" class="form-control" placeholder=" " name="phone" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Address</label>
							<input type="text" class="form-control" placeholder=" " name="address" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" name="dangky" value="Đăng ký">
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.php" class="font-weight-bold font-italic">
							<img src="images/logodmt.jpg" alt=" " class="img-fluid">DMT
					
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="index.php?quanly=timkiem" method="POST">
								<input class="form-control mr-sm-2" name="seach_product" type="search" placeholder="Tìm kiếm" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" name="seach_button" type="submit">Tìm kiếm</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                            <div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="?quanly=giohang" method="post" class="last">
								
									<!-- <input type="hidden" name="cmd" value="_cart"> -->
									
									<button class="btn w3view-cart" type="submit" name="slsp_giohang" value="">
										<i class="fas fa-cart-arrow-down"></i>
										
									</button>
									
								</form>
							</div>
							

							
							
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->