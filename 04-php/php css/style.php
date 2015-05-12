<?php
	header("Content-type: text/css; charset: UTF-8");

	$a=rand(1,255);
	$b=rand(1,255);
	$c=rand(1,255);
?>
.divrand {
   background-color:<?php echo "rgb($a,$b,$c)"?>;
   height: 200px;
   width: 200px;
}