<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    
    <title>User Management</title>
    
    <?php include('header.php'); ?>
    
    <!-- javascripts for inline form validation -->
	<script src="<?php echo base_url();?>assets/js/jquery.validationEngine.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.validationEngine-en.js"></script>
    
    <script>
	    jQuery(document).ready(function()
			{
				// binds form submission and fields to the validation engine
				jQuery("#login_form").validationEngine();
				
			});
	    var baseurl =  "<?php echo base_url() ?>"; 
    </script>
    <!-- javascripts for login form validation-->
    <script src="<?php echo base_url();?>assets/js/ajax_user_login.js"></script>
    
</head>
<body>
    
    <div class="loginBox">        
        <div class="loginHead">
            <img src="<?php echo base_url(); ?>assets/img/logo.png" alt=" admin panel" title="Aquarius -  responsive admin panel"/>
			
        </div>
        <!-- <form class="form-horizontal" action="index.html" method="POST"> -->
        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'login_form');?>
        <?php echo form_open('login/login_validate',$attributes);?>            
            <div class="control-group">
                <label for="username">User Name</label>                
                <input type="text" id="username" class="validate[required]"/>
            </div>
            <div class="control-group">
                <label for="password">Password</label>                
                <input type="password" id="password"class="validate[required]"/>                
            </div>
            <div class="control-group" style="margin-bottom: 5px;">                
                <label class="checkbox"><input type="checkbox"> Remember me</label>                                                
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-block" id="login_submit">Sign in</button>
            </div>
        </form>        
        
    </div>    
    
</body>
</html>
