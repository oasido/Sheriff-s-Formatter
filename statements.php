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
                                <strong>Reporter Information & Statement</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Reporter's Full Name</label>
                                        <input required type="text" class="form-control col-sm-6" id="name" placeholder="Firstname Lastname">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Birth Date</label>
                                        <input type="date" class="form-control col-sm-6" id="dateOfBirth">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Phone Number</label>
                                        <input type="number" class="form-control col-sm-6" id="phone">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Address</label>
                                        <input type="text" class="form-control col-sm-6" id="address">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Employer (if applicable)</label>
                                        <input type="text" class="form-control col-sm-6" id="employer" value="N/A" placeholder="N/A if not applicable.">
                                    </div>
                                </div>
                                <br />
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Statement</label>
                                        <textarea rows="3" class="form-control col-sm-6" id="statement" placeholder="Write the statement here"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>Time & Place</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-4 col-form-label">Location</label>
                                        <input class="form-control col-sm-6" type="text" id="location">
                                    </div>
                                </div>
                                <br />
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
                  let date = document.getElementById("date").value;
                  let time = document.getElementById("time").value;
                  let location = document.getElementById("location").value;
                  let name = document.getElementById("name").value;
                  let dateOfBirth = document.getElementById("dateOfBirth").value;
                  let phone = document.getElementById("phone").value;
                  let address = document.getElementById("address").value;
                  let employer = document.getElementById("employer").value;
                  let statement = document.getElementById("statement").value;
                //   let deputyName = document.getElementById("deputyName").value;
                //   let rank = document.getElementById("rank").value;
                <?php
                $qqr = "SELECT * FROM ranks WHERE id='".$_SESSION['user']->rank."'";
                $rest=mysqli_query($conn, $qqr);
                $rowt=mysqli_fetch_object($rest);
                ?>
                let deputyName = "<?php echo $_SESSION['user']->game_name; ?>"
                // name or signature as signature
                var deputySig;
                if ("<?php echo $_SESSION['user']->signature; ?>" === "") {
                  deputySig = "[u]x "+"<?php echo $_SESSION['user']->game_name; ?>"+"[/u]";
                } else {
                  deputySig = "[img]"+"<?php echo $_SESSION['user']->signature; ?>"+"[/img]";
                }

                let rank = "<?php echo $rowt->title; ?>"
                let format = "[divbox=#FFFFFF][aligntable=right,0,0,0,0,0,transparent][img]https://i.imgur.com/O93jP8a.png[/img][/aligntable]\n\
                \n\
                [b][size=150]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT\n\
                 STATEMENT FORM[/size][/b]\n\
                Statement #\n\
                \n\
                [hr][/hr]\n\
                \n\
                [b]Date:[/b] "+date+"\n\
                [b]Time:[/b] "+time+"\n\
                [b]Location of Incident:[/b] "+location+"\n\
                [b]Reporter's Name:[/b] "+name+"\n\
                [b]Reporter's DOB:[/b] "+dateOfBirth+"\n\
                [b]Reporter's Phone Number:[/b] "+phone+"\n\
                [b]Reporter's Domestic Address:[/b] "+address+"\n\
                [b]Reporter's Employer:[/b] "+employer+"\n\
                \n\
                \n\
                [i]I, [u]"+name+"[/u], make this written statement voluntarily to the Los Santos County Sheriff's Department in the presence of [u]"+deputyName+"[/u].[/i]\n\
                [hr][/hr]\n\
                \n\
                "+statement+"\n\
                \n\
                [hr][/hr]\n\
                \n\
                [i]I the undersigned do solemnly swear and affirm that all the above written information is true to my knowledge. I understand that the intentional falsification of any information provided in this official statement may lead to legal prosecution. I do agree to testify in court, should the need arise.[/i]\n\
                \n\
                [u]x "+name+"[/u]\n\
                \n\
                [hr][/hr]\n\
                [b]LSSD Deputy Information[/b]\n\
                \n\
                [b]Name:[/b] "+deputyName+"\n\
                [b]Rank:[/b] "+rank+"\n\
                \n\
                "+deputySig+"[/divbox]";

                  document.getElementById("finish").value = format;
                  }
            </script>
        </div>
        <!-- /.content-wrapper -->
      </div>
      <!-- /#wrapper -->

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin.min.js"></script>


</body>
<?php include 'footer.php' ?>
</html>
