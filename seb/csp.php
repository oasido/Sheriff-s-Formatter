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
                                <strong>Team Personnel</strong>
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
                                    <center><button class="btn btn-outline-primary" onclick="addPersonnel()">Add</button></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>Time</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                  <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Start Date & Time</label>
                                    <input class="form-control col-sm-6 datepicker-here" id="startTime" data-timepicker="true" data-language='en' />
                                  </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                  <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">End Date & Time</label>
                                    <input class="form-control col-sm-6 datepicker-here" id="endTime" data-timepicker="true" data-language='en' />
                                  </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="card">
                            <div class="card-header">
                                <strong>Deployment Information</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Estimate of Encountered Situations</label>
                                        <input class="form-control col-sm-6" min="0" type="number" id="situations" placeholder="">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Narrative</label>
                                        <textarea class="form-control col-sm-6" rows="4" id="narrative" placeholder="This is optional to fill out."></textarea>
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
                addPersonnel();addPersonnel();addPersonnel();addPersonnel();

                $('#addNameHereAuto').val('<?php echo $_SESSION['user']->game_name; ?>'.toUpperCase());
                $('#addNameHereAuto').prop('disabled', true);

                function addPersonnel() {
                    var empTab2 = document.getElementById('personnel');
                    var rowCnt2 = empTab2.rows.length;        // GET TABLE ROW COUNT.
                    var tr2 = empTab2.insertRow(rowCnt2);      // TABLE ROW.
                    tr2 = empTab2.insertRow(rowCnt2);
                    for (var c = 0; c < 3; c++) {
                        var td2 = document.createElement('td');          // TABLE DEFINITION.
                        td2 = tr2.insertCell(c);
                        switch (c) {
                            case 0: {
                                // ADD A BUTTON.
                                var personnelN = document.createElement('input');
                                // SET INPUT ATTRIBUTE.
                                personnelN.setAttribute("class", 'form-control');
                                personnelN.setAttribute("id", 'addNameHereAuto');
                                personnelN.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
                                td2.appendChild(personnelN);
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
                		the_list += "[*]" +split_cut[0]+"\n";
                		the_list += "\n";
                		for (k = 1; k < split_cut.length; k++)
                		{
                			the_list += "[*]" + split_cut[k] + "\n";
                		}
                		the_list += "\n";
                	}
                	return the_list;
                }
                function process(){
                var now = moment();
                var currentDate = now.format('DD-MMM-YYYY').toUpperCase();
                var startTime = document.getElementById("startTime").value;
                var endTime = document.getElementById("endTime").value;
                var situations = document.getElementById("situations").value;
                var myTab2 = document.getElementById('personnel');
                var personnelName = "";
                var personnelRank = "";
                for (row = 1; row < myTab2.rows.length - 1; row++) {
                    for (c = 0; c < myTab2.rows[row].cells.length - 1; c++) {   // EACH CELL IN A ROW.
                        switch (c) {
                            case 0: {
                                var element = myTab2.rows.item(row).cells[c];
                                personnelName += element.childNodes[0].value + "\n";
                                break;
                            }
                            case 1: {
                                var element = myTab2.rows.item(row).cells[c];
                                personnelRank += element.childNodes[0].value + "\n";
                                break;
                            }
                        }
                    }
                }
                var narrative = document.getElementById("narrative").value;
                var format = "[divbox=white][font=Arial][center][b][size=80]COUNTY OF LOS SANTOS SHERIFF'S DEPARTMENT\n\
                SPECIAL ENFORCEMENT BUREAU[/size][/b][/center][break][/break][aligntable=left,0,12,0,0,0,0][size=87][i]''WE STOP THOSE, WHO STOP AT NOTHING''[/i][/aligntable][aligntable=left,0,75,0,0,0,0]PATROL ROUNDS REPORT[/aligntable][aligntable=left,0,100,0,0,0,0][b]DATE:[/b] "+currentDate+"[/aligntable][/size][/font]\n\
                \n\
                [table2=Arial][tr]\n\
                [td][size=75][b]START DATE AND TIME OF PATROL[/b][/size][/td]\n\
                [td][size=75][b]END DATE AND TIME OF PATROL[/b][/size][/td]\n\
                [td][size=75][b]ESTIMATE OF ENCOUNTERED SITUATIONS[/b][/size][/td][/tr]\n\
                [tr]\n\
                [td][size=75]"+startTime+"[/td]\n\
                [td][size=75]"+endTime+"[/td]\n\
                [td][size=75]"+situations+"[/size][/td][/tr][/table2]\n\
                \n\
                [table2=Arial][tr]\n\
                [td][size=75][b]TEAM MEMBERS[/b][/size][/td]\n\
                [td][size=75][b]RANK IN BUREAU[/b][/size][/td][/tr]\n\
                [tr]\n\
                [td][size=75]"+personnelName+"[/td]\n\
                [td][size=75]"+personnelRank+"[/size][/td][/tr][/table2]\n\
                \n\
                [divbox=white][center][size=75][b]PATROL NARRATIVE[/b]\n\
                PATROL ROUNDS[/size][/center]\n\
                [size=75]"+narrative+"[/size][/divbox]\n\
                [break][/break][size=75][justify]THE CONTENT OF THIS DOCUMENT IS STRICTLY CONFIDENTIAL AND INTENDED FOR ISOLATED USE WITHIN THE SPECIAL ENFORCEMENT BUREAU. IT IS STRICTLY FORBIDDEN TO SHARE INFORMATION TO ANY THIRD PARTY WITHOUT CONSENT FROM DEPARTMENT EXECUTIVE STAFF OR BUREAU COMMAND.[/justify][/size]";

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

    <!-- Page level plugin JavaScript-->
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../js/demo/datatables-demo.js"></script>
    <script src="../js/demo/chart-area-demo.js"></script>

</body>
<?php include '../footer.php' ?>
</html>
