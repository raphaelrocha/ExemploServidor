<?php 
header ('Content-type: text/html; charset=UTF-8');

if(isset($_POST['json'])){

	$json = json_decode($_POST["json"]);

	//if(strcmp('object', $_POST['method']) == 0){
	if($json->method=="object"){
		$method = $json->method;
		$dados = $json->data;
		$mensagem_para_enviar = "Isso é um JsonObject";
		echo json_encode(array('method'=>$method,
							   'to_server'=>$dados,
							   'from_server'=>$mensagem_para_enviar));
	}

	//else if(strcmp('array', $_POST['method']) == 0){
	else if($json->method=="array"){
		$method = $json->method;
		$dados = $json->data;
		$mensagem_para_enviar = "Isso é um JsonArray";

		$array = array();
		array_push($array, array('method'=>$method,
								 'to_server'=>$dados,
								 'from_server'=>$mensagem_para_enviar)); 
		
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