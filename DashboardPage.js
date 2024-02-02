function isLoggedIn() {
    return localStorage.getItem('userId') !== null;
}

function login(username, password) {
    const apiUrl = 'http://localhost/PROJEKTI/LoginForm.php';

    fetch(apiUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ username, password }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            
            localStorage.setItem('userId', data.userId);

           
            window.location.reload();
        } else {
            alert('Invalid credentials. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error during login:', error);
        alert('An error occurred. Please try again later.');
    });
}

function logout() {
    
    localStorage.removeItem('userId');

    
    window.location.reload();
}

document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('loginForm');
    const logoutButton = document.getElementById('logoutButton');

    
    if (isLoggedIn()) {
        
        logoutButton.style.display = 'block';
        loginForm.style.display = 'none';
    } else {
      
        logoutButton.style.display = 'none';
        loginForm.style.display = 'block';
    }

    loginForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        login(username, password);
    });

    
    logoutButton.addEventListener('click', function () {
      
        logout();
    });
});
