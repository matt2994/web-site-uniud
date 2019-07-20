<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Quote request</title>
        <meta name="description" content="Make a request to a server for quotes"/>
        <meta name="author" content="Michele Gaiarin"/>
        <link rel="icon" href="images/icon.png"/>
        <link rel="stylesheet" type="text/css" href="mystyle.css"/>
        <script
        src="https://code.jquery.com/jquery-3.4.0.js"
        integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
        crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="script.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">
            <img id="logo" src="images/logo.png" alt="logo">
        </a>

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Progetto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tabella</a>
            </li>
            <li class="nav-item"> 
                <a id="login" class="nav-link" href="login.php">Login</a>
            </li>
            
            <!-- Dropdown 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Dropdown link</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
            </div>
            </li> -->
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                    <!--Print user name -->
                    <?php
                        session_start();
                        if($_SESSION['username']){
                            require_once('config/mysql.php');
                            $query='SELECT * FROM user_data';
                            $result = $conn->query($query);
                            while ($data = $result->fetch_array()) {
                                // var_dump($data);
                                echo $data['User'];
                            }
                        }   else { 
                            echo "";
                        }
                    ?>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Informazioni personali</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
        </nav>

        <?php
        session_start();
        if(!$_SESSION['username']) {
            //header('Location: login.php');
        }
        ?>
    </body>
</html>