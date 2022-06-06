  <?php

    header('Content-Type: text/html; charset=utf-8');
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {         
		echo "recebido um POST";
		if ((isset($_POST['nome'], $_POST['valor'], $_POST['hora']))) {
			print_r ( $_POST );			
			file_put_contents("files/".$_POST['nome']."/valor.txt",$_POST['valor']);
			file_put_contents("files/".$_POST['nome']."/hora.txt",$_POST['hora']);
			}
		else {
			echo "Parâmetros recebidos não são válidos";
		}
	}
	elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
		echo "recebido um GET";
	}
	else {
		echo "metodo nao permitido";
	}
	
	
  ?>