$(document).ready(function(){
	var request = 'check system';
	$.ajax({
		url: '../system_check.php',
		method: 'post',
		data: {request:request},
		success: function(data){
			alert(data);
			// if(data == 'Ok'){
				
			// }
			// else{
				// if(confirm("Your trial version has ended. Would you like to purchase the system to continue enjoying the functionalities?")){
					// location.replace("../login-page.php?success=Call 0741915943 to buy");
					// exit();
				// }else{
					// location.replace("../login-page.php?error=Trial version expired");
					// exit();
				// }
			// }
		}
	})		
})