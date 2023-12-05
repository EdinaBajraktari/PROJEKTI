const form = document.getElementById('form');
form.addEventListener('submit', validateLoginForm);
const username = document.getElementById('username');
const password = document.getElementById('password');

function validateLoginForm(event) {
  event.preventDefault();


  if (!validateUsername(username.value)) {
    alert('Please enter a valid  username');
    return;
}

  if (!validatePassword(password.value)) {
    alert('Please enter a valid password.');
      return;
  }

  alert('Login successful!');

  
  function validateUsername(username) {
    const UserRegex = /^[a-z0-9_-]{3,15}$/;
    return UserRegex.test(username);
  }
  
  function validatePassword(password) {
  
    const minLength = 8;
    const hasUpperCase = /[A-Z]/.test(password);
    const hasLowerCase = /[a-z]/.test(password);
    const hasNumber = /\d/.test(password);
  
    return (
        password.length >= minLength &&
        hasUpperCase &&
        hasLowerCase &&
        hasNumber
    );
  }
}

