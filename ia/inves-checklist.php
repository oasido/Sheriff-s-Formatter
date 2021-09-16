<?php
include('../main.php');
include '../header.php';
?>

<!-- SEPERATOR -->
<div id="content-wrapper">
  <div class="container-fluid">
  <div class="container" style="max-width: 50rem;">
      <div class="">
        <!-- col grid test 15/5/2019 -->
        <div class="card">
          <div class="card-header">
            <strong>Investigation Checklist</strong>
          </div>
          <div class="card-body">
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class='col-sm-3 col-form-label'>Task 1</label>
                &nbsp;
                <textarea class='form-control col-sm-3' rows="1" name='taskComment' placeholder='Comment'></textarea>
                &nbsp;
                <select class='form-control col-sm-3' name='taskCheck'>
                  <option value="[todo][/todo]">Not Completed</option>
                  <option value="[todo_done][/todo_done]">Completed</option>
                </select>
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
  <!-- aye-->

  <!-- JS Form Script-->
  <script type="text/javascript">

    // Form additions
    let x = 1; //initialize counter for text box
    $(document).ready(function() {
      var max_fields_limit = 20; //set limit for maximum input fields
      var taskNumber = 0;
      var numItems = document.getElementsByClassName('tasks').length;

      $('.add_more_button').click(function(e) { //click event on add more fields button having class add_more_button
        e.preventDefault();
        if (x < max_fields_limit) { //check conditions
          x++; //counter increment
          $('.aye').append(
            "<div class='tasks'><br><div class='form-inline'><div class='col-md-12 form-group'><label class='col-sm-3 col-form-label'>Task "+x+"</label> &nbsp; <textarea class='form-control col-sm-3' rows='1' name='taskComment' placeholder='Comment'></textarea> &nbsp; <select class='form-control col-sm-3' name='taskCheck'> <option value='[todo][/todo]'>Not Completed</option> <option value='[todo_done][/todo_done]'>Completed</option></select></div></div></div>"
          ); //add input field
        }
      });

      $('.remove_field').on('click', function(e) { //user click on remove text links
        e.preventDefault();
        $('.tasks:last').remove();
        x--;
        if(x < 1){x=1}
      })
    });

    $(document).ready(function(){
      $(".add_more_button").click();
    });
    $(document).ready(function(){
      $(".add_more_button").click();
    });

    function process() {
      // final text


      var taskCommentList = [];
      var taskComment = document.getElementsByName("taskComment");
      for (var i = 0; i < taskComment.length; i++) {
        taskCommentList.push(taskComment[i].value);
      }

      var taskCheckList = [];
      var taskCheck = document.getElementsByName("taskCheck");
      for (var i = 0; i < taskCheck.length; i++) {
        taskCheckList.push(taskCheck[i].value);
      }

      var finalText = "";
      var taskCounter = 1;
      for (c = 0, i = 0, j = 0; i < x; c++, i++, j++) {
        finalText += '[tr][td][size=80][center]Task ' + taskCounter + '[/center][/size][/td][td][size=80]' + taskCommentList[i] + '[/td][td][center]' + '\n' + taskCheckList[j] + '[/center][/td][/tr]';
        taskCounter++;
      }
      // end of final text

      var format =
        `[aligntable=left,0,0,0,0,0,0,][table]
        [tr]
        [td][size=80][b][center][font=arial]INVESTIGATION TASKS[/center][/b][/size][/td]
        [td][size=80][b][center]TASK COMMENTS[/center][/b][/size][/td]
        [td][center][size=80][b]CHECK[/b][/size][/center][/td]
        [/tr]
        `+finalText+`
        [/table][/aligntable]`;

      document.getElementById("finish").value = format;
    }
  </script>
</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->



<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin.min.js"></script>

</body>
<?php include '../footer.php' ?>
</html>
