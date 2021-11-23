<?php
include 'lib/config.php';
if ($_SESSION['user'] == TRUE) {
    $message = "Welcome" . " " . $_SESSION['user'];
} else {
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SSLCOMMERZ</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet"href="lib/style.css"type="text/css">
    </head>
    <body>

        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <div class="login-container">
                <?php if (isset($_SESSION['email'])) { ?>
                <a href="javascript:void()" type="submit"onclick="logout()"><b><?= $_SESSION['user'] ?></b>&nbsp;<span class="btn btn-danger btn-sm">Logout</span></a>
                    <?php
                } else {
                    echo '';
                }
                ?>
            </div>
        </div>
        <br>

        <div class="container">

        </div>
        <script>
            function logout() {
                var action = 'logout';
                $.ajax({
                    type: 'POST',
                    url: 'lib/logincheck.php',
                    data: {action: action},
                    success: function (data) {
                        if (data == 'logout') {
                            location.reload();
                        }
                    }
                });
            }
        </script>
    </body>
</html>


