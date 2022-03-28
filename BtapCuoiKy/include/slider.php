
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel"
style="width: 80%;height: 450px;border: 1px solid #0f8f49;text-align: center;margin-left: 10%;margin-bottom: 50px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
	<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
	
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">

      <img src="images/blsmc.jpg" class="d-block w-100" alt="..." style="width: 100%;height: 450px;">

      
    </div>
    <div class="carousel-item">
      <img src="images/samsung.jpg" class="d-block w-100" alt="..." style="width: 100%;height: 450px;">
    </div>
    <div class="carousel-item">
      <img src="images/tiepsuc.jpg" class="d-block w-100" alt="..." style="width: 100%;height: 450px;">
  <!--    <div class="carousel-caption d-none d-md-block">
		<h4 style="color: red; margin-left: 300px; ">KHUYỄN MÃI</h4>
		<p>Sale 20% Cho Tất Cả Sản Phẩm Trong Tháng 11</p>
	</div>-->
    </div>
    <div class="carousel-item">
      <img src="images/b2.jpg" class="d-block w-100" alt="..." style="width: 100%;height: 450px;">
  <!--    <div class="carousel-caption d-none d-md-block">
		<h4 style="color: red; margin-left: 300px; ">KHUYỄN MÃI</h4>
		<p>Sale 20% Cho Tất Cả Sản Phẩm Trong Tháng 11</p>
	</div>-->
    </div>
    <div class="carousel-item">
      <img src="images/b1.jpg" class="d-block w-100" alt="..." style="width: 100%;height: 450px;">
   <!--   <div class="carousel-caption d-none d-md-block">
		<h4 style="color: red; margin-left: 300px; ">KHUYỄN MÃI</h4>
		<p>Sale 20% Cho Tất Cả Sản Phẩm Trong Tháng 11</p>
	</div>-->
    </div>
  </div>
  
	
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


























<!-- banner -->
<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> -->
		<!-- Indicators-->
		<!-- <ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
		<?php
			$sql_slider = mysqli_query($mysqli,"select * from slider where slider_active='1' order by slider_id asc");
			while($ror_slider= mysqli_fetch_array($sql_slider)){
		?>
			<div class="carousel-item item1 active ">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p><?php echo $ror_slider["slider_caption"] ?></p>
						</div>
					</div>
				</div> 
			</div> 
			<?php
				}
			?>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> -->
	<!-- //banner -->