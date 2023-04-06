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
				<th width="150px">coid<br><hr></th>
				<th width="250px">coname<br><hr></th>
                <th width="250px">sdate<br><hr></th>
                <th width="250px">edate<br><hr></th>
                <th width="250px">cid<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT coid,coname,sdate,edate,cid FROM co1");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['coid']}</th>
				<th>{$row['coname']}</th>
                <th>{$row['sdate']}</th>
                <th>{$row['edate']}</th>
                <th>{$row['cid']}</th>
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

