function validateName(value) {
	const regEx = /^[A-Za-z]+((\s)?([A-Za-z])+)*$/;
	const isNameValid = regEx.test(value);
	return isNameValid
}

function validateEmail(value) {
	const emailRegExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	const isEmailValid = emailRegExp.test(value)
	return isEmailValid
}
function passwordValidation(value) {
	const passwordRegexp = /^[A-Za-z]\w{7,14}$/;
	const isPasswordValid = passwordRegexp.test(value);
	return isPasswordValid
}

function Submit(event) {
	const firstname = $('#firstname').val()
	const lastname = $('#lastname').val()
	const email = $('#email').val()
	const password = $('#password').val()
	const password2 = $('#password2').val()
	

	if(!validateName(firstname)){
		return alert(` Invalid input '${firstname}'firstname`)
	}
	
	if(!validateName(lastname)){
		return alert(` Invalid Input for${lastname}' Lastname`)
	}

	if(!validateEmail(email)){
		return alert(` Please Enter a ${email} Correct Email`)
	}
	if(!passwordValidation(password)){
		return alert(`${password} PLease input a strong password`)
	}
	
	if( password!==password2){
		return alert("Password do not match")
	
	}
}
