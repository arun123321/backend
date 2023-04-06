<html>
<body> 

<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student88-35303137e789", "ua92-studentAc", "student88-35303137e789");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Students</h3>
	
		<table>
		
			<tr>
				<th width="150px">Student ID<br><hr></th>
				<th width="250px">Student Name<br><hr></th>
                <th width="250px">last name<br><hr></th>
                <th width="250px">address<br><hr></th>
                <th width="250px">phone<br><hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT sid,sname,lname,address,phone FROM s1");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['sid']}</th>
				<th>{$row['sname']}</th>
                <th>{$row['lname']}</th>
                <th>{$row['address']}</th>
                <th>{$row['phone']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

