<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Account</title>

    <link rel="stylesheet" href="..\assets\css\style.css">
    <link rel="stylesheet" href="..\assets\css\global.css">
    <link rel="stylesheet" href="..\assets\css\responsive.css">

</head>
<body>

<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if 'username' and 'password' are set in the POST data
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $username = $_POST['email'];
        $password = $_POST['password'];

        // Validate credentials
        if ($username === 'root2025@gmail.com' && $password === '12345') {
            // Redirect to the dashboard
            header('Location: ../admin/dashboard.php');
            exit();
        } else {
            echo "<p style='color: red; text-align: center;'>Invalid username or password. Please try again.</p>";
        }
    } else {
        echo "<p style='color: red; text-align: center;'>Both fields are required.</p>";
    }
}
?>

<div class="center-align flex-container">
    <form action="" method="POST" class="login-form flex-container">
        <div class="flex-container login-content">
            <div id="logo">
                <img src="../assets/images/logo/logo.png" alt="Logo">
            </div>
            <!-- Email Field -->
            <label for="emial" class="san-serif font-16">Email:</label>
            <input type="email" id="email" name="email" required  class="font-16 san-serif">
            
            <!-- Password Field -->
            <label for="password" class="san-serif font-16">Password:</label>
            <input type="password" id="password" name="password" required  class="font-16 san-serif">
            
            <!-- Submit Button -->
            <button type="submit" class="text-white font-16 san-serif login-btn">Log in</button>
            
            <p class="text-black san-serif font-12 bold cr-text">Copyright &copy; 2025 D Trading. All Rights Reserved.</p>
        </div>
    </form>
</div>



</body>
</html>