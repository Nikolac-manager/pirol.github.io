<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Социальный опрос населения | Присланная, вами информация</title>
</head>
<body>
	<h1>Отправленная Вами информация</h1>
	<table>
		<?foreach($_POST as $key => $value) {?>
			<tr>
				<td><?=$key?> = </td>
				<td><?=$value?></td>
			</tr>
		<?}?>
	</table>
</body>
</html>
