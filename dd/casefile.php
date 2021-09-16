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
                        <strong>Case Information</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Organization Name</label>
                                <input type="text" class="form-control col-sm-6" id="orgName" placeholder="Name" />
                            </div>
                        </div>
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Unit Handling</label>
                                <select class="form-control col-sm-6" id="unitHanding">
                                    <option value="" disabled selected>Please select...</option>
                                    <option value="HOMICIDE">Homicide</option>
                                    <option value="METRO">Metro</option>
                                    <option value="TRAP">TRAP</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Case Supervisor</label>
                                <input type="text" class="form-control col-sm-6" id="supervisor" placeholder="Full Name, Badge" />
                            </div>
                        </div>
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Case Detective(s)</label>
                                <textarea class="form-control col-sm-6" rows="3" id="detectives" placeholder="Press ENTER for new line"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <strong>Case Overview</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Area(s) of Operation</label>
                                <textarea class="form-control col-sm-6" rows="2" id="areas" placeholder="Write down the group's activity areas"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Group Type</label>
                                <select name="" id="group" class="form-control col-sm-6">
                                    <option value="" disabled selected>Please select...</option>
                                    <option value="MOB">MOB</option>
                                    <option value="MC">MC</option>
                                    <option value="VEHICLE THEFT RING">Vehicle Theft Ring</option>
                                    <option value="GANG">Gang</option>
                                    <option value="OTHER CRIMINAL GROUP">Other Criminal Group</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Weapons Found?</label>
                                <select class="form-control col-sm-6" type="text" id="weapons">
                                    <option disabled selected value="N">Please select...</option>
                                    <option value="N">No</option>
                                    <option value="Y">Yes</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Narcotics Found?</label>
                                <select class="form-control col-sm-6" type="text" id="narcos">
                                    <option disabled selected value="N">Please select...</option>
                                    <option value="N">No</option>
                                    <option value="Y">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Case Documentation</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Narrative</label>
                                <textarea class="form-control col-sm-6" rows="6" id="narrative" placeholder="Ensure you cover the group's basic information, when they were established as a group and why you believe a further investigation into this group is required."></textarea>
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Additional</label>
                                <textarea class="form-control col-sm-6" rows="4" id="additional" placeholder="Any additional information can be posted here, supporting documentation to Investigative Reports can be linked here, related to the group."></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <strong>Evidence Attachments</strong>
                    </div>
                    <div class="card-body">
                        <form action="index.html" method="post">
                            <p class="text-muted">Paste URLs/text freely, BBCODE URL tags wrap automatically when necessary.</p>
                            <div class="input_fields_container_part">
                                <!-- container to dupe -->
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">1.</label>
                                        <input name="evidenceAttachments" type="text" value="" placeholder="**Insert attachment here**" class="form-control col-sm-6" />
                                    </div>
                                </div>
                                <div class="aye"></div>
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
            </div>
        </div>
        <br>
        <div class="highlight-clean">
            <div class="container">
                <center>
                    <br />
                    <div style="text-align: left;" class="col-sm-6 alert alert-warning" role="alert"> <strong>UNIQUE REGISTRATION NUMBER (URN) — </strong>Uh uh! Not so fast, your form is not ready!
                        <br />Make sure you edit the generated form and replace the <a href="https://i.imgur.com/4hG7Erh.png" target="_blank">last digits on your reply's address</a> with the REPORT #XXXXXX (ID).
                    </div>
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
        // evidence add/remove
        let x = 1; //initialize counter for text box
        $(document).ready(function() {
            var max_fields_limit = 7; //set limit for maximum input fields
            // var questionNumber = 0;

            $('.add_more_button').click(function(e) { //click event on add more fields button having class add_more_button
                e.preventDefault();
                if (x < max_fields_limit) { //check conditions
                    x++; //counter increment
                    $('.aye').append(
                        "<div class='ayedditional'><br /><div class='form-inline'><div class='col-md-12 form-group'><label class='col-sm-4 col-form-label'>" + x +
                        ".</label><input name='evidenceAttachments' type='text' value='' class='form-control col-sm-6'/></div></div></div>"
                    ); //add input field
                }
            });

            $('.remove_field').on('click', function(e) { //user click on remove text links
                e.preventDefault();
                $('.ayedditional:last').remove();
                x--;
                if (x < 1) {
                    x = 1
                };
            })
        });





        function process() {
            <?php
            $qqr = "SELECT * FROM ranks WHERE id='" . $_SESSION['user']->rank . "'";
            $rest = mysqli_query($conn, $qqr);
            $rowt = mysqli_fetch_object($rest);
            ?>
            var deputyName = "<?php echo $_SESSION['user']->game_name; ?>"
            var deputyBadge = "<?php echo $_SESSION['user']->badge_no; ?>"
            var narrative = document.getElementById("narrative").value;
            var additional = document.getElementById("additional").value;
            var unitHanding = document.getElementById("unitHanding").value;
            var supervisor = document.getElementById("supervisor").value;
            var detectives = document.getElementById("detectives").value;
            var areas = document.getElementById("areas").value;
            var weapons = document.getElementById("weapons").value;
            var narcos = document.getElementById("narcos").value;
            var group = document.getElementById("group").value;
            var orgName = document.getElementById("orgName").value;
            var theDate = moment(theDate).format('MMMM ' + 'Do, ' + 'YYYY');


            // for the evidence
            var values = [];

            $("input[name='evidenceAttachments']").each(function() {
                values.push($(this).val());
            });

            // urlRegex
            var urlRegex = /(http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;

            for (var i = 0, j = 1; i < values.length; i++, j++) {
                if (!urlRegex.test(values[i])) {
                    values[i] = "[b]ATTACHMENT (" + [j] + ")[/b] — " + values[i] + "\n";
                } else {
                    values[i] = "[b]ATTACHMENT (" + [j] + ")[/b] — [url=" + values[i] + "]LINK[/url]\n"
                }
            }

            var format = `[divbox=white][hr][/hr][center][size=85][color=black][FONT=Arial Narrow][B]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT • MARKED CONFIDENTIAL • LOS SANTOS COUNTY SHERIFF'S DEPARTMENT[/B][/FONT][/color][/size][/center][hr][/hr]

[aligntable=right,90,0,70,0,0,0]

[img]https://www.upload.ee/image/11131768/Homicide_logo_1.png[/img]
[/aligntable]
[aligntable=center,0,165,0,0,0,0]



[center]
[font=Arial][b]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT[/b]
HOMICIDE BUREAU
[size=87]REPORT #XXXXXX[/size][/font][/center][/aligntable]
[break][/break]
[HR][/HR]
[CENTER][b][color=#000000]FOR YOUR EYES ONLY — DO NOT DISTRIBUTE — FOR YOUR EYES ONLY[/color][/b][/CENTER]
[TABLE="class: cms_table, width: 700, align: left"]
[TR="bgcolor: #7086ff"]
[TD][COLOR=black][FONT=arial][B]1. CASE INFORMATION[/B][/FONT][/COLOR][/TD]
[TD][COLOR=black][FONT=arial]
[/FONT][/COLOR][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]ORGANIZATION NAME[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]` + orgName + `[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]DATE OF REPORT[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]` + theDate + `[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]UNIT HANDLING[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]` + unitHanding + `[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]CASE SUPERVISOR[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]` + supervisor + `[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]CASE DETECTIVE(S)[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]` + detectives + `[/COLOR][/FONT][/TD]
[/TR]
[/TABLE]

[TABLE="class: cms_table, width: 700, align: left"]
[TR="bgcolor: #7086ff"]
[TD][COLOR=black][FONT=arial][B]2. CASE OVERVIEW[/B][/FONT][/COLOR][/TD]
[TD][COLOR=black][FONT=arial]
[/FONT][/COLOR][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]AREA(S) OF OPERATION[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]` + areas + `[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]GROUP TYPE[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]` + group + `[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]WEAPONS FOUND?[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]` + weapons + `[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]NARCOTICS FOUND?[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]` + narcos + `[/COLOR][/FONT][/TD]
[/TR]
[/TABLE]

[b]NARRATIVE[/b]: 
[INDENT]` + narrative + `[/INDENT]
[COLOR=TRANSPARENT].[/COLOR]
[b]EVIDENCE[/b]: 
[INDENT]` + values.join("") + `[/INDENT]
[COLOR=TRANSPARENT].[/COLOR]
[b]ADDITIONAL INFO.[/b]: 
[INDENT]` + additional + `[/INDENT]
[COLOR=TRANSPARENT]LSSD[/COLOR]

[hr][/hr][center][size=85][color=black][FONT=Arial Narrow][B]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT • MARKED CONFIDENTIAL • LOS SANTOS COUNTY SHERIFF'S DEPARTMENT[/B][/FONT][/color][/size][/center][hr][/hr]
[/divbox]`;

            document.getElementById("finish").value = format;
        }
    </script>
</div>
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