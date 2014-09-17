<?php
         
         if (isset( $_POST['username']) )
         	extract( $_POST );
         
         // Connect to MySQL
         if ( !( $database = mysqli_connect( "localhost:3306", 
            $username, $psswrd, "project5" ) ) )
            die( "Could not connect to database" );
?>