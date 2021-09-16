<?php
include('../main.php');
include '../header.php';
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
                <a class="nav-link active" id="c0-tab" data-toggle="tab" href="#c0" role="tab" aria-controls="c0" aria-selected="true">Administrative</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="c1-tab" data-toggle="tab" href="#c1" role="tab" aria-controls="c1" aria-selected="false">Field Statistics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="c2-tab" data-toggle="tab" href="#c2" role="tab" aria-controls="c2" aria-selected="false">(( Roleplay Ability ))</a>
              </li>
            </ul>

            <div class="tab-content mytab-content" id="myTabContent">
            </div>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header">
            <strong>UNSAT Explanation(s)</strong>
          </div>
          <div class="card-body">
            <label for="col-sm-4 col-form-label">If you answered "UNSAT" on one or more categories, list the category and explanation:</label>
            <textarea class="form-control" rows="3" id="unsat"></textarea>
          </div>
        </div>
        <!-- End of RATES card-->
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            <strong>General Information</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Date of Patrol</label>
                <input class="form-control col-sm-6" type="date" id="date">
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Patrol Number</label>
                <select class="form-control col-sm-6" id="phase">
                  <option value="1">First</option>
                  <option value="2">Second</option>
                  <option value="3">Third</option>
                  <option value="Final">Final</option>
                </select>
              </div>
            </div>
            <hr>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Trainee Name</label>
                <input class="form-control col-sm-6" type="text" id="trainName">
              </div>
            </div>
            <br>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Trainee Rank</label>
                <input class="form-control col-sm-6" type="text" id="trainRank">
              </div>
            </div>
            <br>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Trainee Bureau</label>
                <input class="form-control col-sm-6" type="text" id="trainBureau">
              </div>
            </div>
            <hr>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Mentor Bureau</label>
                <input class="form-control col-sm-6" type="text" id="myBureau">
              </div>
            </div>
          </div>
        </div>
        <br />
        <div class="card">
          <div class="card-header">
            <strong>Narrative (Optional)</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Specific things the Trainee did well on, or specific incidents worth noting that the trainee did well on</label>
                <textarea class="form-control col-sm-6" id="narrative-good"></textarea>
              </div>
            </div>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Specific things the Trainee did not do well on, or specific incidents worth noting that the trainee did not do well on</label>
                <textarea class="form-control col-sm-6" id="narrative-bad"></textarea>
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
          <button class="btn btn-success btn-lg" onClick="process()"><i class="fas fa-cog"></i> Generate
            Form</button><br /><br />
          <h5 class="font-weight-bold">Generated text:</h5>
          <textarea rows="5" class="form-control col-sm-6" id="finish"></textarea>
        </center>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    var categories = ['ADMINISTRATIVE', 'FIELD STATISTICS', '(( Roleplay Abillity ))']
    var fields = {
      'ADMINISTRATIVE': ['Administrative paperwork',
        'Ability to Adapt as a Detective',
        'General Appearance',
        'Corrective plain clothes',
        'General knowledge',
        'Feedback Acceptance'
      ],
      'FIELD STATISTICS': ['Proper PPE',
        'Command Presence',
        'Officer Safety',
        'Situational Awareness',
        'Public Interaction',
        'Driver Safety',
        'Weapon Safety',
        'Proper Emergency Identification',
        'Detective Procedural knowledge',
        'Follows Detective Procedures'
      ],
      '(( Roleplay Abillity ))': ['General demeanor',
        'Fair roleplay',
        'Correct "plain clothes" roleplay',
        '/mask & /tognick understanding'
      ]
    };


    // form html stuff
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
                          <option selected value="SAT">Satisfactory</option>
                          <option value="UNSAT">Unsatisfactory</option>
                          <option value="N/O">Not Observed</option>
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

    });

    function process() {

      // Create the fields and categories.
      var categoriesbb = ``;
      var index = 1;
      var length = 63; // check if not needed
      var categoryIndex = 0;
      categories.forEach(category => {
        categoriesbb += `
        
        [center][color=black][b]${category}[/b][/color][/center]

        `;
        fields[category].forEach(field => {
          categoriesbb += `
          ${field}: [i]${$('#f'+index).val()}[/i]`;
          index++;
        })
        categoriesbb += `


        [/td]
        [/tr]
        [tr]
        [td]
        [/td]
        [/tr]
        [tr]
        [td]
        `;
        categoryIndex++;
      })


      var date = $('#date').val();
      var time = $('#time').val();
      var phase = $('#phase').val();
      var narrativeGood = $('#narrative-good').val();
      var narrativeBad = $('#narrative-bad').val();
      var unsat = $('#unsat').val();
      var trainName = $('#trainName').val();
      var trainRank = $('#trainRank').val();
      var trainBureau = $('#trainBureau').val();
      var theDate = moment(theDate).format('MMMM ' + 'Do, ' + 'YYYY');
      var myName = "<?php echo $_SESSION['user']->game_name; ?>";
      <?php
      $qqr = "SELECT * FROM ranks WHERE id='" . $_SESSION['user']->rank . "'";
      $rest = mysqli_query($conn, $qqr);
      $rowt = mysqli_fetch_object($rest);
      ?>
      var myRank = "<?php echo $rowt->title; ?>"
      var myBureau = $('#myBureau').val();
      let mySig = "<?php echo $_SESSION['user']->signature; ?>" || myName;
      var format = `[table2=Arial]
[tr]
[td]
[aligntable=right,90,0,70,0,0,0]
[img]https://i.imgur.com/LlkJf5w.png[/img]
[/aligntable]
[aligntable=center,0,165,0,0,0,0]


[center]
[center][b]Los Santos County Sheriff's Department
Detective Mentoring Program[/b]
[size=85]Coordinator: Lt. Francis DeMarco[/size]
[size=85]Managers: Lt. Marcia Castro, Sgt. Kim Sakai[/size][/center]
[/td]
[/tr]
[tr]
[td]
[/td]
[/tr]
[tr]
[td]
[/td]
[/tr]
[tr]
[td]


[center][color=black][b][u]EVALUATION PATROL FORM[/u][/b][/center]

[b]DATE OF PATROL: [/b] ` + date + `
[b]PATROL NUMBER:[/b] ` + phase + `


PERSONAL INFORMATION - MENTOR:
[b]NAME:[/b] ` + myName + `
[b]RANK:[/b] ` + myRank + `
[b]BUREAU:[/b] ` + myBureau + `


PERSONAL INFORMATION - EVALUATED TRAINEE:
[b]NAME:[/b] ` + trainName + `
[b]RANK:[/b] ` + trainRank + `
[b]BUREAU:[/b] ` + trainBureau + `




[/td]
[/tr]
[tr]
[td]
[/td]
[/tr]
[tr]
[td]



[size=85]Each category for grading will be done in a Satisfactory (SAT), Unsatisfactory (UNSAT) or Not Observed (N/O). If a Category is marked "UNSAT," the Mentor must explain why at the bottom of the form.[/size]


${categoriesbb}


[center][color=black][b]NARRATIVE (Optional)[/b][/center]


[b]Specific things the Trainee did well on, or specific incidents worth noting that the trainee did well on:[/b]
[i]` + narrativeGood + `[/i]


[b]Specific things the Trainee did not do well on, or specific incidents worth noting that the trainee did not do well on:[/b]
[i]` + narrativeBad + `[/i]



[center][color=black][b]UNSAT EXPLANATIONS[/b][/center]

[b]If you answered "UNSAT" on one or more categories, list the category and explanation:[/b]
[i]`+unsat+`[/i]


[/td]
[/tr]
[tr]
[td]
[/td]
[/tr]
[tr]
[td]


[b]SIGNATURE:[/b] ` + mySig + `
[b]RANK:[/b] ` + myRank + `
[b]DATE:[/b] ` + theDate + ``;

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
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin.min.js"></script>


</body>
<?php include '../footer.php' ?>

</html>