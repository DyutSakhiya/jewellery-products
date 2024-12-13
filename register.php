<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <div class="form-container">
            
    <form id="register-form" action="authenticate.php" method="post">
    
        <h1>Register</h1>
        <div class="input-box">
            <input type="text" placeholder="Username" required name="username">
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="email" placeholder="Email" required name="email">
            <i class='bx bxs-envelope'></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Password" required name="password">
            <i class='bx bxs-lock-alt'></i>
        </div>
        <button type="submit" class="btn">Register</button>
        <div class="login-link">
            <p>Already have an account? <a href="index.php">Login</a></p>
        </div>
    </form>
    </div>
    </div> 
</body>
</html>
