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
                                <strong>General Information</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Seized Property Owner</label>
                                        <input type="text" class="form-control col-sm-6" id="owner" onkeyup="this.value = this.value.toUpperCase();" placeholder="Firstname Lastname" />
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Property Seized at (location)</label>
                                        <input type="text" class="form-control col-sm-6" id="propertyLocation" placeholder="Address, Street, City" onkeyup="this.value = this.value.toUpperCase();" />
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Number of Items Seized</label>
                                        <input class="form-control col-sm-6" type="number" id="numberOfItemsSeized" disabled>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Date</label>
                                        <input type="date" class="form-control col-sm-6" id="date" />
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Time</label>
                                        <input type="time" class="form-control col-sm-6" id="time" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="card">
                            <div class="card-header">
                                <strong>Seized Property Description</strong>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="evidence">
                                        <thead>
                                            <tr>
                                                <th>Quantity</th>
                                                <th>Article</th>
                                                <th>Serial Number</th>
                                                <th>Brand</th>
                                                <th>Misc, Color, Size, Inscription, Caliber, Etc.</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                    <center><button class="btn btn-outline-primary" onclick="addEvidence()">Add</button></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>Supervisor Information, Booking Details</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Supervisor's Full Name</label>
                                        <input class="form-control col-sm-6" type="text" id="supervisorFullName" placeholder="Firstname Lastname" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Supervisor Badge</label>
                                        <input class="form-control col-sm-6" type="number" id="supervisorBadge" />
                                    </div>
                                </div>
                                <hr>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Division of Booking</label>
                                        <input class="form-control col-sm-6" type="text" id="divisionOfBooking" placeholder="CENTRAL PATROL DIVISION, etc" value="CENTRAL PATROL DIVISION" onkeyup="this.value = this.value.toUpperCase();" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="alert alert-warning" role="alert">
                            <strong>UNIQUE REGISTRATION NUMBER (URN) — </strong>Uh uh! Not so fast, your form is not ready!<br /> Make sure you edit the generated form and write down the <a href="https://i.imgur.com/4hG7Erh.png" target="_blank">last digits on your reply's address</a>.
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
                });

                let numberOfItemsSeizedCount = "0";
                function addEvidence() {
                   var empTab2 = document.getElementById('evidence');
                   var empTab2 = document.getElementById('evidence');
                   var rowCnt2 = empTab2.rows.length;
                   numberOfItemsSeizedCount++;
                   document.getElementById("numberOfItemsSeized").value = numberOfItemsSeizedCount; // GET TABLE ROW COUNT.
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
                            name.setAttribute("type", "number");
                            td2.appendChild(name);
                            break;
                         }

                         case 1: {
                            var desc = document.createElement("input");
                            desc.setAttribute("class", "form-control");
                            desc.setAttribute("onkeyup", "this.value = this.value.toUpperCase();");
                            td2.appendChild(desc);
                            break;
                         }
                         case 2: {
                            var by = document.createElement("input");
                            by.setAttribute("class", "form-control");
                            by.setAttribute("onkeyup", "this.value = this.value.toUpperCase();");
                            td2.appendChild(by);
                            break;
                         }
                         case 3: {
                            var location = document.createElement("input");
                            location.setAttribute("class", "form-control");
                            location.setAttribute("onkeyup", "this.value = this.value.toUpperCase();");
                            td2.appendChild(location);
                            break;
                         }
                         case 4: {
                            var remarks = document.createElement("textarea");
                            remarks.setAttribute("class", "form-control");
                            remarks.setAttribute("onkeyup", "this.value = this.value.toUpperCase();");
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
                   numberOfItemsSeizedCount--;
                   document.getElementById("numberOfItemsSeized").value = numberOfItemsSeizedCount;
                }

                function process() {
                    let date = document.getElementById("date").value;
                    let time = document.getElementById("time").value;
                    // let deputyFullName = document.getElementById("deputyFullName").value;
                    // let deputyRank = document.getElementById("deputyRank").value;
                    let owner = document.getElementById("owner").value;
                    let propertyLocation = document.getElementById("propertyLocation").value;
                    let numberOfItemsSeized = document.getElementById("numberOfItemsSeized").value;
                    let propertyBookedTo = "<?php echo $_SESSION['user']->station; ?>"
                    let divisionOfBooking = document.getElementById("divisionOfBooking").value;
                    // let deputyBadge = document.getElementById("deputyBadge").value;
                    let supervisorFullName = document.getElementById("supervisorFullName").value;
                    let supervisorBadge = document.getElementById("supervisorBadge").value;

                    let deputyFullName = "<?php echo $_SESSION['user']->game_name; ?>"
                    // name or signature as signature
                    var deputySig;
                    if ("<?php echo $_SESSION['user']->signature; ?>" === "") {
                      deputySig = "<?php echo $_SESSION['user']->game_name; ?>";
                    } else {
                      deputySig = "[img]"+"<?php echo $_SESSION['user']->signature; ?>"+"[/img]";
                    }


                    let deputyBadge = "<?php echo $_SESSION['user']->badge_no; ?>"
                    //rank
                    <?php
                    $qqr = "SELECT * FROM ranks WHERE id='".$_SESSION['user']->rank."'";
                    $rest=mysqli_query($conn, $qqr);
                    $rowt=mysqli_fetch_object($rest);
                    ?>
                    let deputyRank = "<?php echo $rowt->title; ?>"

                   var evidence = "";
                   var myTab2 = document.getElementById('evidence');
                   for (row = 1; row < myTab2.rows.length - 1; row++) {
                      for (c = 0; c < myTab2.rows[row].cells.length - 1; c++) {   // EACH CELL IN A ROW.
                         switch (c) {
                            case 0: {
                               // Get the evidence brief desc;
                               var element = myTab2.rows.item(row).cells[c];
                               evidence += "[tr][td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                               break;
                            }

                            case 1: {
                               var element = myTab2.rows.item(row).cells[c];
                               evidence += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                               break;
                            }

                            case 2: {
                               var element = myTab2.rows.item(row).cells[c];
                               evidence += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                               break;
                            }

                            case 3: {
                               var element = myTab2.rows.item(row).cells[c];
                               evidence += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                               break;
                            }

                            case 4: {
                               var element = myTab2.rows.item(row).cells[c];
                               evidence += "[td][size=75]" + element.childNodes[0].value + "[/size][/td][/tr]\n";
                            }
                         }
                      }
                   }

                   var format = "[divbox=white][center][b][size=80]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT[/size][/b][/center][size=80][aligntable=left,0,280,0,0,0,0][b]RECEIPT FOR SEIZED PROPERTY[/b][/aligntable][/size][size=70][aligntable=left,0,230,0,0,0,0]SH-CR-624[/aligntable][/size]\n\
[line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][b]DATE AND TIME[/b][/size][/td]\n\
[td][size=75][b]URN NUMBER[/b][/size][/td][/tr]\n\
[tr]\n\
[td][size=75]"+date+" "+time+"[/size][/td]\n\
[td][size=75]thisIsThePlaceWhereYouShouldAddTheURN[/size][/td]\n\
[/tr]\n\
[/table][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][b]NAME OF PERSON COLLECTING THE PROPERTY[/b][/size][/td]\n\
[td][size=75][b]NAME OF PERSON IN POSSESSION OF PROPERTY[/b][/size][/td][/tr]\n\
[tr]\n\
[td][size=75]"+deputyFullName+", "+deputyRank+"[/size][/TD]\n\
[td][size=75]"+owner+"[/size][/TD][/tr][/table][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][b]LOCATION PROPERTY TAKEN INTO CUSTODY[/b][/size][/td]\n\
[td][size=75][b]ITEM NUMBERS ON PROPERTY REPORT[/b][/size][/td][/tr]\n\
[tr]\n\
[td][size=75]"+propertyLocation+"[/size][/TD]\n\
[td][size=75]"+numberOfItemsSeized+"[/size][/TD][/tr][/table][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][b][center]PROPERTY TAKEN-DESCRIPTION[/center][/b][/size][/td]\n\
[/tr]\n\
[/table][line][/line]\n\
[table]\n\
[tr]\n\
[td][center][size=75][b]QUAN.[/b][/size][/center][/td]\n\
[td][center][size=75][b]ARTICLE[/b][/size][/center][/td]\n\
[td][center][size=75][b]SERIAL NO.[/b][/size][/center][/td]\n\
[td][center][size=75][b]BRAND[/b][/size][/center][/td]\n\
[td][center][size=75][b]MISC, COLOR, SIZE, INSCRIPTION,\n\
CALIBER, ETC.[/b][/size][/center][/td][/tr]\n\
"+evidence+"[/table][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][b]PROPERTY BOOKED TO[/b][/size][/td]\n\
[td][size=75][b]DIVISION OF BOOKING[/b][/size][/td][/tr]\n\
[tr]\n\
[td][size=75]"+propertyBookedTo+"[/size][/TD]\n\
[td][size=75]"+divisionOfBooking+"[/size][/TD][/tr][/table][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][b]SIGNATURE OF OFFICER ISSUING[/b][/size][/td]\n\
[td][size=75][b]EMPLOYEE NUMBER[/b][/size][/td][/tr]\n\
[tr]\n\
[td][size=75]"+deputySig+"[/size][/TD]\n\
[td][size=75]"+deputyBadge+"[/size][/TD][/tr][/table][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][b]SIGNATURE OF SUPERVISOR[/b][/size][/td]\n\
[td][size=75][b]EMPLOYEE NUMBER[/b][/size][/td][/tr]\n\
[tr]\n\
[td][size=75]"+supervisorFullName+"[/size][/TD]\n\
[td][size=75]"+supervisorBadge+"[/size][/TD][/tr][/table][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75]THIS RECEIPT DOES NOT CONSTITUTE RECOGNITION OF LEGAL TITLE TO ABOVE PROPERTY. AN EMPLOYEE SEIZING OR TAKING CUSTODY OF PROPERTY SHALL ISSUE A RECEIPT FOR SEIZED PROPERTY (DUPLICATE COPY) TO THE PERSON RELIEVED OF THE PROPERTY.[/size][/td]\n\
[/tr]\n\
[/table]\n\
[line][/line][/divbox]";

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
