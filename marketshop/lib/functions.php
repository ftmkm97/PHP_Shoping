<?php

function checkUserIsValid(){
	session_start();
	if(!isset($_SESSION['is_valid']) || !$_SESSION['is_valid']){
		die('Who are you');
	}
}
