
function validateForm() {
    let input = document.forms["login"]["email"].value;
    let password = document.forms["login"]["password"].value;
    let inputFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let phoneFormat = /^\d{10,12}$/;
    let passwordFormat = /^(?=.*\d)(?=.*[^a-zA-Z0-9])(?!.*\s).{8,}$/;

    var Iflag = true;
    var Pflag = true;

    if (input == "" || password == "") {
        alert("Please fill the fields");
        return false;
    }
    if ((input.match(inputFormat)) || (input.match(phoneFormat))) {
        document.getElementById("email").style.borderColor = "grey";
        Iflag = true;
    }
    else {
        alert("Please enter valid Email address and Phone");
        document.getElementById("email").style.borderColor = "red";
        Iflag = false;
    }
    if (password.match(passwordFormat)) {
        document.getElementById("password").style.borderColor = "grey";
        Pflag = true;
    }
    else {
        alert("Password must contain alphanumeric,special character, minimum length is 8.");
        document.getElementById("password").style.borderColor = "red";
        Pflag = false;
    }
    if (Iflag == true && Pflag == true) {
        return true;
    }
    else {
        return false;
    }
}

function validateJoinNowForm() {
    let input = document.forms["joinNow"]["email"].value;
    let password = document.forms["joinNow"]["password"].value;
    let cpassword = document.forms["joinNow"]["confirmPassword"].value;
    let dob = document.forms["joinNow"]["Dob"].value;
    let inputFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let phoneFormat = /^\d{10,12}$/;
    let passwordFormat = /^(?=.*\d)(?=.*[^a-zA-Z0-9])(?!.*\s).{8,}$/;

    var Iflag = true;
    var Pflag = true;
    var PCflag = false;

    if (input == "" || password == "" || cpassword == "" || dob == "") {
        alert("Please fill the fields");
        return false;
    }
    if ((input.match(inputFormat)) || (input.match(phoneFormat))) {
        document.getElementById("email").style.borderColor = "grey";
        Iflag = true;
    }
    else {
        alert("Please enter valid Email address and Phone");
        document.getElementById("email").style.borderColor = "red";
        Iflag = false;
    }
    if (password.match(passwordFormat)) {
        document.getElementById("password").style.borderColor = "grey";
        Pflag = true;
    }
    else {
        alert("Password must contain alphanumeric,special character, minimum length is 8.");
        document.getElementById("password").style.borderColor = "red";
        Pflag = false;
    }
    if (cpassword.match(password)) {

        document.getElementById("cPassword").style.borderColor = "grey";
        PCflag = true;
    }
    else {
        alert("Password should match");
        document.getElementById("cPassword").style.borderColor = "red";
        PCflag = false;
    }

    if (Iflag == true && Pflag == true && PCflag == true) {
        return true;
    }
    else {
        return false;
    }
}
function validateForgot() {
    let input = document.forms["forgotForm"]["email"].value;
    let dob = document.forms["forgotForm"]["Dob"].value;
    let inputFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


    if (input == "" || dob == "") {
        alert("Please fill the fields");
        return false;
    }
    if (input.match(inputFormat)) {
        document.getElementById("email").style.borderColor = "grey";
        return true;
    }
    else {
        alert("Please enter valid Email address or Phone");
        document.getElementById("email").style.borderColor = "red";
        return false;
    }
}