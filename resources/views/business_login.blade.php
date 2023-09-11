<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/business_login.css">
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
                                <img src="images/business.png" alt="" class="user-sign">
                                <a href="#" class="description-header">Sign In</a>
                            </a>
                        </div>

                        <div class="credential-user">
                            <label class="input-box">
                                <img src="images/email.png" alt="">
                                <input type="text" name="email" required>
                            </label>
                        </div>

                        <div class="credential-user">
                            <label class="input-box">
                                <img src="images/password.png" alt="">
                                <input type="password" name="password" required>
                            </label>
                        </div>

                        <div class="personal">
                            <div class="personal-login">
                                <h3>Sign In Using</h3>
                                <a href="/personal_login">
                                    <img src="images/user.png" alt="">
                                    <a href="/personal_login">Personal</a>
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