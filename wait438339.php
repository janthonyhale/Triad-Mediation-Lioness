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
}</style><title>The other participants kept you waiting.</title>

        <script> var v={}; var wronganswers={}; var totalwronganswers={};
        var participationFee=parseFloat(getParameter('participationFee'));

		function toLobby()
		{

			setValue('core', 'playerNr='+playerNr, 'waitMore', 1);
			location.replace('stage438339.php?session_index=<?php echo $_SESSION[sessionID];?>');
			return false;
		}
		function toEarnings()
		{
			location.replace('stage438342.php?session_index=<?php echo $_SESSION[sessionID];?>');
			return false;
		}</script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div style="padding-top: 20px"><div class="row"><!-- START Element 1 Type: 19-->
        
        
        <script></script><!-- END Element 1 Type: 19-->
        
        </div><script>setInterval(function(){  }, 100);</script></div><div style="text-align:center; margin-top: 5px;">


        
        <div id="wait_button" class="btn btn-info" onclick="toLobby();">Wait for 2 more minutes</div>

               <br><br>
        <div  id="leave_button" class="btn btn-info" onclick="toEarnings();">
            Leave
        </div></div></form></div></body></html>