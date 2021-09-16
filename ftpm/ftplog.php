<?php
include('../main.php');
include '../header.php';
$query = "SELECT * FROM stations order by id desc";
$stations = mysqli_query($conn, $query);
?>
<!-- SEPERATOR -->
<div id="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7 col-md-12">
        <div class="card">
          <div class="card-header">
            <strong>General Information</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Hire Date</label>
                <input class="form-control col-sm-6" type="date" id="inductionDate">
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Full Name</label>
                <input class="form-control col-sm-6" type="text" id="fullName" placeholder="Firstname Lastname">
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Station</label>
                <select class="form-control col-sm-6" required id="station" >
                    <option value="" disabled selected>Select station</option>
                    <?php
                    while ($row =mysqli_fetch_object($stations)) {
                        echo '<option value="'.$row->value.'">'.$row->title.'</option>';
                    }
                    ?>
                </select>
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

    function process() {
      var now = moment();
      var currentDate = now.format('DD-MMM-YYYY').toUpperCase();
      // console.log(currentDate);
      var inductionDate = document.getElementById("inductionDate").value;
      inductionDate = moment(inductionDate).format('DD-MMM-YYYY').toUpperCase();
      // console.log(deadlineDate);
      var fullName = document.getElementById("fullName").value;
      var station = document.getElementById("station").value;
      var format = `[divbox=white][b][size=80][aligntable=center,0,255,0,0,0]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT[/aligntable][/size][/b]
[aligntable=center,0,190,0,0,0][b][size=80]DEPUTY SHERIFF TRAINEE ACTIVITY LOG — FIELD TRAINING PROGRAM[/size][/b][/aligntable]


[size=85][b]TRAINEE INFORMATION[/b][/size]

[aligntable=left,0,0,0,0,0]
[size=80][b]FULL NAME:[/b] `+fullName.toUpperCase()+`
[b]STATION:[/b] `+station.toUpperCase()+`[/size]
[/aligntable]
[aligntable=right,0,0,0,0,0]
[size=80][b]DATE OF HIRE:[/b] `+inductionDate+`
[b]PHASE:[/b] INTRODUCTORY[/size]
[/aligntable]



[color=#FFFFFF].[/color]
[table]
[tr]
[td][center][b][size=80]DATE[/size][/b][/center][/td]
[td][center][b][size=80]FTO NAME[/size][/b][/center][/td]
[td][center][b][size=80]EMPLOYEE NO.[/size][/b][/center][/td]
[td][center][b][size=80]PHASE NO.[/size][/b][/center][/td]
[td][center][b][size=80]ACCESS[/size][/b][/center][/td]
[/tr]

[tr]
[td][size=80]DD/MMM/YYY[/size][/td]
[td][size=80]FIRSTNAME LASTNAME[/size][/td]
[td][size=80]XXXXX[/size][/td]
[td][size=80]PHASE 1/2/3 (EXTENSION)[/size][/td]
[td][size=80][URL]LINK[/URL][/size][/td]
[/tr]
[tr]
[td][size=80]DD/MMM/YYY[/size][/td]
[td][size=80]FIRSTNAME LASTNAME[/size][/td]
[td][size=80]XXXXX[/size][/td]
[td][size=80]PHASE 1/2/3 (EXTENSION)[/size][/td]
[td][size=80][URL]LINK[/URL][/size][/td]
[/tr]
[/table]
[color=#FFFFFF].[/color]
[altspoiler=DOR FORMAT]
[code][tr]
[td][size=80]DD/MMM/YYY[/size][/td]
[td][size=80]FIRSTNAME LASTNAME[/size][/td]
[td][size=80]XXXXX[/size][/td]
[td][size=80]PHASE 1/2/3 (EXTENSION)[/size][/td]
[td][size=80][URL]LINK[/URL][/size][/td]
[/tr][/code]
[/altspoiler]

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
