function validateForm() {
    var name = document.getElementById('name').value;
    var dob = document.getElementById('dob').value;
    var gender = document.getElementById('gender').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    console.log(password, confirmPassword);

    const password2 = document.querySelector('input[name="password"]');
    const confirmPassword2 = document.querySelector('input[name="confirmpassword"]');

    // if (isEmpty(name)|| isEmpty(dob) || isEmpty(gender) || isEmpty(email)|| isEmpty(phone) || isEmpty(password) || isEmpty(confirmPassword)) {
    //     alert("please enter all required data !");

    //     return false;
    // }

    if (password.length < 8) {
        alert("password at least 8 characters required");
        return false;
    }
    if (confirmPassword === password) {
        alert("Form submitted successfully!");
        window.location.reload();

    }
    else {

        alert("password does not match");
    }


}






