<?php
include('../main.php');
include '../header.php';
?>
         <!-- SEPERATOR -->
         <div id="content-wrapper">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-7 col-md-12">
                     <div class="card">
                        <div class="card-header">
                           <strong>Phase 1</strong>
                        </div>
                        <div class="card-body">
                           <table class="table table-responsive" id="phase1">
                              <tbody>
                                 <tr>
                                    <td><strong>Field Training Officer</strong></td>
                                    <td><strong>Badge Number</strong></td>
                                    <td><strong>Date</strong></td>
                                 </tr>
                                 <tr>
                                    <!-- Stuff add here -->
                                 </tr>
                              </tbody>
                           </table>
                           <center><button class="btn btn-outline-primary" onclick="phase1add()">Add</button></center>
                        </div>
                     </div>
                     <br />
                     <div class="card">
                        <div class="card-header">
                           <strong>Phase 2</strong>
                        </div>
                        <div class="card-body">
                           <table class="table table-responsive" id="phase2">
                              <tbody>
                                 <tr>
                                    <td><strong>Field Training Officer</strong></td>
                                    <td><strong>Badge Number</strong></td>
                                    <td><strong>Date</strong></td>
                                 </tr>
                                 <tr>
                                    <!-- Stuff add here -->
                                 </tr>
                              </tbody>
                           </table>
                           <center><button class="btn btn-outline-primary" onclick="phase2add()">Add</button></center>
                        </div>
                     </div>
                     <br />
                     <div class="card">
                        <div class="card-header">
                           <strong>Phase 3</strong>
                        </div>
                        <div class="card-body">
                           <table class="table table-responsive" id="phase3">
                              <tbody>
                                 <tr>
                                    <td><strong>Field Training Officer</strong></td>
                                    <td><strong>Badge Number</strong></td>
                                    <td><strong>Date</strong></td>
                                 </tr>
                                 <tr>
                                    <!-- Stuff add here -->
                                 </tr>
                              </tbody>
                           </table>
                           <center><button class="btn btn-outline-primary" onclick="phase3add()">Add</button></center>
                        </div>
                     </div>
                     <br />
                     <div class="card">
                        <div class="card-header">
                           <strong>Remedial Extension</strong>
                        </div>
                        <div class="card-body">
                           <table class="table table-responsive" id="phaseE">
                              <tbody>
                                 <tr>
                                    <td><strong>Field Training Officer</strong></td>
                                    <td><strong>Badge Number</strong></td>
                                    <td><strong>Date</strong></td>
                                 </tr>
                                 <tr>
                                    <!-- Stuff add here -->
                                 </tr>
                              </tbody>
                           </table>
                           <center><button class="btn btn-outline-primary" onclick="phaseEadd()">Add</button></center>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card">
                        <div class="card-header">
                           <strong>General Information</strong>
                        </div>
                        <div class="card-body">
                          <div class="form-inline">
                             <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Date</label>
                                <input class="form-control col-sm-6" type="date" id="currentDate">
                             </div>
                          </div>
                          <br>
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Trainee Name</label>
                                 <input class="form-control col-sm-6" type="text" id="trainee" onkeyup="this.value = this.value.toUpperCase();">
                              </div>
                           </div>
                           <br />
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Trainee Badge Number</label>
                                 <input class="form-control col-sm-6" type="number" id="tBadge">
                              </div>
                           </div>
                           <hr>
                           <!--HR-->
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Station Captain Signature</label>
                                 <input class="form-control col-sm-6" type="text" id="stationCaptainSig" onkeyup="this.value = this.value.toUpperCase();">
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- <br />
                     <div class="card">
                        <div class="card-header">
                           <strong>Signatures</strong>
                        </div>
                        <div class="card-body">
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Field Supervisor Signature</label>
                                 <input class="form-control col-sm-6" type="text" id="fieldSupervisorSig" onkeyup="this.value = this.value.toUpperCase();">
                              </div>
                           </div>
                           <br />

                        </div>
                     </div> -->
                  </div>
               </div>
               <br />
               <div class="highlight-clean">
                  <div class="container">
                     <center>
                        <button class="btn btn-success btn-lg" onClick="process()"><i class="fas fa-cog"></i> Generate Form</button><br /><br />
                        <h5 class="font-weight-bold">Generated text:</h5>
                        <textarea rows="5" class="form-control col-sm-6" id="finish"></textarea>
                     </center>
                  </div>
               </div>
            </div>
            <!-- aye-->
            <!-- JS Form Script-->
            <script type="text/javascript">
               $(document).ready(function() {
                  phase1add();
                  phase2add();
                  phase3add();
                  phaseEadd();
               });

               // Phase 1 Add
               function phase1add() {
                   var empTab1 = document.getElementById('phase1');

                   var rowCnt1 = empTab1.rows.length;        // GET TABLE ROW COUNT.
                   var tr1 = empTab1.insertRow(rowCnt1);      // TABLE ROW.
                   tr1 = empTab1.insertRow(rowCnt1);

                   for (var c = 0; c < 4; c++) {
                       var td = document.createElement('td');          // TABLE DEFINITION.
                       td = tr1.insertCell(c);
                       td.setAttribute("style", "width: 35%");
                       switch (c) {
                           case 0: {
                               // ADD A BUTTON.
                               var input = document.createElement('input');

                               // SET INPUT ATTRIBUTE.
                               input.setAttribute('type', 'text');
                               input.setAttribute("class", 'form-control');
                               input.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
                               input.setAttribute("placeholder", 'Firstname Lastname');
                               td.appendChild(input);
                               break;
                           }

                           case 1: {
                               var phase1badge = document.createElement("input");
                               phase1badge.setAttribute("type", "number");
                               phase1badge.setAttribute("class", 'form-control');
                               td.appendChild(phase1badge);
                               break;
                           }

                           case 2: {
                               var phase1from = document.createElement("input");
                               phase1from.setAttribute("type", "date");
                               phase1from.setAttribute("class", 'form-control');
                               td.appendChild(phase1from);
                               break;
                           }

                           case 3: {
                               var phase1remove = document.createElement("input");
                               phase1remove.setAttribute('type', 'button');
                               phase1remove.setAttribute('value', 'Remove');
                               phase1remove.setAttribute("class", "btn btn-danger btn-sm");

                               // ADD THE BUTTON's 'onclick' EVENT.
                               phase1remove.setAttribute('onclick', 'removeRow1(this)');
                               td.appendChild(phase1remove);
                               break;

                           }
                       }
                   }
               }

               // DELETE TABLE ROW.
               function removeRow1(oButton) {
                   var empTab1 = document.getElementById('phase1');
                   empTab1.deleteRow(oButton.parentNode.parentNode.rowIndex);       // BUTTON -> TD -> TR.
               }

               // Table 2
               function phase2add() {
                   var empTab2 = document.getElementById('phase2');

                   var rowCnt2 = empTab2.rows.length;        // GET TABLE ROW COUNT.
                   var tr2 = empTab2.insertRow(rowCnt2);      // TABLE ROW.
                   tr2 = empTab2.insertRow(rowCnt2);

                   for (var c = 0; c < 4; c++) {
                       var td = document.createElement('td');          // TABLE DEFINITION.
                       td = tr2.insertCell(c);
                       td.setAttribute("style", "width: 35%");
                       switch (c) {
                           case 0: {
                               // ADD A BUTTON.
                               var input2 = document.createElement('input');

                               // SET INPUT ATTRIBUTE.
                               input2.setAttribute('type', 'text');
                               input2.setAttribute("class", 'form-control');
                               input2.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
                               input2.setAttribute("placeholder", 'Firstname Lastname');
                               td.appendChild(input2);
                               break;
                           }

                           case 1: {
                               var phase2badge = document.createElement("input");
                               phase2badge.setAttribute("type", "number");
                               phase2badge.setAttribute("class", 'form-control');
                               td.appendChild(phase2badge);
                               break;
                           }

                           case 2: {
                               var phase2from = document.createElement("input");
                               phase2from.setAttribute("type", "date");
                               phase2from.setAttribute("class", 'form-control');
                               td.appendChild(phase2from);
                               break;
                           }

                           case 3: {
                               var phase2remove = document.createElement("input");
                               phase2remove.setAttribute('type', 'button');
                               phase2remove.setAttribute('value', 'Remove');
                               phase2remove.setAttribute("class", "btn btn-danger btn-sm");

                               // ADD THE BUTTON's 'onclick' EVENT.
                               phase2remove.setAttribute('onclick', 'removeRow2(this)');
                               td.appendChild(phase2remove);
                               break;

                           }
                       }
                   }
               }

               // DELETE TABLE ROW.
               function removeRow2(oButton) {
                   var empTab2 = document.getElementById('phase2');
                   empTab2.deleteRow(oButton.parentNode.parentNode.rowIndex);       // BUTTON -> TD -> TR.
               }

               // Table 3
               function phase3add() {
                   var empTab3 = document.getElementById('phase3');

                   var rowCnt3 = empTab3.rows.length;        // GET TABLE ROW COUNT.
                   var tr3 = empTab3.insertRow(rowCnt3);      // TABLE ROW.
                   tr3 = empTab3.insertRow(rowCnt3);

                   for (var c = 0; c < 4; c++) {
                       var td = document.createElement('td');          // TABLE DEFINITION.
                       td = tr3.insertCell(c);
                       td.setAttribute("style", "width: 35%");
                       switch (c) {
                           case 0: {
                               // ADD A BUTTON.
                               var input = document.createElement('input');

                               // SET INPUT ATTRIBUTE.
                               input.setAttribute('type', 'text');
                               input.setAttribute("class", 'form-control');
                               input.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
                               input.setAttribute("placeholder", 'Firstname Lastname');
                               td.appendChild(input);
                               break;
                           }

                           case 1: {
                               var phase3badge = document.createElement("input");
                               phase3badge.setAttribute("type", "number");
                               phase3badge.setAttribute("class", 'form-control');
                               td.appendChild(phase3badge);
                               break;
                           }

                           case 2: {
                               var phase3from = document.createElement("input");
                               phase3from.setAttribute("type", "date");
                               phase3from.setAttribute("class", 'form-control');
                               td.appendChild(phase3from);
                               break;
                           }

                           case 3: {
                               var phase3remove = document.createElement("input");
                               phase3remove.setAttribute('type', 'button');
                               phase3remove.setAttribute('value', 'Remove');
                               phase3remove.setAttribute("class", "btn btn-danger btn-sm");

                               // ADD THE BUTTON's 'onclick' EVENT.
                               phase3remove.setAttribute('onclick', 'removeRow3(this)');
                               td.appendChild(phase3remove);
                               break;

                           }
                       }
                   }
               }

               // DELETE TABLE ROW.
               function removeRow3(oButton) {
                   var empTab3 = document.getElementById('phase3');
                   empTab3.deleteRow(oButton.parentNode.parentNode.rowIndex);       // BUTTON -> TD -> TR.
               }
               // Table EXTENSION
               function phaseEadd() {
                   var empTab4 = document.getElementById('phaseE');

                   var rowCnt4 = empTab4.rows.length;        // GET TABLE ROW COUNT.
                   var tr4 = empTab4.insertRow(rowCnt4);      // TABLE ROW.
                   tr4 = empTab4.insertRow(rowCnt4);

                   for (var c = 0; c < 4; c++) {
                       var td = document.createElement('td');          // TABLE DEFINITION.
                       td = tr4.insertCell(c);
                       td.setAttribute("style", "width: 35%");
                       switch (c) {
                           case 0: {
                               // ADD A BUTTON.
                               var input = document.createElement('input');

                               // SET INPUT ATTRIBUTE.
                               input.setAttribute('type', 'text');
                               input.setAttribute("class", 'form-control');
                               input.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
                               input.setAttribute("placeholder", 'Firstname Lastname');
                               td.appendChild(input);
                               break;
                           }

                           case 1: {
                               var phaseEbadge = document.createElement("input");
                               phaseEbadge.setAttribute("type", "number");
                               phaseEbadge.setAttribute("class", 'form-control');
                               td.appendChild(phaseEbadge);
                               break;
                           }

                           case 2: {
                               var phaseEfrom = document.createElement("input");
                               phaseEfrom.setAttribute("type", "date");
                               phaseEfrom.setAttribute("class", 'form-control');
                               td.appendChild(phaseEfrom);
                               break;
                           }

                           case 3: {
                               var phaseEremove = document.createElement("input");
                               phaseEremove.setAttribute('type', 'button');
                               phaseEremove.setAttribute('value', 'Remove');
                               phaseEremove.setAttribute("class", "btn btn-danger btn-sm");

                               // ADD THE BUTTON's 'onclick' EVENT.
                               phaseEremove.setAttribute('onclick', 'removeRow4(this)');
                               td.appendChild(phaseEremove);
                               break;

                           }
                       }
                   }
               }

               // DELETE TABLE ROW.
               function removeRow4(oButton) {
                   var empTab4 = document.getElementById('phaseE');
                   empTab4.deleteRow(oButton.parentNode.parentNode.rowIndex);       // BUTTON -> TD -> TR.
               }


                   function cut_and_list(the_cut) {
                     //	for phpBB listing by spaces
                     var the_list = "";
                     var splitting = the_cut.split("\n");
                     for (i = 0; i < splitting.length; i++)
                     {
                       the_list += "[*]" + splitting[i] + "\n";
                     }
                     return the_list;
                   }

                   function double_cal(the_cut) {
                     // for phpBB listing by spaces & commas, twice
                     the_list = "";
                     the_cut = the_cut.split("\n");
                     for (i = 0; i < the_cut.length; i++)
                     {
                       split_cut = the_cut[i].split(",");
                       the_list += "" +split_cut[0]+"\n";
                       the_list += "\n";
                       for (k = 1; k < split_cut.length; k++)
                       {
                         the_list += "" + split_cut[k] + "\n";
                       }
                       the_list += "\n";
                     }
                     return the_list;
                   }


                   function process() {
                       var currentDate = document.getElementById("currentDate").value;
                       var trainee = document.getElementById("trainee").value;
                       var tBadge = document.getElementById("tBadge").value;
                       var SAC = "<?php echo $_SESSION['user']->game_name; ?>"
                       // name or signature as signature
                       var sacSig;
                       if ("<?php echo $_SESSION['user']->signature; ?>" === "") {
                         sacSig = "<?php echo $_SESSION['user']->game_name; ?>";
                       } else {
                         sacSig = "[img]"+"<?php echo $_SESSION['user']->signature; ?>"+"[/img]";
                       }

                       var sacBadge = "<?php echo $_SESSION['user']->badge_no; ?>"
                       // var OneFTO = document.getElementById("1FTO").value;
                       // var OneBadge = document.getElementById("1Badge").value;
                       // var OneFromDate = document.getElementById("1FromDate").value;
                       // var OneToDate = document.getElementById("1ToDate").value;
                       // var TwoFTO = document.getElementById("2FTO").value;
                       // var TwoBadge = document.getElementById("2Badge").value;
                       // var TwoFromDate = document.getElementById("2FromDate").value;
                       // var TwoToDate = document.getElementById("2ToDate").value;
                       // var ThreeFTO = document.getElementById("3FTO").value;
                       // var ThreeBadge = document.getElementById("3Badge").value;
                       // var ThreeFromDate = document.getElementById("3FromDate").value;
                       // var ThreeToDate = document.getElementById("3ToDate").value;
                       // var eFTO = document.getElementById("eFTO").value;
                       // var eBadge = document.getElementById("eBadge").value;
                       // var eFromDate = document.getElementById("eFromDate").value;
                       // var eToDate = document.getElementById("eToDate").value;
                       // var fieldSupervisorSig = document.getElementById("fieldSupervisorSig").value;
                       var stationCaptainSig = document.getElementById("stationCaptainSig").value;


               var myTabPhase1 = document.getElementById('phase1');
               // LOOP THROUGH EACH ROW OF THE TABLE.
               var phase1fto = "";
               var phase1badge = "";
               var phase1from = "";
                           for (row = 1; row < myTabPhase1.rows.length - 1; row++) {
                               for (c = 0; c < myTabPhase1.rows[row].cells.length - 0; c++) {   // EACH CELL IN A ROW.
                                   switch (c) {
                                       case 0: {
                                           // Get the phase1 name;
                                           var element = myTabPhase1.rows.item(row).cells[c];
                                           phase1fto += element.childNodes[0].value + "\n";
                                           break;
                                       }

                                       case 1: {
                                           var element = myTabPhase1.rows.item(row).cells[c];
                                           phase1badge += element.childNodes[0].value + "\n";
                                           break;
                                       }

                                       case 2: {
                                           var element = myTabPhase1.rows.item(row).cells[c];
                                           phase1from += element.childNodes[0].value + "\n";
                                           break;
                                       }

                                   }
                               }
                           }

               // Table 2
               var myTabPhase2 = document.getElementById('phase2');
               // LOOP THROUGH EACH ROW OF THE TABLE.
               var phase2fto = "";
               var phase2badge = "";
               var phase2from = "";
               for (row = 1; row < myTabPhase2.rows.length - 1; row++) {
               for (c = 0; c < myTabPhase2.rows[row].cells.length - 0; c++) {   // EACH CELL IN A ROW.
                   switch (c) {
                       case 0: {
                           // Get the phase1 name;
                           var element = myTabPhase2.rows.item(row).cells[c];
                           phase2fto += element.childNodes[0].value + "\n";
                           break;
                       }

                       case 1: {
                           var element = myTabPhase2.rows.item(row).cells[c];
                           phase2badge += element.childNodes[0].value + "\n";
                           break;
                       }

                       case 2: {
                           var element = myTabPhase2.rows.item(row).cells[c];
                           phase2from += element.childNodes[0].value + "\n";
                           break;
                       }

                       }
                   }
               }
               // table 3
               var myTabPhase3 = document.getElementById('phase3');
                       // LOOP THROUGH EACH ROW OF THE TABLE.
                       var phase3fto = "";
                       var phase3badge = "";
                       var phase3from = "";
                                   for (row = 1; row < myTabPhase3.rows.length - 1; row++) {
                                       for (c = 0; c < myTabPhase3.rows[row].cells.length - 0; c++) {   // EACH CELL IN A ROW.
                                           switch (c) {
                                               case 0: {
                                                   // Get the phase1 name;
                                                   var element = myTabPhase3.rows.item(row).cells[c];
                                                   phase3fto += element.childNodes[0].value + "\n";
                                                   break;
                                               }

                                               case 1: {
                                                   var element = myTabPhase3.rows.item(row).cells[c];
                                                   phase3badge += element.childNodes[0].value + "\n";
                                                   break;
                                               }

                                               case 2: {
                                                   var element = myTabPhase3.rows.item(row).cells[c];
                                                   phase3from += element.childNodes[0].value + "\n";
                                                   break;
                                               }

                                           }
                                       }
                                   }
               // table Extension
               var myTabphaseE = document.getElementById('phaseE');
                       // LOOP THROUGH EACH ROW OF THE TABLE.
                       var phaseEfto = "";
                       var phaseEbadge = "";
                       var phaseEfrom = "";
                                   for (row = 1; row < myTabphaseE.rows.length - 1; row++) {
                                       for (c = 0; c < myTabphaseE.rows[row].cells.length - 0; c++) {   // EACH CELL IN A ROW.
                                           switch (c) {
                                               case 0: {
                                                   // Get the phaseE name;
                                                   var element = myTabphaseE.rows.item(row).cells[c];
                                                   phaseEfto += element.childNodes[0].value + "\n";
                                                   break;
                                               }

                                               case 1: {
                                                   var element = myTabphaseE.rows.item(row).cells[c];
                                                   phaseEbadge += element.childNodes[0].value + "\n";
                                                   break;
                                               }

                                               case 2: {
                                                   var element = myTabphaseE.rows.item(row).cells[c];
                                                   phaseEfrom += element.childNodes[0].value + "\n";
                                                   break;
                                               }

                                           }
                                       }
                                   }

                       var format = "[divbox=white][b][size=80][aligntable=center,0,245,0,0,0]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT[/aligntable][/size][/b]\n\
               [aligntable=right,0,0,0,0,0][size=80]SH-FT-301[/size][/ALIGNTABLE][aligntable=center,0,190,0,0,0][b][size=80]COMPETENCY ATTESTATION FORM — FIELD TRAINING PROGRAM[/size][/b][/aligntable]\n\
               [line][/line]\n\
               [table]\n\
               [tr]\n\
               [td][size=75][b]TRAINEE NAME[/b][/size][/td]\n\
               [td][size=75][b]EMPLOYEE NUMBER[/b][/size][/td]\n\
               [td][size=75][b]FTP SAC NAME[/b][/size][/td]\n\
               [td][size=75][b]EMPLOYEE NUMBER[/b][/size][/td][/tr]\n\
               [tr]\n\
               [td][size=75]"+trainee+"[/size][/td]\n\
               [td][size=75]"+tBadge+"[/size][/td]\n\
               [td][size=75]"+SAC+"[/size][/td]\n\
               [td][size=75]"+sacBadge+"[/size][/td]\n\
               [/tr]\n\
               [/table][line][/line]\n\
               [table]\n\
               [tr]\n\
               [td][size=75][b][center]PART A. PROGRAM COMPLETION[/center][/b][/size][/td][/tr][/table][line][/line]\n\
               [table]\n\
               [tr]\n\
               [td][size=75][b]PHASE[/b][/size][/td]\n\
               [td][size=75][b]FIELD TRAINING OFFICERS (FTOs)[/b][/size][/td]\n\
               [td][size=75][b]EMPLOYEE NUMBER(s)[/b][/size][/td]\n\
               [td][size=75][b]DATE[/b][/size][/td]\n\
               [/tr]\n\
               [tr]\n\
               [td][size=75]1[/size][/TD]\n\
               [td][size=75]"+phase1fto+"[/size][/TD]\n\
               [td][size=75]"+phase1badge+"[/size][/TD]\n\
               [td][size=75]"+phase1from+"[/size][/TD]\n\
               [/tr]\n\
               [tr]\n\
               [td][size=75]2[/size][/TD]\n\
               [td][size=75]"+phase2fto+"[/size][/TD]\n\
               [td][size=75]"+phase2badge+"[/size][/TD]\n\
               [td][size=75]"+phase2from+"[/size][/TD]\n\
               [/tr]\n\
               [tr]\n\
               [td][size=75]3[/size][/TD]\n\
               [td][size=75]"+phase3fto+"[/size][/TD]\n\
               [td][size=75]"+phase3badge+"[/size][/TD]\n\
               [td][size=75]"+phase3from+"[/size][/TD]\n\
               [/tr]\n\
               [tr]\n\
               [td][size=75]REMEDIAL EXTENSION[/size][/TD]\n\
               [td][size=75]"+phaseEfto+"[/size][/TD]\n\
               [td][size=75]"+phaseEbadge+"[/size][/TD]\n\
               [td][size=75]"+phaseEfrom+"[/size][/TD]\n\
               [/tr][/table][line][/line]\n\
               \n\
               [table]\n\
               [tr]\n\
               [td][size=75][b][center]PART B. TRAINEE ATTESTATION[/center][/b][/size][/td][/tr][/table][line][/line]\n\
               [table]\n\
               [tr]\n\
               [td][size=75][justify]I have been instructed in each phase of the prescribed training contained in the Field Training Program Guide, and my training performance and stages of progress were documented and reviewed with me by training staff as required. [/justify][/size][/td][/tr][/TABLE][line][/line]\n\
               [table][TR][td][size=75][b]TRAINEE SIGNATURE[/b][/size][/td]\n\
               [td][size=75][b]DATE[/b][/size][/td][/tr]\n\
               [TR][td][size=75]TRAINEE NAME[/size][/td]\n\
               [td][size=75]DATE[/size][/td][/tr][/table][line][/line]\n\
               [table]\n\
               [tr]\n\
               [td][size=75][b][center]PART C. TRAINING CERTIFICATION[/center][/b][/size][/td][/tr][/table][line][/line]\n\
               [table]\n\
               [tr]\n\
               [td][size=75][justify]I certify that Deputy [u][/u] has received the instruction outlined in the Field Training Program Guide and has performed competently in all structured learning content areas. I also certify that all tests have been completed at a satisfactory level and that this trainee is now prepared to work as a solo patrol officer. [/justify][/size][/td][/tr][/table][line][/line]\n\
               [table][TR][td][size=75][b]FTP SAC SIGNATURE[/b][/size][/td]\n\
               [td][size=75][b]DATE[/b][/size][/td][/tr]\n\
               [TR][td][size=75]"+sacSig+"[/size][/td]\n\
               [td][size=75]"+currentDate+"[/size][/td][/tr][/table][line][/line]\n\
               [table]\n\
               [tr]\n\
               [td][size=75][b][center]PART D. STATION COMMAND ATTESTATION[/center][/b][/size][/td][/tr][/table][line][/line]\n\
               [table]\n\
               [tr]\n\
               [td][size=75][justify]I attest that the above named trainee has satisfactorily completed the prescribed Field Training Program and is competent to perform as a solo patrol officer.[/justify][/size][/td][/tr][/table][line][/line]\n\
               [table]\n\
               [tr][td][size=75][b]STATION CAPTAIN SIGNATURE[/b][/size][/td]\n\
               [td][size=75][b]DATE[/b][/size][/td][/tr]\n\
               [TR][td][size=75]"+stationCaptainSig+"[/size][/td]\n\
               [td][size=75]"+currentDate+"[/size][/td][/tr][/table][line][/line][/divbox]";
                     document.getElementById("finish").value = format;
                     }
            </script>
         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- Bootstrap core JavaScript-->
      <script src="../vendor/jquery/jquery.min.js"></script>
      <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="../js/sb-admin.min.js"></script>
   </body>
   <?php include '../footer.php' ?>
</html>
