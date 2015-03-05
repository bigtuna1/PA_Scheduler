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
		
		<table id="associate_search">
			<tr>
				<th>Associate Name</th>
				<th>Current Status</th>
				<th>Start Date</th>
				<th>Primary Phone</th>
				<th>Secondary Phone</th>
			</tr>	
			<tr>
				<td><a href="associate.php">   Robo</a></td>
				<td>Current</td>
				<td>3/4/2015</td>
				<td>734-198-7348</td>
				<td> </td>			
			</tr>
			
		</table>
</div>

</div><!-- End of Main -->

<?php include(ROOT_RATH  . 'include/footer.php');?> 
