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
    $quest='http://university.netology.ru/u/lgolovina/phone/phone.json';
    $resp=file_get_contents($quest);
    $json=json_decode($resp, true);
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