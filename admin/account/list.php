<?php
$query = mysql_query("select * from admin");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<button class="btn-addAccount" onClick="location.href='?view=register'">Add Account</button></br></br>
<br><?=$message;?>

<table class="tableaccount">
	
	<tr>
		<th>Username</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Level</th>
		<th></th>
		<th></th>
	</tr>
		
	<?php
		while($row=mysql_fetch_array($query)){
	?>	
		
	<tr>
		<td><?=$row['username']?></td>
		<td><?=$row['fname']?></td>
		<td><?=$row['lname']?></td>
		<td><?=$row['level']?></td>
		<td style="width:5%;"><button class="button deletebtn" onClick="location.href='process.php?action=delete&id=<?=$row['Id']?>'">Delete</button></td>
		<td style="width:5%;"><button class="button updatebtn" onClick="location.href='?view=update&id=<?=$row['Id']?>'">Update</button></td>
	</tr>
	<?php
		}
	?>
</table>