<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="register">
    <div class="title">RegisterForm </div>
    <form id="registrationForm" onsubmit="return validateForm()">
        <div class="user-details">
        <h1>Provide your personal data</h1>

        <div class="input-box">
        <span class="details">Name</span>
        <input type="text" id="name" required />
        </div>

        <div class="input-box">
        <span class="details">Username</span>
        <input type="text" id="username"required />
        </div>

        <div class="input-box">
        <span class="details">Password</span>
        <input type="password" id="password" required />
        </div>

        <div class="input-box">
        <span class="details">Email</span>
        <input type="email" id="email" required />
        </div>

        <div class="input-box">
        <span class="details">Country</span>
        <select id="country" name="country" required>
            <option selected="" value="Default">(Please select a country)</option>
        <option value="AF">Australia</option>
        <option value="AL">Albanian</option>
        <option value="RKS">Kosovo</option>
        <option value="AS">Russia</option>
        <option value="AD">USA</option>
        </select>
        </div>
        </div>
        
        <div class="gender-details">
            <span class="gender-title">Gender</span>
            <div class="category">
            
        <input type="radio" name="gender" id="male" required>
            <label for="male"><span class="dot one"></span>Male</label>

            <input type="radio" name="gender" id="female" required>
            <label for="female"><span class="dot two"></span>Female</label>

            <input type="radio" name="gender" id="not-specified" required>
            <label for="not-specified"><span class="dot three"></span>Prefer not to say</label>
                </div>
            </div>

            <div class="button">
                <input type="submit" value="Register" />
    </div>
    </form>
</div> 
        <script src="register.js"></script>
    
</body>
</html>