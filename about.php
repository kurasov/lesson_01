<!DOCTYPE>
<html lang="ru">
    <head>
        <title>kirill</title>
        <meta charset="utf-8">
    </head>
    <body>
		<?php
		$name = 'Кирилл';
		$age = '32';
		$mail = 'kurasov.code@gmail.com';
		$city = 'Москва';
		$about = 'что-то о себе'; ?>
		<table>
			<tr>
				<td>Имя</td>
				<td><?php echo $name; ?></td>
			</tr>
			<tr>
				<td>Возраст</td>
				<td><?php echo $age; ?></td>
			</tr>
			<tr>
				<td>Адрес электронной почты</td>
				<td><?php echo $mail; ?></td>
			</tr>
			<tr>
				<td>Город</td>
				<td><?php echo $city; ?></td>
			</tr>
			<tr>
				<td>О себе</td>
				<td><?php echo $about; ?></td>
			</tr>
		</table>
	</body>