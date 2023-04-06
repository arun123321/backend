<html>
<body> 

<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student88-35303137e789", "ua92-studentAc", "student88-35303137e789");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">Parent ID<br><hr></th>
				<th width="250px">Parent Name<br><hr></th>
                <th width="250px">last name<br><hr></th>
                <th width="250px">address<br><hr></th>
				<th width="250px">email<br><hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT pid,pname,lname,address,email FROM p1");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['pid']}</th>
				<th>{$row['pname']}</th>
                <th>{$row['lname']}</th>
				<th>{$row['address']}</th>
				<th>{$row['email']}</th>
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

