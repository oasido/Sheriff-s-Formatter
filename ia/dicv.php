<?php
include('../main.php');
include '../header.php';
?>

        <!-- SEPERATOR -->
        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="container" style="max-width: 50rem;">
                    <div class="">
                        <div class="card">
                            <div class="card-header">
                                <strong>(( DICV Request ))</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Employee Name</label>
                                        <input required type="text" class="form-control col-sm-6" id="employeeReceiving" placeholder="Firstname Lastname">
                                    </div>
                                </div>
                                <br>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Date</label>
                                        <input required type="date" class="form-control col-sm-6" id="dateNotReady">
                                    </div>
                                </div>
                                <br>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Location</label>
                                        <input required type="text" class="form-control col-sm-6" id="location">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                      <!-- aye -->
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

                function process() {
                  let employeeReceiving = document.getElementById("employeeReceiving").value;
                  let location = document.getElementById("location").value;
                  let dateNotReady = document.getElementById("dateNotReady").value;
                  let date = moment(dateNotReady).format('MMMM Do, YYYY');

                  let format = `[b](([/b] `+employeeReceiving+`,

You are being contacted by the Internal Affairs Bureau due to your presence and/or involvement with a situation on the `+date+`, at `+location+`. Description of events. Digital In Car Video (DICV) footage has been obtained from the Sheriff's Communication Center (SCC), and we would like to have your perspective of the scenario.

Please include audio clues, and mention if your vehicle's sirens were on. If they were not, then the audio clues would not be roleplayed from your end, but would be used to cross-check with other evidence that we may have.

Please return the form below as soon as possible. Keep in mind that any intentional inconsistency in the information you provide may result in administrative punishment or disciplinary action in the faction, as this would be a breach of the server rules. [b]))[/b]

[code][b]Name:[/b] Forename_Surname
[b]Designation:[/b] Callsign here
[b]Narrative:[/b] Delve into detail, and what audio could be captured by the vehicle (as well as if your vehicle's sirens were on or not).
[b]Screenshots or video:[/b] Add links here, if any.`;

                  document.getElementById("finish").value = format;
                  }
            </script>
        </div>
        <!-- /.content-wrapper -->
      </div>
      <!-- /#wrapper -->

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../js/sb-admin.min.js"></script>


</body>
<?php include '../footer.php' ?>
</html>
