<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="admin1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="admin-login-container">
        <div class="admin-avatar">
            <i class="fas fa-user-shield"></i>
        </div>
        <form class="admin-login-form" action="admin.php">
            <div class="input-group">
                <i class="fas fa-user icon"></i>
                <input type="email" id="admin-email" name="email" placeholder="Admin Email ID" required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock icon"></i>
                <input type="password" id="admin-password" name="password" placeholder="Password" required>
            </div>
            <div class="options">
                <label><input type="checkbox" name="remember"> Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
