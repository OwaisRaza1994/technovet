<script src="dum.js"></script>
<?php
$conn = new mysqli("localhost", "root", "root", "sessional2");

$sql = "SELECT * FROM final";
$result = $conn->query($sql);


    echo "<div id=\"tables\"><table>
    	<tr>
    		<th>ID</th>
    		<th>First Name</th>
    		<th>Last Name</th>
            <th>DELETE</th>
            <th>UPDATE</th>
    		
    	</tr></div>";
    
    	while($row = $result->fetch_assoc()) {
        	echo "<tr>
        		<td>".$row["id"]."</td>
        		<td>".$row["first_name"]."</td>
        		<td>".$row["last_name"]."</td>
        		<td>"."<a href=\"#\"  onclick=\"DelUser($row[id])\">Delete</a>"."</td>
        		<td>"."<a href=\"#\"  onclick=\"UpdateUser($row[id])\">Update</a>"."</td>
        	</tr>";
    	}
    echo "</table></div>";

$conn->close();
?>