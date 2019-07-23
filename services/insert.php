<?php
    require_once('../config/mysql.php');
    $bar = isset($_POST['bar']) ? $_POST['bar'] : null;
    //TO DOOO
    if(isset($_POST['save'])){
        $sql = "INSERT INTO users (username, password, email)
        VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."')";
    }
?>