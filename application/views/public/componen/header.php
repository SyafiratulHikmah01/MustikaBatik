<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">

       <?php if ($this->session->userdata('id')): ?>
                  <a href="<?php echo base_url()?>pelanggan/logout"   class="flex-c-m trans-04 p-lr-25">Logout</a>
                  <a href="<?php echo base_url()?>Invoice/index"   class="flex-c-m trans-04 p-lr-25">History Pemesanan</a>
						<a href="#" class="flex-c-m trans-04 p-lr-25">
<?php echo $this->session->userdata('nama'); ?>
						</a>
             <?php else: ?>
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>
                  <a href="#" data-toggle="modal" data-target="#login-modal" class="flex-c-m trans-04 p-lr-25">Sign In</a>
          <?php endif ?>


						<a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							USD
						</a>
					</div>
				</div>
			</div>
      <!-- Login Modal-->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
      	<br>
      	<br>
      	<br>
      	<br>
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
          <div class="modal-body">
              <form action="<?php echo base_url().'pelanggan/login/' ?>" method="POST">
                <div class="form-group">
                  <input id="email_modal" name="email_pelanggan" type="email_pelanggan" placeholder="email_pelanggan" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password_modal" type="password_pelanggan" name="password_pelanggan" placeholder="password_pelanggan" class="form-control">
                </div>
   <p class="text-center">
      <button class="btn btn-template-outlined" type="submit" name="submit" value="Submit"  ><i class="fa fa-sign-in"  ></i> Log in</button>
                </p>
              </form>

              <p class="text-center text-muted">Not registered yet?</p>
              <p class="text-center text-muted"><a href="customer-register.php"><strong>Register now</strong></a>! Mudah Sekali Hanya Memasukkan Beberapa datalalu anda dapat mengaksess seluruh fitur kami!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="<?php echo base_url()?>HomeUser/index" class="logo">
						<img src="<?php echo base_url(); ?>assets3/images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="<?php echo base_url()?>HomeUser/index">Home</a>
							</li>

							<li>
								<a href="<?php echo base_url()?>Produk/index">Shop</a>
							</li>

							<!-- <li class="label1" data-label1="hot">
								<a href="shoping-cart.html">Features</a>
							</li>
 
							<li>
								<a href="<?php echo base_url('blog/index'); ?>">Blog</a>
							</li> -->

							<li>
								<a href="<?php echo base_url()?>ProfileUser/index">About</a>
							</li>

							<li>
								<a href="<?php echo base_url()?>TestimoniUser/index">Testimoni</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
       <?php if ($this->session->userdata('id')): ?>
						<div class="icon-header-item cl2 hov-cl1  p-r-11 icon-header-noti " data-notify="						<?php

						$jml = 0;

						foreach($this->cart->contents() as $key ):?>
 						<?php $jml += $key['qty']; ?>

						<?php endforeach; ?>
						<?php echo "$jml"; ?>
						">
						<a href="<?php echo base_url('cart/index'); ?>"><i class="zmdi zmdi-shopping-cart"></i>


					</a>

						</div>
             <?php else: ?>

						<div class="icon-header-item cl2 hov-cl1  p-r-11 icon-header-noti " data-notify="						<?php

						$jml = 0;

						foreach($this->cart->contents() as $key ):?>
 						<?php $jml += $key['qty']; ?>

						<?php endforeach; ?>
						<?php echo "$jml"; ?>
						">
						<a href="<?php echo base_url('cart/index'); ?>" data-toggle="modal" data-target="#login-modal"  ><i class="zmdi zmdi-shopping-cart"></i>


					</a>

						</div>

          <?php endif ?>



						<!-- <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a> -->
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="<?php echo base_url()?>HomeUser/index"><img src="<?php echo base_url(); ?>assets3/images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m">
       <?php if ($this->session->userdata('id')): ?>
						<div class="icon-header-item cl2 hov-cl1  p-r-11 icon-header-noti " data-notify="						<?php

						$jml = 0;

						foreach($this->cart->contents() as $key ):?>
 						<?php $jml += $key['qty']; ?>

						<?php endforeach; ?>
						<?php echo "$jml"; ?>
						">
						<a href="<?php echo base_url('cart/index'); ?>"><i class="zmdi zmdi-shopping-cart"></i>


					</a>

						</div>
             <?php else: ?>

						<div class="icon-header-item cl2 hov-cl1  p-r-11 icon-header-noti " data-notify="						<?php

						$jml = 0;

						foreach($this->cart->contents() as $key ):?>
 						<?php $jml += $key['qty']; ?>

						<?php endforeach; ?>
						<?php echo "$jml"; ?>
						">
						<a href="<?php echo base_url('cart/index'); ?>" data-toggle="modal" data-target="#login-modal"  ><i class="zmdi zmdi-shopping-cart"></i>


					</a>

						</div>

          <?php endif ?>



						<!-- <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a> -->
					</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="<?php echo base_url()?>HomeUser/index">Home</a>
					<!-- <ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span> -->
				</li>

				<li>
					<a href="<?php echo base_url()?>Produk/index">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="<?php echo base_url(); ?>assets3/images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
