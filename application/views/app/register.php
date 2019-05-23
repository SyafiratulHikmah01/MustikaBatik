<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url(); ?>/assets2/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url(); ?>/assets2/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url(); ?>/assets2/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> Binary Admin : Register</h2>
               
                <h5>( Register yourself to get access )</h5>
                <br />
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  New User ? Register Yourself </strong>
                            </div>
                            <div class="panel-body">                    
                                                     
                                <form method="post" enctype="multipart/form-data" method="POST" action="<?php echo site_url('loginproses/proses_register'); ?>">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Name Lengkap" name="namalengkap" value="<?php echo set_value('namalengkap'); ?>" />
                                        </div>
                                        <?php echo form_error('namalengkap');?>

                                     	<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>" />
                                        </div>
                                        <?php echo form_error('username');?>

                                         <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="email" class="form-control" placeholder="E-mail" name="email" value="<?php echo set_value('email'); ?>" />
                                        </div>
                                        <?php echo form_error('email');?>

                                      	<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Enter Password" name="password" value="<?php echo set_value('password'); ?>"/>
                                        </div>
                                        <?php echo form_error('password');?>

                                       	<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Konfirmasi Password" name="konfirmasipassword"/>
                                        </div>
                                        <?php echo form_error('konfirmasipassword');?>
                                    
                                     
                                     <button type="submit" class="btn btn-primary" name="register">Register</button>
                                    <hr />
                                    Already Registered ?  <a href="<?php echo site_url('loginproses/login') ?>" >Login here</a>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
        </div>
    </div> 


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
