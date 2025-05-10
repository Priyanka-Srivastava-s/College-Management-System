<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page or display an error message
    header("Location: login.php");
    exit();
}

// Include your database connection code here
// Example connection code for MySQL:
// $conn = mysqli_connect("localhost", "username", "password", "database_name");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input data
    $oldPassword = mysqli_real_escape_string($conn, $_POST['old_password']);
    $newPassword = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Validate if new password matches the confirmation
    if ($newPassword !== $confirmPassword) {
        $error = "New password and confirmation do not match.";
    } else {
        // Check if the old password matches the stored password in the database
        $userId = $_SESSION['user_id'];
        $sql = "SELECT password FROM users WHERE id = $userId";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $storedPassword = $row['password'];

            if (password_verify($oldPassword, $storedPassword)) {
                // Hash the new password before updating the database
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

                // Update the user's password in the database
                $updateSql = "UPDATE users SET password = '$hashedPassword' WHERE id = $userId";
                $updateResult = mysqli_query($conn, $updateSql);

                if ($updateResult) {
                    $success = "Password updated successfully.";
                } else {
                    $error = "Error updating password: " . mysqli_error($conn);
                }
            } else {
                $error = "Incorrect old password.";
            }
        } else {
            $error = "Error fetching user data: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <h2>Change Password</h2>

    <?php if (isset($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if (isset($success)) : ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="old_password">Old Password:</label>
        <input type="password" name="old_password" required><br>

        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" required><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" required><br>

        <input type="submit" value="Change Password">
    </form>
</body>
</html>
