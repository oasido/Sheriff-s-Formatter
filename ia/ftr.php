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
                                <strong>Failure to Respond</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Employee Name</label>
                                        <input required type="text" class="form-control col-sm-6" id="employeeReceiving" placeholder="Firstname Lastname">
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

                  let format = `[b](([/b] `+employeeReceiving+`,

You are being contacted on behalf of the Internal Affairs Bureau in regards to a situation which you were involved in. You were sent correspondence by the Internal Affairs Bureau, which you failed to respond to within a mandated time-span.

Failure to respond to this correspondence with both reasoning and an answer to the previously sent correspondence will result in you being placed on Administrative Leave indefinitely. [b]))[/b]`;

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
