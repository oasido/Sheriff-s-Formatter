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
            <strong>Interviewee Info & Time</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Interviewee Full Name</label>
                <input required="required" class="form-control col-sm-6" type="text" id="trainee" placeholder="Firstname Lastname">
              </div>
            </div>
            <br/>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Date of Interview</label>
                <input required="required" class="form-control col-sm-6" type="date" id="date">
              </div>
            </div>
          </div>
        </div>
        <br />
        <div class="card">
          <div class="card-header">
            <strong>Questions & Answers (( Transcript of the Game Interview ))</strong>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-sm btn-dark float-right" data-toggle="modal" data-target="#exampleModalCenter">
              Example Questions
            </button>
            <br><br>
            <!-- // ayedditional // -->
            <form action="index.html" method="post">
              <div class="input_fields_container_part">
                <!-- container to dupe -->
                <!-- <br /> -->
                <div class="form-inline">

                  <div class="col-md-12 form-group">
                    <label class="col-sm-4 col-form-label">1.</label>
                    <input name="moreQuestions" type="text" value="" class="form-control col-sm-6"/>
                  </div>
                </div>
                <div class="aye"></div>
              </div>
              <br/>
              <center>
                <a class="add_more_button" style="color: green;">
                  <i class="fas fa-plus-circle" style="font-size: 25px;"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="remove_field" style="font-size: 25px">
                  <i class="fas fa-times" style="color:red;"></i>
                </a>
              </center>
            </form>
            <!-- // ayedditional // -->
            <hr>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Transcript&nbsp;-&nbsp;<a href="https://ls-rp.io/parser/" target="_blank">
                    click here!</a>
                </label>
                <textarea required="required" id="transcript" class="form-control col-sm-6" rows="5"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            <strong>Results</strong>
          </div>
          <div class="card-body">
            <center>
              (( Game Interview ))<br /><br />
            </center>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">English Proficiency</label>
                <input required="required" class="form-control col-sm-6" type="text" id="english" placeholder="">
              </div>
            </div>
            <br/>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">(( Role-play ability ))</label>
                <input required="required" class="form-control col-sm-6" type="text" id="roleplay">
              </div>
            </div>
            <br/>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Additional Notes</label>
                <textarea required="required" class="form-control col-sm-6" id="additional" placeholder="Mandatory"></textarea>
              </div>
            </div>
            <br/>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Recommendation</label>
                <select required="required" id="recommendation" class="selectpicker form-control col-sm-6" multiple="multiple" data-max-options="1">
                  <option data-icon="fas fa-check" value="PASS" style="background: #5cb85c;">PASS</option>
                  <option data-icon="fas fa-times" value="FAIL" style="background: #c23838; color: white;">FAIL</option>
                </select>
              </div>
            </div>
            <hr />
            <center>
              (( TS Interview ))<br /><br />
            </center>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">English Proficiency</label>
                <input required="required" class="form-control col-sm-6" type="text" id="english2" placeholder="">
              </div>
            </div>
            <br/>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Microphone Quality</label>
                <input required="required" class="form-control col-sm-6" type="text" id="microphone">
              </div>
            </div>
            <br/>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Recording URL</label>
                <input required="required" class="form-control col-sm-6" type="url" id="recordingURL">
              </div>
            </div>
            <br/>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Recommendation</label>
                <select required="required" id="recommendation2" class="selectpicker form-control col-sm-6" multiple="multiple" data-max-options="1">
                  <option data-icon="fas fa-check" value="PASS" style="background: #5cb85c;">PASS</option>
                  <option data-icon="fas fa-times" value="FAIL" style="background: #c23838; color: white;">FAIL</option>
                </select>
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Additional Notes</label>
                <textarea required="required" class="form-control col-sm-6" id="additional2" placeholder="Optional"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br/>
    <div class="highlight-clean">
      <div class="container">
        <center>
          <button class="btn btn-success btn-lg" onclick="process();" type="submit" name="button">
            <i class="fas fa-cog"></i>
            Generate Form</button><br/><br/>
          <h5 class="font-weight-bold">Generated text:</h5>
          <textarea rows="5" class="form-control col-sm-6" id="finish"></textarea>
        </center>
      </div>
    </div>
  </div>
