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
                                <strong>Declarant Information & Time</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Declarant Name</label>
                                        <input class="form-control col-sm-6" type="text" id="declarantName">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Rank</label>
                                        <select id="declarantRank" class="form-control col-sm-6"><option>Deputy Sheriff Trainee</option><option id="default">Deputy Sheriff</option><option>Deputy Sheriff (Bonus I)</option><option>Deputy Sheriff (Bonus II)</option><option>Sergeant</option><option>Lieutenant</option><option>Captain</option><option>Area Commander</option><option>Division Chief</option><option>Assistant Sheriff</option><option>Undersheriff</option><option>Sheriff</option></select>
                                    </div>
                                </div>
                                <hr>
                                <!--HR-->
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
                                <hr>
                                <!--HR-->
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Topic Number</label>
                                        <input class="form-control col-sm-6" type="text" id="warrant">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>Arrestee Information</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Arrestee Name</label>
                                        <input class="form-control col-sm-6" type="text" id="suspect">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Gender</label>
                                        <select class="form-control col-sm-6" id="gender"><option value="M">Male</option><option value="F">Female</option></select>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Race</label>
                                        <input class="form-control col-sm-6" type="text" id="race">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Domestic Address</label>
                                        <input class="form-control col-sm-6" type="text" id="address">
                                    </div>
                                </div>
                                <hr>
                                <!--HR-->
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Charges</label>
                                        <?php include 'charges.php'?>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <!-- <label class="col-sm-4 col-form-label"></label> -->
                                        <p class="col-sm-12" id="chargesGoHere"></p>
                                    </div>
                                </div>
                                <!-- <br /> -->
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Noteworthy Information</label>
                                        <input class="form-control col-sm-6" type="text" id="information" placeholder="Presumed armed & dangerous, priors for, etc.">
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


            <!-- JS Form Script-->
            <script type="text/javascript">
                // auto select Deputy Sheriff
                function selectOption(index){
                              document.getElementById("declarantRank").options.selectedIndex = index;
                            }
                            selectOption(1);

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

                let charges, classSelections, classArray = [], i;
                function calcArrestTime() {

                  classSelections = document.getElementById('classification'), classArray = [], i;
                  for (i = 0; i < classSelections.options.length ; i += 1) {
                      if (classSelections.options[i].selected) {
                          classArray.push(classSelections.options[i].value);
                          charges = classArray;
                          console.log(charges);
                      }
                  }

                  text = "<ul class='list-group'>";

                  for (i = 0; i < classArray.length; i++) {
                    text += "<li class='list-group-item align-text-bottom'>" + classArray[i] + "<input onKeyDown='if(this.value>15){this.value='15';}else if(this.value<1){this.value='1';} class='form-control col-sm-2 float-right' min='1' max='15' type='number' name='strikes' /></li>";
                  }
                  text += "</ul>";

                  document.getElementById("chargesGoHere").innerHTML = text;
                }

                function process() {
                  var warrant = document.getElementById("warrant").value;
                  var declarantName = document.getElementById("declarantName").value;
                  var declarantRank = document.getElementById("declarantRank").value;
                  var suspect = document.getElementById("suspect").value;
                  var address = document.getElementById("address").value;
                  var gender = document.getElementById("gender").value;
                  var issuingName = "<?php echo $_SESSION['user']->game_name; ?>"
                  <?php
                $qqr = "SELECT * FROM ranks WHERE id='".$_SESSION['user']->rank."'";
                $rest=mysqli_query($conn,$qqr);
                $rowt=mysqli_fetch_object($rest);
                ?>
                  var issuingTitle = "<?php echo $rowt->title; ?>"
                  var race = document.getElementById("race").value;
                //   var charges = double_cal(document.getElementById("charges").value);
                  var information = document.getElementById("information").value;
                  var date = document.getElementById("date").value;
                  var time = document.getElementById("time").value;

                  // CHARGES BELOW
                var strikes = [];
                $("input[name='strikes']").each(function() {
                    strikes.push($(this).val());
                });

                var finalCharges = "";
                for (i = 0; i < strikes.length; i++) {
                  if (strikes[i] == "") {
                    strikes[i] = "1"
                  } else if (strikes[i] <= 0) {
                    strikes[i] = "1";
                  }
                  finalCharges += classArray[i] + " " + strikes[i] + "x \n";
                }
                finalCharges = finalCharges.replace(/1x/g, "");

                  var format = "[divbox=white]\n\
                \n\
                [font=times][aligntable=right,0,0,0,0,0,transparent][img]https://i.imgur.com/g6vejKP.png?1[/img][/aligntable][center][size=130][b]SUPERIOR COURT OF SAN ANDREAS[/b][/size]\n\
                \n\
                [size=125]County of Los Santos[/size][/center]\n\
                \n\
                \n\
                [center][divbox=white][size=130][b]ARREST WARRANT[/b][/size]\n\
                [size=115]Probable Cause Arrest Warrant[/size][/divbox][/center]\n\
                \n\
                [b]PER THE PEOPLE OF THE STATE OF SAN ANDREAS:[/b]\n\
                \n\
                To any San Andreas peace officer,[aligntable=right,0,0,0,0,0,transparent][b]Warrant No.[/b] [u]"+warrant+"[/u][/aligntable]\n\
                \n\
                [b]Arrestee's name:[/b] [u]"+suspect+"[/u], hereinafter ''Arrestee''\n\
                \n\
                [b]Declarant's name and agency:[/b] [u]"+declarantRank+" "+declarantName+" — Los Santos County Sheriff's Department[/u], hereinafter ''Declarant''\n\
                \n\
                [b]ORDER:[/b] Evidenced by completion of an appropriate Arrest Warrant Application, I find there is probable cause to believe the Arrestee committed the crime(s) listed below. Per my established authority in the San Andreas State Constitution, you are hereby commanded to execute this warrant and bring Arrestee to the appropriate facility of incarceration pursuant to (12)11. of the San Andreas Penal Code.\n\
                \n\
                [b]Crime(s):[/b][list]"+finalCharges+"[/list]\n\
                \n\
                [aligntable=left,0,0,0,0,0,transparent][u]"+date+" "+time+"[/u]\n\
                Date and time warrant issued[/aligntable][aligntable=right,0,0,0,0,0,transparent][u]"+issuingTitle+" "+issuingName+"[/u]\n\
                Issuing Officer or Magistrate[/aligntable]\n\
                \n\
                \n\
                \n\
                [center][size=115][b]• Arrestee Information •[/b][/size]\n\
                [i]For identification purposes only[/i][/center]\n\
                \n\
                [b]Name:[/b] "+suspect+"\n\
                [b]Domestic Address(es) on File:[/b] "+address+"\n\
                [b]Sex:[/b] "+gender+" [b]Race:[/b] "+race+"\n\
                [b]Noteworthy Information:[/b] "+information+"[/font][/divbox]";

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
