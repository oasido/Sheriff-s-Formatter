<?php
include('../main.php');
include '../header.php';
?>

<!-- SEPERATOR -->
<div id="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <!-- col grid test 15/5/2019 -->
        <div class="card">
          <div class="card-header">
            <strong>General Information</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Date & Time</label>
                <input class="form-control col-sm-6 datepicker-here" id="dateTime" data-timepicker="true" data-language='en' />
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Case #</label>
                <input class="form-control col-sm-6" type="text" id="caseNumber">
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Location</label></label>
                <input class="form-control col-sm-6" id="location">
              </div>
            </div>
            <hr>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Factual Analysis</label>
                <textarea class="form-control col-sm-6" id="factualAnalysis"></textarea>
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Summary of Adjudication</label>
                <textarea class="form-control col-sm-6" id="summary"></textarea>
              </div>
            </div>
          </div>
        </div>
        <br />
        <div class="card">
          <div class="card-header">
            <strong>Personnel Invloved</strong>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="personnel">
                <tbody>
                  <tr>
                    <td><span><strong>Field Deputies</i></strong></span></td>
                    <td><span><strong>Operating Out Of</strong></span></td>
                    <td><span><strong>Designation</strong></span></td>
                  </tr>
                </tbody>
              </table>
              <center><button class="btn btn-outline-primary" onclick="addPersonnel()">Add</button></center>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            <strong>Force Used & Adjudication</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 ce col-form-label">Force Used</label>
                <select class="selectpicker form-control col-sm-6" id="forceUsed" multiple="multiple" multiple data-max-options="1">
                  <option>Category 3</option>
                  <option>Category 2</option>
                  <option>Category 1</option>
                </select>
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Adjudication</label>
                <select class="selectpicker form-control col-sm-6" id="adjudication" multiple="multiple" multiple data-max-options="1">
                  <option value="b1">Exonerate</option>
                  <option value="b2">Launch Administrative Investigation</option>
                  <option value="b3">Launch Criminal Investigation</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <!-- here -->
        <br />
        <div class="card">
          <div class="card-header">
            <strong>Commanders & Supervisors</strong>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-inline">
                  <div class="col-sm-12 form-group">
                    <input class='form-control col-sm-12' type='text' name='incidentCommander' placeholder="Incident Commander">
                  </div>
                </div>
                <div class="ayeIncidentCommander"></div>
                <br />
                <center>
                  <a class="add_more_button_incident_commander" style="color: green;">
                    <i class="fas fa-plus-circle" style="font-size: 25px;"></i>
                  </a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="remove_field_incident_commander" style="font-size: 25px">
                    <i class="fas fa-times" style="color:red;"></i>
                  </a>
                </center>
              </div>
              <div class="col-sm-6">
                <div class="form-inline">
                  <div class="col-sm-12 form-group">
                    <input class='form-control col-sm-12' type='text' name='fieldSupervisors' placeholder="Field Supervisor">
                  </div>
                </div>
                <div class="ayeFieldSupervisors"></div>
                <br />
                <center>
                  <a class="add_more_button_field_supervisors" style="color: green;">
                    <i class="fas fa-plus-circle" style="font-size: 25px;"></i>
                  </a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="remove_field_field_supervisors" style="font-size: 25px">
                    <i class="fas fa-times" style="color:red;"></i>
                  </a>
                </center>
              </div>
            </div>


          </div>
        </div>
        <br />
        <div class="card">
          <div class="card-header">
            <strong>Scene Imagery</strong>
          </div>
          <div class="card-body">
                <div class="form-inline">
                  <div class="col-sm-12 form-group">
                    <label class="col-sm-4 col-form-label">Exhibit A</label>
                    <input class='form-control col-sm-6' type='text' name='images' placeholder="Direct URL">
                  </div>
                </div>
                <div class="ayeImage"></div>
                <br />
                <center>
                  <a class="add_more_button_image" style="color: green;">
                    <i class="fas fa-plus-circle" style="font-size: 25px;"></i>
                  </a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="remove_image" style="font-size: 25px">
                    <i class="fas fa-times" style="color:red;"></i>
                  </a>
                </center>
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
  // Form additions Incident Commander
  let x = 1; //initialize counter for text box
  $(document).ready(function() {
    var max_fields_limit = 5; //set limit for maximum input fields
    var numItems = document.getElementsByClassName('fieldSupervisors').length;

    $('.add_more_button_incident_commander').click(function(e) { //click event on add more fields button having class add_more_button
      e.preventDefault();
      if (x < max_fields_limit) { //check conditions
        x++; //counter increment
        $('.ayeIncidentCommander').append(
          "<div class='incidentCommanderClass'><br /><div class='form-inline'><div class='col-md-12 form-group'><input class='form-control col-sm-12' type='text' name='incidentCommander' placeholder='Incident Commander'></div></div></div>"
        ); //add input field
      }
    });

    $('.remove_field_incident_commander').on('click', function(e) { //user click on remove text links
      if (numItems < 1) {
        x = 2;
      }
      e.preventDefault();
      $('.incidentCommanderClass:last').remove();
      x--;
    })
  });

  // Form additions Field Supervisors --------------------------------------------------------
  let y = 1; //initialize counter for text box
  $(document).ready(function() {
    var max_fields_limit = 5; //set limit for maximum input fields
    var numItems = document.getElementsByClassName('fieldSupervisorsClass').length;

    $('.add_more_button_field_supervisors').click(function(e) { //click event on add more fields button having class add_more_button
      e.preventDefault();
      if (y < max_fields_limit) { //check conditions
        y++; //counter increment
        $('.ayeFieldSupervisors').append(
          "<div class='fieldSupervisorsClass'><br /><div class='form-inline'><div class='col-md-12 form-group'><input class='form-control col-sm-12' type='text' name='fieldSupervisors' placeholder='Field Supervisor'></div></div></div>"
        ); //add input field
      }
    });

    $('.remove_field_field_supervisors').on('click', function(e) { //user click on remove text links
      if (numItems < 1) {
        y = 2;
      }
      e.preventDefault();
      $('.fieldSupervisorsClass:last').remove();
      y--;
    })
  });

  // Form additions imagery --------------------------------------------------------

  let y2 = 1; // initialize counter for text box
  $(document).ready(function() {
    var max_fields_image = 26; //set limit for maximum input fields
    var numItems = document.getElementsByClassName('images').length;
    var letter = "B";

    $('.add_more_button_image').click(function(e) { //click event on add more fields button having class add_more_button
      e.preventDefault();

      function toLetters(num) { // numbers to letters
        "use strict";
        var mod = num % 26;
        var pow = num / 26 | 0;
        var out = mod ? String.fromCharCode(64 + mod) : (pow--, 'Z');
        return pow ? toLetters(pow) + out : out;
    }

      if (y2 < max_fields_image) { //check conditions
        if(y2 < 1){y2 = 1}
        y2++; //counter increment
        $('.ayeImage').append(
          "<div class=ayeImagesClass><br /><div class='form-inline'><div class='col-sm-12 form-group'><label class='col-sm-4 col-form-label'>Exhibit "+toLetters(y2)+"</label><input class='form-control col-sm-6'type='text'name='images'placeholder='Direct URL'></div></div></div>"
        ); //add input field
      }
    });

    $('.remove_image').on('click', function(e) { //user click on remove text links
      e.preventDefault();
      $('.ayeImagesClass:last').remove();
      y2--;
    })
  });


    function addPersonnel() {
      var empTab2 = document.getElementById('personnel');
      var rowCnt2 = empTab2.rows.length; // GET TABLE ROW COUNT.
      var tr2 = empTab2.insertRow(rowCnt2); // TABLE ROW.
      tr2 = empTab2.insertRow(rowCnt2);
      for (var c = 0; c < 4; c++) {
        var td2 = document.createElement('td'); // TABLE DEFINITION.
        td2 = tr2.insertCell(c);
        switch (c) {
          case 0:
            {
              // ADD A BUTTON.
              var personnelN = document.createElement('input');
              // SET INPUT ATTRIBUTE.
              personnelN.setAttribute("class", 'form-control');
              personnelN.setAttribute("placeholder", 'Rank abbr. Last, First (Badge)');
              // personnelN.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
              td2.appendChild(personnelN);
              break;
            }
          case 1:
            {
              var personnelB = document.createElement("input");
              personnelB.setAttribute("class", 'form-control');
              personnelB.setAttribute("placeholder", 'Santa Clara Valley Station');
              // personnelB.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
              td2.appendChild(personnelB);
              break;
            }
          case 2:
            {
              var personnelRA = document.createElement("input");
              personnelRA.setAttribute("class", 'form-control');
              personnelRA.setAttribute("placeholder", 'Callsign');
              td2.appendChild(personnelRA);
              break;
            }
          case 3:
            {
              var personnelRemove = document.createElement("input");
              personnelRemove.setAttribute('type', 'button');
              personnelRemove.setAttribute('value', 'Remove');
              personnelRemove.setAttribute("class", "btn btn-danger btn-sm");
              // ADD THE BUTTON's 'onclick' EVENT.
              personnelRemove.setAttribute('onclick', 'removeRow2(this)');
              td2.appendChild(personnelRemove);
              break;
            }
        }
      }
    }
    // DELETE TABLE ROW.
    function removeRow2(oButton) {
      var empTab2 = document.getElementById('personnel');
      empTab2.deleteRow(oButton.parentNode.parentNode.rowIndex); // BUTTON -> TD -> TR.
    }

    addPersonnel();


    function process() {
      let dateTime = document.getElementById("dateTime").value;
      let location = document.getElementById("location").value;
      let factualAnalysis = document.getElementById("factualAnalysis").value;
      let summary = document.getElementById("summary").value;
      let caseNumber = document.getElementById("caseNumber").value;
      let forceUsed = document.getElementById("forceUsed").value || "";
      let adjudication = $( "select#adjudication option:checked" ).val();

      let a1, a2, a3, b1, b2, b3;
      a1 = a2 = a3 = b1 = b2 = b3 = "todo";

      var deputyName = "<?php echo $_SESSION['user']->game_name; ?>"
      var badge = "<?php echo $_SESSION['user']->badge_no; ?>"
      var station = "<?php echo $_SESSION['user']->station; ?>"

      // add two into finaltext
      var fieldSupervisorsArr = [];
      var fieldSupervisorsVar = document.getElementsByName("fieldSupervisors");
      for (var i = 0; i < fieldSupervisorsVar.length; i++) {
        fieldSupervisorsArr.push(fieldSupervisorsVar[i].value);
      }
      var fieldSupervisorsFinal = fieldSupervisorsArr.join("\n");
      // console.log(fieldSupervisorsFinal);

      var incidentCommanderArr = [];
      var incidentCommanderVar = document.getElementsByName("incidentCommander");
      for (var i = 0; i < incidentCommanderVar.length; i++) {
        incidentCommanderArr.push(incidentCommanderVar[i].value);
      }
      var incidentCommanderFinal = incidentCommanderArr.join("\n");

      if (adjudication == "b1") {
          b1 = "todo_done";
          b2 = "todo";
          b3 = "todo";
      } else {
        b1, b2, b3 = "todo";
      }
      if (adjudication == "b2") {
          b1 = "todo";
          b2 = "todo_done";
          b3 = "todo";
      } else {
        b1, b2, b3 = "todo";
      }
      if (adjudication == "b3") {
          b1 = "todo";
          b2 = "todo";
          b3 = "todo_done";
      } else {
        b1, b2, b3 = "todo";
      }

      var myTab2 = document.getElementById('personnel');
      var personnel = "";
      for (row = 1; row < myTab2.rows.length - 1; row++) {
        for (c = 0; c < myTab2.rows[row].cells.length - 1; c++) { // EACH CELL IN A ROW.
          switch (c) {
            case 0:
              {
                var element = myTab2.rows.item(row).cells[c];
                personnel += "[tr][td]" + element.childNodes[0].value + "[/td]";
                break;
              }
            case 1:
              {
                var element = myTab2.rows.item(row).cells[c];
                personnel += "[td]" + element.childNodes[0].value + "[/td]";
                break;
              }
            case 2:
              {
                var element = myTab2.rows.item(row).cells[c];
                personnel += "[td]" + element.childNodes[0].value + "[/td]";
                break;
              }
          }
        }
      }


      var ImageArray = [];
      var ImageArrayVar = document.getElementsByName("images");
      for (var i = 0; i < ImageArrayVar.length; i++) {
        ImageArray.push(ImageArrayVar[i].value);
      }

      function toLetters(num) { // numbers to letters
        "use strict";
        var mod = num % 26;
        var pow = num / 26 | 0;
        var out = mod ? String.fromCharCode(64 + mod) : (pow--, 'Z');
        return pow ? toLetters(pow) + out : out;
    }

      let imagesHere = "";
      for (i = 0, letter = 1; i < y2; i++) {
        imagesHere += '[url='+ImageArray[i]+']EXHIBIT '+toLetters(letter++)+'[/url]\n';
      }

      var format =
        `[center]COUNTY OF LOS SANTOS SHERIFF'S DEPARTMENT
"A TRADITION OF SERVICE SINCE 1850"
[img]https://i.imgur.com/ymtvqWv.png[/img]
INTERNAL AFFAIRS BUREAU
USE OF FORCE REVIEW FORM[/center]

[b]GENERAL INFORMATION[/b]
[table2=Arial]
[tr]
[td][b]DATE & TIME[/b][/td]
[td][b]CASE #[/b][/td]
[td][b]ADDRESS OF OCCURRENCE[/b][/td]
[td][b]CATEGORY OF FORCE[/b][/td][/tr]
[tr]
[td]`+dateTime+`[/td]
[td]`+caseNumber+`[/td]
[td]`+location+`[/td]
[td]`+forceUsed+`[/td]
[/tr]
[/table2]


[b]PERSONNEL INFORMATION[/b]
[table][tr]
[td][b]Incident Commander[/b][/td]
[td][b]Other Field Supervisors[/b][/td]
[/tr]
[tr][td]`+incidentCommanderFinal+`[/td]
[td]`+fieldSupervisorsFinal+`[/td][/tr]
[/table]

[table][tr]
[td][b]Field Deputies[/b][/td]
[td][b]Operating Out Of[/b][/td]
[td][b]Designation[/b][/td]
[/tr]
`+personnel+`
[/table]

[b]FACTUAL ANALYSIS:[/b]
[list=none]`+factualAnalysis+`
[/list]

[b]SCENE IMAGERY:[/b]
[list=none]
`+imagesHere+`
[/list]

[b]SUMMARY OF ADJUDICATION:[/b]
[list=none]`+summary+`[/list]

[b]ADJUDICATION[/b]
[list=none]
[`+b1+`]Exonerate[/`+b1+`]
[`+b2+`]Launch Administrative Investigation[/`+b2+`]
[`+b3+`]Launch Criminal Investigation[/`+b3+`]
[/list]
[b]SUBMITTING INVESTIGATOR[/b]
[list=none][i]`+deputyName+`[/i][/list]
`;

      document.getElementById("finish").value = format;
    }
  </script>
</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->



<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin.min.js"></script>
<script src="../js/bootstrap-select.js"></script>

</body>
<?php include '../footer.php' ?>
</html>
