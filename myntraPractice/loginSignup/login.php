<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Signup</title>
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="../stylesheet/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    
</head>
<body>
    
    <?php 
        include('../header.php');
    ?>
    <article>
        <div id="container">
            <div id="page">
                <div id="login" class="animate__animated animate__flipInY">
                    <h1>Login</h1>
                    <form id="login_frm">
                        <input type="email" required="required" placeholder="Email Id" id="login_email">
                        <small id="login_email_validation"><i class="fa-solid fa-triangle-exclamation"></i>  Email ID Not Registered</small>
                        <input type="password" required="required" placeholder="Password" id="login_password">
                        <small id="login_password_validation"><i class="fa-solid fa-triangle-exclamation"></i> Password worng</small>
                        <button type="submit" id="login_btn">Login</button>
                    </form>
                    
                    <p>Don't have an account ? <span id="signup_link">Sign up</span> </p>
                </div>
                <div id="signup" class="animate__animated animate__flipInY">
                    <h1>Sign up</h1>
                    <form id="signup_frm">
                        <input type="name" required="required" placeholder="Name" id="username">
                        <input type="email" required="required" placeholder="Email" id="email" >
                        <small id="email_alert"><i class="fa-solid fa-triangle-exclamation"></i>  Email ID Already Exist</small>
                        <input type="number" required="required" placeholder="Phone" id="phone">
                        <input type="password" required="required" placeholder="Password" id="password">
                        <input type="submit" id="signup_btn"  value="Sign up">
                    </form>
                  
                    <p>Already have an account ? <span id="login_link">Login</span> </p>
                </div>
            </div>
        </div>
    </article>
    
    <script src="./login.js"></script>
</body>
</html>