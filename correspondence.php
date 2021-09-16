<?php
include('main.php');
include 'header.php';
$query = "SELECT * FROM ranks order by id desc";
$ranks = mysqli_query($conn, $query);
$ranks2 = mysqli_query($conn, $query);
?>
<!-- SEPERATOR -->
<div id="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7 col-md-12">
        <div class="card">
          <div class="card-header">
            <strong>Correspondence Letter</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Subject</label>
                <input type="text" class="form-control col-sm-6" id="subject" />
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <textarea id="editor"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            <strong>Your Details</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <span class="col-sm-1"></span>
                <input class="form-control col-sm-10 addNameHereAuto" style="text-align: center;" type="text" placeholder="Firstname Lastname" id="nameFrom">
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Deputy Rank</label>
                <select class="form-control col-sm-6 addRankHereAuto" required id="rankFrom">
                  <option value="" disabled selected>Select rank</option>
                  <?php
                  while ($row = mysqli_fetch_object($ranks)) {
                    echo '<option value="' . $row->title . '">' . $row->title . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
            <br>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="addStationHereAuto col-sm-4 col-form-label">Station/Assignment</label>
                <input class="form-control col-sm-6" type="text" placeholder="May be blank" id="stationFrom">
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header">
            <strong>Addressee Details</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <span class="col-sm-1"></span>
                <input class="form-control col-sm-10" style="text-align: center;" type="text" placeholder="Firstname Lastname" id="nameTo">
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Deputy Rank</label>
                <select class="form-control col-sm-6" required id="rankTo">
                  <option value="" disabled selected>Select rank</option>
                  <?php
                  while ($row = mysqli_fetch_object($ranks2)) {
                    echo '<option value="' . $row->title . '">' . $row->title . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
            <br>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Station/Assignment</label>
                <input class="form-control col-sm-6" type="text" placeholder="May be blank" id="stationTo">
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

  <script type="text/javascript">
    $('#editor').bbcode();

    let deputy = "<?php echo $_SESSION['user']->game_name; ?>"
    let badge = "<?php echo $_SESSION['user']->badge_no; ?>"
    let station = "<?php echo $_SESSION['user']->station; ?>"

    $('.addNameHereAuto').val('<?php echo $_SESSION['user']->game_name; ?>');
    $('.addStationHereAuto').val('<?php echo $_SESSION['user']->station; ?>');

    function process() {
      let now = moment();
      let currentDate = now.format('DD-MMM-YYYY').toUpperCase();
      let editor = document.getElementById("editor").value;
      let subject = document.getElementById("subject").value;
      let nameFrom = document.getElementById("nameFrom").value;
      let rankFrom = document.getElementById("rankFrom").value;
      let stationFrom = document.getElementById("stationFrom").value;
      let nameTo = document.getElementById("nameTo").value;
      let rankTo = document.getElementById("rankTo").value;
      let stationTo = document.getElementById("stationTo").value;

      if (rankFrom == "Deputy Sheriff Trainee" || rankFrom == "Deputy Sheriff" || rankFrom == "Deputy Sheriff (Bonus I)" || rankFrom == "Deputy Sheriff (Bonus II)") {
        rankFrom = "DEP.";
      }
      if (rankTo == "Deputy Sheriff Trainee" || rankTo == "Deputy Sheriff" || rankTo == "Deputy Sheriff (Bonus I)" || rankTo == "Deputy Sheriff (Bonus II)") {
        rankTo = "DEP.";
      }

      let settingSignature = "<?php echo $_SESSION['user']->signature; ?>";
      // alert(typeof settingSignature)
      // name or signature as signature
      var fullSig = "";
      if (settingSignature == "") {
        fullSig = "<?php echo $_SESSION['user']->game_name; ?>".toUpperCase() + ", " + rankFrom.toUpperCase();
      } else {
        fullSig = "[img]" + "<?php echo $_SESSION['user']->signature; ?>" + "[/img]";
      }

      let format = `[divbox=white][font=Arial][center][size=70][b]COUNTY OF LOS SANTOS[/size]
[size=115]SHERIFF'S DEPARTMENT[/size]
[size=70][i]A Tradition of Service Since 1850[/i][/b][/size]

[size=80][u]OFFICE CORRESPONDENCE[/u][/size][/center]

[aligntable=right,0,0,75,0,0,transparent]DATE: ` + currentDate + `[/aligntable]

[size=90][aligntable=right,0,0,0,0,0,transparent]TO:[color=transparent]——[/color] ` + nameTo.toUpperCase() + `, ` + rankTo.toUpperCase() + `
[color=transparent]TO:[/color][color=transparent]——[/color] ` + stationTo.toUpperCase() + `[/aligntable]FROM:[color=transparent]——[/color] ` + nameFrom.toUpperCase() + `, ` + rankFrom.toUpperCase() + `
[color=transparent]FROM:——[/color] ` + stationFrom.toUpperCase() + `

SUBJECT:[color=transparent]—[/color] [b]` + subject.toUpperCase() + `[/b]


[indent][indent]` + editor + `


[/indent]` + fullSig + `[/indent]

[/divbox]`;

      document.getElementById("finish").value = format;
    }
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