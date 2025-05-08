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
}</style><title>Chat - Interaction</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};var maxFalse = null;
        var firstStageExp = <?php echo json_encode(FIRSTPAGE . ".php"); ?>;
        var thisPage = <?php echo json_encode($thisPage); ?>;
        var sessionIndexJavascript = "<?php echo $_SESSION[sessionID];?>";
        pageRefreshed=0;
        var loopBegin = "stage" + loopStart + ".php";
        var afterLoopEnd = 438339;
        if (thisPage == firstStageExp || (thisPage==loopBegin && period > 1) || loopEnd==afterLoopEnd) firstStage();
        /* if (thisPage == firstStageExp || thisPage==loopBegin || loopEnd==afterLoopEnd) firstStage(); */
        TimeOut=null;
        function skipStage(proceedifpossible) {
         if (proceedifpossible === undefined) proceedifpossible = false;
         if (proceedifpossible) location.replace('stage438341.php?session_index=<?php echo $_SESSION[sessionID];?>');
         else location.replace('wait438340.php?session_index=<?php echo $_SESSION[sessionID];?>');
        }
        $(document).ready(function(){
        if (bot) { document.getElementsByClassName("buttonclick")[0].click(); }
        });
        
        </script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div class="row"><!-- START Element 1 Type: 19-->
        
        
        <script>/*create null variables to support the chat functionality. - this needs to be manual since we are not using the in-built chat element.*/
const r = getValue('core','playerNr='+playerNr,'role')


const empty_content = 'EMPTY';
record('chat_box_content', empty_content);
record('mediate', 0);
record('chat_box_content_chatnotification', 0);

/*create an empty variable for saving the full chat*/
record('fullChat', 0);

/*const high_item = getValue('high_item');
const medium_item = getValue('medium_item');
const low_item = getValue('low_item');*/


const all_players = getValues('core', 'groupNr='+groupNr + " and period=" + period, 'subjectNr');

// /*TODO: Stop the task in the following cases.*/
// if (all_players.length != 3) {
//     alert("length is not 3.");
// }
// else if(all_players[0] == all_players[1]) {
//     alert("subjectNr is not unique.");
// }

/*the player from all_players who has the control currently.*/
let curr_control = 1; //Math.min(...all_players);

let othersubjectNr = all_players[0];
if (othersubjectNr == subjectNr) {
    othersubjectNr = all_players[1];
}

let otherNrA = (subjectNr) % 3 + 1
let otherNrB = (subjectNr + 1) % 3 + 1

/*modify the message stream as required.*/
function getMessageStreamModified(labelname, idElement) {

    let ownmessages = getValue(labelname);
    if (ownmessages == 'EMPTY') {
        ownmessages = null;
    }
    let othermessages = getValuesOthers(labelname);
    let otherIDs = getValuesOthers("subjectNr");
    console.log(othermessages);
    console.log(otherIDs);
    if ((othermessages.length == 1) && (othermessages[0] == 'EMPTY')) {
        othermessages = [null];
    }

    // for (var i = 0; i < othermessages.length; i++)
    // {
    //     if (othermessages[i][0] == 'EMPTY') othermessages[i] = [null];
    // }
    
    let allmessages = decodeMessages(ownmessages, "<b>[You]</b>: ");

    console.log(othermessages);
    console.log(othermessages[0]);
    for (var i = 0; i < othermessages.length; i++) {
          if (othermessages[i] === "EMPTY") continue;
        let textother = "<b>[Other]</b>: ";
        if (otherIDs[i] === 3) textother = "<b>[Mediator]</b>: ";
        if (otherIDs[i] === 1) textother = "<b>[Buyer]</b>: ";
        if (otherIDs[i] === 2) textother = "<b>[Seller]</b>: ";
        // if (othermessages.length > 1) {
        //     textother = "<b>[Other " + (i + 1) + "]</b>: ";
        // }

        let otherm = decodeMessages(othermessages[i], textother);

        allmessages = Object.assign(allmessages, otherm);
        console.log(allmessages);
    }
    let messagestream = "";
    const ordered = {};
    Object.keys(allmessages).sort().forEach(function (key) {
        ordered[key] = allmessages[key];
        messagestream += decodeURI(allmessages[key]) + "<br>";
    });


    if (messagestream !== "") {
        let messagestreamcont = $("#messagestream" + idElement);
        messagestreamcont.html(messagestream);
        messagestreamcont.scrollTop(messagestreamcont[0].scrollHeight);

    }
}

const min_num_msgs = 8;
const issue_quant = 3;
const dropout_timer = 240;
let negotiation_is_over = false;

console.log(r);
let yourRole = 'none';
let otherRole = 'none';
let refundWording = 'none';
let buyerReviewWording = 'none';
let sellerReviewWording = 'none';
let buyerApologyWording = 'none';
let sellerApologyWording = 'none';
if(r==1){
    yourRole = 'Buyer';
    otherRole = 'Seller';
    refundWording = 'I receive refund';
    buyerReviewWording = 'Seller retracts bad review of you?';
    buyerReviewKeep = 'Keeps';
    buyerReviewRetr = 'Retracts';
    sellerReviewWording = 'I keep bad review of Seller';
    sellerReviewKeep = 'Keep';
    sellerReviewRetr = 'Retract'
    buyerApologyWording = 'Seller apologizes to you?';
    sellerApologyWording = 'You apologize to Seller?';
    
} else if (r == 2) {
    yourRole = 'Seller';
    otherRole = 'Buyer';
    refundWording = 'I offer refund'
    buyerReviewWording = 'I keep bad review of Buyer';
    buyerReviewKeep = 'Keep';
    buyerReviewRetr = 'Retract';
    sellerReviewWording = 'Buyer retracts bad review of you?';
    sellerReviewKeep = 'Keeps';
    sellerReviewRetr = 'Retracts'
    buyerApologyWording = 'You apologize to Buyer?';
    sellerApologyWording = 'Buyer apologizes to you?';
}

else {
    yourRole = 'Mediator';
}

let final_deal_val = 'Y'</script><!-- END Element 1 Type: 19-->
        
        <!-- START Element 2 Type: 1-->
        
        <div class="col-sm-12" id="wrap2" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><div id="top_box">
