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
<h1>Associate Search</h1>

		<form id="associatesearch" action="./" method="get">
			<input class="search-bar" type="text" name="name" value="<?php if($name != ""){echo htmlspecialchars($name);} ?>">
			<input class="associate-submit-button" type="submit" value="Search">
		</form>
</div>

</div><!-- End of Main -->

<?php include(ROOT_RATH  . 'include/footer.php');?> 
