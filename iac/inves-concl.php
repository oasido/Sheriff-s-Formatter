<?php
include('../main.php');
include '../header.php';

function generateRandomString($length = 10) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = 'log/';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}
?>

<!-- SEPERATOR -->
<div id="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7 col-md-12">
        <!-- col grid test 15/5/2019 -->
        <div class="card">
          <div class="card-header">
            <strong>Allegations</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <!-- <label class="col-sm-3 col-form-label">Allegation 1</label> -->
                <input class='form-control col-sm-3' type='text' name='corruptCode' placeholder="Allegation">
                &nbsp;
                <input class='form-control col-sm-3' type='text' name='allegationDisposition' placeholder="Disposition">
                &nbsp;
                <input class='form-control col-sm-5' type='text' name='allegationInputs' placeholder="Brief explanation of allegation">
              </div>
            </div>
            <div class="aye"></div>
            <br />
            <center>
              <a class="add_more_button" style="color: green;">
                <i class="fas fa-plus-circle" style="font-size: 25px;"></i>
              </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="remove_field" style="font-size: 25px">
                <i class="fas fa-times" style="color:red;"></i>
              </a>
            </center>
          </div>
        </div>
        <br />
        <div class="card">
          <div class="card-header">
            <strong>Recommendation</strong>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="personnel">
                <tbody>
                  <tr>
                    <td><span><strong>Deputy Name</strong></span></td>
                    <td><span><strong>Employee No.</strong></span></td>
                    <td><span><strong>Recommended Action</strong></span></td>
                    <td><span><strong>MPP Violation</strong></span></td>
                  </tr>
                </tbody>
              </table>
              <center><button class="btn btn-outline-primary" onclick="addAllegation()">Add</button></center>
            </div>
          </div>
        </div>
        <br />
        <div class="card">
          <div class="card-header">
            <strong>Evidence</strong>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="evidence">
                <tbody>
                  <tr>
                    <td><span><strong>Evidence Desc.</strong></span></td>
                    <td><span><strong>Investigator Comment</strong></span></td>
                  </tr>
                </tbody>
              </table>
              <center><button class="btn btn-outline-primary" onclick="addEvidence()">Add</button></center>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            <strong>Investigation Background</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Investigation Source</label>
                <select class="form-control col-sm-6" id="invSource">
                  <option>Public Complaint</option>
                  <option>Self Initiated</option>
                </select>
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Date Complaint Filed</label>
                <input class="form-control col-sm-6" type="date" id="date">
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Deputy (Deputies) Investigated</label>
                <textarea class="form-control col-sm-6" id="deputiesInvolved" placeholder="John Doe
