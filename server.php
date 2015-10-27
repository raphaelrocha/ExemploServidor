<?php 
header ('Content-type: text/html; charset=UTF-8');



if(isset($_POST['method'])){

	if(strcmp('object', $_POST['method']) == 0){
		$method = $_POST['method'];
		$dados = $_POST['data'];
		$mensagem_para_enviar = "MEDOTO: ".$method." | DADOS: ".$dados;
		echo json_encode(array('mensagem'=>$mensagem_para_enviar));
	}

	else if(strcmp('array', $_POST['method']) == 0){
		$method = $_POST['method'];
		$dados = $_POST['data'];
		$mensagem_para_enviar = "METODO: ".$method." | DADOS: ".$dados;

		$array = array();
		array_push($array, array('mensagem'=>$mensagem_para_enviar)); 
		
		$array_final = array();
		array_push($array_final, $array);
		echo json_encode($array);
	}

	else{
		echo "erro no methos";
	}

}else{
	echo "erro geral";
}

 ?>