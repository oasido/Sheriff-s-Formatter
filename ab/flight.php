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
                                <strong>Occupants On Board</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-inline">
                                    <div class="col-md-12 form-group">
                                        <label class="col-sm-5 col-form-label">Rank & Full Name</label>
                                        <textarea class="form-control col-sm-5" type="text" id="occupants" placeholder="Separate with commas."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div id="alertBoxShow" class="alert alert-dark" role="alert" style="display: none;">
                            <center><img id="startofpatrolimage" style="display: block;" src="../loading.svg" alt="loading">
                                <strong style="display: block;" id="startofpatrol">You are currently on patrol!</strong>
                                <br /><i id="endofpatrolimage" style="display: none; margin-bottom: 10px;" class="fas fa-check fa-lg"></i>
                                <strong style="display: none;" id="endofpatrol">Patrol ended!</strong>
                                <br /><br />
                                <span id="timer">Please wait...</span></center>

                        </div>
                    </div>
                </div>
                <br />
                <div class="highlight-clean">
                    <div class="container">
                        <center>
                            <button id="startBoxShow" style="display:block" class="btn btn-success btn-lg" onClick="startPatrol()"><i class="fas fa-cog"></i> Start Patrol</button>
                            <button id="endBoxShow" style="display:none" class="btn btn-success btn-lg" onClick="endPatrol()"><i class="fas fa-cog"></i> End Patrol & Generate</button>
                            <br />
                            <h5 class="font-weight-bold">Generated text:</h5>
                            <textarea rows="5" class="form-control col-sm-6" id="finish"></textarea>
                        </center>
                        <br />
                        <br />
                        <div class="alert alert-danger" role="alert">
                          <strong>Hey ho! This form is obsolete, meaning it's no longer in use.</strong><br />We now have implemented a new way to log flight hours, see <a href="https://clockify.me/tracker" target="_blank">Clockify</a>.<br />
                          If you have any questions, feel free to contact any Certified Flight Instructor.
                        </div>
                    </div>
                </div>
            </div>
            <!-- aye-->


            <!-- JS Form Script-->
            <script type="text/javascript">
                // ** // ask before reload
                // window.onbeforeunload = function ()
                // {
                //     return "";
                // };

                // $(document).ready(function(){
                //     $('[data-toggle="tooltip"]').tooltip();
                // });


                function cut_and_list(the_cut) {
                	//	for phpBB listing by spaces
                	var the_list = "";
                	var splitting = the_cut.split("\n");
                	for (i = 0; i < splitting.length; i++)
                	{
                		the_list += "[*]" + splitting[i] + "\n";
                	}
                	return the_list;
                }

                function double_cal(the_cut) {
                	// for phpBB listing by spaces & commas, twice
                	the_list = "";
                	the_cut = the_cut.split("\n");
                	for (i = 0; i < the_cut.length; i++)
                	{
                		split_cut = the_cut[i].split(",");
                		the_list += "[*]" +split_cut[0]+"\n";
                		the_list += "\n";
                		for (k = 1; k < split_cut.length; k++)
                		{
                			the_list += "[*]" + split_cut[k] + "\n";
                		}
                		the_list += "\n";
                	}
                	return the_list;
                }
                var theDate;
                var dd;
                var mm;
                var yyyy;
                var stHrs;
                var startHours;
                var stMns;
                var startMinutes;
                var timerVar;
                var totalSeconds;
                var hour;
                var minute;
                var seconds;
                var enHrs;
                var endHours;
                var enMns;
                var endMinutes;
                function startPatrol(){
                    // get date = theDate
                    theDate = new Date();
                    dd = theDate.getDate();
                    mm = theDate.getMonth() + 1; //January is 0!
                    yyyy = theDate.getFullYear();

                    if (dd < 10) {
                    dd = '0' + dd;
                    }

                    if (mm < 10) {
                    mm = '0' + mm;
                    }
                    theDate = mm + '/' + dd + '/' + yyyy;
                    // theDate = theDay.getUTCDate + "/" + theMonth.getUTCMonth + "/" + theYear.getUTCFullYear;

                    // get hours = startHours
                    stHrs = new Date();
                    startHours = stHrs.getUTCHours() + 1;
                    if (startHours < 10) {
                        startHours = '0' + startHours;
                    }

                    // get minutes = startMinutes
                    stMns = new Date();
                    startMinutes = stMns.getUTCMinutes();
                    if (startMinutes < 10) {
                        startMinutes = '0' + startMinutes;
                    }

                    // document.getElementById("timestarted").innerHTML = startHours + ":" + startMinutes;

                    // stopwatch
                    timerVar = setInterval(countTimer, 1000);
                    totalSeconds = 0;
                    function countTimer() {
                    ++totalSeconds;
                    hour = Math.floor(totalSeconds /3600);
                    minute = Math.floor((totalSeconds - hour*3600)/60);
                    seconds = totalSeconds - (hour*3600 + minute*60);
                    document.getElementById("timer").innerHTML = "You have been on patrol for " + hour + " hour(s), " + minute + " minute(s)," + " and " + seconds + " second(s).";
                    // document.getElementById("timer").innerHTML = hour + ":" + minute + ":" + seconds;
                    }
                    document.getElementById("alertBoxShow").style.display = "block";
                    document.getElementById("startBoxShow").style.display = "none";
                    document.getElementById("endBoxShow").style.display = "block";
                }

                function endPatrol(){
                    // get hours = startHours
                    enHrs = new Date();
                    endHours = enHrs.getUTCHours() + 1;
                    if (endHours < 10) {
                        endHours = '0' + endHours;
                    }
                    // get minutes = startMinutes
                    enMns = new Date();
                    endMinutes = enMns.getUTCMinutes();
                    if (endMinutes < 10) {
                        endMinutes = '0' + endMinutes;
                    }
                    clearInterval(timerVar);
                    document.getElementById("startofpatrol").style.display = "none";
                    document.getElementById("endofpatrol").style.display = "block";
                    document.getElementById("startofpatrolimage").style.display = "none";
                    document.getElementById("endofpatrolimage").style.display = "block";
                    process();
                }

                function process(){
                var occupants = document.getElementById("occupants").value;
                  var format = "[list]\n\
[b]Date of Flight[/b]: "+theDate+"\n\
[b]Occupants[/b]: "+occupants+"\n\
[b]Flight Time[/b]: "+startHours+":"+startMinutes+" - "+endHours+":"+endMinutes+"\n\
[b]Total flight time[/b]: "+hour+" hour(s), "+minute+" minute(s).\n\
[/list]"

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
