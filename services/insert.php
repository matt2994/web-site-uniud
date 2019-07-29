<?php
    require_once('config/mysql.php');
    $sql = "INSERT INTO user_data (user, password, name, Surname, dateOfBirth, email) VALUES ('".$_POST["username"]."','".$_POST["password"]."',
        '".$_POST["name"]."','".$_POST["surname"]."','".$_POST["date"]."','".$_POST["email"]."')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        //header("Location: index.php")
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        //header("Location: signin.php")
    }
    
?>