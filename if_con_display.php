<?php 
$sql = "SELECT * from lab_registry where galen_url_name='".$galen_url_name."' and verification_status='Verified'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
$id=$row['id'];
$available_time=$row['available_time'];
?>

<?php if ($available_time != '') { ?>
				<p style="font-size:15px;font-weight:500;color:green;"><b>Lab Available Time:</b> <?php echo $available_time; ?></p>
				<?php } ?>