<ul style="text-align: left">
<li><b style="color: rgb(79, 129, 189);">BEEP SOUNDS</b> when it’s your turn (Keep audio on and tab open or you MAY NOT HEAR). Respond quickly. Your partner is waiting!</li>
<li><b style="color: rgb(79, 129, 189);">SUBMIT YOUR DEAL</b> to receive bonus using window right of the chat. (At least 8 messages must be exchanged first)</li>
<!-- <li style="text-align: left; ">Your role is <b style="color: rgb(79, 129, 189);"><script>document.write(yourRole)</script></b></li><li style="text-align: left; "><b style="color: rgb(79, 129, 189);"><br></b></li>
        <li style="text-align: left; ">When it is <b style="color: rgb(79, 129, 189);">YOUR TURN</b><b style="color: rgb(79, 129, 189);">&nbsp;TO CHAT</b>&nbsp;you will hear a notification and see the <b>Message</b> button on the left below. Please don&#039;t waste time and reply as soon as possible. Your partner is waiting for you.</li>
        <li style="text-align: left; ">When you&#039;ve reached an agreement, you need to&nbsp;<b style="color: rgb(79, 129, 189);">FINALIZE YOUR DEAL</b>&nbsp;with the window to the right of the chat. (You and your partner must exchange a minimum of 8 messages)</li>
        <li style="text-align: left; "><b style="color: rgb(79, 129, 189);">TURN ON YOUR AUDIO</b> for new message notification.</li>
        <li style="text-align: left; ">Try to get your issues resolved.&nbsp;<b style="background-color: rgba(223, 240, 216, 0); color: rgb(79, 129, 189);">NO PAYMENT</b><span style="background-color: rgba(223, 240, 216, 0);"> for short/meaningless messages.</span></li> -->
</ul></div></div>
        </div><script>if((true)) { $('#wrap2').show(); } </script><!-- END Element 2 Type: 1-->
        
        <!-- START Element 3 Type: 1-->
        
        <div class="col-sm-6" id="wrap3" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><div id="right_side_box" style="height: 80%;">
<div class="form-group panel panel-default">
     <div id="messagestream4" class="panel-heading" style="height: 60%; overflow-wrap: break-word; overflow-y: auto; text-align: left;">
          no messages yet...
     </div>
     <div class="panel-body" style="height: 20%;">
         <textarea id="field4" style="text-align: center; width: 100%" rows="1" name="bid4" class="btntextfield form-control" placeholder="Enter message here..."></textarea>
         <div id="field4_msg" class="alert alert-danger" style="height: 100%; padding-top: 8%; ">
         </div>
         <div id="field4_submit" class="btn btn-block btn-info">
              Send message (Write full sentences)
         </div>

<script>
if(r==1){
document.getElementById("messagestream4").innerHTML = "[YOU SEND FIRST MESSAGE]";
}
</script>

     </div>
</div>
</div></div>
        </div><script>if((true)) { $('#wrap3').show(); } </script><!-- END Element 3 Type: 1-->
        
        <!-- START Element 4 Type: 1-->
        
        <div class="col-sm-6" id="wrap4" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><div id="left_side_box" style="height: 60%; border: 0.5px solid;">
    <div id="submit_deal_normal_mode" style="height: 80%;">
        <div style="height: 75%; display: flex; justify-content: center;">
        <table>
            <thead>
                <tr>
                    <th>Issue</th>
                    <th>Agreement</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><script>document.write(refundWording)</script></td>
                    <td>
                          <select id="refund_get" style="width: 90%;">
                               <option value="-">-</option>
                               <option value="no">No refund</option>
                               <option value="partial">Partial refund</option>
                               <option value="full">Full refund</option>
                         </select>
                    </td>
                </tr>
                <tr>
                    <td><script>document.write(buyerReviewWording)</script></td>
                    <td>
                          <select id="buyer_review" style="width: 90%;">
                               <option value="-">-</option>
                               <option value="keep"><script>document.write(buyerReviewKeep)</script></option>
                               <option value="retract"><script>document.write(buyerReviewRetr)</script></option>
                         </select>
                    </td>
                </tr>

                <tr>
                    <td><script>document.write(sellerReviewWording)</script></td>
                    <td>
                          <select id="seller_review" style="width: 90%;">
                               <option value="-">-</option>
                               <option value="keep"><script>document.write(sellerReviewKeep)</script></option>
                               <option value="retract"><script>document.write(sellerReviewRetr)</script></option>
                         </select>
                    </td>
                </tr>
                <tr>
                    <td><script>document.write(buyerApologyWording)</script></td>
                    <td>
                          <select id="buyer_apologize" style="width: 90%;">
                               <option value="-">-</option>
                               <option value="yes">Yes</option>
                               <option value="no">No</option>
                         </select>
                    </td>
                </tr>
                <tr>
                    <td><script>document.write(sellerApologyWording)</script></td>
                    <td>
                          <select id="seller_apologize" style="width: 90%;">
                               <option value="-">-</option>
                               <option value="yes">Yes</option>
                               <option value="no">No</option>
                         </select>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
        <div id="submitbutton" class="btn btn-info" style="margin: 10px">Finalize Your Deal</div>
        <div id="submit_deal_final_msg" style="color: red;"></div>
    </div>

    <div id="submit_deal_no_control_mode" style="height: 80%;">
        <div style="height: 100%;" class="alert alert-danger">
            <div style="height: 70%; display: flex; justify-content: center;">
                <table>
                    <thead>
                        <tr>
                            <th>Issue</th>
                            <th>Agreement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><script>document.write(refundWording)</script></td>
                            <td>
                                <span id="proposed_refund_get_no_control"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><script>document.write(buyerReviewWording)</script></td>
                            <td>
                                <span id="proposed_buyer_review_no_control"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><script>document.write(sellerReviewWording)</script></td>
                            <td>
                                <span id="proposed_seller_review_no_control"></span>
                            </td>
                        </tr>        
                        <tr>
                            <td><script>document.write(buyerApologyWording)</script></td>
                           <td>
                                <span id="proposed_buyer_apologize_no_control"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><script>document.write(sellerApologyWording)</script></td>
                            <td>
                                <span id="proposed_seller_apologize_no_control"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="alert alert-danger">Wait for your turn</div>
        </div>
    </div>

    <div id="deal_response_mode" style="height: 80%">
        <div style="height: 70%; display: flex; justify-content: center;">
        <table>
            <thead>
                <tr>
                    <th>Issue</th>
                    <th>Agreement</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><script>document.write(refundWording)</script></td>
                    <td>
                        <span id="proposed_refund_get"></span>
                    </td>
                </tr>
                <tr>
                    <td><script>document.write(buyerReviewWording)</script></td>
                    <td>
                        <span id="proposed_buyer_review"></span>
                    </td>
                </tr>
                <tr>
                    <td><script>document.write(sellerReviewWording)</script></td>
                    <td>
                        <span id="proposed_seller_review"></span>
                    </td>
                </tr>        
                <tr>
                    <td><script>document.write(buyerApologyWording)</script></td>
                   <td>
                        <span id="proposed_buyer_apologize"></span>
                    </td>
                </tr>
                <tr>
                    <td><script>document.write(sellerApologyWording)</script></td>
                    <td>
                        <span id="proposed_seller_apologize"></span>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
        <div style="color: blue;text-align: left;"><b>Your partner has entered the above agreement. Please either Accept, Reject (if not what you agreed) or Walk Away (No agreement).</b></div>

        <div id="acceptbutton" class="btn btn-info" style="margin-bottom: 10px;">
            Accept (Ends Negotiation)
        </div>
        <div id="rejectbutton" class="btn btn-info" style="margin-bottom: 10px;">
            Reject (Continues Negotiation)
        </div>
    </div>
    <!--<div id="dropout_msg_mode" style="height: 80%">
        <div style="color: blue;text-align: left;"><b>Your partner may have lost connection. If you don&#039;t want to wait longer you can click the button below to exit the experiment.</b></div>
    </div>-->
    <div id="walk_away_normal_mode" style="height: 20%; padding: 2%;">
        <div id="walkawaybutton" class="btn btn-info">Walk Away (End with No Deal)</div>
        <div id="walk_away_final_msg" style="color: red;"></div>
    </div>
    <div id="walk_away_no_control_mode" style="height: 20%">
        <div style="padding-top: 4%; height: 100%;" class="alert alert-danger">Wait for your turn</div>
    </div>
    <div id="dropout_mode" style="height: 20%; padding: 2%;">
