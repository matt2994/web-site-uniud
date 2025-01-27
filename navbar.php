<!--Set navbar-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Logo --> 
    <a class="navbar-brand navbar-right" href="index.php">
        <img id="logo" src="images/logo.png" alt="logo">
    </a>
    <!-- Left links -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Progetto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Tabella</a>
        </li>
    </ul>
    <!-- Right links -->
    <ul class="navbar-nav ml-auto">
        <!--Check login and set links -->
        <?php
            session_start();
            //Check login. If is done show username in navbar
            if($_SESSION['username']){
                //require_once('config/mysql.php');
                //$query='SELECT * FROM user_data';
                //$result = $conn->query($query);
        ?>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
        <?php
                //--Print user name --
                echo $_SESSION['username'];
        ?>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Informazioni personali</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
                </li>
        <?php } else { ?>
                <!-- If the the login is't done show signin and login link -->
                <li class="nav-item"> 
                    <a id="sign-in" class="nav-link" href="signin.php">Registrati</a>
                </li>
                <li class="nav-item"> 
                    <a id="login" class="nav-link" href="login.php">Login</a>
                </li>
        <?php } ?>
    </ul>
</nav>