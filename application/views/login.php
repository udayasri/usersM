<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    
    <title>User Management</title>
    
    <link href="<?php echo base_url();?>assets/css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="<?php echo base_url();?>assets/css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->    
    <link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/css/fullcalendar.print.css' media='print' />
    
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'></script>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/jquery/jquery.mousewheel.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/cookie/jquery.cookies.2.2.0.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/charts/excanvas.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/charts/jquery.flot.js'></script>    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/charts/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/charts/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/charts/jquery.flot.resize.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/sparklines/jquery.sparkline.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/fullcalendar/fullcalendar.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/select2/select2.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/uniform/uniform.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/validation/languages/jquery.validationEngine-en.js' charset='utf-8'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/validation/jquery.validationEngine.js' charset='utf-8'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/animatedprogressbar/animated_progressbar.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/qtip/jquery.qtip-1.0.0-rc3.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/cleditor/jquery.cleditor.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/dataTables/jquery.dataTables.min.js'></script>    
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/cookies.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/actions.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/charts.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins.js'></script>
    
</head>
<body>
    
    <div class="loginBox">        
        <div class="loginHead">
            <!--<img src="img/logo.png" alt="Aquarius -  responsive admin panel" title="Aquarius -  responsive admin panel"/>-->
			<p>User Management Admin Panel </p>
        </div>
        <form class="form-horizontal" action="index.html" method="POST">            
            <div class="control-group">
                <label for="username">User Name</label>                
                <input type="text" id="username"/>
            </div>
            <div class="control-group">
                <label for="password">Password</label>                
                <input type="password" id="password"/>                
            </div>
            <div class="control-group" style="margin-bottom: 5px;">                
                <label class="checkbox"><input type="checkbox"> Remember me</label>                                                
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-block">Sign in</button>
            </div>
        </form>        
        
    </div>    
    
</body>
</html>
