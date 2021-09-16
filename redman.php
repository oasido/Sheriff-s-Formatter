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
                        <strong>Driver & Vehicle Information</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <!-- <label class="col-sm-4 col-form-label">First Name</label> -->
                                <input class="form-control col-sm-4" type="text" id="fname"
                                    placeholder="Firstname">&nbsp;
                                <input class="form-control col-sm-3" type="text" id="mname" placeholder="Middle">&nbsp;
                                <input class="form-control col-sm-4" type="text" id="lname" placeholder="Lastname">
                            </div>
                        </div>
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Date of Birth</label>
                                <input class="form-control col-sm-6" type="date" id="dob">
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Gender</label>
                                <select class="form-control col-sm-6" id="gender">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Race</label>
                                <input class="form-control col-sm-6" type="text" id="race">
                            </div>
                        </div>
                        <hr>
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
                                <label class="col-sm-4 col-form-label">Color</label>
                                <input class="form-control col-sm-6" type="text" id="color">
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Plate</label>
                                <input class="form-control col-sm-6" type="text" id="plate">
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Type</label>
                                <input class="form-control col-sm-6" type="text" id="type">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <strong>Time , Place & Summary</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Date</label>
                                <input class="form-control col-sm-6" type="date" id="date">&nbsp;
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
                                <input class="form-control col-sm-6" type="text" id="location">
                            </div>
                        </div>
                        <hr>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Brief Summary</label>
                                <textarea class="form-control col-sm-6" id="narrative"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <strong>Callsign, Violation & Outcome</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Callsign</label>
                                <input class="form-control col-sm-6" type="text" id="callsign">
                            </div>
                        </div>
                        <hr>
                        <!--HR-->
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Violation</label>
                                <textarea class="form-control col-sm-6" type="text" id="charges"></textarea>
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Fine Amt/Warning</label>
                                <input class="form-control col-sm-6" type="text" id="outcome" placeholder="">
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
                    <button class="btn btn-success btn-lg" onClick="process()"><i class="fas fa-cog"></i> Generate
                        Form</button>
                    <br />
                    <br />
                    <h5 class="font-weight-bold">Generated text for Mr. Redman:</h5>
                    <textarea rows="5" class="form-control col-sm-6" id="finish"></textarea>
                </center>
            </div>
        </div>
    </div>
    <!-- aye-->

    <!-- JS Form Script-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

        function process() {
            let date = document.getElementById("date").value;
            let momentJSdate = moment(date).format('MMMM Do YYYY');
            let theDay = moment(date).format('dddd');

            var time = document.getElementById("time").value;
            var location = document.getElementById("location").value;
            var fname = document.getElementById("fname").value;
            var mname = document.getElementById("mname").value;
            var lname = document.getElementById("lname").value;
            var dob = document.getElementById("dob").value;

            var Bdate = dob;
            var Bday = +new Date(Bdate);
            var ageCalc = ~~((Date.now() - Bday) / (31557600000));

            if (ageCalc == 0) {
                ageCalc = "";
            }

            var race = document.getElementById("race").value;
            var gender = document.getElementById("gender").value;
            var vehicle = document.getElementById("vehicle").value;
            var plate = document.getElementById("plate").value;
            var color = document.getElementById("color").value;
            var narrative = document.getElementById("narrative").value;
            var deputyName = "<?php echo $_SESSION['user']->game_name; ?>"
            var badge = "<?php echo $_SESSION['user']->badge_no; ?>"
            var station = "<?php echo $_SESSION['user']->station; ?>"
            var callsign = document.getElementById("callsign").value;
            var outcome = document.getElementById("outcome").value;
            var charges = document.getElementById("charges").value;
            var type = document.getElementById("type").value;


            var format =
                `[divbox=white][font=Arial][center][b][size=80]COUNTY OF LOS SANTOS SHERIFF'S DEPARTMENT[/size][/b][/center][break][/break][aligntable=left,0,12,0,0,0,0][size=87][i]A TRADITION OF SERVICE[/i][/aligntable][aligntable=left,0,150,0,0,0,0]UNIFORM MOTOR VEHICLE CITATION[/aligntable][aligntable=left,0,150,0,0,0,0][b]DATE:[/b] ` +
                date + `[/aligntable][/size][/font]

				[table2=Arial][tr]
				[td][size=75][b]L. NAME[/b][/size][/td]
				[td][size=75][b]F. NAME[/b][/size][/td]
				[td][size=75][b]M. NAME[/b][/size][/td]
				[td][size=75][b]SEX[/b][/size][/td]
				[td][size=75][b]RACE[/b][/size][/td]
				[td][size=75][b]DOB[/b][/size][/td]
				[td][size=75][b]AGE[/b][/size][/td][/tr]
				[tr][td][size=75]` + lname + `[/size][/td]
[td][size=75]` + fname + `[/size][/td]
[td][size=75]` + mname + `[/size][/td]
[td][size=75]` + gender + `[/size][/td]
[td][size=75]` + race + `[/size][/td]
[td][size=75]` + dob + `[/size][/td]
[td][size=75]` + ageCalc + `[/td][/size][/tr][/table2]

				[table2=Arial][tr]
				[td][size=75][b]REGISTRATION[/b][/size][/td]
				[td][size=75][b]MODEL[/b][/size][/td]
				[td][size=75][b]COLOR[/b][/size][/td]
				[td][size=75][b]TYPE[/b][/size][/td][/tr]
				[tr]
				[td][size=75]` + plate + `[/size][/td]
				[td][size=75]` + vehicle + `[/td]
				[td][size=75]` + color + `[/size][/td]
				[td][size=75]` + type + `[/size][/td][/tr][/table2]

				[table2=Arial][tr]
				[td][size=75][b]LOCATION[/b][/size][/td]
				[td][size=75][b]CLASSIFICATION / PENAL CODE(S)[/b][/size][/td]
				[td][size=75][b]DATE, TIME, DAY OF OCCURRENCE[/b][/size][/td]
				[td][size=75][b]FINE AMT/WARNING[/b][/size][/td]
				[tr]
				[td][size=75]` + location + `[/size][/td]
				[td][size=75]` + charges + `[/size][/td]
				[td][size=75]` + momentJSdate + `, ` + theDay + `, ` + time + `[/td]
				[td][size=75]` + outcome + `[/size][/td][/tr][/table2]

				[table2=Arial][tr]
				[td][size=75][b]BY DEP.[/b][/size][/td]
				[td][size=75][b]EMPLOYEE #[/b][/size][/td]
				[td][size=75][b]STATION/UNIT[/b][/size][/td]
				[td][size=75][b]UNIT/CAR #[/b][/size][/td]
				[/tr]
				[tr]
				[td][size=75]` + deputyName + `[/size][/td]
				[td][size=75]` + badge + `[/size][/td]
				[td][size=75]` + station + `[/size][/td]
				[td][size=75]` + callsign + `[/size][/td][/table2]


				[divbox=white][center][size=75][b]NARRATIVE[/b][/size][/center]
				[size=75]` + narrative + `[/size][/divbox]

				[line][/line][/divbox]`;

            document.getElementById("finish").value = format;
        }
    </script>
</div>
<!-- /.content-wrapper -->

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