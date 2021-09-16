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
                                        <label class="col-sm-4 col-form-label">Field Training Officer Involved</label>
                                        <input class="form-control col-sm-6" type="text" id="fto" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">FTO Badge Number</label>
                                        <input class="form-control col-sm-6" type="number" id="fBadge">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Date</label>
                                        <input class="form-control col-sm-6" type="date" id="date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="card">
                            <div class="card-header">
                                <strong>Written Evaluation</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-6 col-form-label">List the area(s) you consider to be the FTO’s greatest strengths</label>
                                        <textarea class="form-control col-sm-6" id="strengths" rows="4" placeholder="Training skills, officer safety, codes and laws, report writing, etc" onkeyup="this.value = this.value.toUpperCase();"></textarea>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-6 col-form-label">List the area(s) in which you feel the FTO needs improvement:</label>
                                        <textarea class="form-control col-sm-6" id="improvement" rows="4" placeholder="" onkeyup="this.value = this.value.toUpperCase();"></textarea>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-6 col-form-label">Were there any conflicts or inconsistencies with the FTO’s training and your academy training?</label>
                                        <textarea class="form-control col-sm-6" id="conflicts" rows="4" placeholder="" onkeyup="this.value = this.value.toUpperCase();"></textarea>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-6 col-form-label">Did you experience any discrepancies between the FTOs?</label>
                                        <textarea class="form-control col-sm-6" id="discrepancies" rows="4" placeholder="" onkeyup="this.value = this.value.toUpperCase();"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>Rates</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Training</label>
                                        <input type="range" min="0" max="100" value="50" class="slider" id="training1">
                                        <p class="h6">&nbsp;&nbsp;&nbsp;Value: <span id="tra"></span></p>
                                    </div>
                                </div>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Evaluating Performance</label>
                                        <input type="range" min="0" max="100" value="50" class="slider" id="performance1">
                                        <p class="h6">&nbsp;&nbsp;&nbsp;Value: <span id="per"></span></p>
                                    </div>
                                </div>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col col-form-label">Both values above need to sum up to 100!</label>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table" id="witness">
                                        <tbody>
                                            <tr class="table-nice" style="height: 23px;">
                                                <td style="width: 46.0315%; height: 23px;"><strong>On a scale of 1 to 5, rate the following:</strong></td>
                                                <td style="width: 10.9685%; height: 23px;"><strong><span class="">1<br>F</span></strong></td>
                                                <td style="width: 11%; height: 23px;"><strong><span class="">2<br>D</span></strong></td>
                                                <td style="width: 10%; height: 23px;"><strong><span class="">3<br>C</span></strong></td>
                                                <td style="width: 10%; height: 23px;"><strong><span class="">4<br>B</span></strong></td>
                                                <td style="width: 39%; height: 23px;"><strong><span class="">5<br>A</span></strong></td>
                                            </tr>
                                            <tr style="height: 23px;">
                                                <td style="width: 46.0315%; height: 23px;">Indicate how you perceived your FTO related to you:</td>
                                                <td style="width: 10.9685%; height: 23px;"><input type="checkbox" id="a1"></td>
                                                <td style="width: 11%; height: 23px;"><input type="checkbox" id="b1"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="c1"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="d1"></td>
                                                <td style="width: 39%; height: 23px;"><input type="checkbox" id="e1"></td>
                                            </tr>
                                            <tr style="height: 23px;">
                                                <td style="width: 46.0315%; height: 23px;">What type of role model was the FTO for you?</td>
                                                <td style="width: 10.9685%; height: 23px;"><input type="checkbox" id="a2"></td>
                                                <td style="width: 11%; height: 23px;"><input type="checkbox" id="b2"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="c2"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="d2"></td>
                                                <td style="width: 39%; height: 23px;"><input type="checkbox" id="e2"></td>
                                            </tr>
                                            <tr style="height: 23px;">
                                                <td style="width: 46.0315%; height: 23px;">Was the FTO attentive to your needs, problems, or concerns?</td>
                                                <td style="width: 10.9685%; height: 23px;"><input type="checkbox" id="a3"></td>
                                                <td style="width: 11%; height: 23px;"><input type="checkbox" id="b3"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="c3"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="d3"></td>
                                                <td style="width: 39%; height: 23px;"><input type="checkbox" id="e3"></td>
                                            </tr>
                                            <tr style="height: 23px;">
                                                <td style="width: 46.0315%; height: 23px;">Rate the FTO's knowledge of the training material covered:</td>
                                                <td style="width: 10.9685%; height: 23px;"><input type="checkbox" id="a4"></td>
                                                <td style="width: 11%; height: 23px;"><input type="checkbox" id="b4"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="c4"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="d4"></td>
                                                <td style="width: 39%; height: 23px;"><input type="checkbox" id="e4"></td>
                                            </tr>
                                            <tr style="height: 23px;">
                                                <td style="width: 46.0315%; height: 23px;">Describe the FTO's skill as a trainer and his/her training methods, such as handouts, visual aids, scenarios, role-play, etc.:</td>
                                                <td style="width: 10.9685%; height: 23px;"><input type="checkbox" id="a5"></td>
                                                <td style="width: 11%; height: 23px;"><input type="checkbox" id="b5"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="c5"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="d5"></td>
                                                <td style="width: 39%; height: 23px;"><input type="checkbox" id="e5"></td>
                                            </tr>
                                            <tr style="height: 23px;">
                                                <td style="width: 46.0315%; height: 23px;">Rate the FTO's ability to communicate with you:</td>
                                                <td style="width: 10.9685%; height: 23px;"><input type="checkbox" id="a6"></td>
                                                <td style="width: 11%; height: 23px;"><input type="checkbox" id="b6"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="c6"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="d6"></td>
                                                <td style="width: 39%; height: 23px;"><input type="checkbox" id="e6"></td>
                                            </tr>
                                            <tr style="height: 23px;">
                                                <td style="width: 46.0315%; height: 23px;">Rate the FTO's honesty, fairness, and objectivity in evaluating you:</td>
                                                <td style="width: 10.9685%; height: 23px;"><input type="checkbox" id="a7"></td>
                                                <td style="width: 11%; height: 23px;"><input type="checkbox" id="b7"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="c7"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="d7"></td>
                                                <td style="width: 39%; height: 23px;"><input type="checkbox" id="e7"></td>
                                            </tr>
                                            <tr style="height: 23px;">
                                                <td style="width: 46.0315%; height: 23px;">Describe the FTO's method of critiquing your performance (verbally or in writing):</td>
                                                <td style="width: 10.9685%; height: 23px;"><input type="checkbox" id="a8"></td>
                                                <td style="width: 11%; height: 23px;"><input type="checkbox" id="b8"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="c8"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="d8"></td>
                                                <td style="width: 39%; height: 23px;"><input type="checkbox" id="e8"></td>
                                            </tr>
                                            <tr style="height: 23px;">
                                                <td style="width: 46.0315%; height: 23px;">Did the FTO work with you on areas he/she identified as deficient or where improvement was needed?</td>
                                                <td style="width: 10.9685%; height: 23px;"><input type="checkbox" id="a9"></td>
                                                <td style="width: 11%; height: 23px;"><input type="checkbox" id="b9"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="c9"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="d9"></td>
                                                <td style="width: 39%; height: 23px;"><input type="checkbox" id="e9"></td>
                                            </tr>
                                            <tr style="height: 23px;">
                                                <td style="width: 46.0315%; height: 23px;">(( Rate the FTO's roleplay ability: ))</td>
                                                <td style="width: 10.9685%; height: 23px;"><input type="checkbox" id="a10"></td>
                                                <td style="width: 11%; height: 23px;"><input type="checkbox" id="b10"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="c10"></td>
                                                <td style="width: 10%; height: 23px;"><input type="checkbox" id="d10"></td>
                                                <td style="width: 39%; height: 23px;"><input type="checkbox" id="e10"></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                            <button class="btn btn-success btn-lg" onClick="process()"><i class="fas fa-cog"></i> Generate Form</button><br /><br />
                            <h5 class="font-weight-bold">Generated text:</h5>
                            <textarea rows="5" class="form-control col-sm-6" id="finish"></textarea>
                        </center>
                    </div>
                </div>
            </div>
            <!-- aye-->
            <!--Snackbar!-->



            <!-- JS Form Script-->
            <script type="text/javascript">
                // ---------------------
                var performance = document.getElementById("performance1");
                var per = document.getElementById("per");

                var training = document.getElementById("training1");
                var tra = document.getElementById("tra");
                tra.innerHTML = training.value;

                training.oninput = function() {
                  tra.innerHTML = this.value;
                  per.innerHTML = 100 - this.value;
                  performance.value = 100 - this.value;
                }

                var performance = document.getElementById("performance1");
                var per = document.getElementById("per");
                per.innerHTML = performance.value;

                performance.oninput = function() {
                  per.innerHTML = this.value;
                  tra.innerHTML = 100 - this.value;
                  training.value = 100 - this.value;
                }
                // ---------------------


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
                  var date = document.getElementById("date").value;

                  var traineeName = "<?php echo $_SESSION['user']->game_name; ?>"
                  // name or signature as signature
                  var trainee;
                  if ("<?php echo $_SESSION['user']->signature; ?>" === "") {
                    trainee = "<?php echo $_SESSION['user']->game_name; ?>";
                  } else {
                    trainee = "[img]"+"<?php echo $_SESSION['user']->signature; ?>"+"[/img]";
                  }


                  var tBadge = "<?php echo $_SESSION['user']->badge_no; ?>"
                  var fto = document.getElementById("fto").value;
                  var fBadge = document.getElementById("fBadge").value;

                  var tra = document.getElementById("training1").value;
                  var per = document.getElementById("performance1").value;

                  var a1 = document.getElementById("a1").checked;
                  var b1 = document.getElementById("b1").checked;
                  var c1 = document.getElementById("c1").checked;
                  var d1 = document.getElementById("d1").checked;
                  var e1 = document.getElementById("e1").checked;
                  var a2 = document.getElementById("a2").checked;
                  var b2 = document.getElementById("b2").checked;
                  var c2 = document.getElementById("c2").checked;
                  var d2 = document.getElementById("d2").checked;
                  var e2 = document.getElementById("e2").checked;
                  var a3 = document.getElementById("a3").checked;
                  var b3 = document.getElementById("b3").checked;
                  var c3 = document.getElementById("c3").checked;
                  var d3 = document.getElementById("d3").checked;
                  var e3 = document.getElementById("e3").checked;
                  var a4 = document.getElementById("a4").checked;
                  var b4 = document.getElementById("b4").checked;
                  var c4 = document.getElementById("c4").checked;
                  var d4 = document.getElementById("d4").checked;
                  var e4 = document.getElementById("e4").checked;
                  var a5 = document.getElementById("a5").checked;
                  var b5 = document.getElementById("b5").checked;
                  var c5 = document.getElementById("c5").checked;
                  var d5 = document.getElementById("d5").checked;
                  var e5 = document.getElementById("e5").checked;
                  var a6 = document.getElementById("a6").checked;
                  var b6 = document.getElementById("b6").checked;
                  var c6 = document.getElementById("c6").checked;
                  var d6 = document.getElementById("d6").checked;
                  var e6 = document.getElementById("e6").checked;
                  var a7 = document.getElementById("a7").checked;
                  var b7 = document.getElementById("b7").checked;
                  var c7 = document.getElementById("c7").checked;
                  var d7 = document.getElementById("d7").checked;
                  var e7 = document.getElementById("e7").checked;
                  var a8 = document.getElementById("a8").checked;
                  var b8 = document.getElementById("b8").checked;
                  var c8 = document.getElementById("c8").checked;
                  var d8 = document.getElementById("d8").checked;
                  var e8 = document.getElementById("e8").checked;
                  var a9 = document.getElementById("a9").checked;
                  var b9 = document.getElementById("b9").checked;
                  var c9 = document.getElementById("c9").checked;
                  var d9 = document.getElementById("d9").checked;
                  var e9 = document.getElementById("e9").checked;
                  var a10 = document.getElementById("a10").checked;
                  var b10 = document.getElementById("b10").checked;
                  var c10 = document.getElementById("c10").checked;
                  var d10 = document.getElementById("d10").checked;
                  var e10 = document.getElementById("e10").checked;

                  var strengths = document.getElementById("strengths").value;
                  var improvement = document.getElementById("improvement").value;
                  var conflicts = document.getElementById("conflicts").value;
                  var discrepancies = document.getElementById("discrepancies").value;

                  if (a1 == true) {
                  a1 = "[todo_done][/todo_done]";
                } else {
                  a1 = "[todo=][/todo]"
                }

                if (b1 == true) {
                  b1 = "[todo_done][/todo_done]";
                } else {
                  b1 = "[todo=][/todo]"
                }

                if (c1 == true) {
                  c1 = "[todo_done][/todo_done]";
                } else {
                  c1 = "[todo=][/todo]"
                }

                if (d1 == true) {
                  d1 = "[todo_done][/todo_done]";
                } else {
                  d1 = "[todo=][/todo]"
                }

                if (e1 == true) {
                  e1 = "[todo_done][/todo_done]";
                } else {
                  e1 = "[todo=][/todo]"
                }

                if (a2 == true) {
                  a2 = "[todo_done][/todo_done]";
                } else {
                  a2 = "[todo=][/todo]"
                }

                if (b2 == true) {
                  b2 = "[todo_done][/todo_done]";
                } else {
                  b2 = "[todo=][/todo]"
                }

                if (c2 == true) {
                  c2 = "[todo_done][/todo_done]";
                } else {
                  c2 = "[todo=][/todo]"
                }

                if (d2 == true) {
                  d2 = "[todo_done][/todo_done]";
                } else {
                  d2 = "[todo=][/todo]"
                }

                if (e2 == true) {
                  e2 = "[todo_done][/todo_done]";
                } else {
                  e2 = "[todo=][/todo]"
                }

                if (a3 == true) {
                  a3 = "[todo_done][/todo_done]";
                } else {
                  a3 = "[todo=][/todo]"
                }

                if (b3 == true) {
                  b3 = "[todo_done][/todo_done]";
                } else {
                  b3 = "[todo=][/todo]"
                }

                if (c3 == true) {
                  c3 = "[todo_done][/todo_done]";
                } else {
                  c3 = "[todo=][/todo]"
                }

                if (d3 == true) {
                  d3 = "[todo_done][/todo_done]";
                } else {
                  d3 = "[todo=][/todo]"
                }

                if (e3 == true) {
                  e3 = "[todo_done][/todo_done]";
                } else {
                  e3 = "[todo=][/todo]"
                }

                if (a4 == true) {
                  a4 = "[todo_done][/todo_done]";
                } else {
                  a4 = "[todo=][/todo]"
                }

                if (b4 == true) {
                  b4 = "[todo_done][/todo_done]";
                } else {
                  b4 = "[todo=][/todo]"
                }

                if (c4 == true) {
                  c4 = "[todo_done][/todo_done]";
                } else {
                  c4 = "[todo=][/todo]"
                }

                if (d4 == true) {
                  d4 = "[todo_done][/todo_done]";
                } else {
                  d4 = "[todo=][/todo]"
                }

                if (e4 == true) {
                  e4 = "[todo_done][/todo_done]";
                } else {
                  e4 = "[todo=][/todo]"
                }

                if (a5 == true) {
                  a5 = "[todo_done][/todo_done]";
                } else {
                  a5 = "[todo=][/todo]"
                }

                if (b5 == true) {
                  b5 = "[todo_done][/todo_done]";
                } else {
                  b5 = "[todo=][/todo]"
                }

                if (c5 == true) {
                  c5 = "[todo_done][/todo_done]";
                } else {
                  c5 = "[todo=][/todo]"
                }

                if (d5 == true) {
                  d5 = "[todo_done][/todo_done]";
                } else {
                  d5 = "[todo=][/todo]"
                }

                if (e5 == true) {
                  e5 = "[todo_done][/todo_done]";
                } else {
                  e5 = "[todo=][/todo]"
                }

                if (a6 == true) {
                  a6 = "[todo_done][/todo_done]";
                } else {
                  a6 = "[todo=][/todo]"
                }

                if (b6 == true) {
                  b6 = "[todo_done][/todo_done]";
                } else {
                  b6 = "[todo=][/todo]"
                }

                if (c6 == true) {
                  c6 = "[todo_done][/todo_done]";
                } else {
                  c6 = "[todo=][/todo]"
                }

                if (d6 == true) {
                  d6 = "[todo_done][/todo_done]";
                } else {
                  d6 = "[todo=][/todo]"
                }

                if (e6 == true) {
                  e6 = "[todo_done][/todo_done]";
                } else {
                  e6 = "[todo=][/todo]"
                }

                if (a7 == true) {
                  a7 = "[todo_done][/todo_done]";
                } else {
                  a7 = "[todo=][/todo]"
                }

                if (b7 == true) {
                  b7 = "[todo_done][/todo_done]";
                } else {
                  b7 = "[todo=][/todo]"
                }

                if (c7 == true) {
                  c7 = "[todo_done][/todo_done]";
                } else {
                  c7 = "[todo=][/todo]"
                }

                if (d7 == true) {
                  d7 = "[todo_done][/todo_done]";
                } else {
                  d7 = "[todo=][/todo]"
                }

                if (e7 == true) {
                  e7 = "[todo_done][/todo_done]";
                } else {
                  e7 = "[todo=][/todo]"
                }

                if (a8 == true) {
                  a8 = "[todo_done][/todo_done]";
                } else {
                  a8 = "[todo=][/todo]"
                }

                if (b8 == true) {
                  b8 = "[todo_done][/todo_done]";
                } else {
                  b8 = "[todo=][/todo]"
                }

                if (c8 == true) {
                  c8 = "[todo_done][/todo_done]";
                } else {
                  c8 = "[todo=][/todo]"
                }

                if (d8 == true) {
                  d8 = "[todo_done][/todo_done]";
                } else {
                  d8 = "[todo=][/todo]"
                }

                if (e8 == true) {
                  e8 = "[todo_done][/todo_done]";
                } else {
                  e8 = "[todo=][/todo]"
                }

                if (a9 == true) {
                  a9 = "[todo_done][/todo_done]";
                } else {
                  a9 = "[todo=][/todo]"
                }

                if (b9 == true) {
                  b9 = "[todo_done][/todo_done]";
                } else {
                  b9 = "[todo=][/todo]"
                }

                if (c9 == true) {
                  c9 = "[todo_done][/todo_done]";
                } else {
                  c9 = "[todo=][/todo]"
                }

                if (d9 == true) {
                  d9 = "[todo_done][/todo_done]";
                } else {
                  d9 = "[todo=][/todo]"
                }

                if (e9 == true) {
                  e9 = "[todo_done][/todo_done]";
                } else {
                  e9 = "[todo=][/todo]"
                }

                if (a10 == true) {
                  a10 = "[todo_done][/todo_done]";
                } else {
                  a10 = "[todo=][/todo]"
                }

                if (b10 == true) {
                  b10 = "[todo_done][/todo_done]";
                } else {
                  b10 = "[todo=][/todo]"
                }

                if (c10 == true) {
                  c10 = "[todo_done][/todo_done]";
                } else {
                  c10 = "[todo=][/todo]"
                }

                if (d10 == true) {
                  d10 = "[todo_done][/todo_done]";
                } else {
                  d10 = "[todo=][/todo]"
                }

                if (e10 == true) {
                  e10 = "[todo_done][/todo_done]";
                } else {
                  e10 = "[todo=][/todo]"
                }

                  var format = "[divbox=white][b][size=80][aligntable=center,0,245,0,0,0]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT[/aligntable][/size][/b]\n\
                [aligntable=right,0,0,0,0,0][size=80]SH-FT-301[/size][/ALIGNTABLE][aligntable=center,0,150,0,0,0][b][size=80]FIELD TRAINING OFFICER (FTO) CRITIQUE FORM — FIELD TRAINING PROGRAM[/size][/b][/aligntable]\n\
                [line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][b]TRAINEE NAME[/b][/size][/td]\n\
                [td][size=75][b]EMPLOYEE NUMBER[/b][/size][/td]\n\
                [td][size=75][b]FIELD TRAINING OFFICER INVOLVED[/b][/size][/td]\n\
                [td][size=75][b]EMPLOYEE NUMBER[/b][/size][/td][/tr]\n\
                [tr]\n\
                [td][size=75]"+traineeName+"[/size][/td]\n\
                [td][size=75]"+tBadge+"[/size][/td]\n\
                [td][size=75]"+fto+"[/size][/td]\n\
                [td][size=75]"+fBadge+"[/size][/td]\n\
                [/tr]\n\
                [/table][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][b][center]PART A. PURPOSE[/center][/b][/size][/td][/tr][/table][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify]In an effort to ensure that each Field Training Officer (FTO) maintains a high level of skill, performance, and interest, this critique form is to be completed by the trainee. The purpose of the form is to provide objective feedback to the FTOs so they can use the information to continue to enhance their teaching/training skills. It is imperative these questions be answered honestly and directly. Field training officers will benefit by knowing the impression they have made on you, their trainee. \n\
                \n\
                Your response to each item is important. Please take time to provide details about why you rated the FTO as you did. The more information that you can provide the better we can determine each FTO’s level of skill and their continued suitability for the position. \n\
                \n\
                This critique form is confidential and will only be reviewed by field training program administrative personnel. The general content of the feedback (not your identity) will be relayed to the FTOs to assist with improving training methods.[/justify][/td]\n\
                [/tr][/table][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][b][center]PART B. FTO EVALUATION[/center][/b][/size][/td][/tr][/table][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify][b]1.[/b] The Field Training Program emphasizes two areas: Training and Evaluating Performance. Assign percentages (totaling 100%) to the amount of effort your FTO gave to each (e.g., Training–50%, Evaluating Performance–50% / Training–70%, Evaluating Performance–30%) \n\
                \n\
                \n\
                [center]TRAINING: "+tra+"% [color=#FFFFFF]---------[/color]EVALUATING PERFORMANCE: "+per+"%[/center][/justify][/size][/td][/tr][/TABLE][line][/line][b][size=75]On a scale of 1 to 5, rate the following:[/size][/b][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify][b]2.[/b] Indicate how you perceived your FTO related to you:\n\
                \n\
                [center]"+a1+"1[color=#FFFFFF]-----------[/color]"+b1+"2[color=#FFFFFF]-----------[/color]"+c1+"3[color=#FFFFFF]-----------[/color]"+d1+"4[color=#FFFFFF]-----------[/color]"+e1+"5[/center][/justify][/size][/td][/tr][/TABLE][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify][b]3.[/b] What type of role model was the FTO for you?\n\
                \n\
                [center]"+a2+"1[color=#FFFFFF]-----------[/color]"+b2+"2[color=#FFFFFF]-----------[/color]"+c2+"3[color=#FFFFFF]-----------[/color]"+d2+"4[color=#FFFFFF]-----------[/color]"+e2+"5[/center][/justify][/size][/td][/tr][/TABLE][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify][b]4.[/b] Was the FTO attentive to your needs, problems, or concerns?\n\
                \n\
                [center]"+a3+"1[color=#FFFFFF]-----------[/color]"+b3+"2[color=#FFFFFF]-----------[/color]"+c3+"3[color=#FFFFFF]-----------[/color]"+d3+"4[color=#FFFFFF]-----------[/color]"+e3+"5[/center][/justify][/size][/td][/tr][/TABLE][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify][b]5.[/b] Rate the FTO’s knowledge of the training material covered:\n\
                \n\
                [center]"+a4+"1[color=#FFFFFF]-----------[/color]"+b4+"2[color=#FFFFFF]-----------[/color]"+c4+"3[color=#FFFFFF]-----------[/color]"+d4+"4[color=#FFFFFF]-----------[/color]"+e4+"5[/center][/justify][/size][/td][/tr][/TABLE][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify][b]6.[/b] Describe the FTO's skill as a trainer and his/her training methods, such as handouts, visual aids, scenarios, role-play, etc.:\n\
                \n\
                [center]"+a5+"1[color=#FFFFFF]-----------[/color]"+b5+"2[color=#FFFFFF]-----------[/color]"+c5+"3[color=#FFFFFF]-----------[/color]"+d5+"4[color=#FFFFFF]-----------[/color]"+e5+"5[/center][/justify][/size][/td][/tr][/TABLE][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify][b]7.[/b] Rate the FTO's ability to communicate with you:\n\
                \n\
                [center]"+a6+"1[color=#FFFFFF]-----------[/color]"+b6+"2[color=#FFFFFF]-----------[/color]"+c6+"3[color=#FFFFFF]-----------[/color]"+d6+"4[color=#FFFFFF]-----------[/color]"+e6+"5[/center][/justify][/size][/td][/tr][/TABLE][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify][b]8.[/b] Rate the FTO's honesty, fairness, and objectivity in evaluating you:\n\
                \n\
                [center]"+a7+"1[color=#FFFFFF]-----------[/color]"+b7+"2[color=#FFFFFF]-----------[/color]"+c7+"3[color=#FFFFFF]-----------[/color]"+d7+"4[color=#FFFFFF]-----------[/color]"+e7+"5[/center][/justify][/size][/td][/tr][/TABLE][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify][b]9.[/b] Describe the FTO’s method of critiquing your performance (verbally or in writing):\n\
                \n\
                [center]"+a8+"1[color=#FFFFFF]-----------[/color]"+b8+"2[color=#FFFFFF]-----------[/color]"+c8+"3[color=#FFFFFF]-----------[/color]"+d8+"4[color=#FFFFFF]-----------[/color]"+e8+"5[/center][/justify][/size][/td][/tr][/TABLE][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify][b]10.[/b] Did the FTO work with you on areas he/she identified as deficient or where improvement was needed?\n\
                \n\
                [center]"+a9+"1[color=#FFFFFF]-----------[/color]"+b9+"2[color=#FFFFFF]-----------[/color]"+c9+"3[color=#FFFFFF]-----------[/color]"+d9+"4[color=#FFFFFF]-----------[/color]"+e9+"5[/center][/justify][/size][/td][/tr][/TABLE][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify][b]11.[/b] List the area(s) you consider to be the FTO's greatest strengths (e.g., training skills, officer safety, codes and laws, report writing, etc.):\n\
                \n\
                "+strengths+"[/justify][/size][/td][/tr][/TABLE][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify][b]12.[/b] List the area(s) in which you feel the FTO needs improvement:\n\
                \n\
                "+improvement+"[/justify][/size][/td][/tr][/TABLE][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify][b]13.[/b] Were there any conflicts or inconsistencies with the FTO's training and your academy training?\n\
                \n\
                "+conflicts+"[/justify][/size][/td][/tr][/TABLE][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify][b]14.[/b] Did you experience any discrepancies between the FTOs?\n\
                \n\
                "+discrepancies+"[/justify][/size][/td][/tr][/TABLE][line][/line]\n\
                [table]\n\
                [tr]\n\
                [td][size=75][justify](( [b]15.[/b] Rate the FTO’s roleplay ability: ))\n\
                \n\
                [center]"+a10+"1[color=#FFFFFF]-----------[/color]"+b10+"2[color=#FFFFFF]-----------[/color]"+c10+"3[color=#FFFFFF]-----------[/color]"+d10+"4[color=#FFFFFF]-----------[/color]"+e10+"5[/center][/justify][/size][/td][/tr][/TABLE][line][/line]\n\
                [table][TR][td][size=75][b]TRAINEE SIGNATURE[/b][/size][/td]\n\
                [td][size=75][b]DATE[/b][/size][/td][/tr]\n\
                [TR][td][size=75]"+trainee+"[/size][/td]\n\
                [td][size=75]"+date+"[/size][/td][/tr][/table][line][/line]\n\
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

</body>
<?php include 'footer.php' ?>
</html>
