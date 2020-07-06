<head>
    <script script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script script type="text/javascript" src="js/clickCount.js"></script>
</head>
<body>
<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root.'/likebutton/function.php');
?>
    <!--*****index.php-->     
    <button class="letsVote" data-id="buttonID1" data-numhtml="countNum1">
        <span class="countNum1"><?php echo getVoteCount('buttonID'); ?></span>&nbsp;likes
    </button>
    <button class="letsVote" data-id="buttonID2" data-numhtml="countNum2">
        <span class="countNum2"><?php echo getVoteCount('buttonID'); ?></span>&nbsp;likes
    </button>
    <!--/////index.php-->
</body>
