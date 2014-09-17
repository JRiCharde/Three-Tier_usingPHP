<!DOCTYPE html>
<!-- query.php        -->

<html lang="en">
   <head>
      <title>Database Query Page</title>
      <link rel="stylesheet" type="text/css" href="css/form.css" />
   </head>
   
   
      <?php	/*
         extract( $_POST );
         
         // Connect to MySQL
         if ( !( $database = mysqli_connect( "localhost:3306", 
            $username, $psswrd, "project5" ) ) )
            die( "Could not connect to database" );
         else
         {
         //var_dump($database);*/
         require 'dbconnector.php';
         if ( $database )
         {
         ?>
         <div class = 'container'>
	<div class = 'header'>
		<h2>CNT 4714 - Supplier, Parts, Jobs, Shipments Database Client</h2>
	</div>
	
	<div class = 'login'  >
		<form action = "login.html" >
			<h3>Welcome:</h3>
			<h4><?php echo "$username";?></h4>
			<input type = "submit" value = "Logout" />
		</form>
	</div>
   <body >
    
          	<form action = "results.php"  method = "post">
   
   				<div class='query' >
					<label for='queryArea' >Enter SQL query</label><br/>
					<textarea style="background-color: lightyellow" name="query"  
				 		rows="10" cols="100" ></textarea><br/>
				</div>
   
   		<input type = "submit" value = "Execute Command" />
   		<input type="reset" value="Clear Form"/>
   		<input type ="hidden" name = "psswrd" value = "<?php echo $psswrd?>" >
   		<input type ="hidden" name = "username" value = "<?php echo $username?>" >
   		
		</form>
         <?php 
         }
         /*
         $sql = "SELECT * FROM parts";
			$result = mysqli_query($database, $sql);
		//fetch tha data from the database
		 while ($row = mysqli_fetch_array($result)) {
   		 echo "Info:".$row{0}."<br>";
   		 }	*/
         ?>
         
    </body>
    
</html>