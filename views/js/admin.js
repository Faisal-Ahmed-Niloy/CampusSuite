function isEmpty(value) {
    return value.trim() === "";
}


function isValidEmail(email) {
    let pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return pattern.test(email);
}


function minLength(value, length) {
    return value.trim().length >= length;
}


function showError(elementId, message) {
    let errorElem = document.getElementById(elementId);
    if (errorElem) errorElem.innerHTML = message;
}


function validateAdminLogin() {
    let username = document.getElementById("admin-username").value;
    let password = document.getElementById("admin-password").value;
    let errorId = "login-error";

    showError(errorId, "");

    if (isEmpty(username)) {
        showError(errorId, "Username cannot be empty");
        return false;
    }

    if (!minLength(username, 5)) {
        showError(errorId, "Username must be at least 5 characters long");
        return false;
    }

    if (isEmpty(password)) {
        showError(errorId, "Password cannot be empty");
        return false;
    }

    if (!minLength(password, 8)) {
        showError(errorId, "Password must be at least 8 characters long");
        return false;
    }

    return true;
}


function validateAdminLogout() {
    return confirm("Are you sure you want to logout?");
}


function validateAdminForgotPass() {
    let email = document.getElementById("admin-email").value;
    let errorId = "forgot-error";

    showError(errorId, "");

    if (isEmpty(email)) {
        showError(errorId, "Email cannot be empty");
        return false;
    }

    if (!isValidEmail(email)) {
        showError(errorId, "Enter a valid email address");
        return false;
    }

    return true;
}


function validateAdminChangePass() {
    let currentPass = document.getElementById("current-password").value;
    let newPass = document.getElementById("new-password").value;
    let confirmPass = document.getElementById("confirm-password").value;
    let errorId = "change-error";

    showError(errorId, "");

    if (isEmpty(currentPass)) {
        showError(errorId, "Current password cannot be empty");
        return false;
    }

    if (isEmpty(newPass)) {
        showError(errorId, "New password cannot be empty");
        return false;
    }

    if (!minLength(newPass, 8)) {
        showError(errorId, "New password must be at least 8 characters long");
        return false;
    }

    if (newPass !== confirmPass) {
        showError(errorId, "Passwords do not match");
        return false;
    }

    return true;
}


function validateDashboardForm() {
    let title = document.getElementById("dashboard-title").value;
    let description = document.getElementById("dashboard-description").value;
    let errorId = "dashboard-error";

    showError(errorId, "");

    if (isEmpty(title)) {
        showError(errorId, "Title cannot be empty");
        return false;
    }

    if (isEmpty(description)) {
        showError(errorId, "Description cannot be empty");
        return false;
    }

    return true;
}


function validateUserForm() {
    let username = document.getElementById("user-username").value;
    let email = document.getElementById("user-email").value;
    let errorId = "user-error";

    showError(errorId, "");

    if (isEmpty(username)) {
        showError(errorId, "Username cannot be empty");
        return false;
    }

    if (!minLength(username, 3)) {
        showError(errorId, "Username must be at least 3 characters long");
        return false;
    }

    if (isEmpty(email)) {
        showError(errorId, "Email cannot be empty");
        return false;
    }

    if (!isValidEmail(email)) {
        showError(errorId, "Enter a valid email address");
        return false;
    }

    return true;
}


function validateCourseForm() {
    let courseName = document.getElementById("course-name").value;
    let courseDesc = document.getElementById("course-description").value;
    let errorId = "course-error";

    showError(errorId, "");

    if (isEmpty(courseName)) {
        showError(errorId, "Course name cannot be empty");
        return false;
    }

    if (!minLength(courseName, 3)) {
        showError(errorId, "Course name must be at least 3 characters long");
        return false;
    }

    if (isEmpty(courseDesc)) {
        showError(errorId, "Course description cannot be empty");
        return false;
    }

    return true;
}


function validateAdminProfileUpdate() {
    let name = document.getElementById("admin-name").value;
    let email = document.getElementById("admin-email").value;
    let phone = document.getElementById("admin-phone").value;
    let errorId = "profile-error";

    showError(errorId, "");

    if (isEmpty(name)) {
        showError(errorId, "Name cannot be empty");
        return false;
    }

    if (isEmpty(email)) {
        showError(errorId, "Email cannot be empty");
        return false;
    }

    if (!isValidEmail(email)) {
        showError(errorId, "Enter a valid email address");
        return false;
    }

    if (!isEmpty(phone) && !/^\d{10}$/.test(phone)) {
        showError(errorId, "Enter a valid 10-digit phone number");
        return false;
    }

    return true;
}
