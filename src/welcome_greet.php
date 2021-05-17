<?php

/*
** welcome module
** OmerAti - Omer ATABER omerati6363@gmail.com
*/

hook::func("join", function($u){
	global $gw,$sql,$me;
	$nick = $u['nick'];
    $target = $u['dest'];
	
	// this is a join so we log it as such
	$action = "JOIN";
	
// Necessary so that the bot does not send a message when it enters the channel :D
if ($nick === $me) { return; }

	// variables for easy use
	$nick = $u['nick'];
	$target = $u['dest'];
	
//you can duplicate this area

$gw->notice($nick,"Hello ".$nick.""); 
$gw->notice($nick,"Welcome I'm a PHP coded bot"); 
$gw->notice($nick,"It is an automatic welcome message"); 
$gw->notice($nick,"You can change as you wish.");

});
