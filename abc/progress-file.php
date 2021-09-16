<?php
include('../main.php');
include '../header.php';
$query = "SELECT * FROM ranks order by id desc";
$ranks = mysqli_query($conn, $query);
?>
<!-- SEPERATOR -->
<div id="content-wrapper">
  <div class="container-fluid">
    <div class="container" style="max-width: 50rem;">
      <div class="">
        <div class="card">
          <div class="card-header">
            <strong>General Information</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Induction Date</label>
                <input class="form-control col-sm-6" type="date" id="inductionDate">
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Deputy Name</label>
                <input class="form-control col-sm-6" type="text" id="flightCadet" placeholder="Firstname Lastname">
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Deputy Rank</label>
                <select class="form-control col-sm-6" required id="cadetRank" >
                    <option value="" disabled selected>Select rank</option>
                    <?php
                    while ($row =mysqli_fetch_object($ranks)) {
                        echo '<option value="'.$row->title.'">'.$row->title.'</option>';
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
      var deadlineDate = moment(inductionDate).add(1, 'months').calendar();
      deadlineDate = moment(deadlineDate).format('DD-MMM-YYYY').toUpperCase();
      // console.log(deadlineDate);
      var flightCadet = document.getElementById("flightCadet").value;
      var cadetRank = document.getElementById("cadetRank").value;
      var format = `[divbox=white][center][img]https://i.imgur.com/TySZqQK.png[/img]
[font=Arial][b][i]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT
AERO BUREAU[/i][/b][/center]
[aligntable=LEFT,0,0,0,0,0][i][size=85]PHONE: 562-469-5997
FAX: 562-425-3197[/size][/i][/ALIGNTABLE][aligntable=right,0,0,0,0,0][size=85][i][u]BUREAU CAPTAIN[/u]
JACOB TANNER[/i][/size][/ALIGNTABLE][aligntable=left,0,205,0,0,0][i][size=85]San Augustine Road
Red County 824, SA[/size][/i][/aligntable]

[break][/break]
[center]HELICOPTER PILOT DEPUTY TRAINING PROGRAM
TRAINING FILE[/center][/font]


[center][table2=Arial]
[tr]
[td][size=80][b]PROGRAM INDUCTION[/b][/size][/td]
[td][size=80][b]PROGRAM DEADLINE[/b][/size][/td]
[/tr]
[tr]
[td][size=80]`+currentDate+`[/size][/td]
[td][size=80]`+deadlineDate+`[/size][/td]
[/tr]
[/table2][/center]
[break][/break]
[center][table2=Arial]
[tr]
[td][size=80][b]PARTICIPANT NAME[/b][/size][/td]
[td][size=80][b]DEPARTMENT RANK[/b][/size][/td]
[/tr]
[tr]
[td][size=80]`+flightCadet+`[/size][/td]
[td][size=80]`+cadetRank+`[/size][/td]
[/tr]
[/table2][/center]
[break][/break]
[b][u]PROGRAM PROGRESS[/u][/b]

[list=NONE]
[todo]STAGE ONE - SIMULATION SESSION[/todo]
[todo]STAGE ONE - AERIAL PATROL[/todo]
[todo]STAGE TWO - EVALUATION FLIGHT[/todo]
[/list]

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
