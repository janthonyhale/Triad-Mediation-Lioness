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
        var $_GET = <?php echo json_encode($_GET); ?>;
        var defNext = 438339;
        var nextPageLoop;
        if (parseInt(loopEnd)==438338) {nextPageLoop='stage'+loopStart.toString()+'.php?session_index=<?php echo $_SESSION[sessionID];?>';}
        else {nextPageLoop=null;}

        if ($_GET.next!=null) defNext=$_GET.next;

        checkReady('stage'+defNext.toString()+'.php?session_index=<?php echo $_SESSION[sessionID];?>', nextPageLoop);
        </script>
        </head><body><div id="mainwrap" class="container" style="width: 100%; padding-left: 5%; padding-right: 5%; padding-top: 1%;"><form autocomplete="off"><div style="padding-top: 20px; text-align: center;">
            Please wait until all members of your group are ready.
            </div></form></div></div></body></html>