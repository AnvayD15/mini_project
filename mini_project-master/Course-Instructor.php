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
$query="SELECT * FROM `courseinstructor`";
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
        <th>Instructor</th>
		    <th>Batch Timings</th>
		    <th>CarType</th>
        <th>Customer Name</th>
		
		
      </tr>
    </thead>	
	
	
	
        <?php
        
            while($result=mysqli_fetch_assoc($data))
            {
                echo "<tr class='success'>
                    <td>".$result["instructor"]."</td>
                    <td>".$result["batchtimings"]."</td>
                    <td>".$result["cartype"]."</td>
                  <td>".$result["customer"]."</td>
                  
              </tr>";
            }
            
          }




            ?>
</table>
<div class="container mt-3">
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $instructor = $_POST['instructor'];
        $cartype = $_POST['cartype'];
        $customer = $_POST['customer'];
        $batchtimings = $_POST['batchtimings'];
        


        
      
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
        $sql = "INSERT INTO `courseinstructor` (`instructor`, `cartype`, `customer`, `batchtimings` ) VALUES ('$instructor', '$cartype', '$customer' , '$batchtimings' )";
        $result = mysqli_query($connect, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        header("location:Course-Instructor.php");
        }
        

      }

    }

    
?>
<div class="contents">
  <form action="Course-Instructor.php" method="post">
        <div class="form">
          <label for="instructor">Instructor</label>
          <select name="instructor" id="instructor">
            <option value="none">Instructor</option>
            <option value="Manoj">Manoj</option>
            <option value="Mahindra">Mahendra</option>
            <option value="Sahil">Sahil</option>
            <option value="Mayank">Mayank</option>
          </select>
        </div>
        <div class="form-1">
          <label for="cartype">Car Type</label>
          <select name="cartype" id="cartype">
            <option value="none">Car Type</option>
            <option value="Sedan">Sedan</option>
            <option value="Hatchback">Hatchback</option>
            <option value="SUV">SUV</option>
          </select>
        </div>
        <div class="form-2">
          <label for="batchtimings">Batch Timings</label>
          <select name="batchtimings" id="batchtimings">
            <option value="none">-------------</option>
            <option value="8am-9am">8am-9am</option>
            <option value="9am-10am">9am-10am</option>
            <option value="11am-12pm">11am-12pm</option>
            <option value="4pm-5pm">4pm-5pm</option>
            <option value="5pm-6pm">5pm-6pm</option>
            <option value="8pm-9pm">8pm-9pm</option>
            <option value="9pm-10pm">9pm-10pm</option>
          </select> 
        </div>
        <div class="form-3">
          <label for="customer">Customer</label>
          <select name="customer" id="customer">
            <option value="none">----Select----</option>
            <?php
        include "connection.php";  // Using database connection file here
        $records = mysqli_query($connect, "SELECT fname From customer");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['fname'] ."'>" .$data['fname'] ."</option>";  // displaying data in option menu
        }	
    ?>  
          </select>
        </div>
        <button type="submit" class="submit-btn">Submit</button>
  </form>
  </div>