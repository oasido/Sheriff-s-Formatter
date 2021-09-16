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
                                <strong>Miranda Warning</strong>
                            </div>
                            <div class="card-body">
                              <div class="form-inline">
                                  <div class="col-md-12 form-group">
                                      <label class="col-sm-5 col-form-label">Date</label>
                                      <input type="date" class="form-control col-sm-6" id="date">
                                  </div>
                              </div>
                              <hr>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-5 col-form-label">Employee Receiving Name</label>
                                        <input required type="text" class="form-control col-sm-6" id="employeeReceiving" placeholder="Firstname Lastname">
                                    </div>
                                </div>
                                <br>
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-5 col-form-label">Administered By</label>
                                        <input type="text" class="form-control col-sm-6 addNameHereAuto" id="administeredBy">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-5 col-form-label">Employee Representative</label>
                                        <input type="text" class="form-control col-sm-6" id="employeeRepresenative" placeholder="If applicable">
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

            $('.addNameHereAuto').val('<?php echo $_SESSION['user']->game_name; ?>');

                function process() {
                  let dateNotReady = document.getElementById("date").value;
                  let date = moment(dateNotReady).format('DD-MMM-YYYY').toUpperCase();
                  let employeeReceiving = document.getElementById("employeeReceiving").value;
                  let administeredBy = document.getElementById("administeredBy").value;
                  let employeeRepresenative = document.getElementById("employeeRepresenative").value;



                  let format = `[font=Arial][color=black][altdivbox=white,0,25,0,0][center][img]https://i.imgur.com/0mAhHQJ.png[/img]
[b]Miranda Warning[/b][/center]

[indent][b]Name of Employee Receiving Notice:[/b] `+employeeReceiving+`

[b]Administered By:[/b] `+administeredBy+`

[b]Date:[/b] `+date+`


[justify]I wish to advise you that you are being questioned as part of an official investigation of the Los Santos County Sheriff's Department. You will be asked questions specifically directed and narrowly related to the performance of your official duties or fitness for office. You are entitled to all the rights and privileges guaranteed by the laws and the Constitution of this State and the Constitution of the United States, including the right to not be compelled to incriminate yourself.

You have the right to remain silent. Anything you say can be used against you in court. You have the right to talk to a lawyer for advice before we ask you any questions. You have the right to have a lawyer with you during questioning. If you cannot afford a lawyer, one will be sought out from the Public Defender registry, if you wish. If you decide to answer questions now without a lawyer present, you have the right to stop answering at any time.

I further wish to advise you that if you refuse to testify or to answer questions relating to the performance of your official duties or fitness for duty, you will be subject to Department discipline, which could result in your dismissal from the department. If you do answer, your statements and information along with evidence can be used against you in any subsequent criminal proceeding.[/justify]
[b]Signature of Employee Receiving Notice:[/b] `+employeeReceiving+`

[b]Signature of Employee Representative (if applicable):[/b] `+employeeRepresenative+`

[b]Signature of Individual Administering Warning:[/b] `+administeredBy+`
[/indent]

[center][img]https://puu.sh/zPZF5/c633a93990.png[/img][/center][/altdivbox]`;

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
