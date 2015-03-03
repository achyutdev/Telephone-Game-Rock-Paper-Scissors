#!/usr/bin/php5 -q

<?php
require('phpagi.php');
$agi = new AGI();
$asterisk_select=$argv[1];
$player_select=$argv[2];

if ($asterisk_select == $player_select) {
$r = 0;
$agi->set_variable('result',$r);
}

elseif ($asterisk_select == 1 && $player_select == 2) {
$r = 1;
$agi->set_variable('result',$r);
}

elseif ($asterisk_select == 2 && $player_select == 3) {
$r = 1;
$agi->set_variable('result',$r);
}

elseif ($asterisk_select == 3 && $player_select == 1) {
$r = 1;
$agi->set_variable('result',$r);
}

elseif ($asterisk_select == 3 && $player_select == 2) {
$r = -1;
$agi->set_variable('result',$r);
}

elseif ($asterisk_select == 2 && $player_select == 1) {
$r = -1;
$agi->set_variable('result',$r);
}

elseif($asterisk_select == 1 && $player_select == 3) {
$r = -1;
$agi->set_variable('result',$r);
}

else{
	$agi->set_variable('result',"NON");
}
?>
