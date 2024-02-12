<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Pharmacy Registration</title>
</head>
<body>

    <div class="container">
        <div class="photo2">

        </div>
        <div class="box">
            <form id="registrationForm" method="post" action="registration/insertuser.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
                
                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="dob" required>
                
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
        
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>

                  <div class="butt">
                    <button type="submit" name="upload" onclick="validateForm()" >Sign Up</button>
                  </div>
                  <a href="login.php">Sign in</a>
                  
                    
                  
              

            </form>
        </div>
        
    </div>
    

 <script src="signup.js">
 </script>
</body>
</html>
