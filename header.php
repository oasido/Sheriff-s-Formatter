<?php
   $page = $_SERVER['REQUEST_URI'];
   $page = str_replace('/', '', $page);
   $cssVersion = 12;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="description"
    content="Sheriff's Formatter is an online tool created for the Sheriff's Department members of the Los Santos Roleplay community. Only members of the faction may enter!">
  <meta name="keywords"
    content="SASD, LSSD, LASD, Sheriff's, Formatter, Format, Sheriff Tool, Aye, Support Tool, Format Generator">
  <title>Sheriff's Formatter</title>
  <link rel="shortcut icon" href="/icon.ico">

  <!-- Bootstrap, Footer, Boxes -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- <link href="/vendor/bootstrap/css/bootstrap.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet"> -->
  <link href="/css/Footer-Clean.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet">
  <link rel="stylesheet" href="/css/Features-Boxed.css?ver=<?php echo $cssVersion; ?>">
  
  <!-- Font Uwusome-->
  <link href="/vendor/fontawesome-free/css/all.min.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet" type="text/css">

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
  <!-- SB Admin & Navigation -->
  <link href="/css/sb-admin.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet">
  <link href="/css/bootstrap-select.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet" type="text/css">
  <link href="/css/navigation.css?ver=<?php echo $cssVersion; ?>" rel="stylesheet">
  <script src="/js/navigation.js"></script>


  <!-- Moment JS -->
  <script src="/js/moment.js"></script>

  <!-- air-datepicker -->
  <link rel="stylesheet" href="/vendor/datepicker/datepicker.min.css?ver=<?php echo $cssVersion; ?>">
  <script src="/vendor/datepicker/datepicker.min.js"></script>
  <script src="/vendor/datepicker/i18n/datepicker.en.js"></script>
  
  <!-- jquery bbcode editor below -->
  <script src="/js/editor/jquery.bbcode.js"></script>
  <link rel="stylesheet" href="/js/editor/jquery.bbcode.css">
  
  <!-- Bootstrap Dark Mode Switch -->
  <script src="/js/darkmode-js.js"></script>
  <link rel="stylesheet" href="/css/darktheme.css?ver=<?php echo $cssVersion; ?>" />

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
        <a id="logo" class="logo" href="/index.php"></a>
    </div>
      <!-- Navbar MDC -->
      <div class="d-flex align-items-center flex-nowrap">
        <form class="mdcHide mr-0 form-inline ">
            <div class="input-group">
              <input type="text" class="form-control" id="mdc"
                onkeydown="if (event.keyCode == 13) {document.getElementById('searchInput').click(); return false;}"
                placeholder="Full name search..." aria-label="MDC Check" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-dark" type="button" id="searchInput" onclick=searchName()>
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        
        
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
        <h4><?php echo $_SESSION['user']->user_name; ?></h4>
        <hr>
          <a class="navigation-user" href="/settings.php">Settings</a>
          <a class="navigation-user" href="/profile.php?id=<?php echo $_SESSION['user']->id; ?>">Profile</a>
          <a class="navigation-user" href="/logout.php">Logout</a>
        
      </div>



      <?php
            if (in_array('index', $auth_pages)) {
                ?>
      <li class="nav-item <?php if ($page == 'index') {echo "active";} ?>">
        <a class="nav-link" href="/index.php">
          <i class="navigation_icon fas fa-fw fa-sticky-note"></i>
          <span>Homepage</span>
        </a>
      </li>

      <?php
            }  if (in_array('statements', $auth_pages)||in_array('preinvesrep', $auth_pages)||in_array('tow', $auth_pages)) {
                ?>
      <li class="nav-item <?php if ($page=='statements'||$page=='preinvesrep'||$page=='incident'||$page=='seize'||$page=='tow') {
                    echo "active";
                } ?> dropdown actionToggle">
        <a data-display="static" data-flip="false" data-toggle="dropdown" class="nav-link  dropdown-toggle" href="#" id="pagesDropdown1" role="button"
          aria-haspopup="true" aria-expanded="true">
          <i class="navigation_icon fas fa-fw fa-tasks"></i>
          <span>Shift Management</span>
        </a>
        <div class="dropdown-menu <?php if ($page=='statements'||$page=='preinvesrep'||$page=='incident'||$page=='seize'||$page=='tow') {
                    echo "show" . " active";
                } ?>" aria-labelledby="pagesDropdown1" style="">
          <?php
                  if (in_array('statements', $auth_pages)||in_array('preinvesrep', $auth_pages)||in_array('tow', $auth_pages)) {
                      ?>
          <h6 class="dropdown-header">Dept. Intelligence:</h6>
          <a class="dropdown-item <?php echo $page=='statements'?'active':''; ?>" href="/statements.php">Filed
            Statements</a>
          <a class="dropdown-item <?php echo $page=='preinvesrep'?'active':''; ?>" href="/preinvesrep.php">Investigative
            Request</a>
          <a class="dropdown-item <?php echo $page=='incident'?'active':''; ?>" href="/incident.php">Incident Report</a>
          <a class="dropdown-item <?php echo $page=='seize'?'active':''; ?>" href="/seize.php">Property Seizure</a>
          <a class="dropdown-item <?php echo $page=='tow'?'active':''; ?>" href="/tow.php">Vehicle Confiscation</a>
          <?php
                  } ?>
        </div>
      </li>
      <!-- !! -->
      <?php
            }  if (in_array('ar', $auth_pages)||in_array('critique', $auth_pages)||in_array('dor', $auth_pages)||in_array('caf', $auth_pages)||in_array('ftodor', $auth_pages)) {
                ?>
      <li class="nav-item <?php if ($page=='ar'||$page=='critique'||$page=='dor'||$page=='caf'||$page=='ftp-critique'||$page=='ftodor') {
                    echo "active";
                } ?> dropdown actionToggle">
        <a data-display="static" data-flip="false" data-toggle="dropdown" class="nav-link  dropdown-toggle" href="#" id="pagesDropdown1" role="button"
          aria-haspopup="true" aria-expanded="true">
          <i class="navigation_icon fas fa-fw fa-graduation-cap"></i>
          <span>Field Training</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown1" style="<?php if ($page=='ar'||$page=='critique'||$page=='ftp-critique'||$page=='dor'||$page=='ftpmcaf'||$page=='ftpmftodor'||$page=='ftpmftplog') {
                    echo "display:block;";
                } ?>">
          <?php
                  if (in_array('ar', $auth_pages)||in_array('critique', $auth_pages)||in_array('ftp-critique', $auth_pages)) {
                      ?>
          <h6 class="dropdown-header">Trainees Area:</h6>
          <a class="dropdown-item <?php echo $page=='ar'?'active':''; ?>" href="/ar.php">Arrest Report</a>
          <a class="dropdown-item <?php echo $page=='critique'?'active':''; ?>" href="/critique.php">FTO Critique
            Report</a>
          <a class="dropdown-item <?php echo $page=='ftp-critique'?'active':''; ?>" href="/ftp-critique.php">FTP
            Critique Report</a>
          <?php
                  }
                if (in_array('dor', $auth_pages)||in_array('caf', $auth_pages)) {
                    ?>
          <!-- <div class="dropdown-divider"></div> -->
          <h6 class="dropdown-header">FTOs Area:</h6>
          <a class="dropdown-item <?php echo $page=='dor'?'active':''; ?>" href="/dor.php">Daily Observation</a>

          <?php
                }
                if (in_array('ftpm', $auth_pages)) {
                    ?>
          <h6 class="dropdown-header">Management Area:</h6>
          <a class="dropdown-item <?php echo $page=='ftpmftplog'?'active':''; ?>" href="/ftpm/ftplog.php">FTP Log</a>
          <a class="dropdown-item <?php echo $page=='ftpmcaf'?'active':''; ?>" href="/ftpm/caf.php">Competency Form</a>
          <a class="dropdown-item <?php echo $page=='ftpmftodor'?'active':''; ?>" href="/ftpm/ftodor.php">FTO Daily
            Observation</a>
          <?php
                } ?>

        </div>
      </li>
      <!-- !! -->

      <?php
            }  if (in_array('arrestwarrantapp', $auth_pages)||in_array('arrestwarrant', $auth_pages)) {
                ?>
      <li class="nav-item <?php if ($page=='arrestwarrantapp'||$page=='arrestwarrant') {
                    echo "active";
                } ?> dropdown actionToggle">
        <a data-display="static" data-flip="false" data-toggle="dropdown" class="nav-link  dropdown-toggle" href="#" id="pagesDropdown2" role="button"
          aria-haspopup="true" aria-expanded="true">
          <i class="navigation_icon fas fa-fw fa-table"></i>
          <span>Warrant Execution</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown2" style="<?php if ($page=='arrestwarrantapp'||$page=='arrestwarrant') {
                    echo "display:block;";
                } ?>">
          <?php
                  if (in_array('arrestwarrantapp', $auth_pages)) {
                      ?> <a class="dropdown-item" href="https://salets.us/" target="_blank">SALETS <i
              class="fas fa-xs fa-external-link-alt"></i></a>
          <a class="dropdown-item <?php echo $page=='arrestwarrantapp'?'active':''; ?>"
            href="/arrestwarrantapp.php">Arrest Warrant App</a>
          <?php
                  }
                if (in_array('arrestwarrant', $auth_pages)) {
                    ?>
          <a class="dropdown-item <?php echo $page=='arrestwarrant'?'active':''; ?>" href="/arrestwarrant.php">Issue
            Arrest Warrant</a>
          <?php
                } ?>
        </div>
      </li>

      <!-- TRAFFIC BELOW -->
      <?php
            }  if (in_array('traffic', $auth_pages)) {
                ?>
      <li class="nav-item <?php if ($page=='trafficstop'||$page=='trafficimpound'||$page=='trafficcitation'||$page=='trafficcollision') {
                    echo "active";
                } ?> dropdown actionToggle">
        <a data-display="static" data-flip="false" data-toggle="dropdown" class="nav-link dropdown-toggle" href="#" id="pagesDropdown3" role="button"
          aria-haspopup="true" aria-expanded="false">
          <i class="navigation_icon fas fa-fw fa-car-side"></i>
          <span>Traffic Services Bureau</span>
        </a>
        <div class="dropdown-menu" style="<?php if ($page=='trafficstop'||$page=='trafficimpound'||$page=='trafficcitation'||$page=='trafficcollision') {
                    echo "display:block;";
                } ?>" aria-labelledby="pagesDropdown3">
          <h6 class="dropdown-header">Patrol Log Forms:</h6>
          <a class="dropdown-item <?php echo $page=='trafficstop'?'active':''; ?>" href="/traffic/stop.php">Traffic
            Stop</a>
          <a class="dropdown-item <?php echo $page=='trafficimpound'?'active':''; ?>"
            href="/traffic/impound.php">Impound Report</a>
          <a class="dropdown-item <?php echo $page=='trafficcitation'?'active':''; ?>"
            href="/traffic/citation.php">Citation Report</a>
          <!-- <div class="dropdown-divider"></div> -->
          <h6 class="dropdown-header">Submitted Reports:</h6>
          <!-- <a class="dropdown-item" href="#">Traffic Operation</a> -->
          <a class="dropdown-item <?php echo $page=='trafficcollision'?'active':''; ?>"
            href="/traffic/collision.php">Traffic Collision</a>
        </div>
      </li>
      <!-- TRAFFIC ABOVE -->

      <!-- SEB BELOW -->
      <?php
            }  if (in_array('seb', $auth_pages)||in_array('medical', $auth_pages)) {
                ?>
      <li class="nav-item dropdown <?php if ($page=='sebaar'||$page=='sebcsp'||$page=='medicalmstdeploy'||$page=='medicalpatientcare') {
                    echo "active";
                } ?>">
        <a data-display="static" data-flip="false" data-toggle="dropdown" class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button"
          aria-haspopup="true" aria-expanded="true">
          <i class="navigation_icon fas fa-fw fa-crosshairs"></i>
          <span>Special Enforcement</span>
        </a>
        <div class="dropdown-menu" style="<?php if ($page=='sebaar'||$page=='sebcsp'||$page=='medicalmstdeploy'||$page=='medicalpatientcare') {
                    echo "display:block;";
                } ?>" aria-labelledby="pagesDropdown">
          <?php
            }  if (in_array('seb', $auth_pages)) {
                ?>
          <h6 class="dropdown-header">General Forms:</h6>
          <a class="dropdown-item <?php echo $page=='sebaar'?'active':''; ?>" href="/seb/aar.php">After Action
            Report</a> <a class="dropdown-item <?php echo $page=='sebcsp'?'active':''; ?>" href="/seb/csp.php">Patrol
            Rounds</a> <?php
            }  if (in_array('medical', $auth_pages)) {
                ?> <!-- <div class="dropdown-divider"></div> -->
        <h6 class="dropdown-header">Medical Support Team:</h6>
        <a class="dropdown-item <?php echo $page=='medicalmstdeploy'?'active':''; ?>"
          href="/medical/mstdeploy.php">Deployment Form</a>
        <a class="dropdown-item <?php echo $page=='medicalpatientcare'?'active':''; ?>"
          href="/medical/patientcare.php">Patient Care Form</a>
  </div>
  </li>
  <!-- SEB ABOVE -->

  <!-- AB BELOW -->
  <?php
            }  if (in_array('ab', $auth_pages)||in_array('rescue', $auth_pages)||in_array('abc', $auth_pages)) {
                ?>
  <li class="nav-item <?php if ($page=='abflight'||$page=='rescuedeploy'||$page=='abcprogress-file'||$page=='abctrain-sim'||$page=='abcevaluation'||$page=='abcommandcfi-eval') {
                    echo "active";
                } ?> dropdown actionToggle">
    <a data-display="static" data-flip="false" data-toggle="dropdown" class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button"
      aria-haspopup="true" aria-expanded="true">
      <i class="navigation_icon fas fa-fw fa-helicopter"></i>
      <span>Aero Bureau</span>
    </a>
    <div class="dropdown-menu" style="<?php if ($page=='abflight'||$page=='rescuedeploy'||$page=='abcprogress-file'||$page=='abctrain-sim'||$page=='abcevaluation'||$page=='abcommandcfi-eval') {
                    echo "display:block;";
                } ?>" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Flight Related:</h6>
      <!-- <a class="dropdown-item <?php echo $page=='abflight'?'active':''; ?>" href="/ab/flight.php">Flight Log</a> -->
      <a class="dropdown-item" href="https://clockify.me/tracker" target="_blank">Clockify <i
          class="fas fa-xs fa-external-link-alt"></i></a>
      <?php
                if (in_array('rescue', $auth_pages)) {
                    ?>
      <!-- <div class="dropdown-divider"></div> -->
      <h6 class="dropdown-header">Rescue 5 Program:</h6>
      <a class="dropdown-item <?php echo $page=='rescuedeploy'?'active':''; ?>" href="/rescue/deploy.php">Deployment
        Log</a>
      <?php
                } ?> <?php
                if (in_array('abc', $auth_pages)) {
                    ?>

      <h6 class="dropdown-header">Flight Instructors +:</h6>
      <a class="dropdown-item <?php echo $page=='abcprogress-file'?'active':''; ?>"
        href="/abc/progress-file.php">Training File</a>
      <a class="dropdown-item <?php echo $page=='abctrain-sim'?'active':''; ?>"
        href="/abc/train-sim.php">Training/Simulation</a>
      <a class="dropdown-item <?php echo $page=='abcevaluation'?'active':''; ?>" href="/abc/evaluation.php">Final
        Evaluation</a>
      <?php
                }
                if (in_array('abcommand', $auth_pages)) {
                    ?>
      <h6 class="dropdown-header">Bureau Command:</h6>
      <a class="dropdown-item <?php echo $page=='abcommandcfi-eval'?'active':''; ?>" href="/abcommand/cfi-eval.php">CFI
        Evaluation</a>

      <?php
                } ?>
    </div>
  </li>
  <!-- AB ABOVE -->

  <!-- Detective Division Below -->
  <?php
            }  if (in_array('dd', $auth_pages) || in_array('dmp', $auth_pages)) {
                ?>
  <li class="nav-item <?php if ($page=='ddcase'||$page=='ddfollowup'||$page=='ddsurveillance'||$page=='ddcasefile'||$page=='ddpoi') {
                    echo "active";
                } ?>  dropdown actionToggle">
    <a data-display="static" data-flip="false" data-toggle="dropdown" class="nav-link dropdown-toggle" href="#" id="pagesDropdown5" role="button"
      aria-haspopup="true" aria-expanded="true">
      <i class="navigation_icon fas fa-fw fa-user-secret"></i>
      <span>Detective Division</span>
    </a>
    <div class="dropdown-menu" style="<?php if ($page=='ddcase'||$page=='ddfollowup'||$page=='ddsurveillance'||$page=='ddcasefile'||$page=='ddpoi') {
                    echo "display:block;";
                } ?>" aria-labelledby="pagesDropdown5">
      <!-- <h6 class="dropdown-header"></h6> -->
              <?php } if (in_array('dd', $auth_pages)) { ?>
      <a class="dropdown-item <?php echo $page=='ddcase'?'active':''; ?>" href="/dd/case.php">Case Format</a>
      <a class="dropdown-item <?php echo $page=='ddcasefile'?'active':''; ?>" href="/dd/casefile.php">Organization Case
        File</a>
      <a class="dropdown-item <?php echo $page=='ddfollowup'?'active':''; ?>" href="/dd/followup.php">Follow Up
        Report</a>
        <a class="dropdown-item <?php echo $page=='ddsurveillance'?'active':''; ?>" href="/dd/surveillance.php">Surveillance Report</a>
      <a class="dropdown-item <?php echo $page=='ddpoi'?'active':''; ?>" href="/dd/poi.php">POI Format</a>
              <?php }  if (in_array('dmp', $auth_pages)) {?>
      <a class="dropdown-item <?php echo $page=='dmpeval'?'active':''; ?>" href="/dmp/eval.php">DMP Mentor Evaluation</a>
    </div>
  </li>
  <!-- Detective Division above -->


  <?php
            }  if (in_array('ia', $auth_pages)) {
                ?>
  <li class="nav-item dropdown <?php if ($page=='iais'||$page=='iacinves-concl'||$page=='iainves-checklist'||$page=='iagarrity'||$page=='iamiranda'||$page=='iadicv'||$page=='iaint-corres'||$page=='iaext-corres'||$page=='iaquestions'||$page=='iaftr') {
                    echo "active";
                } ?>">
    <a data-display="static" data-flip="false" data-toggle="dropdown" class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button"
      aria-haspopup="true" aria-expanded="true">
      <i class="navigation_icon fas fa-fw fa-search"></i>
      <span>Internal Affairs</span>
    </a>
    <div class="dropdown-menu" style="<?php if ($page=='iais'||$page=='iacinves-concl'||$page=='iainves-checklist'||$page=='iagarrity'||$page=='iamiranda'||$page=='iadicv'||$page=='iaint-corres'||$page=='iaext-corres'||$page=='iaquestions'||$page=='iaftr') {
                    echo "display:block;";
                } ?>" aria-labelledby="pagesDropdown">
      <?php
                 if (in_array('ia', $auth_pages)) {
                     ?>
      <!-- <h6 class="dropdown-header">General Forms:</h6> -->
      <a class="dropdown-item <?php echo $page=='iais'?'active':''; ?>" href="/ia/is.php">UOF Review</a>
      <a class="dropdown-item <?php echo $page=='iainves-checklist'?'active':''; ?>"
        href="/ia/inves-checklist.php">Inves. Checklist</a>
      <a class="dropdown-item <?php echo $page=='iagarrity'?'active':''; ?>" href="/ia/garrity.php">Garrity Warning</a>
      <a class="dropdown-item <?php echo $page=='iamiranda'?'active':''; ?>" href="/ia/miranda.php">Miranda Warning</a>
      <a class="dropdown-item <?php echo $page=='iadicv'?'active':''; ?>" href="/ia/dicv.php">DICV Request</a>
      <a class="dropdown-item <?php echo $page=='iaint-corres'?'active':''; ?>" href="/ia/int-corres.php">Internal
        Corres.</a>
      <a class="dropdown-item <?php echo $page=='iaext-corres'?'active':''; ?>" href="/ia/ext-corres.php">External
        Corres.</a>
      <a class="dropdown-item <?php echo $page=='iaquestions'?'active':''; ?>"
        href="/ia/questions.php">Questionnaire</a>
      <a class="dropdown-item <?php echo $page=='iaftr'?'active':''; ?>" href="/ia/ftr.php">Failure to Respond</a>
      <?php
                 } ?>
      <?php
                if (in_array('iac', $auth_pages)) {
                    ?>
      <h6 class="dropdown-header">Command Members:</h6>
      <a class="dropdown-item <?php echo $page=='iacinves-concl'?'active':''; ?>" href="/iac/inves-concl.php">Inves.
        Conclusion</a> <?php
                } ?> </div>
  </li>
  <!-- IA ABOVE -->


  <!-- TRAINING BUREAU BELOW -->
  <?php
            }  if (in_array('tb', $auth_pages)||in_array('tb-biu', $auth_pages)) {
                ?>
  <li class="nav-item dropdown <?php if ($page=='tbinterview-assessment'||$page=='tbfile'||$page=='tbwritten-test'||$page=='tbexam-review'||$page=='tbpend-app'||$page=='tb-biudisqualified'||$page=='tb-biureceived'||$page=='tb-biuneedact'||$page=='tb-biunoticewritten'||$page=='tb-biuinterview'||$page=='tb-biuemployoffer') {
                    echo 'active';
                } ?> ">
    <a data-display="static" data-flip="false" data-toggle="dropdown" class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button"
      aria-haspopup="true" aria-expanded="true">
      <i class="navigation_icon fas fa-fw fa-user-graduate"></i>
      <span>Training Bureau</span>
    </a>
    <div class="dropdown-menu" style="<?php if ($page=='tbinterview-assessment'||$page=='tbfile'||$page=='tbwritten-test'||$page=='tbexam-review'||$page=='tbpend-app'||$page=='tb-biudisqualified'||$page=='tb-biureceived'||$page=='tb-biuneedact'||$page=='tb-biunoticewritten'||$page=='tb-biuinterview'||$page=='tb-biuemployoffer') {
                    echo "display:block;";
                } ?>" aria-labelledby="pagesDropdown">
      <?php
            } if (in_array('tb', $auth_pages)) {  ?>
      <a class="dropdown-item <?php echo $page=='tbinterview-assessment'?'active':''; ?>"
        href="/tb/interview-assessment.php">Interview Assessment</a>
      <a class="dropdown-item <?php echo $page=='tbfile'?'active':''; ?>" href="/tb/file.php">Administrative File</a>
      <a class="dropdown-item <?php echo $page=='tbwritten-test'?'active':''; ?>" href="/tb/written-test.php">Prepare A
        Written Test</a>
      <a class="dropdown-item <?php echo $page=='tbexam-review'?'active':''; ?>" href="/tb/exam-review.php">Exam
        Handling</a>
      <a class="dropdown-item <?php echo $page=='tbpend-app'?'active':''; ?>" href="/tb/pend-app.php">Pending
        Application</a>
      <?php
             } if (in_array('tb-biu', $auth_pages)) {  ?>
      <h6 class="dropdown-header">Background Inves. Unit:</h6>
      <a class="dropdown-item <?php echo $page=='tb-biudisqualified'?'active':''; ?>"
        href="/tb-biu/disqualified.php">Disq. Applicant</a>
      <a class="dropdown-item <?php echo $page=='tb-biureceived'?'active':''; ?>" href="/tb-biu/received.php">Received
        Applicant</a>
      <a class="dropdown-item <?php echo $page=='tb-biuneedact'?'active':''; ?>" href="/tb-biu/needact.php">Action
        Needed</a>
      <a class="dropdown-item <?php echo $page=='tb-biunoticewritten'?'active':''; ?>"
        href="/tb-biu/noticewritten.php">Written Test</a>
      <a class="dropdown-item <?php echo $page=='tb-biuinterview'?'active':''; ?>"
        href="/tb-biu/interview.php">Structured Interview</a>
      <a class="dropdown-item <?php echo $page=='tb-biuemployoffer'?'active':''; ?>"
        href="/tb-biu/employoffer.php">Employment Offer</a>
    </div>
  </li>
  <!-- !! -->
  <?php
}  if (in_array('correspondence', $auth_pages)||in_array('reportaplayer', $auth_pages)||in_array('arrestcalc', $auth_pages)) {
                ?>

  <li class="nav-item dropdown <?php if ($page=='reportaplayer') {
                    echo "active";
                } ?>">
    <a data-display="static" data-flip="false" data-toggle="dropdown" class="nav-link  dropdown-toggle" href="#" id="pagesDropdown1" role="button"
      aria-haspopup="true" aria-expanded="true">
      <i class="navigation_icon fas fa-fw fa-random"></i>
      <span>Other</span>
    </a>
    <div class="dropdown-menu <?php if ($page=='correspondence'||$page=='reportaplayer'||$page=='arrestcalc') {
                    echo "active" . " show";
                } ?>" aria-labelledby="pagesDropdown1" style="<?php if ($page=='correspondence'||$page=='reportplayer'||$page=='arrestcalc') {
                    echo "display:block;";
                } ?>">
      <?php
                  if (in_array('correspondence', $auth_pages)||in_array('reportaplayer', $auth_pages)||in_array('arrestcalc', $auth_pages)) {
                      ?>
      <a class="dropdown-item <?php if ($page=='correspondence') {
                          echo "active";
                      } ?>" href="/correspondence.php">Office Correspondence</a>
      <a class="dropdown-item <?php if ($page=='reportaplayer') {
                          echo "active";
                      } ?>" href="/reportaplayer.php">Player Report</a>
      <a class="dropdown-item <?php if ($page=='arrestcalc') {
                          echo "active";
                      } ?>" href="/arrestcalc.php">Arrest Calculator</a>
      <?php
                  } ?>
    </div>
  </li>
  <!-- !! -->

  <?php
            }
             if (in_array('verify_users', $auth_pages)) {
                 ?>
  <li class="nav-item <?php if ($page=='verify_users') {
                     echo "active";
                 } ?>">
    <a class="nav-link " href="/verify_users.php">
      <i class="navigation_icon fas fa-fw fa-archive"></i>
      <span>Verify Users</span></a>
  </li>
  <?php
             }
             if (in_array('myGroups', $auth_pages)) {
                 ?>
  <li class="nav-item <?php if ($page=='myGroups') {
                     echo "active";
                 } ?>">
    <a class="nav-link " href="/myGroups.php">
      <i class="navigation_icon fas fa-fw fa-archive"></i>
      <span>Group Management</span></a>
  </li>
  <?php
             }
            ?>
    </div> 
  </ul>