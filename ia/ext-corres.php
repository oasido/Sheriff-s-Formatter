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
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>General Information</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <select class="form-control col-sm-2" id="title">
                                    <option value="" selected disabled>Select title</option>
                                    <option>Mr</option>
                                    <option>Ms</option>
                                    <option>Mrs</option>
                                    <!-- <option>Dr.</option>
                                          <option>Prof.</option> -->
                                </select>
                                <input required type="text" class="form-control col-sm-4 center" id="First" placeholder="Firstname">
                                <input required type="text" class="form-control col-sm-4 center" id="Last" placeholder="Lastname">
                            </div>
                        </div>
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Street & House No.</label>
                                <input required type="text" class="form-control col-sm-6" id="street1" placeholder="0000 Martin Luther King Street">
                            </div>
                        </div>
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">City & State</label>
                                <input required type="text" class="form-control col-sm-6" id="street2" placeholder="Los Santos, San Andreas">
                            </div>
                        </div>
                        <br>
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
                                <select class="form-control col-sm-6" required id="fullRank">
                                    <option value="" disabled selected>Select rank</option>
                                    <?php
                                    while ($row = mysqli_fetch_object($ranks2)) {
                                        echo '<option value="' . $row->title . '">' . $row->title . '</option>';
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
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <strong>Correspondence</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <!-- <label class="col-sm-4 col-form-label">Correspondence</label> -->
                                <textarea required class="form-control col-sm-12" rows="6" id="corres"></textarea>
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
        $('.addNameHereAuto').val('<?php echo $_SESSION['user']->game_name; ?>');
        $('.addSigHereAuto').val('<?php echo $_SESSION['user']->signature; ?>');

        function process() {
            let first = document.getElementById("First").value;
            let last = document.getElementById("Last").value;
            let title = document.getElementById("title").value;
            let street1 = document.getElementById("street1").value;
            let street2 = document.getElementById("street2").value;
            let corres = document.getElementById("corres").value;
            let fullName = document.getElementById("fullName").value;
            let fullRank = document.getElementById("fullRank").value;

            let inputSignature = document.getElementById("fullSig").value;
            let settingSignature = "<?php echo $_SESSION['user']->signature; ?>";
            // alert(typeof settingSignature)
            // name or signature as signature
            var fullSig = "";
            if (settingSignature == "") {
                if (inputSignature == "") {
                    fullSig = "<?php echo $_SESSION['user']->game_name; ?>" + ", " + fullRank;
                }
            } else {
                fullSig = "<?php echo $_SESSION['user']->game_name; ?>" + ", " + fullRank;
            }

            if (inputSignature) {
                fullSig = "[img]" + inputSignature + "[/img]";
            }

            var now = moment();
            let date = now.format('MMMM Do, YYYY');
            let format = `[font=Arial][color=black][altdivbox=white,0,25,0,0][center][img]https://i.imgur.com/0mAhHQJ.png[/img][/center]

[indent]` + date + `


` + title + ` ` + first + ` ` + last + `
` + street1 + `
` + street2 + `

Dear ` + title + ` ` + last + `:

` + corres + `

Sincerely,

` + fullSig + `
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