<?php
include('../main.php');
include '../header.php';
?>
<!-- custom-checkbox -->
<link href="/css/custom-checkbox.scss" rel="stylesheet" type="text/css">

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
                                        <label class="col-sm-4 col-form-label">Callsign</label>
                                        <input class="form-control col-sm-6" type="text" id="callsign" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Additional Information</label>
                                        <textarea class="form-control col-sm-6" id="additional" onkeyup="this.value = this.value.toUpperCase();"></textarea>
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
                            </div>
                        </div>
                        <br />
                        <div class="card">
                            <div class="card-header">
                                <strong>Driver & Vehicle Information</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Driver First Name</label>
                                        <input class="form-control col-sm-6" type="text" id="fName" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Driver Last Name</label>
                                        <input class="form-control col-sm-6" type="text" id="lName" onkeyup="this.value = this.value.toUpperCase();">
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
                                        <select class="form-control col-sm-6" id="gender"><option value="MALE">Male</option><option value="FEMALE">Female</option></select>
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
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Color</label>
                                        <input class="form-control col-sm-6" type="text" id="color" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Insurance</label>
                                        <select class="form-control col-sm-6" id="insurance"><option value="YES">Yes</option><option value="NO">No</option></select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>Citation Reason</strong>
                            </div>
                            <div class="card-body">
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" id="a1"/>
                                  <label for="a1">
                                    In a manner that obstructs a lane of traffic and prevents the flow of traffic
                                  </label>
                                </div>
                              </div>
                              <!-- <br /> -->
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" id="a2"/>
                                  <label for="a2">
                                    In a manner that completely obstructs an alleyway
                                  </label>
                                </div>
                              </div>
                              <!-- <br /> -->
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" id="a3"/>
                                  <label for="a3">
                                    In a manner that obstructs a parking lot entrance
                                  </label>
                                </div>
                              </div>
                              <!-- <br /> -->
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" id="a4"/>
                                  <label for="a4">
                                    Within a marked crosswalk
                                  </label>
                                </div>
                              </div>
                              <!-- <br /> -->
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" id="a5"/>
                                  <label for="a5">
                                    In a manner that obstructs more than 2/3 of a sidewalk or pedestrian path
                                  </label>
                                </div>
                              </div>
                              <!-- <br /> -->
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" id="a6"/>
                                  <label for="a6">
                                    On any median
                                  </label>
                                </div>
                              </div>
                              <!-- <br /> -->
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" id="a7"/>
                                  <label for="a7">
                                    Facing opposing traffic
                                  </label>
                                </div>
                              </div>
                              <!-- <br /> -->
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" id="a8"/>
                                  <label for="a8">
                                    On any bridges or tunnels
                                  </label>
                                </div>
                              </div>
                              <!-- <br /> -->
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" id="a9"/>
                                  <label for="a9">
                                    On any highway or freeway
                                  </label>
                                </div>
                              </div>
                              <!-- <br /> -->
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" id="a10"/>
                                  <label for="a10">
                                    On railroad tracks or within range of being struck by a railroad car
                                  </label>
                                </div>
                              </div>
                              <!-- <br /> -->
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" id="a11"/>
                                  <label for="a11">
                                    In the immediate ambulatory parking or bay area of a hospital or clinic
                                  </label>
                                </div>
                              </div>
                              <!-- <br /> -->
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" id="a12"/>
                                  <label for="a12">
                                    In the immediate vicinity of rodeo bank's entrance, including the sidewalk adjacent to the metal barriers
                                  </label>
                                </div>
                              </div>
                              <!-- <br /> -->
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" id="a13"/>
                                  <label for="a13">
                                    In front of or obstructing a private driveway or an entrance or exit to a private road or path
                                  </label>
                                </div>
                              </div>
                              <!-- <br /> -->
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" id="a14"/>
                                  <label for="a14">
                                    In a manner not permitted by the property owner
                                  </label>
                                </div>
                              </div>
                              <!-- <br /> -->
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" onclick="showThisUponClick()" id="aOther"/>
                                  <label for="aOther">
                                    Specify any other reason
                                  </label>
                                </div>
                              </div>
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <div id="HiddenPart" class="col-sm-12" style="display: none;">
                                    <br  />
                                    <div class="form-group">
                                      <textarea id="aOtherText" class="form-control col-sm-12" placeholder="Currently blank, please either tick the checkbox and type reason, or type 'N/A'" onkeyup="this.value = this.value.toUpperCase();">N/A</textarea>
                                    </div>
                                  </div>
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

            function showThisUponClick() {
              // Get the checkbox
              var checkBox = document.getElementById("aOther");
              var showThisPart = document.getElementById("HiddenPart");
              // If the checkbox is checked, display the output text
              if (checkBox.checked == true){
                HiddenPart.style.display = "block";
              } else {
                HiddenPart.style.display = "none";
              }
            }

                // show forms on select
                function yesnoCheck(that) {
                        if (that.value == "Yes") {
                            document.getElementById("ifYes").style.display = "block";
                        } else {
                            document.getElementById("ifYes").style.display = "none";
                        }
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

function process() {
var date = document.getElementById("date").value;
var time = document.getElementById("time").value;
var location = document.getElementById("location").value;
var a1 = document.getElementById("a1").checked;
var a2 = document.getElementById("a2").checked;
var a3 = document.getElementById("a3").checked;
var a4 = document.getElementById("a4").checked;
var a5 = document.getElementById("a5").checked;
var a6 = document.getElementById("a6").checked;
var a7 = document.getElementById("a7").checked;
var a8 = document.getElementById("a8").checked;
var a9 = document.getElementById("a9").checked;
var a10 = document.getElementById("a10").checked;
var a11 = document.getElementById("a11").checked;
var a12 = document.getElementById("a12").checked;
var a13 = document.getElementById("a13").checked;
var a14 = document.getElementById("a14").checked;
var aOther = document.getElementById("aOther").checked;
var aOtherText = document.getElementById("aOtherText").value;
var vehicle = document.getElementById("vehicle").value;
var color = document.getElementById("color").value;
var plate = document.getElementById("plate").value;
var fName = document.getElementById("fName").value;
var lName = document.getElementById("lName").value;
var race = document.getElementById("race").value;
var gender = document.getElementById("gender").value;

var deputyName = "<?php echo $_SESSION['user']->game_name; ?>"
var badge = "<?php echo $_SESSION['user']->badge_no; ?>"

var callsign = document.getElementById("callsign").value;
var additional = document.getElementById("additional").value;
var insurance = document.getElementById("insurance").value;

if (a1 == true) {
a1 = "X";
} else {
a1 = ""
}

if (a2 == true) {
a2 = "X";
} else {
a2 = ""
}

if (a3 == true) {
a3 = "X";
} else {
a3 = ""
}

if (a4 == true) {
a4 = "X";
} else {
a4 = ""
}

if (a5 == true) {
a5 = "X";
} else {
a5 = ""
}

if (a6 == true) {
a6 = "X";
} else {
a6 = ""
}

if (a7 == true) {
a7 = "X";
} else {
a7 = ""
}

if (a8 == true) {
a8 = "X";
} else {
a8 = ""
}

if (a9 == true) {
a9 = "X";
} else {
a9 = ""
}

if (a10 == true) {
  a10 = "X";
} else {
  a10 = ""
}

if (a11 == true) {
a11 = "X";
} else {
a11 = ""
}

if (a12 == true) {
a12 = "X";
} else {
a12 = ""
}

if (a13 == true) {
a13 = "X";
} else {
a13 = ""
}

if (a14 == true) {
a14 = "X";
} else {
a14 = ""
}

if (aOther == true) {
aOther = "X";
} else {
aOther = ""
}

  var format = "[divbox=white][font=Arial][center][b][size=80]COUNTY OF LOS SANTOS SHERIFF'S DEPARTMENT[/size][/b][/center][break][/break][aligntable=left,0,12,0,0,0,0][size=87][i]A TRADITION OF SERVICE[/i][/aligntable][aligntable=left,0,124,0,0,0,0]PARKING VIOLATION REPORT[/aligntable][aligntable=left,0,120,0,0,0,0][b]DATE:[/b] "+date+"[/aligntable][/size][/font]\n\
\n\
[font=Arial][b][size=75]1. VIOLATION INFORMATION[/size][/b]\n\
[size=60]COMPLETE IN UPPER CASE[/size][/font][table2=Arial][tr]\n\
[td][size=75][b]REASON[/b][/size]\n\
[size=65]FILL IN WITH 'X'[/size][/td]\n\
[td][size=75][b]DATE / TIME OF OCCURRENCE[/b][/size][/td]\n\
[td][size=75][b]LOC. OF OCCURENCE[/b][/size][/td][/tr]\n\
[tr]\n\
[td][size=75][ "+a1+" ] IN A MANNER THAT OBSTRUCTS A LANE OF TRAFFIC AND PREVENTS THE FLOW OF TRAFFIC.\n\
[ "+a2+" ] IN A MANNER THAT COMPLETELY OBSTRUCTS AN ALLEYWAY.\n\
[ "+a3+" ] IN A MANNER THAT OBSTRUCTS A PARKING LOT ENTRANCE.\n\
[ "+a4+" ] WITHIN A MARKED CROSSWALK.\n\
[ "+a5+" ] IN A MANNER THAT OBSTRUCTS MORE THAN 2/3 OF A SIDEWALK OR PEDESTRIAN PATH.\n\
[ "+a6+" ] ON ANY MEDIAN.\n\
[ "+a7+" ] FACING OPPOSING TRAFFIC.\n\
[ "+a8+" ] ON ANY BRIDGES OR TUNNELS.\n\
[ "+a9+" ] ON ANY HIGHWAY OR FREEWAY.\n\
[ "+a10+" ] ON RAILROAD TRACKS OR WITHIN RANGE OF BEING STRUCK BY A RAILROAD CAR.\n\
[ "+a11+" ] IN THE IMMEDIATE AMBULATORY PARKING OR BAY AREA OF A HOSPITAL OR CLINIC.\n\
[ "+a12+" ] IN THE IMMEDIATE VICINITY OF RODEO BANK'S ENTRANCE, INCLUDING THE SIDEWALK ADJACENT TO THE METAL BARRIERS.\n\
[ "+a13+" ] IN FRONT OF OR OBSTRUCTING A PRIVATE DRIVEWAY OR AN ENTRANCE OR EXIT TO A PRIVATE ROAD OR PATH.\n\
[ "+a14+" ] IN A MANNER NOT PERMITTED BY THE PROPERTY OWNER\n\
[ "+aOther+" ] OTHER: "+aOtherText+"[/size][/td]\n\
[td][size=75]"+date+", "+time+"[/td]\n\
[td][size=75]"+location+"[/size][/td][/tr][/table2]\n\
\n\
[font=Arial][b][size=75]2. VEHICLE INFORMATION[/size][/b]\n\
[size=60]COMPLETE IN UPPER CASE[/size][/font][table2=Arial]\n\
[tr]\n\
[td][size=75][b]MODEL[/b][/size][/td]\n\
[td][size=75][b]COLOR[/b][/size][/td]\n\
[td][size=75][b]LICENSE NO.[/b][/size][/td]\n\
[td][size=75][b]INSURANCE[/b][/size][/td]\n\
[/tr]\n\
[tr]\n\
[td][size=75]"+vehicle+"[/size][/td]\n\
[td][size=75]"+color+"[/size][/td]\n\
[td][size=75]"+plate+"[/size][/td]\n\
[td][size=75]"+insurance+"[/size][/td]\n\
[/tr]\n\
[/table2]\n\
\n\
[font=Arial][b][size=75]3. OWNER INFORMATION (IF APPLICABLE)[/size][/b]\n\
[size=60]COMPLETE IN UPPER CASE[/size][/font][table2=Arial]\n\
[tr]\n\
[td][size=75][b]L. NAME[/b][/size][/td]\n\
[td][size=75][b]F. NAME[/b][/size][/td]\n\
[td][size=75][b]RACE[/b][/size][/td]\n\
[td][size=75][b]GENDER[/b][/size][/td][/tr]\n\
[tr]\n\
[td][size=75]"+lName+"[/size][/td]\n\
[td][size=75]"+fName+"[/size][/td]\n\
[td][size=75]"+race+"[/size][/td]\n\
[td][size=75]"+gender+"[/size][/td]\n\
[/tr]\n\
[/table2]\n\
\n\
[font=Arial][b][size=75]4. DEPUTY INFORMATION[/size][/b]\n\
[size=60]COMPLETE IN UPPER CASE[/size][/font][table2=Arial]\n\
[tr]\n\
[td][size=75][b]FULL NAME[/b][/size][/td]\n\
[td][size=75][b]EMPLOYEE NO.[/b][/size][/td]\n\
[td][size=75][b]UNIT/CAR #[/b][/size][/td]\n\
[/tr]\n\
[tr]\n\
[td][size=75]"+deputyName+"[/size][/td]\n\
[td][size=75]"+badge+"[/size][/td]\n\
[td][size=75]"+callsign+"[/size][/td][/tr][/table2]\n\
\n\
[font=Arial][b][size=75]5. ADDITIONAL INFORMATION[/size][/b]\n\
[size=60]COMPLETE IN UPPER CASE[/size][/font][table2=Arial]\n\
[tr]\n\
[td][size=75][b]ADDITIONAL INFORMATION[/b][/size][/td][/tr]\n\
\n\
[tr][td][size=75]"+additional+"[/size][/td][/tr][/table2]\n\
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