<div style="color: blue;text-align: left;"><b>Your partner may have lost connection. If you don&#039;t want to wait longer you can click the button below to exit the experiment.</b></div>
        <div id="dropoutbutton" class="btn btn-info">Partner Non-responsive: Click to Exit</div>
        <div id="dropout_msg" style="color: red;"></div>
    </div>
</div></div>
        </div><script>if((true)) { $('#wrap4').show(); } </script><!-- END Element 4 Type: 1-->
        
        <!-- START Element 5 Type: 19-->
        
        
        <script>/*Core JS for the chat feature.*/

/*
Submit Deal box - button + table to enter the deal + error message.
Chat Deal box - chat message box, input box, click button + error message.
Accept/Reject box - showing accept/reject buttons.
Walk Away Box - button + table + error message.

- Submit Deal box, Walk away box, and chat input -> will be red with error message when the turn is not there.
- When the turn is there, they will be visible -> but the buttons will only work when all corresponding errors are resolved. Also, if the previous message was a submit deal, then instead of subbmit deal, accept-reject will be visible. - handle transitions depending on which buttons are clicked.

*/


if (yourRole === "Mediator") {
    document.getElementById("left_side_box").style.display = "none";

    // Create "Continue without intervention" button
    // const continueButton = document.createElement("div");
    // continueButton.id = "field4_continue";
    // continueButton.className = "btn btn-block btn-success";
    // continueButton.innerText = "Continue without intervention";

    // Create "Intervene!" button
    const interveneButton = document.createElement("div");
    interveneButton.id = "field4_intervene";
    interveneButton.className = "btn btn-block btn-danger";
    interveneButton.innerText = "Intervene!";

    // Append both buttons below the existing send button
    const parentElement = document.getElementById("field4_submit").parentNode;
    parentElement.appendChild(interveneButton);
}


let labelname4="chat_box_content";

let tester = null;

/*function add_emoji(emoval1, emoval2=null) {
    let curr_txt = document.getElementById("field4").value;
    if (emoval2 === null) {
        curr_txt = curr_txt + String.fromCodePoint(emoval1);
    }
    else {
        curr_txt = curr_txt + String.fromCodePoint(emoval1, emoval2);
    }
    document.getElementById("field4").value = curr_txt;
}

function replace_with_emojis() {

    let curr_txt = document.getElementById("field4").value;

    if (curr_txt.endsWith(":)")) {
        curr_txt = curr_txt.slice(0,-2) + String.fromCodePoint(0x1F642);
    }
    else if (curr_txt.endsWith(":(")) {
        curr_txt = curr_txt.slice(0,-2) + String.fromCodePoint(0x2639, 0xFE0F);
    }
    else if (curr_txt.endsWith(":o")) {
        curr_txt = curr_txt.slice(0,-2) + String.fromCodePoint(0x1F62E);
    }
    else if (curr_txt.endsWith(":@")) {
        curr_txt = curr_txt.slice(0,-2) + String.fromCodePoint(0x1F621);
    }

    document.getElementById("field4").value = curr_txt;
}*/

function get_most_recent_msg() {

    let all_msgs = document.getElementById("messagestream4").innerHTML.split("<br>");
    last_msg = all_msgs[all_msgs.length - 2].replace("<b>[Other]</b>: ","").trim();
    return last_msg;
}

function parse_submitted_deal(most_recent_msg) {

    let msg_items = most_recent_msg.split(" ");

    let msg_br = 'retract';
    if(msg_items[7]=='kept'){
        msg_br = 'keep';
    }
    let msg_sr = 'retract';
    if(msg_items[11]=='kept'){
        msg_sr = 'keep';
    }
    let msg_ba = 'no';
    if(msg_items[15]=='did'){
        msg_ba = 'yes';
    }
    let msg_sa = 'no';
    if(msg_items[19]=='did'){
        msg_sa = 'yes';
    }

    let partner_issuewise_val = {
        'refund': msg_items[4],
        'buyer_review': msg_br,
        'seller_review': msg_sr,
        'buyer_apologize': msg_ba,
        'seller_apologize': msg_sa
    };

    return partner_issuewise_val;
}

