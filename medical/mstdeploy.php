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
                        <strong>General Information</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">SEB Team Leader</label>
                                <input class="form-control col-sm-6" type="text" id="SpecialEnforcementTeamLeader" placeholder="Firstname Lastname">
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Lead Medic</label>
                                <input class="form-control col-sm-6" type="text" id="LeadMedicGuy" placeholder="Firstname Lastname">
                            </div>
                        </div>
                        <hr>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Date</label>
                                <input class="form-control col-sm-6" type="date" id="date">
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Start Time</label>
                                <input class="form-control col-sm-6" type="time" id="sTime">
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">End Time</label>
                                <input class="form-control col-sm-6" type="time" id="eTime">
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <div class="card">
                    <div class="card-header">
                        <strong>Tactical Medics Attending</strong>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="personnel">
                                <tbody>
                                    <tr>
                                        <td style="width:90%;"><span><strong>Full Name</strong></span></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <center>
                                <button class="btn btn-outline-primary" onclick="addPersonnel()">Add</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <strong>Deployment Information</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Deployment Reason</label>
                                <input class="form-control col-sm-6" type="text" id="DeploymentReason" placeholder="'VEHICLE ACCIDENT', etc." onkeyup="this.value = this.value.toUpperCase();">
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Narrative</label>
                                <textarea class="form-control col-sm-6" rows="4" id="narrative" placeholder="Write down the deployment narrative here."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <div class="card">
                    <div class="card-header">
                        <strong>Patient Information</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Patients Treated</label>
                                <input class="form-control col-sm-6" type="text" id="PatientsTreated" placeholder="Separate each patient with a comma.">
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Procedures Performed</label>
                                <textarea class="form-control col-sm-6" rows="4" id="ProceduresPerformed" placeholder="Detail all techniques, procedures and equipment utilized for each patient separately, type 'N/A' if not applicable."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <div class="alert alert-warning" role="alert">
                    <strong>DEPLOYMENT NUMBER — </strong>Uh uh! Not so fast, your form is not ready!
                    <br /> Make sure you edit the generated form and write down the deployment number, <a href="https://sd.lsgov.io/forum/viewforum.php?f=1963">check the latest one here</a>.
                </div>
            </div>
        </div>
        <br />
        <div class="highlight-clean">
            <div class="container">
                <center>
                    <button class="btn btn-success btn-lg" onClick="process()"><i class="fas fa-cog"></i> Generate Form</button>
                    <br />
                    <br />
                    <h5 class="font-weight-bold">Generated text:</h5>
                    <textarea rows="5" class="form-control col-sm-6" id="finish"></textarea>
                </center>
            </div>
        </div>
    </div>
    <!-- aye-->

    <!-- JS Form Script-->
    <script type="text/javascript">
    // add to tables & add the name of the medic in the first row
        $(document).ready(function() {
        addPersonnel();
        $('#addNameHereAuto').val('<?php echo $_SESSION['user']->game_name; ?>');
        $('#addNameHereAuto').prop('disabled', true);
        });

        function addPersonnel() {
            var empTab2 = document.getElementById('personnel');
            var rowCnt2 = empTab2.rows.length; // GET TABLE ROW COUNT.
            var tr2 = empTab2.insertRow(rowCnt2); // TABLE ROW.
            tr2 = empTab2.insertRow(rowCnt2);
            for (var c = 0; c < 2; c++) {
                var td2 = document.createElement('td'); // TABLE DEFINITION.
                td2 = tr2.insertCell(c);
                switch (c) {
                    case 0:
                        {
                            // ADD A BUTTON.
                            var personnelN = document.createElement('input');
                            // SET INPUT ATTRIBUTE.
                            personnelN.setAttribute("class", 'form-control');
                            personnelN.setAttribute("id", 'addNameHereAuto');
                            td2.appendChild(personnelN);
                            break;
                        }
                    case 1:
                        {
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
            empTab2.deleteRow(oButton.parentNode.parentNode.rowIndex); // BUTTON -> TD -> TR.
        }

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

        function process() {
            let SpecialEnforcementTeamLeader = document.getElementById("SpecialEnforcementTeamLeader").value;
            let LeadMedicGuy = document.getElementById("LeadMedicGuy").value;
            let date = document.getElementById("date").value;
            let sTime = document.getElementById("sTime").value;
            let eTime = document.getElementById("eTime").value;
            let DeploymentReason = document.getElementById("DeploymentReason").value;
            let narrative = document.getElementById("narrative").value;
            let PatientsTreated = document.getElementById("PatientsTreated").value;
            let ProceduresPerformed = document.getElementById("ProceduresPerformed").value;
            let myTab2 = document.getElementById('personnel');
            let personnelName = "";
            for (row = 1; row < myTab2.rows.length - 1; row++) {
                for (c = 0; c < myTab2.rows[row].cells.length - 1; c++) { // EACH CELL IN A ROW.
                    switch (c) {
                        case 0:
                            {
                                var element = myTab2.rows.item(row).cells[c];
                                personnelName += "[*]" + element.childNodes[0].value + "\n";
                                break;
                            }
                    }
                }
            }
            var format = "[divbox=white][center][img]https://cdn.discordapp.com/attachments/480490625687617546/504038662774718465/ESD_Logo_NEW_2222.png[/img]\n\
[b][size=150]SPECIAL ENFORCEMENT BUREAU[/size][/b]\n\
[b][size=150]Medical Support Team[/size][/b]\n\
[i][size=120]''BRINGING GOOD MEDICINE TO BAD PLACES''[/size][/i][/center]\n\
[line][/line]\n\
[center][size=105][b]MEDICAL SUPPORT TEAM — DEPLOYMENT #000[/b][/size][/center]\n\
[line][/line]\n\
[b]SEB Team Leader:[/b] " + SpecialEnforcementTeamLeader + "\n\
[b]Lead Medic:[/b] " + LeadMedicGuy + "\n\
[b]Tactical Medics Attending:[/b] [list]\n\
" + personnelName + "[/list]\n\
\n\
[b]Date:[/b] " + date + "\n\
[b]Time:[/b] " + sTime + " - " + eTime + "\n\
\n\
[b]Deployment Reason:[/b] " + DeploymentReason + "\n\
[b]Deployment Narrative:[/b] " + narrative + "\n\
[line][/line]\n\
[b]Patients treated:[/b] " + PatientsTreated + "\n\
[b]Procedures performed:[/b] " + ProceduresPerformed + "\n\
[/divbox]";

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
