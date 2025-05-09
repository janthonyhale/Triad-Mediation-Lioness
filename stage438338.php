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
}</style><title>Landing</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};var maxFalse = null;
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        var sessionIndexJavascript = "<?php echo $_SESSION[sessionID];?>";
        pageRefreshed=0;
        var loopBegin = "stage" + loopStart + ".php";
        var afterLoopEnd = null;
        if (thisPage == firstStageExp || (thisPage==loopBegin && period > 1) || loopEnd==afterLoopEnd) firstStage();
        /* if (thisPage == firstStageExp || thisPage==loopBegin || loopEnd==afterLoopEnd) firstStage(); */
        TimeOut=null;
        function skipStage(proceedifpossible) {
         if (proceedifpossible === undefined) proceedifpossible = false;
         if (proceedifpossible) location.replace('stage438339.php?session_index=<?php echo $_SESSION[sessionID];?>');
         else location.replace('wait438338.php?session_index=<?php echo $_SESSION[sessionID];?>');
        }
        $(document).ready(function(){
        if (bot) { document.getElementsByClassName("buttonclick")[0].click(); }
        });
        
        </script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div class="row"><!-- START Element 1 Type: 19-->
        
        
        <script>try {
    valu = getValue('session','playerNr='+playerNr,'externalID').split("-")[0];
// const valu = getValue('session','playerNr='+playerNr,'externalID');
} catch(err) {
    valu = getValue('session','playerNr='+playerNr,'externalID');
}
setRole(valu);</script><!-- END Element 1 Type: 19-->
        
        <!-- START Element 2 Type: 1-->
        
        <div class="col-sm-12" id="wrap2" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><b>INSTRUCTIONS TO NEGOTIATE</b> (Click “Continue” at bottom of instructions when ready to begin)<br><br><div>On the next page, you will be matched with someone playing the other role in this dispute. This may take a few minutes. A sound will play when you are matched. Please ensure your volume is up.</div><div><br></div><div>You will use the interface below.&nbsp; On the left is a chat window where you can send messages to the other side. You must take turns and can only send a message when it is your turn.&nbsp; You and your partner must exchange at least 8 messages. (Please respond quickly as your partner is waiting for you!)<br>If you reach a tentative deal to resolve the dispute, use the menu on the right to clarify the terms of the agreement.&nbsp; If you can’t reach a deal, you can walk away from the negotiation by pressing “Walk Away”.<br></div><br>
<img src="https://i.imgur.com/248hS3V.png"></div>
        </div><script>if((true)) { $('#wrap2').show(); } </script><!-- END Element 2 Type: 1-->
        
        <!-- START Element 3 Type: 19-->
        
        
        <script>console.log(valu);

