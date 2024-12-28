document.getElementById('signUpform').addEventListener('submit', function(event) {
    event.preventDefault();

    // Get input values
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    const confirmPassword = document.getElementById('confirmPassword').value.trim();

    // Get error message elements
    const usernameError = document.getElementById('username-error');
    const passwordError = document.getElementById('password-error');
    const confirmPasswordError = document.getElementById('confirmPassword-error');

    // Regex pattern for validating email format
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    let isValid = true;

    // Reset error messages and border colors
    usernameError.textContent = '';
    passwordError.textContent = '';
    confirmPasswordError.textContent = '';
    document.getElementById('username').style.borderColor = '';
    document.getElementById('password').style.borderColor = '';
    document.getElementById('confirmPassword').style.borderColor = '';

    // Validation checks
    if (username === '') {
        usernameError.textContent = 'Username cannot be empty';
        document.getElementById('username').style.borderColor = 'red';
        isValid = false;
    } else {
        document.getElementById('username').style.borderColor = 'green';
    }

    if (password === '') {
        passwordError.textContent = 'Password cannot be empty';
        document.getElementById('password').style.borderColor = 'red';
        isValid = false;
    } else {
        document.getElementById('password').style.borderColor = 'green';
    }

    if (confirmPassword === '') {
        confirmPasswordError.textContent = 'Confirm password cannot be empty';
        document.getElementById('confirmPassword').style.borderColor = 'red';
        isValid = false;
    } else if (password !== confirmPassword) {
        confirmPasswordError.textContent = 'Passwords do not match';
        document.getElementById('confirmPassword').style.borderColor = 'red';
        isValid = false;
    } else {
        document.getElementById('confirmPassword').style.borderColor = 'green';
    }

    if (isValid) {
        // Save user data to local storage
        const userData = { username, password };
        localStorage.setItem('user', JSON.stringify(userData));
        alert("Sign-up successful! Redirecting to login page...");
        document.signUpform.submit();
    }
});
