document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    const usernameError = document.getElementById('usernameError');
    const passwordError = document.getElementById('passwordError');

    let isValid = true;

    usernameError.textContent = '';
    passwordError.textContent = '';
    
    
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

    if (isValid) {
        const storedUser = JSON.parse(localStorage.getItem('user'));

        if (storedUser && storedUser.username === username && storedUser.password === password) {
            alert('Login successful!');
            window.location.href = 'products.html';
        } else {
            alert('Incorrect username or password.');
        }
    }
});
