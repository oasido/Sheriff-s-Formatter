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
            <strong>Multiple Choice Questions</strong>
          </div>
          <div class="card-body">
            <center>
              Part I<br /><br />
            </center>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">First</label>
                <select id="een" class="form-control col-sm-6">

                  <?php include 'epq.html'?>

                </select>
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Second</label>
                <select id="twee" class="form-control col-sm-6">

                  <?php include 'epq.html'?>

                </select>
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Third</label>
                <select id="drie" class="form-control col-sm-6">

                  <?php include 'epq.html'?>

                </select>
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Fourth</label>
                <select id="vier" class="form-control col-sm-6">

                  <?php include 'epq.html'?>

                </select>
              </div>
            </div>
            <br />
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Fifth</label>
                <select id="vijf" class="form-control col-sm-6">

                  <?php include 'epq.html'?>

                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header">
            <strong>Essay Questions</strong>
          </div>
          <div class="card-body">
            <center>
              Part II<br /><br />
            </center>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">First</label>
                <select id="first" class="form-control col-sm-6">

                  <?php include 'epqe.html'?>

                </select>
              </div>
            </div>
            <br>
            <div class="form-inline">
              <div class="col-md-12 form-group">
                <label class="col-sm-4 col-form-label">Second</label>
                <select id="second" class="form-control col-sm-6">

                  <?php include 'epqe.html'?>

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
          <button class="btn btn-success btn-lg" onClick="process();"><i class="fas fa-cog"></i> Generate Form</button>&nbsp;&nbsp;<button id="randomSelect" class="btn btn-dark btn-lg"><i class="fas fa-random"></i> Select Random</button><br /><br />
          <h5 class="font-weight-bold">Generated text:</h5>
          <textarea rows="5" class="form-control col-sm-6" id="finish"></textarea>
        </center>
      </div>
    </div>
  </div>
  <!--DIV OF PAGE-->
  <!-- aye-->
  <!-- JS Form Script-->
  <script type="text/javascript">

  //randomize & dupe-proof
  $(document).ready(function() {
    $("#randomSelect").click(function() {
      var select1 = document.getElementById('een');
      var items1 = select1.getElementsByTagName('option');
      var index1 = Math.floor(Math.random() * items1.length);
      select1.selectedIndex = index1;

      var select2 = document.getElementById('twee');
      var items2 = select2.getElementsByTagName('option');
      var index2 = Math.floor(Math.random() * items2.length);
      select2.selectedIndex = index2;

      var select3 = document.getElementById('drie');
      var items3 = select3.getElementsByTagName('option');
      var index3 = Math.floor(Math.random() * items3.length);
      select3.selectedIndex = index3;

      var select4 = document.getElementById('vier');
      var items4 = select4.getElementsByTagName('option');
      var index4 = Math.floor(Math.random() * items4.length);
      select4.selectedIndex = index4;

      var select5 = document.getElementById('vijf');
      var items5 = select5.getElementsByTagName('option');
      var index5 = Math.floor(Math.random() * items5.length);
      select5.selectedIndex = index5;

      var select6 = document.getElementById('first');
      var items6 = select6.getElementsByTagName('option');
      var index6 = Math.floor(Math.random() * items6.length);
      select6.selectedIndex = index6;

      var select7 = document.getElementById('second');
      var items7 = select7.getElementsByTagName('option');
      var index7 = Math.floor(Math.random() * items7.length);
      select7.selectedIndex = index7;

      for (var step = 0; step < 6; step++) {
        if(index1 === index2 || index1 === 0){
          index1 = Math.floor(Math.random() * items1.length);
          select1.selectedIndex = index1;
        }
        if(index1 === index3){
          index1 = Math.floor(Math.random() * items1.length);
          select1.selectedIndex = index1;
        }
        if (index1 === index4) {
          index1 = Math.floor(Math.random() * items1.length);
          select1.selectedIndex = index1;
        }
        if (index1 === index5) {
          index1 = Math.floor(Math.random() * items1.length);
          select1.selectedIndex = index1;
        }
        if (index2 === index3 || index2 === 0) {
          index2 = Math.floor(Math.random() * items2.length);
          select2.selectedIndex = index2;
        }
        if (index2 === index4) {
          index2 = Math.floor(Math.random() * items2.length);
          select2.selectedIndex = index2;
        }
        if (index2 === index5) {
          index2 = Math.floor(Math.random() * items2.length);
          select2.selectedIndex = index2;
        }
        if (index3 === index4 || index3 === 0) {
          index3 = Math.floor(Math.random() * items3.length);
          select3.selectedIndex = index3;
        }
        if (index3 === index5) {
          index3 = Math.floor(Math.random() * items3.length);
          select3.selectedIndex = index3;
        }
        if (index4 === index5 || index4 === 0) {
          index4 = Math.floor(Math.random() * items4.length);
          select4.selectedIndex = index4;
        }
        if(index5 == 0){
          index5 = Math.floor(Math.random() * items5.length);
          select5.selectedIndex = index5;
        }

        // for paragraphs
        if (index6 === index7) {
          index6 = Math.floor(Math.random() * items6.length);
          select6.selectedIndex = index6;
        }
        if(index6 == 0){
          index6 = Math.floor(Math.random() * items6.length);
          select6.selectedIndex = index6;
        }
        if(index7 == 0){
          index7 = Math.floor(Math.random() * items7.length);
          select7.selectedIndex = index7;
        }
      }

    });
  });

    function process() {
      var een = document.getElementById("een").value || "";
      var twee = document.getElementById("twee").value || "";
      var drie = document.getElementById("drie").value || "";
      var vier = document.getElementById("vier").value || "";
      var vijf = document.getElementById("vijf").value || "";
      var first = document.getElementById("first").value || "";
      var second = document.getElementById("second").value || "";

      // var name = "<?php echo $_SESSION['user']->game_name; ?>";
      var format = `[altdivbox=#FFFFFF, 20, 20, 20, 20]
[font=Arial][aligntable=right,0,0,0,0,0,transparent][size=85][b]PAGE 1[/b][/size][/aligntable][center][b][size=80]COUNTY OF LOS SANTOS SHERIFF'S DEPARTMENT[/size]
[size=87]TRAINING BUREAU[/b]
[i]"JUSTICE THROUGH KNOWLEDGE"[/i][/size][/center][/font]

[center][justify][size=76]THIS WRITTEN TEST IS CONDUCTED FOLLOWING SUCCESSFUL REVIEW OF A DEPUTY SHERIFF TRAINEE APPLICATION. THIS WRITTEN TEST WILL BE MARKED BY BACKGROUND INVESTIGATORS OF THE TRAINING BUREAU. PLAGIARISM IS STRICTLY FORBIDDEN.

CHOOSE ONLY ONE OF THE FOUR OPTIONS IN PART I BY MARKING THE CORRECT OPTION WITH AN 'X' IN THE GIVEN SPACE. ANSWER THE QUESTIONS IN PART II IN THE SPACE PROVIDED. ENSURE THAT YOU ANSWER THE QUESTIONS IN THEIR ENTIRETY AND MATCH THE WORD COUNT REQUIREMENTS. GRAMMAR, PUNCTUATION, AND THE ABILITY TO FORMULATE A RESPONSE ARE EVALUATED IN THIS TEST.[/size]

[size=87](( From the point in time where you receive this test, you will have forty-eight (48) hours to complete it and reply it in a private message to the ASD: TB Supervisory Staff usergroup, and not to the person who sent it to you.

Quote this private message to obtain the format and then delete the quote codes at the start and the end. The title of the reply should be set to "Written Test - Firstname Lastname". Plagiarism or receiving assistance from any third party will result in immediate disqualification and a hiring ban. ))[/size][/center][/justify]
[b]Full Name:[/b]
[list=none]
NAME
[/list]
[b]Signature:[/b]
[list=none]
SIGNATURE[/list]


[center][b][size=85]END OF PAGE[/size][/b][/center][/altdivbox]

[altdivbox=#FFFFFF, 20, 20, 20, 20]
[aligntable=right,0,0,0,0,0,transparent][size=85][b]PAGE 2[/b][/size][/aligntable][b][u][size=100]PART I — MULTIPLE CHOICE [/size][/u][/b]

[b]1. [/b]`+een+`

[b]2. [/b]`+twee+`

[b]3. [/b]`+drie+`

[b]4. [/b]`+vier+`

[b]5. [/b]`+vijf+`


[center][b][size=85]END OF PAGE[/size][/b][/center][/altdivbox]
[altdivbox=#FFFFFF, 20, 20, 20, 20]
[aligntable=right,0,0,0,0,0,transparent][size=85][b]PAGE 3[/b][/size][/aligntable][b][u][size=100]PART II — ESSAY RESPONSE[/size][/u][/b]

[b]1. `+first+`[/b] [0/3] (G) [0/3] (SP) [0/3] (A) (250 words)
[list=none]
ANSWER
[/list]

[b]2. `+second+`[/b] [0/3] (G) [0/3] (SP) [0/3] (A) (250 words)
[list=none]
ANSWER
[/list]


[center][b][size=85]END OF PAGE[/size][/b][/center][/altdivbox]`;

      document.getElementById("finish").value = format;
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
