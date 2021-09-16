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
							<div class="card-header"> <strong>General Information</strong>
							</div>
							<div class="card-body">
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-4 col-form-label">Classification (PC)</label>
										<?php include('charges.php')?>
									</div>
								</div>
								<br />
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-4 col-form-label">Location</label>
										<input type="text" class="form-control col-sm-6" id="location" placeholder="1422 Wilson Ave., Market" />
									</div>
								</div>
								<br />
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-4 col-form-label">Busniess Name</label>
										<input type="text" class="form-control col-sm-6" id="busName" placeholder="If applicable" />
									</div>
								</div>
								<br />
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-4 col-form-label">Narrative</label>
										<textarea class="form-control col-sm-6" rows="5" id="narrative" placeholder="Write the narrative of the incident here."></textarea>
									</div>
								</div>
							</div>
						</div>
						<br />
						<div class="card">
							<div class="card-header"> <strong>People Involved</strong>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table" id="addPeople">
										<thead>
											<tr>
												<th>Code</th>
												<th>F. Name</th>
												<th>M. Name</th>
												<th>L. Name</th>
												<th>Sex</th>
												<th>Race</th>
												<th>Birth Date</th>
												<th/th>
											</tr>
										</thead>
										<tbody></tbody>
									</table>
									<center>
										<button class="btn btn-outline-primary" onclick="addPeopleRow()">Add</button>
									</center>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="card">
							<div class="card-header"> <strong>Callsign & Time</strong>
							</div>
							<div class="card-body">
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-4 col-form-label">Callsign</label>
										<input class="form-control col-sm-6" type="text" id="callsign" placeholder="Use abbreviations" onkeyup="this.value = this.value.toUpperCase();" />
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
							<div class="card-header"> <strong>Evidence</strong>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table" id="evidence">
										<thead>
											<tr>
												<th>Quantity</th>
												<th>Item Desc.</th>
												<th>Manner of Seizure</th>
												<th></th>
											</tr>
										</thead>
										<tbody></tbody>
									</table>
									<center>
										<button class="btn btn-outline-primary" onclick="addEvidence()">Add Evidence</button>
									</center>
								</div>
							</div>
						</div>
						<br />
						<div class="alert alert-warning" role="alert"> <strong>UNIQUE REGISTRATION NUMBER (URN) — </strong>Uh uh! Not so fast, your form is not ready!
							<br />Make sure you edit the generated form and write down the <a href="https://i.imgur.com/4hG7Erh.png" target="_blank">last digits on your reply's address</a>.</div>
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
			<!--DIV OF PAGE-->
			<!-- JS CUT -->
			<script type=text/javascript>
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
			</script>
			<!-- JS Form Script-->
			<script type="text/javascript">
			// add to tables
			$(document).ready(function() {
			addEvidence();
			addPeopleRow();
			});

				function addPeopleRow() {
				                   var empTab = document.getElementById('addPeople');

				                   var rowCnt = empTab.rows.length;        // GET TABLE ROW COUNT.
				                   var tr = empTab.insertRow(rowCnt);      // TABLE ROW.
				                   tr = empTab.insertRow(rowCnt);

				                   for (var c = 0; c < 8; c++) {
				                      var td = document.createElement('td');          // TABLE DEFINITION.
				                      td = tr.insertCell(c);
				                      switch (c) {
				                         case 0: {
				                            // Add the full name
				                            var selector = document.createElement("select");
				                            // selector.setAttribute("style", "width:12ch;");
				                            var victim = document.createElement("option");
				                            victim.setAttribute("value", "V");
				                            victim.text = "Victim";

				                            var witness = document.createElement("option");
				                            witness.setAttribute("value", "W");
				                            witness.text = "Witness";

				                            var informant = document.createElement("option");
				                            informant.setAttribute("value", "I");
				                            informant.text = "Informant";

				                            var reportingParty = document.createElement("option");
				                            reportingParty.setAttribute("value", "R");
				                            reportingParty.text = "Reporting Party";

				                            var party = document.createElement("option");
				                            party.setAttribute("value", "P");
				                            party.text = "Party";

				                            var suspect = document.createElement("option");
				                            suspect.setAttribute("value", "S");
				                            suspect.text = "Suspect";

				                            selector.setAttribute("class", "form-control");
				                            selector.add(victim);
				                            selector.add(witness);
				                            selector.add(informant);
				                            selector.add(reportingParty);
				                            selector.add(party);
				                            selector.add(suspect);

				                            td.appendChild(selector);
				                            break;
				                         }

				                         case 1: {
				                            var fname = document.createElement("input");
				                            fname.setAttribute("class", "form-control");

				                            td.appendChild(fname);
				                            break;
				                         }
				                         case 2: {
				                            var mname = document.createElement("input");
				                            mname.setAttribute("class", "form-control");

				                            td.appendChild(mname);
				                            break;
				                         }
				                         case 3: {
				                            var lname = document.createElement("input");
				                            lname.setAttribute("class", "form-control");

				                            td.appendChild(lname);
				                            break;
				                         }
				                         case 4: {
				                            var selector = document.createElement("select");
				                            selector.setAttribute("style", "width:9ch;");
				                            var male = document.createElement("option");
				                            male.setAttribute("value", "M");
				                            male.text = "M";

				                            var female = document.createElement("option");
				                            female.setAttribute("value", "F");
				                            female.text = "F";

				                            var na = document.createElement("option");
				                            na.setAttribute("value", "—");
				                            na.text = "N/A";

				                            selector.setAttribute("class", "form-control");
				                            selector.add(male);
				                            selector.add(female);
				                            selector.add(na);

				                            td.appendChild(selector);
				                            break;
				                         }

				                         case 5: {
				                            var race = document.createElement("input");
				                            race.setAttribute("class", "form-control");

				                            td.appendChild(race);
				                            break;
				                         }

				                         case 6: {
				                            var dob = document.createElement("input");
				                            dob.setAttribute("class", "form-control");
				                            dob.setAttribute("style", "width:18ch;");
				                            dob.setAttribute("type", "date");

				                            td.appendChild(dob);
				                            break;
				                         }

				                         case 7: {
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
				                   var empTab = document.getElementById('addPeople');
				                   empTab.deleteRow(oButton.parentNode.parentNode.rowIndex);       // BUTTON -> TD -> TR.
				                }

				                function addEvidence() {
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
				                            var quantity = document.createElement("input");
				                            quantity.setAttribute("class", "form-control");
				                            quantity.setAttribute("type", "number");
				                            td2.appendChild(quantity);
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
				                    let date = document.getElementById("date").value;
				                    let momentJSdate = moment(date).format('MMMM Do YYYY');
				                    let theDay = moment(date).format('dddd');
				                    let time = document.getElementById("time").value;
				                    // let deputyFullName = document.getElementById("deputyFullName").value;
				                    let busName = document.getElementById("busName").value;
				                    // let deputyBadge = document.getElementById("deputyBadge").value;
				                    let callsign = document.getElementById("callsign").value;
				                    let narrative = document.getElementById("narrative").value;
				                    let location = document.getElementById("location").value;
				                    // let station = document.getElementById("station").select;

									let deputyFullName = "<?php echo $_SESSION['user']->game_name; ?>"
									let deputyBadge = "<?php echo $_SESSION['user']->badge_no; ?>"
									let station = "<?php echo $_SESSION['user']->station; ?>"


				                    var classSelections = document.getElementById('classification'), classArray = [], i;
				                    for (i = 0; i < classSelections.options.length ; i += 1) {
				                        if (classSelections.options[i].selected) {
				                            classArray.push(classSelections.options[i].value);
				                        }
				                    }
				                    let classification = classArray.toString();
				                    classification = classification.split(",").join("\n");
				                   var people = "";
				                   var myTab = document.getElementById('addPeople');

				                // In the future, have counts for each "CODE" under the "People" table.
				                //    var vCount = 0;
				                //    var wCount = 0;
				                //    var iCount = 0;
				                //    var rCount = 0;
				                //    var pCount = 0;
				                //    var sCount = 0;
				                   var peopleCount = 0;

				                   var peopleArray = [];
				                   var pTextArray = [];

				                   for (row = 1; row < myTab.rows.length - 1; row++) {
				                      for (c = 0; c < myTab.rows[row].cells.length - 1; c++) {   // EACH CELL IN A ROW.
				                         switch (c) {
				                            case 0: {
				                               // Get the people;
				                               peopleCount++;
				                               var element = myTab.rows.item(row).cells[c];
				                               peopleArray.push("[tr][td][size=75]" + element.childNodes[0].value + "[/size][/td]" + "\n");
				                               break;
				                            }

				                            case 1: {
				                               var element = myTab.rows.item(row).cells[c];
				                               peopleArray.push("[td][size=75]" + element.childNodes[0].value + "[/size][/td]" + "\n");
				                               break;
				                            }

				                            case 2: {
				                               var element = myTab.rows.item(row).cells[c];
				                               peopleArray.push("[td][size=75]" + element.childNodes[0].value + "[/size][/td]" + "\n");
				                               break;
				                            }

				                            case 3: {
				                               var element = myTab.rows.item(row).cells[c];
				                               peopleArray.push("[td][size=75]" + element.childNodes[0].value + "[/size][/td]" + "\n");
				                               break;
				                            }

				                            case 4: {
				                               var element = myTab.rows.item(row).cells[c];
				                               peopleArray.push("[td][size=75]" + element.childNodes[0].value + "[/size][/td]" + "\n");
				                               break;
				                            }

				                            case 5: {
				                               var element = myTab.rows.item(row).cells[c];
				                               peopleArray.push("[td][size=75]" + element.childNodes[0].value + "[/size][/td]" + "\n");
				                               break;
				                            }

				                            case 6: {
				                               var element = myTab.rows.item(row).cells[c];
				                               peopleArray.push("[td][size=75]" + element.childNodes[0].value + "[/size][/td]" + "\n");
				                               var Bdate = element.childNodes[0].value;
				                               var Bday = +new Date(Bdate);
				                               var theBday = ~~ ((Date.now() - Bday) / (31557600000));
				                               peopleArray.push("[td][size=75]" + theBday + " Y.O.[/td][/size][/tr]")
				                               break;
				                            }
				                         }
				                      }
				                   }
				                   var ageArray = [];

				                   var arr2 = [];
				                   var i2 = 1;
				                   while(i2 <= peopleCount){
				                       arr2.push(i2++);
				                   }

				                   // loopdy loop for "out of.." people
				                   for (i = 0; i < arr2.length; i++) {
				                       pTextArray.push("[td][size=75]" + arr2[i] + " out of " + peopleCount + "[/size][/td]");
				                   }

				                   // magic
				                   var pfinalText = "";
				                   for (i = 0, j = 0; i < arr2.length; i++, j+=8) {
				                    pfinalText += peopleArray[j] + pTextArray[i] + peopleArray[j+3] + peopleArray[j+1] + peopleArray[j+2] + peopleArray[j+4] + peopleArray[j+5] + peopleArray[j+6]+ peopleArray[j+7];
				                   }

				                   // SEPERATOR !!!!!!!!!!!!!!!!!!!!!!!!!!!!

				                   var evidenceArray = [];
				                   var textArray = [];

				                   var evidence = "";
				                   var myTab2 = document.getElementById('evidence');
				                   var evidenceCount = 0;
				                   for (row = 1; row < myTab2.rows.length - 1; row++) {
				                      for (c = 0; c < myTab2.rows[row].cells.length - 1; c++) {   // EACH CELL IN A ROW.
				                         switch (c) {
				                            case 0: {
				                                evidenceCount++;
				                               // Get the evidence brief desc;
				                               var element = myTab2.rows.item(row).cells[c];
				                               evidenceArray.push("[td][size=75]" + element.childNodes[0].value + "[/size][/td]" + "\n");
				                               break;
				                            }

				                            case 1: {
				                               var element = myTab2.rows.item(row).cells[c];
				                               evidenceArray.push("[td][size=75]" + element.childNodes[0].value + "[/size][/td]" + "\n");
				                               break;
				                            }

				                            case 2: {
				                               var element = myTab2.rows.item(row).cells[c];
				                               evidenceArray.push("[td][size=75]" + element.childNodes[0].value + "[/size][/td][/tr]" + "\n");
				                               break;
				                            }
				                         }
				                      }
				                   }
				                   var arr = [];
				                   var i = 1;
				                   while(i <= evidenceCount){
				                       arr.push(i++);
				                   }

				                   // loopdy loop for "out of.."
				                   for (i = 0; i < arr.length; i++) {
				                       textArray.push("[tr][td][size=75]" + arr[i] + " out of " + evidenceCount + "[/size][/td]");
				                   }

				                   // magic
				                   var finalText = "";
				                   for (i = 0, j = 0; i < arr.length; i++, j+=3) {
				                    finalText += textArray[i] + evidenceArray[j] + evidenceArray[j+1] + evidenceArray[j+2];
				                   }
				                   var format = "[divbox=white][font=Arial][center][b][size=80]COUNTY OF LOS SANTOS SHERIFF'S DEPARTMENT[/size][/b][/center][break][/break][aligntable=left,0,12,0,0,0,0][size=87][i]A TRADITION OF SERVICE[/i][/aligntable][aligntable=left,0,150,0,0,0,0]INCIDENT REPORT[/aligntable][aligntable=left,0,150,0,0,0,0][b]DATE:[/b] "+date+"[/aligntable][/size][/font]\n\
				\n\
				[table2=Arial][tr]\n\
				[td][size=75][b]CLASSIFICATION / PENAL CODE(S)[/b][/size][/td]\n\
				[td][size=75][b]DATE, TIME, DAY OF OCCURRENCE[/b][/size][/td]\n\
				[td][size=75][b]LOC. OF OCCURENCE[/b][/size][/td]\n\
				[td][size=75][b]BUS. NAME[/b][/size][/td]\n\
				[td][size=75][b]URN #[/b][/size][/td][/tr]\n\
				[tr]\n\
				[td][size=75]"+classification+"[/size][/td]\n\
				[td][size=75]"+momentJSdate+", "+time+", "+theDay+"[/td]\n\
				[td][size=75]"+location+"[/size][/td]\n\
				[td][size=75]"+busName+"[/size][/td]\n\
				[td][size=75]thisIsThePlaceWhereYouShouldAddTheURN[/size][/td][/tr][/table2]\n\
				\n\
				[center][size=87]CODE: V-VICTIM [color=transparent]—[/color] W-WITNESS [color=transparent]—[/color]I-INFORMANT [color=transparent]—[/color] R-REPORTING PARTY [color=transparent]—[/color] S-SUSPECT[/size][/center]\n\
				\n\
				[table2=Arial][tr]\n\
				[td][size=75][b]CODE[/b][/size][/td]\n\
				[td][size=75][b]# OF #[/b][/size][/td]\n\
				[td][size=75][b]L. NAME[/b][/size][/td]\n\
				[td][size=75][b]F. NAME[/b][/size][/td]\n\
				[td][size=75][b]M. NAME[/b][/size][/td]\n\
				[td][size=75][b]SEX[/b][/size][/td]\n\
				[td][size=75][b]RACE[/b][/size][/td]\n\
				[td][size=75][b]DOB[/b][/size][/td]\n\
				[td][size=75][b]AGE[/b][/size][/td][/tr]\n\
				"+pfinalText+"[/table2]\n\
				\n\
				[table2=Arial][tr]\n\
				[td][size=75][b]BY DEP.[/b][/size][/td]\n\
				[td][size=75][b]EMPLOYEE #[/b][/size][/td]\n\
				[td][size=75][b]STATION/UNIT[/b][/size][/td]\n\
				[td][size=75][b]UNIT/CAR #[/b][/size][/td]\n\
				[/tr]\n\
				[tr]\n\
				[td][size=75]"+deputyFullName+"[/size][/td]\n\
				[td][size=75]"+deputyBadge+"[/size][/td]\n\
				[td][size=75]"+station+"[/size][/td]\n\
				[td][size=75]"+callsign+"[/size][/td][/table2]\n\
				\n\
				\n\
				[divbox=white][center][size=75][b]NARRATIVE[/b][/size][/center]\n\
				[size=75]"+narrative+"[/size][/divbox]\n\
				\n\
				[table2=Arial][tr]\n\
				[td][size=75][b]EVIDENCE #[/b][/size][/td]\n\
				[td][size=75][b]QUANTITY[/b][/size][/td]\n\
				[td][size=75][b]ITEM DESC.[/b][/size][/td]\n\
				[td][size=75][b]MANNER OF SEIZURE[/b][/size][/td][/tr]\n\
				"+finalText+"\n\
				[/table2]\n\
				[line][/line][/divbox]";

				                   document.getElementById("finish").value = format;
				                }
			</script>
		</div>
	</div>
	<!-- /#wrapper -->
	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<!-- <script src="../vendor/bootstrap/js/bootstrap.min.js"></script> -->
	<!-- <script src="../vendor/bootstrap/js/bootstrap.js"></script> -->
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin.min.js"></script>
	<script src="js/bootstrap-select.js"></script>
</body>
<?php include 'footer.php' ?>
</html>
