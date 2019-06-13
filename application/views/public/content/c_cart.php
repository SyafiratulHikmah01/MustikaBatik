
		

	<!-- Product -->
<!-- 	<br>
	<br>
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10"> 
						<h3 class="ltext-103 cl5"> </br> Data Belanja anda </h3> 
</br> 

				</div> -->

		
	
<!--       <div class="wrap-pic-w pos-relative"> </br></br>
<table class="bordered responsive-table">
	
	<thead>
		<tr>
			<td>#</td>
			<td>nama barang</td>
			<td>nama barang</td>
			<td>nama barang</td>
			<td>nama barang</td>
			<td>nama barang</td>
			<td>nama barang</td>

		</tr>
	</thead>

		</table>
		<tbody>	
			<?php $i = 1;
			foreach($this->cart->contents() as $key) :?>
			<tr>
				<td><?= $i++;  ?></td>
				<td><?= $key['id'];  ?></td>
				<td><?= $key['name']; ?></td>
				<td><?= $i++;  ?></td>

			</tr>
		<?php endforeach; ?>
		</tbody>
      	
 					
				</div>
			</div>
		</div>
	</div> -->
		
	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">

								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2">Nama</th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
									<th class="column-5">Action</th>

								</tr>
			<?php $i = 1;
			foreach($this->cart->contents() as $key) :?>

								<tr class="table_row">
									<td class="column-1"> <?= $i++; ?> </td>
									<td class="column-2"><?= $key['name'] ?></td>
									<td class="column-3"><?= $key['berat'] ?></td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product2" value="<?= $key['qty'] ?>">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5">Rp.<?= number_format($key['price']) ?></td>
									<td>
										<a href="#<?= $key['rowid'];?>" class="btn btn-primary"><i class="fa fa-edit" data-toggle="modal"></i>Update</a>
										<a href="<?php base_url(); ?>cart/delete/<?= $key['rowid']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>

									</td>
								</tr>
<div class="modal" id="<?= $key['rowid']; ?> ">
	<form action="<?= base_url(); ?>cart/update/<?= $key['rowid']; ?>" method="post">
			<div class="modal-content">
				
				<div class="input-field">

<input  type="number" name="qty" value="<?= $key['qty'] ?>">
<label for="qty <?= $key['rowid']; ?>	 ">jumlah pesan</label>
				</div>

			</div>
	</form>
</div>
		<?php endforeach; ?>
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
						<a href="" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">Kembali</a>


						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									$79.65
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									There are no shipping methods available. Please double check your address, or contact us if you need any help.
								</p>
								
								<div class="p-t-15">
									<span class="stext-112 cl8">
										Calculate Shipping
									</span>

									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select class="js-select2" name="time">
											<option>Select a country...</option>
											<option>USA</option>
											<option>UK</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>

									<div class="bor8 bg0 m-b-12">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="State /  country">
									</div>

									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="postcode" placeholder="Postcode / Zip">
									</div>
									
									<div class="flex-w">
										<div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
											Update Totals
										</div>
									</div>
										
								</div>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									Rp.<?php echo number_format($this->cart->total()); ?>

								</span>
							</div>
						</div>

						<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
		
	
		
