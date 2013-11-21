<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    
    <title>User List</title>

    <?php include('header.php'); ?>
    
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
            <li class="active">
                <a href="<?php echo base_url();?>users">
                    <span class="isw-list"></span><span class="text">User List</span>
                </a>
            </li>
            <li>
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
                <li class="active">Users</li>
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
                                    <a href="<?php echo base_url();?>login/log_out" class= "name">Logout</a>  
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
                        <div class="isw-list"></div>
                        <h1>User List</h1>                               
                    </div>
                    <div class="block-fluid table-sorting clearfix">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkall"/></th>
                                    <th width="25%">User Name </th>
                                    <th width="25%">First Name</th>
                                    <th width="25%">User Group </th>
                                    <th width="25%">Actions</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                            	<?php 
	                            	foreach( $userDetails as $row )
	                            	{
	                            		echo '<tr>';
		                                echo '<td><input type="checkbox" name="checkbox"/></td>';
		                                echo '<td>'; echo $row->user_name; echo '</td>';
		                                echo '<td>'; echo $row->firstname; echo '</td>';
		                                echo '<td>'; echo $row->usergroup; echo '</td>';
		                                echo '<td>
		                                    	<button class="btn btn-success" type="button" style="padding: 2px 14px" >Edit</button>
		                                    	<button class="btn btn-danger" type="button" style="padding: 2px 14px" >Delete</button>
		                                    	
		                                    </td>                                    
		                                </tr>';
	                            	}
                            	?>	              
                            </tbody>
                        </table>
                    </div>
                </div>                                
                
            </div>            
            
            <div class="dr"><span></span></div>           
            
        </div>
        
    </div>   
    
</body>
</html>
