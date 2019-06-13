		

	<!-- Product -->
	<br>
	<br>
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10"> 
						<h3 class="ltext-103 cl5"> </br> DETAIL PRODUCT BATIK </h3> 
</br> 

				</div>

		
	
      <div class="wrap-pic-w pos-relative"> </br></br>
      	<table> 
			<tr>
				<td rowspan="9" width="700" height="450px" align="center"> <img src="<?php echo base_url(); ?>/foto_produk/<?php echo $data[0]->foto_produk;?>" >
				</td>
			</tr>
			<tr>
					<td></td><td width="1000" height="50px">  </td>
			</tr>
			<tr>
					<td width="120px"></td><td width="1000"> <h4 class="mtext-105 cl2 js-name-detail p-b-14"> <b> <?php echo $data[0]->nama_produk;?>
							</b> </h4> </td>
			</tr>
			<tr>
					<td></td><td width="1000"> <span class="mtext-106 cl2" > Rp. <?php echo number_format($data[0]->harga_produk) ;?>
							</span> </td>
			</tr>
			<tr>
					<td></td><td width="1000"> <p class="stext-102 cl3 p-t-23"> <?php echo $data[0]->deskripsi_produk;?>
							</p> </td>
			</tr>
			<tr>
					<td></td><td width="1000"> <div class="p-t-33"> <p> Jumlah Beli :</p>
								<div class="flex-w flex-r-m p-b-10"> 
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</div>	
								</div>
							</div> </td>
			</tr>
			<tr>
					<td></td><td width="1000" height="70px">  </td>
			</tr>
			<tr>
					<td></td><td width="1000">  &emsp; 

					 <a href="#" class="btn btn-danger"> Beli</a>
					 <a href="<?php echo base_url().'cart/add/'.$data[0]->id_produk ?>" class="btn btn-warning">Tambah ke Keranjang</a> </td>
			</tr>
			<tr>
					<td></td><td width="1000" height="100px">  </td>
			</tr>
		</table>
      	
 					
				</div>
			</div>
		</div>
	</div>
		
							<!-- Load more -->
			<!-- <div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div> -->
		