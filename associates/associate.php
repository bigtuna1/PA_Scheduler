<?php
require_once('../include/config.php');
	
if (empty($_GET["name"])){
	$name = "ROB";
} else {
	$name = $_GET["name"];
}

$pageTitle = "Associates";
include(ROOT_RATH . 'include/header.php');
?>
<div id="main"><!-- Beginning of Main -->
<div class="associatenav">
<ul id="associatesbuttons">
	<a href="newassociate.php"><li>Add New Associate</li></a>
	<a href="#"><li>Associate Information</li></a>
</ul>
</div>

<div class="associatesearch">
<h1>Associate Information</h1>
		
<h2>Associate's Name</h2>
	<ul>
		<li>Associate Name</li>
		<li>Current Status</li>
		<li>Start Date</li>
		<li>Primary Phone</li>
		<li>Secondary Phone</li>
	</ul>

</div>

</div><!-- End of Main -->

<?php include(ROOT_RATH  . 'include/footer.php');?> 
