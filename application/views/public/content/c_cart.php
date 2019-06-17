<?php  
  if ($this->session->flashdata('alert'))
   {
      echo '<div class="alert alert-danger alert-message">';
      echo $this->session->flashdata('alert');
      echo '</div>';  # code...
  } else if ($this->session->flashdata('success')) {
      echo '<div class="alert alert-success alert-message">';
      echo $this->session->flashdata('success');
      echo '</div>';
  }
 ?>
<br><br><br><br>
		
	<!-- Shoping Cart -->
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
									<td class="column-3"><?= $key['berat'] ?>g</td>
									<td class="column-4">
<?php echo $key['qty'] ?> Barang

									</td>
									<td class="column-5">Rp.<?= number_format($key['qty']*$key['price']) ?></td>
									<td>
										<a href="#<?= $key['rowid'];?>" class="btn btn-primary"  data-toggle="modal"><i class="fa fa-edit" ></i>Update</a>
										<a href="#Delete" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>

									</td>
								</tr>
<!-- modal --><!-- Button trigger modal -->
<div id="Delete" class="modal fade">
	<br>
	<br>
	<br>
	<br>
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="glyphicon glyphicon-ban-circle">	</i>
				</div>				
				<h4 class="modal-title">Apakah kamu yakin ?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Apakah kamu ingin menghapus data ini ? Setelah di hapus data tidak dapat di kembalikan.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
				<a href="<?php echo base_url();?>cart/delete_cart/<?= $key['rowid']; ?>" class="btn btn-danger" >Delete</a>
			</div>
		</div>
	</div>
</div> 

<!-- Modal -->
<div class="modal fade" id="<?= $key['rowid']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<br>
	<br>
	<br>
	<br>

  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
        <h5 class="modal-title" id="exampleModalLongTitle">Jumlah Barang <?php echo $key['name'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	<form action="<?= base_url(); ?>cart/update_barang/<?php echo $key['rowid'] ?>" method="post">
			<div class="modal-content">
				
						<div class="wrap-num-product flex-w m-l-auto m-r-0">
								<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
									<i class="fs-16 zmdi zmdi-minus"></i>
									</div>

				<input class="mtext-104 cl3 txt-center num-product" type="number" name="qty" value="<?= $key['qty'] ?>">

								<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
								<i class="fs-16 zmdi zmdi-plus"></i>
							</div>
						</div>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
      </div>
	</form>

    </div>
  </div>
</div>
		<?php endforeach; ?>
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">

						<button type="button" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10" onclick="window.history.go(-1)">kembali</button>


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
Rp.<?= number_format($this->cart->total()) ?>
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
									Untuk Ongkir Dapat Di lihat di sini <a href="https://rajaongkir.com/" target="_blank">"Raja Ongkir"</a>
								</p>
								
								<div class="p-t-15">
									<span class="stext-112 cl8">
										Calculate Shipping
									</span>
<form method="post" action="<?php echo base_url('cart/checkout'); ?>">
									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">

										<select class="js-select2" name="kota" id="kota">
											<option>Pilih Kota</option>
											<option>Pacitan</option>
											<option>Ponorogo</option>
											<option>Trenggalek</option>
											<option>Situbondo</option>
											<option>Bondowoso</option>
											<option>Banyuwangi</option>
											<option>Jember</option>
											<option>Lumajang</option>
											<option>Tulungagung</option>
											<option>Tuban</option>
											<option>Sidoarjo</option>
											<option>Bangil</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>

									<div class="bor8 bg0 m-b-12">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="alamat" placeholder="Alamat">
									</div>

									<div class="bor8 bg0 m-b-22">

										<input type="hidden" name="harga" id="harga" value="<?=$this->cart->total() ?>">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="number" name="tarif" id="ongkir" placeholder="Ongkir " onChange="gettotal_harga()">
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
									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="number" name="total" placeholder="Harga Total" readonly="" id="total_harga">
									</div>
							</div>
       <?php if ($this->session->userdata('id')): ?>

						<button type="submit" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10" name="submit" value="Submit" >PROCEED CHECkOUT</button>
             <?php else: ?>


						<a href="#" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10"  data-toggle="modal" data-target="#login-modal"> PROCEED CHECKOUT</a>

          <?php endif ?>
						</div>
 </form>

					</div>
				</div>
			</div>
		</div>
		
	
		
