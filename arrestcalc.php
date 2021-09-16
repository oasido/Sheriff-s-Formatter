<?php
include 'main.php';
?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sheriff's Formatter</title>
    <link rel="shortcut icon" href="icon.ico">

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/Footer-Clean.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Features-Boxed.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <script src="js/moment.js"></script>
    <script src="js/calcArrestTime.js"></script>

    <!-- Bootstrap-Select CSS -->
    <link href="css/bootstrap-select.css" rel="stylesheet" type="text/css">
  </head>

  <body id="page-top" class="loginarea">
    <form>
          <h1 class="ArrestCalcHeader">Mini Arrest Calculator</h1>
      <div class="main-divAR">
        <h1 class="inline" style="color: green;font-size: 100px;" id="calculatedTime">0</h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p class="inline" style="color: white;">minute(s) prison time</p>
        <div class="input_fields_container_part">
          <br />
          <?php include 'charges.php'?>
          <br/>
        </div>
        <div class="aye"></div>
        <br/>
        <center>
          <a href="#" class="add_more_button" style="color: green;"><i class="fas fa-plus-circle" style="font-size: 25px;"></i></a>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#" class="remove_field" style="font-size: 25px"><i class="fas fa-times" style="color:red;"></i></a>
        </center>
        <br/>
        <div class="alert alert-info" role="alert">
          <h4 class="alert-heading">How does this work?</h4>
          <p>Aye, this arrest calculator is definitely not the best - depends who you ask.<br/>It is automatically set to select the absolute minimum prison time of every charge selected (because you are all very nice).</p>
          <hr>
          <p class="mb-0">This was mainly created to help with calculating time for arrest warrants. Enjoy.</p>
        </div>
        <div style="margin-top: 50px;">
          <center>
            <a href="https://forum.ls-rp.io/viewtopic.php?f=120&t=656781" target="_blank">Access Penal Code</a>
          </center>
          <br/>
          <center>
            <a href="index"><img src="logo.png"></a>
          </center>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- <script src="../vendor/bootstrap/js/bootstrap.min.js"></script> -->
<!-- <script src="../vendor/bootstrap/js/bootstrap.js"></script> -->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>

</body>
<script>
// aye
// document.onkeydown = function (e) {
//   if (event.keyCode == 123) {
//     return false;
//   }
//   if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
//     return false;
//   }
//   if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
//     return false;
//   }
//   if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
//     return false;
//   }
// }


