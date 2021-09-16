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
                                        <label class="col-sm-4 col-form-label">Explain What Happened</label>
                                        <textarea class="form-control col-sm-6" rows="3" id="form_describe" placeholder="Describe what happened. Justify each charge in-depth. Include how you found the suspect's identity and any other applicable information."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>Suspect Information</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Suspect Name</label>
                                        <input class="form-control col-sm-6" type="text" id="form_suspect">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Gender</label>
                                        <select class="form-control col-sm-6" id="form_gender"><option>Male</option><option>Female</option></select>
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Race</label>
                                        <input class="form-control col-sm-6" type="text" id="form_race">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Phone Number</label>
                                        <input class="form-control col-sm-6" type="number" id="form_susph">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Domestic Address</label>
                                        <input class="form-control col-sm-6" type="text" id="form_susaddr">
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
                //rank
                <?php
                $qqr = "SELECT * FROM ranks WHERE id='".$_SESSION['user']->rank."'";
                $rest=mysqli_query($conn,$qqr);
                $rowt=mysqli_fetch_object($rest);
                ?>
              var deputy = "<?php echo $_SESSION['user']->game_name; ?>"
              var rank = "<?php echo $rowt->title; ?>"
              var badge = "<?php echo $_SESSION['user']->badge_no; ?>"
              var suspect = document.getElementById("form_suspect").value;
              var gender = document.getElementById("form_gender").value;
              var describe = document.getElementById("form_describe").value;
              var race = document.getElementById("form_race").value;
              var susph = document.getElementById("form_susph").value;
              var susaddr = document.getElementById("form_susaddr").value;

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

              var format = "[divbox=white][center][font=Times]\n\
              [aligntable=right,0,0,0,0,0,0,transparent][img]https://i.imgur.com/FtNjzSu.png[/img][/aligntable]\n\
              [center][size=130][b]Los Santos County Sheriff's Department[/b][/size]\n\
              \n\
              [size=125]Application for Arrest Warrant[/size][/center][/center]\n\
              \n\
              [b]Affiant:[/b] [u]"+rank+" "+deputy+"[/u]\n\
              [b]Employee No.[/b] [u]"+badge+"[/u]\n\
              \n\
              [b]Suspect Name:[/b] [u]"+suspect+"[/u]\n\
              [b]Suspect Gender:[/b] [u]"+gender+"[/u]\n\
              [b]Suspect Race:[/b] "+race+"\n\
              [b]Suspect's Phone Number:[/b] [u]"+susph+"[/u]\n\
              [b]Suspect's Domestic Address(es):[/b] [u]"+susaddr+"[/u]\n\
              \n\
              [b]Alleged Offenses of Suspect:[/b] \n\
              [list]"+finalCharges+"[/list]  [b]Affidavit:[/b] [u]"+describe+"[/u]\n\
              \n\
              [b]Declaration:[/b] I, [u]"+rank+" "+deputy+"[/u], certify the authenticity of the affidavit above under threat of perjury. I request any authorized magistrate or officer to certify the contents of this application and issue an arrest warrant for the suspect listed above.[/font][/divbox]";

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
    <script src="js/bootstrap-select.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>


</body>
<?php include 'footer.php' ?>
</html>
