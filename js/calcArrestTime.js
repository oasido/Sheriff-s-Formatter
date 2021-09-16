// $('.class').on('change', calcArrestTime);
function calcArrestTime(){
  let calculatedTime = 0;
  let maximumTime = 900;
  let resultOfSelection;
  $('.class').each(function() {
  resultOfSelection = $(this).val();

    if (resultOfSelection.includes("(1)01. Intimidation")) {
      calculatedTime += 15;
    }
    if (resultOfSelection.includes("(1)02. Assault")) {
      calculatedTime += 15;
    }
    if (resultOfSelection.includes("(1)03. Assault With A Deadly Weapon")) {
      calculatedTime += 60;
    }
    if (resultOfSelection.includes("(1)04. Mutual Combat")) {
      calculatedTime += 30;
    }
    if (resultOfSelection.includes("(1)05. Battery")) {
      calculatedTime += 45;
    }
    if (resultOfSelection.includes("(1)06. Aggravated Battery")) {
      calculatedTime += 60;
    }
    if (resultOfSelection.includes("(1)07. Attempted Murder")) {
      calculatedTime += 330;
    }
    if (resultOfSelection.includes("(1)08. Manslaughter")) {
      calculatedTime += 240;
    }
    if (resultOfSelection.includes("(1)09. Murder")) {
      calculatedTime += 510;
    }
    if (resultOfSelection.includes("(1)10. False Imprisonment")) {
      calculatedTime += 120;
    }
    if (resultOfSelection.includes("(1)11. Kidnapping")) {
      calculatedTime += 270;
    }
    if (resultOfSelection.includes("(1)12. Mayhem")) {
      calculatedTime += 300;
    }
    if (resultOfSelection.includes("(1)13. Vehicular Murder")) {
      calculatedTime += 510;
    }
    if (resultOfSelection.includes("(2)01. Arson")) {
      calculatedTime += 50;
    }
    if (resultOfSelection.includes("(2)02. Trespassing")) {
      calculatedTime += 10;
    }
    if (resultOfSelection.includes("(2)03. Trespassing within a Restricted Zone")) {
      calculatedTime += 30;
    }
    if (resultOfSelection.includes("(2)04. Burglary")) {
      calculatedTime += 25;
    }
    if (resultOfSelection.includes("(2)06. Robbery")) {
      calculatedTime += 120;
    }
    if (resultOfSelection.includes("(2)07. Armed Robbery")) {
      calculatedTime += 180;
    }
    if (resultOfSelection.includes("(2)08. Petty Theft")) {
      calculatedTime += 20;
    }
    if (resultOfSelection.includes("(2)09. Theft")) {
      calculatedTime += 45;
    }
    if (resultOfSelection.includes("(2)10. Grand Theft")) {
      calculatedTime += 180;
    }
    if (resultOfSelection.includes("(2)11. Grand Theft Auto")) {
      calculatedTime += 120;
    }
    if (resultOfSelection.includes("(2)12. Grand Theft Of A Firearm")) {
      calculatedTime += 180;
    }
    if (resultOfSelection.includes("(2)13. Receiving Stolen Property")) {
      calculatedTime += 25;
    }
    if (resultOfSelection.includes("(2)14. Extortion")) {
      calculatedTime += 180;
    }
    if (resultOfSelection.includes("(2)15. Forgery")) {
      calculatedTime += 30;
    }
    if (resultOfSelection.includes("(2)16. Fraud")) {
      calculatedTime += 60;
    }
    if (resultOfSelection.includes("(2)17. Vandalism")) {
      calculatedTime += 10;
    }
    if (resultOfSelection.includes("(3)01. Lewd Or Dissolute Conduct In Public")) {
      calculatedTime += 10;
    }
    if (resultOfSelection.includes("(3)02. Indecent Exposure")) {
      calculatedTime += 20;
    }
    if (resultOfSelection.includes("(3)03. Prostitution")) {
      calculatedTime += 60;
    }
    if (resultOfSelection.includes("(3)04. Solicitation of Prostitution")) {
      calculatedTime += 60;
    }
    if (resultOfSelection.includes("(3)05. Pandering / Pimping")) {
      calculatedTime += 90;
    }
    if (resultOfSelection.includes("(3)06. Sexual Assault")) {
      calculatedTime += 25;
    }
    if (resultOfSelection.includes("(3)07. Sexual Battery")) {
      calculatedTime += 270;
    }
    if (resultOfSelection.includes("(3)08. Rape")) {
      calculatedTime += 360;
    }
    if (resultOfSelection.includes("(3)09. Statutory Rape")) {
      calculatedTime += 300;
    }
    if (resultOfSelection.includes("(3)10. Stalking")) {
      calculatedTime += 150;
    }
    if (resultOfSelection.includes("(4)01. Bribery")) {
      calculatedTime += 180;
    }
    if (resultOfSelection.includes("(4)02. Failure To Pay A Fine")) {
      calculatedTime += 15;
    }
    if (resultOfSelection.includes("(4)03. Contempt of Court")) {
      calculatedTime += 15;
    }
    if (resultOfSelection.includes("(4)04. Subpoena Violation")) {
      calculatedTime += 30;
    }
    if (resultOfSelection.includes("(4)05. Dissuading A Witness Or Victim")) {
      calculatedTime += 210;
    }
    if (resultOfSelection.includes("(4)06. False Information To A Government Employee")) {
      calculatedTime += 35;
    }
    if (resultOfSelection.includes("(4)07. Filing A False Complaint")) {
      calculatedTime += 25;
    }
    if (resultOfSelection.includes("(4)08. Perjury")) {
      calculatedTime += 90;
    }
    if (resultOfSelection.includes("(4)09. Failure To Identify To A Peace Officer")) {
      calculatedTime += 10;
    }
    if (resultOfSelection.includes("(4)10. Impersonation Of A Government Employee")) {
      calculatedTime += 75;
    }
    if (resultOfSelection.includes("(4)11. Obstruction Of A Government Employee")) {
      calculatedTime += 20;
    }
    if (resultOfSelection.includes("(4)12. Resisting A Peace Officer")) {
      calculatedTime += 25;
    }
    if (resultOfSelection.includes("(4)13. Escape From Custody")) {
      calculatedTime += 100;
    }
    if (resultOfSelection.includes("(4)14. Escape")) {
      calculatedTime += 240;
    }
    if (resultOfSelection.includes("(4)15. Prisoner Breakout")) {
      calculatedTime += 180;
    }
    if (resultOfSelection.includes("(4)16. Human Trafficking")) {
      calculatedTime += 300;
    }
    if (resultOfSelection.includes("(4)17. Misuse Of A Government Hotline")) {
      calculatedTime += 10;
    }
    if (resultOfSelection.includes("(4)18. Tampering With Evidence")) {
      calculatedTime += 120;
    }
    if (resultOfSelection.includes("(4)19. Introduction Of Contraband")) {
      calculatedTime += 100;
    }
    if (resultOfSelection.includes("(4)20. Violation Of Parole Or Probation")) {
      calculatedTime += 180;
    }
    if (resultOfSelection.includes("(4)21. Voter Fraud / Voter Pandering")) {
      calculatedTime += 60;
    }
    if (resultOfSelection.includes("(4)22. Corruption Of Public Duty")) {
      calculatedTime += 240;
    }
    if (resultOfSelection.includes("(4)23. Corruption Of Public Office")) {
      calculatedTime += 300;
    }
    if (resultOfSelection.includes("(4)24. Contempt of Senate")) {
      calculatedTime += 15;
    }
    if (resultOfSelection.includes("(5)01. Disturbing The Peace")) {
      calculatedTime += 15;
    }
    if (resultOfSelection.includes("(5)02. Unlawful Assembly")) {
      calculatedTime += 20;
    }
    if (resultOfSelection.includes("(5)03. Incitement To Riot")) {
      calculatedTime += 120;
    }
    if (resultOfSelection.includes("(5)04. Vigilantism")) {
      calculatedTime += 90;
    }
    if (resultOfSelection.includes("(5)05. Terrorism")) {
      calculatedTime += 900;
    }
    if (resultOfSelection.includes("(6)01. Possession Of A Controlled Substance")) {
      calculatedTime += 15;
    }
    if (resultOfSelection.includes("(6)02. Possession Of A Controlled Substance With Intent To Sell")) {
      calculatedTime += 30;
    }
    if (resultOfSelection.includes("(6)04. Maintaining A Place For The Purpose Of Distribution")) {
      calculatedTime += 45;
    }
    if (resultOfSelection.includes("(6)05. Manufacture Of A Controlled Substance")) {
      calculatedTime += 120;
    }
    if (resultOfSelection.includes("(6)06. Sale Of A Controlled Substance")) {
      calculatedTime += 90;
    }
    if (resultOfSelection.includes("(6)08. Public Intoxication")) {
      calculatedTime += 10;
    }
    if (resultOfSelection.includes("(6)09. Under The Influence Of A Controlled Substance")) {
      calculatedTime += 25;
    }
    if (resultOfSelection.includes("(6)10. Facial Obstruction While Committing A Crime")) {
      calculatedTime += 10;
    }
    if (resultOfSelection.includes("(7)01. Animal Abuse / Cruelty")) {
      calculatedTime += 80;
    }
    if (resultOfSelection.includes("(7)02. Child Abuse")) {
      calculatedTime += 360;
    }
    if (resultOfSelection.includes("(7)03. Sale of Alcohol To A Minor")) {
      calculatedTime += 25;
    }
    if (resultOfSelection.includes("(7)05. Possession Of Child Pornography")) {
      calculatedTime += 180;
    }
    if (resultOfSelection.includes("(8)01. Driving With A Suspended License")) {
      calculatedTime += 20;
    }
    if (resultOfSelection.includes("(8)02. Evading A Peace Officer")) {
      calculatedTime += 120;
    }
    if (resultOfSelection.includes("(8)03. Evading A Peace Officer — High Performance Vehicle")) {
      calculatedTime += 240;
    }
    if (resultOfSelection.includes("(8)04. Evading A Peace Officer — Oversized Vehicle")) {
      calculatedTime += 240;
    }
    if (resultOfSelection.includes("(8)05. Evading A Peace Officer — Naval Vessel")) {
      calculatedTime += 120;
    }
    if (resultOfSelection.includes("(8)06. Evading A Peace Officer — Aircraft")) {
      calculatedTime += 240;
    }
    if (resultOfSelection.includes("(8)07. Flying Without A Pilot's License")) {
      calculatedTime += 25;
    }
    if (resultOfSelection.includes("(8)08. Hit And Run")) {
      calculatedTime += 180;
    }
    if (resultOfSelection.includes("(8)09. Reckless Operation Of An Aircraft")) {
      calculatedTime += 90;
    }
    if (resultOfSelection.includes("(8)10. Reckless Operation Of An Off-Road Or Naval Vehicle")) {
      calculatedTime += 35;
    }
    if (resultOfSelection.includes("(8)11. Failure To Adhere To ATC Protocols")) {
      calculatedTime += 180;
    }
    if (resultOfSelection.includes("(8)12. Failure To Adhere To Flight Protocols")) {
      calculatedTime += 45;
    }
    if (resultOfSelection.includes("(8)13. Restricted Airspace Violation")) {
      calculatedTime += 180;
    }
    if (resultOfSelection.includes("(9)01. Possession Of A Prohibited Weapon")) {
      calculatedTime += 15;
    }
    if (resultOfSelection.includes("(9)02. Possession Of An Unlicensed Firearm")) {
      calculatedTime += 30;
    }
    if (resultOfSelection.includes("(9)03. Possession Of An Illegal Firearm")) {
      calculatedTime += 120;
    }
    if (resultOfSelection.includes("(9)04. Possession Of An Assault Weapon")) {
      calculatedTime += 180;
    }
    if (resultOfSelection.includes("(9)05. Unlicensed Distribution Of A Weapon")) {
      calculatedTime += 240;
    }
    if (resultOfSelection.includes("(9)06. Possession Of An Explosive Device")) {
      calculatedTime += 240;
    }
    if (resultOfSelection.includes("(9)07. Manufacture or Possession of an Improvised Device")) {
      calculatedTime += 180;
    }
    if (resultOfSelection.includes("(9)08. Possession of Weaponry With Intent To Sell")) {
      calculatedTime += 300;
    }
    if (resultOfSelection.includes("(9)09. Possession Of Explosive Devices With Intent To Sell")) {
      calculatedTime += 360;
    }
    if (resultOfSelection.includes("(9)10. Brandishing A Firearm")) {
      calculatedTime += 20;
    }
    if (resultOfSelection.includes("(9)11. Weapons Discharge Violation")) {
      calculatedTime += 25;
    }
    if (resultOfSelection.includes("(9)12. Drive-By Shooting")) {
      calculatedTime += 240;
    }
    if (resultOfSelection.includes("(9)13. CCW / PF Violation")) {
      calculatedTime += 25;
    }
    if (resultOfSelection.includes("(11)06. Vehicular Endangerment")) {
      calculatedTime += 15;
    }
    if (resultOfSelection.includes("(11)08. Illegal Nitrous Oxide Possession")) {
      calculatedTime += 15;
    }
    if (resultOfSelection.includes("(11)10. Driving While Impaired (DWI)")) {
      calculatedTime += 15;
    }
    if (resultOfSelection.includes("(11)11. Driving Under The Influence (DUI)")) {
      calculatedTime += 60;
    }
    if (resultOfSelection.includes("(11)14. Street Racing")) {
      calculatedTime += 20;
    }
    if (resultOfSelection.includes("(11)15. Driving without a Valid License")) {
      calculatedTime += 15;
    }
    if (resultOfSelection.includes("(13)01. Tax Evasion")) {
      calculatedTime += 120;
    }
    if (resultOfSelection.includes("(13)02. Laundering Of Money Instruments")) {
      calculatedTime += 60;
    }
    if (resultOfSelection.includes("(13)03. Gambling License Violation")) {
      calculatedTime += 180;
    }
    if (resultOfSelection.includes("(13)04. Medical Practice Violation")) {
      calculatedTime += 150;
    }
    if (resultOfSelection.includes("(13)05. Legal Practice Violation")) {
      calculatedTime += 20;
    }
    if (resultOfSelection.includes("(13)06. Construction And Maintenance Code Violation")) {
      calculatedTime += 15;
    }
    if (resultOfSelection.includes("(13)07. Criminal Fire Code Violation")) {
      calculatedTime += 20;
    }
    if (resultOfSelection.includes("(13)08. Failure to Comply with Fire Code Orders")) {
      calculatedTime += 20;
    }
    if (resultOfSelection.includes("(13)09. Wiretapping Violation")) {
      calculatedTime += 90;
    }
    if (resultOfSelection.includes("(13)10. Criminal Business Operations")) {
      calculatedTime += 45;
    }
    if (resultOfSelection.includes("(13)11. Corporate Hijacking")) {
      calculatedTime += 30;
    }

    // if calculatedTime >= 900 => calculatedTime == 900
    if (calculatedTime >= maximumTime) {
      calculatedTime = 900;
    }

    // if calculatedTime <= 60 => yellow text
    if (calculatedTime <= 60) {
      document.getElementById("calculatedTime").style.color = "yellow";
    }

    // if calculatedTime >= 60 => red text
    if (calculatedTime >= 60) {
      document.getElementById("calculatedTime").style.color = "red";
    }

    // if calculatedTime == 0 => reset color to green
    if (calculatedTime == 0) {
      document.getElementById("calculatedTime").style.color = "green";
    }
  });

  // print calculatedTime into the ID of 'calculatedTime'
  document.getElementById("calculatedTime").innerHTML = calculatedTime;
}

