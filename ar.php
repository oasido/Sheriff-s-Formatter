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
                        <strong>Time & Arrestee Information</strong>
                    </div>
                    <div class="card-body">
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
                        <hr>
                        <!--HR-->
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Arrestee Name</label>
                                <input class="form-control col-sm-6" type="text" id="suspect" onkeyup="this.value = this.value.toUpperCase();">
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Sentence Term (( Time ))</label>
                                <input type="number" class="form-control col-sm-6" id="PrisonTime" />
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Charges</label>
                                <?php include 'charges.php'; ?>
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <!-- <label class="col-sm-4 col-form-label"></label> -->
                                <p class="col-sm-12" id="chargesGoHere"></p>
                            </div>
                        </div>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">(( Arrest Record Proof ))</label>
                                <input type="text" class="form-control col-sm-6" id="arrestRecord" placeholder="Link to screenshot of arrest record from UCP" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <strong>Supervisor Information</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Supervisor Name</label>
                                <input class="form-control col-sm-6" type="text" id="supervisor" onkeyup="this.value = this.value.toUpperCase();">
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Badge Number</label>
                                <input class="form-control col-sm-6" type="number" id="sBadge">
                            </div>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </div>
        <br />
        <div class="highlight-clean">
            <div class="container">
                <center>
                    <button class="btn btn-success btn-lg" onClick="process()"><i class="fas fa-cog"></i> Generate
                        Form</button><br /><br />
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

        // EXTRACT AND SUBMIT TABLE DATA.
        function sumbit() {
            var myTab = document.getElementById('witness');
            var values = new Array();

            // LOOP THROUGH EACH ROW OF THE TABLE.
            for (row = 1; row < myTab.rows.length - 1; row++) {
                for (c = 0; c < myTab.rows[row].cells.length; c++) { // EACH CELL IN A ROW.

                    var element = myTab.rows.item(row).cells[c];
                    if (element.childNodes[0].getAttribute('type') == 'text') {
                        values.push("'" + element.childNodes[0].value + "'");
                    }
                }
            }
            // console.log(values);
        }


        let charges, classSelections, classArray = [],
            i;

        function calcArrestTime() {

            classSelections = document.getElementById('classification'), classArray = [], i;
            for (i = 0; i < classSelections.options.length; i += 1) {
                if (classSelections.options[i].selected) {
                    classArray.push(classSelections.options[i].value);
                    charges = classArray;
                    console.log(charges);
                }
            }

            text = "<ul class='list-group'>";

            for (i = 0; i < classArray.length; i++) {
                text += "<li class='list-group-item align-text-bottom'>" + classArray[i] +
                    "<input onKeyDown='if(this.value>15){this.value='15';}else if(this.value<1){this.value='1';} class='form-control col-sm-2 float-right' min='1' max='15' type='number' name='strikes' /></li>";
            }
            text += "</ul>";

            document.getElementById("chargesGoHere").innerHTML = text;
        }


        function process() {
            // name or signature as signature
            var trainee;
            if ("<?php echo $_SESSION['user']->signature; ?>" === "") {
                trainee = "<?php echo $_SESSION['user']->game_name; ?>";
            } else {
                trainee = "[img]" + "<?php echo $_SESSION['user']->signature; ?>" + "[/img]";
            }
            var traineeName = "<?php echo $_SESSION['user']->game_name; ?>";
            var tBadge = "<?php echo $_SESSION['user']->badge_no; ?>"

            var date = document.getElementById("date").value;
            var time = document.getElementById("time").value;
            var suspect = String(document.getElementById("suspect").value);
            suspect = suspect.replace('_', ' ');
            suspect = suspect.split(' ');

            var strikes = [];
            $("input[name='strikes']").each(function() {
                strikes.push($(this).val());
            });

            var finalCharges = "";
            for (i = 0; i < strikes.length; i++) {
                if (strikes[i] == "") {
                    strikes[i] = "1"
                } else if (strikes[i] <= 0) {
                    strikes[i] = "1";
                }
                finalCharges += "• " + classArray[i] + " " + strikes[i] + "x \n";
            }
            finalCharges = finalCharges.replace(/1x/g, "");

            // console.log(strikes);

            // let classification = classArray.toString();
            // classification = classification.split(",").join("\n");
            // finalCharges.split(",").join("\n");
            finalCharges.toString();

            var arrestRecord = document.getElementById("arrestRecord").value;


            var PrisonTime = document.getElementById("PrisonTime").value;
            var supervisor = document.getElementById("supervisor").value;
            var sBadge = document.getElementById("sBadge").value;


            var format = "[divbox=white][b][size=80][aligntable=center,0,245,0,0,0]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT[/aligntable][/size][/b]\n\
[aligntable=right,0,0,0,0,0][size=80]SH-FT-302[/size][/ALIGNTABLE][aligntable=center,0,242,0,0,0][b][size=80]ARREST REPORT — FIELD TRAINING PROGRAM[/size][/b][/aligntable]\n\
[line][/line]\n\
[table]\n\
[tr]\n\
[td][center][size=80][b]TRAINEE NAME[/b][/size][/center][/td]\n\
[td][center][size=80][b]EMPLOYEE NO.[/b][/size][/center][/td]\n\
[td][center][size=80][b]DATE[/b][/size][/center][/td]\n\
[td][center][size=80][b]TIME[/b][/size][/center][/td]\n\
[tr]\n\
[td][size=75]" + traineeName + "[/size][/td]\n\
[td][size=75]" + tBadge + "[/size][/td]\n\
[td][size=75]" + date + "[/size][/td]\n\
[td][size=75]" + time + "[/size][/td]\n\
[/tr]\n\
[/table][line][/line]\n\
[table]\n\
[tr]\n\
[td][center][size=80][b]ARRESTEE NAME[/b][/size][/center][/td]\n\
[td][center][size=80][b]CHARGES[/b][/size][/center][/td]\n\
[td][center][size=80][b]SENTENCE TERM[/b][/size][/center][/td]\n\
[td][center][size=80][b]RECORD LINK[/b][/size][/center][/td]\n\
[tr]\n\
[td][size=75]" + suspect[0] + " " + suspect[1] + "[/size][/td]\n\
[td][size=75]" + finalCharges + "[/size][/td]\n\
[td][size=75](( " + PrisonTime + " ))[/size][/td]\n\
[td][size=75][url=https://ls-rp.com/?page=lspd&select=records&p=" + suspect[0] + "_" + suspect[1] + "]ACCESS[/url][/size][/td]\n\
[/tr]\n\
[/table][line][/line]\n\
[table]\n\
[tr]\n\
[td][center][size=80][b]SUPERVISOR NAME[/b][/size][/center][/td]\n\
[td][center][size=80][b]EMPLOYEE NO.[/b][/size][/center][/td]\n\
[td][center][size=80][b]FTP MANAGEMENT NAME[/b][/size][/center][/td]\n\
[td][center][size=80][b]EMPLOYEE NO.[/b][/size][/center][/td]\n\
[tr]\n\
[td][size=75]" + supervisor + "[/size][/td]\n\
[td][size=75]" + sBadge + "[/size][/td]\n\
[td][size=75]FTP MANAGEMENT NAME[/size][/td]\n\
[td][size=75]EMPLOYEE NO[/size][/td]\n\
[/tr]\n\
[/table][/divbox]\n\
[ooc][b]PROOF OF ARREST RECORD:[/b] [url=" + arrestRecord + "]ACCESS[/url][/ooc]";

            document.getElementById("finish").value = format;
        }
    </script>
</div>
<!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<script src="js/bootstrap-select.js"></script>

</body>
<?php include 'footer.php' ?>

</html>