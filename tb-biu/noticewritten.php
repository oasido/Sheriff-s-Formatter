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
                              <strong>Written Test Message</strong>
                           </div>
                           <div class="card-body">
                             <div class="form-inline">
                                 <div class="col-md-12 form-group">
                                     <select class="form-control col-sm-2 form-group" id="title">
                                       <option>Mr.</option>
                                       <option>Ms.</option>
                                       <option>Mrs.</option>
                                     </select>
                                     <input type="text" class="form-control col-sm-5 center" id="first" placeholder="Firstname">
                                     <input type="text" class="form-control col-sm-5 center" id="last" placeholder="Lastname">
                                 </div>
                             </div>
                             <hr>
                             <div class="form-inline">
                               <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Contact Address Line 1</label>
                                 <input class="form-control col-sm-6" type="text" id="address1" placeholder="Property# StreetName, Area">
                               </div>
                             </div>
                             <br>
                             <div class="form-inline">
                               <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Contact Address Line 2</label>
                                 <input class="form-control col-sm-6" type="text" id="address2" placeholder="Los Santos ZipCode, San Andreas">
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
               function process() {
                   var title = document.getElementById("title").value;
                   var first = document.getElementById("first").value;
                   var last = document.getElementById("last").value;
                   var address1 = document.getElementById("address1").value;
                   var address2 = document.getElementById("address2").value;
                   var theDate = moment(theDate).format('MMMM ' + 'Do, ' + 'YYYY');
                   var name = "<?php echo $_SESSION['user']->game_name; ?>";
                   var nameUp = name.toUpperCase();

                   <?php
                   $qqr = "SELECT * FROM ranks WHERE id='".$_SESSION['user']->rank."'";
                   $rest=mysqli_query($conn, $qqr);
                   $rowt=mysqli_fetch_object($rest);
                   ?>
                   var rank = "<?php echo $rowt->title; ?>"
                   if (rank == "Deputy Sheriff (Bonus II)" || rank == "Deputy Sheriff (Bonus I)"|| rank == "Deputy Sheriff Trainee") {
                     rank = "Deputy Sheriff";
                   }
                   var rankUp = rank.toUpperCase();
                   var format = `[font=Arial][color=black][divbox=#fefbee][center][img]https://www.upload.ee/image/11509873/letterhead.png[/img][/center]


[indent]`+theDate+`

`+title+` `+first+` `+last+`
`+address1+`
`+address2+`

Dear `+title+` `+last+`:

We have evaluated your application and qualifications for the position of Deputy Sheriff Trainee.

We are pleased to inform you that your application has been successful. The next step in the recruitment process is to attend and complete your Written Test.

You will shortly receive correspondence with instructions on completing your Written Test.

Should you have any questions, comments, or concerns, please contact Training Bureau Supervisory Staff.

Sincerely,

`+nameUp+`, `+rankUp+`

[img]https://i.imgur.com/Enee66N.png[/img]

A/Captain Alonso Ramirez
Training Bureau[/indent][/font]


[center][img]https://www.upload.ee/image/11509874/footer.png[/img][/center][/divbox]`;

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
