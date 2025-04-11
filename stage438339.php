<html>
        <head>
        
        <?php
    
        include("_projectID.php");
        include(PATH."basis/participant/header.php");
	    $_SESSION['projectID']=PROJECTID;
	    
	    ?>

        <link href="<?php echo PATH;?>basis/css/newlayout.css?v1" rel="stylesheet" type="text/css"  />
        <link href="<?php echo PATH;?>basis/css/newlayout_bootstrap.css" rel="stylesheet" type="text/css"  />
        <link href="<?php echo PATH;?>basis/css/grid.css" rel="stylesheet" type="text/css"  /><style>table, th, td {
  border: 0.5px solid;
  border-collapse: collapse;
  padding: 5px;
  align-self: center;
}</style><title>Please wait...</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        if (thisPage == firstStageExp) firstStage();

        
        lobbyCheck('stage438340.php?session_index=<?php echo $_SESSION[sessionID];?>', 'wait438339.php?session_index=<?php echo $_SESSION[sessionID];?>');</script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div class="row"><!-- START Element 1 Type: 19-->
        
        
        <script>document.addEventListener("DOMContentLoaded", function () {
    // Create a new countdown timer
    const newCountdownSpan = document.createElement("span");
    newCountdownSpan.id = "countdown_timer";
    newCountdownSpan.textContent = "08:00";

    // Apply CSS styles to make it bold
    newCountdownSpan.style.fontWeight = "bold";

    // Append the new countdown span to the same parent as the old timer
    const oldCountdownSpan = document.getElementById("countdown_timer");
    oldCountdownSpan.parentNode.appendChild(newCountdownSpan);

    // Hide the old timer
    oldCountdownSpan.style.display = "none";

    // Rest of your countdown logic here
    let remainingTime = 480; // 8 minutes in seconds

    const interval = setInterval(function () {
        remainingTime--;

        if (remainingTime <= 0) {
            // Timer has reached zero, you can handle this as needed.
            clearInterval(interval);
        } else {
            // Calculate minutes and seconds
            const minutes = Math.floor(remainingTime / 60);
            const seconds = remainingTime % 60;

            // Update the new countdown span
            newCountdownSpan.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        }
    }, 1000); // Update every second
});</script><!-- END Element 1 Type: 19-->
        
        <!-- START Element 2 Type: 1-->
        
        <div class="col-sm-12" id="wrap2" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center">Please keep this tab open or you may not be connected.</div>
        </div><script>if((true)) { $('#wrap2').show(); } </script><!-- END Element 2 Type: 1-->
        
        </div>
        
        <div class="row" id="waitingForContainer"><div id="waitingFor" style="text-align: center;"> </div></div>

            <script>
                var timeStamp = <?php echo json_encode(time()); ?>;
                setValue("core","playerNr="+playerNr,"onPage", "lobby");
                setValue("core","playerNr="+playerNr,"enterLobby", timeStamp);
                /* check if we are in the lobby */
                setValue("core","playerNr="+playerNr,"lobbyReady", 1);
                var lobbyTimeout=420;
                /* if the player has clicked wait for two more minutes, set the timer to 120 seconds (not robust to hard refresh) */
                if (getValue('core', 'playerNr='+playerNr, 'waitMore')==1) lobbyTimeout=120;

                /* add the timer with the landing page when the timer reaches 0 */
                countdownTimer(lobbyTimeout, 'wait438339.php?session_index=<?php echo $_SESSION[sessionID];?>', true);

                /* show on how many other participants we are currently waiting */
                lobbyInfo();
                setInterval(function() {lobbyInfo();},3000);

            </script> </form></div></body></html>