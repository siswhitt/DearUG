<html>
   <head>
   <script type = "text/javascript">
   function active() {
	   var search_bar = document.getElementById("searchBox");
	   if(search_bar.value == 'Search...') {
		   search_bar.value = ''
		   search_bar.placeholder = "Search..."
	   }
   }
   
  function inactive() {
	   var search_bar = document.getElementById("searchBox");
	   if(search_bar.value == 'Search...') {
		   search_bar.value = ''
		   search_bar.placeholder = "Search..."
	   }
   }
   
   </head>
   <body>   
   
   <form action = "" method = "" id = "searchForm"/>
   <input type = "text" name = "in" id = "searchBox" placeholder = "" value = "Search..." maxlength = "25" autocomplete = "off" onMouseEnter = "active()">
   </form>
   	
<?php
        $dbhost = 'mysql:host=classdb.it.mtu.edu;port=3307;dbname=fisforsuccess';
        $dbuser = 'fisforsuccess_rw';
        $dbpass = 'success123';
        try {
			$dbconnect = new PDO($dbhost, $dbuser, $dbpass);
			echo 'Connected successfully';
			$query = mysql_query("select t.tagName, p.description, p.name, u.usernam
			from tags t inner join post p inner join user u
			where p.description like '%$in%'
			or t.tagName like '%$in%'
			or u.username like '%$in%'");

			$num_rows = mysql_num_rows($query);
			while($row = mysql_fetch_array($query)) {
                $PostID = $row['PostID'];
                $TagID = $row['TagID'];
                $TagName = $row['TagName'];
                echo $PostID . $TagID . $TagName . '<br/>';
                }
        }
        catch(PDOException $error){
			die("ERROR: " . $error . "<br/>");
        }
			

?>

   </body>
</html>