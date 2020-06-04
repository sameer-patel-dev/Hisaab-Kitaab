	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
	include_once("./database/constants.php");
	$con = mysqli_connect("localhost","root",""); 
	mysqli_select_db($con, "project_inv");
	if(isset($_SESSION['Username']))
	{
		$table = $_SESSION["Username"];
		$login = "select * from $table";
		$loginresult = mysqli_query($con, $login);
		// while($row = mysqli_fetch_array($loginresult))   
		// {   
		// 	echo $row['customerName'] . " " . $row['subTotal'];   echo "<br />";   
		// }
		?>
		<table class="table table-hover">
		  <thead class="thead-dark">
		    <tr>
		      <th>Customer Name</th>
		      <th>Sub Total</th>
		      <th>Paid</th>
		      <th>Due</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		      if( mysqli_num_rows( $loginresult )==0 ){
		        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
		      }else{
		        while( $row = mysqli_fetch_assoc( $loginresult ) ){
		          echo "<tr scope='row'><td>{$row['customerName']}</td><td>{$row['netTotal']}</td><td>{$row['paid']}</td><td>{$row['due']}</td></tr>\n";
		        }
		      }?>
		  </tbody>
		</table>
		<?php
	}
mysqli_close($con); 
?>



