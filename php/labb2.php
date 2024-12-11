<!DOCTYPE html>
<html>
<body>
    <h1>Registration form</h1>
    <form action="" method="POST">
        Username : <input type="text" name="username"><br><br>
        Email : <input type="text" name="email"><br><br>
        Password : <input type="password" name="pass"><br><br>
        Confirm password : <input type="password" name="cpass"><br><br>
        <input type="submit" value="Register">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check for empty fields
        if (empty($_POST['username']) || empty($_POST['pass']) || empty($_POST['email']) || empty($_POST['cpass'])) {
            echo "Please fill all required fields!";
        }
        // Check if email contains '@' symbol
        if (strpos($_POST['email'], '@') === false) {
            echo "Please enter a valid email address that contains an '@' symbol!";
        }
        // Check if passwords match
        if ($_POST['pass'] != $_POST['cpass']) {
            echo "Password and confirm password should match";
        }
        // If all checks are passed
        if (!empty($_POST['username']) && strpos($_POST['email'], '@') !== false && $_POST['pass'] == $_POST['cpass']) {
            echo "Registration successful";
        }
    }
    ?>
</body>
</html>
