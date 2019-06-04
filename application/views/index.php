<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('public/componen/head') ?>
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
<?php $this->load->view('public/componen/header') ?>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

<?php $this->load->view('public/componen/cart') ?>
					</div>
				</div>
			</div>
		</div>
	</div>

		

	<!-- Slider -->
	<section class="section-slide">
<?php $this->load->view($content) ?>
	</section>


	<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">

<?php $this->load->view('public/componen/footer') ?>

	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
<?php $this->load->view('public/componen/modal') ?>
	</div>
<!-- js -->
<?php $this->load->view('public/componen/js') ?>

</body>
</html>