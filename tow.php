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
                           <strong>Vehicle & Charges Information</strong>
                        </div>
                        <div class="card-body">
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Registered Owner Name</label>
                                 <input type="text" class="form-control col-sm-6" id="owner"/>
                              </div>
                           </div>
                           <br />
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Plate Number</label>
                                 <input type="text" class="form-control col-sm-6" id="plate"/>
                              </div>
                           </div>
                           <br />
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Location</label>
                                 <input type="text" class="form-control col-sm-6" id="location"/>
                              </div>
                           </div>
                           <br />
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Reason For Confiscation</label>
                                 <textarea class="form-control col-sm-6" id="reason" placeholder="Separate charges with commas (,)!"></textarea>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card">
                        <div class="card-header">
                           <strong>Callsign & Time</strong>
                        </div>
                        <div class="card-body">
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Callsign (abbrevation)</label>
                                 <input class="form-control col-sm-6" type="text" id="callsign">
                              </div>
                           </div>
                           <br />
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Date</label>
                                 <input class="form-control col-sm-6" type="date" id="date">
                              </div>
                           </div>
                           <hr>
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Time</label>
                                 <input class="form-control col-sm-6" type="time" id="time">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <br />
               <div class="highlight-clean">
                  <div class="container" >
                     <center>
                        <button class="btn btn-success btn-lg" onClick="process()"><i class="fas fa-cog"></i> Generate Form</button><br /><br />
                        <h5 class="font-weight-bold">Generated text:</h5>
                        <textarea rows="5" class="form-control col-sm-6" id="finish"></textarea>
                     </center>
                  </div>
               </div>
            </div> <!--DIV OF PAGE-->
            <!-- aye-->
            <!-- JS Form Script-->
            <script type="text/javascript">
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
                       the_list += "" + split_cut[0] + "";
                       the_list += "\n";
                       for (k = 1; k < split_cut.length; k++) {
                           the_list += "" + split_cut[k] + "\n";
                       }
                       the_list += "\n";
                   }
                   return the_list;
               }


               function process() {
                   var date = document.getElementById("date").value;
                   var time = document.getElementById("time").value;
                   var location = document.getElementById("location").value;
                   var owner = document.getElementById("owner").value;
                   var plate = document.getElementById("plate").value;
                   var reason = double_cal(document.getElementById("reason").value);
                   //  var deputy = document.getElementById("deputy").value;
                   //  var badge = document.getElementById("badge").value;
                   let deputy = "<?php echo $_SESSION['user']->game_name; ?>"
                   let badge = "<?php echo $_SESSION['user']->badge_no; ?>"
                   let station = "<?php echo $_SESSION['user']->station; ?>"
                   var callsign = document.getElementById("callsign").value;
                   var format = "[divbox=white][font=Arial][center][b][size=80]COUNTY OF LOS SANTOS SHERIFF'S DEPARTMENT[/size][/b][/center][break][/break][aligntable=left,0,12,0,0,0,0][size=87][i]A TRADITION OF SERVICE[/i][/aligntable][aligntable=left,0,110,0,0,0,0]VEHICLE CONFISCATION REPORT[/aligntable][aligntable=left,0,150,0,0,0,0][b]DATE:[/b] "+date+"[/aligntable][/size][/font]\n\
               \n\
               [table2=Arial][tr]\n\
               [td][size=75][b]REASON FOR CONFISCATION[/b][/size][/td]\n\
               [td][size=75][b]DATE, TIME, DAY OF OCCURRENCE[/b][/size][/td]\n\
               [td][size=75][b]LOC. OF OCCURENCE[/b][/size][/td]\n\
               [td][size=75][b]REG. OWNER[/b][/size][/td]\n\
               [td][size=75][b]LICENSE NO.[/b][/size][/td][/tr]\n\
               [tr]\n\
               [td][size=75]"+reason+"[/size][/td]\n\
               [td][size=75]"+date+", "+time+"[/td]\n\
               [td][size=75]"+location+"[/size][/td]\n\
               [td][size=75]"+owner+"[/size][/td]\n\
               [td][size=75]"+plate+"[/size][/td][/tr][/table2]\n\
               \n\
               [table2=Arial][tr]\n\
               [td][size=75][b]BY DEP.[/b][/size][/td]\n\
               [td][size=75][b]EMPLOYEE #[/b][/size][/td]\n\
               [td][size=75][b]STATION/UNIT[/b][/size][/td]\n\
               [td][size=75][b]UNIT/CAR #[/b][/size][/td]\n\
               [/tr]\n\
               [tr]\n\
               [td][size=75]"+deputy+"[/size][/td]\n\
               [td][size=75]"+badge+"[/size][/td]\n\
               [td][size=75]"+station+"[/size][/td]\n\
               [td][size=75]"+callsign+"[/size][/td][/table2]\n\
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
