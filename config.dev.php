<?php
define('HOST', 'xxx');//Example: mydomain.com
define('THEME', 'black');//options are: black (default), blue, white, yellow and grey

switch (THEME) {
	case 'black':
		$theme = 'a'; break;
	case 'blue':
		$theme = 'b'; break;
	case 'white':
		$theme = 'c'; break;
	case 'grey':
		$theme = 'd'; break;
	case 'yellow':
		$theme = 'e'; break;
	default:
		$theme = 'a';
}