/*function reverse_issuewise_val(partner_issuewise_val) {

    let self_issuewise_val = {
        'food_you': partner_issuewise_val.food_they,
        'firewood_you': partner_issuewise_val.firewood_they,
        'water_you': partner_issuewise_val.water_they,

        'food_they': partner_issuewise_val.food_you,
        'firewood_they': partner_issuewise_val.firewood_you,
        'water_they': partner_issuewise_val.water_you,
    };

    return self_issuewise_val;
}
*/
function get_prefwise_val(issuewise_val) {
    let refundVal = 0;
    let bRevVal = 0;
    let sRevVal = 0;
    let bApolVal = 0;
    let sApolVal = 0;

    let refundW = '-';
    if(issuewise_val.refund == 'no'){
        refundW = 'No refund';
        refundVal = 1;
    }else if (issuewise_val.refund == 'partial'){
        refundW = 'Partial refund';
        refundVal = 2;
    }else if (issuewise_val.refund == 'full'){
        refundW = 'Full refund';
        refundVal = 3;
    }
    let bRevW = '-';
    if(issuewise_val.buyer_review == 'keep'){
        bRevW = 'Kept';
        bRevVal = 1;
    }else if (issuewise_val.buyer_review == 'retract'){
        bRevW = 'Retracted';
        bRevVal = 2;
    }
    let sRevW = '-';
    if(issuewise_val.seller_review == 'keep'){
        sRevW = 'Kept';
        sRevVal = 1;
    }else if (issuewise_val.seller_review == 'retract'){
        sRevW = 'Retracted';
        sRevVal = 2;
    }
    let bApolW = '-';
    if(issuewise_val.buyer_apologize == 'yes'){
        bApolW = 'Yes';
        bApolVal = 1;
    }else if (issuewise_val.buyer_apologize == 'no'){
        bApolW = 'No';
        bApolVal = 2;
    }
    let sApolW = '-';
    if(issuewise_val.seller_apologize == 'yes'){
        sApolW = 'Yes';
        sApolVal = 1
    }else if (issuewise_val.seller_apologize == 'no'){
        sApolW = 'No';
        sApolVal = 2
    }
    let prefwise_val = {
        'refund': refundW,
        'buyer_review': bRevW,
        'seller_review': sRevW,
        'buyer_apologize': bApolW,
        'seller_apologize': sApolW
    };

    if(r==1){
        final_deal_val = String.fromCharCode(50 + 8 * refundVal + 4 * bRevVal + 2 * sRevVal + bApolVal);
        // final_deal_val = refundVal + bRevVal + sRevVal + bApolVal;

    } else {
        final_deal_val = String.fromCharCode(50 + 8 * refundVal + 4 * sRevVal + 2 * bRevVal + sApolVal);
        // final_deal_val = refundVal + sRevVal + bRevVal + sApolVal;
    }

    return prefwise_val;
}

var beep = (function () {
    var ctxClass = window.audioContext ||window.AudioContext || window.AudioContext || window.webkitAudioContext;
    var ctx = new ctxClass();
    return function (duration, type, finishedCallback) {

        duration = +duration;

        if (typeof finishedCallback != "function") {
            finishedCallback = function () {};
        }

        var osc = ctx.createOscillator();

        osc.type = type;

        osc.connect(ctx.destination);
        if (osc.noteOn) osc.noteOn(0);
        if (osc.start) osc.start();

        setTimeout(function () {
            if (osc.noteOff) osc.noteOff(0);
            if (osc.stop) osc.stop();
            finishedCallback();
        }, duration);

    };
})();

timeoutId = null;

connected = false;
lostconnect = false;

$("#field4_submit").click(function() {
    let thismessage = $("#field4").val();
    if(thismessage.length > 1){
        $(this).hide();
        thismessage_encoded = encodeURI(thismessage);
        let ownmessages=getValue(labelname4);
        if (ownmessages == "EMPTY") {
             ownmessages = null;
        }
        ownmessages=decodeMessages(ownmessages);
        let timestamper = (getServerTime()).toString();
        ownmessages[timestamper]=thismessage_encoded;
        setValue(labelname4, encodeMessages(ownmessages));
        getMessageStreamModified(labelname4, 4);
        $("#field4").val("");

        /*now show and hide elements accordingly.*/

        /*
        What all cases are possible?
        This is the guy who has just sent a message.
        - If the deal is accepted, or the player walks away, - the negotiation ends. In that case, only show the continue button, hide everything else.
        - If a deal is rejected, then the conversation will continue from the current player.
        - In all other cases, this guy will simply wait and the other player must continue the conversation.
        */
        if ((thismessage === 'Accept Deal') || (thismessage === 'I Walk Away.') || (thismessage === 'Connection issue.'))  {
            /*Negotiation is now over.*/

            console.log(curr_control);
            curr_control = "Chat-Over";
            console.log(curr_control);

            $("#top_box").hide();
            $("#left_side_box").hide();
            $("#right_side_box").hide();

            if (thismessage === 'Accept Deal') {
                document.getElementById("overall_msg").innerHTML = "You have accepted the deal and the negotiation is now over. Please click the button below to continue.";
                // document.getElementById("overall_msg").innerHTML = "You have accepted the deal and the negotiation is now over. Please click the button below to continue. (code: "+ final_deal_val + "D-" + randomid + ")";

                // document.getElementById("end_msg").innerHTML = 'You have accepted the deal and the negotiation is now over.<br>Please copy the following completion code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit<br></p><p><b>Completion Code: <span id="copyText">' + final_deal_val + 'D-' + randomid + '</span>';
                record('final_result', final_deal_val);
            }
            else if (thismessage === 'I Walk Away.') {
                document.getElementById("overall_msg").innerHTML = "You have walked away and the negotiation is now over. Please click the button below to continue.";
                // document.getElementById("overall_msg").innerHTML = "You have walked away and the negotiation is now over. Please click the button below to continue.  (code: ZD-" + randomid + ")";
                // document.getElementById("end_msg").innerHTML = 'You have walked away and the negotiation is now over.<br>Please copy the following completion code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit<br></p><p><b>Completion Code: <span id="copyText">ZD-' + randomid + '</span>';
                record('final_result', 'Z');
            }
            else if (thismessage === 'Connection issue.') {
                document.getElementById("overall_msg").innerHTML = "Negotiation terminated due to nonresponse partner. Please click the button below to receive completion code.";
                // document.getElementById("overall_msg").innerHTML = "Connection issues occurred. Please click the button below to continue. (code: !D-" + randomid + ")";
                // document.getElementById("end_msg").innerHTML = 'Connection issues occurred.<br>Please copy the following completion code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit<br></p><p><b>Completion Code: <span id="copyText">!D-' + randomid + '</span>';
                record('final_result', '(');
            }

            record('other_lost_connect', lostconnect);
            $("#overall_msg").show();
            negotiation_is_over = true;

        }
        else if(thismessage === 'Reject Deal'){
            /*The negotiation will continue from the same player.*/

            console.log(curr_control);
            curr_control = subjectNr;
            console.log(curr_control);

            /*left_side_box*/
            $("#deal_response_mode").hide();
            $("#dropout_mode").hide();
            $("#submit_deal_normal_mode").show();
            document.getElementById("submit_deal_final_msg").innerHTML = "";
            document.getElementById("walk_away_final_msg").innerHTML = "";

            /*right_side_box*/
            $("#field4_msg").hide();

            $("#field4_emoticons").show();
            $("#field4").show();
            if (yourRole === "Mediator") $("#field4_continue").show();

            $("#field4_submit").show();

        }
        else {
            /*The conversation will continue from the other player.*/

            console.log(curr_control);
            //curr_control = othersubjectNr;
            curr_control = curr_control + 1;// othersubjectNr;
            if (curr_control >= 4) curr_control = 1;
            console.log(curr_control);

            /*left_side_box*/
            $("#submit_deal_normal_mode").hide();
            $("#submit_deal_no_control_mode").show();
            $("#dropout_mode").hide();
            $("#walk_away_normal_mode").hide();
            $("#walk_away_no_control_mode").show();

            timeoutId = setTimeout(function(){
                console.log("Timeout set");
                $("#walk_away_no_control_mode").hide();
                $("#walk_away_normal_mode").hide();
                $("#dropout_mode").show();
                beep(250, "sine", function () {
                    console.log(dropout_timer +' passed');
                });
            }, dropout_timer*1000);

            /*right_side_box*/
            $("#field4_emoticons").hide();
            $("#field4").hide();
            if (yourRole === "Mediator") $("#field4_continue").hide();
            $("#field4_submit").hide();

            document.getElementById("field4_msg").innerHTML = "Wait for your turn";
            $("#field4_msg").show();
            if (yourRole === "Mediator")
            {
                      /*Now send the message to the other party- so that they can modify their UI accordingly.*/
                setValue("decisions","groupNr=" + groupNr + " and period=" + period +" and (" + labelname4 + "_chatnotification = 0 or " + labelname4 + "_chatnotification IS NULL) and mediate = " + 0,
                labelname4 + "_chatnotification","1");
            }
        }

        if (yourRole === "Mediator")
        {
                setValue("decisions","groupNr=" + groupNr + " and period=" + period,
        "mediate",0);
             $("#field4_intervene")
        .prop("disabled", false)
        .text("Intervene") // or whatever the original label was
        .css({
            "background-color": "",
            "color": "",
            "cursor": ""
        });
            
        }
        else
            setValue("decisions","groupNr=" + groupNr + " and period=" + period + " and subjectNr=" + ( subjectNr % 2 + 1) + " and (" + labelname4 + "_chatnotification = 0 or " + labelname4 + "_chatnotification IS NULL)",
            labelname4 + "_chatnotification","1");
               /*Now send the message to the other party- so that they can modify their UI accordingly.*/

    }
});

