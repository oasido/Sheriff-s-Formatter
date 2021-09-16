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
                                <strong>Callsign, Violation & Action</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Callsign</label>
                                        <input class="form-control col-sm-6" type="text" id="callsign" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <hr>
                                <!--HR-->
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Violation</label>
                                        <select class="selectpicker form-control col-sm-6" name="violation" onchange="getAmount();" id="violation" multiple="multiple">
                                            <option id="a1" value="2500">(11)01. Speeding Violation</option>
                                            <option id="a2" value="3500">(11)02. Failure To Abide To A Traffic Control Device</option>
                                            <option id="a3" value="3500">(11)03. Yield Violation</option>
                                            <option id="a4" value="2500">(11)04. Parking Violation</option>
                                            <option id="a5" value="3500">(11)05. Reckless Driving</option>
                                            <option id="a6">(11)06. Vehicular Endangerment</option>
                                            <option id="a7" value="1000">(11)07. Vehicular Noise Violation</option>
                                            <option id="a8">(11)08. Illegal Nitrous Oxide Possession</option>
                                            <option id="a9">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Action Taken</label>
                                        <select class="selectpicker form-control col-sm-6" name="action" id="action" multiple="multiple">
                                            <option id="a" value="Verbal Warning">Verbal Warning</option>
                                            <option id="b" value="Written Warning">Written Warning</option>
                                            <option id="ce" value="Citation">Citation</option>
                                            <option id="d" value="Suspension">Suspension</option>
                                            <option id="e" value="Arrest">Arrest</option>
                                            <option id="f" value="Impound">Impound</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- if other selected, show this. -->
                                <div id="ifOtherIsSelected" style="display: none;">
                                    <br />
                                    <div class="form-inline">
                                        <div class="col-md-12 form-group">
                                            <label class="col-sm-4 col-form-label">Other</label>
                                            <textarea class="form-control col-sm-6" id="other" onkeyup="this.value = this.value.toUpperCase();" placeholder="Currently blank, please either tick the checkbox and type the violations, or type 'N/A'">N/A</textarea>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Vehicle Inspection</label>
                                        <select class="selectpicker form-control col-sm-6" data-max-options="1" multiple="multiple">
                                            <option id="noVehicleInspection">No</option>
                                            <option id="yesVehicleInspection">Yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="card">
                            <div class="card-header">
                                <strong>Driver Information</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Driver First Name</label>
                                        <input class="form-control col-sm-6" type="text" id="fname" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Driver Last Name</label>
                                        <input class="form-control col-sm-6" type="text" id="lname" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Race</label>
                                        <input class="form-control col-sm-6" type="text" id="race" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Gender</label>
                                        <select class="form-control col-sm-6" id="gender">
                                            <option value="MALE">Male</option>
                                            <option value="FEMALE">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Vehicle</label>
                                        <select class="form-control col-sm-6" id='vehicle'>
                                            <option value="ADMIRAL">Admiral</option>
                                            <option value="ALPHA">Alpha</option>
                                            <option value="AMBULANCE">Ambulance</option>
                                            <option value="BF INJECTION">BF Injection</option>
                                            <option value="BF-400">BF-400</option>
                                            <option value="BMX">BMX</option>
                                            <option value="BAGGAGE">Baggage</option>
                                            <option value="BANDITO">Bandito</option>
                                            <option value="BANSHEE">Banshee</option>
                                            <option value="BARRACKS">Barracks</option>
                                            <option value="BENSON">Benson</option>
                                            <option value="BERKLEY'S RC Van">Berkley's RC Van</option>
                                            <option value="BIKE">Bike</option>
                                            <option value="BLADE">Blade</option>
                                            <option value="BLISTA COMPACT">Blista Compact</option>
                                            <option value="BLOODRING BANGER">Bloodring Banger</option>
                                            <option value="BOBCAT">Bobcat</option>
                                            <option value="BOXVILLE">Boxville</option>
                                            <option value="BRAVURA">Bravura</option>
                                            <option value="BROADWAY">Broadway</option>
                                            <option value="BUCCANEER">Buccaneer</option>
                                            <option value="BUFFALO">Buffalo</option>
                                            <option value="BULLET">Bullet</option>
                                            <option value="BURRITO">Burrito</option>
                                            <option value="BUS">Bus</option>
                                            <option value="CABBIE">Cabbie</option>
                                            <option value="CADDY">Caddy</option>
                                            <option value="CADRONA">Cadrona</option>
                                            <option value="CAMPER">Camper</option>
                                            <option value="CEMENT TRUCK">Cement Truck</option>
                                            <option value="CHEETAH">Cheetah</option>
                                            <option value="CLOVER">Clover</option>
                                            <option value="CLUB">Club</option>
                                            <option value="COACH">Coach</option>
                                            <option value="COMBINE HARVESTER">Combine Harvester</option>
                                            <option value="COMET">Comet</option>
                                            <option value="DFT-30">DFT-30</option>
                                            <option value="DOZER">Dozer</option>
                                            <option value="DUMPER">Dumper</option>
                                            <option value="DUNE">Dune</option>
                                            <option value="ELEGANT">Elegant</option>
                                            <option value="ELEGY">Elegy</option>
                                            <option value="EMPEROR">Emperor</option>
                                            <option value="ENFORCER">Enforcer</option>
                                            <option value="ESPERANTO">Esperanto</option>
                                            <option value="EUROS">Euros</option>
                                            <option value="FBI RANCHER">FBI Rancher</option>
                                            <option value="FBI TRUCK">FBI Truck</option>
                                            <option value="FCR-900">FCR-900</option>
                                            <option value="FAGGIO">Faggio</option>
                                            <option value="FELTZER">Feltzer</option>
                                            <option value="FIRE TRUCK">Fire Truck</option>
                                            <option value="FLASH">Flash</option>
                                            <option value="FLATBED">Flatbed</option>
                                            <option value="FORKLIFT">Forklift</option>
                                            <option value="FORTUNE">Fortune</option>
                                            <option value="FREEWAY">Freeway</option>
                                            <option value="GLENDALE">Glendale</option>
                                            <option value="GREENWOOD">Greenwood</option>
                                            <option value="HPV-1000">HPV-1000</option>
                                            <option value="HERMES">Hermes</option>
                                            <option value="HOTDOG">Hotdog</option>
                                            <option value="HOTKNIFE">Hotknife</option>
                                            <option value="HOTRING RACER">Hotring Racer</option>
                                            <option value="HUNTLEY">Huntley</option>
                                            <option value="HUSTLER">Hustler</option>
                                            <option value="INFERNUS">Infernus</option>
                                            <option value="INTRUDER">Intruder</option>
                                            <option value="JESTER">Jester</option>
                                            <option value="JOURNEY">Journey</option>
                                            <option value="KART">Kart</option>
                                            <option value="LANDSTALKER">Landstalker</option>
                                            <option value="LINERUNNER">Linerunner</option>
                                            <option value="MAJESTIC">Majestic</option>
                                            <option value="MANANA">Manana</option>
                                            <option value="MERIT">Merit</option>
                                            <option value="MESA">Mesa</option>
                                            <option value="MONSTER">Monster</option>
                                            <option value="MOONBEAM">Moonbeam</option>
                                            <option value="MOTHERSHIP">Mothership</option>
                                            <option value="MOUNTAIN BIKE">Mountain Bike</option>
                                            <option value="MOWER">Mower</option>
                                            <option value="MR WHOOPEE">Mr Whoopee</option>
                                            <option value="MULE">Mule</option>
                                            <option value="NRG-500">NRG-500</option>
                                            <option value="NEBULA">Nebula</option>
                                            <option value="NEWSVAN">Newsvan</option>
                                            <option value="OCEANIC">Oceanic</option>
                                            <option value="PCJ-600">PCJ-600</option>
                                            <option value="PACKER">Packer</option>
                                            <option value="PATRIOT">Patriot</option>
                                            <option value="PERENNIAL">Perennial</option>
                                            <option value="PHOENIX">Phoenix</option>
                                            <option value="PICADOR">Picador</option>
                                            <option value="PIZZABOY">Pizzaboy</option>
                                            <option value="POLICE">Police</option>
                                            <option value="PONY">Pony</option>
                                            <option value="PREMIER">Premier</option>
                                            <option value="PREVION">Previon</option>
                                            <option value="PRIMO">Primo</option>
                                            <option value="QUAD">Quad</option>
                                            <option value="RANCHER">Rancher</option>
                                            <option value="RANGER">Ranger</option>
                                            <option value="REGINA">Regina</option>
                                            <option value="REMINGTON">Remington</option>
                                            <option value="RHINO">Rhino</option>
                                            <option value="ROADTRAIN">Roadtrain</option>
                                            <option value="ROMERO">Romero</option>
                                            <option value="RUMPO">Rumpo</option>
                                            <option value="S.W.A.T.">S.W.A.T.</option>
                                            <option value="SABRE">Sabre</option>
                                            <option value="SADLER">Sadler</option>
                                            <option value="SANCHEZ">Sanchez</option>
                                            <option value="SANDKING">Sandking</option>
                                            <option value="SAVANNA">Savanna</option>
                                            <option value="SECURICAR">Securicar</option>
                                            <option value="SENTINEL">Sentinel</option>
                                            <option value="SLAMVAN">Slamvan</option>
                                            <option value="SOLAIR">Solair</option>
                                            <option value="STAFFORD">Stafford</option>
                                            <option value="STALLION">Stallion</option>
                                            <option value="STRATUM">Stratum</option>
                                            <option value="STRETCH">Stretch</option>
                                            <option value="SULTAN">Sultan</option>
                                            <option value="SUNRISE">Sunrise</option>
                                            <option value="SUPER GT">Super GT</option>
                                            <option value="SWEEPER">Sweeper</option>
                                            <option value="TAHOMA">Tahoma</option>
                                            <option value="TAMPA">Tampa</option>
                                            <option value="TANKER">Tanker</option>
                                            <option value="TAXI">Taxi</option>
                                            <option value="TORNADO">Tornado</option>
                                            <option value="TOW TRUCK">Tow Truck</option>
                                            <option value="TRACTOR">Tractor</option>
                                            <option value="TRASHMASTER">Trashmaster</option>
                                            <option value="TUG">Tug</option>
                                            <option value="TURISMO">Turismo</option>
                                            <option value="URANUS">Uranus</option>
                                            <option value="UTILITY VAN">Utility Van</option>
                                            <option value="VINCENT">Vincent</option>
                                            <option value="VIRGO">Virgo</option>
                                            <option value="VOODOO">Voodoo</option>
                                            <option value="VORTEX">Vortex</option>
                                            <option value="WALTON">Walton</option>
                                            <option value="WASHINGTON">Washington</option>
                                            <option value="WAYFARER">Wayfarer</option>
                                            <option value="WILLARD">Willard</option>
                                            <option value="WINDSOR">Windsor</option>
                                            <option value="YANKEE">Yankee</option>
                                            <option value="YOSEMITE">Yosemite</option>
                                            <option value="ZR-350">ZR-350</option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Plate</label>
                                        <input class="form-control col-sm-6" type="text" id="plate" onkeyup="this.value = this.value.toUpperCase();">
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
                                        <label class="col-sm-4 col-form-label">Brief Summary of Events</label>
                                        <textarea class="form-control col-sm-6" id="summary" onkeyup="this.value = this.value.toUpperCase();"></textarea>
                                    </div>
                                </div>
                                <br />
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
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Location</label>
                                        <input class="form-control col-sm-6" type="text" id="location" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <hr>
                                <!--HR-->
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Was Anyone Searched?</label>
                                        <select class="form-control col-sm-6" id="searchResult" onchange="yesnoCheck(this)">
                                            <option value="No" id="searchno">No</option>
                                            <option value="Yes" id="searchyes">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <form id="ifYes" style="display: none;">
                                    <br />
                                    <div class="form-inline">
                                        <div class="col-md-12 form-group">
                                            <label class="col-sm-4 col-form-label">Probable Cause</label>
                                            <textarea class="form-control col-sm-6" name="Yes" id="probableCause" onkeyup="this.value = this.value.toUpperCase();"></textarea>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="form-inline">
                                        <div class="col-md-12 form-group">
                                            <label class="col-sm-4 col-form-label">Items Found</label>
                                            <textarea class="form-control col-sm-6" name="Yes" id="itemsFound" onkeyup="this.value = this.value.toUpperCase();"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br />
                        <div class="card">
                            <div class="card-header">
                                <strong>Passenger Information (if applicable)</strong>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="passenger">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Race</th>
                                                <th>Gender</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                    <center>
                                        <button class="btn btn-outline-primary" onclick="addRow()">Add Passenger</button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <div class="highlight-clean">
                    <div class="container">
                        <center>
                            <h5>The citation(s) cost in USD ($)</h5>
                            <p id="amount" style="color:green; font-weight: bold;">Choose violation to get a value.</p>
                            <p id="misdemeanor" style="color:orange; font-weight: bold;"></p>
                        </center>
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
                addRow();
                });

                // show forms on select
                function yesnoCheck(that) {
                    if (that.value == "Yes") {
                        document.getElementById("ifYes").style.display = "block";
                    } else {
                        document.getElementById("ifYes").style.display = "none";
                    }
                }

                // ADD A NEW ROW TO THE TABLE.s
                function addRow() {
                    var empTab = document.getElementById('passenger');

                    var rowCnt = empTab.rows.length; // GET TABLE ROW COUNT.
                    var tr = empTab.insertRow(rowCnt); // TABLE ROW.
                    tr = empTab.insertRow(rowCnt);

                    for (var c = 0; c < 5; c++) {
                        var td = document.createElement('td'); // TABLE DEFINITION.
                        td = tr.insertCell(c);
                        switch (c) {
                            case 0:
                                {
                                    // ADD A BUTTON.
                                    var fname = document.createElement("input");
                                    fname.setAttribute("class", 'form-control');
                                    fname.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
                                    td.appendChild(fname);
                                    break;
                                }

                            case 1:
                                {
                                    var lname = document.createElement("input");
                                    lname.setAttribute("class", 'form-control');
                                    lname.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
                                    td.appendChild(lname);
                                    break;
                                }

                            case 2:
                                {
                                    var race = document.createElement("input");
                                    race.setAttribute("class", 'form-control');
                                    race.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
                                    td.appendChild(race);
                                    break;
                                }

                            case 3:
                                {
                                    var gender = document.createElement("select");
                                    var male = document.createElement("option");
                                    male.setAttribute("value", "MALE");
                                    male.text = "Male";

                                    var female = document.createElement("option");
                                    female.setAttribute("value", "FEMALE");
                                    female.text = "Female";

                                    gender.setAttribute("class", "form-control");
                                    gender.add(male);
                                    gender.add(female);

                                    td.appendChild(gender);
                                    break;
                                }

                            case 4:
                                {
                                    var button = document.createElement("input");
                                    button.setAttribute('type', 'button');
                                    button.setAttribute('value', 'Remove');
                                    button.setAttribute("class", "btn btn-danger btn-sm");

                                    // ADD THE BUTTON's 'onclick' EVENT.
                                    button.setAttribute('onclick', 'removeRow(this)');
                                    td.appendChild(button);
                                    break;

                                }
                        }
                    }
                }

                // DELETE TABLE ROW.
                function removeRow(oButton) {
                    var empTab = document.getElementById('passenger');
                    empTab.deleteRow(oButton.parentNode.parentNode.rowIndex); // BUTTON -> TD -> TR.
                }

                $(document).ready(function() {
                    $('[data-toggle="tooltip"]').tooltip();
                });

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

                function ifOtherIsSelected() {
                    // show/hide IfOtherIsSelected div if Other is selected, duh.
                    if (document.getElementById("a9").selected == true) {
                        document.getElementById("ifOtherIsSelected").style.display = "block";
                    } else {
                        document.getElementById("ifOtherIsSelected").style.display = "none";
                    }
                }

                // calculate fine cost
                function getAmount() {
                    var total = 0;
                    var misdemeanorText = "Either Penal Code (11)06 and/or (11)08 are selected.<br />Please note that <u>each</u> violation is between 15 to 25 minutes prison time."
                    document.getElementById('misdemeanor').textContent = "";

                    if (document.getElementById("a1").selected == true) {
                        total += 2500;
                    }

                    if (document.getElementById("a2").selected == true) {
                        total += 3500;
                    }

                    if (document.getElementById("a3").selected == true) {
                        total += 3500;
                    }

                    if (document.getElementById("a4").selected == true) {
                        total += 2500;
                    }

                    if (document.getElementById("a5").selected == true) {
                        total += 3500;
                    }

                    if (document.getElementById("a6").selected == true) {
                        document.getElementById('misdemeanor').innerHTML = misdemeanorText;
                    }

                    if (document.getElementById("a7").selected == true) {
                        total += 1000;
                    }

                    if (document.getElementById("a8").selected == true) {
                        document.getElementById('misdemeanor').innerHTML = misdemeanorText;
                    }

                    document.getElementById('amount').textContent = total;

                    if (document.getElementById("a9").selected == true) {
                        a9 = "X";
                        document.getElementById("ifOtherIsSelected").style.display = "block";
                    } else {
                        a9 = "";
                        document.getElementById("ifOtherIsSelected").style.display = "none";
                    }

                    if (total == 0) {
                        document.getElementById("amount").innerHTML = "Choose violation to get a value."
                    }
                }


                function process() {
                    var date = document.getElementById("date").value;
                    var time = document.getElementById("time").value;
                    var location = document.getElementById("location").value;
                    // var a1 = document.getElementById("a1").checked;
                    // var a2 = document.getElementById("a2").checked;
                    // var a3 = document.getElementById("a3").checked;
                    // var a4 = document.getElementById("a4").checked;
                    // var a5 = document.getElementById("a5").checked;
                    // var a6 = document.getElementById("a6").checked;
                    // var a7 = document.getElementById("a7").checked;
                    // var a8 = document.getElementById("a8").checked;
                    // var a9 = document.getElementById("a9").checked;
                    var other = document.getElementById("other").value;
                    var fname = document.getElementById("fname").value;
                    var lname = document.getElementById("lname").value;
                    var race = document.getElementById("race").value;
                    var gender = document.getElementById("gender").value;
                    var vehicle = document.getElementById("vehicle").value;
                    var plate = document.getElementById("plate").value;
                    var searchResult = document.getElementById("searchResult").value;
                    var searchyes = document.getElementById("searchyes").value;
                    var searchno = document.getElementById("searchno").value;
                    var probableCause = document.getElementById("probableCause").value;
                    var itemsFound = document.getElementById("itemsFound").value;
                    var summary = document.getElementById("summary").value;
                    var deputyName = "<?php echo $_SESSION['user']->game_name; ?>"
                    var badge = "<?php echo $_SESSION['user']->badge_no; ?>"
                    var station = "<?php echo $_SESSION['user']->station; ?>"
                    var callsign = document.getElementById("callsign").value;
                    var action = document.getElementById("action").value;

                    // SEPERATOR
                    var values = $('#action').val();
                    // console.log(values);
                    // var e = values[4];
                    // var b = values[1];
                    // var ce = values[2];
                    // var d = values[3];
                    // var f = values[5];
                    // var a = values[0];

                    if (document.getElementById("a").selected == true) {
                        a = "X";
                    } else {
                        a = "";
                    }

                    if (document.getElementById("b").selected == true) {
                        b = "X";
                    } else {
                        b = "";
                    }

                    if (document.getElementById("ce").selected == true) {
                        ce = "X";
                    } else {
                        ce = "";
                    }

                    if (document.getElementById("d").selected == true) {
                        d = "X";
                    } else {
                        d = "";
                    }

                    if (document.getElementById("e").selected == true) {
                        e = "X";
                    } else {
                        e = "";
                    }

                    if (document.getElementById("f").selected == true) {
                        f = "X";
                    } else {
                        f = "";
                    }
                    // SEPERATOR

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

                    // SEPERATOR

                    var passengerInfo = "";
                    var myTab = document.getElementById('passenger');
                    for (row = 1; row < myTab.rows.length - 1; row++) {
                        for (c = 0; c < myTab.rows[row].cells.length - 1; c++) { // EACH CELL IN A ROW.
                            switch (c) {
                                case 0:
                                    {
                                        var element = myTab.rows.item(row).cells[c];
                                        passengerInfo += "[tr][td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                                        break;
                                    }

                                case 1:
                                    {
                                        var element = myTab.rows.item(row).cells[c];
                                        passengerInfo += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                                        break;
                                    }

                                case 2:
                                    {
                                        var element = myTab.rows.item(row).cells[c];
                                        passengerInfo += "[td][size=75]" + element.childNodes[0].value + "[/size][/td]\n";
                                        break;
                                    }

                                case 3:
                                    {
                                        var element = myTab.rows.item(row).cells[c];
                                        passengerInfo += "[td][size=75]" + element.childNodes[0].value + "[/size][/td][/tr]\n";
                                        break;
                                    }
                            }
                        }
                    }

                    // seperator

                    if (searchResult == "No") {
                        searchno = "X";
                        searchyes = "";
                    } else {
                        searchno = "";
                        searchyes = "X";
                    }

                    if (probableCause == "") {
                        probableCause = "N/A";
                    }

                    if (itemsFound == "") {
                        itemsFound = "N/A";
                    }

                    var yesVehicleInspection, noVehicleInspection;
                    yesVehicleInspection, noVehicleInspection = " ";
                    if (document.getElementById("yesVehicleInspection").selected == true) {
                      yesVehicleInspection = "X";
                      noVehicleInspection = " ";
                    } else {
                      yesVehicleInspection = "";
                      noVehicleInspection = "X";
                    }

                    var format = "[divbox=white][font=Arial][center][b][size=80]COUNTY OF LOS SANTOS SHERIFF'S DEPARTMENT[/size][/b][/center][break][/break][aligntable=left,0,12,0,0,0,0][size=87][i]A TRADITION OF SERVICE[/i][/aligntable][aligntable=left,0,135,0,0,0,0]TRAFFIC STOP REPORT[/aligntable][aligntable=left,0,150,0,0,0,0][b]DATE:[/b] " + date + "[/aligntable][/size][/font]\n\
                \n\
                [font=Arial][b][size=75]1. VIOLATION INFORMATION[/size][/b]\n\
                [size=60]COMPLETE IN UPPER CASE[/size][/font][table2=Arial][tr]\n\
                [td][size=75][b]CLASSIFICATION / PENAL CODE[/b][/size]\n\
                [size=65]FILL IN WITH 'X'[/size][/td]\n\
                [td][size=75][b][color=transparent]CLARIFICATION / PENAL CODE[/color][/b][/size][/td]\n\
                [td][size=75][b]DATE / TIME OF OCCURRENCE[/b][/size][/td]\n\
                [td][size=75][b]LOC. OF OCCURENCE[/b][/size][/td][/tr]\n\
                [tr]\n\
                [td][size=75][ " + a1 + " ] PC1101 SPEEDING VIOLATION\n\
                [ " + a2 + " ] PC1102 FAILURE TO ABIDE TO A TRAFFIC CONTROL DEVICE\n\
                [ " + a3 + " ] PC1103 YIELD VIOLATION\n\
                [ " + a4 + " ] PC1104 PARKING VIOLATION\n\
                [ " + a5 + " ] PC1105 RECKLESS DRIVING[/size][/td]\n\
                [td][size=75][ " + a6 + " ] PC1106 VEHICULAR ENDANGERMENT\n\
                [ " + a7 + " ] PC1107 VEHICULAR NOISE VIOLATION\n\
                [ " + a8 + " ] PC1108 ILLEGAL NITROUS OXIDE POSSESSION\n\
                [ " + a9 + " ] OTHER: " + other + "[/size][/td]\n\
                [td][size=75]" + date + ", " + time + "[/td]\n\
                [td][size=75]" + location + "[/size][/td][/tr][/table2]\n\
                \n\
                [font=Arial][b][size=75]2. DRIVER INFORMATION[/size][/b]\n\
                [size=60]COMPLETE IN UPPER CASE[/size][/font][table2=Arial]\n\
                [tr]\n\
                [td][size=75][b]L. NAME[/b][/size][/td]\n\
                [td][size=75][b]F. NAME[/b][/size][/td]\n\
                [td][size=75][b]RACE[/b][/size][/td]\n\
                [td][size=75][b]GENDER[/b][/size][/td]\n\
                [td][size=75][b]VEHICLE USED[/b][/size][/td]\n\
                [td][size=75][b]LICENSE NO.[/b][/size][/td][/tr]\n\
                [tr]\n\
                [td][size=75]" + lname + "[/size][/td]\n\
                [td][size=75]" + fname + "[/size][/td]\n\
                [td][size=75]" + race + "[/size][/td]\n\
                [td][size=75]" + gender + "[/size][/td]\n\
                [td][size=75]" + vehicle + "[/size][/td]\n\
                [td][size=75]" + plate + "[/size][/td][/tr]\n\
                [/table2]\n\
                \n\
                [font=Arial][b][size=75]3. PASSENGER(S) INFORMATION (IF APPLICABLE)[/size][/b]\n\
                [size=60]COMPLETE IN UPPER CASE[/size][/font][table2=Arial]\n\
                [tr]\n\
                [td][size=75][b]L. NAME[/b][/size][/td]\n\
                [td][size=75][b]F. NAME[/b][/size][/td]\n\
                [td][size=75][b]RACE[/b][/size][/td]\n\
                [td][size=75][b]GENDER[/b][/size][/td][/tr]\n\
                " + passengerInfo + "\n\
                \n\
                [/table2]\n\
                \n\
                [font=Arial][b][size=75]4. VEHICLE/DRIVER/PASSENGER SEARCH[/size][/b]\n\
                [size=60]COMPLETE IN UPPER CASE[/size][/font][table2=Arial]\n\
                [tr]\n\
                [td][size=75][b]WAS A SEARCH INITIATED SUBSEQUENT TO THE TRAFFIC STOP?[/b][/size][/td]\n\
                [td][size=75][b][ " + searchyes + " ] YES     [ " + searchno + " ] NO[/b][/size][/td][/tr][/table2]\n\
                [size=60]IF ANSWERED YES PLEASE CONTINUE SECTION 4.[/size]\n\
                [table2=Arial][tr]\n\
                [td][size=75][b]PROBABLE CAUSE FOR SEARCH[/b][/size][/td]\n\
                [td][size=75][b]ITEM(S) FOUND[/b][/size][/td][/tr]\n\
                \n\
                [tr]\n\
                [td][size=75]" + probableCause + "[/size][/td]\n\
                [td][size=75][list=][*]" + itemsFound + "[/list][/size][/td][/tr][/table2]\n\
                \n\
                [table2=Arial][tr]\n\
                [td][size=75][b]BRIEF SUMMARY OF EVENTS[/b][/size][/td][/tr]\n\
                \n\
                [tr]\n\
                [td][size=75]" + summary + "[/size][/td]\n\
                [/tr][/table2]\n\
                \n\
                \n\
                [font=Arial][b][size=75]5. VEHICLE INSPECTION[/size][/b]\n\
                [size=60]COMPLETE IN UPPER CASE[/size][/font][table2=Arial]\n\
                [tr]\n\
                [td][size=75][b]WAS A VEHICLE INSPECTION INITIATED SUBSEQUENT TO THE TRAFFIC STOP?[/b][/size][/td]\n\
                [td][size=75][b]["+yesVehicleInspection+"] YES     ["+noVehicleInspection+"] NO[/b][/size][/td][/tr][/table2]\n\
                [size=60]IF ANSWERED YES PLEASE ATTACH THE RELEVANT VEHICLE INSPECTION REPORT.[/size]\n\
                \n\
                [font=Arial][b][size=75]6. DEPUTY INFORMATION[/size][/b]\n\
                [size=60]COMPLETE IN UPPER CASE[/size][/font][table2=Arial]\n\
                [tr]\n\
                [td][size=75][b]FULL NAME[/b][/size][/td]\n\
                [td][size=75][b]EMPLOYEE NO.[/b][/size][/td]\n\
                [td][size=75][b]ASSIGNED STATION[/b][/size][/td]\n\
                [td][size=75][b]UNIT/CAR #[/b][/size][/td]\n\
                [td][size=75][b]ACTION TAKEN[/b][/size][/td]\n\
                [td][size=75][b][color=transparent]ACTION TAKEN[/color][/b][/size][/td]\n\
                [/tr]\n\
                [tr]\n\
                [td][size=75]" + deputyName + "[/size][/td]\n\
                [td][size=75]" + badge + "[/size][/td]\n\
                [td][size=75]" + station + "[/size][/td]\n\
                [td][size=75]" + callsign + "[/size][/td]\n\
                [td][size=75][ " + e + " ] ARREST\n\
                [ " + ce + " ] CITATION\n\
                [ " + b + " ] WRITTEN WARNING[/size][/td]\n\
                [td][size=75][ " + d + " ] SUSPENSION\n\
                [ " + f + " ] IMPOUND\n\
                [ " + a + " ] VERBAL WARNING[/size][/td]\n\
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
