<html>
   <head>
      <title>Connect to MariaDB Server</title>
   </head>

   <body>
    <?php
        $dbhost = 'mysql:host=classdb.it.mtu.edu;port=3307;dbname=fisforsuccess';
        $dbuser = 'fisforsuccess_rw';
        $dbpass = 'success123';
        try {
		$dbconnect = new PDO($dbhost, $dbuser, $dbpass);
       		echo 'Connected successfully';

		// Set the table formatting.
		echo "<table border = '1'>";
		echo "<TR>";
		echo "<TH> Post ID </TH>";
		echo "<TH> Name of Post </TH>";
		echo "<TH> Date </TH>";
		echo "<TH> Username</TH>";
		echo "</TR>";
		foreach($dbconnect->query("SELECT ID, name, date, username FROM post") as $row){		
		echo "<TR>";
		echo "<TD>" . $row[0] . "</TD>";
		echo "<TD>" . $row[1] . "</TD>";
		echo "<TD>" . $row[2] . "</TD>";
		echo "<TD>" . $row[3] . "</TD>";
		echo "</TR>";
		
	}
		echo "</table>";
		echo '</br>';
}
	catch (PDOException $error) {
		die("ERROR: " . $error . "<br/>");
    	}
	?>
    </body>
</html>
