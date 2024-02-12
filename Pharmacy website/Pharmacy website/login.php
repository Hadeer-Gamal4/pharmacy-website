<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="signin.css">
</head>
<body >
      <div class="register">
        <div class="photo">

        </div>
        
            <div id="registration-form">
              <div class="wel">
                  <h1>Welcome Back!</h1>
              </div>

              <form action="index.php">
                  <div class="box">

                    <div class="label1">
                      <label for="emailPhone">Email/Phone Number:</label>
                    </div>

                    <div class="input1">
                      <input type="text" id="emailPhone" name="emailPhone" required>
                    </div>

                <div class="label2">
                  <label for="password">Password:</label>
                </div>

                <br>

                <div class="input2">
                  <input type="password" id="password" name="password" required>
                </div>

                  <div class="checkbox">
                    <table>
                      <tr>
                        <td>
                          <label>
                            <input type="checkbox" name="rememberMe">
                          </label>
                        </td>
                        <td>
                         Remember me
                        </td>
                      </tr>
                    </table>
                    
                    <div class="smlbox">
                      <a href="#">Forgot Password?</a>
                  </div>

                  </div>
               

                  </div> 
  
                 <div class="butt">

                          <div class="firstbutt">
                              <button type="submit" id="signin-btn">Sign in</button>
                          </div>

                          <br>

                          <div class="firstbutt">
                            <button type="submit" onclick="gotopage2()" id="signup-btn">Sign up</button>
                          </div>

                          <br>


                          <div class="secondbutt">
                              <button type="button" id="guest-btn">Continue as Guest</button>
                          </div>

                 </div>
              </form>
            </div>
      </div>


        



  <script>
    // JavaScript for hover effect on the "Sign in" button
    const signinBtn = document.getElementById('signin-btn');
  
    signinBtn.addEventListener('mouseenter', () => {
      signinBtn.style.backgroundColor = '#7ad3bd';
    });
    signinBtn.addEventListener('mouseleave', () => {
      signinBtn.style.backgroundColor = '#4effd3';
    });


    // JavaScript for hover effect on the "Sign up" button
    const signupBtn = document.getElementById('signup-btn');
    signupBtn.addEventListener('mouseenter', () => {
      signupBtn.style.backgroundColor = '#7ad3bd';
    });
    signupBtn.addEventListener('mouseleave', () => {
      signupBtn.style.backgroundColor = '#4effd3';
    });

    function gotopage2(){
      window.location.href='signup.php';
    }
  </script>
</body>
</html>