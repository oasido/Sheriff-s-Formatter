<?php
include('../main.php');
include '../header.php';
?>

<!-- SEPERATOR -->
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Report Information</strong>
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
                        <br>
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Location</label>
                                <input type="text" class="form-control col-sm-6" id="form_location" />
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
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Report Of</label>
                                <textarea class="form-control col-sm-6" id="reportOf" placeholder="PC XX.XX — X"></textarea>
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Narrative</label>
                                <textarea class="form-control col-sm-6" rows="4" id="narrative" placeholder=""></textarea>
                            </div>
                        </div>
                        <br />
                        <div class="form-inline">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-4 col-form-label">Additional</label>
                                <textarea class="form-control col-sm-6" id="additional" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
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
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Victim(s) Information</strong>
                    </div>
                    <div class="card-body">
                        <div>
                            <table class="table" id="victim">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Sex</th>
                                        <th>Race</th>
                                        <th>Desc</th>
                                        <th>Address</th>
                                        <th>Known Info</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <center><button class="btn btn-outline-primary" onclick="addVictim()">Add Victim</button></center>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <strong>Involved Persons</strong>
                    </div>
                    <div class="card-body">
                        <div>
                            <table class="table" id="persons">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Full Name</th>
                                        <th>Sex</th>
                                        <th>Race</th>
                                        <th>Phone</th>
                                        <th>Known Info</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <center><button class="btn btn-outline-primary" onclick="addPeopleRow()">Add Person</button></center>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <strong>Suspects Involved</strong>
                    </div>
                    <div class="card-body">
                        <div>
                            <table class="table" id="suspects">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Sex</th>
                                        <th>Race</th>
                                        <th>Desc</th>
                                        <th>Known Info</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <center><button class="btn btn-outline-primary" onclick="addSuspect()">Add Suspect</button></center>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <div class="highlight-clean">
            <div class="container">

                <center>
                    <br />
                    <div style="text-align: left;" class="col-sm-6 alert alert-warning" role="alert"> <strong>UNIQUE REGISTRATION NUMBER (URN) — </strong>Uh uh! Not so fast, your form is not ready!
                        <br />Make sure you edit the generated form and replace the <a href="https://i.imgur.com/4hG7Erh.png" target="_blank">last digits on your reply's address</a> with the REPORT #XXXXXX (ID).
                    </div>
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
        // add to tables
        $(document).ready(function() {
            addVictim();
            addPeopleRow();
            addSuspect();
        });


        function addPeopleRow() {
            var empTab = document.getElementById('persons');
            var rowCnt = empTab.rows.length; // GET TABLE ROW COUNT.
            var tr = empTab.insertRow(rowCnt); // TABLE ROW.
            tr = empTab.insertRow(rowCnt);

            for (var c = 0; c < 7; c++) {
                var td = document.createElement('td'); // TABLE DEFINITION.
                td = tr.insertCell(c);
                switch (c) {
                    case 0: {
                        var none = document.createElement("option");
                        none.setAttribute("value", "");
                        none.setAttribute("selected", "");
                        none.text = "";

                        var selector = document.createElement("select");
                        var witness = document.createElement("option");
                        witness.setAttribute("value", "Witness");
                        witness.text = "Witness";
                        var reporter = document.createElement("option");
                        reporter.setAttribute("value", "Person Reporting");
                        reporter.text = "Person Reporting";

                        selector.setAttribute("class", "form-control");
                        selector.add(none);
                        selector.add(reporter);
                        selector.add(witness);

                        td.appendChild(selector);
                        break;
                    }



                    case 1: {

                        var name = document.createElement("input");
                        name.setAttribute("class", "form-control");
                        name.setAttribute("type", "text");

                        td.appendChild(name);
                        break;
                    }
                    case 2: {
                        var selector = document.createElement("select");
                        var none = document.createElement("option");
                        none.setAttribute("value", "");
                        // none.setAttribute("disabled", "");
                        none.setAttribute("selected", "");
                        none.text = "";

                        var male = document.createElement("option");
                        male.setAttribute("value", "M");
                        male.text = "Male";
                        var female = document.createElement("option");
                        female.setAttribute("value", "F");
                        female.text = "Female";

                        selector.setAttribute("class", "form-control");
                        selector.add(none);
                        selector.add(male);
                        selector.add(female);

                        td.appendChild(selector);
                        break;
                    }

                    case 3: {
                        var race = document.createElement("input");
                        race.setAttribute("class", "form-control");

                        td.appendChild(race);
                        break;
                    }

                    case 4: {
                        var phone = document.createElement("input");
                        phone.setAttribute("class", "form-control");
                        phone.setAttribute("type", "number");
                        td.appendChild(phone);
                        break;
                    }

                    case 5: {
                        var knowninfo = document.createElement("textarea");
                        knowninfo.setAttribute("class", "form-control");

                        td.appendChild(knowninfo);
                        break;
                    }

                    case 6: {
                        var button = document.createElement("input");
                        button.setAttribute('type', 'button');
                        button.setAttribute('value', 'X');
                        button.setAttribute("class", "btn btn-danger btn-sm");

                        // ADD THE BUTTON's 'onclick' EVENT.
                        button.setAttribute('onclick', 'removePeopleRow(this)');
                        td.appendChild(button);
                        break;
                    }
                }
            }
        }

        function removePeopleRow(oButton) {
            var empTab = document.getElementById('persons');
            empTab.deleteRow(oButton.parentNode.parentNode.rowIndex); // BUTTON -> TD -> TR.
        }


        function addVictim() {
            var empTab2 = document.getElementById('victim');
            var rowCnt2 = empTab2.rows.length;

            // GET TABLE ROW COUNT.
            var tr2 = empTab2.insertRow(rowCnt2); // TABLE ROW.
            tr2 = empTab2.insertRow(rowCnt2);

            for (var c = 0; c < 7; c++) {
                var td2 = document.createElement('td'); // TABLE DEFINITION.
                td2 = tr2.insertCell(c);
                switch (c) {
                    case 0: {
                        // Add the full name
                        var name = document.createElement("input");
                        name.setAttribute("class", "form-control");
                        td2.appendChild(name);
                        break;
                    }

                    case 1: {
                        var selector = document.createElement("select");
                        var none = document.createElement("option");
                        none.setAttribute("value", "");
                        // none.setAttribute("disabled", "");
                        none.setAttribute("selected", "");
                        none.text = "";

                        var male = document.createElement("option");
                        male.setAttribute("value", "M");
                        male.text = "Male";
                        var female = document.createElement("option");
                        female.setAttribute("value", "F");
                        female.text = "Female";

                        selector.setAttribute("class", "form-control");
                        selector.add(none);
                        selector.add(male);
                        selector.add(female);

                        td2.appendChild(selector);
                        break;
                    }
                    case 2: {
                        var race = document.createElement("input");
                        race.setAttribute("class", "form-control");
                        race.setAttribute("type", "text");

                        td2.appendChild(race);
                        break;
                    }
                    case 3: {
                        var desc = document.createElement("textarea");
                        desc.setAttribute("class", "form-control");

                        td2.appendChild(desc);
                        break;
                    }
                    case 4: {
                        var victimAddress = document.createElement("input");
                        victimAddress.setAttribute("class", "form-control");

                        td2.appendChild(victimAddress);
                        break;
                    }
                    case 5: {
                        var info = document.createElement("textarea");
                        info.setAttribute("class", "form-control");

                        td2.appendChild(info);
                        break;
                    }

                    case 6: {
                        var button = document.createElement("input");
                        button.setAttribute('type', 'button');
                        button.setAttribute('value', 'X');
                        button.setAttribute("class", "btn btn-danger btn-sm");

                        // ADD THE BUTTON's 'onclick' EVENT.
                        button.setAttribute('onclick', 'removeVictim(this)');
                        td2.appendChild(button);
                        break;
                    }
                }
            }
        }

        function removeVictim(oButton) {
            var empTab2 = document.getElementById('victim');
            empTab2.deleteRow(oButton.parentNode.parentNode.rowIndex); // BUTTON -> TD -> TR.
        }

        function addSuspect() {
            var empTab3 = document.getElementById('suspects');
            var rowCnt3 = empTab3.rows.length; // GET TABLE ROW COUNT.
            var tr3 = empTab3.insertRow(rowCnt3); // TABLE ROW.
            tr3 = empTab3.insertRow(rowCnt3);

            for (var c = 0; c < 6; c++) {
                var td3 = document.createElement('td'); // TABLE DEFINITION.
                td3 = tr3.insertCell(c);
                switch (c) {
                    case 0: {
                        // Add the full name
                        var name = document.createElement("input");
                        name.setAttribute("class", "form-control");
                        td3.appendChild(name);
                        break;
                    }

                    case 1: {
                        var selector = document.createElement("select");
                        var none = document.createElement("option");
                        none.setAttribute("value", "");
                        // none.setAttribute("disabled", "");
                        none.setAttribute("selected", "");
                        none.text = "";

                        var male = document.createElement("option");
                        male.setAttribute("value", "M");
                        male.text = "Male";
                        var female = document.createElement("option");
                        female.setAttribute("value", "F");
                        female.text = "Female";

                        selector.setAttribute("class", "form-control");
                        selector.add(none);
                        selector.add(male);
                        selector.add(female);

                        td3.appendChild(selector);
                        break;
                    }
                    case 2: {
                        var race = document.createElement("input");
                        race.setAttribute("class", "form-control");
                        race.setAttribute("type", "text");

                        td3.appendChild(race);
                        break;
                    }
                    case 3: {
                        var desc = document.createElement("textarea");
                        desc.setAttribute("class", "form-control");

                        td3.appendChild(desc);
                        break;
                    }
                    case 4: {
                        var info = document.createElement("textarea");
                        info.setAttribute("class", "form-control");
                        info.setAttribute("placeholder", "Armed, etc.");

                        td3.appendChild(info);
                        break;
                    }

                    case 5: {
                        var button = document.createElement("input");
                        button.setAttribute('type', 'button');
                        button.setAttribute('value', 'X');
                        button.setAttribute("class", "btn btn-danger btn-sm");

                        // ADD THE BUTTON's 'onclick' EVENT.
                        button.setAttribute('onclick', 'removeSuspect(this)');
                        td3.appendChild(button);
                        break;
                    }
                }
            }
        }

        function removeSuspect(oButton) {
            var empTab3 = document.getElementById('suspects');
            empTab3.deleteRow(oButton.parentNode.parentNode.rowIndex); // BUTTON -> td3 -> TR.
        }


        // evidence add/remove
        let x = 1; //initialize counter for text box
        $(document).ready(function() {
            var max_fields_limit = 7; //set limit for maximum input fields
            // var questionNumber = 0;

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
            <?php
            $qqr = "SELECT * FROM ranks WHERE id='" . $_SESSION['user']->rank . "'";
            $rest = mysqli_query($conn, $qqr);
            $rowt = mysqli_fetch_object($rest);
            ?>
            var deputyName = "<?php echo $_SESSION['user']->game_name; ?>"
            var deputyBadge = "<?php echo $_SESSION['user']->badge_no; ?>"
            var rank = "<?php echo $rowt->title; ?>"
            var reportOf = document.getElementById("reportOf").value;
            var location = document.getElementById("form_location").value;
            var theDate = moment(theDate).format('MMMM ' + 'Do, ' + 'YYYY');
            var date = document.getElementById("date").value;
            var goodLookingDate = moment(date).format('MMMM ' + 'Do, ' + 'YYYY');

            var additional = document.getElementById("additional").value;
            if (additional == "") {
                additional = "N/A";
            }


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

            var narrative = document.getElementById("narrative").value;
            var unitHanding = document.getElementById("unitHanding").value;

            var peopleInvolved = "";
            var myTab = document.getElementById('persons');
            for (row = 1; row < myTab.rows.length - 1; row++) {
                for (c = 0; c < myTab.rows[row].cells.length - 1; c++) { // EACH CELL IN A ROW.
                    switch (c) {
                        case 0: {
                            var element = myTab.rows.item(row).cells[c];
                            peopleInvolved += "[TR][TD][FONT=arial][COLOR=black]TYPE[/COLOR][/FONT][/TD]";
                            peopleInvolved += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            break;
                        }
                        case 1: {
                            // Get the witness name;
                            var element = myTab.rows.item(row).cells[c];
                            peopleInvolved += "[TR][TD][FONT=arial][COLOR=black]NAME[/COLOR][/FONT][/TD]";
                            peopleInvolved += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            break;
                        }
                        case 2: {
                            var element = myTab.rows.item(row).cells[c];
                            peopleInvolved += "[TR][TD][FONT=arial][COLOR=black]SEX[/COLOR][/FONT][/TD]";
                            peopleInvolved += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            break;
                        }
                        case 3: {
                            var element = myTab.rows.item(row).cells[c];
                            peopleInvolved += "[TR][TD][FONT=arial][COLOR=black]RACE[/COLOR][/FONT][/TD]";
                            peopleInvolved += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            break;
                        }

                        case 4: {
                            var element = myTab.rows.item(row).cells[c];
                            peopleInvolved += "[TR][TD][FONT=arial][COLOR=black]PHONE NUMBER[/COLOR][/FONT][/TD]";
                            peopleInvolved += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            break;
                        }
                        case 5: {
                            var element = myTab.rows.item(row).cells[c];
                            peopleInvolved += "[TR][TD][FONT=arial][COLOR=black]TYPE[/COLOR][/FONT][/TD]";
                            peopleInvolved += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            peopleInvolved += "[tr][td][/td][td][/td][/tr]";
                            break;
                        }
                    }
                }
            }


            var victim = "";
            var myTab2 = document.getElementById('victim');
            for (row = 1; row < myTab2.rows.length - 1; row++) {
                for (c = 0; c < myTab2.rows[row].cells.length - 1; c++) { // EACH CELL IN A ROW.
                    switch (c) {
                        case 0: {
                            var element = myTab2.rows.item(row).cells[c];
                            victim += "[TR][TD][FONT=arial][COLOR=black]NAME[/COLOR][/FONT][/TD]";
                            victim += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            break;
                        }

                        case 1: {
                            var element = myTab2.rows.item(row).cells[c];
                            victim += "[TR][TD][FONT=arial][COLOR=black]SEX[/COLOR][/FONT][/TD]";
                            victim += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            break;
                        }

                        case 2: {
                            var element = myTab2.rows.item(row).cells[c];
                            victim += "[TR][TD][FONT=arial][COLOR=black]RACE[/COLOR][/FONT][/TD]";
                            victim += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            break;
                        }

                        case 3: {
                            var element = myTab2.rows.item(row).cells[c];
                            victim += "[TR][TD][FONT=arial][COLOR=black]DESC[/COLOR][/FONT][/TD]";
                            victim += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            break;
                        }

                        case 4: {
                            var element = myTab2.rows.item(row).cells[c];
                            victim += "[TR][TD][FONT=arial][COLOR=black]HOME ADDRESS[/COLOR][/FONT][/TD]";
                            victim += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            break;
                        }

                        case 5: {
                            var element = myTab2.rows.item(row).cells[c];
                            victim += "[TR][TD][FONT=arial][COLOR=black]KNOWN INFO[/COLOR][/FONT][/TD]";
                            victim += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            victim += "[tr][td][/td][td][/td][/tr]";
                            break;
                        }
                    }
                }
            }


            var suspects = "";
            var myTab3 = document.getElementById('suspects');
            for (row = 1; row < myTab3.rows.length - 1; row++) {
                for (c = 0; c < myTab3.rows[row].cells.length - 1; c++) { // EACH CELL IN A ROW.
                    switch (c) {
                        case 0: {
                            var element = myTab3.rows.item(row).cells[c];
                            suspects += "[TR][TD][FONT=arial][COLOR=black]NAME[/COLOR][/FONT][/TD]";
                            suspects += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            var suspectName = element.childNodes[0].value.split(' ').join('_');
                            break;
                        }

                        case 1: {
                            var element = myTab3.rows.item(row).cells[c];
                            suspects += "[TR][TD][FONT=arial][COLOR=black]SEX[/COLOR][/FONT][/TD]";
                            suspects += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            break;
                        }

                        case 2: {
                            var element = myTab3.rows.item(row).cells[c];
                            suspects += "[TR][TD][FONT=arial][COLOR=black]RACE[/COLOR][/FONT][/TD]";
                            suspects += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            break;
                        }

                        case 3: {
                            var element = myTab3.rows.item(row).cells[c];
                            suspects += "[TR][TD][FONT=arial][COLOR=black]DESC[/COLOR][/FONT][/TD]";
                            suspects += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            suspects += "[TR][TD][FONT=arial][COLOR=black]SALES DMV[/COLOR][/FONT][/TD]";
                            suspects += "[TD][FONT=arial][COLOR=black][url=https://ls-rp.com/?page=lspd&select=dmv&p=" + suspectName + "]LINK[/url][/COLOR][/FONT][/TD][/TR]";
                            suspects += "[TR][TD][FONT=arial][COLOR=black]SALES RECORDS[/COLOR][/FONT][/TD]";
                            suspects += "[TD][FONT=arial][COLOR=black][url=https://ls-rp.com/?page=lspd&select=records&p=" + suspectName + "]LINK[/url][/COLOR][/FONT][/TD][/TR]";
                            break;
                        }

                        case 4: {
                            var element = myTab3.rows.item(row).cells[c];
                            suspects += "[TR][TD][FONT=arial][COLOR=black]KNOWN INFO[/COLOR][/FONT][/TD]";
                            suspects += "[TD][FONT=arial][COLOR=black]" + element.childNodes[0].value + "[/COLOR][/FONT][/TD][/TR]";
                            suspects += "[tr][td][/td][td][/td][/tr]";
                        }
                    }
                }
            }

            var format = ` [divbox=white][hr][/hr][center][size=85][color=black][FONT=Arial Narrow][B]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT • CONFIDENTIAL • LOS SANTOS COUNTY SHERIFF'S DEPARTMENT[/B][/FONT][/color][/size][/center][hr][/hr]

[aligntable=right,90,0,70,0,0,0]

[img]https://www.upload.ee/image/11131768/Homicide_logo_1.png[/img]
[/aligntable]
[aligntable=center,0,165,0,0,0,0]



[center]
[font=Arial][b]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT[/b]
HOMICIDE BUREAU
[size=87]REPORT #XXXXXX[/size][/font][/center][/aligntable]
[break][/break]
[HR][/HR]
[CENTER][b][color=#000000]FOR YOUR EYES ONLY — INVESTIGATIVE REPORT — FOR YOUR EYES ONLY[/color][/b][/CENTER]
[TABLE="class: cms_table, width: 700, align: left"]
[TR="bgcolor: #7086ff"]
[TD][COLOR=black][FONT=arial][B]1. REPORT INFORMATION[/B][/FONT][/COLOR][/TD]
[TD][COLOR=black][FONT=arial]
[/FONT][/COLOR][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]DATE OF REPORT[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]` + theDate + `[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]UNIT HANDLING[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]` + unitHanding + `[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]CASE DETECTIVE[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]` + deputyName + `, ` + deputyBadge + `[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]REPORT OF[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]` + reportOf + `[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]LOCATION[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]` + location + `[/COLOR][/FONT][/TD]
[/TR]
[TR]
[TD][FONT=arial][COLOR=black]DATE & TIME[/COLOR][/FONT][/TD]
[TD][FONT=arial][COLOR=black]` + goodLookingDate + `[/COLOR][/FONT][/TD]
[/TR]
[/TABLE]
[color=transparent]##[/color]
[TABLE='class: cms_table, width: 700, align: left'][TR='bgcolor: #7086ff'][TD][COLOR=black][FONT=arial][B]2. VICTIM(S) INFORMATION[/B][/FONT][/COLOR][/TD][TD][COLOR=black][FONT=arial][/FONT][/COLOR][/TD][/TR]
` + victim + `
[/TABLE]
[color=transparent]##[/color]
[TABLE='class: cms_table, width: 700, align: left'][TR='bgcolor: #7086ff'][TD][COLOR=black][FONT=arial][B]3. SUSPECT(S) INFORMATION[/B][/FONT][/COLOR][/TD][TD][COLOR=black][FONT=arial][/FONT][/COLOR][/TD][/TR]
` + suspects + `
[/TABLE]
[color=transparent]##[/color]
[TABLE='class: cms_table, width: 700, align: left'][TR='bgcolor: #7086ff'][TD][COLOR=black][FONT=arial][B]4. INVOLVED PERSONS[/B][/FONT][/COLOR][/TD][TD][COLOR=black][FONT=arial][/FONT][/COLOR][/TD][/TR]
` + peopleInvolved + `
[/TABLE]
[color=transparent]##[/color]
[b]NARRATIVE[/b]: 
[INDENT]` + narrative + `[/INDENT]
[COLOR=TRANSPARENT].[/COLOR]
[b]EVIDENCE[/b]: [color=white]([i]REMOVE/ADD [.URL] CODE WHEN APPLICABLE[/i])[/color] 
[INDENT]` + values.join("") + `[/INDENT]
[COLOR=TRANSPARENT].[/COLOR]
[b]ADDITIONAL INFO.[/b]: 
[INDENT]` + additional + `[/INDENT]
[COLOR=TRANSPARENT]LSSD[/COLOR]

[hr][/hr][center][size=85][color=black][FONT=Arial Narrow][B]LOS SANTOS COUNTY SHERIFF'S DEPARTMENT • MARKED CONFIDENTIAL • LOS SANTOS COUNTY SHERIFF'S DEPARTMENT[/B][/FONT][/color][/size][/center][hr][/hr]
[/divbox]


`;

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