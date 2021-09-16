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
                                <strong>Rates</strong>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="attitude-tab" data-toggle="tab" href="#attitude" role="tab" aria-controls="attitude" aria-selected="true">Attitude</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="relationships-tab" data-toggle="tab" href="#relationships" role="tab" aria-controls="city-relationships" aria-selected="false">Relationships</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="performance-tab" data-toggle="tab" href="#performance" role="tab" aria-controls="performance" aria-selected="false">Performance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="roleplay-quality-tab" data-toggle="tab" href="#roleplay-quality" role="tab" aria-controls="roleplay-quality" aria-selected="false">Roleplay Quality</a>
                                    </li>
                                </ul>
                                <div class="tab-content mytab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="attitude" role="tabpanel" aria-labelledby="attitude-tab">
                                        <table class="table table-responsive">
                                            <thead>
                                                <tr>
                                                    <td style="width: 52px; height: 34px;"></td>
                                                    <td style="width: 474px; height: 34px;"></td>
                                                    <td style="width: 69px; height: 34px;"><strong><a data-toggle="tooltip" title="Bad">1</a></strong></td>
                                                    <td style="width: 68px; height: 34px;"><strong><a data-toggle="tooltip" title="Needs Improvement">2</a></strong></td>
                                                    <td style="width: 68px; height: 34px;"><strong><a data-toggle="tooltip" title="Good">3</a></strong></span></td>
                                                    <td style="width: 69px; height: 34px;"><strong><a data-toggle="tooltip" title="Excellent">4</a></strong></td>
                                            </thead>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>1</strong></td>
                                                <td style="width: 474px; height: 35px;">Acceptance of Feedback/FTO/FTP</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a1"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b1"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c1"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d1"></td>
                                            </tr>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>2</strong></td>
                                                <td style="width: 474px; height: 35px;">Integrity/Ethics</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a2"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b2"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c2"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d2"></td>
                                            </tr>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>3</strong></td>
                                                <td style="width: 474px; height: 35px;">Leadership</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a3"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b3"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c3"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d3"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="relationships" role="tabpanel" aria-labelledby="relationships-tab">
                                        <table class="table table-responsive">
                                          <thead>
                                              <tr>
                                                  <td style="width: 52px; height: 34px;"></td>
                                                  <td style="width: 474px; height: 34px;"></td>
                                                  <td style="width: 69px; height: 34px;"><strong><a data-toggle="tooltip" title="Bad">1</a></strong></td>
                                                  <td style="width: 68px; height: 34px;"><strong><a data-toggle="tooltip" title="Needs Improvement">2</a></strong></td>
                                                  <td style="width: 68px; height: 34px;"><strong><a data-toggle="tooltip" title="Good">3</a></strong></span></td>
                                                  <td style="width: 69px; height: 34px;"><strong><a data-toggle="tooltip" title="Excellent">4</a></strong></td>
                                          </thead>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>4</strong></td>
                                                <td style="width: 474px; height: 35px;">With Other Department Members</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a4"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b4"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c4"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d4"></td>
                                            </tr>

                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="performance" role="tabpanel" aria-labelledby="performance-tab">
                                        <table class="table table-responsive">
                                          <thead>
                                              <tr>
                                                  <td style="width: 52px; height: 34px;"></td>
                                                  <td style="width: 474px; height: 34px;"></td>
                                                  <td style="width: 69px; height: 34px;"><strong><a data-toggle="tooltip" title="Bad">1</a></strong></td>
                                                  <td style="width: 68px; height: 34px;"><strong><a data-toggle="tooltip" title="Needs Improvement">2</a></strong></td>
                                                  <td style="width: 68px; height: 34px;"><strong><a data-toggle="tooltip" title="Good">3</a></strong></span></td>
                                                  <td style="width: 69px; height: 34px;"><strong><a data-toggle="tooltip" title="Excellent">4</a></strong></td>
                                          </thead>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>5</strong></td>
                                                <td style="width: 474px; height: 35px;">Cohesively Upskill Others</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a5"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b5"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c5"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d5"></td>
                                            </tr>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>6</strong></td>
                                                <td style="width: 474px; height: 35px;">Courteously Lecture Others</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a6"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b6"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c6"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d6"></td>
                                            </tr>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>7</strong></td>
                                                <td style="width: 474px; height: 35px;">Successfully Instruct Others</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a7"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b7"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c7"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d7"></td>
                                            </tr>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>8</strong></td>
                                                <td style="width: 474px; height: 35px;">Dispense Constructive Feedback</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a8"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b8"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c8"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d8"></td>
                                            </tr>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>9</strong></td>
                                                <td style="width: 474px; height: 35px;">Maintain a Respectful Demeanor with Others</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a9"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b9"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c9"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d9"></td>
                                            </tr>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>10</strong></td>
                                                <td style="width: 474px; height: 35px;">Professionally Handle Mistakes Committed by Others</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a10"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b10"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c10"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d10"></td>
                                            </tr>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>11</strong></td>
                                                <td style="width: 474px; height: 35px;">Teaching Methodology: Willingness to Teach</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a11"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b11"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c11"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d11"></td>
                                            </tr>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>12</strong></td>
                                                <td style="width: 474px; height: 35px;">Teaching Methodology: Methods of Teaching</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a12"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b12"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c12"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d12"></td>
                                            </tr>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>13</strong></td>
                                                <td style="width: 474px; height: 35px;">Teaching Methodology: Being a Role-Model</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a13"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b13"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c13"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d13"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="roleplay-quality" role="tabpanel" aria-labelledby="roleplay-quality-tab">
                                        <table class="table table-responsive">
                                          <thead>
                                              <tr>
                                                  <td style="width: 52px; height: 34px;"></td>
                                                  <td style="width: 474px; height: 34px;"></td>
                                                  <td style="width: 69px; height: 34px;"><strong><a data-toggle="tooltip" title="Bad">1</a></strong></td>
                                                  <td style="width: 68px; height: 34px;"><strong><a data-toggle="tooltip" title="Needs Improvement">2</a></strong></td>
                                                  <td style="width: 68px; height: 34px;"><strong><a data-toggle="tooltip" title="Good">3</a></strong></span></td>
                                                  <td style="width: 69px; height: 34px;"><strong><a data-toggle="tooltip" title="Excellent">4</a></strong></td>
                                          </thead>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>14</strong></td>
                                                <td style="width: 474px; height: 35px;">Roleplay Quality</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a14"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b14"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c14"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d14"></td>
                                            </tr>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>15</strong></td>
                                                <td style="width: 474px; height: 35px;">Character Depth/Portrayal</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a15"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b15"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c15"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d15"></td>
                                            </tr>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>16</strong></td>
                                                <td style="width: 474px; height: 35px;">Encouraging Passive Roleplay</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a16"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b16"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c16"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d16"></td>
                                            </tr>
                                            <tr style="height: 35px;">
                                                <td style="width: 52px; height: 35px;"><strong>17</strong></td>
                                                <td style="width: 474px; height: 35px;">Out-of-Character Demeanor</td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="a17"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="b17"></td>
                                                <td style="width: 68px; height: 35px;"><input type="checkbox" id="c17"></td>
                                                <td style="width: 69px; height: 35px;"><input type="checkbox" id="d17"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End of RATES card-->
                        <br />
                        <div class="card">
                            <div class="card-header">
                                <strong>Written Evaluation</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Most Satisfactory Performance</label>
                                        <textarea class="form-control col-sm-6" id="form_mostSatPerformance" onkeyup="this.value = this.value.toUpperCase();"></textarea>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Least Satisfactory Performance</label>
                                        <textarea class="form-control col-sm-6" id="form_leastSatPerformance" onkeyup="this.value = this.value.toUpperCase();"></textarea>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Situations</label>
                                        <textarea class="form-control col-sm-6" id="form_situations" onkeyup="this.value = this.value.toUpperCase();"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Written Eval card-->
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>General Information</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Deputy Name</label>
                                        <input class="form-control col-sm-6" type="text" id="form_trainName" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Badge Number</label>
                                        <input class="form-control col-sm-6" type="number" id="form_trainBadgeNumber">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Date</label>
                                        <input class="form-control col-sm-6" type="date" id="form_date">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Time</label>
                                        <input class="form-control col-sm-6" type="time" id="form_time">
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
            <style>
                .nav-mytabs {
                  margin-top: 2rem;
                }

                .nav-mytabs li:not(:last-child) {
                  margin-right: 7px;
                }

                .nav-mytabs a {
                  position: relative;
                  top: 4px;
                  padding: 10px 25px;
                  border-radius: 2px 2px 0 0;
                  background: white;
                  color: black;
                  opacity: 0.7;
                  transition: all 0.1s ease-in-out;
                }

                .nav-mytabs a.active,
                .nav-mytabs a:hover {
                  opacity: 1;
                  top: 0;
                }

                .mytab-content {
                  position: relative;
                  z-index: 2;
                  padding: 25px;
                  border-radius: 0 4px 4px 4px;
                  background: white;
                }
            </style>

            <script type="text/javascript">

                // Tooltips for the explanations (in tables)
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();
                });

                function process() {
                  var date = document.getElementById("form_date").value;
                  var time = document.getElementById("form_time").value;
                  var trainName = document.getElementById("form_trainName").value;
                  var trainBadgeNumber = document.getElementById("form_trainBadgeNumber").value;
                  var ftoSacName = "<?php echo $_SESSION['user']->game_name; ?>";
                  var ftoSacBadgeNumber = "<?php echo $_SESSION['user']->badge_no; ?>"
                  var mostSatPerformance = document.getElementById("form_mostSatPerformance").value;
                  var leastSatPerformance = document.getElementById("form_leastSatPerformance").value;
                  var situations = document.getElementById("form_situations").value;

                  var a1 = document.getElementById("a1").checked || "test";
                  console.log(a1);
                  var b1 = document.getElementById("b1").checked;
                  var c1 = document.getElementById("c1").checked;
                  var d1 = document.getElementById("d1").checked;
                  var a2 = document.getElementById("a2").checked;
                  var b2 = document.getElementById("b2").checked;
                  var c2 = document.getElementById("c2").checked;
                  var d2 = document.getElementById("d2").checked;
                  var a3 = document.getElementById("a3").checked;
                  var b3 = document.getElementById("b3").checked;
                  var c3 = document.getElementById("c3").checked;
                  var d3 = document.getElementById("d3").checked;
                  var a4 = document.getElementById("a4").checked;
                  var b4 = document.getElementById("b4").checked;
                  var c4 = document.getElementById("c4").checked;
                  var d4 = document.getElementById("d4").checked;
                  var a5 = document.getElementById("a5").checked;
                  var b5 = document.getElementById("b5").checked;
                  var c5 = document.getElementById("c5").checked;
                  var d5 = document.getElementById("d5").checked;
                  var a6 = document.getElementById("a6").checked;
                  var b6 = document.getElementById("b6").checked;
                  var c6 = document.getElementById("c6").checked;
                  var d6 = document.getElementById("d6").checked;
                  var a7 = document.getElementById("a7").checked;
                  var b7 = document.getElementById("b7").checked;
                  var c7 = document.getElementById("c7").checked;
                  var d7 = document.getElementById("d7").checked;
                  var a8 = document.getElementById("a8").checked;
                  var b8 = document.getElementById("b8").checked;
                  var c8 = document.getElementById("c8").checked;
                  var d8 = document.getElementById("d8").checked;
                  var a9 = document.getElementById("a9").checked;
                  var b9 = document.getElementById("b9").checked;
                  var c9 = document.getElementById("c9").checked;
                  var d9 = document.getElementById("d9").checked;
                  var a10 = document.getElementById("a10").checked;
                  var b10 = document.getElementById("b10").checked;
                  var c10 = document.getElementById("c10").checked;
                  var d10 = document.getElementById("d10").checked;
                  var a11 = document.getElementById("a11").checked;
                  var b11 = document.getElementById("b11").checked;
                  var c11 = document.getElementById("c11").checked;
                  var d11 = document.getElementById("d11").checked;
                  var a12 = document.getElementById("a12").checked;
                  var b12 = document.getElementById("b12").checked;
                  var c12 = document.getElementById("c12").checked;
                  var d12 = document.getElementById("d12").checked;
                  var a13 = document.getElementById("a13").checked;
                  var b13 = document.getElementById("b13").checked;
                  var c13 = document.getElementById("c13").checked;
                  var d13 = document.getElementById("d13").checked;
                  var a14 = document.getElementById("a14").checked;
                  var b14 = document.getElementById("b14").checked;
                  var c14 = document.getElementById("c14").checked;
                  var d14 = document.getElementById("d14").checked;
                  var a15 = document.getElementById("a15").checked;
                  var b15 = document.getElementById("b15").checked;
                  var c15 = document.getElementById("c15").checked;
                  var d15 = document.getElementById("d15").checked;
                  var a16 = document.getElementById("a16").checked;
                  var b16 = document.getElementById("b16").checked;
                  var c16 = document.getElementById("c16").checked;
                  var d16 = document.getElementById("d16").checked;
                  var a17 = document.getElementById("a17").checked;
                  var b17 = document.getElementById("b17").checked;
                  var c17 = document.getElementById("c17").checked;
                  var d17 = document.getElementById("d17").checked;

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

                if (a11 == true) {
                  a11 = "[todo_done][/todo_done]";
                } else {
                  a11 = "[todo=][/todo]"
                }

                if (b11 == true) {
                  b11 = "[todo_done][/todo_done]";
                } else {
                  b11 = "[todo=][/todo]"
                }

                if (c11 == true) {
                  c11 = "[todo_done][/todo_done]";
                } else {
                  c11 = "[todo=][/todo]"
                }

                if (d11 == true) {
                  d11 = "[todo_done][/todo_done]";
                } else {
                  d11 = "[todo=][/todo]"
                }

                if (a12 == true) {
                  a12 = "[todo_done][/todo_done]";
                } else {
                  a12 = "[todo=][/todo]"
                }

                if (b12 == true) {
                  b12 = "[todo_done][/todo_done]";
                } else {
                  b12 = "[todo=][/todo]"
                }

                if (c12 == true) {
                  c12 = "[todo_done][/todo_done]";
                } else {
                  c12 = "[todo=][/todo]"
                }

                if (d12 == true) {
                  d12 = "[todo_done][/todo_done]";
                } else {
                  d12 = "[todo=][/todo]"
                }

                if (a13 == true) {
                  a13 = "[todo_done][/todo_done]";
                } else {
                  a13 = "[todo=][/todo]"
                }

                if (b13 == true) {
                  b13 = "[todo_done][/todo_done]";
                } else {
                  b13 = "[todo=][/todo]"
                }

                if (c13 == true) {
                  c13 = "[todo_done][/todo_done]";
                } else {
                  c13 = "[todo=][/todo]"
                }

                if (d13 == true) {
                  d13 = "[todo_done][/todo_done]";
                } else {
                  d13 = "[todo=][/todo]"
                }

                if (a14 == true) {
                  a14 = "[todo_done][/todo_done]";
                } else {
                  a14 = "[todo=][/todo]"
                }

                if (b14 == true) {
                  b14 = "[todo_done][/todo_done]";
                } else {
                  b14 = "[todo=][/todo]"
                }

                if (c14 == true) {
                  c14 = "[todo_done][/todo_done]";
                } else {
                  c14 = "[todo=][/todo]"
                }

                if (d14 == true) {
                  d14 = "[todo_done][/todo_done]";
                } else {
                  d14 = "[todo=][/todo]"
                }

                if (a15 == true) {
                  a15 = "[todo_done][/todo_done]";
                } else {
                  a15 = "[todo=][/todo]"
                }

                if (b15 == true) {
                  b15 = "[todo_done][/todo_done]";
                } else {
                  b15 = "[todo=][/todo]"
                }

                if (c15 == true) {
                  c15 = "[todo_done][/todo_done]";
                } else {
                  c15 = "[todo=][/todo]"
                }

                if (d15 == true) {
                  d15 = "[todo_done][/todo_done]";
                } else {
                  d15 = "[todo=][/todo]"
                }

                if (a16 == true) {
                  a16 = "[todo_done][/todo_done]";
                } else {
                  a16 = "[todo=][/todo]"
                }

                if (b16 == true) {
                  b16 = "[todo_done][/todo_done]";
                } else {
                  b16 = "[todo=][/todo]"
                }

                if (c16 == true) {
                  c16 = "[todo_done][/todo_done]";
                } else {
                  c16 = "[todo=][/todo]"
                }

                if (d16 == true) {
                  d16 = "[todo_done][/todo_done]";
                } else {
                  d16 = "[todo=][/todo]"
                }

                if (a17 == true) {
                  a17 = "[todo_done][/todo_done]";
                } else {
                  a17 = "[todo=][/todo]"
                }

                if (b17 == true) {
                  b17 = "[todo_done][/todo_done]";
                } else {
                  b17 = "[todo=][/todo]"
                }

                if (c17 == true) {
                  c17 = "[todo_done][/todo_done]";
                } else {
                  c17 = "[todo=][/todo]"
                }

                if (d17 == true) {
                  d17 = "[todo_done][/todo_done]";
                } else {
                  d17 = "[todo=][/todo]"
                }

                  var format = `[divbox=white][b][size=80][aligntable=center,0,255,0,0,0]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT[/aligntable][/size][/b]
[aligntable=right,0,0,0,0,0][size=80]SH-FT-320[/size][/ALIGNTABLE][aligntable=center,0,190,0,0,0][b][size=80]FIELD TRAINING OFFICER PATROL — FIELD TRAINING PROGRAM[/size][/b][/aligntable]
[line][/line]
[table]
[tr]
[td][size=75][b]REPORT DATE[/b][/size][/td]
[td][size=75][b]REPORT TIME[/b][/size][/td][/tr]
[tr]
[td][size=75]`+date+`[/size][/td]
[td][size=75]`+time+`[/size][/td]
[/tr]
[/table][line][/line]
[table]
[tr]
[td][size=75][b]DEPUTY NAME[/b][/size][/td]
[td][size=75][b]EMPLOYEE NUMBER[/b][/size][/td]
[td][size=75][b]FTP SAC NAME[/b][/size][/td]
[td][size=75][b]EMPLOYEE NUMBER[/b][/size][/td][/tr]
[tr]
[td][size=75]`+trainName+`[/size][/TD]
[td][size=75]`+trainBadgeNumber+`[/size][/TD]
[td][size=75]`+ftoSacName+`[/size][/TD]
[td][size=75]`+ftoSacBadgeNumber+`[/size][/TD][/tr][/table][line][/line]
[table]
[tr]
[td][size=75][b][center]CATEGORICAL EVALUATION[/center][/b][/size][/td][/tr][/table][line][/line]
[table]
[tr]
[td][size=75][justify][b]INSTRUCTIONS:[/b] A rating of C (Competent) is the minimum acceptable score within each category to meet the standard for field training officer. Every encountered incident shall be noted as a Documented Situation (DS) with the performance of the prospective FTO stated explicitly. Check N/O if behavior is Not Observed or N/I if prospective FTO requires improvement in a partircular field. A completed and signed Narrative Evaluation must be attached.[/justify][/size][/td][/tr][/table][line][/line]
[table]
[tr]
[td][size=75][b]ATTITUDE[/b][/size][/td]
[td][center][size=75][b]1[/b][/size][/center][/td]
[td][center][size=75][b]2[/b][/size][/center][/td]
[td][center][size=75][b]3[/b][/size][/center][/td]
[td][center][size=75][b]4[/b][/size][/center][/td]
[/tr]
[tr]
[td][size=75]1. Acceptance of Feedback[/size][/td]
[td][center]`+a1+`[/center][/td]
[td][center]`+b1+`[/center][/td]
[td][center]`+c1+`[/center][/td]
[td][center]`+d1+`[/center][/td]
[/tr]
[tr]
[td][size=75]2. Integrity/Ethics[/size][/td]
[td][center]`+a2+`[/center][/td]
[td][center]`+b2+`[/center][/td]
[td][center]`+c2+`[/center][/td]
[td][center]`+d2+`[/center][/td]
[/tr]
[tr]
[td][size=75]3. Leadership[color=#FFFFFF]-----------------------------------------------------[/color][/size][/td]
[td][center]`+a3+`[/center][/td]
[td][center]`+b3+`[/center][/td]
[td][center]`+c3+`[/center][/td]
[td][center]`+d3+`[/center][/td]
[/tr][/table]
[line][/line]
[table]
[tr]
[td][size=75][b]RELATIONSHIPS[/b][/size][/td]
[td][center][size=75][b]1[/b][/size][/center][/td]
[td][center][size=75][b]2[/b][/size][/center][/td]
[td][center][size=75][b]3[/b][/size][/center][/td]
[td][center][size=75][b]4[/b][/size][/center][/td]
[/tr]
[tr]
[td][size=75]4. With Other Department Members[color=#FFFFFF]--------------------------[/color][/size][/td]
[td][center]`+a4+`[/center][/td]
[td][center]`+b4+`[/center][/td]
[td][center]`+c4+`[/center][/td]
[td][center]`+d4+`[/center][/td]
[/tr][/table]
[line][/line]
[table]
[tr]
[td][size=75][b]PERFORMANCE[/b][/size][/td]
[td][center][size=75][b]1[/b][/size][/center][/td]
[td][center][size=75][b]2[/b][/size][/center][/td]
[td][center][size=75][b]3[/b][/size][/center][/td]
[td][center][size=75][b]4[/b][/size][/center][/td]
[/tr]
[tr]
[td][size=75]5. Cohesively Upskill Others[/size][/td]
[td][center]`+a5+`[/center][/td]
[td][center]`+b5+`[/center][/td]
[td][center]`+c5+`[/center][/td]
[td][center]`+d5+`[/center][/td]
[/tr]
[tr]
[td][size=75]6. Courteously Lecture Others[/size][/td]
[td][center]`+a6+`[/center][/td]
[td][center]`+b6+`[/center][/td]
[td][center]`+c6+`[/center][/td]
[td][center]`+d6+`[/center][/td]
[/tr]
[tr]
[td][size=75]7. Successfully Instruct Others[/size][/td]
[td][center]`+a7+`[/center][/td]
[td][center]`+b7+`[/center][/td]
[td][center]`+c7+`[/center][/td]
[td][center]`+d7+`[/center][/td]
[/tr]
[tr]
[td][size=75]8. Dispense Constructive Feedback[/size][/td]
[td][center]`+a8+`[/center][/td]
[td][center]`+b8+`[/center][/td]
[td][center]`+c8+`[/center][/td]
[td][center]`+d8+`[/center][/td]
[/tr]
[tr]
[td][size=75]9. Maintain a Respectful Demeanor with Others[/size][/td]
[td][center]`+a9+`[/center][/td]
[td][center]`+b9+`[/center][/td]
[td][center]`+c9+`[/center][/td]
[td][center]`+d9+`[/center][/td]
[/tr]
[tr]
[td][size=75]10. Professionally Handle Mistakes Committed by Others[/size][/td]
[td][center]`+a10+`[/center][/td]
[td][center]`+b10+`[/center][/td]
[td][center]`+c10+`[/center][/td]
[td][center]`+d10+`[/center][/td]
[/tr]
[tr]
[td][size=75]11. Teaching Methodology: Willingness to Teach[/size][/td]
[td][center]`+a11+`[/center][/td]
[td][center]`+b11+`[/center][/td]
[td][center]`+c11+`[/center][/td]
[td][center]`+d11+`[/center][/td]
[/tr]
[tr]
[td][size=75]12. Teaching Methodology: Methods of Teachng[/size][/td]
[td][center]`+a12+`[/center][/td]
[td][center]`+b12+`[/center][/td]
[td][center]`+c12+`[/center][/td]
[td][center]`+d12+`[/center][/td]
[/tr]
[tr]
[td][size=75]13. Teaching Methodology: Being a Role-Model[/size][/td]
[td][center]`+a13+`[/center][/td]
[td][center]`+b13+`[/center][/td]
[td][center]`+c13+`[/center][/td]
[td][center]`+d13+`[/center][/td]
[/tr][/table][line][/line]
[table]
[tr]
[td][size=75][b](( ROLEPLAY QUALITY ))[/b][/size][/td]
[td][center][size=75][b]1[/b][/size][/center][/td]
[td][center][size=75][b]2[/b][/size][/center][/td]
[td][center][size=75][b]3[/b][/size][/center][/td]
[td][center][size=75][b]4[/b][/size][/center][/td]
[/tr]
[tr]
[td][size=75]14. Roleplay Quality[/size][/td]
[td][center]`+a14+`[/center][/td]
[td][center]`+b14+`[/center][/td]
[td][center]`+c14+`[/center][/td]
[td][center]`+d14+`[/center][/td]
[/tr]
[tr]
[td][size=75]15. Character Depth/Portrayal[color=#FFFFFF]---------------------------------[/color][/size][/td]
[td][center]`+a15+`[/center][/td]
[td][center]`+b15+`[/center][/td]
[td][center]`+c15+`[/center][/td]
[td][center]`+d15+`[/center][/td]
[/tr]
[tr]
[td][size=75]16. Encouraging Passive Roleplay[/size][/td]
[td][center]`+a16+`[/center][/td]
[td][center]`+b16+`[/center][/td]
[td][center]`+c16+`[/center][/td]
[td][center]`+d16+`[/center][/td]
[/tr]
[tr]
[td][size=75]17. Out-of-Character Demeanor[/size][/td]
[td][center]`+a17+`[/center][/td]
[td][center]`+b17+`[/center][/td]
[td][center]`+c17+`[/center][/td]
[td][center]`+d17+`[/center][/td]
[/tr][/table][line][/line]
[table]
[tr]
[td][size=75][b][center]NARRATIVE EVALUATION[/center][/b][/size][/td][/tr][/table][line][/line]
[table]
[tr]
[td][size=75][justify][b]INSTRUCTIONS:[/b] Parts A & B – Based on the completed report, determine the prospective deputy's MOST and LEAST satisfactory performance. Part C – Provide a narrative of each documented situation that you and the prospective deputy encountered during the patrol. [/justify][/size][/td][/tr][/table][line][/line]
[table]
[tr][td][size=75][b]PART A. MOST SATISFACTORY PERFORMANCE[/b][/size][/TD][/TR]
[tr][td][size=75]`+mostSatPerformance+`[/size][/TD][/TR][/table][line][/line]
[table]
[tr][td][size=75][b]PART B. LEAST SATISFACTORY PERFORMANCE[/b][/size][/TD][/TR]
[tr][td][size=75]`+leastSatPerformance+`[/size][/TD][/TR][/table][line][/line]
[table]
[tr][td][size=75][b]PART C. DOCUMENTED SITUATIONS (DS)[/b][/size][/TD][/TR]
[tr][td][size=75]`+situations+`[/size][/TD][/TR][/table][line][/line]
[table]
[tr]
[td][size=75][b][center]SIGNATURES[/center][/b][/size][/td][/tr][/table][line][/line]
[table]
[tr]
[td][size=75][b]DEPUTY SIGNATURE[/b][/size][/td]
[td][size=75][b]DATE[/b][/size][/td][/tr]
[tr]
[td][size=75]`+trainName+`[/size][/TD]
[td][size=75]`+date+`[/size][/TD][/tr]
[tr]
[td][size=75][b]FTP ADMINISTRATION SIGNATURE[/b][/size][/td]
[td][size=75][b]DATE[/b][/size][/td][/tr]
[tr]
[td][size=75]SIGNATURE[/size][/TD]
[td][size=75]DATE (00.00.0000)[/size][/TD][/tr][/table]
[line][/line][/divbox]
`;

                  document.getElementById("finish").value = format;
                  }

                $(document).ready(() => {
                  let url = location.href.replace(/\/$/, "");

                  if (location.hash) {
                      const hash = url.split("#");
                      $('#myTab a[href="#'+hash[1]+'"]').tab("show");
                      url = location.href.replace(/\/#/, "#");
                      history.replaceState(null, null, url);
                      setTimeout(() => {
                        $(window).scrollTop(0);
                      }, 400);
                    }

                  $('a[data-toggle="tab"]').on("click", function() {
                    let newUrl;
                    const hash = $(this).attr("href");
                    if(hash == "#home") {
                      newUrl = url.split("#")[0];
                    } else {
                      newUrl = url.split("#")[0] + hash;
                    }
                    newUrl += "/";
                    history.replaceState(null, null, newUrl);
                  });
                });
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
