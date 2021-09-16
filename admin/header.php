<?php
include('main.php');
   $cssVersion = 6;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sheriff's Formatter</title>
    <link rel="shortcut icon" href="icon.ico">

    <!-- Bootstrap, Footer, Boxes -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="/css/Footer-Clean.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet">
  <link rel="stylesheet" href="/css/Features-Boxed.css?ver=<?php echo $cssVersion; ?>">
  
  <!-- Font Uwusome-->
  <link href="/vendor/fontawesome-free/css/all.min.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet" type="text/css">

  <!-- SB Admin & Navigation -->
  <link href="/css/sb-admin.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet">
  <link href="/css/bootstrap-select.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet" type="text/css">
  <link href="/css/navigation.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet">

  <!-- Moment JS -->
  <script src="/js/moment.js"></script>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <!-- Navigation JS -->
  <script src="/js/navigation.js"></script>

  <!-- air-datepicker -->
  <link rel="stylesheet" href="/vendor/datepicker/datepicker.min.css?ver=<?php echo $cssVersion; ?>">
  <script src="/vendor/datepicker/datepicker.min.js"></script>
  <script src="/vendor/datepicker/i18n/datepicker.en.js"></script>
  
  <!-- jquery bbcode editor below -->
  <script src="/js/editor/jquery.bbcode.js"></script>
  <link rel="stylesheet" href="/js/editor/jquery.bbcode.css">
  
  <!-- Bootstrap Dark Mode Switch -->
  <!-- <script src="/js/darktheme.js"></script> -->
  <script src="/js/darkmode-js.js"></script>
  <link rel="stylesheet" href="/css/darktheme.css" />

</head>

<body id="page-top">
<nav class="navbar navbar-dark navbar-default">
    <div class="container-fluid">

<div class="navbar-brand">
        <span class="slide">
          <a href="#" onclick="openSlideMenu()">
            <i class="fas fa-bars"></i>
          </a>
        </span>
        <a id="logo" class="logo" href="/admin/index.php"></a>
    </div>
</div>
    <script type="text/javascript">
    var options = {
        bottom: '60px', // default: '32px'
        // right: 'unset', // default: '32px'
        // left: '32px', // default: 'unset'
        time: '0.4s', // default: '0.3s'
        mixColor: '#141414', // default: '#fff'
        backgroundColor: '#fff',  // default: '#fff'
        buttonColorDark: '#100f2c',  // default: '#100f2c'
        buttonColorLight: '#100f2c', // default: '#fff'
        saveInCookies: true, // default: true,
        label: '🌓', // default: ''
        autoMatchOsTheme: true // default: true
      }

      const darkmode = new Darkmode(options);
      darkmode.showWidget();
  </script>
    </nav>


  <!-- Sidebar -->
  <div class="content" id="wrapper">
    <ul class="navbar-nav">
    <div id="menu" class="navigation">
    <a href="#" class="fixme close" onclick="closeSlideMenu()">
        <i class="fas fa-times"></i>
    </a>

    <div class="navigation-bar-circle text-center">
      <br>
        <h4><span style="color:#f22">mod:&nbsp;</span><?php echo $_SESSION['admin']->user_name; ?></h4>
        <hr>
          <a class="navigation-user" href="/admin/settings.php">Settings</a>
          <a class="navigation-user" href="/admin/logout.php">Logout</a>
        
      </div>




        <li class="nav-item <?php echo $page=='dashboard'?'active':''; ?>">
            <a class="nav-link" href="dashboard.php">
                <i class="navigation_icon fas fa-fw fa-sticky-note"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item <?php echo $page=='inactive_users'?'active':''; ?>">
            <a class="nav-link" href="inactive_users.php">
                <i class="navigation_icon fas fa-fw fa-user-times"></i>
                <span>Inactive Users</span></a>
        </li>
        <li class="nav-item <?php echo $page=='users'?'active':''; ?>">
            <a class="nav-link" href="users.php">
                <i class="navigation_icon fas fa-fw fa-users"></i>
                <span>Manage Users</span></a>
        </li>
        <li class="nav-item <?php echo $page=='permissions'?'active':''; ?>">
            <a class="nav-link" href="permissions.php">
                <i class="navigation_icon fas fa-fw fa-check-double"></i>
                <span>Manage Permissions</span></a>
        </li>

        <li class="nav-item <?php echo $page=='groups'?'active':''; ?>">
            <a class="nav-link" href="groups.php">
                <i class="navigation_icon fas fa-fw fa-object-group"></i>
                <span>Manage Groups</span></a>
        </li>

        <li class="nav-item <?php echo $page=='ranks'?'active':''; ?>">
            <a class="nav-link" href="ranks.php">
                <i class="navigation_icon fas fa-fw fa-sitemap"></i>
                <span>Manage Ranks</span></a>
        </li>

        <li class="nav-item <?php echo $page=='stations'?'active':''; ?>">
            <a class="nav-link" href="stations.php">
                <i class="navigation_icon fas fa-fw fa-building"></i>
                <span>Manage Stations</span></a>
        </li>
        <li class="nav-item <?php echo $page=='activities'?'active':''; ?>">
            <a class="nav-link" href="activities.php">
                <i class="navigation_icon fas fa-fw fa-history"></i>
                <span>Manage Updates</span></a>
        </li>
        <li class="nav-item <?php echo $page=='action-logs'?'active':''; ?>">
            <a class="nav-link" href="action-logs.php">
                <i class="navigation_icon fas fa-fw fa-terminal"></i>
                <span>Action Logs</span></a>
        </li>
        <li class="nav-item <?php echo $page=='settings'?'active':''; ?>">
            <a class="nav-link" href="settings.php">
                <i class="navigation_icon fas fa-fw fa-cog"></i>
                <span>Account Settings</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">
                <i class="navigation_icon fas fa-fw fa-power-off"></i>
                <span>Logout</span></a>
        </li>

    </ul>
