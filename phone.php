<!DOCTYPE html>
<html>
<head>
	<title>PHONE</title>
	<meta charset="UTF-8">
	<style>
   		table, tr, td { 
    	border: 1px solid black;
    	text-align: center;
   		}
 	</style>
</head>
<body>

<?php
    $data=file_get_contents(__DIR__.'/phonebook.json');
    $json=json_decode($data, true);
?>

<table>
	<thead>
		<tr>		
			<td><b>Имя</b></td>
			<td><b>Фамилия</b></td>
			<td><b>Адрес</b></td>
			<td><b>Номер телефона</b></td>
		</tr>
	</thead>
	<?php foreach ($json as $value) { ?>
		<tbody>
			<tr>				
				<td><?php echo $value['firstName'];?></td>
				<td><?php echo $value['lastName'];?></td>
				<td><?php echo $value['address'];?></td>
				<td><?php echo $value['phoneNumber'];?></td>
			</tr>
		</tbody>
    <?php } ?>
</table>

</body>
</html>