// $("#field4_continue").click(function() {
//             /*The conversation will continue from the other player.*/

//             console.log(curr_control);
//             //curr_control = othersubjectNr;
//             curr_control = curr_control + 1;// othersubjectNr;
//             if (curr_control >= 3) curr_control = 1;
//             console.log(curr_control);

//             /*left_side_box*/
//             $("#submit_deal_normal_mode").hide();
//             $("#submit_deal_no_control_mode").show();
//             $("#dropout_mode").hide();
//             $("#walk_away_normal_mode").hide();
//             $("#walk_away_no_control_mode").show();

//             timeoutId = setTimeout(function(){
//                 console.log("Timeout set");
//                 $("#walk_away_no_control_mode").hide();
//                 $("#walk_away_normal_mode").hide();
//                 $("#dropout_mode").show();
//                 beep(250, "sine", function () {
//                     console.log(dropout_timer +' passed');
//                 });
//             }, dropout_timer*1000);

//             /*right_side_box*/
//             $("#field4_emoticons").hide();
//             $("#field4").hide();
//             if (yourRole === "Mediator") $("#field4_continue").hide();
//             $("#field4_submit").hide();

//             document.getElementById("field4_msg").innerHTML = "Wait for your turn";
//             $("#field4_msg").show();
        

//         /*Now send the message to the other party- so that they can modify their UI accordingly.*/
//         setValue("decisions","groupNr=" + groupNr + " and period=" + period + " and subjectNr=" + ( subjectNr % 2 + 1) + " and (" + labelname4 + "_chatnotification = 0 or " + labelname4 + "_chatnotification IS NULL)",
//         labelname4 + "_chatnotification","1");
// });

$("#field4_intervene").click(function() {
    // Send the message to the other party
    setValue("decisions", "groupNr=" + groupNr + " and period=" + period, "mediate", 1);

    // Grey out and disable the button
    $(this).prop("disabled", true)
           .css({
               "background-color": "#ccc",
               "color": "#666",
               "cursor": "not-allowed"
           });

    // Replace the button's content with overlay message
    $(this).html('<span class="overlay-text">You can type a message at the next opportunity...</span>');
});





