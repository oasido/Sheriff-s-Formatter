<?php
include('../main.php');
include '../header.php';
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
                                <strong>Case Details, Q&A</strong>
                            </div>
                            <div class="card-body">
                              <div class="form-inline">
                                  <div class="col-md-12 form-group">
                                      <label class="col-sm-4 col-form-label">Date of Incident</label>
                                      <input required type="date" class="form-control col-sm-6" id="date">
                                  </div>
                              </div>
                              <br>
                              <div class="form-inline">
                                  <div class="col-md-12 form-group">
                                      <label class="col-sm-4 col-form-label">Case Number</label>
                                      <input required type="number" class="form-control col-sm-6" id="caseID" placeholder="Thread ID">
                                  </div>
                              </div>
                              <br>
                              <div class="form-inline">
                                  <div class="col-md-12 form-group">
                                      <label class="col-sm-4 col-form-label">Incident Location</label>
                                      <input required type="text" class="form-control col-sm-6" id="location">
                                  </div>
                              </div>
                              <br>
                              <div class="form-inline">
                                  <div class="col-md-12 form-group">
                                      <label class="col-sm-4 col-form-label">Brief Details</label>
                                      <textarea required class="form-control col-sm-6" id="briefDetails" placeholder="Write the incident details in short"></textarea>
                                  </div>
                              </div>
                              <hr>
                              <div class="form-inline">
                                <div class="col-md-12 form-group">
                                  <textarea class='form-control col-sm-5 center' name='question' placeholder='Question 1'></textarea>
                                  &nbsp;
                                  <textarea class='form-control col-sm-5 center' name='answer' placeholder='Answer 1'></textarea>
                                </div>
                              </div>
                              <div class="aye"></div>
                              <br />
                              <center>
                                <a class="add_more_button" style="color: green;">
                                  <i class="fas fa-plus-circle" style="font-size: 25px;"></i>
                                </a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="remove_field" style="font-size: 25px">
                                  <i class="fas fa-times" style="color:red;"></i>
                                </a>
                              </center>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                      <div class="card">
                          <div class="card-header">
                              <strong>Personnel Details</strong>
                          </div>
                          <div class="card-body">
                            <div class="form-inline">
                                <div class="col-md-12 form-group">
                                    <!-- <label class="col-sm-4 col-form-label">Employee Name</label> -->
                                    <input required type="text" class="form-control col-sm-5 center" id="employeeFirst" placeholder="Firstname">
                                    <input required type="text" class="form-control col-sm-5 center" id="employeeLast" placeholder="Lastname">
                                </div>
                            </div>
                            <br>
                            <div class="form-inline">
                                <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Badge Number</label>
                                    <input required type="number" class="form-control col-sm-6" id="employeeBadge">
                                </div>
                            </div>
                            <br>
                            <div class="form-inline">
                                <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Assignment</label>
                                    <input required type="text" class="form-control col-sm-6" id="employeeAssign">
                                </div>
                            </div>
                            <br>
                            <div class="form-inline">
                                <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Rank</label>
                                    <select class="form-control col-sm-6" required id="employeeRank" >
                                        <option value="" disabled selected>Select rank</option>
                                        <?php
                                        while ($row =mysqli_fetch_object($ranks)) {
                                            echo '<option value="'.$row->title.'">'.$row->title.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-inline">
                                <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Interviewee Role</label>
                                    <select class="form-control col-sm-6" required id="role" >
                                        <option value="" disabled selected>Select role</option>
                                        <option value="witness">Witness</option>
                                        <option value="complainant">Complainant</option>
                                        <option value="accused party">Accused Party</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-inline">
                                <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Your Full Name</label>
                                    <input required type="text" class="form-control col-sm-6 addNameHereAuto" id="fullName">
                                </div>
                            </div>
                            <br>
                            <div class="form-inline">
                                <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Your Rank</label>
                                    <select class="form-control col-sm-6" required id="fullRank" >
                                        <option value="" disabled selected>Select rank</option>
                                        <?php
                                        while ($row =mysqli_fetch_object($ranks2)) {
                                            echo '<option value="'.$row->title.'">'.$row->title.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-inline">
                                <div class="col-md-12 form-group">
                                    <label class="col-sm-4 col-form-label">Your Signature</label>
                                    <input required type="text" placeholder="Direct URL. Edit in settings." class="form-control col-sm-6 addSigHereAuto" id="fullSig">
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

            // Form additions
            let x = 1; //initialize counter for text box
            $(document).ready(function() {
              var max_fields_limit = 20; //set limit for maximum input fields
              var numItems = document.getElementsByClassName('questionsAndAnswers').length;

              $('.add_more_button').click(function(e) { //click event on add more fields button having class add_more_button
                e.preventDefault();
                if (x < max_fields_limit) { //check conditions
                  x++; //counter increment
                  $('.aye').append(
                    "<div class='questionsAndAnswers'><br /><div class='form-inline'> <div class='col-md-12 form-group'> <textarea class='form-control col-sm-5 center' name='question' placeholder='Question "+x+"'></textarea> &nbsp; <textarea class='form-control col-sm-5 center' name='answer' placeholder='Answer "+x+"'></textarea> </div></div>"
                  ); //add input field
                }
              });

              $('.remove_field').on('click', function(e) { //user click on remove text links
                e.preventDefault();
                $('.questionsAndAnswers:last').remove();
                x--;
                if(x < 1){x=1}
              })
            });


            $('.addNameHereAuto').val('<?php echo $_SESSION['user']->game_name; ?>');
            $('.addSigHereAuto').val('<?php echo $_SESSION['user']->signature; ?>');

                function process() {
                  let employeeFirst = document.getElementById("employeeFirst").value;
                  let employeeLast = document.getElementById("employeeLast").value;
                  let employeeAssign = document.getElementById("employeeAssign").value;
                  let employeeBadge = document.getElementById("employeeBadge").value;
                  let employeeRank = document.getElementById("employeeRank").value;
                  let caseID = document.getElementById("caseID").value;
                  let location = document.getElementById("location").value;
                  let date = document.getElementById("date").value;
                  let briefDetails = document.getElementById("briefDetails").value;
                  let role = document.getElementById("role").value;
                  let fullName = document.getElementById("fullName").value;
                  let fullRank = document.getElementById("fullRank").value;


                  let inputSignature = document.getElementById("fullSig").value;
                  let settingSignature = "<?php echo $_SESSION['user']->signature; ?>";
                  // alert(typeof settingSignature)
                  // name or signature as signature
                  var fullSig = "";
                  if (settingSignature == ""){
                     if(inputSignature == ""){
                     fullSig = "<?php echo $_SESSION['user']->game_name; ?>"+", "+ fullRank;
                   }
                  } else {
                    fullSig = "<?php echo $_SESSION['user']->game_name; ?>"+", "+ fullRank;
                  }

                  if(inputSignature){
                    fullSig = "[img]" + inputSignature + "[/img]";
                  }


                  var now = moment();

                  // date 1
                  var dateC = moment(date).format('DD-' + 'MMM' + '-YYYY').toUpperCase();

                  // date 2
                  let theDate = now.format('MMMM Do, YYYY');


                  var questionList = [];
                  var questions = document.getElementsByName("question");
                  for (var i = 0; i < questions.length; i++) {
                    questionList.push(questions[i].value);
                  }
                  // console.log(questionList);

                  var answerList = [];
                  var answers = document.getElementsByName("answer");
                  for (var i = 0; i < answers.length; i++) {
                    answerList.push(answers[i].value);
                  }
                  // console.log(answerList);

                  var finalText = "";
                  for (c = 0, i = 0; i < x; c++, i++) {
                    finalText += '[b]' + questionList[c] + '[/b]' + '\n' +'[list=none]' + answerList[i] + '[/list]' + '\n';
                  }



                  let format = `[font=Arial][color=black][altdivbox=white,0,25,0,0][center][img]https://i.imgur.com/0mAhHQJ.png[/img][/center]

[indent]`+theDate+`


`+employeeRank+` `+employeeFirst+` `+employeeLast+`, #`+employeeBadge+`
`+employeeAssign+`

Dear `+employeeRank+` `+employeeLast+`:

You are being contacted on behalf of the Internal Affairs Bureau with regard to an investigation under IAB File Number `+caseID+`. Your role as an interviewee is as the `+role+`. The incident in question took place on `+dateC+` and at `+location+`. `+briefDetails+`.

Please sign the attached form prior to answering the questions as listed. Fill in the answer fields.

`+finalText+`
[/indent][quote][justify]I wish to advise you that you are being questioned as part of an official investigation of the Los Santos County Sheriff's Department. You will be asked questions specifically directed and narrowly related to the performance of your official duties or fitness for office. You are entitled to all the rights and privileges guaranteed by the laws and the Constitution of this State and the Constitution of the United States, including the right to not be compelled to incriminate yourself.

I further wish to advise you that if you refuse to testify or to answer questions relating to the performance of your official duties or fitness for duty, you will be subject to Department discipline, which could result in your dismissal from the department.

If you do answer, neither your statements nor any information or evidence which is gained by means of each statements can be used against you in any subsequent criminal proceeding. However, these statements may be used against you in relation to subsequent Departmental charges.[/justify][/quote]
[indent][b]Signature of Employee Receiving Notice:[/b] `+employeeFirst+` `+employeeLast+`

Sincerely,

`+fullSig+`
Internal Affairs Bureau[/indent]

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
