<meta charset="utf-8">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="course.css">
     <script src="app.js"></script>

<?php
//include('menu.php');
include_once('header.php');
include("connection.php");

error_reporting(0);
$query="SELECT * FROM `course`";
$data=mysqli_query($connect,$query);
$total=mysqli_num_rows($data);


if($total !=0)
{
	?>
	
	<table>
	  <tr>
		
     </tr>
	
	
	 <table class="styled-table">
   			 <thead>
      	<tr>
        <th>Course</th>
		<th>DOB</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone Number</th>
		
      	</tr>
   	 	</thead>	
	

	
		<?php
	
	while($result=mysqli_fetch_assoc($data))
	{
       echo "<tr class='success'>
		      <td>".$result["course"]."</td>
		      <td>".$result["date_of_birth"]."</td>
		      <td>".$result["name"]."</td>
			  <td>".$result["email"]."</td>
			  <td>".$result["phone"]."</td>
			  
			  
     </tr>";
	}
	
}




?>

</table>

