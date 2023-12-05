function validateForm(){
    var username = document.getElementById('username').value;
    var password =document.getElementById('password').value;

    var usernameRegex=/^[a-z0-9_-]{3,15}$/;
    if(!usernameRegex.test(username)){
        alert('Username is incorrect');
    }

    if(password.length<8){
        alert('Password must be at least 8 characters long.');
    }
}