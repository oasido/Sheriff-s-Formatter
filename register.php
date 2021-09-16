<?php

$auth_page = true;

include('main.php');
$cssVersion = 2;

if (isset($_POST['save'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $game_name = str_replace('_', ' ', mysqli_real_escape_string($conn, $_POST['game_name']));
    $station = mysqli_real_escape_string($conn, $_POST['station']);
    $badge = mysqli_real_escape_string($conn, $_POST['badge']);
    $rank = mysqli_real_escape_string($conn, $_POST['rank']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $hashed = hash('sha512', 'YN3_QY2*m;hbPVab' . $password);
    $verificationCode = 'PAA2IF5CJHJZ1ECW03J2';
    $verificationInput = mysqli_real_escape_string($conn, $_POST['code']);

    if (strlen($name) < 1 || strlen($game_name) < 1 || strlen($station) < 1 || strlen($badge) < 1 || strlen($rank) < 1 || strlen($password) < 1) {
        header('Location:register.php?ferror');
    }

    $q = "SELECT * FROM users WHERE user_name = '" . $name . "'";
    if (mysqli_num_rows(mysqli_query($conn, $q)) > 0 || $verificationCode != $verificationInput) {
        header('Location:register.php?aerror');
    } else {
        $q = "INSERT INTO users(user_name,game_name,station,badge_no,rank,password) VALUES('" . $name . "','" . $game_name . "','" . $station . "','" . $badge . "','" . $rank . "','" . $hashed . "')";

        if (mysqli_query($conn, $q)) {
            $q = "INSERT INTO act_log (title) VALUES ('" . $name . " has registered.')";

            mysqli_query($conn, $q);
            header('Location:register.php?regsuc');
        } else {
            header('Location:register.php?perror');
        }
    }
}

$query = "SELECT * FROM ranks order by id desc";
$ranks = mysqli_query($conn, $query);




?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js"></script>
    <title>Sheriff's Formatter</title>
    <link rel="shortcut icon" href="icon.ico">

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet">
    <link href="css/Footer-Clean.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet">
    <link rel="stylesheet" href="css/Features-Boxed.css?ver=<?php echo $cssVersion; ?>">
    <link rel="stylesheet" href="css/androidstudio.css?ver=<?php echo $cssVersion; ?>">
    <link rel="stylesheet" href="css/animate.css?ver=<?php echo $cssVersion; ?>">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet">

    <style>
        #sirenVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }
    </style>
</head>

<body id="page-top" class="loginarea">
    <form method="post" action="">
        <img style="display:block; margin: 6% auto 0 auto" src="logo-big.png?v=1.2" class="mainlogo pulse animated" alt="logo">
        <div id="login_div" class="main-div">

            <?php
            if (isset($_GET['regsuc'])) {
            ?>
                <div class="alert alert-success" style="right: 42px; width: 50ch;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        &times;
                    </button>
                    <strong>Welcome!</strong><br /> Your account has been created successfully, make sure you <a href="https://sd.lsgov.io/forum/posting.php?mode=reply&f=6&t=137037" target="_blank">reply to the main thread</a> with the form below, in order to get your account approved:<br />
                    <pre><code class="hljs">[b]Registered with username:[/b] userNameExample</code></pre>
                </div>
            <?php
            } elseif (isset($_GET['ferror'])) {
            ?>
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>
                    <strong>Error!</strong> Please fill all the fields carefully.
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
            } elseif (isset($_GET['aerror'])) {
            ?>
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>
                    <strong>Try again!</strong><br><br>Username already taken\Invalid verification code used.
                </div>
            <?php
            }
            ?>
            <center class="bg-dark rounded">
                <span style="color:white;">Passwords are encrypted, but: </span><p style="font-size: 1em;" class="font-weight-bold text-danger">Never use the same password twice!</p>
            </center>
            <input class="top" required type="text" name="code" placeholder="Insert verification code..." id="code" />
            <input class="middle" required minlength="4" maxlength="25" type="text" name="name" placeholder="Choose a username..." id="username" />
            <input class="middle" required type="text" class="spaceFix" name="game_name" placeholder="Your in-game name..." id="ign" />
            <select class="middle" required id="station" name="station">
                <option value="" disabled selected>Select your station</option>
                <?php
                $qw = "SELECT * FROM stations ORDER BY id DESC";
                $rest = mysqli_query($conn, $qw);
                while ($stations = mysqli_fetch_object($rest)) {
                    echo '<option value="' . $stations->value . '">' . $stations->title . '</option>';
                }
                ?>

            </select>
            <input class="middle" required type="number" name="badge" placeholder="Badge number..." id="badge" />
            <select class="middle selectGray" required id="rank" name="rank">
                <option value="" disabled selected>Select your rank</option>
                <?php
                while ($row = mysqli_fetch_object($ranks)) {
                    echo '<option value="' . $row->id . '">' . $row->title . '</option>';
                }
                ?>
            </select>
            <input class="bottom" required type="password" name="password" placeholder="Password..." id="password" />
            <!-- aye -->
            <button type="submit" name="save">Register</button>
            <br />
            <center><button type="button" onclick="window.location.href = 'login.php';" class="btn btn-outline-light btn-sm">Login Area</button></center>
        </div>
    </form>

    </div>
    </div>
    <!-- /#wrapper -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

</body>

</html>