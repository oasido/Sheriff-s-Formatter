<?php
   include('main.php');
     include 'header.php';
     $name = mysqli_real_escape_string($conn, $_POST['game_name']);
?>
		<!-- SEPERATOR -->
		<div id="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-7 col-md-12">
						<div class="card">
							<div class="card-header">
               	<strong>Written Evaluation</strong>
							</div>
							<div class="card-body">
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Did the orientation process help you prepare for the Field Training Program and did you understand the program’s expectations of you?</label>
										<select id="TheYesNoNumber1" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label"></label>
										<textarea class="form-control col-sm-6" id="w1" rows="4" placeholder=""></textarea>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Was the length of the program adequate?</label>
										<select id="TheYesNoNumber2" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<br />
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label"></label>
										<textarea class="form-control col-sm-6" id="w2" rows="4" placeholder=""></textarea>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Do you feel that the program training you received was meaningful in relation to the job you are now doing?</label>
										<select id="TheYesNoNumber3" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<br />
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label"></label>
										<textarea class="form-control col-sm-6" id="w3" rows="4" placeholder=""></textarea>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Were there any areas of training you felt were ignored, or which should have been included or extended?</label>
										<select id="TheYesNoNumber4" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<br />
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label"></label>
										<textarea class="form-control col-sm-6" id="w4" rows="4" placeholder="If yes, which area(s)?"></textarea>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Do you feel the documented evaluations in the program (DORs, etc.) were beneficial for your development as a Deputy Sheriff?</label>
										<select id="TheYesNoNumber5" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<br />
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label"></label>
										<textarea class="form-control col-sm-6" id="w5" rows="4" placeholder=""></textarea>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Do you feel program personnel were objective in making evaluations, judgments, and decisions about you?</label>
										<select id="TheYesNoNumber6" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<br />
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label"></label>
								    <textarea class="form-control col-sm-6" id="w6" rows="4" placeholder=""></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<div class="card-header">	<strong>Upon completion of the Field Training Program, do you feel you are now proficient in each of the following areas?</strong>
							</div>
							<div class="card-body">
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Department Policies and Procedures</label>
										<select id="TheYesNoNumber7" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Patrol Vehicle Operations</label>
										<select id="TheYesNoNumber8" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Officer Safety</label>
										<select id="TheYesNoNumber9" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Report Writing</label>
										<select id="TheYesNoNumber10" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Codes and Law</label>
										<select id="TheYesNoNumber11" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Patrol Procedures</label>
										<select id="TheYesNoNumber12" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Handcuffing and Searching Techniques</label>
										<select id="TheYesNoNumber13" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Use of Force</label>
										<select id="TheYesNoNumber14" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Search and Seizure</label>
										<select id="TheYesNoNumber15" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Radio Procedures</label>
										<select id="TheYesNoNumber16" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Investigations and Evidence</label>
										<select id="TheYesNoNumber17" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Conflict Resolution</label>
										<select id="TheYesNoNumber18" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
							</div>
						</div>
						<br />
						<div class="card">
							<div class="card-header">	<strong>Additional</strong>
							</div>
							<div class="card-body">
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Are there any changes that need to be made to improve the program?</label>
										<select id="TheYesNoNumber19" class="selectpicker form-control col-sm-6" multiple data-max-options="1"><option data-icon="fas fa-check" value="yes">&nbsp;Yes</option><option data-icon="fas fa-times" value="no">&nbsp;No</option></select>
									</div>
								</div>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label"></label>
										<textarea class="form-control col-sm-6" id="w7" rows="4" placeholder=""></textarea>
									</div>
								</div>
								<hr>
								<div class="form-inline">
									<div class="col-md-12 form-group">
										<label class="col-sm-6 col-form-label">Use this space to add anything that may not have been covered:</label>
										<textarea class="form-control col-sm-6" id="w8" rows="4" placeholder=""></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br />
			<br />
			<div class="highlight-clean">
				<div class="container">
					<center>
						<button class="btn btn-success btn-lg" onClick="process()">	<i class="fas fa-cog"></i> Generate Form</button>
						<br />
						<br />
						<h5 class="font-weight-bold">Generated text:</h5>
						<textarea rows="5" class="form-control col-sm-6" id="finish"></textarea>
					</center>
				</div>
			</div>
		</div>
		<!-- JS Form Script-->
		<script type="text/javascript">
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


			                function process() {
                        let w1 = document.getElementById("w1").value;
                        let w2 = document.getElementById("w2").value;
                        let w3 = document.getElementById("w3").value;
                        let w4 = document.getElementById("w4").value;
                        let w5 = document.getElementById("w5").value;
                        let w6 = document.getElementById("w6").value;
                        let w7 = document.getElementById("w7").value;
                        let w8 = document.getElementById("w8").value;
                        let name = "<?php echo $_SESSION['user']->game_name; ?>"
                        // name or signature as signature
                        var trainee;
                        if ("<?php echo $_SESSION['user']->signature; ?>" === "") {
                          trainee = "<?php echo $_SESSION['user']->game_name; ?>";
                        } else {
                          trainee = "[img]"+"<?php echo $_SESSION['user']->signature; ?>"+"[/img]";
                        }

                        let badge = "<?php echo $_SESSION['user']->badge_no; ?>"

                        let notSelected = "[todo=][/todo]";
                        let selected = "[todo_done][/todo_done]";

                        let option1;
                        let option2;
                        let option3
                        let option4;
                        let option5;
                        let option6;
                        let option7;
                        let option8;
                        let option9;
                        let option10;
                        let option11;
                        let option12;
                        let option13;
                        let option14;
                        let option15;
                        let option16;
                        let option17;
                        let option18;
                        let option19;
                        let option20;
                        let option21;
                        let option22;
                        let option23;
                        let option24;
                        let option25;
                        let option26;
                        let option27;
                        let option28;
                        let option29;
                        let option30;
                        let option31;
                        let option32;
                        let option33;
                        let option34;
                        let option35;
                        let option36;
                        let option37;
                        let option38;

                        // date & cool[date] transforms the HTML date into DD/MMM/YYYY.
                        let date = moment().format('L');
                        let bigDate = moment().format('LL');
                        let coolMonth = moment(date).format("MMM").toUpperCase();
                        let coolDay = moment(date).format("DD");
                        let coolYear = moment(date).format("YYYY");
                        let coolDate = coolDay + "/" + coolMonth + "/" + coolYear;

                        if (document.getElementById("TheYesNoNumber1").value == "yes") {
                          option1 = selected;
                          option2 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber1").value == "no") {
                          option1 = notSelected;
                          option2 = selected;
                        } else {
                          option1 = notSelected;
                          option2 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber2").value == "yes") {
                          option3 = selected;
                          option4 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber2").value == "no") {
                          option3 = notSelected;
                          option4 = selected;
                        } else {
                          option3 = notSelected;
                          option4 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber3").value == "yes") {
                          option5 = selected;
                          option6 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber3").value == "no") {
                          option5 = notSelected;
                          option6 = selected;
                        } else {
                          option5 = notSelected;
                          option6 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber4").value == "yes") {
                          option7 = selected;
                          option8 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber4").value == "no") {
                          option7 = notSelected;
                          option8 = selected;
                        } else {
                          option7 = notSelected;
                          option8 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber5").value == "yes") {
                          option9 = selected;
                          option10 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber5").value == "no") {
                          option9 = notSelected;
                          option10 = selected;
                        } else {
                          option9 = notSelected;
                          option10 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber6").value == "yes") {
                          option11 = selected;
                          option12 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber6").value == "no") {
                          option11 = notSelected;
                          option12 = selected;
                        } else {
                          option11 = notSelected;
                          option12 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber7").value == "yes") {
                          option13 = selected;
                          option14 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber7").value == "no") {
                          option13 = notSelected;
                          option14 = selected;
                        } else {
                          option13 = notSelected;
                          option14 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber8").value == "yes") {
                          option15 = selected;
                          option16 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber8").value == "no") {
                          option15 = notSelected;
                          option16 = selected;
                        } else {
                          option15 = notSelected;
                          option16 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber9").value == "yes") {
                          option17 = selected;
                          option18 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber9").value == "no") {
                          option17 = notSelected;
                          option18 = selected;
                        } else {
                          option17 = notSelected;
                          option18 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber10").value == "yes") {
                          option19 = selected;
                          option20 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber10").value == "no") {
                          option19 = notSelected;
                          option20 = selected;
                        } else {
                          option19 = notSelected;
                          option20 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber11").value == "yes") {
                          option21 = selected;
                          option22 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber11").value == "no") {
                          option21 = notSelected;
                          option22 = selected;
                        } else {
                          option21 = notSelected;
                          option22 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber12").value == "yes") {
                          option23 = selected;
                          option24 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber12").value == "no") {
                          option23 = notSelected;
                          option24 = selected;
                        } else {
                          option23 = notSelected;
                          option24 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber13").value == "yes") {
                          option25 = selected;
                          option26 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber13").value == "no") {
                          option25 = notSelected;
                          option26 = selected;
                        } else {
                          option25 = notSelected;
                          option26 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber14").value == "yes") {
                          option27 = selected;
                          option28 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber14").value == "no") {
                          option27 = notSelected;
                          option28 = selected;
                        } else {
                          option27 = notSelected;
                          option28 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber15").value == "yes") {
                          option29 = selected;
                          option30 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber15").value == "no") {
                          option29 = notSelected;
                          option30 = selected;
                        } else {
                          option29 = notSelected;
                          option30 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber16").value == "yes") {
                          option31 = selected;
                          option32 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber16").value == "no") {
                          option31 = notSelected;
                          option32 = selected;
                        } else {
                          option31 = notSelected;
                          option32 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber17").value == "yes") {
                          option33 = selected;
                          option34 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber17").value == "no") {
                          option33 = notSelected;
                          option34 = selected;
                        } else {
                          option33 = notSelected;
                          option34 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber18").value == "yes") {
                          option35 = selected;
                          option36 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber18").value == "no") {
                          option35 = notSelected;
                          option36 = selected;
                        } else {
                          option35 = notSelected;
                          option36 = notSelected;
                        }
                        //
                        if (document.getElementById("TheYesNoNumber19").value == "yes") {
                          option37 = selected;
                          option38 = notSelected;
                        } else if (document.getElementById("TheYesNoNumber19").value == "no") {
                          option37 = notSelected;
                          option38 = selected;
                        } else {
                          option37 = notSelected;
                          option38 = notSelected;
                        }

			                  var format = "[divbox=white][b][size=80][aligntable=center,0,245,0,0,0]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT[/aligntable][/size][/b]\n\
[aligntable=right,0,0,0,0,0][size=80]SH-FT-301[/size][/ALIGNTABLE][aligntable=center,0,150,0,0,0][b][size=80]FIELD TRAINING PROGRAM (FTP) CRITIQUE FORM — FIELD TRAINING PROGRAM[/size][/b][/aligntable]\n\
[line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][b]TRAINEE NAME[/b][/size][/td]\n\
[td][size=75][b]EMPLOYEE NUMBER[/b][/size][/td][/tr]\n\
[tr]\n\
[td][size=75]"+name+"[/size][/td]\n\
[td][size=75]"+badge+"[/size][/td][/tr]\n\
[/table][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][b][center]PART A. PURPOSE[/center][/b][/size][/td][/tr][/table][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][justify]The Field Training Program personnel are dedicated to providing trainees with an effective training experience. Below is a list of questionspertaining to the training you received during the Field Training Program. The purpose of this evaluation is to present objective feedback to beused by personnel to improve and enhance the program’s effectiveness. Please read each question carefully and respond honestly anddirectly. Your candidness and comments will be appreciated.[/justify][/td]\n\
[/tr][/table][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][justify]"+option1+"Y[color=#FFFFFF]-----[/color]"+option2+"N[color=#FFFFFF]---[/color] [b]1.[/b] Did the orientation process help you prepare for the Field Training Program and did you understand the program’s expectations of you? \n\
\n\
[i]Please comment[/i]: "+w1+"[/justify][/size][/td][/tr][/TABLE][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][justify]"+option3+"Y[color=#FFFFFF]-----[/color]"+option4+"N[color=#FFFFFF]---[/color] [b]2.[/b] Was the length of the program adequate?\n\
\n\
[i]Please comment[/i]: "+w2+"[/justify][/size][/td][/tr][/TABLE][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][justify]"+option5+"Y[color=#FFFFFF]-----[/color]"+option6+"N[color=#FFFFFF]---[/color] [b]3.[/b] Do you feel that the program training you received was meaningful in relation to the job you are now doing?\n\
\n\
[i]Please comment[/i]: "+w3+"[/justify][/size][/td][/tr][/TABLE][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][justify]"+option7+"Y[color=#FFFFFF]-----[/color]"+option8+"N[color=#FFFFFF]---[/color] [b]4.[/b] Were there any areas of training you felt were ignored, or which should have been included or extended?\n\
\n\
[i]If YES, which area(s)[/i]: "+w4+"[/justify][/size][/td][/tr][/TABLE][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][justify]"+option9+"Y[color=#FFFFFF]-----[/color]"+option10+"N[color=#FFFFFF]---[/color] [b]5.[/b] Do you feel the documented evaluations in the program (DORs, etc.) were beneficial for your development as a Deputy Sheriff?\n\
\n\
[i]Please comment[/i]: "+w5+"[/justify][/size][/td][/tr][/TABLE][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][justify]"+option11+"Y[color=#FFFFFF]-----[/color]"+option12+"N[color=#FFFFFF]---[/color] [b]6.[/b] Do you feel program personnel were objective in making evaluations, judgments, and decisions about you?\n\
\n\
[i]Please comment[/i]: "+w6+"[/justify][/size][/td][/tr][/TABLE][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][justify][b]7.[/b] Upon completion of the Field Training Program, do you feel you are now proficient in each of the following areas?\n\
\n\
[color=#FFFFFF]---[/color]A. Department Policies and Procedures .........................................................[aligntable=right,0,0,100,0,0,0]"+option13+"Y[color=#FFFFFF]-----[/color]"+option14+"N[/aligntable]\n\
[color=#FFFFFF]---[/color]B. Patrol Vehicle Operations .........................................................................[aligntable=right,0,0,100,0,0,0]"+option15+"Y[color=#FFFFFF]-----[/color]"+option16+"N[/aligntable]\n\
[color=#FFFFFF]---[/color]C. Officer Safety .......................................................................................... [aligntable=right,0,0,100,0,0,0]"+option17+"Y[color=#FFFFFF]-----[/color]"+option18+"N[/aligntable]\n\
[color=#FFFFFF]---[/color]D. Report Writing ........................................................................................[aligntable=right,0,0,100,0,0,0]"+option19+"Y[color=#FFFFFF]-----[/color]"+option20+"N[/aligntable]\n\
[color=#FFFFFF]---[/color]E. Codes and Law .......................................................................................[aligntable=right,0,0,100,0,0,0]"+option21+"Y[color=#FFFFFF]-----[/color]"+option22+"N[/aligntable]\n\
[color=#FFFFFF]---[/color]F. Patrol Procedures ....................................................................................[aligntable=right,0,0,100,0,0,0]"+option23+"Y[color=#FFFFFF]-----[/color]"+option24+"N[/aligntable]\n\
[color=#FFFFFF]---[/color]G. Handcuffing and Searching Techniques ....................................................[aligntable=right,0,0,100,0,0,0]"+option25+"Y[color=#FFFFFF]-----[/color]"+option26+"N[/aligntable]\n\
[color=#FFFFFF]---[/color]H. Use of Force ...........................................................................................[aligntable=right,0,0,100,0,0,0]"+option27+"Y[color=#FFFFFF]-----[/color]"+option28+"N[/aligntable]\n\
[color=#FFFFFF]---[/color]I. Search and Seizure ...................................................................................[aligntable=right,0,0,100,0,0,0]"+option29+"Y[color=#FFFFFF]-----[/color]"+option30+"N[/aligntable]\n\
[color=#FFFFFF]---[/color]J. Radio Procedures .....................................................................................[aligntable=right,0,0,100,0,0,0]"+option31+"Y[color=#FFFFFF]-----[/color]"+option32+"N[/aligntable]\n\
[color=#FFFFFF]---[/color]K. Investigations and Evidence .....................................................................[aligntable=right,0,0,100,0,0,0]"+option33+"Y[color=#FFFFFF]-----[/color]"+option34+"N[/aligntable]\n\
[color=#FFFFFF]---[/color]L. Conflict Resolution ...................................................................................[aligntable=right,0,0,100,0,0,0]"+option35+"Y[color=#FFFFFF]-----[/color]"+option36+"N[/aligntable]\n\
[/justify][/size][/td][/tr][/TABLE][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][justify]"+option37+"Y[color=#FFFFFF]-----[/color]"+option38+"N[color=#FFFFFF]---[/color] [b]8.[/b] Are there any changes that need to be made to improve the program?\n\
\n\
[i]Please comment[/i]: "+w7+"[/justify][/size][/td][/tr][/TABLE][line][/line]\n\
[table]\n\
[tr]\n\
[td][size=75][justify][b]9.[/b] Use the space below to add anything that may not have been covered above.\n\
\n\
"+w8+"[/justify][/size][/td][/tr][/TABLE][line][/line]\n\
[table][TR][td][size=75][b]TRAINEE SIGNATURE[/b][/size][/td]\n\
[td][size=75][b]DATE[/b][/size][/td][/tr]\n\
[TR][td][size=75]"+trainee+"[/size][/td]\n\
[td][size=75]"+bigDate+" — "+coolDate+"[/size][/td][/tr][/table][line][/line]\n\
[/divbox]";

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
