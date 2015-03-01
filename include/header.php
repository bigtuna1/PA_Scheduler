<?php 
require_once('config.php');
?>

<!DOCTYPE html>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $pageTitle ?></title>
<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/main.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Noto+Serif' rel='stylesheet' type='text/css'>
<link rel="icon" href="<?php echo BASE_URL; ?>images/favicon.ico" type="image/x-icon">
</head>
<body>

<div id="wrapper"> <!-- Beginning Wrapper -->

<div id="nav"><!-- Beginning Nav -->
		<a href="#" title="Return to Homepage">
		<img src="<?php echo BASE_URL; ?>images/header-logo.png" width="627" height="76" alt="Manpower Inc. of Southeastern Michigan" /></a>
		<ul>
			<li id= "<?php if ($pageTitle == "Summary Page") {echo "home";}?>"><a href="<?php echo BASE_URL; ?>" title="Summary">Summary</a></li>
			<li id= "<?php if ($pageTitle == "Scheduling") {echo "home";}?>"><a href="<?php echo BASE_URL; ?>scheduling/">Scheduling</a></li>
			<li id= "<?php if ($pageTitle == "Associates") {echo "home";}?>"><a href="<?php echo BASE_URL; ?>associates/">Associates</a></li>
			<li id= "<?php if ($pageTitle == "Shifts") {echo "home";}?>"><a href="<?php echo BASE_URL; ?>shifts/">Add Shift</a></li>
			<li id= "<?php if ($pageTitle == "Time Off") {echo "home";}?>"><a href="<?php echo BASE_URL; ?>timeoff/">Time Off</a></li>
			<li id= "<?php if ($pageTitle == "Points Tracking") {echo "home";}?>"><a href="<?php echo BASE_URL; ?>points/">Points</a></li>
		</ul>
</div><!-- End of Nav -->