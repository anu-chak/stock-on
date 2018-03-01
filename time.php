<?php

function get_time($time){
	$year = $time/31556926 % 12;  // to get year
	$week = $time / 604800 % 52;  // to get weeks
	$hour = $time / 3600 % 24;    // to get hours
	$minute = $time / 60 % 60;    // to get minutes
	$second = $time % 60;

	echo $hour . " : " . $minute . " : " . $second;
}

?>