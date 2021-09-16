<?php
include('main.php');
include 'header.php';
$q = "SELECT COUNT(id) as total FROM sessions";
$res = mysqli_query($conn, $q);

$total_online = mysqli_fetch_object($res)->total;
?>

<div id="content-wrapper">

  <div class="indexContent">
    <div style="display: flex; justify-content: flex-end">
      <p class="text-center indexApprovedUsersText"><strong>
          Approved Users:
          <?php
          $q = "SELECT COUNT(id) as total_users FROM users WHERE confirmed='1'";
          $res = mysqli_query($conn, $q);
          $stats = array();
          $stats['total_users'] = mysqli_fetch_object($res)->total_users; ?>
          <?php echo $stats['total_users']; ?>
        </strong></p>
    </div>

    <!-- below activity log & changelog -->
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header"><strong>Announcements</strong></div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Here goes important stuff.</li>
          </ul>
        </div>
        <br />
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header"><strong>Latest Changes</strong><a href="/changelog.php" class="float-right">(Full Logs)</a></div>
          <ul class="list-group list-group-flush">
            <!-- <br> -->
            <?php $q = "SELECT * FROM logs ORDER BY id DESC LIMIT 6";
            $res = mysqli_query($conn, $q);
            while ($row = mysqli_fetch_object($res)) {
            ?>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $row->title; ?>
                <span class="badge badge-default badge-pill" style="background-color: #404142;color: white"><?php echo date('d/m/Y h:i A', strtotime($row->date)); ?></span>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>


      <div class="center">
        <?php
        $quoteList = array(
          "We had a headshot on you, tough guy. Stop!",
          "We're the only team in london with a european cup",
          "I go smoke -Mercer",
          "Fastly",
          "Sorry I don't speak pizza",
          "We're the only team in london with a european cup",
          "This is aerial support - we’re about to neutralize all visible threats.",
          "Dave, will you shut the hell up!",
          "This party is gonna be shot down!",
          "You! Stop, or we will kill you!",
          "Shoot that asshole!",
          "I'm trying, I'm trying!",
          "We’ve got a clear sighting on our suspect!",
          "Hey, I can see my house from here-",
          "Don’t make this a 998!",
          "Come on, do I look like gangster? I’m a businessman!",
          "Keep up, motherfucker!",
          "Oh, look a gun!",
          "I see her, she's beautiful!",
          "Make sure it's the right guy this time!",
          "We're the police, moron! We've got a helicopter!",
          // "I stepped on a Corn Flake, now I'm a Cereal Killer",
          "Are you retarded or just stupid",
          // "On a scale from one to ten what is your favourite colour of the alphabet?",
          "Banana error.",
          "My nose is a communist.",
          "I’m outta ideas!",
          "Look, a distraction!",
          "Yu r the wirst at speling.",
          "I mean, TREE!",
          "Hi, that duck over there!",
          "My cat ate my homework.",
          "UwU",
          "Weebs out",
          "Weswie",
          "When life gives you lemons, chuck them at people you hate.",
          "Screw world peace, I want a pony!",
          "I’m bored.",
          "Catch us on the next biweekly update",
          "OH YEEEEEAAAAHHHHHH!!!!!",
          "Eat my sister.",
          "Hi Poldi",
          "Andre Mitchell",
          "Samuel Underwood is coming for you",
          "A hotdog on a bridge",
          "Michael Houston was here",
          "Aye aye, aye?",
          "[A MEME]",
          // "Generating terrain...",
          // "Pressing random buttons..",
          "I'm pickle Rick",
          // "Procedurally generating buttons...",
          "The Funnies",
          // "Reticulating splines...",
          // "Generating witty dialog...",
          // "Swapping time and space...",
          // "Spinning violently around the y-axis...",
          // "Tokenizing real life...",
          // "Bending the spoon...",
          // "Filtering morale...",
          "Don't think of purple hippos...",
          "We need a new fuse...",
          "Have a good day.",
          // "Upgrading Windows, your PC will restart several times. Sit back and relax.",
          "640K ought to be enough for anybody",
          "The architects are still drafting",
          "The bits are breeding",
          // "We're building the buildings as fast as we can",
          "Would you prefer chicken, steak, or tofu?",
          "(Pay no attention to the man behind the curtain)",
          "...and enjoy the elevator music...",
          "Please wait while the little elves draw your map",
          "Don't worry - a few bits tried to escape, but we caught them",
          "Would you like fries with that?",
          // "Checking the gravitational constant in your locale...",
          "Go ahead -- hold your breath!",
          "...at least you're not on hold...",
          "Hum something loud while others stare",
          "You're not in Kansas any more",
          "The server is powered by a lemon and two electrodes.",
          "Please wait while a larger software vendor in Seattle takes over the world",
          // "We're testing your patience",
          "As if you had any other choice",
          "Follow the white rabbit",
          "Why don't you order a sandwich?",
          "While the satellite moves into position",
          "The bits are flowing slowly today",
          "Dig on the 'X' for buried treasure... ARRR!",
          "It's still faster than you could draw it",
          "The last time I tried this the monkey didn't survive. Let's hope it works better this time.",
          "I should have had a V8 this morning.",
          "Reconfoobling energymotron...",
          "(Insert quarter)",
          "Are we there yet?",
          "Have you lost weight?",
          "Just count to 10",
          "Why so serious?",
          "It's not you. It's me.",
          "Count backwards from Infinity",
          "Don't panic...",
          "Embiggening Prototypes",
          "Do not run! We are your friends!",
          "Do you come here often?",
          "Warning: Don't set yourself on fire.",
          "We're making you a cookie.",
          "Creating time-loop inversion field",
          "Spinning the wheel of fortune...",
          "Loading the enchanted bunny...",
          "Computing chance of success",
          "I'm sorry Dave, I can't do that.",
          "Looking for exact change",
          "All your web browser are belong to us",
          "All I really need is a kilobit.",
          "What do you call 8 Hobbits? A Hobbyte.",
          "Should have used a compiled language...",
          "Is this Windows?",
          "Adjusting flux capacitor...",
          "Please wait until the sloth starts moving.",
          "Don't break your screen yet!",
          "I swear it's almost done.",
          "Let's take a mindfulness minute...",
          "Unicorns are at the end of this road, I promise.",
          "We are not liable for any broken screens as a result of waiting.",
          "We need more dilithium crystals",
          "Where did all the internets go",
          "Granting wishes...",
          "Time flies when you’re having fun.",
          "Get some coffee and come back in ten minutes..",
          "Spinning the hamster…",
          "99 bottles of beer on the wall..",
          "Stay awhile and listen..",
          "Be careful not to step in the git-gui",
          "You shall not pass!",
          "Load it and they will come",
          "There is no spoon. Because we are not done loading it",
          "Your left thumb points to the right and your right thumb points to the left.",
          "How did you get here?",
          "Wait, do you smell something burning?",
          "Computing the secret to life, the universe, and everything.",
          "When nothing is going right, go left!!...",
          "I love my job only when I'm on vacation...",
          "I'm not lazy, I'm just relaxed!!",
          "Never steal. The government hates competition....",
          "Why are they called apartments if they are all stuck together?",
          "Life is Short – Talk Fast!!!!",
          "Optimism – is a lack of information.....",
          "Save water and shower together",
          "Whenever I find the key to success, someone changes the lock.",
          "Sometimes I think war is God’s way of teaching us geography.",
          "I’ve got problem for your solution…..",
          "Where there’s a will, there’s a relative.",
          "Adults are just kids with money.",
          "I think I am, therefore, I am. I think.",
          "A kiss is like a fight, with mouths.",
          "You don’t pay taxes—they take taxes.",
          "Coffee, chocolate, men. The richer the better!",
          "I am free of all prejudices. I hate everyone equally.",
          "git happens",
          "May the forks be with you",
          "A commit a day keeps the mobs away",
          "This is not a joke, it's a commit.",
          // "Constructing additional pylons...",
          // "Roping some seaturtles...",
          "Nice to meet you, Jebediah Kerman",
          "We are not liable for any broken screens as a result of waiting.",
          "Hello IT, have you tried turning it off and on again?",
          "If you type Google into Google you can break the internet",
          "Well, this is embarrassing.",
          "What is the airspeed velocity of an unladen swallow?",
          "Hello, IT... Have you tried forcing an unexpected reboot?",
          "They just toss us away like yesterday's jam.",
          "They're fairly regular, the beatings, yes. I'd say we're on a bi-weekly beating.",
          "The Elders of the Internet would never stand for it.",
          "Space is invisible mind dust, and stars are but wishes.",
          "Didn't know paint dried so quickly.",
          "Everything sounds the same",
          "I'm going to walk the dog",
          "Divide by zero.",
          "You're a mallrat",
          "If I’m not back in five minutes, just wait longer.",
          "We’re going to need a bigger boat.",
          "Chuck Norris never git push. The repo pulls before.",
          "Web developers do it with <style>",
          "I need to git pull --my-life-together",
          "Java developers never RIP. They just get Garbage Collected.",
          // "Cracking military-grade encryption...",
          // "Simulating traveling salesman...",
          // "Trying to sort in O(n)...",
          "I should really get a massage!",
          "Winter is coming...",
          "Distracted by cat gifs",
          "@todo Insert anime images",
          "Aw, snap! Not..",
          "Whatever you do, don't look behind you...",
          "It is dark. You're likely to be eaten by a grue.",
          "It's 10:00pm. Do you know where your children are?",
          "Feel free to spin in your chair",
          "What the what?",
          "What's under there?",
          "Help, I'm trapped!",
          "What is the difference btwn a hippo and a zippo? One is really heavy, the other is a little lighter",
          "You should download more RAM..",
          "Man this Windows Vista is the greatest!",
          "Deleting System32 folder",
          "Hiding all ;'s in your code",
          "Alt-F4 speeds things up.",
          "Initializing the initializer...",
          "When was the last time you dusted around here?",
          "Last call for the data bus! All aboard!",
          "When nothing is going right, go left!",
          "Never let a computer know you're in a hurry.",
          "A computer will do what you tell it to do, but that may be much different from what you had in mind.",
          "Some things man was never meant to know. For everything else, there's Google.",
          "Unix is user-friendly. It's just very selective about who its friends are.",
          "Shovelling coal into the server",
          "How about this weather, eh?",
          "Build a wall",
          "Everything in this universe is either a potato or not a potato",
          "The severity of your issue is always lower than you expected.",
          "Digested cookies being baked again.",
          "Live long and prosper.",
          "There is no cow level, but there's a goat one!",
          "Definitely not a virus",
          "You may call me Steve.",
          "All you had to do is to commit the damn funnies, CJ!",
          "You seem like a nice person...",
          "Coffee at my place, tommorow at 10A.M. - don't be late!",
          "Work, work...",
          "This is difficult, you know...",
          "Time flies like an arrow; fruit flies like a banana",
          "Sooooo... Have you seen my vacation photos yet?",
          "TODO: Insert elevator music",
          "Still faster than Windows update",
          "Composer hack: Waiting for reqs to be fetched is less frustrating if you add -vvv to your command.",
          "Obfuscating quantum entaglement",
          "Knock, Knock! Who’s there? Ken Ken who? Ken I come in? It's cold out here.",
          "If at first you don't succeed, call it version 1.0.",
          "I love pressing F5. It's so refreshing.",
          "CAPS LOCK – Preventing Login Since 1980.",
          "Chuck Norris doesn't scroll with a mouse. He uses a lion.",
          "Chuck Norris can delete the Recycling Bin.",
          "With just two toothpicks, a lightbulb, and his RoundHouse Kick, Chuck Norris can override the Pentagon's computer system.",
          "Chuck Norris didn't survive the first night in Minecraft, the first night survived Chuck Norris.",
          "Chuck Norris could play cd-based games on his Nintendo 64.",
          "Why did the computer get cold? Because it forgot to close Windows.",
          "Chuck Norris's keyboard doesn't have a Ctrl key because nothing controls Chuck Norris.",
          "Locating Jebediah Kerman...",
        );
        ?>
        <!-- <center>
           <img style="position:relative;top:55px;" src="https://www.google.com/images/icons/hpcg/candle-white_42.png" alt="candle">
         </center> -->
        <center style="position:relative;top:-20px;">
          <blockquote class="blockquote">
            <p class="mb-0 indexCenterText"><?php echo $quoteList[mt_rand(0, count($quoteList) - 1)]; ?></p>
          </blockquote>
        </center>
        <div class="col-lg-12 card" style="display: inline-block;padding: 0px;">
          <?php
          $q = "SELECT COUNT(*) as onlines FROM sessions ";
          $resw = mysqli_query($conn, $q);
          ?>
          <div class="card-header"><strong>Users Online (<?php echo mysqli_fetch_object($resw)->onlines; ?>)</strong></div>
          <div class="col-md-12" style="padding: 15px;">
            <?php
            $q = "SELECT * FROM sessions JOIN users ON users.id=sessions.user_id JOIN ranks ON users.rank=ranks.id";
            $res = mysqli_query($conn, $q);
            $users = array();
            while ($row = mysqli_fetch_object($res)) {
              $users[] = '<a href="/profile.php?id=' . $row->user_id . '"><b style="color: ' . $row->color . ';">' . $row->user_name . '</b></a>';
            }
            echo implode(', ', $users);
            ?>
          </div>
          <div class="col-md-12" style="margin-top: 20px; padding: 15px;">
            <u>Legend:</u>
            <p><em><a href="https://sd.lsgov.io/forum/memberlist.php?mode=group&g=36" target="_blank" style="color: #084f0a;">LSSD Field Staff</a>, <a href="https://sd.lsgov.io/forum/memberlist.php?mode=group&g=96" target="_blank" style="color: #a60000;">LSSD Supervisory Staff</a>, <a href="https://sd.lsgov.io/forum/memberlist.php?mode=group&g=35" target="_blank" style="color: #1c6295;">LSSD Command Staff</a>, <a href="https://sd.lsgov.io/forum/memberlist.php?mode=group&g=37" target="_blank" style="color: #0000ca;">LSSD Executive Staff</a></em></p>
            <?php
            #    $q = "SELECT * FROM ranks ORDER BY id ASC";
            #    $res = mysqli_query($conn, $q);
            #    $users = array();
            #    while($row=mysqli_fetch_object($res)){
            #        $users[] = '<b style="color: '.$row->color.';">'.$row->title.'</b>';
            #    }
            #    echo implode(', ', $users);
            #
            ?>
          </div>
        </div>
        <!-- <center>
          Happy birthday, <a style="color: #084f0a;" href="link" target="_blank"><strong>firstname lastname (oocname)</strong></a>!
          <br />
          <a href="/birthday">Click here!</a>
        </center> -->
      </div>
    </div>
    <!-- /#wrapper -->
  </div>
</div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>

<!-- Cookies stuff -->
<!-- <script type="text/javascript" id="cookieinfo"
	src="//cookieinfoscript.com/js/cookieinfo.min.js"
  data-moreinfo="https://i.imgur.com/PKRc2W7.png"
  data-divlink="#fff"
  data-divlinkbg="#111"
  data-close-text="<strong>Got it, aye.</strong>"
  data-font-family="Trebuchet MS">
</script> -->


</body>
<?php include 'footer.php' ?>

</html>