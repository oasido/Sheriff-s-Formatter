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
                                <strong>Collision Information</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                      <label class="col-sm-4 col-form-label">Type</label>
                                      <select class="selectpicker form-control col-sm-6" id="type" multiple="multiple">
                                          <option id="b1">Head On</option>
                                          <option id="b2">Side Swipe</option>
                                          <option id="b3">Rear End</option>
                                          <option id="b4" data-subtext="T Bone">Broadside</option>
                                          <option id="b5">Hit Object</option>
                                          <option id="b6">Overturned</option>
                                          <option id="b7">Vehicle/Pedestrian</option>
                                          <option id="b8">Other</option>
                                      </select>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Location</label>
                                          <input class="form-control col-sm-6" type="text" id="location">
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Time</label>
                                          <input class="form-control col-sm-6 datepicker-here" id="time" data-timepicker="true" data-language='en' />
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                      <label class="col-sm-4 col-form-label">Weather</label>
                                      <select class="selectpicker form-control col-sm-6" id="weather" multiple="multiple" data-max-options="1">
                                          <option id="w1">Clear</option>
                                          <option id="w2">Cloudy</option>
                                          <option id="w3">Raining</option>
                                          <option id="w4">Snowing</option>
                                          <option id="w5">Fog</option>
                                          <option id="w6">Other</option>
                                      </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>General Information</strong>
                            </div>
                            <div class="card-body">
                              <div class="form-inline">
                                  <div class="col-md-12 form-group">
                                      <label class="col-sm-4 col-form-label">Your Call-Sign</label>
                                        <input class="form-control col-sm-6" id="callsign" type="text"/>
                                      </select>
                                  </div>
                              </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Supervisor Name</label>
                                        <input class="form-control col-sm-6" type="text" id="supervisorSignature">
                                    </div>
                                </div>
                                <br>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Narrative</label>
                                        <textarea class="form-control col-sm-6" rows="5" id="narrative"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <center>
                <div class="col">
                  <div class="col-sm-12 col-md-12 col-lg-9">
                    <!-- <div class="card">
                        <div class="card-header">
                            <strong>Tables</strong>
                        </div>
                        <div class="card-body"> -->
                          <div class="table-responsive">
                            <h5>Vehicles Involved</h5>
                              <table class="table" id="vehicles">
                                  <thead>
                                      <tr>
                                          <th>Model</th>
                                          <th>Color</th>
                                          <th>License No.</th>
                                          <th>Insurance</th>
                                          <th>Person Related</th>
                                      </tr>
                                  </thead>
                                  <tbody></tbody>
                              </table>
                              <center>
                                  <button class="btn btn-outline-primary" onclick="addRowVeh()">Add Vehicle</button>
                              </center>
                          </div>
                          <br><br>
                          <div class="table-responsive">
                            <h5>People Involved</h5>
                              <table class="table" id="persons">
                                  <thead>
                                      <tr>
                                          <th>Role</th>
                                          <th>Last Name</th>
                                          <th>First Name</th>
                                          <th>Race</th>
                                          <th>Gender</th>
                                          <th>Injury</th>
                                          <th>Arrest</th>
                                      </tr>
                                  </thead>
                                  <tbody></tbody>
                              </table>
                              <center>
                                  <button class="btn btn-outline-primary" onclick="addRowPerson()">Add Person</button>
                              </center>
                          </div>
                          <br><br>
                          <div class="table-responsive">
                            <h5>Injuries</h5>
                              <table class="table" id="injury">
                                  <thead>
                                      <tr>
                                          <th>Injury Type</th>
                                          <th>Injury Desc.</th>
                                          <th>Hospital</th>
                                          <th>Person Related</th>
                                      </tr>
                                  </thead>
                                  <tbody></tbody>
                              </table>
                              <center>
                                  <button class="btn btn-outline-primary" onclick="addRowInjury()">Add Injury</button>
                              </center>
                          </div>
                          <br><br>
                          <div class="table-responsive">
                            <h5>Arrests/Citations</h5>
                              <table class="table" id="arrest">
                                  <thead>
                                      <tr>
                                          <th>Type</th>
                                          <th>Charges</th>
                                          <th>Facility</th>
                                          <th>Person Related</th>
                                      </tr>
                                  </thead>
                                  <tbody></tbody>
                              </table>
                              <center>
                                  <button class="btn btn-outline-primary" onclick="addRowArrest()">Add Arrest</button>
                              </center>
                          <!-- </div>
                        </div> -->
                    </div>
                  </div>
                </div>
                </center>
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
                // add to tables
                $(document).ready(function() {
                addRowVeh();
                addRowPerson();
                addRowInjury();
                addRowArrest();
                });

                // INJURY ADD
                // ADD A NEW ROW TO THE TABLE.
                function addRowInjury() {
                  var empTabInjury = document.getElementById('injury');

                  var rowCntInjury = empTabInjury.rows.length; // GET TABLE ROW COUNT.
                  var trInjury = empTabInjury.insertRow(rowCntInjury); // TABLE ROW.
                  trInjury = empTabInjury.insertRow(rowCntInjury);

                  for (var c = 0; c < 5; c++) {
                    var tdInjury = document.createElement('td'); // TABLE DEFINITION.
                    tdInjury = trInjury.insertCell(c);
                    switch (c) {
                      case 0:
                        {
                          var injuryselected = document.createElement("select");
                          injuryselected.setAttribute("class", "form-control");

                          var noneInjury = document.createElement("option");
                          noneInjury.setAttribute("disabled", "");
                          noneInjury.setAttribute("selected", "");
                          noneInjury.setAttribute("value", "");
                          noneInjury.text = "";

                          var minor = document.createElement("option");
                          minor.text = "Minor";

                          var moderate = document.createElement("option");
                          moderate.text = "Moderate";

                          var major = document.createElement("option");
                          major.text = "Major";

                          var fatal = document.createElement("option");
                          fatal.text = "Fatal";

                          injuryselected.add(noneInjury);
                          injuryselected.add(minor);
                          injuryselected.add(moderate);
                          injuryselected.add(major);
                          injuryselected.add(fatal);

                          tdInjury.appendChild(injuryselected);
                          break;
                        }

                      case 1:
                        {
                          var injDesc = document.createElement("input");
                          injDesc.setAttribute("class", 'form-control');
                          tdInjury.appendChild(injDesc);
                          break;
                        }

                      case 2:
                        {
                          var hospital = document.createElement("input");
                          hospital.setAttribute("class", 'form-control');
                          tdInjury.appendChild(hospital);
                          break;
                        }

                      case 3:
                        {
                          var personrelatedinjury = document.createElement("input");
                          personrelatedinjury.setAttribute("class", 'form-control');
                          tdInjury.appendChild(personrelatedinjury);
                          break;
                        }

                      case 4:
                        {
                          var button = document.createElement("input");
                          button.setAttribute('type', 'button');
                          button.setAttribute('value', 'Remove');
                          button.setAttribute("class", "btn btn-danger btn-sm");

                          // ADD THE BUTTON's 'onclick' EVENT.
                          button.setAttribute('onclick', 'removeRowInjury(this)');
                          tdInjury.appendChild(button);
                          break;
                        }
                    }
                  }
                }

                // DELETE TABLE ROW.
                function removeRowInjury(oButton) {
                  var empTabInjury = document.getElementById('injury');
                  empTabInjury.deleteRow(oButton.parentNode.parentNode.rowIndex); // BUTTON -> TD -> TR.
                }
                // END OF INJURY ADD

                // ARREST ADD
                // ADD A NEW ROW TO THE TABLE.
                function addRowArrest() {
                  var empTabArrest = document.getElementById('arrest');

                  var rowCntArrest = empTabArrest.rows.length; // GET TABLE ROW COUNT.
                  var trArrest = empTabArrest.insertRow(rowCntArrest); // TABLE ROW.
                  trArrest = empTabArrest.insertRow(rowCntArrest);

                  for (var c = 0; c < 5; c++) {
                    var tdArrest = document.createElement('td'); // TABLE DEFINITION.
                    tdArrest = trArrest.insertCell(c);
                    switch (c) {
                      case 0:
                        {
                          var typeofarrest = document.createElement("select");
                          typeofarrest.setAttribute("class", "form-control");

                          var noneType = document.createElement("option");
                          noneType.setAttribute("disabled", "");
                          noneType.setAttribute("selected", "");
                          noneType.setAttribute("value", "");
                          noneType.text = "";


                          var citation = document.createElement("option");
                          citation.text = "Citation";

                          var misdemeanor = document.createElement("option");
                          misdemeanor.text = "Misdemeanor";

                          var felony = document.createElement("option");
                          felony.text = "Felony";

                          typeofarrest.add(noneType);
                          typeofarrest.add(citation);
                          typeofarrest.add(misdemeanor);
                          typeofarrest.add(felony);

                          tdArrest.appendChild(typeofarrest);
                          break;
                        }

                      case 1:
                        {
                          var chargesfiled = document.createElement("input");
                          chargesfiled.setAttribute("class", 'form-control');
                          tdArrest.appendChild(chargesfiled);
                          break;
                        }

                      case 2:
                        {
                          var facility = document.createElement("select");
                          facility.setAttribute("class", "form-control");

                          var noneAT = document.createElement("option");
                          noneAT.setAttribute("disabled", "");
                          noneAT.setAttribute("selected", "");
                          noneAT.setAttribute("value", "");
                          noneAT.text = "";

                          var lscounty = document.createElement("option");
                          lscounty.text = "LS County";

                          var jail = document.createElement("option");
                          jail.text = "Jail";

                          var sadcr = document.createElement("option");
                          sadcr.text = "SADCR";

                          facility.add(noneAT);
                          facility.add(lscounty);
                          facility.add(jail);
                          facility.add(sadcr);

                          tdArrest.appendChild(facility);
                          break;
                        }

                      case 3:
                        {
                          var personrelatedarrest = document.createElement("input");
                          personrelatedarrest.setAttribute("class", 'form-control');
                          tdArrest.appendChild(personrelatedarrest);
                          break;
                        }

                      case 4:
                        {
                          var button = document.createElement("input");
                          button.setAttribute('type', 'button');
                          button.setAttribute('value', 'Remove');
                          button.setAttribute("class", "btn btn-danger btn-sm");

                          // ADD THE BUTTON's 'onclick' EVENT.
                          button.setAttribute('onclick', 'removeRowArrest(this)');
                          tdArrest.appendChild(button);
                          break;
                        }
                    }
                  }
                }

                // DELETE TABLE ROW.
                function removeRowArrest(oButton) {
                  var empTabArrest = document.getElementById('arrest');
                  empTabArrest.deleteRow(oButton.parentNode.parentNode.rowIndex); // BUTTON -> TD -> TR.
                }
                // END OF ARREST ADD

                // PERSON ADD
                // ADD A NEW ROW TO THE TABLE.
                function addRowPerson() {
                  var empTabPerson = document.getElementById('persons');

                  var rowCntPerson = empTabPerson.rows.length; // GET TABLE ROW COUNT.
                  var trPerson = empTabPerson.insertRow(rowCntPerson); // TABLE ROW.
                  trPerson = empTabPerson.insertRow(rowCntPerson);

                  for (var c = 0; c < 8; c++) {
                    var tdPerson = document.createElement('td'); // TABLE DEFINITION.
                    tdPerson = trPerson.insertCell(c);
                    switch (c) {
                      case 0:
                        {
                          var position = document.createElement("select");
                          position.setAttribute("class", "form-control");

                          var nonePos = document.createElement("option");
                          nonePos.setAttribute("disabled", "");
                          nonePos.setAttribute("selected", "");
                          nonePos.setAttribute("value", "");
                          nonePos.text = "";

                          var driver = document.createElement("option");
                          driver.text = "Driver";

                          var passenger = document.createElement("option");
                          passenger.text = "Passenger";

                          var pedestrian = document.createElement("option");
                          pedestrian.text = "Pedestrian";

                          var motorcyclist = document.createElement("option");
                          motorcyclist.text = "Motorcyclist";

                          var bicyclist = document.createElement("option");
                          bicyclist.text = "Bicyclist";

                          position.add(nonePos);
                          position.add(driver);
                          position.add(passenger);
                          position.add(pedestrian);
                          position.add(motorcyclist);
                          position.add(bicyclist);

                          tdPerson.appendChild(position);
                          break;
                        }

                      case 1:
                        {
                          var fname = document.createElement("input");
                          fname.setAttribute("class", 'form-control');
                          tdPerson.appendChild(fname);
                          break;
                        }

                      case 2:
                        {
                          var lname = document.createElement("input");
                          lname.setAttribute("class", 'form-control');
                          tdPerson.appendChild(lname);
                          break;
                        }

                      case 3:
                        {
                          var race = document.createElement("input");
                          race.setAttribute("class", 'form-control');
                          tdPerson.appendChild(race);
                          break;
                        }

                      case 4:
                        {
                          var gender = document.createElement("select");

                          var noneG = document.createElement("option");
                          noneG.setAttribute("disabled", "");
                          noneG.setAttribute("selected", "");
                          noneG.setAttribute("value", "");
                          noneG.text = "";

                          var male = document.createElement("option");
                          male.setAttribute("value", "M");
                          male.text = "Male";

                          var female = document.createElement("option");
                          female.setAttribute("value", "F");
                          female.text = "Female";

                          gender.setAttribute("class", "form-control");
                          gender.add(noneG);
                          gender.add(male);
                          gender.add(female);

                          tdPerson.appendChild(gender);
                          break;
                        }

                      case 5:
                        {
                          var injury = document.createElement("select");

                          var noneI = document.createElement("option");
                          noneI.setAttribute("disabled", "");
                          noneI.setAttribute("selected", "");
                          noneI.setAttribute("value", "");
                          noneI.text = "";

                          var yes = document.createElement("option");
                          yes.setAttribute("value", "Y");
                          yes.text = "Yes";

                          var no = document.createElement("option");
                          no.setAttribute("value", "N");
                          no.text = "No";

                          injury.setAttribute("class", "form-control");
                          injury.add(noneI);
                          injury.add(yes);
                          injury.add(no);

                          tdPerson.appendChild(injury);
                          break;
                        }

                      case 6:
                        {
                          var arrest = document.createElement("select");

                          var noneA = document.createElement("option");
                          noneA.setAttribute("disabled", "");
                          noneA.setAttribute("selected", "");
                          noneA.setAttribute("value", "");
                          noneA.text = "";

                          var yesA = document.createElement("option");
                          yesA.setAttribute("value", "Y");
                          yesA.text = "Yes";

                          var noA = document.createElement("option");
                          noA.setAttribute("value", "N");
                          noA.text = "No";

                          arrest.setAttribute("class", "form-control");
                          arrest.add(noneA);
                          arrest.add(yesA);
                          arrest.add(noA);

                          tdPerson.appendChild(arrest);
                          break;
                        }

                      case 7:
                        {
                          var button = document.createElement("input");
                          button.setAttribute('type', 'button');
                          button.setAttribute('value', 'Remove');
                          button.setAttribute("class", "btn btn-danger btn-sm");

                          // ADD THE BUTTON's 'onclick' EVENT.
                          button.setAttribute('onclick', 'removeRowPerson(this)');
                          tdPerson.appendChild(button);
                          break;
                        }
                    }
                  }
                }

                // DELETE TABLE ROW.
                function removeRowPerson(oButton) {
                  var empTabPerson = document.getElementById('persons');
                  empTabPerson.deleteRow(oButton.parentNode.parentNode.rowIndex); // BUTTON -> TD -> TR.
                }
                // END OF PERSON ADD

                // VEHICLE ADD
                // ADD A NEW ROW TO THE TABLE.
                function addRowVeh() {
                  var empTabVeh = document.getElementById('vehicles');

                  var rowCntVeh = empTabVeh.rows.length; // GET TABLE ROW COUNT.
                  var trVeh = empTabVeh.insertRow(rowCntVeh); // TABLE ROW.
                  trVeh = empTabVeh.insertRow(rowCntVeh);

                  for (var c = 0; c < 6; c++) {
                    var tdVeh = document.createElement('td'); // TABLE DEFINITION.
                    tdVeh = trVeh.insertCell(c);
                    switch (c) {
                      case 0:
                        {
                          // ADD A BUTTON.
                          var model = document.createElement("input");
                          model.setAttribute("class", 'form-control');
                          tdVeh.appendChild(model);
                          break;
                        }

                      case 1:
                        {
                          var color = document.createElement("input");
                          color.setAttribute("class", 'form-control');
                          tdVeh.appendChild(color);
                          break;
                        }

                      case 2:
                        {
                          var plates = document.createElement("input");
                          plates.setAttribute("class", 'form-control');
                          tdVeh.appendChild(plates);
                          break;
                        }

                      case 3:
                        {
                          var insurance = document.createElement("select");

                          var noneIns = document.createElement("option");
                          noneIns.setAttribute("disabled", "");
                          noneIns.setAttribute("selected", "");
                          noneIns.setAttribute("value", "");
                          noneIns.text = "";

                          var yes = document.createElement("option");
                          yes.setAttribute("value", "Y");
                          yes.text = "Yes";

                          var no = document.createElement("option");
                          no.setAttribute("value", "N");
                          no.text = "No";

                          insurance.setAttribute("class", "form-control");
                          insurance.add(noneIns);
                          insurance.add(yes);
                          insurance.add(no);

                          tdVeh.appendChild(insurance);
                          break;
                        }

                      case 4:
                        {
                          var related = document.createElement("input");
                          related.setAttribute("class", 'form-control');
                          tdVeh.appendChild(related);
                          break;
                        }

                      case 5:
                        {
                          var button = document.createElement("input");
                          button.setAttribute('type', 'button');
                          button.setAttribute('value', 'Remove');
                          button.setAttribute("class", "btn btn-danger btn-sm");

                          // ADD THE BUTTON's 'onclick' EVENT.
                          button.setAttribute('onclick', 'removeRow(this)');
                          tdVeh.appendChild(button);
                          break;
                        }
                    }
                  }
                }

                // DELETE TABLE ROW.
                function removeRow(oButton) {
                  var empTabVeh = document.getElementById('vehicles');
                  empTabVeh.deleteRow(oButton.parentNode.parentNode.rowIndex); // BUTTON -> TD -> TR.
                }
                // END OF VEHICLE ADD

                function process() {
                    var type = document.getElementById("type").value;
                    var location = document.getElementById("location").value;
                    var fullDateAndTime = document.getElementById("time").value;
                    var weather = document.getElementById("weather").value;
                    var callsign = document.getElementById("callsign").value;
                    var supervisorSignature = document.getElementById("supervisorSignature").value;
                    var narrative = document.getElementById("narrative").value;
                    var deputyName = "<?php echo $_SESSION['user']->game_name; ?>"
                    var badge = "<?php echo $_SESSION['user']->badge_no; ?>"
                    var callsign = document.getElementById("callsign").value;
                    var now = moment();
                    var currentDate = now.format('DD-MMM-YYYY').toUpperCase();

                    // x's
                    if (document.getElementById("b1").selected == true) {
                        b1 = "X";
                    } else {
                        b1 = " ";
                    };
                    if (document.getElementById("b2").selected == true) {
                        b2 = "X";
                    } else {
                        b2 = " ";
                    };
                    if (document.getElementById("b3").selected == true) {
                        b3 = "X";
                    } else {
                        b3 = " ";
                    };
                    if (document.getElementById("b4").selected == true) {
                        b4 = "X";
                    } else {
                        b4 = " ";
                    };
                    if (document.getElementById("b5").selected == true) {
                        b5 = "X";
                    } else {
                        b5 = " ";
                    };
                    if (document.getElementById("b6").selected == true) {
                        b6 = "X";
                    } else {
                        b6 = " ";
                    };
                    if (document.getElementById("b7").selected == true) {
                        b7 = "X";
                    } else {
                        b7 = " ";
                    };
                    if (document.getElementById("b8").selected == true) {
                        b8 = "X";
                    } else {
                        b8 = " ";
                    };
                    // seperator, x's
                    if (document.getElementById("w1").selected == true) {
                        w1 = "X";
                    } else {
                        w1 = " ";
                    };
                    if (document.getElementById("w2").selected == true) {
                        w2 = "X";
                    } else {
                        w2 = " ";
                    };
                    if (document.getElementById("w3").selected == true) {
                        w3 = "X";
                    } else {
                        w3 = " ";
                    };
                    if (document.getElementById("w4").selected == true) {
                        w4 = "X";
                    } else {
                        w4 = " ";
                    };
                    if (document.getElementById("w5").selected == true) {
                        w5 = "X";
                    } else {
                        w5 = " ";
                    };
                    if (document.getElementById("w6").selected == true) {
                        w6 = "X";
                    } else {
                        w6 = " ";
                    };



                    // arrest add process
                    var arrestInformationFinal = "";
                    var myTabArrest = document.getElementById('arrest');
                    for (row = 1; row < myTabArrest.rows.length - 1; row++) {
                      for (c = 0; c < myTabArrest.rows[row].cells.length - 1; c++) { // EACH CELL IN A ROW.
                        switch (c) {
                          case 0:
                            {
                              var element = myTabArrest.rows.item(row).cells[c];
                              arrestInformationFinal += "[tr][td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }

                          case 1:
                            {
                              var element = myTabArrest.rows.item(row).cells[c];
                              arrestInformationFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }

                          case 2:
                            {
                              var element = myTabArrest.rows.item(row).cells[c];
                              arrestInformationFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }

                          case 3:
                            {
                              var element = myTabArrest.rows.item(row).cells[c];
                              arrestInformationFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td][/tr]\n";
                              break;
                            }
                        }
                      }
                    }
                    // end of arrest add process

                    // injury add process
                    var InjuriesFinal = "";
                    var myTabInjuries = document.getElementById('injury');
                    for (row = 1; row < myTabInjuries.rows.length - 1; row++) {
                      for (c = 0; c < myTabInjuries.rows[row].cells.length - 1; c++) { // EACH CELL IN A ROW.
                        switch (c) {
                          case 0:
                            {
                              var element = myTabInjuries.rows.item(row).cells[c];
                              InjuriesFinal += "[tr][td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }

                          case 1:
                            {
                              var element = myTabInjuries.rows.item(row).cells[c];
                              InjuriesFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }

                          case 2:
                            {
                              var element = myTabInjuries.rows.item(row).cells[c];
                              InjuriesFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }

                          case 3:
                            {
                              var element = myTabInjuries.rows.item(row).cells[c];
                              InjuriesFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td][/tr]\n";
                              break;
                            }
                        }
                      }
                    }
                    // end of injury add process

                    // person add process
                    var count = 0;
                    var personsInvolvedFinal = "";
                    var myTabPersons = document.getElementById('persons');
                    for (row = 1; row < myTabPersons.rows.length - 1; row++) {
                      for (c = 0; c < myTabPersons.rows[row].cells.length - 1; c++) { // EACH CELL IN A ROW.
                        switch (c) {
                          case 0:
                            {
                              var element = myTabPersons.rows.item(row).cells[c];
                              count++;
                              personsInvolvedFinal += "[tr][td][size=75]" + count + "[/size][/td]\n";
                              personsInvolvedFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }

                          case 1:
                            {
                              var element = myTabPersons.rows.item(row).cells[c];
                              personsInvolvedFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }

                          case 2:
                            {
                              var element = myTabPersons.rows.item(row).cells[c];
                              personsInvolvedFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }

                          case 3:
                            {
                              var element = myTabPersons.rows.item(row).cells[c];
                              personsInvolvedFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }
                          case 4:
                            {
                              var element = myTabPersons.rows.item(row).cells[c];
                              personsInvolvedFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }
                          case 5:
                            {
                              var element = myTabPersons.rows.item(row).cells[c];
                              personsInvolvedFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }
                          case 6:
                            {
                              var element = myTabPersons.rows.item(row).cells[c];
                              personsInvolvedFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td][/tr]\n";
                              break;
                            }
                        }
                      }
                    }
                    // end of person add process

                    // vehicle add process
                    var vehiclesInvolvedFinal = "";
                    var myTabVeh = document.getElementById('vehicles');
                    for (row = 1; row < myTabVeh.rows.length - 1; row++) {
                      for (c = 0; c < myTabVeh.rows[row].cells.length - 1; c++) { // EACH CELL IN A ROW.
                        switch (c) {
                          case 0:
                            {
                              var element = myTabVeh.rows.item(row).cells[c];
                              vehiclesInvolvedFinal += "[tr][td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }

                          case 1:
                            {
                              var element = myTabVeh.rows.item(row).cells[c];
                              vehiclesInvolvedFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }

                          case 2:
                            {
                              var element = myTabVeh.rows.item(row).cells[c];
                              vehiclesInvolvedFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }

                          case 3:
                            {
                              var element = myTabVeh.rows.item(row).cells[c];
                              vehiclesInvolvedFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                              break;
                            }
                          case 4:
                            {
                              var element = myTabVeh.rows.item(row).cells[c];
                              vehiclesInvolvedFinal += "[td][size=75]" + element.childNodes[0].value + "[/size][/td][/tr]\n";
                              break;
                            }
                        }
                      }
                    }

                    // end of vehicle add process

                    var format = `[divbox=white][font=Arial][center][b][size=80]COUNTY OF LOS SANTOS SHERIFF'S DEPARTMENT[/size][/b][/center][break][/break][aligntable=left,0,12,0,0,0,0][size=87][i]A TRADITION OF SERVICE[/i][/aligntable][aligntable=left,0,121,0,0,0,0]TRAFFIC COLLISION REPORT[/aligntable][aligntable=left,0,150,0,0,0,0][b]DATE:[/b] `+currentDate+`[/aligntable][/size][/font]

                    [font=Arial][b][size=75]1. COLLISION INFORMATION[/size][/b]
                    [size=60]COMPLETE IN UPPER CASE/FILL IN WITH 'X'[/size][/font][table2=Arial][tr]
                    [td][size=75][b]TYPE OF COLLISION[/b][/size]
                    [/td]
                    [td][size=75][b][color=transparent]TYPE OF COLLISION[/color][/b][/size][/td]
                    [td][size=75][b]DATE / TIME OF COLLISION[/b][/size][/td]
                    [td][size=75][b]LOC. OF COLLISION[/b][/size][/td]
                    [td][size=75][b]WEATHER[/b][/size][/td][/tr]
                    [tr]
                    [td][size=75][`+b1+`] HEAD-ON
                    [`+b2+`] SIDESWIPE
                    [`+b3+`] REAR END
                    [`+b4+`] BROADSIDE
                    [/size][/td]
                    [td][size=75][`+b5+`] HIT OBJECT
                    [`+b6+`] OVERTURNED
                    [`+b7+`] VEHICLE/PEDESTRIAN
                    [`+b8+`] OTHER
                    [/size][/td]
                    [td][size=75]`+fullDateAndTime+`[/td]
                    [td][size=75]`+location+`[/size][/td]
                    [td][size=75][`+w1+`] CLEAR
                    [`+w2+`] CLOUDY
                    [`+w3+`] RAINING
                    [`+w4+`] SNOWING
                    [`+w5+`] FOG
                    [`+w6+`] OTHER[/size][/td][/tr][/table2]

                    [font=Arial][b][size=75]2. PERSON(S) INFORMATION[/size][/b]
                    [size=60]COMPLETE IN UPPER CASE/FILL IN WITH 'X'[/size][/font][table2=Arial]
                    [tr][td][size=75][b]#[/b][/size][/td]
                    [td][size=75][b]POSITION/ROLE[/b][/size][/td]
                    [td][size=75][b]LAST NAME[/b][/size][/td]
                    [td][size=75][b]FIRST NAME[/b][/size][/td]
                    [td][size=75][b]RACE[/b][/size][/td]
                    [td][size=75][b]GENDER[/b][/size][/td]
                    [td][size=75][b]INJURY[/b][/size][/td]
                    [td][size=75][b]ARREST[/b][/size][/td][/tr]
                    `+personsInvolvedFinal+`
                    [/table2]

                    [font=Arial][b][size=75]3. VEHICLE(S) INFORMATION[/size][/b]
                    [size=60]COMPLETE IN UPPER CASE/FILL IN WITH 'X'[/size][/font][table2=Arial]
                    [tr]
                    [td][size=75][b]MODEL[/b][/size][/td]
                    [td][size=75][b]COLOR[/b][/size][/td]
                    [td][size=75][b]LICENSE NO.[/b][/size][/td]
                    [td][size=75][b]INSURANCE[/b][/size][/td]
                    [td][size=75][b]PERSON RELATED[/b][/size][/td][/tr]
                    `+vehiclesInvolvedFinal+`
                    [/table2]

                    [font=Arial][b][size=75]4. INJURY INFORMATION[/size][/b]
                    [size=60]COMPLETE IN UPPER CASE/FILL IN WITH 'X'[/size][/font][table2=Arial]
                    [tr]
                    [td][size=75][b]TYPE OF INJURY[/b][/size][/td]
                    [td][size=75][b]DESCRIPTION OF INJURY[/b][/size][/td]
                    [td][size=75][b]HOSPITAL[/b][/size][/td]
                    [td][size=75][b]PERSON RELATED[/b][/size][/td][/tr]
                    `+InjuriesFinal+`
                    [/table2]

                    [font=Arial][b][size=75]5. ARREST INFORMATION[/size][/b]
                    [size=60]COMPLETE IN UPPER CASE/FILL IN WITH 'X'[/size][/font][table2=Arial]
                    [tr]
                    [td][size=75][b]TYPE OF ARREST[/b][/size][/td]
                    [td][size=75][b]CHARGE(S) FILED[/b][/size][/td]
                    [td][size=75][b]FACILITY[/b][/size][/td]
                    [td][size=75][b]PERSON RELATED[/b][/size][/td][/tr]
                    `+arrestInformationFinal+`
                    [/table2]

                    [font=Arial][b][size=75]6. NARRATIVE[/size][/b]
                    [size=60]COMPLETE IN UPPER CASE[/size][/font][table2=Arial]
                    [tr]
                    [td][size=75][b]NARRATIVE[/b][/size][/td]
                    [/tr]
                    [tr]
                    [td][size=75]`+narrative+`[/size][/td][/table2]

                    [font=Arial][b][size=75]7. DEPUTY INFORMATION[/size][/b]
                    [size=60]COMPLETE IN UPPER CASE[/size][/font][table2=Arial]
                    [tr]
                    [td][size=75][b]FULL NAME[/b][/size][/td]
                    [td][size=75][b]EMPLOYEE NO.[/b][/size][/td]
                    [td][size=75][b]UNIT/CAR #[/b][/size][/td]
                    [/tr]
                    [tr]
                    [td][size=75]`+deputyName+`[/size][/td]
                    [td][size=75]`+badge+`[/size][/td]
                    [td][size=75]`+callsign+`[/size][/td][/table2]

                    [font=Arial][b][size=75]8. SUPERVISOR SIGN-OFF[/size][/b][/font][table2=Arial]
                    [tr]
                    [td][size=75][b]SUPERVISOR SIGNATURE[/b][/size][/td]
                    [/tr]
                    [tr]
                    [td][size=75]`+supervisorSignature+`[/size][/td]
                    [/table2]
                    [/divbox]`;

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
