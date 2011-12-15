<?php include_once 'config.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Mobitorix :: The mobile interface for Monitorix</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
	<script>
	$j("div[data-role*='page']").live('pagehide', function(event, ui) {
		if ($j(this).children("div[data-role*='content']").is(".page-no-cache"))
		$j(this).remove();
	});
	</script>
</head>
<body>

<div data-role="page" data-theme="<?php echo $theme ?>">

	<div data-role="header" data-position="inline" data-backbtn="false" data-theme="<?php echo $theme ?>">
		<h1>Mobitorix <?php echo $version ?></h1>
		<a href="index.php" data-role="button" data-icon="home">Home</a>
	</div><!-- /header -->

	<div data-role="content">
