<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    
    <title>Users - Aquarius - responsive admin panel</title>

    <?php include('header.php'); ?>
    
</head>
<body>
    
    <div class="header">
        <a class="logo" href="index.html"><img src="img/logo.png" alt="Aquarius -  responsive admin panel" title="Aquarius -  responsive admin panel"/></a>
        <ul class="header_menu">
            <li class="list_icon"><a href="#">&nbsp;</a></li>
        </ul>    
    </div>
    
    <div class="menu">                
        
        <!-- <div class="breadLine">            
            <div class="arrow"></div>
            <div class="adminControl active">
                Hi, Aqvatarius
            </div>
        </div>
        
        <div class="admin">
            <div class="image">
                <img src="img/users/aqvatarius.jpg" class="img-polaroid"/>                
            </div>
            <ul class="control">                
                <li><span class="icon-comment"></span> <a href="messages.html">Messages</a> <a href="messages.html" class="caption red">12</a></li>
                <li><span class="icon-cog"></span> <a href="forms.html">Settings</a></li>
                <li><span class="icon-share-alt"></span> <a href="login.html">Logout</a></li>
            </ul>
            <div class="info">
                <span>Welcom back! Your last visit: 24.10.2012 in 19:55</span>
            </div>
        </div> -->
        
        <ul class="navigation">            
            <li class="active">
                <a href="index.html">
                    <span class="isw-list"></span><span class="text">User List</span>
                </a>
            </li>
            <li>
                <a href="#">
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
                                <tr>
                                    <td><input type="checkbox" name="checkbox"/></td>
                                    <td>101</td>
                                    <td>Dmitry</td>
                                    <td>dmitry@domain.com</td>
                                    <td>+98(765)432-10-98</td>                                    
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox"/></td>
                                    <td>102</td>
                                    <td>Alex</td>
                                    <td>alex@domain.com</td>
                                    <td>+98(765)432-10-99</td>                                    
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox"/></td>
                                    <td>103</td>
                                    <td>John</td>
                                    <td>john@domain.com</td>
                                    <td>+98(765)432-10-97</td>                                    
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox"/></td>
                                    <td>104</td>
                                    <td>Angelina</td>
                                    <td>angelina@domain.com</td>
                                    <td>+98(765)432-10-90</td>                                    
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox"/></td>
                                    <td>105</td>
                                    <td>Tom</td>
                                    <td>tom@domain.com</td>
                                    <td>+98(765)432-10-92</td>                                    
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox"/></td>
                                    <td>106</td>
                                    <td>Helen</td>
                                    <td>helen@domain.com</td>
                                    <td>+98(765)432-11-33</td>                                    
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox"/></td>
                                    <td>107</td>
                                    <td>Aqvatarius</td>
                                    <td>aqvatarius@domain.com</td>
                                    <td>+98(765)432-15-66</td>                                    
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox"/></td>
                                    <td>108</td>
                                    <td>Olga</td>
                                    <td>olga@domain.com</td>
                                    <td>+98(765)432-11-97</td>                                    
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox"/></td>
                                    <td>109</td>
                                    <td>Homer</td>
                                    <td>homer@domain.com</td>
                                    <td>+98(765)432-11-90</td>                                    
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox"/></td>
                                    <td>110</td>
                                    <td>Tifany</td>
                                    <td>tifany@domain.com</td>
                                    <td>+98(765)432-11-92</td>                                    
                                </tr>                                
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
