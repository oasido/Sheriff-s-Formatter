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
                                <strong>Aircraft & Personnel</strong>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="personnel">
                                        <tbody>
                                            <tr>
                                                <td><span><strong>Aircraft Tail Number</strong></span></td>
                                                <td><span><strong>Co-Pilot</strong></span></td>
                                                <td><span><strong>Pilot</strong></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <center><button class="btn btn-outline-primary" onclick="addPersonnel()">Add</button></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>Incident Information</strong>
                            </div>
                            <div class="card-body">
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <label class="col-sm-4 col-form-label">Date</label>
                                  <input class="form-control col-sm-6" id="date" type="date" />
                                </div>
                              </div>
                              <br>
                                <div class="form-inline">
                                  <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Start Time</label>
                                    <input class="form-control col-sm-6" id="startTime" type="time" />
                                  </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                  <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">End Time</label>
                                    <input class="form-control col-sm-6" id="endTime" type="time" />
                                  </div>
                                </div>
                                <hr>
                                <!--HR-->
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Location</label>
                                        <input class="form-control col-sm-6" type="text" id="location" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Narrative</label>
                                        <textarea class="form-control col-sm-6" rows="5" id="narrative"></textarea>
                                    </div>
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
            <!-- aye-->

            <!-- JS Form Script-->
            <script type="text/javascript">
                // add to tables
                addPersonnel();addPersonnel();addPersonnel();

                function addPersonnel() {
                    var empTab2 = document.getElementById('personnel');

                    var rowCnt2 = empTab2.rows.length;        // GET TABLE ROW COUNT.
                    var tr2 = empTab2.insertRow(rowCnt2);      // TABLE ROW.
                    tr2 = empTab2.insertRow(rowCnt2);

                    for (var c = 0; c < 5; c++) {
                        var td2 = document.createElement('td');          // TABLE DEFINITION.
                        td2 = tr2.insertCell(c);
                        switch (c) {
                            case 0: {
                                // ADD A BUTTON.
                                var aircraftTail = document.createElement('select');
                                aircraftTail.setAttribute("class", 'form-control');

                                var none = document.createElement('option');
                                none.setAttribute("disabled", "");
                                none.setAttribute("selected", "");
                                none.setAttribute("value", "N/A");
                                none.text = ""

                                var n961sd = document.createElement('option');
                                n961sd.setAttribute("value", "N961SD");
                                n961sd.text = "N961SD - Squirrel"

                                var n962sd = document.createElement('option');
                                n962sd.setAttribute("value", "N962SD");
                                n962sd.text = "N962SD - Squirrel"

                                var n963sd = document.createElement('option');
                                n963sd.setAttribute("value", "N963SD");
                                n963sd.text = "N963SD - Squirrel"

                                var n950df = document.createElement('option');
                                n950df.setAttribute("value", "N950DF");
                                n950df.text = "N950DF - Super Puma"

                                var n952jh = document.createElement('option');
                                n952jh.setAttribute("value", "N952JH");
                                n952jh.text = "N952JH - Sea King"

                                var n172sd = document.createElement('option');
                                n172sd.setAttribute("value", "N172SD");
                                n172sd.text = "N172SD - Fixed Wing"

                                aircraftTail.add(none);
                                aircraftTail.add(n961sd);
                                aircraftTail.add(n962sd);
                                aircraftTail.add(n963sd);
                                aircraftTail.add(n950df);
                                aircraftTail.add(n952jh);
                                aircraftTail.add(n172sd);
                                td2.appendChild(aircraftTail);
                                break;
                            }

                            case 1: {
                                var personnelR = document.createElement("input");
                                personnelR.setAttribute("class", 'form-control');
                                personnelR.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
                                td2.appendChild(personnelR);
                                break;
                            }

                            case 2: {
                                var personnelR = document.createElement("input");
                                personnelR.setAttribute("class", 'form-control');
                                personnelR.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
                                td2.appendChild(personnelR);
                                break;
                            }


                            case 3: {
                                var personnelRemove = document.createElement("input");
                                personnelRemove.setAttribute('type', 'button');
                                personnelRemove.setAttribute('value', 'Remove');
                                personnelRemove.setAttribute("class", "btn btn-danger btn-sm");

                                // ADD THE BUTTON's 'onclick' EVENT.
                                personnelRemove.setAttribute('onclick', 'removeRow2(this)');
                                td2.appendChild(personnelRemove);
                                break;

                            }

                        }
                    }
                }

                // DELETE TABLE ROW.
                function removeRow2(oButton) {
                    var empTab2 = document.getElementById('personnel');
                    empTab2.deleteRow(oButton.parentNode.parentNode.rowIndex);       // BUTTON -> TD -> TR.
                }


                function process(){
                var now = document.getElementById("date");
                var theDate = moment(theDate).format('DD-MMM-YYYY').toUpperCase();
                var startTime = document.getElementById("startTime").value;
                var endTime = document.getElementById("endTime").value;
                var location = document.getElementById("location").value;


                var myTab2 = document.getElementById('personnel');
                var aircraftModel = "";
                var aircraftTail = "";
                var personnel = "";
                // var pilot = "";
                for (row = 1; row < myTab2.rows.length - 1; row++) {
                    for (c = 0; c < myTab2.rows[row].cells.length - 1; c++) {   // EACH CELL IN A ROW.
                        switch (c) {
                            case 0: {
                                var element = myTab2.rows.item(row).cells[c];
                                if (element.childNodes[0].value == "N961SD" || element.childNodes[0].value == "N962SD" || element.childNodes[0].value == "N963SD"){
                                  aircraftModel = "AS350";
                                }
                                if (element.childNodes[0].value == "N950DF"){
                                  aircraftModel = "AS332L1";
                                }
                                if (element.childNodes[0].value == "N952JH"){
                                  aircraftModel = "SH-3D";
                                }
                                if (element.childNodes[0].value == "N172SD"){
                                  aircraftModel = "C172";
                                }
                                personnel += "[tr][td][size=75]"+aircraftModel+"[/size][/td]"+"\n"+"[td][size=75]"+element.childNodes[0].value+"[/size][/td]";
                                aircraftModel = "N/A";
                                break;
                            }

                            case 1: {
                                var element = myTab2.rows.item(row).cells[c];
                                personnel += "[td][size=75]"+element.childNodes[0].value+"[/size][/td]";
                                break;
                            }

                            case 2: {
                                var element = myTab2.rows.item(row).cells[c];
                                personnel += "[td][size=75]"+element.childNodes[0].value+"[/size][/td][/tr]";
                                break;
                            }
                        }
                    }
                }


                var narrative = document.getElementById("narrative").value;
                var format = `[divbox=white]
[font=Arial][center][b][size=80]COUNTY OF LOS SANTOS SHERIFF'S DEPARTMENT
AERO BUREAU RESCUE 5 PROGRAM
[/size][/b][size=80][i]"ANY MISSION. ANYTIME. ANYWHERE."[/i][/size][/center]

[divbox=white][center][b]RESCUE 5 DEPLOYMENT LOG[/b][/center][/divbox][b][/b][/font]
[table2=Arial]
[tr]
[td][size=75][b]DATE[/b][/size][/td]
[td][size=75][b]START TIME[/b][/size][/td]
[td][size=75][b]END TIME[/b][/size][/td]
[td][size=75][b]LOCATION[/b][/size][/td]
[/tr]

[tr]
[td][size=75]`+theDate+`[/size][/td]
[td][size=75]`+startTime+`[/size][/td]
[td][size=75]`+endTime+`[/size][/td]
[td][size=75]`+location+`[/size][/td]
[/tr]
[/table2]

[table2=Arial]
[tr]
	[td][b][size=75]AIRCRAFT MODEL[/size][/b][/td]
	[td][b][size=75]AIRCRAFT TAIL NUMBER[/size][/b][/td]
	[td][b][size=75]CO PILOT[/size][/b][/td]
	[td][b][size=75]PILOT[/size][/b][/td]
[/tr]
`+personnel+`
[/table2]

[divbox=white][font=Arial][center][b]NARRATIVE[/b][/center]
[size=85]`+narrative+`[/size]
[/font][/divbox]`;

                  document.getElementById("finish").value = format;
                  }
                // this is for the add team director
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
