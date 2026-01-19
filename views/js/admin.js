function validateLogin() {
    let username = document.getElementById('username');
    let password = document.getElementById('password');
    let valid = true;

    if(username && username.value.trim() === "") {
        alert("Enter username");
        valid = false;
    }
    if(password && password.value.trim() === "") {
        alert("Enter password");
        valid = false;
    }

    return valid;
}


function validateUserForm() {
    let user = document.getElementById('user');
    if(user.value.trim() === "") {
        document.getElementById('user-error').innerText = "Enter user name";
        user.classList.add('error');
        return false;
    } else {
        document.getElementById('user-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        user.classList.remove('error');
        user.classList.add('valid');
        return true;
    }
}


function validateAddCourse() {
    let course = document.getElementById('course');
    if(course.value.trim() === "") {
        document.getElementById('course-error').innerText = "Enter course name";
        course.classList.add('error');
        return false;
    } else {
        document.getElementById('course-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        course.classList.remove('error');
        course.classList.add('valid');
        return true;
    }
}


function validateAssignTeacherForm() {
    let teacher = document.getElementById('teacher');
    let assign_course = document.getElementById('assign_course');
    let valid = true;

    if(teacher.value.trim() === "") {
        document.getElementById('teacher-error').innerText = "Enter teacher name";
        teacher.classList.add('error');
        valid = false;
    } else {
        document.getElementById('teacher-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        teacher.classList.remove('error');
        teacher.classList.add('valid');
    }

    if(assign_course.value.trim() === "") {
        document.getElementById('assign-course-error').innerText = "Enter course name";
        assign_course.classList.add('error');
        valid = false;
    } else {
        document.getElementById('assign-course-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        assign_course.classList.remove('error');
        assign_course.classList.add('valid');
    }

    return valid;
}


function validateProfileUpdate() {
    let name = document.getElementById('profile-name');
    let email = document.getElementById('profile-email');
    let phone = document.getElementById('profile-phone');
    let valid = true;

    if(name.value.trim() === "") {
        document.getElementById('profile-name-error').innerText = "Enter name";
        name.classList.add('error');
        valid = false;
    } else {
        document.getElementById('profile-name-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        name.classList.remove('error');
        name.classList.add('valid');
    }

    if(email.value.trim() === "" || !/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(email.value)) {
        document.getElementById('profile-email-error').innerText = "Enter valid email";
        email.classList.add('error');
        valid = false;
    } else {
        document.getElementById('profile-email-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        email.classList.remove('error');
        email.classList.add('valid');
    }

    if(phone.value.trim() === "" || !/^[0-9]{10}$/.test(phone.value)) {
        document.getElementById('profile-phone-error').innerText = "Enter valid 10-digit phone";
        phone.classList.add('error');
        valid = false;
    } else {
        document.getElementById('profile-phone-error').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
        phone.classList.remove('error');
        phone.classList.add('valid');
    }

    return valid;
}


function adminLogout() {
    if(confirm("Are you sure you want to logout?")) {
        window.location.href = "admin_logout.php?action=logout";
    }
}
