<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Final project</title>
        <meta name="description" content="Waeb application final project"/>
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
        <!--Navbar show -->
        <div id="nav-placeholder">
        </div>
        <script>
            $(function(){
            $("#nav-placeholder").load("navbar.php");
            });
        </script>
        <!-- End Navbar -->
        <?php
            session_start();
            if(isset($_POST["username"]) && isset($_POST["password"])) {
                require_once('config/mysql.php');
                $result = $conn->query("SELECT * FROM user_data WHERE user='".$_POST["username"]."';");
                if (!$result->num_rows) {
                    $_SESSION["username"] = $_POST["username"];
                    //chiamare il service insert (To Do)
                } else { 
                //if there is already the user return error
                ?>
                    <script>
                        $(function(){
                            header("Location: index.php");
                            $("#sing-error").append("<p>Username già presente</p>");
                        });
                    </script>
                <?php
                }
            }   
        ?>
        <div id="container-login" class="container">
            <div class="col-sm">
                <h2>Registrazione</h2>
            </div>
            <!-- Error message if data is wrong -->
            <div id="signin-error" class="col-sm">
            </div>
            <!-- ******** -->
            <form id="form-login" class="form-horizontal was-validated" action="login.php" method="POST">
                <!-- Campo nome -->
                <div class="form-group">
                    <label class="control-label col-sm">Nome</label>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="name" placeholder="Inserire nome" name="name" value="" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Per favore compila il campo.</div>
                    </div>
                </div>
                <!-- Campo cognome -->
                <div class="form-group">
                    <label class="control-label col-sm">Cognome</label>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="surname" placeholder="Inserire cognome" name="surname" value="" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Per favore compila il campo.</div>
                    </div>
                </div>
                <!-- Campo data di nascita -->
                <div class="form-group">
                    <label class="control-label col-sm">Data di nascita</label>
                    <div class="col-sm">
                        <input type="date" class="form-control" id="dateofbirth">
                    </div>
                </div>
                <!-- Campo email -->
                <div class="form-group">
                    <label class="control-label col-sm">Email</label>
                    <div class="col-sm">
                        <input type="email" class="form-control" id="email" value="" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Per favore compila il campo.</div>
                    </div>
                </div>
                <!-- user -->
                <div class="form-group">
                    <label class="control-label col-sm" for="uname">Username</label>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="uname" placeholder="Inserire username" name="username" value="" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Per favore compila il campo.</div>
                    </div>
                </div>
                <!-- password -->
                <div class="form-group">
                    <label class="control-label col-sm" for="pwd">Password</label>
                    <div class="col-sm">
                        <!-- 
                        <input type="password" class="form-control" id="pwd" placeholder="Inserire password" name="pswd" required>
                         -->
                        <input type="text" class="form-control" id="psw" placeholder="Inserire password" name="password" value="" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Per favore compila il campo.</div>
                    </div>
                </div>
                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-primary" name="button" value="Registrati">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>