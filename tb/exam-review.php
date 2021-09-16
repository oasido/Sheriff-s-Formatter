<?php
include('../main.php');
include '../header.php';
?>
         <!-- SEPERATOR -->
         <div id="content-wrapper">
            <form id="form" onchange="totalUpdate();">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-7 col-md-12">
                     <div class="card">
                        <div class="card-header">
                           <strong>Exam Answers</strong>
                        </div>
                        <div class="card-body">
                           <u>Multiple Choice</u>
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Question 1</label>
                                 <select id="q1" class="form-control col-sm-6 selectpicker" multiple data-max-options="1"><option value="1">True</option><option value="0">False</option></select>
                              </div>
                           </div>
                           <br />
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Question 2</label>
                                 <select id="q2" class="form-control col-sm-6 selectpicker" multiple data-max-options="1"><option value="1">True</option><option value="0">False</option></select>
                              </div>
                           </div>
                           <br />
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Question 3</label>
                                 <select id="q3" class="form-control col-sm-6 selectpicker" multiple data-max-options="1"><option value="1">True</option><option value="0">False</option></select>
                              </div>
                           </div>
                           <br />
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Question 4</label>
                                 <select id="q4" class="form-control col-sm-6 selectpicker" multiple data-max-options="1"><option value="1">True</option><option value="0">False</option></select>
                              </div>
                           </div>
                           <br />
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Question 5</label>
                                 <select id="q5" class="form-control col-sm-6 selectpicker" multiple data-max-options="1"><option value="1">True</option><option value="0">False</option></select>
                              </div>
                           </div>
                           <br />
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Question 6</label>
                                 <select id="q6" class="form-control col-sm-6 selectpicker" multiple data-max-options="1"><option value="1">True</option><option value="0">False</option></select>
                              </div>
                           </div>
                           <hr>
                           <u>Short-Answer Response</u>
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Question 1</label>
                                 <input type="range" min="0" max="3" value="0" class="slider" id="q2a"><p class="h6">&nbsp;&nbsp;&nbsp;<span id="q2aP">0</span>/3</p>
                              </div>
                           </div>
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label"></label>
                                 <textarea class="form-control col-sm-6" id="q2aC" placeholder="Type your comment"></textarea>
                              </div>
                           </div>
                           <br />
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Question 2</label>
                                 <input type="range" min="0" max="3" value="0" class="slider" id="q2b"><p class="h6">&nbsp;&nbsp;&nbsp;<span id="q2bP">0</span>/3</p>
                              </div>
                           </div>
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label"></label>
                                 <textarea class="form-control col-sm-6" id="q2bC" placeholder="Type your comment"></textarea>
                              </div>
                           </div>
                           <br />
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Question 3</label>
                                 <input type="range" min="0" max="3" value="0" class="slider" id="q2c"><p class="h6">&nbsp;&nbsp;&nbsp;<span id="q2cP">0</span>/3</p>
                              </div>
                           </div>
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label"></label>
                                 <textarea class="form-control col-sm-6" id="q2cC" placeholder="Type your comment"></textarea>
                              </div>
                           </div>
                           <br />
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Question 4</label>
                                 <input type="range" min="0" max="3" value="0" class="slider" id="q2d"><p class="h6">&nbsp;&nbsp;&nbsp;<span id="q2dP">0</span>/3</p>
                              </div>
                           </div>
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label"></label>
                                 <textarea class="form-control col-sm-6" id="q2dC" placeholder="Type your comment"></textarea>
                              </div>
                           </div>
                           <br />
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Question 5</label>
                                 <input type="range" min="0" max="3" value="0" class="slider" id="q2e"><p class="h6">&nbsp;&nbsp;&nbsp;<span id="q2eP">0</span>/3</p>
                              </div>
                           </div>
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label"></label>
                                 <textarea class="form-control col-sm-6" id="q2eC" placeholder="Type your comment"></textarea>
                              </div>
                           </div>
                           <hr>
                           <u>Essay Response</u>
                           <div class="form-inline">
                              <div class="col-md-12 form-group">
                                 <label class="col-sm-4 col-form-label">Question 1</label>
                                 <input type="range" min="0" max="5" value="0" class="slider" id="q3a"><p class="h6">&nbsp;&nbsp;&nbsp;<span id="q3aP">0</span>/5</p>
                              </div>
                           </div>
                           <div class="form-inline">
                           <div class="col-md-12 form-group">
                              <label class="col-sm-4 col-form-label"></label>
                              <textarea class="form-control col-sm-6" id="q3aC" placeholder="Type your comment"></textarea>
                           </div>
                        </div>
                        <br />
                        <div class="form-inline">
                           <div class="col-md-12 form-group">
                              <label class="col-sm-4 col-form-label">Question 2</label>
                              <input type="range" min="0" max="5" value="0" class="slider" id="q3b"><p class="h6">&nbsp;&nbsp;&nbsp;<span id="q3bP">0</span>/5</p>
                           </div>
                        </div>
                        <div class="form-inline">
                           <div class="col-md-12 form-group">
                              <label class="col-sm-4 col-form-label"></label>
                              <textarea class="form-control col-sm-6" id="q3bC" placeholder="Type your comment"></textarea>
                           </div>
                        </div>
                        <div class="form-inline">
                           <div class="col-md-12 form-group">
                              <label class="col-sm-4 col-form-label">(( Question 3 ))</label>
                              <input type="range" min="0" max="5" value="0" class="slider" id="q3c"><p class="h6">&nbsp;&nbsp;&nbsp;<span id="q3cP">0</span>/5</p>
                           </div>
                        </div>
                        <div class="form-inline">
                           <div class="col-md-12 form-group">
                              <label class="col-sm-4 col-form-label"></label>
                              <textarea class="form-control col-sm-6" id="q3cC" placeholder="Type your comment"></textarea>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
                  <div class="col">
                     <div class="card">
                           <div class="card-header">
                              <strong>Examination Score</strong>
                           </div>
                           <div class="card-body">
                              <div class="form-inline">
                                 <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Exam Total</label>
                                    <p id="totalStyle" class="h6"><span id="totalScore">0</span>/36</p>
                                 </div>
                              </div>
                              <br />
                              <div class="form-inline">
                                 <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Percentage</label>
                                    <p id="percentStyle" class="h6"><span id="percent">0</span>%</p>
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
                                 <textarea rows="5" class="form-control col-sm-10" id="finish"></textarea>
                              </center>
                           </div>
                        </div>
                  </div>
               </div>
            </form>
            </div> <!--DIV OF PAGE-->
            <!-- aye-->
            <!-- JS Form Script-->
            <script type="text/javascript">
               
               // Sliders JS
               let q2a = document.getElementById("q2a");
               let q2aP = document.getElementById("q2aP");
               q2aP.innerHTML = q2a.value;

               q2a.oninput = function() {
               q2aP.innerHTML = this.value;
               }
               //
               let q2b = document.getElementById("q2b");
               let q2bP = document.getElementById("q2bP");
               q2bP.innerHTML = q2b.value;

               q2b.oninput = function() {
               q2bP.innerHTML = this.value;
               }
               //
               let q2c = document.getElementById("q2c");
               let q2cP = document.getElementById("q2cP");
               q2cP.innerHTML = q2c.value;

               q2c.oninput = function() {
               q2cP.innerHTML = this.value;
               }
               //
               let q2d = document.getElementById("q2d");
               let q2dP = document.getElementById("q2dP");
               q2dP.innerHTML = q2d.value;

               q2d.oninput = function() {
               q2dP.innerHTML = this.value;
               }
               //
               let q2e = document.getElementById("q2e");
               let q2eP = document.getElementById("q2eP");
               q2eP.innerHTML = q2e.value;

               q2e.oninput = function() {
               q2eP.innerHTML = this.value;
               }
               //
               let q3a = document.getElementById("q3a");
               let q3aP = document.getElementById("q3aP");
               q3aP.innerHTML = q3a.value;

               q3a.oninput = function() {
               q3aP.innerHTML = this.value;
               }
               //
               let q3b = document.getElementById("q3b");
               let q3bP = document.getElementById("q3bP");
               q3bP.innerHTML = q3b.value;

               q3b.oninput = function() {
               q3bP.innerHTML = this.value;
               }
               //
               let q3c = document.getElementById("q3c");
               let q3cP = document.getElementById("q3cP");
               q3cP.innerHTML = q3c.value;

               q3c.oninput = function() {
               q3cP.innerHTML = this.value;
               }
               //

               function totalUpdate() {
                  totalScore = 0 || 0;
                  percent = 0 || 0;
                  if (parseInt(document.getElementById('q1').value) == 1) {
                     totalScore +=1;
                  }
                  if (parseInt(document.getElementById('q2').value) == 1) {
                     totalScore +=1;
                  }
                  if (parseInt(document.getElementById('q3').value) == 1) {
                     totalScore +=1;
                  }
                  if (parseInt(document.getElementById('q4').value) == 1) {
                     totalScore +=1;
                  }
                  if (parseInt(document.getElementById('q5').value) == 1) {
                     totalScore +=1;
                  }
                  if (parseInt(document.getElementById('q6').value) == 1) {
                     totalScore +=1;
                  }
                  totalScore += parseInt(document.getElementById('q2a').value) || 0;
                  totalScore += parseInt(document.getElementById('q2b').value) || 0;
                  totalScore += parseInt(document.getElementById('q2c').value) || 0;
                  totalScore += parseInt(document.getElementById('q2d').value) || 0;
                  totalScore += parseInt(document.getElementById('q2e').value) || 0;
                  totalScore += parseInt(document.getElementById('q3a').value) || 0;
                  totalScore += parseInt(document.getElementById('q3b').value) || 0;
                  totalScore += parseInt(document.getElementById('q3c').value) || 0;
                  percent = Math.floor((100 * totalScore) / 36)   || 0;
                  
                  if (percent >= 80 && totalScore >= 29) {
                     document.getElementById("percentStyle").style.color = "green"
                     document.getElementById("totalStyle").style.color = "green"
                  }

                  if (percent < 80 && totalScore < 29) {
                     document.getElementById("percentStyle").style.color = "red"
                     document.getElementById("totalStyle").style.color = "red"
                  }
                  document.getElementById("totalScore").innerHTML = totalScore || 0;
                  document.getElementById("percent").innerHTML = percent || 0;
               }

               // prevent refresh <form></form>
               $("#form").submit(function(e) {
               e.preventDefault();
               });


               function process() {
                   // let trainee = document.getElementById("trainee").value;

                   let q1 = parseInt(document.getElementById('q1').value)  || 0;
                   let q2 = parseInt(document.getElementById('q2').value)  || 0;
                   let q3 = parseInt(document.getElementById('q3').value)  || 0;
                   let q4 = parseInt(document.getElementById('q4').value)  || 0;
                   let q5 = parseInt(document.getElementById('q5').value)  || 0;
                   let q6 = parseInt(document.getElementById('q6').value)  || 0;

                   q2a = parseInt(document.getElementById('q2a').value);
                   q2b = parseInt(document.getElementById('q2b').value);
                   q2c = parseInt(document.getElementById('q2c').value);
                   q2d = parseInt(document.getElementById('q2d').value);
                   q2e = parseInt(document.getElementById('q2e').value);
                   q3a = parseInt(document.getElementById('q3a').value);
                   q3b = parseInt(document.getElementById('q3b').value);
                   q3c = parseInt(document.getElementById('q3c').value);

                   let totalOne = q1+q2+q3+q4+q5+q6  || 0;
                   let totalTwo = q2a+q2b+q2c+q2d+q2e  || 0;
                   let totalThree = q3a+q3b+q3c  || 0;

                   totalScore = totalOne+totalTwo+totalThree || 0;
                   percent = Math.floor((100 * totalScore) / 36)   || 0;

                   // automatically insert pass or fail result, if score greater than 80%
                   let pass, fail = "—";
                   if (percent >= 80) {
                     pass = "✔";
                     fail = "—";
                   } else {
                     pass = "—";
                     fail = "✔";
                   }

                   let q2aC = document.getElementById("q2aC").value;
                   let q2bC = document.getElementById("q2bC").value;
                   let q2cC = document.getElementById("q2cC").value;
                   let q2dC = document.getElementById("q2dC").value;
                   let q2eC = document.getElementById("q2eC").value;
                   let q3aC = document.getElementById("q3aC").value;
                   let q3bC = document.getElementById("q3bC").value;
                   let q3cC = document.getElementById("q3cC").value;

                   var name = "<?php echo $_SESSION['user']->game_name; ?>";

                   let format = "[font=Arial][center][b][size=80]TRAINING BUREAU[/b][/size]\n\
[size=87]EXAMINATION REVIEW[/size][/center]\n\
\n\
[b]I — MULTIPLE CHOICE[/b]\n\
\n\
\n\
[indent][b]Question 1[/b] "+q1+"/1\n\
[b]Question 2[/b] "+q2+"/1\n\
[b]Question 3[/b] "+q3+"/1\n\
[b]Question 4[/b] "+q4+"/1\n\
[b]Question 5[/b] "+q5+"/1\n\
[b]Question 6[/b] "+q6+"/1\n\
[b]Total:[/b] "+totalOne+"/6[/indent]\n\
[b]II — SHORT-ANSWER RESPONSE[/b]\n\
\n\
\n\
[indent][b]Question 1[/b] "+q2a+"/3\n\
[indent]"+q2aC+"[/indent]\n\
[b]Question 2[/b] "+q2b+"/3\n\
[indent]"+q2bC+"[/indent]\n\
[b]Question 3[/b] "+q2c+"/3\n\
[indent]"+q2cC+"[/indent]\n\
[b]Question 4[/b] "+q2d+"/3\n\
[indent]"+q2dC+"[/indent]\n\
[b]Question 5[/b] "+q2e+"/3\n\
[indent]"+q2eC+"[/indent]\n\
[b]Total:[/b] "+totalTwo+"/15[/indent]\n\
[b]III — ESSAY RESPONSE[/b]\n\
\n\
\n\
[indent][b]Question 1[/b] "+q3a+"/5\n\
[indent]"+q3aC+"[/indent]\n\
[b]Question 2[/b] "+q3b+"/5\n\
[indent]"+q3bC+"[/indent]\n\
[b](( Question 3 ))[/b] "+q3c+"/5\n\
[indent]"+q3cC+"[/indent]\n\
[b]Total:[/b] "+totalThree+"/15[/indent]\n\
[b]Exam Total:[/b] "+totalScore+"/36\n\
[b]Percentage:[/b] "+percent+"%\n\
\n\
[b]Examination Result:[/b] ["+pass+"] PASS / ["+fail+"] FAIL\n\
[b]Proctor:[/b] "+name+"\n\
\n\
[b]Checked By:[/b] ";

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
