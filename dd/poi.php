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
                                <strong>File & DMV Information</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Name</label>
                                        <input type="text" class="form-control col-sm-6" placeholder="Full name of POI here" id="name" />
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Alias/Moniker</label>
                                        <input type="text" class="form-control col-sm-6" placeholder="" id="alias" />
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Birthdate</label>
                                        <input type="date" class="form-control col-sm-6" placeholder="" id="birthdate" />
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Gender</label>
                                        <select class="form-control col-sm-6" id="gender">
                                          <option disabled selected value="">Please choose..</option>
                                          <option value="M">Male</option>
                                          <option value="F">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Race</label>
                                        <input type="text" class="form-control col-sm-6" placeholder="" id="race" />
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Description</label>
                                        <input type="text" class="form-control col-sm-6" placeholder="" id="desc" />
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Phone Number</label>
                                        <input type="number" class="form-control col-sm-6" placeholder="" id="phone" />
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Address</label>
                                        <input type="text" class="form-control col-sm-6" placeholder="" id="address" />
                                    </div>
                                </div>
                                <hr />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Vehicle Type</label>
                                        <input type="text" class="form-control col-sm-6" placeholder="" id="vehicleType" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Vehicle Model</label>
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
                                <br>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Vehicle Color</label>
                                        <input type="text" class="form-control col-sm-6" placeholder="" id="vehicleColor" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Vehicle Plate</label>
                                        <input type="text" class="form-control col-sm-6" placeholder="" id="vehiclePlate" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <strong>POI Notes</strong>
                          </div>
                          <div class="card-body">
                                <div class="form-inline">
                                  <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Notes</label>
                                    <textarea rows="5" class="form-control col-sm-6 id" id="notes"></textarea>
                                  </div>
                                </div>
                          </div>
                      </div>
                      <br>
                      <div class="card">
                          <div class="card-header">
                              <strong>Photo/Belonging Picture</strong>
                          </div>
                          <div class="card-body">
                            <form action="index.html" method="post">
                              <div class="input_fields_container_part">
                                <!-- container to dupe -->
                                <div class="form-inline">
                                  <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">1.</label>
                                    <input name="evidenceAttachments" type="text" value="" placeholder="**Insert attachment here**" class="form-control col-sm-6"/>
                                  </div>
                                </div>
                                <div class="aye"></div>
                              </div>
                              <br/>
                              <center>
                                <a class="add_more_button" style="color: green;">
                                  <i class="fas fa-plus-circle" style="font-size: 25px;"></i>
                                </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="remove_field" style="font-size: 25px">
                                  <i class="fas fa-times" style="color:red;"></i>
                                </a>
                              </center>
                            </form>
                          </div>
                      </div>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <strong>Additional Information</strong>
                            </div>
                            <div class="card-body">
                              <form action="index.html" method="post">
                                <div class="input_fields_container_part">
                                  <!-- container to dupe -->
                                  <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                      <label class="col-sm-4 col-form-label">1.</label>
                                      <input name="additionalAttachments" type="text" value="" placeholder="Casefile/Inv. Report Name" class="form-control col-sm-4"/>
                                      &nbsp;
                                      <input name="additionalURL" type="text" value="" placeholder="Direct URL goes here" class="form-control col-sm-3"/>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                      <label class="col-sm-4 col-form-label"></label>
                                      <textarea name="additionalAttachmentsText" placeholder="Explanation of the attachment" rows="3" class="form-control col-sm-7"></textarea>
                                    </div>
                                  </div>
                                  <div class="aye2"></div>
                                </div>
                                <br/>
                                <center>
                                  <a class="add_more_button2" style="color: green;">
                                    <i class="fas fa-plus-circle" style="font-size: 25px;"></i>
                                  </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="remove_field2" style="font-size: 25px">
                                    <i class="fas fa-times" style="color:red;"></i>
                                  </a>
                                </center>
                              </form>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <br>
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
            <!--DIV OF PAGE-->
            <!-- JS Form Script-->
            <script type="text/javascript">

                // evidence add/remove
                let x = 1; //initialize counter for text box
                $(document).ready(function () {
                  var max_fields_limit = 7; //set limit for maximum input fields

                  $('.add_more_button').click(function (e) { //click event on add more fields button having class add_more_button
                    e.preventDefault();
                    if (x < max_fields_limit) { //check conditions
                      x++; //counter increment
                      $('.aye').append(
                        "<div class='ayedditional'><br /><div class='form-inline'><div class='col-md-12 form-group'><label class='col-sm-4 col-form-label'>" + x +
                        ".</label><input name='evidenceAttachments' type='text' value='' class='form-control col-sm-6'/></div></div></div>"
                      ); //add input field
                    }
                  });

                  $('.remove_field').on('click', function (e) { //user click on remove text links
                    e.preventDefault();
                    $('.ayedditional:last').remove();
                    x--;
                    if(x<1){x=1};
                  })
                });

                // additional add/remove
                let x2 = 1;
                $(document).ready(function () {
                  var max_fields_limit2 = 7; //set limit for maximum input fields

                  $('.add_more_button2').click(function (e) { //click event on add more fields button having class add_more_button
                    e.preventDefault();
                    if (x2 < max_fields_limit2) { //check conditions
                      x2++; //counter increment
                      $('.aye2').append(
                        "<div class=ayedditional2><br /><div class='form-inline'> <div class='col-md-12 form-group'> <label class='col-sm-4 col-form-label'>"+x2+".</label> <input name='additionalAttachments' type='text' value='' placeholder='Casefile/Inv. Report Name' class='form-control col-sm-4'/> &nbsp; <input name='additionalURL' type='text' value='' placeholder='Direct URL goes here' class='form-control col-sm-3'/> </div></div><br><div class='form-inline'> <div class='col-md-12 form-group'> <label class='col-sm-4 col-form-label'></label> <textarea name='additionalAttachmentsText' placeholder='Explanation of the attachment' rows='3' class='form-control col-sm-7'></textarea> </div></div></div>"
                      ); //add input field
                    }
                  });

                  $('.remove_field2').on('click', function (e) { //user click on remove text links
                    e.preventDefault();
                    $('.ayedditional2:last').remove();
                    x2--;
                    if(x2<1){x2=1};
                  })
                });


                function process() {

                    var name = document.getElementById("name").value;
                    var alias = document.getElementById("alias").value;
                    var birthdate = document.getElementById("birthdate").value;
                    var race = document.getElementById("race").value;
                    var gender = document.getElementById("gender").value;
                    var desc = document.getElementById("desc").value;
                    var notes = document.getElementById("notes").value;
                    var phone = document.getElementById("phone").value;
                    var address = document.getElementById("address").value;
                    var vehicleType = document.getElementById("vehicleType").value;
                    var vehicle = document.getElementById("vehicle").value;
                    var vehicleColor = document.getElementById("vehicleColor").value;
                    var vehiclePlate = document.getElementById("vehiclePlate").value;


                   // for the evidence
                   var values = [];
                     $("input[name='evidenceAttachments']").each(function () {
                       values.push($(this).val());
                      });

                      for (var i = 0, j = 1; i < values.length; i++, j++) {
                        values[i] = "[b]ATTACHMENT ("+[j]+") — [/b]" + values[i] + "\n";
                      }



                      // for the additional
                      var urlArray = [];
                      var urlArrayVar = document.getElementsByName("additionalURL");
                      for (var i = 0; i < urlArrayVar.length; i++) {
                        urlArray.push(urlArrayVar[i].value);
                      }

                      var casefileArray = [];
                      var casefileArrayVar = document.getElementsByName("additionalAttachments");
                      for (var i = 0; i < casefileArrayVar.length; i++) {
                        casefileArray.push(casefileArrayVar[i].value);
                      }

                      var additionalInfoArray = [];
                      var additionalInfoArrayVar = document.getElementsByName("additionalAttachmentsText");
                      for (var i = 0; i < additionalInfoArrayVar.length; i++) {
                        additionalInfoArray.push(additionalInfoArrayVar[i].value);
                      }

                      let finalText = "";
                      let counter = 1;
                      for (i = 0; i < x2; i++) {
                        finalText += '\n[B]ATTACMENT ('+counter+')[/B] — [url='+urlArray[i]+']'+casefileArray[i]+'[/url]' + '\n'+additionalInfoArray[i]+'';
                        counter++;
                      }


                   var format = `[divbox=white][HR][/HR]
[aligntable=right,90,0,70,0,0,0]
[img]https://www.upload.ee/image/11131768/Homicide_logo_1.png[/img]
[/aligntable]
[aligntable=center,0,165,0,0,0,0]
[center]
[font=Arial][b]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT[/b]
HOMICIDE BUREAU
[size=87]HOMICIDE DETAIL[/size][/font][/center]
[break][/break]
[center][size=100][color=red][FONT=Arial][B]ATTN: FOR INTERNAL USE ONLY[/B][/FONT][/color][/size][/center][/aligntable][hr][/hr]


[TABLE="class: cms_table, width: 700, align: left"]
[TR="bgcolor: #7086ff"]
[TD][COLOR=black][FONT=arial][B]1. FILE INFORMATION[/B][/FONT][/COLOR][/TD]
[TD][COLOR=black][FONT=arial]
[/FONT][/COLOR][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]1.1. NAME[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]`+name+`[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]1.2. ALIAS/MONIKER[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]`+alias+`[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]1.3. DATE OF BIRTH[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]`+birthdate+`[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]1.4. SEX[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]`+gender+`[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]1.5. RACE[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]`+race+`[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]1.6. DESC[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]`+desc+`[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]1.7. PHONE NUMBER[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]`+phone+`[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]1.8. DOMESTIC ADDRESS[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]`+address+`[/COLOR][/FONT][/TD]
[/TR]
[/TABLE]

[TABLE="class: cms_table, width: 700, align: left"]
[TR="bgcolor: #7086ff"]
[TD][COLOR=black][FONT=arial][B]2. DMV RECORD[/B][/FONT][/COLOR][/TD]
[TD][COLOR=black][FONT=arial]
[/FONT][/COLOR][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]2.1. VEH. TYPE[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]`+vehicleType+`[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]2.2. VEH. MODEL[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]`+vehicle+`[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]2.3. VEH. COLOR[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]`+vehicleColor+`[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]2.4. LICENSE NO.[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]`+vehiclePlate+`[/COLOR][/FONT][/TD]
[/TR]
[/TABLE]

[b]NOTES[/b]:
[INDENT]`+notes+`[/INDENT]
[COLOR=TRANSPARENT].[/COLOR]
[b]PERSONAL PHOTO/BELONING PICTURES[/b]:
[INDENT]`+values.join("")+`[/INDENT]
[COLOR=TRANSPARENT].[/COLOR]
[b]ADDITIONAL INFO.[/b]:
[INDENT]`+finalText+`[/INDENT]
[COLOR=TRANSPARENT]LSSD[/COLOR]
[/divbox]`;

                   document.getElementById("finish").value = format;
                }
            </script>
        </div>
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
