<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    <style>
<?php  
	$this->load->view('public/componen/head_inv');
 ?>
    </style>

 <?php $this->load->view('public/componen/head') ?>
   
</head>

<body>
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
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="5">
<?php 

    $data = $get->row();

 ?>
                    <table>
                        <tr >
                            <td class="title" >
                                <img src="<?php echo base_url(); ?>foto_profile/mustika.png" style="width:90%; max-width:300px;">
                            </td>


                            <td >
                                Invoice #: <?= $data->id_pembelian; ?><br>
                                Created: <?= $data->tanggal_pembelian; ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="5">
                    <table>
                        <tr>

                            <td>
                                Mustika Batik.<br>
                                Banyuwangi<br>
                                Alamat Mustika Batik
                            </td>
                            
                            <td>
                                <?= $data->telepon_pelanggan; ?>.<br>
                                <?= $data->nama_pelanggan; ?><br>
<?= $data->email_pelanggan; ?>                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
Status Pembayaran
                </td>
                
                <td>
                </td>
                <td>
         
                </td>
                <td>
         
                </td>
                <td>
         
                </td>
            </tr>
            
            <tr class="details">
            	<div class="text-center">
                <td>
<span> <?= $data->status_pembelian; ?></span> </td>
</div>

            </tr>
            
            <tr class="heading">
                <td>
                    Item
                </td>
                <td>
                </td>
                  <td>
                    Jumlah
                </td> 
                         <td>
                </td>      
                <td>                    Price

                </td>
            </tr>
                   <?php $i = 1;
            foreach($get->result() as $key) :
            $status = $key->status_pembelian; 
                ?> 

            <tr class="item">
                <td>
<?= $key->nama_produk; ?>                </td>
                
                <td>
                </td>
                <td>
                    <?= $key->jumlah; ?>   Barang              
                </td>
                     <td>
         
                    </td>
                     <td>
                        Rp.<?= number_format($key->subharga); ?>            
                    </td>
                </tr>
            

            <?php endforeach; ?>
            <tr class="heading">
                <td>
     
                </td>
                <td>
                    </td>
                
                <td>                </td>
                
                <td>
                </td>
                
                <td>

                </td>
            </tr>
            <td>
                Total Harga
            </td>

                <td></td>
                

                <td>
                </td>
                <td>                   
</td>                <td>                   Rp.<?= number_format($key->total_pembelian); ?>
</td>

        </table>
  
           <div class="row">
                 <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print zaeyenkk</button>
              <div class="flex-c-m trans-04 p-lr-25">
					<a href="">Kembali</a>
				</div>

                  </div>

                     <div class="flex-c-m trans-04 p-lr-25">
                          <?php if (stripos($status, "pending") !== false): ?>
  <a href="#ModalUploadBukti" class="btn btn-danger pull-right" data-toggle="modal"><i class="fa fa-credit-card"></i> Upload Bukti Pembayaran</a>
      <?php else: ?>

  <a href="#" class="btn btn-success pull-right" data-toggle="modal"><i class="fa fa-credit-card"></i> Sudah Lunas</a>
      <?php endif ?>




    </div>

    <!-- Upload modal -->
    <!-- Upload modal -->
    <div id="ModalUploadBukti" class="modal fade" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Upload Bukti Pembayaran <?php echo  $id = $this->uri->segment(3);           
 ?></h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" method="post" action="<?php echo base_url().'Invoice/upload_bukti/'.$id;?>" class="form-horizontal calender" enctype='multipart/form-data'>
                <div class="form-group">
                  <div class="col-sm-9">
                    <input type="file" class="form-control" id="imgInp" name="bukti">
                    <br>
                    <img  id="Preview" style="width: 70%">
                  </div>
                </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
          </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div id="fc_create" data-toggle="modal" data-target="#ModalUploadBukti"></div>
    <!-- /Upload modal -->
<?php $this->load->view('public/componen/js') ?>

</body>
</html>