<?php

$auth_page = true;

include('main.php');

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);

    if (strlen($username)<1||strlen($password)<1) {
        header('Location:login.php?ferror');
    }

    $q = "SELECT * FROM users WHERE user_name='".$username."' AND password = '".$password."'";

    if (mysqli_query($conn, $q)) {
        $res = mysqli_query($conn, $q);
        if (mysqli_num_rows($res)>0) {
            $user = mysqli_fetch_object($res);

            if ($user->confirmed==1) {
                $_SESSION['user'] = $user;

                $q = "SELECT * FROM sessions WHERE user_id='".$_SESSION['user']->id."'";
                $res=mysqli_query($conn, $q);
                if (mysqli_num_rows($res)>0) {
                    $q = "UPDATE sessions SET  first_seen=NOW(), last_seen=NOW() WHERE user_id='".$_SESSION['user']->id."'";
                } else {
                    $q = "INSERT INTO sessions (user_id,first_seen,last_seen) VALUES('".$_SESSION['user']->id."', NOW(), NOW()) ";
                }

                header('Location:index.php');
            } else {
                header('Location:login.php?cerror');
            }
        } else {
            header('Location:login.php?nerror');
        }
    } else {
        header('Location:login.php?perror');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sheriff's Formatter | 500</title>
    <link rel="shortcut icon" href="icon.ico">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/Footer-Clean.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Features-Boxed.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="loginarea">
          <pre style="color: white;">


            ███████╗██╗  ██╗███████╗██████╗ ██╗███████╗███████╗    ███████╗ ██████╗ ██████╗ ███╗   ███╗ █████╗ ████████╗████████╗███████╗██████╗
            ██╔════╝██║  ██║██╔════╝██╔══██╗██║██╔════╝██╔════╝    ██╔════╝██╔═══██╗██╔══██╗████╗ ████║██╔══██╗╚══██╔══╝╚══██╔══╝██╔════╝██╔══██╗
            ███████╗███████║█████╗  ██████╔╝██║█████╗  █████╗      █████╗  ██║   ██║██████╔╝██╔████╔██║███████║   ██║      ██║   █████╗  ██████╔╝
            ╚════██║██╔══██║██╔══╝  ██╔══██╗██║██╔══╝  ██╔══╝      ██╔══╝  ██║   ██║██╔══██╗██║╚██╔╝██║██╔══██║   ██║      ██║   ██╔══╝  ██╔══██╗
            ███████║██║  ██║███████╗██║  ██║██║██║     ██║         ██║     ╚██████╔╝██║  ██║██║ ╚═╝ ██║██║  ██║   ██║      ██║   ███████╗██║  ██║
            ╚══════╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝╚═╝╚═╝     ╚═╝         ╚═╝      ╚═════╝ ╚═╝  ╚═╝╚═╝     ╚═╝╚═╝  ╚═╝   ╚═╝      ╚═╝   ╚══════╝╚═╝  ╚═╝


            Error 500 - Internal server error.






          </pre>
          <center>
            <a href="index.php">Go back</a>
          </center>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

</body>

</html>
