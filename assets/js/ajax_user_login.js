// JavaScript Document for administrator login

//after the user click admin login button
$('#login_submit').live('click',function()
{
	var form_data = {
	    			username: $('#username').val(),
					password: $('#password').val(),
	                MausNaGer2013_ToK : $("input[name=MausNaGer2013_ToK]").val()//this is the hide token. this should be included to send the post data to the sysytem
           		};
		
	$.ajax({
			type: "POST",
			url: baseurl+"login/login_validate",
			dataType: "json",
			data : form_data,
			cache:false,
			success: 
          		function(data){
					console.log(data);
					if(data.validation_result == "passed" ){
						
						//alert(' You are successfully log in .. ' );
						//	$().toastmessage('showSuccessToast', "You are successfully log in .. ");
								
						window.location.href = baseurl+"users"; //this will load the administrator main panel after user log in
			 		}
					
					else if( data.registration == "falied" ){
						//$().toastmessage('showErrorToast', 'You are not a registered user!');
						alert('please enter a correct user name & password');
						}
						
					else{
						
						//if the user name is wrong this will alert the error message
						if(data.username){
						//$().toastmessage('showWarningToast', data.admin_username);
							alert(data.username);
						}
						
						//if the password is wrong this will alert the error message
						if(data.password){
							//$().toastmessage('showWarningToast', data.admin_password);
							alert(data.password);
							
						}
					}
				}
						
			});
	
	return false;	
});