if((true)) {

    getMessageStreamModified(labelname4, 4);

    setInterval(function(){

       

        let notify = getValue(labelname4+"_chatnotification");
        
        let to_mediate = getValue('decisions', 'groupNr=' + groupNr +  ' and subjectNr=' + 3 + ' and period=' + period, 'mediate');      

    
        /*Now send the message to the other party- so that they can modify their UI accordingly.*/
       
        if (getValuesOthers(labelname4 + "_chatnotification").includes(1) || notify)
        {
            getMessageStreamModified(labelname4, 4);
            most_recent_msg = get_most_recent_msg();
            let match = most_recent_msg.match(/<\/b>:\s*(.*)/);
            most_recent_msg = match ? match[1] : null;
            console.log(most_recent_msg);

                clearTimeout(timeoutId);
            console.log("Timeout has been cleared");

            if ((most_recent_msg === 'Accept Deal') || (most_recent_msg === 'I Walk Away.') || (most_recent_msg === 'Connection issue.')) {
                /*Negotiation is now over - since the partner has either accepted the deal or has walked away.*/

                console.log(curr_control);
                curr_control = "Chat-Over";
                console.log(curr_control);


                $("#top_box").hide();
                $("#left_side_box").hide();
                $("#right_side_box").hide();

                if (most_recent_msg === 'Accept Deal') {
                    document.getElementById("overall_msg").innerHTML = "Your partner has accepted the agreement and the negotiation is now over. Please click the button below to continue.";
                    // document.getElementById("overall_msg").innerHTML = "Your partner has accepted the agreement and the negotiation is now over. Please click the button below to continue. (code: "+ final_deal_val + "D-" + randomid + ")";
                    // document.getElementById("end_msg").innerHTML = 'Your partner has accepted the agreement and the negotiation is now over.<br>Please copy the following completion code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit<br></p><p><b>Completion Code: <span id="copyText">' + final_deal_val + 'D-' + randomid + '</span>';

                    record('final_result', final_deal_val);
                }
                else if (most_recent_msg === 'I Walk Away.') {
                    document.getElementById("overall_msg").innerHTML = "Your partner has walked away and the negotiation is now over. Please click the button below to continue.";
                    // document.getElementById("overall_msg").innerHTML = "Your partner has walked away and the negotiation is now over. Please click the button below to continue. (code: ZD-" + randomid + ")";
                    // document.getElementById("end_msg").innerHTML = 'Your partner has walked away and the negotiation is now over.<br>Please copy the following completion code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit<br></p><p><b>Completion Code: <span id="copyText">ZD-' + randomid + '</span>';
                    record('final_result', "Z")
                }
                else if (most_recent_msg === 'Connection issue.') {
                    // document.getElementById("overall_msg").innerHTML = "Connection issues occurred. Please click the button below to continue. (code: !D-" + randomid + ")";
                    document.getElementById("overall_msg").innerHTML = "Negotiation terminated due to nonresponse partner. Please click the button below to receive completion code.";
                    // document.getElementById("end_msg").innerHTML = 'Connection issues occurred.<br>Please copy the following completion code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit<br></p><p><b>Completion Code: <span id="copyText">!D-' + randomid + '</span>';
                    record('final_result', '!');
                }
    
                record('other_lost_connect', lostconnect);
                $("#overall_msg").show();
                negotiation_is_over = true;
            }
        }
            
        if (to_mediate === 1 && (getValuesOthers(labelname4 + "_chatnotification").includes(1) || notify))
        {
            if (yourRole === "Mediator")
            {
                console.log(curr_control);
                curr_control = subjectNr;
                console.log(curr_control);

                /*left_side_box*/

                document.getElementById("submit_deal_final_msg").innerHTML = "";
                document.getElementById("walk_away_final_msg").innerHTML = "";

                $("#submit_deal_no_control_mode").hide();
                $("#submit_deal_normal_mode").show();
                $("#walk_away_no_control_mode").hide();
                $("#dropout_mode").hide();
                $("#walk_away_normal_mode").show();

                /*right_side_box*/
                $("#field4_msg").hide();
                $("#field4_emoticons").show();
                $("#field4").show();
                if (yourRole === "Mediator") $("#field4_continue").show();
                $("#field4_submit").show();
            }
        }
        else if (parseInt(notify) === 1) {
            

            most_recent_msg = get_most_recent_msg();
            let match = most_recent_msg.match(/<\/b>:\s*(.*)/);
            most_recent_msg = match ? match[1] : null;
            console.log(most_recent_msg);


            /*Now show and hide elements accordingly.*/
            /*
            What all cases are possible?
            This is the guy who has just received a message. This guy was waiting for a response from the other side.
            - If the partner accepts the deal or walks away, - the negotiation ends. In that case, only show the continue button, hide everything else.
            - If the partner submits a deal, then give the control but only allow the deal response and nothing else.
            - If the partner rejects a deal, that partner will continue the conversation.
            - In all other cases, give the usual control and this player will continue the conversation.
            */

           
           if ((most_recent_msg.includes('Submitted agreement: Buyer gets')) && (most_recent_msg.includes(' refund, seller '))) {
                /*This player just received a formal deal from the UI. - allow accept/reject.*/

                curr_control = subjectNr;

                /*left_side_box*/
                $("#submit_deal_no_control_mode").hide();

                issuewise_val = parse_submitted_deal(most_recent_msg);
                //self_issuewise_val = reverse_issuewise_val(partner_issuewise_val);
                prefwise_val = get_prefwise_val(issuewise_val);

                document.getElementById("proposed_refund_get").innerHTML = prefwise_val.refund;
                document.getElementById("proposed_buyer_review").innerHTML = prefwise_val.buyer_review;
                document.getElementById("proposed_seller_review").innerHTML = prefwise_val.seller_review;
                document.getElementById("proposed_buyer_apologize").innerHTML = prefwise_val.buyer_apologize;
                document.getElementById("proposed_seller_apologize").innerHTML = prefwise_val.seller_apologize;

                document.getElementById("proposed_refund_get_no_control").innerHTML = prefwise_val.refund;
                document.getElementById("proposed_buyer_review_no_control").innerHTML = prefwise_val.buyer_review;
                document.getElementById("proposed_seller_review_no_control").innerHTML = prefwise_val.seller_review;
                document.getElementById("proposed_buyer_apologize_no_control").innerHTML = prefwise_val.buyer_apologize;
                document.getElementById("proposed_seller_apologize_no_control").innerHTML = prefwise_val.seller_apologize;



                /*document.getElementById("proposed_high_you_get").innerHTML = self_prefwise_val.high_you;
                document.getElementById("proposed_medium_you_get").innerHTML = self_prefwise_val.medium_you;
                document.getElementById("proposed_low_you_get").innerHTML = self_prefwise_val.low_you;

                document.getElementById("proposed_high_they_get").innerHTML = self_prefwise_val.high_they;
                document.getElementById("proposed_medium_they_get").innerHTML = self_prefwise_val.medium_they;
                document.getElementById("proposed_low_they_get").innerHTML = self_prefwise_val.low_they;*/

                document.getElementById("submit_deal_final_msg").innerHTML = "";
                document.getElementById("walk_away_final_msg").innerHTML = "";

                $("#deal_response_mode").show();

                $("#walk_away_no_control_mode").hide();
                $("#dropout_mode").hide();
                $("#walk_away_normal_mode").show();

                /*right_side_box*/
                document.getElementById("field4_msg").innerHTML = "<b><span style='color: black;'>Your partner has submitted an agreement. Use the buttons below to respond.</span></b>";
            }
            else if (most_recent_msg === 'Reject Deal') {
                /*The partner has rejected the deal. That partner will continue the conversation.*/
                console.log(curr_control);
                curr_control = curr_control + 1;// othersubjectNr;
                if (curr_control >= 4) curr_control = 1;
                console.log(curr_control);

                timeoutId = setTimeout(function(){
                    console.log("Timeout set");
                    $("#walk_away_no_control_mode").hide();
                    $("#walk_away_normal_mode").hide();
                    $("#dropout_mode").show();
                    beep(250, "sine", function () {
                        console.log(dropout_timer +' passed');
                    });
                }, dropout_timer*1000);


                /*left_side_box - No changes required - continue to wait.*/

                /*right_side_box - No changes required - continue to wait.*/
            }
            else {
                /*This player will now continue the conversation in the usual manner.*/
                console.log(curr_control);
                curr_control = subjectNr;
                console.log(curr_control);

                /*left_side_box*/

                document.getElementById("submit_deal_final_msg").innerHTML = "";
                document.getElementById("walk_away_final_msg").innerHTML = "";

                $("#submit_deal_no_control_mode").hide();
                $("#submit_deal_normal_mode").show();
                $("#walk_away_no_control_mode").hide();
                $("#dropout_mode").hide();
                $("#walk_away_normal_mode").show();

                /*right_side_box*/
                $("#field4_msg").hide();
                $("#field4_emoticons").show();
                $("#field4").show();
                if (yourRole === "Mediator") $("#field4_continue").show();
                $("#field4_submit").show();
            }

        /*Set the notification value back to 0 - since now the notification has been received.*/
        setValue(labelname4+"_chatnotification",0);

        beep(250, "sine", function () {
            console.log('Message Received.');
        });

        }

    }, 2000);

}

