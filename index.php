<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Final project</title>
        <meta name="description" content="Web application final project"/>
        <meta name="author" content="Michele Gaiarin"/>
        <link rel="icon" href="images/icon.png"/>
        <link rel="stylesheet" type="text/css" href="mystyle.css"/>
        <script type="text/javascript" src="script.js"></script>
        <script
        src="https://code.jquery.com/jquery-3.4.0.js"
        integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
        crossorigin="anonymous">
        </script>
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
        <!--Navbar show -->
        <div id="nav-placeholder">
        </div>
        <script>
            $(function(){
                $("#nav-placeholder").load("/includes/navbar.php");
            });
        </script>
        <!-- End Navbar -->
        <?php
        session_start();
        if(!$_SESSION['username']) {
            //header('Location: login.php');
            //echo $data['username'];
        }
        ?>
    </body>
</html>