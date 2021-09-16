<?php
$auth_page = true;
session_start();
include('../db.php');
$cssVersion = 2;

if (isset($_SESSION['admin'])) {
    header('Location:dashboard.php');
}

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);
    $hashed = hash('sha512', 'YN3_QY2*m;hbPVab' . $password);

    if (strlen($username)<1||strlen($password)<1) {
        header('Location:login.php?ferror');
    }

    $q = "SELECT * FROM users WHERE user_name='".$username."' AND password = '".$hashed."' AND ( is_admin='1' OR is_admin='2')";

    if (mysqli_query($conn, $q)) {
        $res = mysqli_query($conn, $q);
        if (mysqli_num_rows($res)>0) {
            $user = mysqli_fetch_object($res);

            if ($user->confirmed==1) {
                $_SESSION['admin'] = $user;
                header('Location:dashboard.php');
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
    <meta name="robots" content="noindex">
    <title>Admin CP | Sheriff's Formatter</title>
    <link rel="shortcut icon" href="../icon.ico">

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet">
    <link href="../css/Footer-Clean.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet">
    <link rel="stylesheet" href="../css/Features-Boxed.css?ver=<?php echo $cssVersion; ?>">
    <link rel="stylesheet" href="../css/androidstudio.css?ver=<?php echo $cssVersion; ?>">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet">

    <!-- Firebase -->
    <script src="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.css" />
</head>

<body id="page-top" class="loginarea">
<form method="post" action="">
  <img style="display:block; margin: 6% auto 0 auto" src="/logo-big.png?v=1.2" class="mainlogo fadeIn animated" alt="logo">
    <div id="login_div" class="main-div">
        <code><h1 style="color: white; display: inline-block;padding: 0 15px 15px;">Admin Login</h1><span style="color: gray">Restricted</span></code>
        <?php
        if (isset($_GET['ferror'])) {?>
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">&times;
                </button>
                <strong>Man!</strong><br />Fill all the fields carefully next time, will ya?
            </div>
            <?php
        } elseif (isset($_GET['cerror'])) {?>
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">&times;
                </button>
                <strong>Mmmm...</strong><br />Are you an administrator?<br /><em>♩ ♪ ♫ ♬...</em>
            </div>
        <?php } elseif (isset($_GET['nerror'])) {?>
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">&times;
                </button>
                <strong>Wrong credentials!</strong><br />Try again when you have checked:<br  />1. Brain status.<br />2. Caps lock.<br  />3. If you are an administrator.<br /><em>Now get outta here, fool!</em>
            </div>
            <?php
        } elseif (isset($_GET['perror'])) {?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">&times;
                </button>
                <strong>Sheriff's Formatter is offline!</strong><br /><br /><pre><code class="hljs"><u>Reason</u>: Temporary down for maintenance.</code></pre><br />Please try again later.<br /><i></i>
            </div>
            <?php
        } elseif (isset($_GET['r'])) {?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">&times;
                </button>
                <strong>Erh...</strong><br />Are you an administrator?<br /><em>♩ ♪ ♫ ♬...</em>
            </div>
            <?php
        } ?>

        <input class="top" required type="text" name="username" placeholder="Username..." id="username" />
        <input class="bottom" required type="password" name="password" placeholder="Password..." id="password" />
        <button type="submit" name="login">Login</button>
        <br />
        <center>
          <button type="button" onclick="window.location.href = '/login.php';" class="btn btn-outline-light btn-sm">Login Area</button>
        </center>
    </div>
</form>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin.min.js"></script>

</body>
