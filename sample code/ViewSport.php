<html>
<body> 

<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student88-35303137e789", "ua92-studentAc", "student88-35303137e789");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>All courses</h3>
	
		<table>
		
			<tr>
				<th width="150px">soid<br><hr></th>
				<th width="250px">soname<br><hr></th>
                <th width="250px">tim<br><hr></th>
                <th width="250px">tid<br><hr></th>
                <th width="250px">cid<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT soid,soname,tim,tid,cid FROM so1");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['soid']}</th>
				<th>{$row['soname']}</th>
                <th>{$row['tim']}</th>
                <th>{$row['tid']}</th>
                <th>{$row['cid']}</th>
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

