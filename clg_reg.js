$(document).ready(function() {
	$("#register").click(function() {
		var name = $("#name").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var cpassword = $("#cpassword").val();
		var address1 = $("#address1").val();
		var phone = $("#phone").val();
		var city = $("#city").val();
		var state = $( "#state" ).val(); 
		var postcode = $("#postcode").val();
		var isvalidnum = /^\d{4}$/.test(postcode);

		var sList = "";
		$('input[type=checkbox]').each(function () {
    	var sThisVal = (this.checked ? $(this).val() : " ");
    	sList += (sList=="" ? sThisVal : " " + sThisVal)
		});

		console.log(sList);

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
		else if(!isvalidnum)
		{
			alert("Post code is not a number. Try again.")
		}
		
		else {
			$.post("clg_reg.php", {
				name1: name,
				email1: email,
				password1: password,
				address11: address1,
				phone1: phone,
				city1: city,
				state1: state,
				postcode1: postcode,
				sList1: sList
			}, function(data) {
				if (data == 'You have Successfully Registered.....') {
					$("form")[0].reset();
				}
				alert(data);
			});
		}
	});
});