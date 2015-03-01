<?php
require_once('../include/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = trim($_POST["name"]);
$start_date = trim($_POST["start_date"]);
$phone_number = trim($_POST["phone_number"]);
$monday = ($_POST["monday"]);
$tuesday = ($_POST["tuesday"]);
$wednesday = ($_POST["wednesday"]);
$thursday = ($_POST["thursday"]);
$friday = ($_POST["friday"]);
$saturday = ($_POST["saturday"]);
$sunday = ($_POST["sunday"]);

if (trim($name) == "" OR trim($start_date) == "" OR trim($phone_number) == ""){
	$error_message =  "You must specify a value for the name, email, and message";
}

if (!isset($error_message)){
	foreach($_POST as $value){
		if(stripos($value,'Content-Type:')!== FALSE){
			$error_message =  "There was a problem with the information you entered";
		}}}

if ( !isset($error_message) && $_POST["address"] != ""){
	$error_message =  "Your form submission has an error";
	}


// TODO:  Add to Database
if (!isset($error_message)){
    echo "HELLO"; 
	header("Location:" . BASE_URL.  "associate/?status=entered");
	exit;
}
}

$pageTitle = "Associates";
include(ROOT_RATH . 'include/header.php');
?>
<div id="main"><!-- Beginning of Main -->

<?php if (isset($_GET["status"]) AND $_GET["status"] ==  "entered"){ ?>
			<p>Assoicate Information Entered!!!!</p>
			</br>
			<a href="<?php echo BASE_URL; ?>associate/">Add Another Associate</a>
			<a href="<?php echo BASE_URL; ?>#">See associates Schedule</a> 
			<?php
			
	} else {?>

</br></br>
<h2>Add New Associates</h2>

<?php if(isset($error_message)){echo '<p> ' . $error_message . '</p>';}?>

<div>
	<form class ="associateform" method = "post" action="<?php echo BASE_URL; ?>associate/">
		<table>
			<tr>
				<th><label for="name">Associate Name (JDE)</label></th>
				<td><input type="text" name="name" id="name" value="<?php if(isset($name)){echo htmlspecialchars($name);}?>">
				</td>
			</tr>
			<tr>
				<th><label for="start date">Start Date</label></th>
				<td><input type="text" name="start_date" id="start_date" value="<?php if(isset($start_date)){echo htmlspecialchars($start_date);}?>"></td>
			</tr>
			<tr>
				<th><label for="phone number">Phone Number</label></th>
				<td><input type="text" name="phone_number" id="phone_number" value="<?php if(isset($phone_number)){echo htmlspecialchars($phone_number);}?>"></td>
			</tr>
			<tr style="display: none";>
				<th><label for="phone number">Address</label></th>
				<td><input type="text" name="address" id="address"></td>
			</tr>
			<tr>
				<th><label for="monday">Monday</label></th>
				<td><select name="monday" id="monday">
					  <option VALUE="off">Off</option>
					  <option VALUE="night" <?php if(isset($monday) && $monday == "night"){echo "selected";}?>>Night</option>
					  <option VALUE="day" <?php if(isset($monday) && $monday == "day"){echo "selected";}?>>Day</option>
					  <option VALUE="eve" <?php if(isset($monday) && $monday == "eve"){echo "selected";}?>>Eve</option>
				</td></select>
			</tr>
			<tr>
				<th><label for="tuesday">Tuesday</label></th>
				<td><select name="tuesday" id="tuesday">
					  <option VALUE="off">Off</option>				
					  <option VALUE="night" <?php if(isset($tuesday) && $tuesday == "night"){echo "selected";}?>>Night</option>
					  <option VALUE="day" <?php if(isset($tuesday) && $tuesday == "day"){echo "selected";}?>>Day</option>
					  <option VALUE="eve" <?php if(isset($tuesday) && $tuesday == "eve"){echo "selected";}?>>Eve</option>
				</td></select>
			</tr>
  			<tr>
				<th><label for="wednesday">Wednesday</label></th>
				<td><select name="wednesday" id="wednesday">
						<option VALUE="off">Off</option>
					  <option VALUE="night" <?php if(isset($wednesday) && $wednesday == "night"){echo "selected";}?>>Night</option>
					  <option VALUE="day" <?php if(isset($wednesday) && $wednesday == "day"){echo "selected";}?>>Day</option>
					  <option VALUE="eve" <?php if(isset($wednesday) && $wednesday == "eve"){echo "selected";}?>>Eve</option>
				</td></select>
			</tr>
			<tr>
				<th><label for="thursday">Thusrday</label></th>
				<td><select name="thursday" id="thursday">
					  <option VALUE="off">Off</option>				
					  <option VALUE="night" <?php if(isset($thursday) && $thursday == "night"){echo "selected";}?>>Night</option>
					  <option VALUE="day" <?php if(isset($thursday) && $thursday == "day"){echo "selected";}?>>Day</option>
					  <option VALUE="eve" <?php if(isset($thursday) && $thursday == "eve"){echo "selected";}?>>Eve</option>
				</td></select>
			</tr>
			<tr>
				<th><label for="friday">Friday</label></th>
				<td><select name="friday" id="friday">
					  <option VALUE="off">Off</option>				
					  <option VALUE="night" <?php if(isset($friday) && $friday == "night"){echo "selected";}?>>Night</option>
					  <option VALUE="day" <?php if(isset($friday) && $friday == "day"){echo "selected";}?>>Day</option>
					  <option VALUE="eve" <?php if(isset($friday) && $friday == "eve"){echo "selected";}?>>Eve</option>
				</td></select>
			</tr>
			<tr>
				<th><label for="saturday">Saturday</label></th>
				<td><select name="saturday" id="saturday">
					  <option VALUE="off">Off</option>				
					  <option VALUE="night" <?php if(isset($saturday) && $saturday == "night"){echo "selected";}?>>Night</option>
					  <option VALUE="day" <?php if(isset($saturday) && $saturday == "day"){echo "selected";}?>>Day</option>
					  <option VALUE="eve" <?php if(isset($saturday) && $saturday == "eve"){echo "selected";}?>>Eve</option>
				</td></select>
			</tr>
			<tr>
				<th><label for="sunday">Sunday</label></th>
				<td><select name="sunday" id="sunday">
					  <option VALUE="off">Off</option>				
					  <option VALUE="night" <?php if(isset($sunday) && $sunday == "night"){echo "selected";}?>>Night</option>
					  <option VALUE="day" <?php if(isset($sunday) && $sunday == "day"){echo "selected";}?>>Day</option>
					  <option VALUE="eve" <?php if(isset($sunday) && $sunday == "eve"){echo "selected";}?>>Eve</option>
				</td></select>
			</tr> 
		</table>

		<input class="submit-button" TYPE="submit" value="submit">
	</form>

</div>
<?php } ?>	

</div><!-- End of Main -->

<?php include(ROOT_RATH  . 'include/footer.php');?> 
