<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Mobitorix :: The mobile interface for Monitorix</title>
	 <link rel="icon" type="image/x-icon" href="favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script>
	$(document).ready(function () {
		$(function(){
			$('div').live('pagehide', function (event, ui) {
				var $this = $(this);
				if ($this.attr('ID') !== undefined && $this.attr('data-cache') !== undefined && $this.attr('data-cache') == "never") {
					var page = $this.attr('ID');
					$(document.getElementById(page)).remove();
				}
			});
		});
	});
	</script>

</head>
<body>
<?php
include_once 'config.php';
define('VERSION', '1.5');
?>
<div data-role="page" data-theme="<?php echo $theme ?>" data-add-back-btn="true">

	<div data-role="header" data-theme="<?php echo $theme ?>">
		<h1><?php echo HOST ?> :: Mobitorix <?php echo VERSION?></h1>
	</div>

	<div data-role="content">
