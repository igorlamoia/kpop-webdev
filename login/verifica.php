<form method="POST" action="busca.php">
	<?php
	$email 			 = $_POST['email'];
	$senha 			 = $_POST['senha'];
	$erro 			 = 0;
	echo "eu";
	echo $email . $senha . "aqui";
	exit;
	include "insere.php";
	?>

	</body>

	</html>