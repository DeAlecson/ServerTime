<?php
 date_default_timezone_set('Asia/Singapore');
 $currenttime = date("m/d/Y H:i:s");
 list($ddd,$ttt) = explode(' ',$currenttime);
 echo "$ddd^$ttt\n";
?>
