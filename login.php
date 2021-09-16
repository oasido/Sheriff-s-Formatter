<?php

$auth_page = true;

include('main.php');
$cssVersion = 2;

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $hashed = hash('sha512', 'YN3_QY2*m;hbPVab' . $password);

    if (strlen($username) < 1 || strlen($hashed) < 1) {
        header('Location:login.php?ferror');
    }


    $q = "SELECT * FROM users WHERE user_name='" . $username . "' AND password = '" . $hashed . "'";

    if (mysqli_query($conn, $q)) {
        $res = mysqli_query($conn, $q);
        if (mysqli_num_rows($res) > 0) {
            $user = mysqli_fetch_object($res);

            if ($user->confirmed == 1) {
                $_SESSION['user'] = $user;

                $q = "SELECT * FROM sessions WHERE user_id='" . $_SESSION['user']->id . "'";
                $res = mysqli_query($conn, $q);
                if (mysqli_num_rows($res) > 0) {
                    $q = "UPDATE sessions SET  first_seen=NOW(), last_seen=NOW() WHERE user_id='" . $_SESSION['user']->id . "'";
                } else {
                    $q = "INSERT INTO sessions (user_id,first_seen,last_seen) VALUES('" . $_SESSION['user']->id . "', NOW(), NOW()) ";
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
    <title>Sheriff's Formatter</title>
    <meta name="description" content="Sheriff's Formatter is an online tool created for the Sheriff's Department members of the Los Santos Roleplay community. Only members of the faction may enter!">
    <meta name="keywords" content="SASD, LSSD, LASD, Sheriff's, Formatter, Format, Sheriff Tool, Aye, Support Tool, Format Generator">
    <link rel="shortcut icon" href="icon.ico">
    <link href="vendor/bootstrap/css/bootstrap.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet">
    <link href="css/Footer-Clean.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet">
    <link rel="stylesheet" href="css/Features-Boxed.css?ver=<?php echo $cssVersion; ?>">
    <link href="vendor/fontawesome-free/css/all.min.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css?ver=<?php echo $cssVersion; ?>">
    <link rel="stylesheet" href="css/androidstudio.css?ver=<?php echo $cssVersion; ?>">
</head>

<body id="page-top" class="loginarea">
    <form method="post" action="">
        <img style="display:block; margin: 6% auto 0 auto; border:10px;" src="logo-big.png?v=1.2" class="mainlogo pulse animated" alt="logo">
        <div id="login_div" class="main-div bounceInUp animated">
            <?php
            if (isset($_GET['ferror'])) {
            ?>
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>
                    <strong>Aye!</strong> Fill all the fields carefully...
                </div>
            <?php
            } elseif (isset($_GET['cerror'])) {
            ?>
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>
                    <strong>Unable to login!</strong><br />Your profile is not approved yet.<br /><br /><u>Things you can do:</u><br />1. Wait patiently.<br />2. Read a book.<br />3. Write forms by hand.<br />4. Annoy someone about it.<br /><em>♩ ♪ ♫ ♬...</em>
                </div>
            <?php
            } elseif (isset($_GET['nerror'])) {
            ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>
                    <strong>Wrong credentials!</strong><br />The username or password you entered is incorrect.
                </div>
            <?php
            } elseif (isset($_GET['perror'])) {
            ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>
                    <strong>Sheriff's Formatter is offline!</strong><br /><br />
                    <pre><code class="hljs"><u>Reason</u>: Temporary down for maintenance.</code></pre><br />Please try again later.<br /><i></i>
                </div>
            <?php
            } elseif (isset($_GET['r'])) {
            ?>
                <div class="alert alert-dark">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>
                    <strong>Hello!</strong> Login to have access.
                </div>
            <?php
            } ?>

            <input class="top" required type="text" maxlength="25" name="username" placeholder="Username..." />
            <input class="bottom" required type="password" name="password" placeholder="Password..." />
            <button type="submit" name="login">Login</button>
            <br />
            <center>
                <button type="button" onclick="window.location.href = 'register.php';" class="btn btn-outline-primary btn-sm">Register</button>
                <button type="button" onclick="window.location.href = 'admin.php';" class="btn btn-outline-danger btn-sm">Admin CP</button>
            </center>
        </div>
    </form>
    </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

</body>

</html>