
<?php
include("connection.php");

$name= $_POST['namecol'];
$user= $_POST['usercol'];
$status= $_POST['statuscol'];

//$dupesql = "SELECT 'name' FROM table where (name = '$name' )";

//$duperaw = mysql_query($dupesql);

//if (mysql_num_rows($duperaw) > 0) {

$sql ="insert into  crud (name,user,status) values ('".$name."','".$user."','".$status."')";

mysqli_query($conn,$sql);

$last_id = $conn->insert_id;

echo '<tr class="table-row" id="table-row-'.$last_id.'">
	 <td>'.$last_id.'</td>
<td id="name-'.$last_id.'" class="valid" contenteditable="true" onblur="saveToDatabase(this,name,'.$last_id.')" onclick="showEdit(this);">'.$_POST['namecol'].'</td>

<td id="user-'.$last_id.'" class="valid" contenteditable="true" onblur="saveToDatabase(this,user,'.$last_id.')" onclick="showEdit(this);">'.$_POST['usercol'].'</td>

<td id="status-'.$last_id.'" class="valid">'.$_POST['statuscol'].'</td>

       <td><a class="ajax-action-links" onclick="deleteRecord('.$last_id.');">Delete</a></td>
		
      </tr>';
      /*
}
else
{
	alert("Hello world!");
	return;
}
*/
?>

