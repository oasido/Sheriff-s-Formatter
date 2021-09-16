<?php
include('../main.php');
include '../header.php';
?>
         <!-- SEPERATOR -->
         <div id="content-wrapper">
            <div class="container-fluid">
               <div class="container" style="max-width: 50rem;">
                  <div class="">
                     <div class="card">
                           <div class="card-header">
                              <strong>Pending Application Form</strong>
                           </div>
                           <div class="card-body">
                              <div class="form-inline">
                                 <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Applicant's Name</label>
                                    <input class="form-control col-sm-6" type="text" id="nameOfApplicant" placeholder="Firstname Lastname">
                                 </div>
                              </div>
                              <br />
                              <div class="form-inline">
                                 <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Administrative File</label>
                                    <input class="form-control col-sm-6" type="text" id="adminFile" placeholder="Paste the URL here">
                                 </div>
                              </div>
                              <hr>
                              <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                       <label class="col-sm-4 col-form-label">Context</label>
                                       <textarea class="form-control col-sm-6" id="context" placeholder=""></textarea>
                                    </div>
                                 </div>
                           </div>
                        </div>
                  </div>
                  <div class="col">

                  </div>
               </div>
               <br />
               <div class="highlight-clean">
                  <div class="container" >
                     <center>
                        <button class="btn btn-success btn-lg" onClick="process();"><i class="fas fa-cog"></i> Generate Form</button><br /><br />
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
                   var nameOfApplicant = document.getElementById("nameOfApplicant").value;
                   var adminFile = document.getElementById("adminFile").value;
                   var context = document.getElementById("context").value;
                   var name = "<?php echo $_SESSION['user']->game_name; ?>";
                   var format = "[font=Arial][center][b][size=80]TRAINING BUREAU[/b][/size]\n\
[size=87]PENDING APPLICATION[/size][/center]\n\
\n\
[b]Name of applicant:[/b] "+nameOfApplicant+"\n\
[b]Name of handler:[/b] "+name+"\n\
[b]Administrative file:[/b] [url="+adminFile+"]ACCESS[/url]\n\
\n\
[b]Context:[/b] "+context+"";

                   document.getElementById("finish").value = format;
               }
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
      <script src="../js/bootstrap-select.js"></script>
   </body>
   <?php include '../footer.php' ?>
</html>
