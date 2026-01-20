
// Student JS Validation - Simple and Beginner Friendly

// Simple Cookie Functions - Beginner Friendly

// Function to set a cookie (like W3Schools example)
function setCookie(cookieName, cookieValue, expireDays) {
    // Create a date object for expiration
    let date = new Date();
    // Set the time to now plus the number of days
    date.setTime(date.getTime() + (expireDays * 24 * 60 * 60 * 1000));
    // Convert to UTC string format
    let expires = "expires=" + date.toUTCString();
    // Set the cookie with name, value, expiration, and path
    document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
}

// Function to get a cookie value (like W3Schools example)
function getCookie(cookieName) {
    // Add equals sign to the cookie name
    let name = cookieName + "=";
    // Split document.cookie into an array of cookies
    let decodedCookie = decodeURIComponent(document.cookie);
    let cookieArray = decodedCookie.split(';');
    // Loop through the array to find the cookie
    for(let i = 0; i < cookieArray.length; i++) {
        let cookie = cookieArray[i];
        // Remove leading spaces
        while (cookie.charAt(0) == ' ') {
            cookie = cookie.substring(1);
        }
        // If cookie is found, return its value
        if (cookie.indexOf(name) == 0) {
            return cookie.substring(name.length, cookie.length);
        }
    }
    // Return empty string if cookie not found
    return "";
}

// Load username from cookie on page load
window.addEventListener('load', function() {
    let username = getCookie('student_username');
    if (username) {
        document.getElementById('student_name').value = username;
        document.getElementById('remember_me').checked = true;
    }
});

// Real-time validation for phone number
document.getElementById('student_phone').addEventListener('input', function() {
    let phone = this.value;
    let errorSpan = document.getElementById('student_phone-error');
    if (phone.length !== 11 || isNaN(phone)) {
        errorSpan.innerText = "Phone number must be exactly 11 digits";
        this.classList.add('error');
        this.classList.remove('valid');
    } else {
        errorSpan.innerText = "";
        this.classList.remove('error');
        this.classList.add('valid');
    }
});

// Real-time validation for password
document.getElementById('student_pass').addEventListener('input', function() {
    let password = this.value;
    let errorSpan = document.getElementById('student_pass-error');
    if (password.length < 8) {
        errorSpan.innerText = "Password must be at least 8 characters";
        this.classList.add('error');
        this.classList.remove('valid');
    } else {
        errorSpan.innerText = "";
        this.classList.remove('error');
        this.classList.add('valid');
    }
});

function validateStudentLogin() {
    let username = document.getElementById('student_name');
    let password = document.getElementById('student_pass');
    let rememberMe = document.getElementById('remember_me');
    let valid = true;

    if(username && username.value.trim() === "") {
        alert("Enter username");
        valid = false;
    }
    if(password && password.value.trim() === "") {
        alert("Enter password");
        valid = false;
    }

    // Set cookie if remember me is checked and validation passes
    if (valid && rememberMe && rememberMe.checked) {
        setCookie('student_username', username.value, 2);
    } else if (valid && rememberMe && !rememberMe.checked) {
        // Clear cookie if remember me is unchecked
        setCookie('student_username', '', -1);
    }

    return valid;
}

function validateStudentRegister() {
    let name = document.getElementById('student_name');
    let email = document.getElementById('student_email');
    let phone = document.getElementById('student_phone');
    let dob = document.getElementById('dob_student');
    let password = document.getElementById('student_pass');
    let gender = document.querySelector('input[name="gender"]:checked');
    let valid = true;

    if(name && name.value.trim() === "") {
        document.getElementById('student_name-error').innerText = "Enter name";
        name.classList.add('error');
        valid = false;
    } else {
        document.getElementById('student_name-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        name.classList.remove('error');
        name.classList.add('valid');
    }

    if(email && (email.value.trim() === "" || !/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(email.value))) {
        document.getElementById('student_email-error').innerText = "Enter valid email";
        email.classList.add('error');
        valid = false;
    } else {
        document.getElementById('student_email-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        email.classList.remove('error');
        email.classList.add('valid');
    }

    if(phone && (phone.value.trim() === "" || phone.value.length < 11 || isNaN(phone.value))) {
        document.getElementById('student_phone-error').innerText = "Enter valid 11-digit phone";
        phone.classList.add('error');
        valid = false;
    } else {
        document.getElementById('student_phone-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        phone.classList.remove('error');
        phone.classList.add('valid');
    }

    if(dob && dob.value.trim() === "") {
        document.getElementById('dob_student-error').innerText = "Enter date of birth";
        dob.classList.add('error');
        valid = false;
    } else {
        document.getElementById('dob_student-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        dob.classList.remove('error');
        dob.classList.add('valid');
    }

    if(!gender) {
        document.getElementById('gender-error').innerText = "Select gender";
        valid = false;
    } else {
        document.getElementById('gender-error').innerText = "";
    }

    if(password && password.value.length < 8) {
        document.getElementById('student_pass-error').innerText = "Password must be at least 8 characters";
        password.classList.add('error');
        valid = false;
    } else {
        document.getElementById('student_pass-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        password.classList.remove('error');
        password.classList.add('valid');
    }

    return valid;
}

function validateStudentForgotPass() {
    let email = document.getElementById('reset_email');
    if(email && (email.value.trim() === "" || !/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(email.value))) {
        document.getElementById('reset_email-error').innerText = "Enter valid email";
        email.classList.add('error');
        return false;
    } else {
        document.getElementById('reset_email-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        email.classList.remove('error');
        email.classList.add('valid');
        return true;
    }
}

function validateStudentChangePass() {
    let oldPass = document.getElementById('old_pass');
    let newPass = document.getElementById('new_pass');
    let valid = true;

    if(oldPass && oldPass.value.trim() === "") {
        document.getElementById('old_pass-error').innerText = "Enter old password";
        oldPass.classList.add('error');
        valid = false;
    } else {
        document.getElementById('old_pass-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        oldPass.classList.remove('error');
        oldPass.classList.add('valid');
    }

    if(newPass && (newPass.value.length < 8 || newPass.value === oldPass.value)) {
        document.getElementById('new_pass-error').innerText = "New password must be at least 8 characters and different";
        newPass.classList.add('error');
        valid = false;
    } else {
        document.getElementById('new_pass-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        newPass.classList.remove('error');
        newPass.classList.add('valid');
    }

    return valid;
}
