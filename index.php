<!DOCTYPE html>
<html>
	<head/>
		<meta charset="UTF-8">
		<title>second_task</title>
	</head>

	<body>

		<!-- Создаем форму с пересылом в дерикторию с скриптом для обработки данных -->
		<p>
		<form action="values.php" method="post">
		<p>Значение M: <input type="integer" name="M"><br></p>
		<p>Значение N: <input type="integer" name="N"><br></p>
		<p><input type='submit' value='Отправить'></p>
		</form>
		</p>

		<?php
			if($_SERVER['REQUEST_METHOD'] == 'POST') {		 //Убедилсь что отправили
  														// использвовалии метод ПОСТ
				$M = $_POST['M'];
				$N = $_POST['N'];  // Внесли в переменные 

				echo $M;
				echo $N;

			}
			?>
	</body>
</html>