Joe Public"></textarea>
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Supervising Investigator</label>
                <input class="form-control col-sm-6" type="text" id="supervisingInvestigator">
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Case ID</label>
                <input class="form-control col-sm-6" type="text" id="caseID" placeholder="Ref. number here">
              </div>
            </div>
          </div>
        </div>
        <br />
        <div class="card">
          <div class="card-header">
            <strong>Bureau Command Approval</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Authorizing Investigator</label>
                <input class="form-control col-sm-6" type="text" id="authorizingInvestigator">
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Complaint Disposition</label>
                <input class="form-control col-sm-6" id="complaintDisposition" />
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Further Action</label>
                <input class="form-control col-sm-6" id="furtherAction" />
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
    // Form additions
    let x = 1; //initialize counter for text box
    $(document).ready(function() {
      var max_fields_limit = 20; //set limit for maximum input fields
      var allegationNumber = 0;
      var numItems = document.getElementsByClassName('allegations').length;

      $('.add_more_button').click(function(e) { //click event on add more fields button having class add_more_button
        e.preventDefault();
        if (x < max_fields_limit) { //check conditions
          x++; //counter increment
          $('.aye').append(
            "<div class='allegations'><br /><div class='form-inline'><div class='col-md-12 form-group'><input class='form-control col-sm-3' type='text' name='corruptCode' placeholder='Allegation'>&nbsp;<input name='allegationDisposition' type='text' value='' class='form-control col-sm-3' placeholder='Disposition'/>&nbsp;<input name='allegationInputs' type='text' value='' class='form-control col-sm-5' placeholder='Brief explanation of allegation'/></div></div></div>"
          ); //add input field
        }
      });

      $('.remove_field').on('click', function(e) { //user click on remove text links
        if (numItems < 1) {
          x = 2;
        }
        e.preventDefault();
        $('.allegations:last').remove();
        x--;
      })
    });

    addAllegation();
    addEvidence();
    document.getElementById('supervisingInvestigator').value = '<?php echo $_SESSION['user']->game_name; ?>';


    function addAllegation() {
      var empTab2 = document.getElementById('personnel');
      var rowCnt2 = empTab2.rows.length; // GET TABLE ROW COUNT.
      var tr2 = empTab2.insertRow(rowCnt2); // TABLE ROW.
      tr2 = empTab2.insertRow(rowCnt2);
      for (var c = 0; c < 5; c++) {
        var td2 = document.createElement('td'); // TABLE DEFINITION.
        td2 = tr2.insertCell(c);
        switch (c) {
          case 0:
            {
              // ADD A BUTTON.
              var personnelN = document.createElement('input');
              // SET INPUT ATTRIBUTE.
              personnelN.setAttribute("class", 'form-control');
              // personnelN.setAttribute("id", 'addNameHereAuto');
              // personnelN.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
              td2.appendChild(personnelN);
              break;
            }
          case 1:
            {
              var personnelB = document.createElement("input");
              personnelB.setAttribute("class", 'form-control');
              personnelB.setAttribute("type", 'number');
              // personnelB.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
              td2.appendChild(personnelB);
              break;
            }
          case 2:
            {
              var personnelRA = document.createElement("input");
              personnelRA.setAttribute("class", 'form-control');
              // personnelRA.setAttribute("type", 'number');
              // personnelRA.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
              td2.appendChild(personnelRA);
              break;
            }
          case 3:
            {
              var personnelMPP = document.createElement("input");
              personnelMPP.setAttribute("class", 'form-control');
              // personnelB.setAttribute("onkeyup", 'this.value = this.value.toUpperCase();');
              td2.appendChild(personnelMPP);
              break;
            }
          case 4:
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

    function addEvidence() {
      var empTabEvidence = document.getElementById('evidence');
      var rowCntEvidence = empTabEvidence.rows.length;

      // GET TABLE ROW COUNT.
      var trEvidence = empTabEvidence.insertRow(rowCntEvidence); // TABLE ROW.
      trEvidence = empTabEvidence.insertRow(rowCntEvidence);

      for (var c = 0; c < 3; c++) {
        var tdEvidence = document.createElement('td'); // TABLE DEFINITION.
        tdEvidence = trEvidence.insertCell(c);
        switch (c) {
          case 0:
            {
              var desc = document.createElement("textarea");
              desc.setAttribute("class", "form-control");
              tdEvidence.appendChild(desc);
              break;
            }

          case 1:
            {
              var comment = document.createElement("textarea");
              comment.setAttribute("class", "form-control");
              tdEvidence.appendChild(comment);
              break;
            }

          case 2:
            {
              var button = document.createElement("input");
              button.setAttribute('type', 'button');
              button.setAttribute('value', 'Remove');
              button.setAttribute("class", "btn btn-danger btn-sm");

              // ADD THE BUTTON's 'onclick' EVENT.
              button.setAttribute('onclick', 'removeEvidence(this)');
              tdEvidence.appendChild(button);
              break;
            }
        }
      }
    }

    function removeEvidence(oButton) {
      var empTabEvidence = document.getElementById('evidence');
      empTabEvidence.deleteRow(oButton.parentNode.parentNode.rowIndex); // BUTTON -> TD -> TR.
    }


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
        the_list += "[*]" + split_cut[0] + "\n";
        the_list += "\n";
        for (k = 1; k < split_cut.length; k++) {
          the_list += "[*]" + split_cut[k] + "\n";
        }
        the_list += "\n";
      }
      return the_list;
    }

    function process() {
      var theDate = document.getElementById("date").value;
      var compiledDate = moment(theDate).format('DD/' + 'MMM' + '/YYYY');

      compiledDate.toString();
      var date = compiledDate.toUpperCase();

      if (date == 'INVALID DATE') {
        date = 'N/A';
      }
      let momentJSdate = moment().format('MMMM Do, YYYY');
      let invSource = document.getElementById("invSource").value;
      let deputiesInvolved = document.getElementById("deputiesInvolved").value;
      let supervisingInvestigator = document.getElementById("supervisingInvestigator").value;
      let authorizingInvestigator = document.getElementById("authorizingInvestigator").value;
      let complaintDisposition = document.getElementById("complaintDisposition").value;
      let caseID = document.getElementById("caseID").value;
      // let moreAllegations = document.getElementById("moreAllegations").value;
      let furtherAction = document.getElementById("furtherAction").value;

      var myTab2 = document.getElementById('personnel');
      var personnel = "";
      for (row = 1; row < myTab2.rows.length - 1; row++) {
        for (c = 0; c < myTab2.rows[row].cells.length - 1; c++) { // EACH CELL IN A ROW.
          switch (c) {
            case 0:
              {
                var element = myTab2.rows.item(row).cells[c];
                personnel += "[tr][td][size=90]" + element.childNodes[0].value + "[/size][/td]";
                break;
              }
            case 1:
              {
                var element = myTab2.rows.item(row).cells[c];
                personnel += "[td][size=90]" + element.childNodes[0].value + "[/size][/td]";
                break;
              }
            case 2:
              {
                var element = myTab2.rows.item(row).cells[c];
                personnel += "[td][size=90]" + element.childNodes[0].value + "[/size][/td]";
                break;
              }
            case 3:
              {
                var element = myTab2.rows.item(row).cells[c];
                personnel += "[td][size=90]" + element.childNodes[0].value + "[/size][/td][/tr]";
                break;
              }
          }
        }
      }

      // SEPERATOR

      var textArray = [];

      var evidence = "";
      var myTabEvidence = document.getElementById('evidence');
      var evidenceCount = 0;
      var evidenceDesc = [];
      var evidenceComment = [];
      for (row = 1; row < myTabEvidence.rows.length - 1; row++) {
        for (c = 0; c < myTabEvidence.rows[row].cells.length - 1; c++) { // EACH CELL IN A ROW.
          switch (c) {
            case 0:
              {
                evidenceCount++;
                // Get the evidence brief desc;
                var element = myTabEvidence.rows.item(row).cells[c];
                evidenceDesc.push("[td][size=90]" + element.childNodes[0].value + "[/size][/td]");
                break;
              }

            case 1:
              {
                var element = myTabEvidence.rows.item(row).cells[c];
                evidenceComment.push("[td][size=90]" + element.childNodes[0].value + "[/size][/td]");
                break;
              }
          }
        }
      }

      // x out of y
      var arr = [];
      var i = 1;
      while (i <= evidenceCount) {
        arr.push(i++);
      }

      for (i = 0; i < arr.length; i++) {
        textArray.push("[tr][td][size=90]" +arr[i] + " out of " + evidenceCount + "[/td][/size]");
      }

      var evidenceFinalText = [];
      for (c = 0, i = 0, j = 0; i < arr.length; i++, j++, c++) {
        evidenceFinalText += textArray[c] + evidenceDesc[i] + evidenceComment[j];
      }


      // add allegations and dispositions together into finaltext
      var corruptCodeArr = [];
      var corruptCode = document.getElementsByName("corruptCode");
      for (var i = 0; i < corruptCode.length; i++) {
        corruptCodeArr.push(corruptCode[i].value);
      }
      // console.log(corruptCodeArr);

      var allegationList = [];
      var fieldsAllegation = document.getElementsByName("allegationInputs");
      for (var i = 0; i < fieldsAllegation.length; i++) {
        allegationList.push(fieldsAllegation[i].value);
      }

      var DispositionList = [];
      var fieldsDisposition = document.getElementsByName("allegationDisposition");
      for (var i = 0; i < fieldsDisposition.length; i++) {
        DispositionList.push(fieldsDisposition[i].value);
      }

      let finalText = "";
      let allegationCounter = 1;
      for (c = 0, i = 0, j = 0; i < x; c++, i++, j++) {
        finalText += '[*][b]' + corruptCodeArr[c] + ' - [/b][i]' + DispositionList[i] + '[/i]' + '\n' + allegationList[j] + '[break][/break]';
        allegationCounter++;
      }

      var format =
        `[altdivbox=white,25,25,25,25][font=Arial][center][b]COUNTY OF LOS SANTOS SHERIFF'S DEPARTMENT
        INTERNAL AFFAIRS BUREAU — INVESTIGATION CONCLUSION[/b][/center]

        To Whom It May Concern:

        Internal Affairs Bureau Investigation `+caseID+` has been completed as of (`+momentJSdate+`). The facts are as follows:


        [indent][b]INVESTIGATION BACKGROUND[/b][/indent][/font]
        [table2=Arial][tr]
        [td][size=90][b]INVESTIGATION SOURCE[/b][/size][/td]
        [td][size=90][b]DATE COMPLAINT FILED[/b][/size][/td]
        [td][size=90][b]DEPUTY (DEPUTIES) INVESTIGATED[/b][/size][/td]
        [td][size=90][b]SUPERVISING INVESTIGATOR[/b][/size][/td][/tr]
        [tr][td][size=90]`+invSource+`[/size][/td]
        [td][size=90]`+date+`[/size][/td]
        [td][size=90]`+deputiesInvolved+`[/size][/td]
        [td][size=90]`+supervisingInvestigator+`[/size][/td][/tr][/table2]


        [font=arial][indent][b]ALLEGATIONS[/b][/indent]
        [list=1]`+finalText+`[/list]

        [indent][b]RECOMMENDATION[/b][/indent][/font]
        [table2=Arial][tr][td][size=90][b]DEPUTY NAME[/b][/size][/td]
        [td][size=90][b]EMPLOYEE NO.[/b][/size][/td]
        [td][size=90][b]RECOMMENDED ACTION[/b][/size][/td]
        [td][size=90][b]MPP VIOLATED[/b][/size][/td][/tr]
        `+personnel+`[/table2]


        [font=arial][indent][b]EVIDENCE[/b][/indent][/font]
        [table2=Arial][tr][td][size=90][b]EVIDENCE #[/b][/size][/td]
        [td][size=90][b]DESC OF EVIDENCE[/b][/size][/td]
        [td][size=90][b]INVESTIGATOR COMMENT[/b][/size][/td][/tr]
        `+evidenceFinalText+`
        [/table2]


        [font=arial][indent][b]BUREAU COMMAND APPROVAL[/b][/indent][/font]
        [table2=Arial][tr][td][size=90][b]AUTHORIZING INVESTIGATOR[/b][/size][/td]
        [td][size=90][b]COMPLAINT DISPOSITION[/b][/size][/td]
        [td][size=90][b]FURTHER ACTION[/b][/size][/td][/tr]
        [tr]
        [td][size=90]`+authorizingInvestigator+`[/size][/td]
        [td][size=90]`+complaintDisposition+`[/size][/td]
        [td][size=90]`+furtherAction+`[/size][/td][/tr][/table2]


        [/altdivbox]`;

      document.getElementById("finish").value = format;

    } // process end
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

</body>
<?php include '../footer.php' ?>
</html>
