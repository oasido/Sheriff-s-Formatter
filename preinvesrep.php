<?php
include('main.php');
include 'header.php';
?>

        <!-- SEPERATOR -->
        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Incident Information</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Nature of Incident</label>
                                        <input type="text" class="form-control col-sm-6" id="form_nat" placeholder="Shooting, etc." />
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Location</label>
                                        <input type="text" class="form-control col-sm-6" id="form_location" />
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Date</label>
                                        <input class="form-control col-sm-6" type="date" id="date">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Time</label>
                                        <input class="form-control col-sm-6" type="time" id="time">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Summary</label>
                                        <textarea class="form-control col-sm-6" id="form_summary" rows="6" placeholder="Submit a detailed summary of the incident here. Include what happened and why you believe it should be reviewed by the Detective Bureau. This report should paint a compvare picture of the information you know so that the Detective Bureau can follow up on it appropriately."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="card">
                            <div class="card-header">
                                <strong>People Involved</strong>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="persons">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Age</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Involvement</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                    <center><button class="btn btn-outline-primary" onclick="addPeopleRow()">Add Person</button></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>Emergency Personnel Involved & Callsign</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Other&nbsp;<u>Deputies</u>&nbsp;Involved</label>
                                        <input class="form-control col-sm-6" type="text" id="form_otherdeputy" placeholder="Jane Doe, Sergeant. Bob Train, Sheriff.">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Other Emergency Responders</label>
                                        <input class="form-control col-sm-6" type="text" id="form_otherrespond">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Callsign (abbrevation)</label>
                                        <input class="form-control col-sm-6" type="text" id="callsign">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="card">
                            <div class="card-header">
                                <strong>Evidence</strong>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="evidence">
                                        <thead>
                                            <tr>
                                                <th>Brief Description</th>
                                                <th>Evidence</th>
                                                <th>Seized By</th>
                                                <th>Storage Location</th>
                                                <th>Other Remarks</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                    <center><button class="btn btn-outline-primary" onclick="addEvidence()">Add Evidence</button></center>
                                </div>
                            </div>
                        </div>
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
            <!--DIV OF PAGE-->
            <!-- JS Form Script-->
            <script type="text/javascript">
                // add to tables
                $(document).ready(function() {
                addEvidence();
                addPeopleRow();
                });

                function cut_and_list(the_cut) {
                   //	for phpBB listing by spaces
                   var the_list = "";
                   var splitting = the_cut.split("\n");
                   for (i = 0; i < splitting.length; i++) {
                      the_list += "[*]" + splitting[i] + "\n";
                   }
                   return the_list;
                }

                function double_cal(the_cut) {
                   // for phpBB listing by spaces & commas, twice
                   the_list = "";
                   the_cut = the_cut.split("\n");
                   for (i = 0; i < the_cut.length; i++) {
                      split_cut = the_cut[i].split(",");
                      the_list += "[*]" + split_cut[0] + "\n";
                      the_list += "\n";
                      for (k = 1; k < split_cut.length; k++) {
                         the_list += "[*]" + split_cut[k] + "\n";
                      }
                      the_list += "\n";
                   }
                   return the_list;
                }

                function addPeopleRow() {
                   var empTab = document.getElementById('persons');

                   var rowCnt = empTab.rows.length;        // GET TABLE ROW COUNT.
                   var tr = empTab.insertRow(rowCnt);      // TABLE ROW.
                   tr = empTab.insertRow(rowCnt);

                   for (var c = 0; c < 6; c++) {
                      var td = document.createElement('td');          // TABLE DEFINITION.
                      td = tr.insertCell(c);
                      switch (c) {
                         case 0: {
                            // Add the full name
                            var name = document.createElement("input");
                            name.setAttribute("class", "form-control");
                            td.appendChild(name);
                            break;
                         }

                         case 1: {
                            var number = document.createElement("input");
                            number.setAttribute("class", "form-control");
                            number.setAttribute("type", "number");

                            td.appendChild(number);
                            break;
                         }
                         case 2: {
                            var phone = document.createElement("input");
                            phone.setAttribute("class", "form-control");
                            phone.setAttribute("type", "number");

                            td.appendChild(phone);
                            break;
                         }
                         case 3: {
                            var address = document.createElement("input");
                            address.setAttribute("class", "form-control");

                            td.appendChild(address);
                            break;
                         }
                         case 4: {
                            var selector = document.createElement("select");
                            var victim = document.createElement("option");
                            victim.setAttribute("value", "Victim");
                            victim.text = "Victim";
                            var witness = document.createElement("option");
                            witness.setAttribute("value", "Witness");
                            witness.text = "Witness";
                            var suspect = document.createElement("option");
                            suspect.setAttribute("value", "Suspect");
                            suspect.text = "Suspect";

                            selector.setAttribute("class", "form-control");
                            selector.add(victim);
                            selector.add(witness);
                            selector.add(suspect);

                            td.appendChild(selector);
                            break;
                         }

                         case 5: {
                            var button = document.createElement("input");
                            button.setAttribute('type', 'button');
                            button.setAttribute('value', 'Remove');
                            button.setAttribute("class", "btn btn-danger btn-sm");

                            // ADD THE BUTTON's 'onclick' EVENT.
                            button.setAttribute('onclick', 'removePeopleRow(this)');
                            td.appendChild(button);
                            break;
                         }
                      }
                   }
                }

                function removePeopleRow(oButton) {
                   var empTab = document.getElementById('persons');
                   empTab.deleteRow(oButton.parentNode.parentNode.rowIndex);       // BUTTON -> TD -> TR.
                }

                function addEvidence() {
                   var empTab2 = document.getElementById('evidence');
                   var empTab2 = document.getElementById('evidence');
                   var rowCnt2 = empTab2.rows.length;

                         // GET TABLE ROW COUNT.
                   var tr2 = empTab2.insertRow(rowCnt2);      // TABLE ROW.
                   tr2 = empTab2.insertRow(rowCnt2);

                   for (var c = 0; c < 6; c++) {
                      var td2 = document.createElement('td');          // TABLE DEFINITION.
                      td2 = tr2.insertCell(c);
                      switch (c) {
                         case 0: {
                            // Add the full name
                            var name = document.createElement("input");
                            name.setAttribute("class", "form-control");
                            name.setAttribute("onkeyup", "this.value = this.value.toUpperCase();");
                            td2.appendChild(name);
                            break;
                         }

                         case 1: {
                            var desc = document.createElement("input");
                            desc.setAttribute("class", "form-control");
                            td2.appendChild(desc);
                            break;
                         }
                         case 2: {
                            var by = document.createElement("input");
                            by.setAttribute("class", "form-control");
                            td2.appendChild(by);
                            break;
                         }
                         case 3: {
                            var location = document.createElement("input");
                            location.setAttribute("class", "form-control");
                            td2.appendChild(location);
                            break;
                         }
                         case 4: {
                            var remarks = document.createElement("input");
                            remarks.setAttribute("class", "form-control");
                            td2.appendChild(remarks);
                            break;
                         }

                         case 5: {
                            var button = document.createElement("input");
                            button.setAttribute('type', 'button');
                            button.setAttribute('value', 'Remove');
                            button.setAttribute("class", "btn btn-danger btn-sm");

                            // ADD THE BUTTON's 'onclick' EVENT.
                            button.setAttribute('onclick', 'removeEvidence(this)');
                            td2.appendChild(button);
                            break;
                         }
                      }
                   }
                }

                function removeEvidence(oButton) {
                   var empTab2 = document.getElementById('evidence');
                   empTab2.deleteRow(oButton.parentNode.parentNode.rowIndex);       // BUTTON -> TD -> TR.
                }

                function process() {
                    <?php
                    $qqr = "SELECT * FROM ranks WHERE id='".$_SESSION['user']->rank."'";
                    $rest=mysqli_query($conn, $qqr);
                    $rowt=mysqli_fetch_object($rest);
                    ?>
                    var deputyName = "<?php echo $_SESSION['user']->game_name; ?>"

                    // name or signature as signature
                    var deputySig;
                    if ("<?php echo $_SESSION['user']->signature; ?>" === "") {
                      deputySig = "<?php echo $_SESSION['user']->game_name; ?>";
                    } else {
                      deputySig = "[img]"+"<?php echo $_SESSION['user']->signature; ?>"+"[/img]";
                    }


                    var rank = "<?php echo $rowt->title; ?>"

                   var location = document.getElementById("form_location").value;
                   var nat = document.getElementById("form_nat").value;
                   var otherdeputy = document.getElementById("form_otherdeputy").value;
                   var otherrespond = document.getElementById("form_otherrespond").value;
                   var date = document.getElementById("date").value;
                   var time = document.getElementById("time").value;
                   var summary = document.getElementById("form_summary").value;
                   var peopleInvolved = "";

                   var myTab = document.getElementById('persons');
                   for (row = 1; row < myTab.rows.length - 1; row++) {
                      for (c = 0; c < myTab.rows[row].cells.length - 1; c++) {   // EACH CELL IN A ROW.
                         switch (c) {
                            case 0: {
                               // Get the witness name;
                               var element = myTab.rows.item(row).cells[c];
                               peopleInvolved += "[size=85][b]Full name: [/b]" + element.childNodes[0].value + "\n";
                               break;
                            }

                            case 1: {
                               var element = myTab.rows.item(row).cells[c];
                               peopleInvolved += "[b]Age: [/b]" + element.childNodes[0].value + "\n";
                               break;
                            }

                            case 2: {
                               var element = myTab.rows.item(row).cells[c];
                               peopleInvolved += "[b]Phone: [/b]" + element.childNodes[0].value + "\n";
                               break;
                            }

                            case 3: {
                               var element = myTab.rows.item(row).cells[c];
                               peopleInvolved += "[b]Address: [/b]" + element.childNodes[0].value + "\n";
                               break;
                            }

                            case 4: {
                               var element = myTab.rows.item(row).cells[0];
                               peopleInvolved += "[b]Criminal Record: [/b][url=http://ls-rp.io/?page=lspd&select=records&p=" + element.childNodes[0].value.replace(" ", "_") + "]RECORD ACCESS[/URL]\n";

                               var element = myTab.rows.item(row).cells[c];
                               peopleInvolved += "[b]Involvement: [/b]" + element.childNodes[0].value + "[/size]\n\n";
                               break;
                            }
                         }
                      }
                   }


                   var evidence = "";
                   var myTab2 = document.getElementById('evidence');
                   for (row = 1; row < myTab2.rows.length - 1; row++) {
                      for (c = 0; c < myTab2.rows[row].cells.length - 1; c++) {   // EACH CELL IN A ROW.
                         switch (c) {
                            case 0: {
                               // Get the evidence brief desc;
                               var element = myTab2.rows.item(row).cells[c];
                               evidence += "[size=85][b]** " + element.childNodes[0].value + " **[/b][/size]" +"\n";
                               break;
                            }

                            case 1: {
                               var element = myTab2.rows.item(row).cells[c];
                               evidence += "[spoiler][b]Evidence: [/b]" + element.childNodes[0].value + "\n";
                               break;
                            }

                            case 2: {
                               var element = myTab2.rows.item(row).cells[c];
                               evidence += "[b]Seized By: [/b]" + element.childNodes[0].value + "\n";
                               break;
                            }

                            case 3: {
                               var element = myTab2.rows.item(row).cells[c];
                               evidence += "[b]Current Storage Location: [/b]" + element.childNodes[0].value + "\n";
                               break;
                            }

                            case 4: {
                               var element = myTab2.rows.item(row).cells[c];
                               evidence += "[b]Other Remarks: [/b]" + element.childNodes[0].value + "[/spoiler]\n\n";
                            }
                         }
                      }
                   }

                   var format = "[divbox=white][center][img]https://www.upload.ee/image/8325177/new_varterhead_1.jpg[/img]\n\
                   [b][u]DETECTIVE DIVISION[/u]\n\
                   PRELIMINARY INVESTIGATION REPORT[/b][/center]\n\
                   \n\
                   \n\
                   [b]INCIDENT INFORMATION[/b]:\n\
                   \n\
                   [size=85][b]Date & Time of Incident:[/b] "+ date + " - "+ time + "\n\
                   [b]Location of Incident:[/b] "+ location + "\n\
                   [b]Nature of Incident:[/b] "+ nat + "\n\
                   [b]Name & Rank of Deputy Submitting Report:[/b] "+deputyName+", "+rank+"\n\
                   [b]Names & Ranks of Other Deputies Involved:[/b] "+ otherdeputy + "\n\
                   [b]Other Law Enforcement Personnel or Emergency Responders Involved:[/b] "+ otherrespond + "[/size]\n\
                   \n\
                   \n\
                   [b]PERSONS INVOLVED:[/b]\n\
                   "+ peopleInvolved + "\n\
                   [b]SUMMARY:[/b]\n\
                   \n\
                   [size=85]"+ summary + "[/size]\n\
                   \n\
                   \n\
                   [b]EVIDENCE LOG:[/b]\n\
                   [color=#FFFFFF]thisisaspacer[/color]\n\
                   "+evidence+"\n\
                   [color=#FFFFFF]thisisaspacer[/color]\n\
                   \n\
                   "+deputySig+"\n\
                   "+rank+"\n\
                   [/divbox]";

                   document.getElementById("finish").value = format;
                }
            </script>
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
<?php include 'footer.php' ?>
</html>
