<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../CSS/styleTable.css"/>  
<!-- <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style> -->
</head>
<body>

<h3>Registered Courses For Spring 2021</h3>
<div class="column">
<table class="styled-table">  
  <tr>  
    <th>Course</th> 
    <th>Time</th>   
  </tr>  
  <?php   
  $data = file_get_contents("../data.json");  
  $data = json_decode($data, true);  
  foreach($data as $row)  
  {  
         echo '<tr>
         <td>'.$row["course"].'</td>
         <td>'.$row["time"].'</td>
         </tr>';  
  }  
  ?>  
                     </table> 
</div>


</body>
</html>