{
  /* <select onchange="calcArrestTime();" id="classification" data-live-search="true" data-size="7" class="class selectpicker form-control col-sm-6" multiple="multiple">
      <option value="(1)01. Intimidation">(1)01. Intimidation</option>
      <option value="(1)02. Assault">(1)02. Assault</option>
      <option value="(1)03. Assault With A Deadly Weapon">(1)03. Assault With A Deadly Weapon</option>
      <option value="(1)04. Mutual Combat">(1)04. Mutual Combat</option>
      <option value="(1)05. Battery">(1)05. Battery</option>
      <option value="(1)06. Aggravated Battery">(1)06. Aggravated Battery</option>
      <option value="(1)07. Attempted Murder">(1)07. Attempted Murder</option>
      <option value="(1)08. Manslaughter">(1)08. Manslaughter</option>
      <option value="(1)09. Murder">(1)09. Murder</option>
      <option value="(1)10. False Imprisonment">(1)10. False Imprisonment</option>
      <option value="(1)11. Kidnapping">(1)11. Kidnapping</option>
      <option value="(1)12. Mayhem">(1)12. Mayhem</option>
      <option value="(1)13. Vehicular Murder">(1)13. Vehicular Murder</option>
      <option value="(2)01. Arson">(2)01. Arson</option>
      <option value="(2)02. Trespassing">(2)02. Trespassing</option>
      <option value="(2)03. Trespassing within a Restricted Zone">(2)03. Trespassing within a Restricted Zone</option>
      <option value="(2)04. Burglary">(2)04. Burglary</option>
      <option value="(2)06. Robbery">(2)06. Robbery</option>
      <option value="(2)07. Armed Robbery">(2)07. Armed Robbery</option>
      <option value="(2)08. Petty Theft">(2)08. Petty Theft</option>
      <option value="(2)09. Theft">(2)09. Theft</option>
      <option value="(2)10. Grand Theft">(2)10. Grand Theft</option>
      <option value="(2)11. Grand Theft Auto">(2)11. Grand Theft Auto</option>
      <option value="(2)12. Grand Theft Of A Firearm">(2)12. Grand Theft Of A Firearm</option>
      <option value="(2)13. Receiving Stolen Property">(2)13. Receiving Stolen Property</option>
      <option value="(2)14. Extortion">(2)14. Extortion</option>
      <option value="(2)15. Forgery">(2)15. Forgery</option>
      <option value="(2)16. Fraud">(2)16. Fraud</option>
      <option value="(2)17. Vandalism">(2)17. Vandalism</option>
      <option value="(3)01. Lewd Or Dissolute Conduct In Public">(3)01. Lewd Or Dissolute Conduct In Public</option>
      <option value="(3)02. Indecent Exposure">(3)02. Indecent Exposure</option>
      <option value="(3)03. Prostitution">(3)03. Prostitution</option>
      <option value="(3)04. Solicitation of Prostitution">(3)04. Solicitation of Prostitution</option>
      <option value="(3)05. Pandering / Pimping">(3)05. Pandering / Pimping</option>
      <option value="(3)06. Sexual Assault">(3)06. Sexual Assault</option>
      <option value="(3)07. Sexual Battery">(3)07. Sexual Battery</option>
      <option value="(3)08. Rape">(3)08. Rape</option>
      <option value="(3)09. Statutory Rape">(3)09. Statutory Rape</option>
      <option value="(3)10. Stalking">(3)10. Stalking</option>
      <option value="(4)01. Bribery">(4)01. Bribery</option>
      <option value="(4)02. Failure To Pay A Fine">(4)02. Failure To Pay A Fine</option>
      <option value="(4)03. Contempt of Court">(4)03. Contempt of Court</option>
      <option value="(4)04. Subpoena Violation">(4)04. Subpoena Violation</option>
      <option value="(4)05. Dissuading A Witness Or Victim">(4)05. Dissuading A Witness Or Victim</option>
      <option value="(4)06. False Information To A Government Employee">(4)06. False Information To A Government Employee</option>
      <option value="(4)07. Filing A False Complaint">(4)07. Filing A False Complaint</option>
      <option value="(4)08. Perjury">(4)08. Perjury</option>
      <option value="(4)09. Failure To Identify To A Peace Officer">(4)09. Failure To Identify To A Peace Officer</option>
      <option value="(4)10. Impersonation Of A Government Employee">(4)10. Impersonation Of A Government Employee</option>
      <option value="(4)11. Obstruction Of A Government Employee">(4)11. Obstruction Of A Government Employee</option>
      <option value="(4)12. Resisting A Peace Officer">(4)12. Resisting A Peace Officer</option>
      <option value="(4)13. Escape From Custody">(4)13. Escape From Custody</option>
      <option value="(4)14. Escape">(4)14. Escape</option>
      <option value="(4)15. Prisoner Breakout">(4)15. Prisoner Breakout</option>
      <option value="(4)16. Human Trafficking">(4)16. Human Trafficking</option>
      <option value="(4)17. Misuse Of A Government Hotline">(4)17. Misuse Of A Government Hotline</option>
      <option value="(4)18. Tampering With Evidence">(4)18. Tampering With Evidence</option>
      <option value="(4)19. Introduction Of Contraband">(4)19. Introduction Of Contraband</option>
      <option value="(4)20. Violation Of Parole Or Probation">(4)20. Violation Of Parole Or Probation</option>
      <option value="(4)21. Voter Fraud / Voter Pandering">(4)21. Voter Fraud / Voter Pandering</option>
      <option value="(4)22. Corruption Of Public Duty">(4)22. Corruption Of Public Duty</option>
      <option value="(4)23. Corruption Of Public Office">(4)23. Corruption Of Public Office</option>
      <option value="(4)24. Contempt of Senate">(4)24. Contempt of Senate</option>
      <option value="(5)01. Disturbing The Peace">(5)01. Disturbing The Peace</option>
      <option value="(5)02. Unlawful Assembly">(5)02. Unlawful Assembly</option>
      <option value="(5)03. Incitement To Riot">(5)03. Incitement To Riot</option>
      <option value="(5)04. Vigilantism">(5)04. Vigilantism</option>
      <option value="(5)05. Terrorism">(5)05. Terrorism</option>
      <option value="(6)01. Possession Of A Controlled Substance">(6)01. Possession Of A Controlled Substance</option>
      <option value="(6)02. Possession Of A Controlled Substance With Intent To Sell">(6)02. Possession Of A Controlled Substance With Intent To Sell</option>
      <option value="(6)04. Maintaining A Place For The Purpose Of Distribution">(6)04. Maintaining A Place For The Purpose Of Distribution</option>
      <option value="(6)05. Manufacture Of A Controlled Substance">(6)05. Manufacture Of A Controlled Substance</option>
      <option value="(6)06. Sale Of A Controlled Substance">(6)06. Sale Of A Controlled Substance</option>
      <option value="(6)08. Public Intoxication">(6)08. Public Intoxication</option>
      <option value="(6)09. Under The Influence Of A Controlled Substance">(6)09. Under The Influence Of A Controlled Substance</option>
      <option value="(6)10. Facial Obstruction While Committing A Crime">(6)10. Facial Obstruction While Committing A Crime</option>
      <option value="(7)01. Animal Abuse / Cruelty">(7)01. Animal Abuse / Cruelty</option>
      <option value="(7)02. Child Abuse">(7)02. Child Abuse</option>
      <option value="(7)03. Sale of Alcohol To A Minor">(7)03. Sale of Alcohol To A Minor</option>
      <option value="(7)05. Possession Of Child Pornography">(7)05. Possession Of Child Pornography</option>
      <option value="(8)01. Driving With A Suspended License">(8)01. Driving With A Suspended License</option>
      <option value="(8)02. Evading A Peace Officer">(8)02. Evading A Peace Officer</option>
      <option value="(8)03. Evading A Peace Officer — High Performance Vehicle">(8)03. Evading A Peace Officer — High Performance Vehicle</option>
      <option value="(8)04. Evading A Peace Officer — Oversized Vehicle">(8)04. Evading A Peace Officer — Oversized Vehicle</option>
      <option value="(8)05. Evading A Peace Officer — Naval Vessel">(8)05. Evading A Peace Officer — Naval Vessel</option>
      <option value="(8)06. Evading A Peace Officer — Aircraft">(8)06. Evading A Peace Officer — Aircraft</option>
      <option value="(8)07. Flying Without A Pilot's License">(8)07. Flying Without A Pilot's License</option>
      <option value="(8)08. Hit And Run">(8)08. Hit And Run</option>
      <option value="(8)09. Reckless Operation Of An Aircraft">(8)09. Reckless Operation Of An Aircraft</option>
      <option value="(8)10. Reckless Operation Of An Off-Road Or Naval Vehicle">(8)10. Reckless Operation Of An Off-Road Or Naval Vehicle</option>
      <option value="(8)11. Failure To Adhere To ATC Protocols">(8)11. Failure To Adhere To ATC Protocols</option>
      <option value="(8)12. Failure To Adhere To Flight Protocols">(8)12. Failure To Adhere To Flight Protocols</option>
      <option value="(8)13. Restricted Airspace Violation">(8)13. Restricted Airspace Violation</option>
      <option value="(9)01. Possession Of A Prohibited Weapon">(9)01. Possession Of A Prohibited Weapon</option>
      <option value="(9)02. Possession Of An Unlicensed Firearm">(9)02. Possession Of An Unlicensed Firearm</option>
      <option value="(9)03. Possession Of An Illegal Firearm">(9)03. Possession Of An Illegal Firearm</option>
      <option value="(9)04. Possession Of An Assault Weapon">(9)04. Possession Of An Assault Weapon</option>
      <option value="(9)05. Unlicensed Distribution Of A Weapon">(9)05. Unlicensed Distribution Of A Weapon</option>
      <option value="(9)06. Possession Of An Explosive Device">(9)06. Possession Of An Explosive Device</option>
      <option value="(9)07. Manufacture or Possession of an Improvised Device">(9)07. Manufacture or Possession of an Improvised Device</option>
      <option value="(9)08. Possession of Weaponry With Intent To Sell">(9)08. Possession of Weaponry With Intent To Sell</option>
      <option value="(9)09. Possession Of Explosive Devices With Intent To Sell">(9)09. Possession Of Explosive Devices With Intent To Sell</option>
      <option value="(9)10. Brandishing A Firearm">(9)10. Brandishing A Firearm</option>
      <option value="(9)11. Weapons Discharge Violation">(9)11. Weapons Discharge Violation</option>
      <option value="(9)12. Drive-By Shooting">(9)12. Drive-By Shooting</option>
      <option value="(9)13. CCW / PF Violation">(9)13. CCW / PF Violation</option>
      <option value="(11)06. Vehicular Endangerment">(11)06. Vehicular Endangerment</option>
      <option value="(11)08. Illegal Nitrous Oxide Possession">(11)08. Illegal Nitrous Oxide Possession</option>
      <option value="(11)10. Driving While Impaired (DWI)">(11)10. Driving While Impaired (DWI)</option>
      <option value="(11)11. Driving Under The Influence (DUI)">(11)11. Driving Under The Influence (DUI)</option>
      <option value="(11)14. Street Racing">(11)14. Street Racing</option>
      <option value="(11)15. Driving without a Valid License">(11)15. Driving without a Valid License</option>
      <option value="(13)01. Tax Evasion">(13)01. Tax Evasion</option>
      <option value="(13)02. Laundering Of Money Instruments">(13)02. Laundering Of Money Instruments</option>
      <option value="(13)03. Gambling License Violation">(13)03. Gambling License Violation</option>
      <option value="(13)04. Medical Practice Violation">(13)04. Medical Practice Violation</option>
      <option value="(13)05. Legal Practice Violation">(13)05. Legal Practice Violation</option>
      <option value="(13)06. Construction And Maintenance Code Violation">(13)06. Construction And Maintenance Code Violation</option>
      <option value="(13)07. Criminal Fire Code Violation">(13)07. Criminal Fire Code Violation</option>
      <option value="(13)09. Wiretapping Violation">(13)09. Wiretapping Violation</option>
      <option value="(13)10. Criminal Business Operations">(13)10. Criminal Business Operations</option>
      <option value="(13)11. Corporate Hijacking">(13)11. Corporate Hijacking</option>
  </select> */
}
