<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    
    <title>User Groups </title>

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
            <li>
                <a href="<?php echo base_url();?>users">
                    <span class="isw-list"></span><span class="text">User List</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url();?>newuser">
                    <span class="isw-user"></span><span class="text">Add New User</span>
                </a>              
            </li>          
            <li class="active" >
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
                <li class="active">User Groups</li>
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
                        <div class="isw-users"></div>
                        <h1>User Groups List</h1>
                        <ul class="buttons">
                            <!-- <li><a href="#" class="isw-download"></a></li>                                                        
                            <li><a href="#" class="isw-attachment"></a></li> -->
                            <li>
                                <a href="#fModal" data-toggle="modal"><span class="isw-plus" ></span></a>
                            </li>
                        </ul>                                                      
                    </div>
                    <div class="block-fluid table-sorting clearfix">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkall"/></th>
                                    <th width="20%">Group Name </th>
                                    <th width="60%">Feilds</th>
                                    <th width="15%">Actions</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="checkbox"/></td>
                                    <td>group 1</td>
                                    <td>First name , Email ,Phone, Address, Loan Type </td>
                                    <td>
                                    	<button class="btn btn-success" type="button" style="padding: 2px 14px" >Edit</button>
                                    	<button class="btn btn-danger" type="button" style="padding: 2px 14px" >Delete</button>
                                    </td>                                   
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox"/></td>
                                    <td>group 2</td>
                                    <td>First name , Email , Phone </td>
                                    <td>
                                    	<button class="btn btn-success" type="button" style="padding: 2px 14px" >Edit</button>
                                    	<button class="btn btn-danger" type="button" style="padding: 2px 14px" >Delete</button>
                                    </td>                                
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox"/></td>
                                    <td>group 3</td>
                                    <td>First Name, Email, Loan Type </td>
                                    <td>
                                    	<button class="btn btn-success" type="button" style="padding: 2px 14px" >Edit</button>
                                    	<button class="btn btn-danger" type="button" style="padding: 2px 14px" >Delete</button>
                                    </td>                                  
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox"/></td>
                                    <td>group 4</td>
                                    <td>First Name ,Email, Phone</td>
                                    <td>
                                    	<button class="btn btn-success" type="button" style="padding: 2px 14px" >Edit</button>
                                    	<button class="btn btn-danger" type="button" style="padding: 2px 14px" >Delete</button>
                                    </td>                                    
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox"/></td>
                                    <td>group 5</td>
                                    <td>First Name, Loan Type </td>
                                    <td>
                                    	<button class="btn btn-success" type="button" style="padding: 2px 14px" >Edit</button>
                                    	<button class="btn btn-danger" type="button" style="padding: 2px 14px" >Delete</button>
                                    </td>                                   
                                </tr>                               
                            </tbody>
                        </table>
                    </div>
                </div>                                
                
            </div>            
            
            <div class="dr"><span></span></div>           
            
        </div>
        
    </div>
    
    
     <!-- Bootrstrap modal form -->
    <div id="fModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Add new user group</h3>
        </div>        
        <div class="row-fluid">
            <div class="block-fluid">
                <div class="row-form clearfix">
                    <div class="span3">Group name</div>
                    <div class="span9"><input type="text" value=""/></div>
                </div>            
                <div class="row-form clearfix">
                    <div class="span5">Visible Feilds</div>
                    <div class="span7">
                        <select name="select" id="s2_1" style="width: 100%;" multiple="multiple">
                            <option value="0">First Name</option>
                            <option value="1">Email</option>
                            <option value="2">Phone</option>
                            <option value="3">Address</option> 
                            <option value="4">Loan type</option> 
                            <option value="5">Purpose of Loan</option> 
                            <option value="6">Notes </option>                                                                    
                        </select>
                    </div>
                </div>                                                                                  
            </div>                
        </div>                    
        <div class="modal-footer">
            <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Save updates</button> 
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>            
        </div>
    </div>   
    
</body>
</html>
