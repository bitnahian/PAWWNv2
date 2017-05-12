$(document).ready(function() {
	$("#register").click(function() {
		var name = $("#name").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var cpassword = $("#cpassword").val();
		var address1 = $("#address1").val();
		var address2 = $("#address2").val();
		var city = $("#city").val();
		var state = $( "#state" ).val(); 
		var postcode = $("#postcode").val();
		var isvalidnum = /^\d{4}$/.test(postcode);

		

		if (name == '' || email == '' || password == '' || cpassword == '' || address1 == '' || city == ''  || postcode == '') {
			alert("Please fill all fields.");
		} else if ((password.length) < 8) {
			alert("Password should atleast 8 character in length...!!!!!!");
		} else if (!(password).match(cpassword)) {
			alert("Your passwords don't match. Try again?");
		} 
		else if((address1.length) > 50){
			alert("Address 1 line is too big.");
		}
		else if((address2.length) > 50){
			alert("Address 2 line is too big.");
		}
		else if(!isvalidnum)
		{
			alert("Post code is not a number. Try again.")
		}
		else {
			$.post("register.php", {
				name1: name,
				email1: email,
				password1: password,
				address11: address1,
				address21: address2,
				city1: city,
				state1: state,
				postcode1: postcode
			}, function(data) {
				if (data == 'You have Successfully Registered.....') {
					$("form")[0].reset();
				}
				alert(data);
			});
		}
	});
});