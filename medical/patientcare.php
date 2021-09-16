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
                                        <label class="col-sm-4 col-form-label">Location</label>
                                        <input class="form-control col-sm-6" type="text" id="Location" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="form-inline">
                                        <div class="col-md-12 form-group">
                                            <label class="col-sm-4 col-form-label">Start Date</label>
                                            <input class="form-control col-sm-6" type="date" id="StartDate">
                                        </div>
                                    </div>
                                    <br />
                                    <div class="form-inline">
                                        <div class="col-md-12 form-group">
                                            <label class="col-sm-4 col-form-label">Start Time</label>
                                            <input class="form-control col-sm-6" type="time" id="StartTime">
                                        </div>
                                    </div>
                                    <br />
                                    <div class="form-inline">
                                        <div class="col-md-12 form-group">
                                            <label class="col-sm-4 col-form-label">End Date</label>
                                            <input class="form-control col-sm-6" type="date" id="EndDate">
                                        </div>
                                    </div>
                                    <br />
                                    <div class="form-inline">
                                        <div class="col-md-12 form-group">
                                            <label class="col-sm-4 col-form-label">End Time</label>
                                            <input class="form-control col-sm-6" type="time" id="EndTime">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-inline">
                                        <div class="col-md-12 form-group">
                                            <label class="col-sm-4 col-form-label">Supervisor Name</label>
                                            <input class="form-control col-sm-6" type="text" id="SupervisorName" onkeyup="this.value = this.value.toUpperCase();">
                                        </div>
                                    </div>
                                    <br />
                                    <div class="form-inline">
                                        <div class="col-md-12 form-group">
                                            <label class="col-sm-4 col-form-label">Supervisor Rank</label>
                                            <select class="form-control col-sm-6" id="SupervisorRank">
                                                <option value="SENIOR TACTICAL MEDIC">Senior Tactical Medic</option>
                                                <option value="LEAD MEDIC">Lead Medic</option>
                                                <option value="CHIEF MEDIC">Chief Medic</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="card">
                            <div class="card-header">
                                <strong>Equipment Used & Allergies</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Equipment Used</label>
                                        <select class="form-control col-sm-6 selectpicker" data-live-search="true" multiple="multiple" name="EquipmentUsed" id="EquipmentUsed">
                                            <option id="a1">Nitrile Gloves</option>
                                            <option id="a2">C-Collar</option>
                                            <option id="a3">Combat Gauze</option>
                                            <option id="a4">QuickClot</option>
                                            <option id="a5">Ace Bandage</option>
                                            <option id="a6">Tourniquet</option>
                                            <option id="a7">ECG</option>
                                            <option id="a8">AED</option>
                                            <option id="a9">Splints</option>
                                            <option id="a10">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div id="ifOther">
                                    <!--style="display: none;"-->
                                    <div class="form-inline">
                                        <div class="col-md-12 form-group">
                                            <label class="col-sm-4 col-form-label">Other Equipment</label>
                                            <input class="form-control col-sm-6" type="text" id="OtherEquipInput" value="N/A" placeholder="If applicable." onkeyup="this.value = this.value.toUpperCase();">
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Medication Allergies</label>
                                        <select class="form-control col-sm-6 selectpicker" data-live-search="true" multiple="multiple" name="Allergies" id="EquipmentUsed">
                                            <option id="b1">Not Determined</option>
                                            <option id="b2">None</option>
                                            <option id="b3">ASA (Aspirin)</option>
                                            <option id="b4">Sulpha</option>
                                            <option id="b5">Penicillin</option>
                                            <option id="b6">Codeine</option>
                                            <option id="b7">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Other Allergies</label>
                                        <input class="form-control col-sm-6" type="text" id="OtherAllergyInput" value="N/A" placeholder="If applicable." onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Administered Medication</label>
                                        <input class="form-control col-sm-6" type="text" id="AdministredMedication" value="N/A" placeholder="If applicable." onkeyup="this.value = this.value.toUpperCase();">
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
                                                <td><span><strong>Full Name</strong></span></td>
                                                <td><span><strong>Bureau Rank</strong></span></td>
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
                                <strong>Patient Information & Narrative</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Patient Name</label>
                                        <input class="form-control col-sm-6" type="text" id="PatientName" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Gender</label>
                                        <select class="form-control col-sm-6" id="Gender">
                                            <option value="MALE">Male</option>
                                            <option value="FEMALE">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Race</label>
                                        <select class="form-control col-sm-6" id="Race">
                                            <option value="CAUCASIAN">Caucasian</option>
                                            <option value="AFRICAN AMERICAN">African American</option>
                                            <option value="HISPANIC">Hispanic</option>
                                            <option value="ASIAN">Asian</option>
                                            <option value="AMERICAN INDIAN">American Indian</option>
                                            <option value="ALASKA NATIVE">Alaska Native</option>
                                            <option value="PACIFIC ISLANDER">Pacific Islander</option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Injury Class</label>
                                        <select class="form-control col-sm-6" id="InjuryClass">
                                            <option value="NON LIFE THREATENING">Non Life Threatening</option>
                                            <option value="LIFE THREATENING">Life Threatening</option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Type of Injury</label>
                                        <input type="text" class="form-control col-sm-6" id="TypeOfInjury" placeholder="Injury & location of injury (head, etc)." onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Patient Awareness</label>
                                        <select class="form-control col-sm-6" id="PatientAwareness">
                                            <option value="ALERT">Alert</option>
                                            <option value="VERBAL STIMULI">Verbal Stimuli</option>
                                            <option value="PAIN STIMULI">Pain Stimuli</option>
                                            <option value="UNRESPONSIVE">Unresponsive</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Narrative</label>
                                        <textarea class="form-control col-sm-6" id="Narrative" rows="3" placeholder="Please state arrival date, medical staff on scene, items used, and where the patient was admitted to." onkeyup="this.value = this.value.toUpperCase();"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="card">
                            <div class="card-header">
                                <strong>Patient Stats</strong>
                            </div>
                            <div class="card-body">
                                <center>Upon Arrival</center>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Time of Vitals Taken</label>
                                        <input class="form-control col-sm-6" type="time" id="ArrivalTimeOfVitals">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Breaths Per Minute</label>
                                        <input class="form-control col-sm-6" type="number" id="ArrivalBPM" placeholder="12-20 BPM is normal.">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Pulse Rate</label>
                                        <input class="form-control col-sm-6" type="number" id="ArrivalPulseRate" placeholder="60-100 is normal.">
                                    </div>
                                </div>
                                <hr>
                                <center>Prior to Transport</center>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Time of Vitals Taken</label>
                                        <input class="form-control col-sm-6" type="time" id="TransportTimeOfVitals">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Breaths Per Minute</label>
                                        <input class="form-control col-sm-6" type="number" id="TransportBPM" placeholder="12-20 BPM is normal.">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Pulse Rate</label>
                                        <input class="form-control col-sm-6" type="number" id="TransportPulseRate" placeholder="60-100 is normal.">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="card">
                            <div class="card-header">
                                <strong>Patient Transfer (if applicable)</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Rank & Name</label>
                                        <input class="form-control col-sm-6" type="text" id="TransferNameAndRank" placeholder="Rank, Firstname Lastname" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Transferred To</label>
                                        <select onchange="hospitalCheck(this);" class="form-control col-sm-6" id="TransferTo">
                                            <option value="SACF">San Andreas Correctional Facility</option>
                                            <option value="HOSPITAL">Hospital</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="ifSACF" style="display:none;">
                                    <br />
                                    <div class="form-inline">
                                        <div class="col-md-12 form-group">
                                            <label class="col-sm-4 col-form-label">Hospital</label>
                                            <select class="form-control col-sm-6" id="TransferToHospital">
                                                <option value="N/A" disabled selected></option>
                                                <option value="ALL SAINTS GENERAL HOSPITAL">All Saints General Hospital</option>
                                                <option value="COUNTY GENERAL HOSPITAL">County General Hospital</option>
                                                <option value="FORT CARSON MEDICAL CENTER">Fort Carson Medical Center</option>
                                                <option value="CRIPPLIN MEMORIAL (MONTGOMERY)">Cripplin Memorial (Montgomery)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
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
                    for (var c = 0; c < 3; c++) {
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
                                    personnelN.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
                                    td2.appendChild(personnelN);
                                    break;
                                }
                            case 1:
                                {
                                    var personnelR = document.createElement("select");
                                    personnelR.setAttribute("class", 'form-control');
                                    // option 1
                                    let TacticalMedicP = document.createElement("option");
                                    TacticalMedicP.text = "Tactical Medic (P)";
                                    TacticalMedicP.setAttribute("value", "TACTICAL MEDIC (P)");
                                    personnelR.add(TacticalMedicP);
                                    // option 2 (selected)
                                    let TacticalMedic = document.createElement("option");
                                    TacticalMedic.setAttribute("selected", "");
                                    TacticalMedic.setAttribute("value", "TACTICAL MEDIC");
                                    TacticalMedic.text = "Tactical Medic";
                                    personnelR.add(TacticalMedic);
                                    // option 3
                                    let SeniorTacticalMedic = document.createElement("option");
                                    SeniorTacticalMedic.setAttribute("value", "SENIOR TACTICAL MEDIC");
                                    SeniorTacticalMedic.text = "Senior Tactical Medic";
                                    personnelR.add(SeniorTacticalMedic);
                                    // option 4
                                    let LeadMedic = document.createElement("option");
                                    LeadMedic.setAttribute("value", "LEAD MEDIC");
                                    LeadMedic.text = "Lead Medic";
                                    personnelR.add(LeadMedic);
                                    // option 4
                                    let ChiefMedic = document.createElement("option");
                                    ChiefMedic.setAttribute("value", "CHIEF MEDIC");
                                    ChiefMedic.text = "Chief Medic";
                                    personnelR.add(ChiefMedic);

                                    td2.appendChild(personnelR);
                                    break;
                                }
                            case 2:
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

                // If Other selected in multiple select in EquipmentUsed
                function otherCheck(that) {
                    if (that.value == "other") {
                        document.getElementById("ifOther").style.display = "block";
                    } else {
                        document.getElementById("ifOther").style.display = "none";
                    }
                }

                // If Hospital selected in multiple select in TransferTo
                function hospitalCheck(that) {
                    if (that.value == "HOSPITAL") {
                        document.getElementById("ifSACF").style.display = "block";
                    } else {
                        document.getElementById("ifSACF").style.display = "none";
                    }
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
                    let Location = document.getElementById("Location").value;
                    let StartDate = document.getElementById("StartDate").value;
                    let StartTime = document.getElementById("StartTime").value;
                    let EndDate = document.getElementById("EndDate").value;
                    let EndTime = document.getElementById("EndTime").value;
                    let YourName = '<?php echo $_SESSION['user']->game_name; ?>'
                    let SupervisorName = document.getElementById("SupervisorName").value;
                    let SupervisorRank = document.getElementById("SupervisorRank").value;
                    let PatientName = document.getElementById("PatientName").value;
                    let Gender = document.getElementById("Gender").value;
                    let Race = document.getElementById("Race").value;
                    let InjuryClass = document.getElementById("InjuryClass").value;
                    let TypeOfInjury = document.getElementById("TypeOfInjury").value;
                    let PatientAwareness = document.getElementById("PatientAwareness").value;
                    let Narrative = document.getElementById("Narrative").value;
                    let OtherEquipInput = document.getElementById("OtherEquipInput").value;
                    let OtherAllergyInput = document.getElementById("OtherAllergyInput").value;
                    let AdministredMedication = document.getElementById("AdministredMedication").value;
                    let ArrivalTimeOfVitals = document.getElementById("ArrivalTimeOfVitals").value;
                    let ArrivalBPM = document.getElementById("ArrivalBPM").value;
                    let ArrivalPulseRate = document.getElementById("ArrivalPulseRate").value;
                    let TransportTimeOfVitals = document.getElementById("TransportTimeOfVitals").value;
                    let TransportBPM = document.getElementById("TransportBPM").value;
                    let TransportPulseRate = document.getElementById("TransportPulseRate").value;
                    let TransferNameAndRank = document.getElementById("TransferNameAndRank").value;
                    let TransferTo = document.getElementById("TransferTo").value;
                    let TransferToHospital = document.getElementById("TransferToHospital").value;

                    if (document.getElementById("a1").selected == true) {
                        a1 = "X";
                    } else {
                        a1 = "";
                    }

                    if (document.getElementById("a2").selected == true) {
                        a2 = "X";
                    } else {
                        a2 = "";
                    }

                    if (document.getElementById("a3").selected == true) {
                        a3 = "X";
                    } else {
                        a3 = "";
                    }

                    if (document.getElementById("a4").selected == true) {
                        a4 = "X";
                    } else {
                        a4 = "";
                    }

                    if (document.getElementById("a5").selected == true) {
                        a5 = "X";
                    } else {
                        a5 = "";
                    }

                    if (document.getElementById("a6").selected == true) {
                        a6 = "X";
                    } else {
                        a6 = "";
                    }

                    if (document.getElementById("a7").selected == true) {
                        a7 = "X";
                    } else {
                        a7 = "";
                    }

                    if (document.getElementById("a8").selected == true) {
                        a8 = "X";
                    } else {
                        a8 = "";
                    }

                    if (document.getElementById("a9").selected == true) {
                        a9 = "X";
                    } else {
                        a9 = "";
                    }

                    if (document.getElementById("a10").selected == true) {
                        a10 = "X";
                    } else {
                        a10 = "";
                    }

                    // seperator

                    if (document.getElementById("b1").selected == true) {
                        b1 = "X";
                    } else {
                        b1 = "";
                    }

                    if (document.getElementById("b2").selected == true) {
                        b2 = "X";
                    } else {
                        b2 = "";
                    }

                    if (document.getElementById("b3").selected == true) {
                        b3 = "X";
                    } else {
                        b3 = "";
                    }

                    if (document.getElementById("b4").selected == true) {
                        b4 = "X";
                    } else {
                        b4 = "";
                    }

                    if (document.getElementById("b5").selected == true) {
                        b5 = "X";
                    } else {
                        b5 = "";
                    }

                    if (document.getElementById("b6").selected == true) {
                        b6 = "X";
                    } else {
                        b6 = "";
                    }

                    if (document.getElementById("b7").selected == true) {
                        b7 = "X";
                    } else {
                        b7 = "";
                    }

                    let myTab2 = document.getElementById('personnel');
                    let personnelName = "";
                    let personnelRank = "";
                    for (row = 1; row < myTab2.rows.length - 1; row++) {
                        for (c = 0; c < myTab2.rows[row].cells.length - 1; c++) { // EACH CELL IN A ROW.
                            switch (c) {
                                case 0:
                                    {
                                        var element = myTab2.rows.item(row).cells[c];
                                        personnelName += element.childNodes[0].value + "\n";
                                        break;
                                    }
                                case 1:
                                    {
                                        var element = myTab2.rows.item(row).cells[c];
                                        personnelRank += element.childNodes[0].value + "\n";
                                        break;
                                    }
                            }
                        }
                    }
                    var format = "[divbox=white][center][size=60][b][color=#FF0000]CONFIDENTIAL INFORMATION DO NOT RELEASE - CONFIDENTIAL INFORMATION DO NOT RELEASE [/color][/b][/size][/center][right][b][size=75]Form 240R-H1TM5F2[/size][/b][/right]\n\
[center][img]https://cdn.discordapp.com/attachments/480490625687617546/504038662774718465/ESD_Logo_NEW_2222.png[/img][/center]\n\
[font=Arial][center][b][size=80]COUNTY OF LOS SANTOS SHERIFF'S DEPARTMENT\n\
SPECIAL ENFORCEMENT BUREAU\n\
EMERGENCY SERVICES DETAIL - MEDICAL SUPPORT TEAM[/size][/b][/center][break][/break][aligntable=left,0,12,0,0,0,0][size=87][i]''BRINGING GOOD MEDICINE TO BAD PLACES''[/i][/aligntable][aligntable=left,0,75,0,0,0,0]PATIENT CARE REPORT[/aligntable][aligntable=left,0,100,0,0,0,0][b]DATE:[/b] " + EndDate + "[/aligntable][/size][/font]\n\
\n\
[table2=Arial][tr]\n\
[td][size=75][b]START DATE AND TIME OF ARRIVAL[/b][/size][/td]\n\
[td][size=75][b]END DATE AND TIME OF MEDICAL CARE[/b][/size][/td]\n\
[td][size=75][b]LOCATION OF SITUATION[/b][/size][/td][/tr]\n\
[tr]\n\
[td][size=75]" + StartDate + " — " + StartTime + "[/td]\n\
[td][size=75]" + EndDate + " — " + EndTime + "[/td]\n\
[td][size=75]" + Location + "[/size][/td][/tr][/table2]\n\
\n\
\n\
[table2=Arial][tr]\n\
[td][size=75][b]PERSONNEL[/b][/size][/td]\n\
[td][size=75][b]RANK IN EMERGENCY SERVICES DETAIL[/b][/size][/td][/tr]\n\
[tr]\n\
[td][size=75] " + personnelName + "[/td]\n\
[td][size=75]" + personnelRank + "[/size][/td][/tr][/table2]\n\
\n\
[table2=Arial][tr]\n\
[td][size=75][b]PATIENT NAME[/b][/size][/td]\n\
[td][size=75][b]GENDER[/b][/size][/td]\n\
[td][size=75][b]RACE[/b][/size][/td]\n\
[td][size=75][b]INJURY CLASSIFICATION[/b][/size][/td]\n\
[td][size=75][b]TYPE OF INJURY / LOCATION[/b][/size][/td]\n\
[td][size=75][b] PATIENT AWARENESS[/b][/size][/td][/tr]\n\
[tr]\n\
[td][size=75]" + PatientName + "[/size][/td]\n\
[td][size=75]" + Gender + "[/size][/td]\n\
[td][size=75]" + Race + " [/size][/td]\n\
[td][size=75]" + InjuryClass + "[/size][/td]\n\
[td][size=75]" + TypeOfInjury + "[/size][/td]\n\
[td][size=75]" + PatientAwareness + "[/size][/td][/tr][/table2]\n\
\n\
[i]UPON ARRIVAL[/i]\n\
[table2=Arial][tr]\n\
[td][size=75][b]TIME OF VITALS TAKEN[/b][/size][/td]\n\
[td][size=75][b]BREATHS PER MINUTE (12-20 BPM IS NORMAL)[/b][/size][/td]\n\
[td][size=75][b]PULSE RATE (60-100 IS NORMAL)[/b][/size][/td][/tr]\n\
[tr]\n\
[td][size=75]" + ArrivalTimeOfVitals + "[/size][/td]\n\
[td][size=75]" + ArrivalBPM + " BPM[/td]\n\
[td][size=75]" + ArrivalPulseRate + "[/size][/td][/tr][/table2]\n\
\n\
[i]PRIOR TO TRANSPORT[/i]\n\
[table2=Arial][tr]\n\
[td][size=75][b]TIME OF VITALS TAKEN[/b][/size][/td]\n\
[td][size=75][b]BREATHS PER MINUTE (12-20 BPM IS NORMAL)[/b][/size][/td]\n\
[td][size=75][b]PULSE RATE (60-100 IS NORMAL)[/b][/size][/td][/tr]\n\
[tr]\n\
[td][size=75]" + TransportTimeOfVitals + "[/size][/td]\n\
[td][size=75]" + TransportBPM + " BPM[/td]\n\
[td][size=75]" + TransportPulseRate + " [/size][/td][/tr][/table2]\n\
\n\
[table2=Arial][tr]\n\
[td][size=75][b]EQUIPMENT USED[/b][/size][/td]\n\
[tr][/tr]\n\
[tr]\n\
[td][size=75][ " + a1 + " ] Nitrile Gloves\n\
[ " + a2 + " ] C-Collar\n\
[ " + a3 + " ] Combat Gauze\n\
[ " + a4 + " ] QuickClot\n\
[ " + a5 + " ] Ace Bandage\n\
[ " + a6 + " ] Tourniquet\n\
[ " + a7 + " ] ECG\n\
[ " + a8 + " ] AED\n\
[ " + a9 + " ] Splints\n\
[ " + a10 + " ] Other\n\
OTHER: " + OtherEquipInput + "[/size][/td]\n\
[/tr][/table2]\n\
\n\
[table2=Arial][tr]\n\
[td][size=75][b]MEDICATION ADMINISTERED (IF APPLICABLE)[/b][/size][/td]\n\
[td][size=75][b]MEDICATION ALLERGIES (IF APPLICABLE)[/b][/size][/td]\n\
[tr][/tr]\n\
[tr]\n\
[td][size=75]" + AdministredMedication + "\n\
[/size][/td]\n\
[td][size=75][ " + b1 + " ] Not Determined\n\
[ " + b2 + " ] None\n\
[ " + b3 + " ] ASA (Aspirin)\n\
[ " + b4 + " ] Sulpha \n\
[ " + b5 + " ] Penicillin \n\
[ " + b6 + " ] Codeine \n\
[ " + b7 + " ] Other: " + OtherAllergyInput + "\n\
[/size][/td]\n\
[/tr][/table2]\n\
\n\
[i]PATIENT TRANSFER[/i]\n\
[table2=Arial][tr]\n\
[td][size=75][b]NAME & RANK (IF TRANSFERED)[/b][/size][/td]\n\
[td][size=75][b]TRANSFERED TO[/b][/size][/td]\n\
[td][size=75][b]HOSPITAL ADMITTED TO (IF APPLICABLE)[/b][/size][/td][/tr]\n\
[tr]\n\
[td][size=75]" + TransferNameAndRank + "[/size]\n\
[td][size=75]" + TransferTo + "[/td][/size]\n\
[td][size=75]" + TransferToHospital + "[/size][/td][/tr][/table2]\n\
\n\
[divbox=white][center][size=75][b]PATIENT CARE REPORT NARRATIVE[/b]\n\
[/size][/center]\n\
[size=75]" + Narrative + "[/size][/divbox]\n\
\n\
[divbox=white][center][size=75][b]SIGNATURE[/b][/size][/center]\n\
[size=75]I [i]" + YourName + "[/i]  CONFIRM THAT THE INFORMATION GIVEN IN THIS FORM IS 100 PERCENT TRUE AND ACCURATE, TO THE BEST OF MY KNOWLEDGE AT THE TIME OF WRITING AND UNDERSTAND IF THIS IS NOT ACCURATE IT MAY RESULT IN A SUSPENSION OR REMOVAL FROM THE MEDICAL SUPPORT TEAM.\n\
[b]DATE AND TIME:[/b] " + EndDate + " — " + EndTime + "\n\
[font=Mistral][size=200]" + YourName + "[/size][/font][/size][/divbox]\n\
[divbox=white][center][size=75][b]SUPERVISOR SIGN-OFF[/b][/size][/center]\n\
[size=75][b]NAME AND RANK:[/b] " + SupervisorRank + " " + SupervisorName + "\n\
[font=Mistral][size=200]" + SupervisorName + "[/size][/font][/size][/divbox]\n\
[break][/break][size=75][justify]THE CONTENT OF THIS DOCUMENT IS STRICTLY CONFIDENTIAL AND INTENDED FOR ISOLATED USE WITHIN THE SPECIAL ENFORCEMENT BUREAU. IT IS STRICTLY FORBIDDEN TO SHARE INFORMATION TO ANY THIRD PARTY WITHOUT CONSENT FROM DEPARTMENT EXECUTIVE STAFF OR BUREAU COMMAND.[/justify][/size]\n\
[right][b][size=75]Form 240R-H1TM5F2[/size][/b][/right]\n\
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
    <!-- <script src="../vendor/bootstrap/js/bootstrap.min.js"></script> -->
    <!-- <script src="../vendor/bootstrap/js/bootstrap.js"></script> -->
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <script src="../js/bootstrap-select.js"></script>

</body>
<?php include '../footer.php' ?>
</html>
