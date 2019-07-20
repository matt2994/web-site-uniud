<?php
session_start();
if(isset($_POST["username"]) && isset($_POST["password"])) {
require_once('config/mysql.php');
$result = $conn->query("SELECT * FROM user_data WHERE user='".$_POST["username"]."' AND password='".$_POST["password"]."';");
if ($result->num_rows) {
    $_SESSION["username"] = $_POST["username"];
    header("Location: index.php");
} else {
    echo "USER E PASSWORD ERRATA";
}
}
?>
<form action="login.php" method="POST">
<label>username</label>
<input type="text" name="username" value="">
<label>password</label>
<input type="text" name="password" value="">
<input type="submit" name="button">
</form>