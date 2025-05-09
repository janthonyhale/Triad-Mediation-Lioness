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
}

disabled-button {
    background-color: #ccc !important;
    color: #666 !important;
    position: relative;
    cursor: not-allowed;
}
disabled-button .overlay-text {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    transform: translate(-50%, -50%);
    text-align: center;
    font-size: 0.9em;
    color: #333;
    background: rgba(255, 255, 255, 0.8);
    padding: 4px;
    pointer-events: none;
}</style><title>Finish code</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};var maxFalse = null;
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        var sessionIndexJavascript = "<?php echo $_SESSION[sessionID];?>";
        pageRefreshed=0;
        var loopBegin = "stage" + loopStart + ".php";
        var afterLoopEnd = 438340;
        if (thisPage == firstStageExp || (thisPage==loopBegin && period > 1) || loopEnd==afterLoopEnd) firstStage();
        /* if (thisPage == firstStageExp || thisPage==loopBegin || loopEnd==afterLoopEnd) firstStage(); */
        TimeOut=null;
        function skipStage(proceedifpossible) {
         if (proceedifpossible === undefined) proceedifpossible = false;
         if (proceedifpossible) location.replace('stage438342.php?session_index=<?php echo $_SESSION[sessionID];?>');
         else location.replace('wait438341.php?session_index=<?php echo $_SESSION[sessionID];?>');
        }
        $(document).ready(function(){
        if (bot) { document.getElementsByClassName("buttonclick")[0].click(); }
        });
        
        </script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div class="row"><!-- START Element 1 Type: 19-->
        
        
        <script>const finishcode = getValue('decisions','playerNr='+playerNr+' and period=1','final_result');</script><!-- END Element 1 Type: 19-->
        
        <!-- START Element 2 Type: 1-->
        
        <div class="col-sm-12" id="wrap2" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><p>Please copy the following completion code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit<br></p><p><b>Completion Code: <span id="copyText"><script>document.write(finishcode)</script>D-<script>document.write(randomid)</script></span></b></p>
    <button type="button" id="copyButton">Click to Copy</button>

    <script>
        // Function to copy text from the button
        function copyToClipboard() {
            var copyText = document.getElementById("copyText");
            var textArea = document.createElement("textarea");

            textArea.value = copyText.textContent;
            document.body.appendChild(textArea);
            textArea.value = textArea.value.replace("document.write(finishcode)", "").replace("document.write(randomid)", "")
textArea.select();
            document.execCommand("copy");
            document.body.removeChild(textArea);

            alert("Code has been copied to the clipboard: " + textArea.value);
        }

        // Add a click event listener to the button
        document.getElementById("copyButton").addEventListener("click", copyToClipboard);
    </script>
<p><br></p><p>Once you have entered the code, you may safely close this tab.</p><p>
</p><p>
</p><p>
</p><p>
</p><p>
</p><p></p></div>
        </div><script>if((true)) { $('#wrap2').show(); } </script><!-- END Element 2 Type: 1-->
        
        </div><script>setInterval(function(){ if (true) $('#wrap2').show();if (!(true)) $('#wrap2').hide(); }, 100);</script></form></div></div></body></html>