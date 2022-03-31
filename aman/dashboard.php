<?php 

session_start();
include "db_conn.php";

$id = $_SESSION['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 30px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0px;
  overflow: hidden;
  background-color: black;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
 font-size:20px;
  text-align: center;
  padding: 10px 20px;
  text-decoration: none;
}
.active{
background-color: black;
color: white;
}
li a:hover {
  color: white;
}

</style>

</head>
<body>

<ul>
	<label style="color: white; font-size: 30px ; margin-left: 5px;">Dashboard</label>

  <li><a class="active" href="logout.php">Logout</a></li>
</ul>



	<table id="customers">
		<tr>
			<th>Full-Name</th>
			<th>Email-Address</th>
			<th>Course Name</th>
			<th>Gender</th>
			<th>Phone No.</th>
			<th>Address</th>
		</tr>
<?php 

$sql = "SELECT * FROM users where id = '$id'";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result)){

?>
		<tr>
			<td><?= $row['fname']?> <?= $row['lname']?></td>
			<td><?= $row['email']?></td>
			<td><?= $row['course']?></td>
			<td><?= $row['gender']?></td>
			<td><?= $row['phone']?></td>
			<td><?= $row['address']?></td>
		</tr>
		<?php } ?>
	</table>

</body>
</html>