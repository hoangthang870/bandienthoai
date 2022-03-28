<!-- footer -->
<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->
				<div class="footer-top section-padding">
        <div class="footer-dsc">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Liên hệ</h4>
                            </div>
                            <div class="footer-text">
                                <ul>
                                    <li>
                                        <i class="mdi mdi-map-marker"></i>
                                        <p>48 Cao Thắng,</p>
                                        <p>Trường đại học sư phạm kỹ thuật</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-phone"></i>
                                        <p>(+84) 383425354</p>
                                        <p>(+84) 702076081</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-email"></i>
                                        <p>ute0700@gmail.com</p>
                                        <p>ute@ute.udn.vn</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Tài khoản</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="?act=taikhoan&xuli=account"><i class="mdi mdi-menu-right"></i>Tài khoản</a></li>
                                    <li><a href="?quanly=giohang"><i class="mdi mdi-menu-right"></i>Giỏ Hàng</a></li>
                                    <li><a href="?act=taikhoan"><i class="mdi mdi-menu-right"></i>Đăng Nhập</a></li>
                                    <li><a href="?act=quanly=giohang"><i class="mdi mdi-menu-right"></i>Thanh Toán</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Danh mục</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <?php
								$sql_category1 = mysqli_query($mysqli,"select * from danhmuc order by dm_id desc");
								while($row_title1= mysqli_fetch_array($sql_category1)){
								// while($row_dmslidebar= mysqli_fetch_array($sql_dm_slidebar)){
								?>
							
							<ul>
								<li>
									<!--<input type="checkbox" class="checked">-->
									
									<a href="?quanly=dm&id=<?php echo $row_title1["dm_id"] ?>"> <?php echo $row_title1["dm_name"] ?></a>
								</li>
								
							</ul>
							<?php
								}
								?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 r-margin-top wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Mạng xã hội</h4>
                            </div>
                            <div class="clearfix instagram">
                                <ul>
                                    <li><a href="#"><img src="images/in1.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="images/in2.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="images/in3.png" alt="Instagram" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
				<!-- //footer first section -->
				<!-- footer second section -->
				<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-dolly"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Miễn phí vận chuyển</h3>
								<p>Đơn hàng trên 1 triệu</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer my-md-0 my-4">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Vận chuyển nhanh</h3>
								<p>Toàn quốc</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Tin cậy</h3>
								<p>Sự đảm bảo</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		
	</footer>
	<!-- //footer -->
	<!-- copyright -->