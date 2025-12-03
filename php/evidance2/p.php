<?php
$errors = array();
$username = "";

if (isset($_POST['login'])) {

    $username = $_POST['username'];

    // 1. Length check (4–8)
    if (strlen($username) < 4 || strlen($username) > 8) {
        $errors[] = "Username must be 4 to 8 characters long.";
    }

    // 2. Must contain '@'
    // strpos() correct check
    if (strpos($username, '@') === false) {
        $errors[] = "Username must contain '@' symbol.";
    }

    // If no errors → success
    if (empty($errors)) {
        echo "<h3 style='color:green;'>Login Successful ✔</h3>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Validation</title>
</head>
<body>

<h2>Login Form</h2>

<form method="POST">
    Username: 
    <input type="text" name="username" value="<?php echo $username; ?>">
    <br><br>

    <input type="submit" name="login" value="Login">
</form>

<!-- Show error messages -->
<?php
if (!empty($errors)) {
    echo "<ul style='color:red;'>";
    foreach ($errors as $e) {
        echo "<li>$e</li>";
    }
    echo "</ul>";
}
?>

</body>
</html>
