<!DOCTYPE html>
<!-- results.php        -->

<html lang="en">
   <head>
      <title>Database Search Results</title>
      <link rel="stylesheet" type="text/css" href="css/form.css" />
   </head>
   <body >
      <?php
      		
      		require 'dbconnector.php';
        $_POST['query'];
        //print( $query);
        
         
         //$query = mysqli_real_escape_string ( $database, $_POST['query']);
         //print ($query);
         
         
         // What to print if the query is empty.
         if ( empty($query) )
         	$query = "Select * from Parts";
      		
         
         if ( !( $result = mysqli_query( $database, $query ) ) ) 
         {
           	print( "<h2>Major Error:</h2> <br>" );
           	print( "A SQL Exception occured while interacting with the ");
           	print( "suppliers/parts/jobs/shipment database.<br /><br />" );
           	print( "The error message was: <br />");
           	print( "<b>" );
           	print( mysqli_error( $database ) );
           	print( "</b>" );
           	print( "<br> Please Try Again Later<br>" );
        	
     	}
     	else
     	{
         	?>
    		<h3 style = "color: blue"> 
  			Database Search Results</h3>
      		<table border = "1" cellpadding = "3" cellspacing = "3"
         		style = "background-color: #00FFFF">  
        
 			<?php
			// fetch meta-data
			$metadata = mysqli_fetch_fields( $result);
			print("<tr>");
			for ($i=0; $i<count($metadata); $i++){
			print("<td>");
			printf("%s",$metadata[$i]->name);
			print("</td>");
		}
		print("</tr>");

	    // fetch each record in result set
        for ( $counter = 0; $row = mysqli_fetch_row( $result ); $counter++ )
        {
			// build table to display results
           	print( "<tr>" );

            foreach ( $row as $key => $value ) 
              print( "<td>$value</td>" );

            print( "</tr>" );
        }
        mysqli_close( $database );
    }
    ?>
    		</table>
    		
    	<div class = 'login'  >
		<form method = "post" action = "query.php" name = "login">
		<input type = "submit" value = "Return to Main Page" />
		<input type ="hidden" name = "psswrd" value = "<?php echo $psswrd?>" >
   		<input type ="hidden" name = "username" value = "<?php echo $username?>" >
   		
		</form>
	</div>
</body>
</html>