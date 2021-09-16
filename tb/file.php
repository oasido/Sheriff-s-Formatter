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
                              <strong>Interviewee Details & Application File</strong>
                           </div>
                           <div class="card-body">
                              <div class="form-inline">
                                 <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Interviewee Full Name</label>
                                    <input class="form-control col-sm-6" type="text" id="trainee" placeholder="Firstname Lastname">
                                 </div>
                              </div>
                              <br />
                              <div class="form-inline">
                                 <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Education</label>
                                    <input class="form-control col-sm-6" type="text" id="education" placeholder="Highest education">
                                 </div>
                              </div>
                              <br />
                              <div class="form-inline">
                                 <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Age</label>
                                    <input class="form-control col-sm-6" type="number" id="age">
                                 </div>
                              </div>
                              <br />
                              <div class="form-inline">
                                 <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Gender</label>
                                    <select class="form-control col-sm-6" id="gender">
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                    </select>
                                 </div>
                              </div>
                              <hr>
                              <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                       <label class="col-sm-4 col-form-label">Application URL</label>
                                       <input class="form-control col-sm-6" type="text" id="link" placeholder="Paste the URL here">
                                    </div>
                                 </div>
                           </div>
                        </div>
                  </div>
                  <div class="col">
                    <div class="card">
                          <div class="card-header">
                             <strong>Checklist</strong>
                          </div>
                          <div class="card-body">
                            <div class="form-inline">
                              <div class="col-md-12 form-group">
                                <input type="checkbox" id="a1"/>
                                <label for="a1">
                                  Applicant has a valid San Andreas driver license
                                </label>
                              </div>
                            </div>
                             <!-- <br /> -->
                             <div class="form-inline">
                               <div class="col-md-12 form-group">
                                 <input type="checkbox" id="a2"/>
                                 <label for="a2">
                                   Applicant has answered all questions
                                 </label>
                               </div>
                             </div>
                              <!-- <br /> -->
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <input type="checkbox" id="a3"/>
                                  <label for="a3">
                                    Applicant has not maliciously omitted or provided false information
                                  </label>
                                </div>
                              </div>
                               <!-- <br /> -->
                               <div class="form-inline">
                                 <div class="col-md-12 form-group">
                                   <input type="checkbox" id="a4"/>
                                   <label for="a4">
                                     Applicant has a clean criminal record
                                   </label>
                                 </div>
                               </div>
                                <!-- <br /> -->
                                <div class="form-inline">
                                  <div class="col-md-12 form-group">
                                    <input type="checkbox" id="a5"/>
                                    <label for="a5">
                                      Applicant is a U.S. citizen or is a permanent resident alien who has applied for citizenship
                                    </label>
                                  </div>
                                </div>
                                 <!-- <br /> -->
                                 <div class="form-inline">
                                   <div class="col-md-12 form-group">
                                     <input type="checkbox" id="a6"/>
                                     <label for="a6">
                                       Applicant has graduated from a U.S. high school or has equivalent proficiency or higher education
                                     </label>
                                   </div>
                                 </div>
                                  <!-- <br /> -->
                                  <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                      <input type="checkbox" id="a7"/>
                                      <label for="a7">
                                        <strong>((</strong> Applicant has a 'Firstname_Lastname' naming format <strong>))</strong>
                                      </label>
                                    </div>
                                  </div>
                                   <!-- <br /> -->
                                   <div class="form-inline">
                                     <div class="col-md-12 form-group">
                                       <input type="checkbox" id="a8"/>
                                       <label for="a8">
                                         <strong>((</strong> Applicant has not received any server punishment in the past 2 months excluding basic kicks <strong>))</strong>
                                       </label>
                                     </div>
                                   </div>
                                    <!-- <br /> -->
                                    <div class="form-inline">
                                      <div class="col-md-12 form-group">
                                        <input type="checkbox" id="a9"/>
                                        <label for="a9">
                                          <strong>((</strong> Applicant has a clean community image <strong>))</strong>
                                        </label>
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
                   var trainee = document.getElementById("trainee").value;
                   var education = document.getElementById("education").value;
                   var age = document.getElementById("age").value;
                   var gender = document.getElementById("gender").value;
                   var link = document.getElementById("link").value;
                   var name = "<?php echo $_SESSION['user']->game_name; ?>";

                   // Checklist
                   var a1 = document.getElementById("a1").checked;
                   var a2 = document.getElementById("a2").checked;
                   var a3 = document.getElementById("a3").checked;
                   var a4 = document.getElementById("a4").checked;
                   var a5 = document.getElementById("a5").checked;
                   var a6 = document.getElementById("a6").checked;
                   var a7 = document.getElementById("a7").checked;
                   var a8 = document.getElementById("a8").checked;
                   var a9 = document.getElementById("a9").checked;
                   // if checks are checked or not
                   if (a1 == true) {
                   a1 = "✓";
                   } else {
                   a1 = "—";
                   }

                   if (a2 == true) {
                   a2 = "✓";
                   } else {
                   a2 = "—";
                   }

                   if (a3 == true) {
                   a3 = "✓";
                   } else {
                   a3 = "—";
                   }

                   if (a4 == true) {
                   a4 = "✓";
                   } else {
                   a4 = "—";
                   }

                   if (a5 == true) {
                   a5 = "✓";
                   } else {
                   a5 = "—";
                   }

                   if (a6 == true) {
                   a6 = "✓";
                   } else {
                   a6 = "—";
                   }

                   if (a7 == true) {
                   a7 = "✓";
                   } else {
                   a7 = "—";
                   }

                   if (a8 == true) {
                   a8 = "✓";
                   } else {
                   a8 = "—";
                   }

                   if (a9 == true) {
                   a9 = "✓";
                   } else {
                   a9 = "—";
                   }
                   // end of if checks are checked or not
                   var format = `[font=Arial][center][b][size=80]TRAINING BUREAU[/b][/size]
[size=87]ADMINISTRATIVE FILE[/size][/center]

[b]Contact Information[/b]
[indent]Recruit name: `+trainee+`
Application: [url=`+link+`]ACCESS[/url]
Handler name: `+name+`
[/indent]
[b]Personal Information[/b]
[indent]Highest education: `+education+`
Age: `+age+`
Gender: `+gender+`
[/indent]
[b]Background & Requirement Checklist[/b]
[indent][`+a1+`] Applicant has a valid San Andreas driver license
[`+a2+`] Applicant has answered all questions
[`+a3+`] Applicant has not maliciously omitted or provided false information
[`+a4+`] Applicant has a clean criminal record
[`+a5+`] Applicant is a U.S. citizen or is a permanent resident alien who has applied for citizenship
[`+a6+`] Applicant has graduated from a U.S. high school or has equivalent proficiency or higher education
[`+a7+`] [ooc]Applicant has a 'Firstname_Lastname' naming format[/ooc]
[`+a8+`] [ooc]Applicant has not received any server punishment in the past 2 months excluding basic kicks[/ooc]
[`+a9+`] [ooc]Applicant has a clean community image[/ooc]

[b]Checked by Supervisor[/b]: Fname Lname
[/indent]
[b]Interview Endorsements[/b]
[indent]BIU Supervisor:
RTU Supervisor:
[/indent]
[b]Academy Progress[/b]
[indent][url=LINK]Course 1[/url] - DD/MMM/YYYY
[url=LINK]Course 2[/url] - DD/MMM/YYYY
[url=LINK]Course 3[/url] - DD/MMM/YYYY
[/indent]`;

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
