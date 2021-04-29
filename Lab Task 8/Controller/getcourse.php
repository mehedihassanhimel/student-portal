<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

/* th {text-align: left;} */
</style>
</head>
<body>

<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','','myDB');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax");
// $sql="SELECT * FROM courseBySemester WHERE semesterID= '".$q."'";
// $sql = "SELECT * FROM coursebysemester WHERE semesterID='Summer 19-20'";
$sql = "SELECT * FROM coursebysemester WHERE semesterID='".$q."'";
// $sql="SELECT * FROM courseBySemester WHERE ID = 2";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Semester</th>
<th>Course</th>
<th>Grade</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['semesterID'] . "</td>";
  echo "<td>" . $row['courseName'] . "</td>";
  echo "<td>" . $row['grade'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>