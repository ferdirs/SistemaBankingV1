<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/personal_login.css">
</head>
<body>
    
    <div class="main-login">
        <div class="left-side">
            <div class="logo-header">
                <img src="images/Logo_login.png" alt="" class="logo">
            </div>
    
            <div class="illustration">
                <img src="images/Ilustrasi_login.png" alt="" class="illustration-login">
            </div>
        </div>

        <div class="right-side">
            <div class="login-container">
                <div class="pink-box">
                    <form action="/dashboard">
                        <div class="header-login">
                            <a href="#">
                                <img src="images/user.png" alt="" class="user-sign">
                                <a href="#" class="description-header">Sign In</a>
                            </a>
                        </div>

                        <div class="credential-user">
                            <label class="input-box">
                                <img src="images/email.png" alt="">
                                <input type="email" name="email" required>
                            </label>
                        </div>

                        <div class="credential-user">
                            <label class="input-box">
                                <img src="images/password.png" alt="">
                                <input type="password" name="password" required>
                            </label>
                        </div>

                        <div class="business">
                            <div class="business-login">
                                <h3>Sign In Using</h3>
                                <a href="/business_login">
                                    <img src="images/business.png" alt="">
                                    <a href="/business_login">Business</a>
                                </a>
                            </div>
                        </div>

                        <div class="button">
                            <button type="submit" class="btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>