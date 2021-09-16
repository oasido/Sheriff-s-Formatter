<?php
include('../main.php');
include '../header.php';
$query = "SELECT * FROM ranks order by id desc";
$ranks = mysqli_query($conn, $query);
?>
<!-- SEPERATOR -->
<div id="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header">
            <strong>Performance Assessment</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Aerial Performance (Normal Conditions)</label>
                <select multiple data-max-options="1" class="selectpicker show-tick form-control col-sm-6" id="perfNC">
                  <option data-subtext="Needs Improvement" value="NI">NI</option>
                  <option data-subtext="Competent" value="C">C</option>
                  <option data-subtext="Superior" value="S">S</option>
                </select>
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Aerial Performance (Moderate/High Stress Conditions)</label>
                <select multiple data-max-options="1" class="selectpicker show-tick form-control col-sm-6" id="perfHC">
                  <option data-subtext="Needs Improvement" value="NI">NI</option>
                  <option data-subtext="Competent" value="C">C</option>
                  <option data-subtext="Superior" value="S">S</option>
                </select>
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Communication Skills</label>
                <select multiple data-max-options="1" class="selectpicker show-tick form-control col-sm-6" id="comm">
                  <option data-subtext="Needs Improvement" value="NI">NI</option>
                  <option data-subtext="Competent" value="C">C</option>
                  <option data-subtext="Superior" value="S">S</option>
                </select>
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">General Demeanor & Attitude</label>
                <select multiple data-max-options="1" class="selectpicker show-tick form-control col-sm-6" id="attitude">
                  <option data-subtext="Needs Improvement" value="NI">NI</option>
                  <option data-subtext="Competent" value="C">C</option>
                  <option data-subtext="Superior" value="S">S</option>
                </select>
              </div>
            </div>
            <br />
            <hr>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-12 col-form-label">Patrol Narrative & Feedback</label>
              </div>
            </div>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <textarea class="col-sm-12 form-control" id="narrative" rows="10"></textarea>
              </div>
            </div>
            <br />
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            <strong>General Information</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Start Date & Time</label>
                <input class="form-control col-sm-6 datepicker-here" id="startTime" data-timepicker="true" data-language='en' />
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">End Date & Time</label>
                <input class="form-control col-sm-6 datepicker-here" id="endTime" data-timepicker="true" data-language='en' />
              </div>
            </div>
            <hr>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Flight Trainer</label>
                <input class="form-control col-sm-6" type="text" id="trainer" placeholder="Firstname Lastname">
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Deputy Name</label>
                <input class="form-control col-sm-6" type="text" id="flightCadet" placeholder="Firstname Lastname">
              </div>
            </div>
            <hr />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Session Type</label>
                <select class="form-control col-sm-6" id="sessionType">
                  <option value="" disabled selected>Please select...</option>
                  <option>Simulation</option>
                  <option>Patrol</option>
                </select>
              </div>
            </div>
            <hr />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Recommendation</label>
                <select class="form-control col-sm-6" id="result">
                  <option value="" disabled selected>Please select...</option>
                  <option>Pass</option>
                  <option>Fail</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <strong>Session Timeline</strong>
            </div>
            <div class="card-body">
              <form action="index.html" method="post">
                <div class="input_fields_container_part">
                  <!-- container to dupe -->
                  <div class="form-inline">
                    <div class="col-md-12 form-group">
                      <label class="col-sm-4 col-form-label">1.</label>
                      <input name="fromDate" type="time" value="" class="form-control col-sm-3"/>&nbsp;to&nbsp;
                      <input name="toDate" type="time" value="" class="form-control col-sm-3"/>
                    </div>
                  </div>
                  <br>
                  <div class="form-inline">
                    <div class="col-md-12 form-group">
                      <label class="col-sm-4 col-form-label"></label>
                      <textarea name="situationText" placeholder="Situation summary" rows="2" class="form-control col-sm-7"></textarea>
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
        <br />
        <div class="highlight-clean">
          <div class="container">
            <center>
              <button class="btn btn-success btn-lg" onClick="process()"><i class="fas fa-cog"></i> Generate Form</button><br /><br />
              <h5 class="font-weight-bold">Generated text:</h5>
              <textarea rows="5" class="form-control col-sm-9" id="finish"></textarea>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- aye-->


  <!-- JS Form Script-->
  <script type="text/javascript">
  $('#trainer').val('<?php echo $_SESSION['user']->game_name; ?>');

  // additional add/remove
  let x2 = 1;
  $(document).ready(function () {
    var max_fields_limit2 = 7; //set limit for maximum input fields

    $('.add_more_button2').click(function (e) { //click event on add more fields button having class add_more_button
      e.preventDefault();
      if (x2 < max_fields_limit2) { //check conditions
        x2++; //counter increment
        $('.aye2').append(
          "<div class=ayedditional2><br /><div class='form-inline'><div class='col-md-12 form-group'><label class='col-sm-4 col-form-label'>"+x2+".</label><input name='fromDate'type='time'value=''class='form-control col-sm-3'/>&nbsp;to&nbsp;<input name='toDate'type='time'value=''class='form-control col-sm-3'/></div></div><br><div class='form-inline'><div class='col-md-12 form-group'><label class='col-sm-4 col-form-label'></label><textarea name='situationText'placeholder='Situation summary'rows='2'class='form-control col-sm-7'></textarea></div></div></div>"
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
      var now = moment();
      var currentDate = now.format('DD-MMM-YYYY').toUpperCase();
      var startTime = document.getElementById("startTime").value;
      var endTime = document.getElementById("endTime").value;
      var flightCadet = document.getElementById("flightCadet").value;
      var perfNC = document.getElementById("perfNC").value;
      var perfHC = document.getElementById("perfHC").value;
      var comm = document.getElementById("comm").value;
      var attitude = document.getElementById("attitude").value;
      var narrative = document.getElementById("narrative").value;
      var sessionType = document.getElementById("sessionType").value;
      var trainer = "<?php echo $_SESSION['user']->game_name; ?>";
      var result = document.getElementById("result").value;

      // name or signature as signature
      var deputySig;
      if ("<?php echo $_SESSION['user']->signature; ?>" === "") {
        deputySig = "[u]x "+"<?php echo $_SESSION['user']->game_name; ?>"+"[/u]";
      } else {
        deputySig = "[img]"+"<?php echo $_SESSION['user']->signature; ?>"+"[/img]";
      }

      // for the situations
      var fromDateArray = [];
      var fromDateArrayVar = document.getElementsByName("fromDate");
      for (var i = 0; i < fromDateArrayVar.length; i++) {
        fromDateArray.push(fromDateArrayVar[i].value);
      }

      var toDateArray = [];
      var toDateArrayVar = document.getElementsByName("toDate");
      for (var i = 0; i < toDateArrayVar.length; i++) {
        toDateArray.push(toDateArrayVar[i].value);
      }

      var situationTextArray = [];
      var situationTextArrayVar = document.getElementsByName("situationText");
      for (var i = 0; i < situationTextArrayVar.length; i++) {
        situationTextArray.push(situationTextArrayVar[i].value);
      }

      let sessionTimeline = "";
      for (i = 0; i < x2; i++) {
        sessionTimeline += '[*]'+fromDateArray[i]+' - '+toDateArray[i]+' — '+situationTextArray[i]+'';
      }


      var format = `[divbox=white][center][img]https://i.imgur.com/TySZqQK.png[/img]
[font=Arial][b][i]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT
AERO BUREAU[/i][/b][/center]
[aligntable=LEFT,0,0,0,0,0][i][size=85]PHONE: 562-469-5997
FAX: 562-425-3197[/size][/i][/ALIGNTABLE][aligntable=right,0,0,0,0,0][size=85][i][u]BUREAU CAPTAIN[/u]
JACOB TANNER[/i][/size][/ALIGNTABLE][aligntable=left,0,205,0,0,0][i][size=85]San Augustine Road
Red County 824, SA[/size][/i][/aligntable]

[break][/break]
[center]HELICOPTER PILOT DEPUTY TRAINING PROGRAM
CERTIFIED FLIGHT INSTRUCTOR EVALUATION[/center][/font]


[center][table2=Arial]
[tr]
[td][size=80][b]START DATE AND TIME OF SESSION[/b][/size][/td]
[td][size=80][b]END DATE AND TIME OF SESSION[/b][/size][/td]
[/tr]
[tr]
[td][size=80]`+startTime+`[/size][/td]
[td][size=80]`+endTime+`[/size][/td]
[/tr]
[/table2]
[break][/break]
[table2=Arial]
[tr]
[td][size=80][b]PARTICIPANT NAME[/b][/size][/TD]
[TD][size=80][b]EVALUATOR NAME[/b][/size][/TD]
[td][size=80][b]NUMBER OF SITUATIONS[/b][/size][/td]
[/tr]
[tr]
[td][size=80]`+flightCadet+`[/size][/td]
[td][size=80]`+trainer+`[/size][/td]
[td][size=80]`+x2+`[/size][/td]
[/tr]
[/table2][/center]
[break][/break]
[center][b][u]PERFORMANCE ASSESSMENT[/u][/b]
[table2=Arial]
[tr]
[td][size=80][b]PERFORMANCE (NORMAL CONDITIONS)[/b][/size][/td]
[td][size=80][b]PERFORMANCE (STRESS CONDITIONS)[/b][/size][/td]
[td][size=80][b]COMMUNICATION SKILLS[/b][/size][/td]
[td][size=80][b]GENERAL DEMEANOR[/b][/size][/td]
[/tr]
[tr]
[td][size=80]`+perfNC+`[/size][/td]
[td][size=80]`+perfHC+`[/size][/td]
[td][size=80]`+comm+`[/size][/td]
[td][size=80]`+attitude+`[/size][/td]
[/tr]
[/table2][/center]
[break][/break]
[b][u]SESSION TIMELINE[/u][/b]
[list]`+sessionTimeline+`[/list]

[b][u]NARRATIVE[/u][/b]
[list=none]`+narrative+`[/list]
[break][/break]

[center]
[b][u]EVALUATION RESULT[/u][/b]
[table2=Arial]
[tr]
[td][size=80][b]RECOMMENDATION[/b][/size][/td]
[td][size=80][b]EVALUATOR SIGNATURE[/b][/size][/td]
[td][size=80][b]TRAINING SERGEANT SIGNATURE[/b][/size][/td]
[/tr]
[tr]
[td][size=80]`+result+`[/size][/td]
[td][size=80]`+deputySig+`[/size][/td]
[td][size=80]COMMAND SIGNATURE[/size][/td]
[/tr]
[/table2]
[/center]
[/divbox]`

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
