<?php
define('HOST', 'xxx');//Example: mydomain.com
define('THEME', 'grey');//options are: black, blue, white, yellow and grey (default)

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
		$theme = 'd';
}
