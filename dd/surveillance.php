<?php
include('../main.php');
include '../header.php';
?>

<!-- SEPERATOR -->
<div id="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header">
            <strong>General Information</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Unit Handling</label>
                <select class="form-control col-sm-6" id="unitHanding">
                  <option value="" disabled selected>Please select...</option>
                  <option value="HOMICIDE">Homicide</option>
                  <option value="METRO">Metro</option>
                  <option value="TRAP">TRAP</option>
                </select>
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Narrative</label>
                <textarea class="form-control col-sm-6" rows="4" id="narrative" placeholder=""></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header">
            <strong>Evidence Attachments</strong>
          </div>
          <div class="card-body">
            <form action="index.html" method="post">
              <p class="text-muted">Paste URLs/text freely, BBCODE URL tags wrap automatically when necessary.</p>
              <div class="input_fields_container_part">
                <!-- container to dupe -->
                <div class="form-inline">
                  <div class="col-md-12 form-group">
                    <label class="col-sm-4 col-form-label">1.</label>
                    <input name="evidenceAttachments" type="text" value="" placeholder="**Insert attachment here**" class="form-control col-sm-6" />
                  </div>
                </div>
                <div class="aye"></div>
              </div>
              <br />
              <center>
                <a class="add_more_button" style="color: green;">
                  <i class="fas fa-plus-circle" style="font-size: 25px;"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="remove_field" style="font-size: 25px">
                  <i class="fas fa-times" style="color:red;"></i>
                </a>
              </center>
            </form>
          </div>
        </div>
        <br>
      </div>
    </div>
    <br>
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
  <!--DIV OF PAGE-->
  <!-- JS Form Script-->
  <script type="text/javascript">
    // evidence add/remove
    let x = 1; //initialize counter for text box
    $(document).ready(function() {
      var max_fields_limit = 7; //set limit for maximum input fields

      $('.add_more_button').click(function(e) { //click event on add more fields button having class add_more_button
        e.preventDefault();
        if (x < max_fields_limit) { //check conditions
          x++; //counter increment
          $('.aye').append(
            "<div class='ayedditional'><br /><div class='form-inline'><div class='col-md-12 form-group'><label class='col-sm-4 col-form-label'>" + x +
            ".</label><input name='evidenceAttachments' type='text' value='' class='form-control col-sm-6'/></div></div></div>"
          ); //add input field
        }
      });

      $('.remove_field').on('click', function(e) { //user click on remove text links
        e.preventDefault();
        $('.ayedditional:last').remove();
        x--;
        if (x < 1) {
          x = 1
        };
      })
    });




    function process() {
      var deputyName = "<?php echo $_SESSION['user']->game_name; ?>";
      var nameArray = deputyName.split(' ');
      nameArray.reverse();
      var rotatedName = nameArray.join(' ');

      var deputyBadge = "<?php echo $_SESSION['user']->badge_no; ?>"
      var narrative = document.getElementById("narrative").value;
      var unitHanding = document.getElementById("unitHanding").value;
      var theDate = moment(theDate).format('MMMM ' + 'Do, ' + 'YYYY');


      // for the evidence
      var values = [];

      $("input[name='evidenceAttachments']").each(function() {
        values.push($(this).val());
      });

      // urlRegex
      var urlRegex = /(http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;

      for (var i = 0, j = 1; i < values.length; i++, j++) {
        if (!urlRegex.test(values[i])) {
          values[i] = "[b]ATTACHMENT (" + [j] + ")[/b] — " + values[i] + "\n";
        } else {
          values[i] = "[b]ATTACHMENT (" + [j] + ")[/b] — [url=" + values[i] + "]LINK[/url]\n"
        }
      }

      var format = `[divbox=white][font=Arial][b][center][size=90]Los Santos County Sheriff's Department[/size]
[size=110]SURVEILLANCE REPORT[/size][/center][/b]
[size=85][b]DATE OF REPORT[/b][/size] ` + theDate + `
[size=85][b]UNIT HANDLING[/b][/size] ` + unitHanding + `

[size=85][b]LAST NAME, #[/b][/size] ` + rotatedName + `, ` + deputyBadge + `

[b]NARRATIVE[/b]
[indent]`+narrative+`[/indent]
[b]EVIDENCE[/b]: 
[INDENT]` + values.join("") + `[/INDENT][/divbox]`;

      document.getElementById("finish").value = format;
    }
  </script>
</div>
</div>
<!-- /#wrapper -->
<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="../js/sb-admin.min.js"></script>

</body>
<?php include '../footer.php' ?>

</html>