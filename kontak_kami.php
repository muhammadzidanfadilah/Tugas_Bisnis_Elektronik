<?php 
	include 'header.php';
 ?>

<!-- BREADCRUMB -->
<div id="breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="kontak_kami.php">Kontak Kami</a></li>
		</ul>
	</div>
</div>


<!-- CONTACT -->
<div id="contact" class="section" style="background-color: #f9f9f9; padding: 60px 0; text-align: center;">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Contact Information -->
            <div class="col-md-6">
                <div class="section-title">
                    <h3 class="title" style="color: #333; font-size: 28px; margin-bottom: 30px;">Hubungi Kami</h3>
                </div>
                <ul class="contact-info" style="list-style: none; padding-left: 0; text-align: left;">
                    <li style="color: #333; margin-bottom: 20px; font-size: 16px;"><i class="fa fa-envelope" style="color: #e74c3c; margin-right: 10px;"></i> Email: WRG-ZIDAN@Gmail.com</li>
                    <li style="color: #333; margin-bottom: 20px; font-size: 16px;"><i class="fa fa-phone" style="color: #e74c3c; margin-right: 10px;"></i> Telepon: 098675123</li>
                    <li style="color: #333; margin-bottom: 20px; font-size: 16px;"><i class="fa fa-map-marker" style="color: #e74c3c; margin-right: 10px;"></i> Alamat: Jl Garuda. Blok A9 No 24, Bekasi, Indonesia</li>
                </ul>
            </div>
            <!-- /Contact Information -->
            
            <!-- Contact Form -->
            <div class="col-md-6">
                <div class="section-title">
                    <h3 class="title" style="color: #333; font-size: 28px; margin-bottom: 30px;">Kirim Pesan</h3>
                </div>
                <form id="contact-form">
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Nama Anda" style="margin-bottom: 20px; border-radius: 5px; border: 1px solid #ccc; padding: 15px; width: 100%;">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Anda" style="margin-bottom: 20px; border-radius: 5px; border: 1px solid #ccc; padding: 15px; width: 100%;">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="subject" placeholder="Subjek Pesan" style="margin-bottom: 20px; border-radius: 5px; border: 1px solid #ccc; padding: 15px; width: 100%;">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Pesan Anda" style="margin-bottom: 20px; height: 150px; border-radius: 5px; border: 1px solid #ccc; padding: 15px; width: 100%;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: #e74c3c; border-color: #e74c3c; border-radius: 5px; padding: 15px 30px; font-size: 16px;">Kirim Pesan</button>
                </form>
            </div>
            <!-- /Contact Form -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /CONTACT -->

<?php 
	include 'footer.php';
 ?>
