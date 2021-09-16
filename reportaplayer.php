<?php
include('main.php');
include 'header.php';
?>
<script src="/js/rulesAddReport.js"></script>
<!-- SEPERATOR -->
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Reported Player, Offenses & Evidence</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Player You Are Reporting</label>
                                <input type="text" class="form-control col-sm-6" id="form_player"
                                    placeholder="Firstname Lastname" />
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Rule Broken</label>
                                <select data-live-search="true" onchange="rulesAdd()"
                                    class="ruleSelection form-control col-sm-6 selectpicker" multiple
                                    id="form_rulebroken" name="rulesBroken">
                                    <option>1. Common Courtesy</option>
                                    <option>2. Metagaming</option>
                                    <option>3. Powergaming</option>
                                    <option>4. Abuse of SA-MP Physics</option>
                                    <option>5. Third Party Modifications</option>
                                    <option>6. Deathmatching</option>
                                    <option>7. Safezones</option>
                                    <option>8. Disgusting Roleplay</option>
                                    <option>9. Robbing & Scamming</option>
                                    <option>10. Namechange Rules</option>
                                    <option>11. Prison Rules</option>
                                    <option>12. Destroying Property</option>
                                    <option>13. Legal Faction Rules</option>
                                    <option>14. Business Rules</option>
                                </select>
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Explanation</label>
                                <textarea class="form-control col-sm-6" id="form_info"
                                    placeholder="Explain how was this rule broken"></textarea><span>&nbsp;(<span
                                        id="display_count">0</span>/250 Words)</span>
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Evidence</label>
                                <textarea class="form-control col-sm-6" id="form_evidence" rows="3"
                                    placeholder="Screenshots, videos. Chat-logs and other witnesses must be backed up by solid proof, such as videos and screenshots.."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <strong>Witnesses & Time</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Other Witnesses Involved</label>
                                <input class="form-control col-sm-6" type="text" id="form_witness"
                                    placeholder="John Doe, Jane Doe.">
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Date</label>
                                <input class="form-control col-sm-6" type="date" id="form_date">
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Time</label>
                                <input class="form-control col-sm-6" type="time" id="form_time">
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
                    <button class="btn btn-success btn-lg" onClick="process()"><i class="fas fa-cog"></i> Generate
                        Form</button><br /><br />
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
        function process() {
            player = document.getElementById("form_player").value;
            date = document.getElementById("form_date").value;
            time = document.getElementById("form_time").value;
            ign = "<?php echo $_SESSION['user']->game_name; ?>";
            witness = document.getElementById("form_witness").value;
            info = document.getElementById("form_info").value;
            evidence = document.getElementById("form_evidence").value;
            format = "[b]Player you are reporting:[/b] " + player + "\n\
    [b]Date of incident:[/b] " + date + "\n\
    [b]Time of incident:[/b] " + time + "\n\
    [hr][/hr]\n\
    [b]Your Ingame name:[/b] " + ign + "\n\
    [b]Other witnesses involved:[/b] " + witness + "\n\
    [hr][/hr]\n\
    [b]Rule broken:[/b] " + finalRulesSelection + "\n\
    [b]How was this rule broken? (Max 250 words):[/b] " + info + "\n\
    [hr][/hr]\n\
    [b]Evidence to support your claim:[/b] " + evidence + "";
            document.getElementById("finish").value = format;
        }

        // wordcount
        $(document).ready(function () {
            $("#form_info").on('keyup', function () {
                var words = this.value.match(/\S+/g).length;
                //var words = info.length;
                if (words > 250) {
                    // Split the string on first 250 words and rejoin on spaces
                    var trimmed = $(this).val().split(/\s+/, 250).join(" ");
                    // Add a space at the end to keep new typing making new words
                    $(this).val(trimmed + " ");
                } else {
                    $('#display_count').text(words);
                    $('#word_left').text(250 - words);
                }
            });
        });
    </script>

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<script src="../js/bootstrap-select.js"></script>

</body>
<?php include 'footer.php' ?>

</html>