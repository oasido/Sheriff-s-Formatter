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
            <strong>Rates</strong>
          </div>
          <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="c0-tab" data-toggle="tab" href="#c0" role="tab" aria-controls="c0" aria-selected="true">General</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="c1-tab" data-toggle="tab" href="#c1" role="tab" aria-controls="c2" aria-selected="false">Relationships</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="c2-tab" data-toggle="tab" href="#c2" role="tab" aria-controls="c2" aria-selected="false">General Performance & Knowledge</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="c3-tab" data-toggle="tab" href="#c3" role="tab" aria-controls="c3" aria-selected="false">(( Out of Character ))</a>
              </li>
            </ul>

            <div class="tab-content mytab-content" id="myTabContent">
            </div>
          </div>
        </div>
        <!-- End of RATES card-->
        <br />
        <div class="card">
          <div class="card-header">
            <strong>Patrol Feedback</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">General Feedback & Outstanding Ratings Justification</label>
                <textarea class="form-control col-sm-6" id="feedback" onkeyup="this.value = this.value.toUpperCase();"></textarea>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Written Eval card-->
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            <strong>General Information</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Trainee Name</label>
                <input class="form-control col-sm-6" type="text" id="trainName" onkeyup="this.value = this.value.toUpperCase();">
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Trainee Phase</label>
                <select class="form-control col-sm-6" id="phase">
                  <option value="ONE">One</option>
                  <option value="TWO">Two</option>
                  <option value="THREE">Three</option>
                  <option value="EXTENSION">Remedial Extension</option>
                </select>
              </div>
            </div>
            <hr>
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
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header">
            <strong>Patrol Timeline</strong>
          </div>
          <div class="card-body">
            <form action="index.html" method="post">
              <div class="input_fields_container_part">
                <!-- container to dupe -->
                <div class="form-inline">
                  <div class="col-md-12 form-group">
                    <label class="col-sm-4 col-form-label">1.</label>
                    <input name="fromDate" type="time" value="" class="form-control col-sm-3" />&nbsp;to&nbsp;
                    <input name="toDate" type="time" value="" class="form-control col-sm-3" />
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
              <br />
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
      </div>
    </div>
    <br />
    <div class="highlight-clean">
      <div class="container">
        <center>
          <button class="btn btn-success btn-lg" onClick="process()"><i class="fas fa-cog"></i> Generate
            Form</button><br /><br />
          <h5 class="font-weight-bold">Generated text:</h5>
          <textarea rows="5" class="form-control col-sm-6" id="finish"></textarea>
        </center>
      </div>
    </div>
  </div>
  <!-- aye-->

  <!-- JS Form Script-->
  <style>
    .nav-mytabs {
      margin-top: 2rem;
    }

    .nav-mytabs li:not(:last-child) {
      margin-right: 7px;
    }

    .nav-mytabs a {
      position: relative;
      top: 4px;
      padding: 10px 25px;
      border-radius: 2px 2px 0 0;
      background: white;
      color: black;
      opacity: 0.7;
      transition: all 0.1s ease-in-out;
    }

    .nav-mytabs a.active,
    .nav-mytabs a:hover {
      opacity: 1;
      top: 0;
    }

    .mytab-content {
      position: relative;
      z-index: 2;
      padding: 25px;
      border-radius: 0 4px 4px 4px;
      background: white;
    }
  </style>

  <script type="text/javascript">
    // Session Timeline
    let x2 = 1;
    $(document).ready(function() {
      var max_fields_limit2 = 999; //set limit for maximum input fields

      $('.add_more_button2').click(function(e) { //click event on add more fields button having class add_more_button
        e.preventDefault();
        if (x2 < max_fields_limit2) { //check conditions
          x2++; //counter increment
          $('.aye2').append(
            "<div class=ayedditional2><br /><div class='form-inline'><div class='col-md-12 form-group'><label class='col-sm-4 col-form-label'>" + x2 + ".</label><input name='fromDate'type='time'value=''class='form-control col-sm-3'/>&nbsp;to&nbsp;<input name='toDate'type='time'value=''class='form-control col-sm-3'/></div></div><br><div class='form-inline'><div class='col-md-12 form-group'><label class='col-sm-4 col-form-label'></label><textarea name='situationText'placeholder='Situation summary'rows='2'class='form-control col-sm-7'></textarea></div></div></div>"
          ); //add input field
        }
      });

      $('.remove_field2').on('click', function(e) { //user click on remove text links
        e.preventDefault();
        $('.ayedditional2:last').remove();
        x2--;
        if (x2 < 1) {
          x2 = 1
        };
      })
    });


    var categories = ['GENERAL', 'RELATIONSHIPS', 'GENERAL PERFORMANCE & KNOWLEDGE', '(( OUT OF CHARACTER ))']
    var fields = {
      'GENERAL': ['Acceptance of Feedback/FTO/FTP',
        'Integrity/Ethics',
        'General Appearance'
      ],
      'RELATIONSHIPS': ['With Citizens/Community',
        'With Other Department Members'
      ],
      'GENERAL PERFORMANCE & KNOWLEDGE': ['Driving Skill',
        'Location Knowledge/Response Time',
        'Report Writing', 'General Field Performance',
        'Investigative & Interview Skills',
        'Self-initiated Field Activity',
        'Officer Safety',
        'Control of Conflict',
        'Problem-solving Techniques/Decision-making',
        'Radio Communications',
        'Mobile Computer Terminal',
        'Department Policies and Procedures',
        'Criminal Law'
      ],
      '(( OUT OF CHARACTER ))': ['Roleplay Quality',
        'Character Depth/Portrayal',
        'Out-of-Character Demeanor'
      ]
    };

    // DOR stuff
    $(document).ready(function() {

      var parent = $('#myTabContent');
      var index = 1;
      var tableHeader = ``;
      for (i = 0; i < categories.length; i++) {
        if (i == 0) {
          tableHeader += `<div class="tab-pane fade show active" id="c${i}" role="tabpanel" aria-labelledby="c${i}-tab">`;
        } else {
          tableHeader += `<div class="tab-pane fade" id="c${i}" role="tabpanel" aria-labelledby="c${i}-tab">`;
        }
        tableHeader += `<table class="table">
                  <thead>
                    <tr>
                      <td><b>#</b></td>
                      <td><b>Field</b></td>
                      <td><b>Rating</b></td>
                  </thead>
                  <tbody>`;
        var category = categories[i];
        var currentFields = fields[category];
        for (j = 0; j < currentFields.length; j++) {
          var row = `<tr>
                      <td><strong>${index}</strong></td>
                      <td>${currentFields[j]}</td>
                      <td>
                        <select class="form-control" id="f${index}">
                          <option selected value="N/O">Not Observed</option>
                          <option value="NI">Needs Improvement</option>
                          <option value="C">Competent</option>
                          <option value="S">Superior</option>
                          <option value="NRT">Not Responsive to Training</option>
                        </select>
                      </td>
                    </tr>`;
          tableHeader += row;
          index++;
        }
        tableHeader += `</tbody>
                </table>
                </div>`;
      }
      parent.html(tableHeader);

      $('[data-toggle="tooltip"]').tooltip();
    });

    function process() {
      // Session Timeline
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
        sessionTimeline += '• ' + fromDateArray[i] + ' - ' + toDateArray[i] + ' — ' + situationTextArray[i] + '\n';
      }

      // Create the fields and categories.
      var categoriesbb = ``;
      var index = 1;
      var length = 63;
      var spacers = [`--------------------------------------------------------`,
        `-------------------------------------------------`,
        `-------------------------`, `-----------------------------------------`
      ];
      var categoryIndex = 0;
      categories.forEach(category => {
        categoriesbb += `[table]
                        [tr]
                        [td][size=75][b]${category}[color=transparent]${spacers[categoryIndex]}[/color][/b][/size][/td]
                        [td][center][size=75][b]RATING[/b][/size][/center][/td]
                        [/tr]`;
        fields[category].forEach(field => {
          categoriesbb += `[tr]
                        [td][size=75]${index}. ${field}[/size][/td]
                        [td][center][size=75]${$('#f'+index).val()}[/size][/center][/td]
                        [/tr]`;
          index++;
        })
        categoriesbb += `[/table]
                        [line][/line]`;
        categoryIndex++;
      })


      var date = $('#date').val();
      var time = $('#time').val();
      var phase = $('#phase').val();
      var trainName = $('#trainName').val();
      var ftoName = "<?php echo $_SESSION['user']->game_name; ?>";
      var ftoBadgeNumber = "<?php echo $_SESSION['user']->badge_no; ?>";
      var situations = $('#feedback').val();
      var format = `[divbox=white][b][size=80][aligntable=center,0,255,0,0,0]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT[/aligntable][/size][/b]
[aligntable=center,0,190,0,0,0][b][size=80]DAILY OBSERVATION REPORT (DOR) — FIELD TRAINING PROGRAM[/size][/b][/aligntable]
[line][/line]
[table]
[tr]
[td][size=75][b]REPORT DATE[/b][/size][/td]
[td][size=75][b]REPORT TIME[/b][/size][/td]
[td][size=75][b]TRAINEE NAME[/b][/size][/td]
[td][size=75][b]TRAINING PHASE[/b][/size][/td][/tr]
[tr]
[td][size=75]` + date + `[/size][/td]
[td][size=75]` + time + `[/size][/td]
[td][size=75]` + trainName + `[/size][/td]
[td][size=75]` + phase + `[/size][/td]
[/tr]
[/table][line][/line]
[table]
[tr]
[td][size=75][b]FTO NAME[/b][/size][/td]
[td][size=75][b]EMPLOYEE NUMBER[/b][/size][/td][/tr]
[tr]
[td][size=75]` + ftoName + `[/size][/TD]
[td][size=75]` + ftoBadgeNumber + `[/size][/TD][/tr][/table][line][/line]
[table]
[tr]
[td][size=75][b][center]CATEGORICAL EVALUATION[/center][/b][/size][/td][/tr][/table][line][/line]
[table]
[tr]
[td][size=75][justify][b]INSTRUCTIONS:[/b] See [url=https://sd.lsgov.io/forum/viewtopic.php?f=1974&t=138987&p=1098499#p1098499]Part 3, Standardized Evaluation Guidelines (SEGs)[/url] for how to rate observable behaviors. A rating of C (Competent) is the minimum acceptable score within each category to meet the standard for solo patrol officer. Every encountered incident shall be noted as a Documented Situation (DS); check DS and describe the related event in the accompanying Narrative Evaluation. Check N/O if behavior is Not Observed or NRT if trainee is Not Responding to Training. A completed and signed Narrative Evaluation must be attached.[/justify][/size][/td][/tr][/table][line][/line]
${categoriesbb}
[table]
[tr]
[td][size=75][b][center]NARRATIVE EVALUATION[/center][/b][/size][/td][/tr][/table][line][/line]
[table]
[tr]
[td][size=75][justify][b]INSTRUCTIONS:[/b] Parts A - Provide a general timeline of the Daily Observation Report, Part B - Provide feedback in general about the patrol and justify outstanding ratings (NI/S/NRT) [/justify][/size][/td][/tr][/table][line][/line]
[table]
[tr][td][size=75][b]PART A. PATROL TIMELINE[/b][/size][/TD][/TR]
[tr][td][size=75]` + sessionTimeline + `
[/size][/TD][/TR][/table][line][/line]
[table]
[tr][td][size=75][b]PART B. PATROL FEEDBACK[/b][/size][/TD][/TR]
[tr][td][size=75]${situations}[/size][/TD][/TR][/table][line][/line]
[/divbox]`;

      document.getElementById("finish").value = format;
    }

    $(document).ready(() => {
      let url = location.href.replace(/\/$/, "");

      if (location.hash) {
        const hash = url.split("#");
        $('#myTab a[href="#' + hash[1] + '"]').tab("show");
        url = location.href.replace(/\/#/, "#");
        history.replaceState(null, null, url);
        setTimeout(() => {
          $(window).scrollTop(0);
        }, 400);
      }

      $('a[data-toggle="tab"]').on("click", function() {
        let newUrl;
        const hash = $(this).attr("href");
        if (hash == "#home") {
          newUrl = url.split("#")[0];
        } else {
          newUrl = url.split("#")[0] + hash;
        }
        newUrl += "/";
        history.replaceState(null, null, newUrl);
      });
    });
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