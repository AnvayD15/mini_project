<meta charset="utf-8">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="style.css">
     <script src="app.js"></script>

<?php
//include('menu.php');
include_once('header.php');
include("connection.php");

error_reporting(0);
$query="SELECT * FROM `courseinstructor`";
$data=mysqli_query($connect,$query);
$total=mysqli_num_rows($data);


if($total !=0)
{
	?>
	
	<table>
	  <tr>
		
     </tr>
	
	  <table class="table">
    <thead>
      <tr>
        <th>Instructor</th>
		<th>Course</th>
		<th>CarType</th>
        <th>Customer Name</th>
		
		
      </tr>
    </thead>	
	
	
	
	<?php
	
	while($result=mysqli_fetch_assoc($data))
	{
       echo "<tr class='success'>
		      <td>".$result["instructors"]."</td>
		      <td>".$result["courses"]."</td>
		      <td>".$result["carType"]."</td>
			  <td>".$result["customer"]."</td>
			  
     </tr>";
	}
	
}




?>



