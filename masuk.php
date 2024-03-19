<?php include 'header.php'; ?>

<!-- BREADCRUMB -->
<div id="breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Login</li>
		</ul>
	</div>
</div>
<!-- /BREADCRUMB -->

<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			
			<div class="col-md-6 col-md-offset-3">
				<div class="order-summary clearfix">
					<div class="section-title">
						<h3 class="title">Login</h3>
					</div>
					
					<?php 
					if(isset($_GET['alert'])){
						if($_GET['alert'] == "terdaftar"){
							echo "<div class='alert alert-success text-center'>Selamat akun anda telah disimpan, silahkan login.</div>";
						}elseif($_GET['alert'] == "gagal"){
							echo "<div class='alert alert-danger text-center'>Email dan Password tidak sesuai, coba lagi.</div>";
						}elseif($_GET['alert'] == "login-dulu"){
							echo "<div class='alert alert-warning text-center'>Silahkan login terlebih dulu untuk membuat pesanan.</div>";
						}
					}
					?>
					
					<!-- Form login -->
					<div class="text-center">
						<a href="login_customer.php" class="text-uppercase primary-btn">Login Customer</a>
						<a href="login.php" class="text-uppercase primary-btn">Login Admin</a>
					</div>
					<!-- /Form login -->
				</div>
			</div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->

<?php include 'footer.php'; ?>