let chat_box_content=null;

function checkValue_field4() {
    let label="chat_box_content";
    checker=checker+1;
}

/*Show the elements based on who has the control.*/
if (curr_control === subjectNr) {
    $("#submit_deal_no_control_mode").hide();
    $("#deal_response_mode").hide();
    $("#walk_away_no_control_mode").hide();
    $("#dropout_msg_mode").hide();
    $("#dropout_mode").hide();
    $("#field4_msg").hide();
}
else {
    $("#submit_deal_normal_mode").hide();
    $("#deal_response_mode").hide();
    $("#walk_away_normal_mode").hide();
    $("#dropout_msg_mode").hide();
    $("#dropout_mode").hide();

    $("#field4_emoticons").hide();
    $("#field4").hide();
                if (yourRole === "Mediator") $("#field4_continue").hide();
    $("#field4").hide();
    $("#field4_submit").hide();
    timeoutId = setTimeout(function(){
        console.log("Timeout set");
        $("#walk_away_no_control_mode").hide();
        $("#walk_away_normal_mode").hide();
        $("#dropout_mode").show();
        beep(250, "sine", function () {
            console.log(dropout_timer +' passed');
        });
    }, dropout_timer*1000);

    document.getElementById("field4_msg").innerHTML = "Wait for your turn";

}</script><!-- END Element 5 Type: 19-->
        
        <!-- START Element 6 Type: 19-->
        
        
        <script>/*Cell update for the deal table.*/
/*function handle_cell_update(you_name, they_name) {
    let you_val = document.getElementById(you_name).value;
    
    they_val = '-';
    if (you_val != '-') {
        they_val = (issue_quant - parseInt(you_val)).toString();
    }
    
    document.getElementById(they_name).innerHTML = they_val;
}
*/

/*Execute a function when the user releases a key on the keyboard*/
field4.addEventListener("keyup", function(event) {
  /*Number 13 is the "Enter" key on the keyboard*/
  if (event.keyCode === 13) {
    /*Cancel the default action, if needed*/
    event.preventDefault();
    /*Trigger the button element with a click*/
    document.getElementById("field4_submit").click();
  }
});

const count_substr = (str, searchValue) => {
  let count = 0,
    i = 0;
  while (true) {
    const r = str.indexOf(searchValue, i);
    if (r !== -1) [count, i] = [count + 1, r + 1];
    else return count;
  }
};

/*function get_issuewise_val(prefwise_val) {
    let issuewise_val = {};
    
    issuewise_val[high_item.toLowerCase() + '_you'] = prefwise_val.high_you;
    issuewise_val[medium_item.toLowerCase() + '_you'] = prefwise_val.medium_you;
    issuewise_val[low_item.toLowerCase() + '_you'] = prefwise_val.low_you;
    
    issuewise_val[high_item.toLowerCase() + '_they'] = prefwise_val.high_they;
    issuewise_val[medium_item.toLowerCase() + '_they'] = prefwise_val.medium_they;
    issuewise_val[low_item.toLowerCase() + '_they'] = prefwise_val.low_they;
    
    return issuewise_val;
}*/

$("#submitbutton").click(function() {
    /*
    Check
    - whether atleast 10 messages have been said,
    - whether you have the control
    - whether the fields have been filled correctly.
    
    Fill in any error message appropriately. Complete the request, if there are no errors.
    */
    console.log('submit');
    
    let submit_deal_final_msg = [];
    
    if (curr_control != subjectNr) {
        /*This will never be used, in theory.*/
        submit_deal_final_msg.push("Wait for your turn");
    }
    
    let all_msgs = document.getElementById("messagestream4").innerHTML;
    let num_msgs = count_substr(all_msgs, "[You]") + count_substr(all_msgs, "[Buyer]") + count_substr(all_msgs, "[Seller]");
    
    if (num_msgs < min_num_msgs) {
        submit_deal_final_msg.push("Min " + min_num_msgs.toString() + " messages required");
    }
    
    let prefwise_val = {
        'refund_get': document.getElementById('refund_get').value,
        'buyer_review': document.getElementById('buyer_review').value,
        'seller_review': document.getElementById('seller_review').value,
        'buyer_apologize': document.getElementById('buyer_apologize').value,
        'seller_apologize': document.getElementById('seller_apologize').value,
    };
    
    if((prefwise_val.refund_get === '-') || (prefwise_val.buyer_review === '-') || (prefwise_val.seller_review === '-') || (prefwise_val.buyer_apologize === '-') || (prefwise_val.seller_apologize === '-')) {
          submit_deal_final_msg.push("Deal must be entered above");
      }
      
    submit_deal_final_msg = submit_deal_final_msg.join(" | ");
    document.getElementById("submit_deal_final_msg").innerHTML = submit_deal_final_msg;
    
    if (submit_deal_final_msg === '') {
        
        //issuewise_val = get_issuewise_val(prefwise_val);
        let refundVal = 0;
        let bRevVal = 0;
        let sRevVal = 0;
        let bApolVal = 0;
        let sApolVal = 0;
        
        if(prefwise_val.refund_get == 'no'){
            refundVal = 1;
        } else if (prefwise_val.refund_get == 'partial'){
            refundVal = 2;
        } else if (prefwise_val.refund_get == 'full'){
            refundVal = 3;
        }
        
        
        let br_w = 'retracted';
        if(prefwise_val.buyer_review == 'keep'){
            br_w = 'kept';
            bRevVal = 1
        } else {
            bRevVal = 2
        }
        let sr_w = 'retracted';
        if(prefwise_val.seller_review == 'keep'){
            sr_w = 'kept';
            sRevVal = 1;
        } else {
            sRevVal = 2;
        }
        let ba_w = "didn't";
        if(prefwise_val.buyer_apologize == 'yes'){
            ba_w = 'did';
            bApolVal = 1;
        } else {
            bApolVal = 2;
        }
        let sa_w = "didn't";
        if(prefwise_val.seller_apologize == 'yes'){
            sa_w = 'did';
            sApolVal = 1;
        } else {
            sApolVal = 2;
        }
        
        if(r==1){
            final_deal_val = String.fromCharCode(50 + 8 * refundVal + 4 * bRevVal + 2 * sRevVal + bApolVal);
            // final_deal_val = refundVal + bRevVal + sRevVal + bApolVal;
        } else {
            final_deal_val = String.fromCharCode(50 + 8 * refundVal + 4 * sRevVal + 2 * bRevVal + sApolVal);
            // final_deal_val = refundVal + sRevVal + bRevVal + sApolVal;
        }
        
        let out_str = [
            'Submitted agreement: Buyer gets ',
            prefwise_val.refund_get,
            ' refund, seller ',
            br_w,
            ' their review, buyer ',
            sr_w,
            ' their review, seller ',
            ba_w,
            ' apologize, and buyer ',
            sa_w,
            ' apologize.',
            ].join('');
        
        document.getElementById("field4").value = out_str;
        document.getElementById("field4_submit").click();
    }
    
});