</form>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Example Questions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ol>
          <li>Have you ever been in a situation which you require assistance from any law enforcement agency?</li>
          <li>What are your strengths and weaknesses?</li>
          <li>What would you say is the overall purpose of the job?</li>
          <li>What is your biggest realization in life?</li>
          <li>What makes you the best candidate for our department?</li>
          <li>Where do you see yourself in five years from now?</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Dismiss</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  // Form additions
  let x = 1; //initialize counter for text box
  $(document).ready(function () {
    var max_fields_limit = 20; //set limit for maximum input fields
    var questionNumber = 0;

    $('.add_more_button').click(function (e) { //click event on add more fields button having class add_more_button
      e.preventDefault();
      if (x < max_fields_limit) { //check conditions
        x++; //counter increment
        $('.aye').append(
          "<div class='ayedditional'><br /><div class='form-inline'><div class='col-md-12 form-group'><label class='col-sm-4 col-form-label'>" + x +
          ".</label><input name='moreQuestions' type='text' value='' class='form-control col-sm-6'/></div></div></div>"
        ); //add input field
      }
    });

    $('.remove_field').on('click', function (e) { //user click on remove text links
      e.preventDefault();
      $('.ayedditional:last').remove();
      x--;
      if(x<1){x=1};
    })
  });

  // add 5 form fields automatically
  $(document).ready(function () {
    $('.add_more_button').trigger('click');
    $('.add_more_button').trigger('click');
    $('.add_more_button').trigger('click');
    $('.add_more_button').trigger('click');
  })

  function process() {
    var trainee = document.getElementById("trainee").value;
    // date & cool[date] transforms the HTML date into DD/MMM/YYYY.
    var date = document.getElementById("date").value;
    var coolMonth = moment(date).format("MMM").toUpperCase();
    var coolDay = moment(date).format("DD");
    var coolYear = moment(date).format("YYYY");
    var coolDate = coolDay + "/" + coolMonth + "/" + coolYear;

    // var one = document.getElementById("1").value;  var two = document.getElementById("2").value;  var three = document.getElementById("3").value;  var four = double_cal(document.getElementById("4").value);  var five =
    // document.getElementById("5").value; for (i = 0; i < x; i++) {   let questions = document.querySelectorAll('[name=]');   javascriptArray.push("[*]" + questions[i] + "\n")   }

    var values = [];
    $("input[name='moreQuestions']").each(function () {
      values.push(("[*]") + $(this).val());
    });

    var transcript = document.getElementById("transcript").value;
    var english = document.getElementById("english").value;
    var english2 = document.getElementById("english2").value;
    var roleplay = document.getElementById("roleplay").value;
    var additional = document.getElementById("additional").value;
    var additional2 = document.getElementById("additional2").value;
    var microphone = document.getElementById("microphone").value;
    var recordingURL = document.getElementById("recordingURL").value;
    var recommendation = document.getElementById("recommendation").value;
    var recommendation2 = document.getElementById("recommendation2").value;
    var name = "<?php echo $_SESSION['user']->game_name; ?>";
    var format = "[font=Arial][center][b][size=80]TRAINING BUREAU[/b][/size]\n\
[size=87]INTERVIEW ASSESSMENT SCRIPT[/size][/center]\n\
\n\
[b]Person Information[/b]\n\
[indent]Name of interviewer: " + name + "\n\
Name of interviewee: " + trainee + "\n\
Date of interview: " + coolDate + "[/indent]\n\
[b]Questions[/b]\n\
[list=1]\n\
" + values.join("") + "\n\
[/list]\n\
[b]Interview Results[/b]\n\
[indent]English proficiency: " + english + "\n\
[b](([/b] Role-play ability: " + roleplay + "[b]))[/b]\n\
Additional" +
        " notes: " + additional + "\n\
Recommendation: " + recommendation + "[/indent]\n\
[b]Interview Transcript[/b]\n\
\n\
[altspoiler=Attached transcript]\n\
" + transcript + "\n\
[/altspoiler]\n\
\n\
[font=Arial][center][size=87][b](([/b] TEAMSPEAK ASSESSMENT [b]))[/b][/size][/center]\n\
\n\
[b]Interview Results[/b]\n\
[indent]English proficiency: "+english2+"\n\
Microphone quality: "+microphone+"\n\
Recording: [url="+recordingURL+"]ACCESS[/url]\n\
Recommendation: "+recommendation2+"\n\
Notes: "+additional2+"\n\
[/indent]";

    document.getElementById("finish").value = format;
    javascriptArray = [];
  }
</script>
</div>
<!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="../js/sb-admin.min.js"></script>
<script src="../js/bootstrap-select.js"></script>
</body>
<?php include '../footer.php' ?>
</html>