if (valu === '3') {
  // Update the image source
  const img = document.querySelector('img[src*="imgur.com"]');
  if (img) {
    img.src = 'https://i.imgur.com/IEx3F6y.png';
  }

  // Replace instruction heading and text
  const instructionHeader = Array.from(document.querySelectorAll('b'))
    .find(el => el.textContent.includes('INSTRUCTIONS TO NEGOTIATE'));

  if (instructionHeader) {
    // Replace the heading
    instructionHeader.textContent = 'INSTRUCTIONS TO MEDIATE';

    // Remove the next few <div> siblings (which contain old text)
    let next = instructionHeader.nextSibling;
    let count = 0;
    while (next && count < 5) {
      const toRemove = next;
      next = next.nextSibling;
      if (toRemove.nodeType === 1 && toRemove.tagName === 'DIV') {
        toRemove.remove();
        count++;
      }
    }

    // Insert the new text block
    instructionHeader.insertAdjacentHTML('afterend', `
      <br><br>
      <div>On the next page, you will observe a negotiation between two parties in a dispute. This may take a few minutes. A sound will play when the session begins. Please ensure your volume is up.</div>
      <div><br></div>
      <div>You will use the interface below. There is a chat window where you can read the messages exchanged between the parties. You cannot type messages yourself unless you decide to intervene -- you may do this by clicking the red "Intervene" button, which will queue you up to send a message after the current turn ends. .<br>
      If the conversation becomes unproductive, you can press the “Intervene” button to step in. You will then be allowed to send a message offering guidance or encouraging resolution.</div><br>
    `);
  }
}</script><!-- END Element 3 Type: 19-->
        
        <!-- START Element 4 Type: 18-->
        
        <div class="col-sm-12" id="wrap4" style="display: none;">
        <script>
       
        
        </script>
        
        <script>
                
                timer(
                    3000, 
                    function(timeleft) { 
                        if (!!document.getElementById('secondcounter')) document.getElementById('secondcounter').innerHTML=timeleft;
                    },
                    function() { 
                       $('#button4').show();
                       $('#buttonhider').hide();
                       
                    }
                ); 
            </script>
            <div id="buttonhider"></div><div style="display: none;" id="button4">
        <div id="buttonclick4" class="lionessbutton btn btn-default btn-lg btn-block btn-danger" style=" white-space:normal !important; word-wrap: break-word;" onclick="
        $(this).hide(); $('#buttonload4').show();
        if (additionalCheck4()) {
            hideError4();
            if (checkEntries()) toNextPage4();
            else  { $(this).show(); 
            $('#buttonload4').hide(); }
        } else {
         $(this).show(); 
         $('#buttonload4').hide();
         }
        ">Continue</div><div id="buttonload4" style="width: 100%; text-align: center; display: none;"><img src="<?php echo PATH;?>basis/pic/buttonload.gif"></div><div id="field4_error" class="alert alert-danger" style="display: none; text-align: center;"></div><div id="field4_attempts" class="alert alert-warning" style="display: none; text-align: center;"><span class="attempts_text">Attempts left to answer the control questions</span>:&nbsp;<span id="field4_attempts_num"></span></div></div><script>if(maxFalse!=null) {
            var numFails=quizFail(playerNr,1);  
            $('#field4_attempts').show();
            $('#field4_attempts_num').html(maxFalse-numFails);
           
        }
        function showError4(text) {
            var errorfield= $('#field4_error');
            errorfield.show();
            errorfield.html(text);
        
        }
        
        function hideError4() {
            $('#field4_error').hide();
        }
       
        
        

        if (typeof window.showNext === 'undefined') {
            window.showNext = function(url, nextstage, stageNr) {
                var timeRecName = "time_" + stageNr;
                var timeOnThisPage = getServerTime() - tStart;
                setValue(timeRecName, timeOnThisPage);
                location.replace(url); 
            }
        }


        

        var checker;
        
        function checkEntries() {
           checker=0;

            var numEntries = document.forms[0].length;
            var numValuesExpected=0;

            for (var i=0; i<numEntries; i++)
            {
                var name = "checkValue_" + document.forms[0][i].id;
                if (document.forms[0][i].id!="")
                {                   
                    fn = window[name]; /* this is a generic function calling the checker for the variable "name"  */
                    fnExists = typeof fn === "function";
                    if (fnExists) {
                        fn();
                        ++numValuesExpected;
                    }
                 };

            }
           if (checker==numValuesExpected) return true;
           else {
                checkFail();
                return false;
            }
        }
        
        function additionalCheck4() {

           return true;
        }

       



        function checkFail() {} function toNextPage4() {
            if (loopEnd==438338) { showNext('wait438338.php?session_index=<?php echo $_SESSION[sessionID];?>',438339,438338);}
            else {showNext('stage438339.php?session_index=<?php echo $_SESSION[sessionID];?>',438339,438338);}

            };</script></div><script>if((true)) { $('#wrap4').show(); $('#buttonclick4').addClass('buttonclick');} </script><!-- END Element 4 Type: 18-->
        
        </div><script>setInterval(function(){ if (true) $('#wrap2').show();if (!(true)) $('#wrap2').hide();if (true) $('#wrap4').show();if (!(true)) $('#wrap4').hide(); }, 100);</script></form></div></div></body></html>