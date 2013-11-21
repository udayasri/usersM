<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->

    <title>Add New User</title>

    <?php include('header.php'); ?>
    
    <script>
	    var baseurl =  "<?php echo base_url() ?>"; 
    </script>
    <!-- javascript for  add new user -->
    <script src="<?php echo base_url();?>assets/js/ajax_add_new_user.js"></script>
    
</head>
<body>
    
    <div class="header">
        <a class="logo" href="<?php echo base_url()?>users"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" title="UAMC Admin Panel"/></a>
        <ul class="header_menu">
            <li class="list_icon"><a href="#">&nbsp;</a></li>
        </ul>    
    </div>
    
    <div class="menu">                
        
        <ul class="navigation">            
            <li>
                <a href="<?php echo base_url();?>users">
                    <span class="isw-list"></span><span class="text">User List</span>
                </a>
            </li>
            <li class="active" >
                <a href="<?php echo base_url();?>newuser">
                    <span class="isw-user"></span><span class="text">Add New User</span>
                </a>              
            </li>          
            <li>
                <a href="<?php echo base_url();?>usergroup">
                    <span class="isw-users"></span><span class="text">User Grops</span>                 
                </a>
            </li>                        
            <li>
                <a href="#">
                    <span class="isw-text_document"></span><span class="text">Profile</span>
                </a>
            </li>                                                             
        </ul>
               
        <div class="dr"><span></span></div>     
        
    </div>
        
    <div class="content">
        
        
        <div class="breadLine">
            
            <ul class="breadcrumb">
                <li><a href="#">UAMC Admin</a> <span class="divider">></span></li>                
                <li class="active">Add New User </li>
            </ul>

            <ul class="buttons">
                <li>
                    <a href="#" class="link_bcPopupList"><span class="icon-user"></span><span class="text">Hi admin</span></a>

                    <div id="bcPopupList" class="popup">
                        <!-- <div class="head clearfix">
                            <div class="arrow"></div>
                            <span class="isw-users"></span>
                            <span class="name">List users</span>
                        </div> -->
                        <div class="body-fluid users">

                            <div class="item clearfix">
                                <div class="image"><i class="isb-user"></i></div>
                                <div class="info">
                                    <a href="#" class="name">Profile Management</a>                                    
                                    <!-- <span>online</span> -->
                                </div>
                            </div>

                            <div class="item clearfix">
                                <div class="image"><i class="isb-unlock"></i></a></div>
                                <div class="info">
                                    <a href="#" class="name">Change Password</a>                                
                                </div>
                            </div>                        

                            <div class="item clearfix">
                                <div class="image"><i class="isb-power"></i></a></div>
                                <div class="info">
                                    <a href="#" class="name">Logout</a>  
                                </div>
                            </div>                              
                                                             

                        </div>
                        <div class="footer">
                            <!-- <button class="btn" type="button">Add new</button> -->
                            <button class="btn btn-danger link_bcPopupList" type="button">Close</button>
                        </div>
                    </div>                    
                    
                </li>                
            </ul>
            
        </div>
        
        <div class="workplace">
            
            <div class="row-fluid">
                
                <div class="span12">
                    <div class="head clearfix">
                        <div class="isw-user"></div>
                        <h1>Add New User</h1>
                    </div>
                    <form id="validation" method="POST" action="submit.action">
                	<?php echo form_open_multipart(base_url().'newuser/addnewuser','id="add_newuser" name="add_newuser"');?>
              		<?php echo validation_errors(); ?>
                    <div class="block-fluid">                        
                        
                        <div class="row-form clearfix">
                            <div class="span3">User Name </div>
                            <div class="span9"><input type="text" value="" id="username" name="username" class="validate[required]"/></div>
                        </div> 
                        
                         <div class="row-form clearfix">
                            <div class="span3">Passowrd</div>
                            <div class="span9">        
                                <input value="" class="validate[required,minSize[5]]" type="password" name="password" id="password"/>
                                <span>Minimum 5 characters</span>
                            </div>
                        </div>
                        
                         <div class="row-form clearfix">
                            <div class="span3">Re-type Password</div>
                            <div class="span9">        
                                <input value="" class="validate[required,minSize[5]]" type="password" name="repassword" id="repassword"/>
                                <span>Minimum 5 characters</span>
                            </div>
                        </div> 
                        
                        <div class="row-form clearfix">
                            <div class="span3">User Group</div>
                            <div class="span9">
                                <select name="usergroup" id="usergroup" style="width: 100%;" id>
                                    <option value="1">group 1</option>
                                    <option value="2">group 2</option>
                                    <option value="3">group 3</option>
                                    <option value="4">group 4</option>
                                    <option value="5">group 5</option>
                                    <option value="6">group 6</option>                     
                                </select>
                            </div>
                        </div>
                        
                        <div class="row-form clearfix">
                            <div class="span3">Visible Users</div>
                            <div class="span9">
                                <select name="s2_2[]" id="s2_2" style="width: 100%;" multiple="multiple">
                                    <option value="0">abc</option>
                                    <option value="1">cde</option>
                                    <option value="2">test</option>
                                    <option value="3">ggg</option>
                                    <option value="4">xxx</option>
                                    <option value="5">testingUser</option>                     
                                </select>
                            </div>
                        </div>    
                        
                        <div class="row-form clearfix">
                            <div class="span3">First Name </div>
                            <div class="span9"><input type="text" value="" id="firstname" name="firstname"/></div>
                        </div> 
                        
                        <div class="row-form clearfix">
                            <div class="span3">E-mail:</div>
                            <div class="span9"><input value="" class="validate[required,custom[email]]" type="text" name="email" id="email" />  <span>Example: someone@nowhere.com</span></div>
                        </div>  
                        
                        <div class="row-form clearfix">
                            <div class="span3">Phone </div>
                            <div class="span9"><input type="text" value="" id="phone" name="phone"/></div>
                        </div> 
                        
                        <div class="row-form clearfix">
                            <div class="span3">Address </div>
                            <div class="span9"><input type="text" value="" id="address" name="address"/></div>
                        </div> 
                        
                        <div class="row-form clearfix">
                            <div class="span3">Loan Type</div>
                            <div class="span9"><input type="text" value="" id="loan_type" name="loan_type"/></div>
                        </div>
                        
                        <div class="row-form clearfix">
                            <div class="span3">Purpose of the Loan </div>
                            <div class="span9"><input type="text" value="" id="purpose_ofloan" name="purpose_ofloan"/></div>
                        </div>
                        
                                               
                        <div class="row-form clearfix">
                            <div class="span3">Note</div>
                            <div class="span9">
                            	<!-- <textarea name="textarea">Some text in textarea field...</textarea></div> -->
                            	<textarea id="wysiwyg" name="wysiwyg" style="height: 300px;" ></textarea>
                        	</div>                                                                      
                        
                    	</div>
                    	<div class="row-form clearfix">
                    		<div class="span3"></div>
                    		<div class="span9">
                    		<button class="btn" type="button" style="width: 30%; margin-left: 25%" id="addnew" name="addnew">Save</button>
                    		</div>
                    	</div>
                	</div>
                </form>
            </div>           
            <div class="dr"><span></span></div>
        
        </div>
        
    </div>   
    
</body>
</html>
