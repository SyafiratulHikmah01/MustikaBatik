<br><br><br><br>
		
	<!-- Shoping Cart -->
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-10 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">

								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2">Kode Transaksi</th>
									<th class="column-3">Tgl Order</th>
									<th class="column-4">Status</th>
									<th class="column-5">Total</th>
									<th class="column-6">Action</th>

								</tr>
			<?php $i = 1;
			foreach($get->result() as $key) :?>

								<tr class="table_row">
									<td class="column-1"> <?= $i++; ?> </td>
									<td class="column-2"><?= $key->id_pembelian; ?></td>
									<td class="column-3"><?= $key->tanggal_pembelian; ?></td>
									<td class="column-4">
<?php echo $key->status_pembelian; ?> Barang

									</td>
									<td class="column-5">Rp.<?= number_format($key->total_pembelian) ?></td>
									<td>
										<a href="<?php echo base_url(); ?>Invoice/detail/<?php echo $key->id_pembelian; ?>" class="btn btn-primary"   target="_blank"><i class="fa fa-search-plus" ></i>Detail</a>


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
				<a href="<?php echo base_url();?>cart/delete_cart/" class="btn btn-danger" >Delete</a>
			</div>
		</div>
	</div>
</div> 

<!-- Modal -->
<div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
        <h5 class="modal-title" id="exampleModalLongTitle">Jumlah Barang </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	<form action="<?= base_url(); ?>cart/update_barang/" method="post">
			<div class="modal-content">
				
						<div class="wrap-num-product flex-w m-l-auto m-r-0">
								<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
									<i class="fs-16 zmdi zmdi-minus"></i>
									</div>

				<input class="mtext-104 cl3 txt-center num-product" type="number" name="qty" value="">

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



					</div>
				</div>
			</div>
		</div>
		
	
		