// Form additions
let x = 1; //initialize counter for text box
$(document).ready(function () {
  var max_fields_limit = 20; //set limit for maximum input fields
  var selection = "";

  $('.add_more_button').click(function (e) { //click event on add more fields button having class add_more_button
    e.preventDefault();
    if (x < max_fields_limit) { //check conditions
      x++; //counter increment
      $('.aye').append("<div class='ayedditional'><br /><select onchange='calcArrestTime();' id='' data-live-search='true' data-size='7' class='class selectpicker form-control col-sm-6' multiple='multiple'><option>(1)01. Intimidation</option><option>(1)02. Assault</option><option>(1)03. Assault With A Deadly Weapon</option><option>(1)04. Mutual Combat</option><option>(1)05. Battery</option><option>(1)06. Aggravated Battery</option><option>(1)07. Attempted Murder</option><option>(1)08. Manslaughter</option><option>(1)09. Murder</option><option>(1)10. False Imprisonment</option><option>(1)11. Kidnapping</option><option>(1)12. Mayhem</option><option>(1)13. Vehicular Murder</option><option>(2)01. Arson</option><option>(2)02. Trespassing</option><option>(2)03. Trespassing within a Restricted Zone</option><option>(2)04. Burglary</option><option>(2)06. Robbery</option><option>(2)07. Armed Robbery</option><option>(2)08. Petty Theft</option><option>(2)09. Theft</option><option>(2)10. Grand Theft</option><option>(2)11. Grand Theft Auto</option><option>(2)12. Grand Theft Of A Firearm</option><option>(2)13. Receiving Stolen Property</option><option>(2)14. Extortion</option><option>(2)15. Forgery</option><option>(2)16. Fraud</option><option>(2)17. Vandalism</option><option>(3)01. Lewd Or Dissolute Conduct In Public</option><option>(3)02. Indecent Exposure</option><option>(3)03. Prostitution</option><option>(3)04. Solicitation of Prostitution</option><option>(3)05. Pandering / Pimping</option><option>(3)06. Sexual Assault</option><option>(3)07. Sexual Battery</option><option>(3)08. Rape</option><option>(3)09. Statutory Rape</option><option>(3)10. Stalking</option><option>(4)01. Bribery</option><option>(4)02. Failure To Pay A Fine</option><option>(4)03. Contempt of Court</option><option>(4)04. Subpoena Violation</option><option>(4)05. Dissuading A Witness Or Victim</option><option>(4)06. False Information To A Government Employee</option><option>(4)07. Filing A False Complaint</option><option>(4)08. Perjury</option><option>(4)09. Failure To Identify To A Peace Officer</option><option>(4)10. Impersonation Of A Government Employee</option><option>(4)11. Obstruction Of A Government Employee</option><option>(4)12. Resisting A Peace Officer</option><option>(4)13. Escape From Custody</option><option>(4)14. Escape</option><option>(4)15. Prisoner Breakout</option><option>(4)16. Human Trafficking</option><option>(4)17. Misuse Of A Government Hotline</option><option>(4)18. Tampering With Evidence</option><option>(4)19. Introduction Of Contraband</option><option>(4)20. Violation Of Parole Or Probation</option><option>(4)21. Voter Fraud / Voter Pandering</option><option>(4)22. Corruption Of Public Duty</option><option>(4)23. Corruption Of Public Office</option><option>(4)24. Contempt of Senate</option><option>(5)01. Disturbing The Peace</option><option>(5)02. Unlawful Assembly</option><option>(5)03. Incitement To Riot</option><option>(5)04. Vigilantism</option><option>(5)05. Terrorism</option><option>(6)01. Possession Of A Controlled Substance</option><option>(6)02. Possession Of A Controlled Substance With Intent To Sell</option><option>(6)04. Maintaining A Place For The Purpose Of Distribution</option><option>(6)05. Manufacture Of A Controlled Substance</option><option>(6)06. Sale Of A Controlled Substance</option><option>(6)08. Public Intoxication</option><option>(6)09. Under The Influence Of A Controlled Substance</option><option>(6)10. Facial Obstruction While Committing A Crime</option><option>(7)01. Animal Abuse / Cruelty</option><option>(7)02. Child Abuse</option><option>(7)03. Sale of Alcohol To A Minor</option><option>(7)05. Possession Of Child Pornography</option><option>(8)01. Driving With A Suspended License</option><option>(8)02. Evading A Peace Officer</option><option>(8)03. Evading A Peace Officer — High Performance Vehicle</option><option>(8)04. Evading A Peace Officer — Oversized Vehicle</option><option>(8)05. Evading A Peace Officer — Naval Vessel</option><option>(8)06. Evading A Peace Officer — Aircraft</option><option>(8)07. Flying Without A Pilot's License</option><option>(8)08. Hit And Run</option><option>(8)09. Reckless Operation Of An Aircraft</option><option>(8)10. Reckless Operation Of An Off-Road Or Naval Vehicle</option><option>(8)11. Failure To Adhere To ATC Protocols</option><option>(8)12. Failure To Adhere To Flight Protocols</option><option>(8)13. Restricted Airspace Violation</option><option>(9)01. Possession Of A Prohibited Weapon</option><option>(9)02. Possession Of An Unlicensed Firearm</option><option>(9)03. Possession Of An Illegal Firearm</option><option>(9)04. Possession Of An Assault Weapon</option><option>(9)05. Unlicensed Distribution Of A Weapon</option><option>(9)06. Possession Of An Explosive Device</option><option>(9)07. Manufacture or Possession of an Improvised Device</option><option>(9)08. Possession of Weaponry With Intent To Sell</option><option>(9)09. Possession Of Explosive Devices With Intent To Sell</option><option>(9)10. Brandishing A Firearm</option><option>(9)11. Weapons Discharge Violation</option><option>(9)12. Drive-By Shooting</option><option>(9)13. CCW / PF Violation</option><option>(11)06. Vehicular Endangerment</option><option>(11)08. Illegal Nitrous Oxide Possession</option><option>(11)10. Driving While Impaired (DWI)</option><option>(11)11. Driving Under The Influence (DUI)</option><option>(11)14. Street Racing</option><option>(11)15. Driving without a Valid License</option><option>(13)01. Tax Evasion</option><option>(13)02. Laundering Of Money Instruments</option><option>(13)03. Gambling License Violation</option><option>(13)04. Medical Practice Violation</option><option>(13)05. Legal Practice Violation</option><option>(13)06. Construction And Maintenance Code Violation</option><option>(13)07. Criminal Fire Code Violation</option><option>(13)09. Wiretapping Violation</option><option>(13)10. Criminal Business Operations</option><option>(13)11. Corporate Hijacking</option> </select></div>"
      ); //add input field
      calcArrestTime();
      $(".class").selectpicker("refresh");
    }
  });

  $('.remove_field').on('click', function (e) { //user click on remove text links
    e.preventDefault();
    $('.ayedditional:last').remove();
    x--;
    calcArrestTime();
  })
  });
</script>
<script src="js/bootstrap-select.js"></script>
</html>
