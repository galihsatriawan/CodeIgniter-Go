<!-- <table border="1">
	<tr>
		<th>das</th>
		<th>oke</th>
	</tr>
	<tr>
		<td>1</td>
		<td>2</td>
		<td>3</td>
	</tr>
	<tr>
		<td>A</td>
		<td>B</td>
		<td>C</td>
		<td>D</td>
	</tr>
</table> -->
<?php 
// print_r($staff)
?>
<table border="1">
	<tr>
		<?php 
			foreach($staff[0] as $field=>$value ){
				// echo "$field _ $value <br>";
				echo "<th> $field </th>";
			}
		?>
	</tr>
	<?php
		foreach ($staff as $row) {
			# code...
			echo "<tr>";
				foreach ($row as $data) {
					echo "<td> $data </td>";
				}
			echo "</tr>";
		}
	?>
</table>

