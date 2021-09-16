<?php
include('../main.php');
include '../header.php';
?>


<!-- SEPERATOR -->
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Team Details</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Team Leader</label>
                                <input type="text" class="form-control col-sm-6" id="teamLeader" onkeyup="this.value = this.value.toUpperCase();">
                            </div>
                        </div>
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Personnel</label>
                                <textarea name="" id="personnel" cols="30" rows="4" class="form-control col-sm-6" placeholder="Each line is 1 team member!" onkeyup="this.value = this.value.toUpperCase();"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <div class="card">
                    <div class="card-header">
                        <strong>Operational Results</strong>&nbsp;<small class="text-faded">(Numeric input only, leave blank for 0)</small>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-7 col-form-label">Detained Suspects</label>
                                <input type="number" class="form-control col-sm-3" id="detainedSuspects">
                            </div>
                        </div>
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-7 col-form-label">Injured Through Lethal Force</label>
                                <input type="number" class="form-control col-sm-3" id="lethalInjured">
                            </div>
                        </div>
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-7 col-form-label">Injured Through Offender (Victim)</label>
                                <input type="number" class="form-control col-sm-3" id="offenderInjured">
                            </div>
                        </div>
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-7 col-form-label">Fatalities</label>
                                <input type="number" class="form-control col-sm-3" id="fatalities">
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <div class="card">
                    <div class="card-header">
                        <strong>Deployment Class</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">MPP REF.VI-0</label>
                                <select id="deploymentClass" class="form-control col-sm-6">
                                    <option>Organized</option>
                                    <option>Urgent</option>
                                    <option>Rapid</option>
                                </select>
                            </div>
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
                                <label class="col-sm-4 col-form-label">Deployment Date & Time</label>
                                <input class="form-control col-sm-6 datepicker-here" id="time" data-timepicker="true" data-language='en' />
                            </div>
                        </div>
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Deployment Reason</label>
                                <input class="form-control col-sm-6" type="text" placeholder="BARRICADED SITUATION, ETC." id="reason" onkeyup="this.value = this.value.toUpperCase();">
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Location</label>
                                <input class="form-control col-sm-6" type="text" id="location" onkeyup="this.value = this.value.toUpperCase();">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <strong>UOF Details</strong>
                    </div>
                    <div class="card-body">
                        <form action="index.html" method="post">
                            <p class="text-muted"></p>
                            <div class="input_fields_container_part">
                                <!-- container to dupe -->
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-2 col-form-label">1.</label>
                                        <input name="uofSuspect" type="text" value="SUSPECT 1; " placeholder="SUSPECT X; OPENED FIRE; HARMING OTHERS" onkeyup='this.value = this.value.toUpperCase();' class="form-control col-sm-9" />
                                    </div>
                                </div>
                                <div class="suspects"></div>
                            </div>
                            <br />
                            <center>
                                <a class="add_more_button" style="color: green;">
                                    <i class="fas fa-plus-circle" style="font-size: 25px;"></i>
                                </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="remove_field" style="font-size: 25px">
                                    <i class="fas fa-times" style="color:red;"></i>
                                </a>
                            </center>
                        </form>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <strong>Evidence Attachments</strong>
                    </div>
                    <div class="card-body">
                        <form action="index.html" method="post">
                            <div class="input_fields_container_part">
                                <!-- container to dupe -->
                                <div class="form-inline offset-3">
                                    <div class="col-md-12 input-group">
                                        <input name="evidenceAmount" type="number" class="form-control col-sm-3" placeholder="Amount">
                                        <input name="evidenceAttachments" type="text" class="form-control col-sm-6" placeholder="**Insert attachment here**" onkeyup='this.value = this.value.toUpperCase();' />
                                    </div>
                                </div>
                                <div class="evidence"></div>
                            </div>
                            <br />
                            <center>
                                <a class="add_more_evidence_button" style="color: green;">
                                    <i class="fas fa-plus-circle" style="font-size: 25px;"></i>
                                </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="remove_evidence_field" style="font-size: 25px">
                                    <i class="fas fa-times" style="color:red;"></i>
                                </a>
                            </center>
                        </form>
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
        // suspects add/remove
        let y = 1; //initialize counter for text box
        $(document).ready(function() {
            let max_fields_limit = 7; //set limit for maximum input fields

            $('.add_more_button').click(function(e) { //click event on add more fields button having class add_more_button
                e.preventDefault();
                if (y < max_fields_limit) { //check conditions
                    y++; //counter increment
                    $('.suspects').append(
                        "<div class='uofDupe'><br><div class='form-inline'><div class='col-md-12 form-group'><label class='col-sm-2 col-form-label'>" + y + ".</label><input name='uofSuspect' type='text' value='SUSPECT " + y + "; ' placeholder='SUSPECT X; OPENED FIRE; HARMING OTHERS' onkeyup='this.value = this.value.toUpperCase();' class='form-control col-sm-9' /></div></div></div>"
                    ); //add input field
                }
            });

            $('.remove_field').on('click', function(e) { //user click on remove text links
                e.preventDefault();
                $('.uofDupe:last').remove();
                y--;
                if (y < 1) {
                    y = 1
                };
            })
        });

        // evidence add/remove
        let x = 1; //initialize counter for text box
        $(document).ready(function() {
            let max_fields_limit = 7; //set limit for maximum input fields

            $('.add_more_evidence_button').click(function(e) { //click event on add more fields button having class add_more_button
                e.preventDefault();
                if (x < max_fields_limit) { //check conditions
                    x++; //counter increment
                    $('.evidence').append(
                        "<div class='evidenceDIV'><br><div class='form-inline offset-3'><div class='col-md-12 input-group'><input name='evidenceAmount' type='number' class='form-control col-sm-3' placeholder='Amount'><input name='evidenceAttachments' onkeyup='this.value = this.value.toUpperCase();' type='text' class='form-control col-sm-6' placeholder='**Insert attachment here**' /></div></div></div>"
                    ); //add input field
                }
            });

            $('.remove_evidence_field').on('click', function(e) { //user click on remove text links
                e.preventDefault();
                $('.evidenceDIV:last').remove();
                x--;
                if (x < 1) {
                    x = 1
                };
            })
        });


        function process() {

            let teamLeader = $('#teamLeader').val() || "N/A";
            let personnel = $('#personnel').val() || "N/A";
            let detainedSuspects = $('#detainedSuspects').val() || "0";
            let lethalInjured = $('#lethalInjured').val() || "0";
            let offenderInjured = $('#offenderInjured').val() || "0";
            let fatalities = $('#fatalities').val() || "0";
            let deploymentClass = $('#deploymentClass').val() || "N/A";
            let time = $('#time').val() || "N/A";
            let reason = $('#reason').val() || "N/A";
            let location = $('#location').val() || "N/A";
            let name = '<?php echo $_SESSION['user']->game_name; ?>'.toUpperCase();

            // deploymentclass
            let opt1, opt2, opt3;
            opt1 = "Organized"; opt2 = "Urgent"; opt3 = "Rapid";
            if (opt1 === deploymentClass) {
                opt1 = "X";
                opt2 = "";
                opt3 = "";
            } else if (opt2 === deploymentClass) {
                opt1 = "";
                opt2 = "X";
                opt3 = "";
            } else if (opt3 === deploymentClass) {
                opt1 = "";
                opt2 = "";
                opt3 = "X";
            }

            // Suspect stuff below
            let suspects = [];
            $("input[name='uofSuspect']").each(function() {
                suspects.push($(this).val());
            });

            let finalSuspects = "";
            suspects.forEach(element => {
                finalSuspects += "[tr][td][size=75][center]" + element + "[/center][/size][/td][/tr]";
            });

            // Evidence stuff below
            let evidenceAmount = [];
            $("input[name='evidenceAmount']").each(function() {
                evidenceAmount.push($(this).val() || `0`);
            });

            let evidence = [];
            $("input[name='evidenceAttachments']").each(function() {
                evidence.push($(this).val());
            });

            // urlRegex (for evidence)
            let urlRegex = /(http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;

            let evidenceFinal = "";
            for (let i = 0; i < evidence.length; i++) {
                if (!urlRegex .test(evidence[i])) {
                    evidenceFinal += `[tr][td][size=75]` + evidence[i] + `[/size][/td]
                    [td][size=75][center]` + evidenceAmount[i] + `[/center][/size][/td][/tr]`;
                } else {
                    
                    evidenceFinal += `[tr][td][size=75][url=` + evidence[i] + `]LINK[/url][/size][/td]
                    [td][size=75][center]` + evidenceAmount[i] + `[/center][/size][/td][/tr]`;
                }

            }

            let format = `[divbox=white]
[break][/break]
[aligntable=left,0,12,0,0,0,0][size=120][b]LOS SANTOS COUNTY SHERIFF’S DEPARTMENT[/b]
[b]SPECIAL ENFORCEMENT BUREAU[/b]
AFTER ACTION REPORT[/aligntable]
[aligntable=right,100,50,50,0,0,100][img]https://i.imgur.com/TYHeUlv.png[/img][/aligntable][/size]

[break][/break]
[table2=Arial][tr]
[td][size=75][b]START OF DEPLOYMENT[/b][/size][/td]

[tr]
[td][size=75]`+time+`[/td]
[/tr][/table2]

[table2=Arial][tr]
[td][size=75][b]TEAM LEADER[/b][/size][/td]
[/tr]
[tr]
[td][size=75]`+teamLeader+`[/td][/tr][/table2]

[table2=Arial][tr]
[td][size=75][b]PERSONNEL[/b][/size][/td]
[/tr]
[tr]
[td][size=75]`+personnel+`[/td]

[/tr][/table2]

   [table=Arial]
                            [tr]
                [td][size=75][b]DEPLOYMENT CLASS[/b][/size][/td]
                [td][center][size=75][b]ORGANIZED[/b][/size][/center][/td]
                [td][center][size=75][b]URGENT[/b][/size][/center][/td]
                [td][center][size=75][b]RAPID[/b][/size][/center][/td]
                [/tr]
                [tr]
                [td][size=75]MPP REF. VI-0[/size][/td]
                [td][center][b]`+opt1+`[/b][/center][/td]
                [td][center][b]`+opt2+`[/b][/center][/td]
                [td][center][b]`+opt3+`[/b][/center][/td]
                [/tr]

[/table]

[table=Arial]
                [tr]
                [td][center][size=75][b]AREA OF OPERATION[/b][/size][/center][/td]
                [td][center][size=75][b]DEPLOYMENT SPECIFICATION[/b][/size][/center][/td]
                [/tr]
                [tr]
                [td][center][size=75]`+location+`[/size][/center][/td]
                [td][center][size=75]`+reason+`[/size][/center][/td]
                [/tr]
[/table]

[table=Arial]
                [tr]
                [td][size=75][b]OPERATIONAL RESULTS[/b][/size][/td]
                [td][size=75][center]COUNT[/center][/size][/td]
                [/tr]
                [tr]
                [td][size=75]DETAINED SUSPECTS[/size][/td]
[td][center][size=75]`+detainedSuspects+`[/size][/center][/td]

                [/tr]
                [tr]
                [td][size=75]INJURED THROUGH LETHAL FORCE[/size][/td]
[td][center][size=75]`+lethalInjured+`[/size][/center][/td]

                [/tr]
                [tr]
                [td][size=75]INJURED THROUGH OFFENDER (VICTIM)[/size][/td]
[td][center][size=75]`+offenderInjured+`[/size][/center][/td]

                [/tr]
                [tr]
                [td][size=75]FATALITIES[/size][/td]
[td][center][size=75]`+fatalities+`[/size][/center][/td]

                [/tr]          


[/table]

[table=Arial]
[tr]
[td][size=75] [b] [center] UOF DETAILS[/b] (1 LINE PER SUSPECT) [/center][/size][/td] 
[/Tr]

` + finalSuspects + `


[/table]

[Table=Arial]
[tr][td][size=75][b]RECOVERED CONTRABAND[/b][/size][/td]
[td][size=75][center]COUNT[/center][/size][/td]
[/tr]

` + evidenceFinal + `

[/table]

[table=Arial]
[tr]
[td][size=75][center][b]FILED BY[/b][/center][/size][/td]

[/tr]
[tr]
[td][size=75][center]`+name+`[/center][/size][/td]

[/tr]
[/Table]
[break][/break]
[/divbox]`;

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