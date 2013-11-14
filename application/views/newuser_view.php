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
    
</head>
<body>
    
    <div class="header">
        <a class="logo" href="index.html"><img src="<?php echo base_url();?>assets/img/logo.png" alt=""/></a>
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
                <a href="forms.html">
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
                    <div class="block-fluid">                        
                        
                        <div class="row-form clearfix">
                            <div class="span3">User Name </div>
                            <div class="span9"><input type="text" value=""/></div>
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
                                <input value="" class="validate[required,minSize[5]]" type="password" name="password" id="password"/>
                                <span>Minimum 5 characters</span>
                            </div>
                        </div>   
                        
                        <div class="row-form clearfix">
                            <div class="span3">First Name </div>
                            <div class="span9"><input type="text" value=""/></div>
                        </div> 
                        
                        <div class="row-form clearfix">
                            <div class="span3">E-mail:</div>
                            <div class="span9"><input value="" class="validate[required,custom[email]]" type="text" name="email" id="email" />  <span>Example: someone@nowhere.com</span></div>
                        </div>  
                        
                        <div class="row-form clearfix">
                            <div class="span3">Phone </div>
                            <div class="span9"><input type="text" value=""/></div>
                        </div> 
                        
                        <div class="row-form clearfix">
                            <div class="span3">Address </div>
                            <div class="span9"><input type="text" value=""/></div>
                        </div> 
                        
                        <div class="row-form clearfix">
                            <div class="span3">Loan Type</div>
                            <div class="span9"><input type="text" value=""/></div>
                        </div>
                        
                        <div class="row-form clearfix">
                            <div class="span3">Purpose of the Loan </div>
                            <div class="span9"><input type="text" value=""/></div>
                        </div>
                        
                                               
                        <div class="row-form clearfix">
                            <div class="span3">Note</div>
                            <div class="span9">
                            	<!-- <textarea name="textarea">Some text in textarea field...</textarea></div> -->
                            	<textarea id="wysiwyg" name="text" style="height: 300px;"></textarea>
                        	</div>                                                                      
                        
                    	</div>
                    	<div class="row-form clearfix">
                    		<div class="span3"></div>
                    		<div class="span9">
                    		<button class="btn" type="button" style="width: 30%; margin-left: 25% ">Save</button>
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
