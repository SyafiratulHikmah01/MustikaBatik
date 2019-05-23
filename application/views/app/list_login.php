<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Admin</title>
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
    <div class="row text-center ">
      <div class="col-md-12">
        <br /><br />
        <h2> Batik Online : Login</h2>

        <h5>( Login yourself to get access )</h5>
        <br />
      </div>
    </div>
    <div class="row ">

      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong>   Enter Details To Login </strong>  
          </div>
          <div class="panel-body">
            <form role="form" method="post" action="<?php echo site_url('loginproses/proses_login'); ?>">
             <br />
             <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
              <input type="text" class="form-control" name="username" placeholder="username" value="<?php echo set_value('username'); ?>" />
            </div>
            <?php echo form_error('username');?>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
              <input type="password" class="form-control"  name="password" placeholder="password" value="<?php echo set_value('password'); ?>"/>
            </div>
            <?php echo form_error('password');?>
            <!-- <div class="form-group">
              <label class="checkbox-inline">
                <input type="checkbox" /> Remember me
              </label>
              <span class="pull-right">
               <a href="#" >Forget password ? </a> 
             </span>
           </div> -->
           <br>

           <button class="btn btn-primary" name="login">Login</button>
           <hr />
           Not register ? <a href="<?php echo site_url('loginproses/register') ?>" >click here </a> 
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
