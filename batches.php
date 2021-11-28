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
$query="SELECT * FROM courses";
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
        <th>School</th>
		<th>branch</th>
		<th>Name</th>
		<th>Price</th>
		
      </tr>
    </thead>	
	
	
	
	<?php
	
	while($result=mysqli_fetch_assoc($data))
	{
       echo "<tr class='success'>
		      <td>".$result["school"]."</td>
		      <td>".$result["branch"]."</td>
		      <td>".$result["name"]."</td>
			  <td>".$result["price"]."</td>
			  
     </tr>";
	}
	
}




?>



