
		

	<!-- Product -->
	<br>
	<br>
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10"> 
						<h3 class="ltext-103 cl5"> </br> Data Belanja anda </h3> 
</br> 

				</div>

		
	
      <div class="wrap-pic-w pos-relative"> </br></br>
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
	</div>
		
							<!-- Load more -->
			<!-- <div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div> -->