$("#acceptbutton").click(function() {
    
    document.getElementById("field4").value = 'Accept Deal';
    document.getElementById("field4_submit").click();
    
});

$("#rejectbutton").click(function() {
    
    document.getElementById("field4").value = 'Reject Deal';
    document.getElementById("field4_submit").click();
    
});

$("#dropoutbutton").click(function() {
    // first test is to just do walkaway button without checks
    document.getElementById("field4").value = 'Connection issue.';
    document.getElementById("field4_submit").click();
});

$("#walkawaybutton").click(function() {
    /*
    
    Check
    - whether atleast 10 messages have been said.
    - whether you have the control.
    */
    
    let walk_away_final_msg = [];
    
    if (curr_control != subjectNr) {
        /*this will never be used, in theory.*/
        walk_away_final_msg.push("Wait for your turn");
    }
    
    let all_msgs = document.getElementById("messagestream4").innerHTML;
    let num_msgs = count_substr(all_msgs, "[You]") + count_substr(all_msgs, "[Buyer]") + count_substr(all_msgs, "[Seller]");
    if (num_msgs < min_num_msgs) {
        walk_away_final_msg.push("Min " + min_num_msgs.toString() + " messages required");
    }
    
    walk_away_final_msg = walk_away_final_msg.join(" | ");
    document.getElementById("walk_away_final_msg").innerHTML = walk_away_final_msg;
    
    if (walk_away_final_msg === '') {
        
        document.getElementById("field4").value = 'I Walk Away.';
        document.getElementById("field4_submit").click();
    }
    
});</script><!-- END Element 6 Type: 19-->
        
        <!-- START Element 7 Type: 1-->
        
        <div class="col-sm-12" id="wrap7" style="display: none;"><div class="btnbox2 paddlr" style="text-align: center"><div id="overall_msg">
<!--<div id="end_msg"><b>NEGOTIATION COMPLETE<br></b><p><br></p><p>Please copy the following completion code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit<br></p><p><b>Completion Code: xxx<br></b></p>
</div>
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
<p><br></p><p>Once you have entered the code, you may safely close this tab.</p>-->
</div></div>
        </div><script>if((true)) { $('#wrap7').show(); } </script><!-- END Element 7 Type: 1-->
        
        <!-- START Element 8 Type: 18-->
        
        <div class="col-sm-12" id="wrap8" style="display: none;">
        <script>
       
        
        </script>
        
        <div  id="button8">
        <div id="buttonclick8" class="lionessbutton btn btn-default btn-lg btn-block btn-info" style=" white-space:normal !important; word-wrap: break-word;" onclick="
        $(this).hide(); $('#buttonload8').show();
        if (additionalCheck8()) {
            hideError8();
            if (checkEntries()) toNextPage8();
            else  { $(this).show(); 
            $('#buttonload8').hide(); }
        } else {
         $(this).show(); 
         $('#buttonload8').hide();
         }
        ">Continue</div><div id="buttonload8" style="width: 100%; text-align: center; display: none;"><img src="<?php echo PATH;?>basis/pic/buttonload.gif"></div><div id="field8_error" class="alert alert-danger" style="display: none; text-align: center;"></div><div id="field8_attempts" class="alert alert-warning" style="display: none; text-align: center;"><span class="attempts_text">Attempts left to answer the control questions</span>:&nbsp;<span id="field8_attempts_num"></span></div></div><script>if(maxFalse!=null) {
            var numFails=quizFail(playerNr,1);  
            $('#field8_attempts').show();
            $('#field8_attempts_num').html(maxFalse-numFails);
           
        }
        function showError8(text) {
            var errorfield= $('#field8_error');
            errorfield.show();
            errorfield.html(text);
        
        }
        
        function hideError8() {
            $('#field8_error').hide();
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
        
        function additionalCheck8() {if (!negotiation_is_over) {
    showError8('Please finish the negotiation above to continue.');
    return false;
}

allText = document.getElementById("messagestream4").innerHTML;
setValue('fullChat', allText);

           return true;
        }

       



        function checkFail() {} function toNextPage8() {
            if (loopEnd==438340) { showNext('wait438340.php?session_index=<?php echo $_SESSION[sessionID];?>',438341,438340);}
            else {showNext('stage438341.php?session_index=<?php echo $_SESSION[sessionID];?>',438341,438340);}

            };</script></div><script>if((true)) { $('#wrap8').show(); $('#buttonclick8').addClass('buttonclick');} </script><!-- END Element 8 Type: 18-->
        
        <!-- START Element 9 Type: 19-->
        
        
        <script>$("#overall_msg").hide();</script><!-- END Element 9 Type: 19-->
        
        </div><script>setInterval(function(){ if (true) $('#wrap2').show();if (!(true)) $('#wrap2').hide();if (true) $('#wrap3').show();if (!(true)) $('#wrap3').hide();if (true) $('#wrap4').show();if (!(true)) $('#wrap4').hide();if (true) $('#wrap7').show();if (!(true)) $('#wrap7').hide();if (true) $('#wrap8').show();if (!(true)) $('#wrap8').hide(); }, 100);</script></form></div></div></body></html>