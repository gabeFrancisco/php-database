<?php
require_once('db/connection.php');

$sql = "SELECT * from register";

$conn = newConnection('universe_god');
$result = $conn->query($sql);

$registers = [];

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		$registers[] = $row;
	}
} else if($conn->error){
	echo 'Erro: ' . $conn->error;
}

foreach($registers as $register){
	echo $register['fullname'] . '<br>';
}

?>

<div class="content">
	<table>
		<thead>
			<th>Id</th>
			<th>Fullname</th>
			<th>Birth Date</th>
			<th>Email</th>
			<th>Website</th>
			<th>Number of children</th>
			<th>Salary</th>
		</thead>
		<tbody>
			<?php foreach($registers as $register): ?>
				<tr>
					<td><?= $register['id'] ?></td>
					<td><?= $register['fullname'] ?></td>
					<td><?= date('d/m/Y', strtotime($register['birthDate'])) ?></td>
					<td><?= $register['email'] ?></td>
					<td><?= $register['site'] ?></td>
					<td><?= $register['children'] ?></td>
					<td><?= $register['salary'] ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>