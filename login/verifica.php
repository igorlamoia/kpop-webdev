<?php include "../alerta.php"; ?>
<form method="POST" action="busca.php">
		<?php
		$nome 			 = $_POST['nome'];
		$senha 			 = $_POST['senha'];
		$erro 			 = 0;

		echo $nome.$senha."aqui";
	exit;
				include "insere.php";
		?>

	</body>

</html>