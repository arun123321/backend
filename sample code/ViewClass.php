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
				<th width="150px">Class ID<br><hr></th>
				<th width="250px">Class Name<br><hr></th>
                <th width="250px">capacity<br><hr></th>
                <th width="250px">sdate<br><hr></th>
				<th width="250px">edate<br><hr></th>
                <th width="250px">tid<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT cid,cname,capacity,sdate,edate,tid FROM c1");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['cid']}</th>
				<th>{$row['cname']}</th>
                <th>{$row['capacity']}</th>
                <th>{$row['sdate']}</th>
				<th>{$row['edate']}</th>
                <th>{$row['tid']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

