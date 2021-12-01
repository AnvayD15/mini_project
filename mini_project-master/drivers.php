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
$query="SELECT * FROM customer";
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
        <th>First name</th>
		<th>Last name</th>
		<th>Email</th>
		<th>Gender</th>
		<th>DOB</th>
    <th>Courses</th>
    <th>Phone Number</th>
    <th>Action</th>
      </tr>
    </thead>	
	
	
	
	<?php
	
	while($result=mysqli_fetch_assoc($data))
	{
       echo "<tr class='success'>
		      <td>".$result["fname"]."</td>
		      <td>".$result["lname"]."</td>
		      <td>".$result["email"]."</td>
			    <td>".$result["gender"]."</td>
          <td>".$result["date_of_birth"]."</td>
          <td>".$result["course"]."</td>
          <td>".$result["phone"]."</td>
          <td><a href='delete.php?id=" . $result["id"] . "' >delete</a></td>
			  
     </tr>";
	}
	
}
?>

<!doctype html>
<html lang="en">
  
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['lname'];
        $degc = $_POST['gender'];
        $debc = $_POST['date_of_birth'];
        $cor = $_POST['course'];
        $phno = $_POST['phone'];
        


        
      
		include("connection.php");

      // Create a connection
     // $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$connect){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `customer` (`fname`, `lname`, `email`, `gender` , `date_of_birth`,`course`,`phone`) VALUES ('$name', '$desc', '$email' , '$degc' , '$debc' ,'$cor' , '$phno')";
        $result = mysqli_query($connect, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        header("location:drivers.php");
        }
        

      }

    }

    
?>
<a class="text-head">Add New Records</a>
<div class="contents mt-3">
    <form action="drivers.php" method="post">
    <div class="form-group">
        <label for="name">First Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    </div>

	<div class="form-group-1">
        <label for="email">Last name</label>
        <input type="text" name="lname" class="form-control" id="lname" aria-describedby="emailHelp"> 
       
    </div>

    <div class="form-group-2">
        <label for="email">Email Address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"> 
      
    </div>
    <div class="form-group-3">
        <label for="gender"> Select you gender</label>
        <select name="gender" id="gender" aria-describedby="genderHelp">
          <option value="none" selected>Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">other</option>
        </select>
      
    </div>
    <div class="form-group-4">
        <label for="date_of_birth">Date Of birth</label>
        <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" aria-describedby="emailHelp"> 
      
    </div>
    <div class="form-group-5">
      <label for="course">Courses Seletced</label>
      <select name="course" id="course" aria-describedby="genderHelp">
											<option value="none" selected>  </option>
											<option value="Lessons">Lessons</option>
											<option value="Lisence+Lessons">Licence+Lessons</option>
											<option value="Lisence">Licence</option>
									</select> 
    </div>
    <div class="form-group-6">
      <label for="phone">Phone Number</label>
      <input type="phone" name="phone" class="form-control" id="phone">
    </div>
    
    <button type="submit" class="submit-btn">Submit</button>
    </form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>









