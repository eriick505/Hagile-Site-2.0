<?php

// Checks if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  function post_captcha($user_response) {
    $fields_string = '';
    $fields = array(
      'secret' => '6LcYje4UAAAAAO8RRUrAFskkId68Za7Z4ASuQkLb',
      'response' => $user_response
    );
    foreach($fields as $key=>$value)
    $fields_string .= $key . '=' . $value . '&';
    $fields_string = rtrim($fields_string, '&');

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

    $result = curl_exec($ch);
    curl_close($ch);

    return json_decode($result, true);
  }

  // Call the function post_captcha
  $res = post_captcha($_POST['g-recaptcha-response']);

  if (!$res['success']) {
    // What happens when the CAPTCHA wasn't checked
    echo "<script> alert('VOCÊ DEVE MARCAR O CAPTCHA BOX!'); window.history.back(); </script>";
  } else {
    // If CAPTCHA is successfully completed...
    if(!isset($_POST['nome']) || empty($_POST['nome']) || !isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['telefone']) || empty($_POST['telefone']) || !isset($_POST['mensagem']) || empty($_POST['mensagem'])) {
      echo "<script> alert('VOCÊ DEVE PREENCHER TODOS OS CAMPOS'); window.history.back(); </script>";
    } else {

			// Paste mail function or whatever else you want to happen here!
			$nome = $_POST['nome'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
			$mensagemCliente = $_POST['mensagem'];
	
			$destino = 'santoserick9@gmail.com';
	
			$assunto = '[CONTATO - SITE] Hagile Agência Digital';
			$headers = "Content-type:text/html; charset=utf-8";
	
			$mensagem  = "<p><b>De: </b>". $nome ."</p>";
      $mensagem .= "<p><b>E-mail: </b>". $email ."</p>";
      $mensagem .= "<p><b>Telefone: </b>". $telefone ."</p>";
			$mensagem .= "<p><b>Mensagem:</b></p> <p>". $mensagemCliente ."</p>";
	
			// Enviando a mensagem para o destinatário
			$envia = mail($destino ,"[CONTATO - SITE] Hagile Agência Digital",$mensagem,$headers);
	
			if ($envia = true) {
	
				echo "E-mail enviado com sucesso...";
				echo $mensagem;
	
			} else {
				echo "O e-mail falhou...";
			}
	
			// Envia um e-mail para o remetente, agradecendo a visita no site, e dizendo que em breve o e-mail será respondido.
			$mensagem2 = "<p>Olá, ". $nome .". <br> Agradeçemos seu contato. Em até 48 horas você receberá no e-mail fornecido a resposta para sua questão.</p>";
			$mensagem2 .= "<p><small>Observação - Não é necessário responder esta mensagem.</small></p>";
			$mensagem2 .= "<img src='https://www.hagile.com.br/img/logo-hagile-preto.png'/>";
	
			$envia = mail($email,"[CONTATO] Hagile Agência Digital",$mensagem2,$headers);
	
			// Exibe na tela a mensagem de sucesso, e depois redireciona devolta para a página de contato.
			echo "<script> alert('Sua Mensagem foi enviada com sucesso!'); window.history.back(); </script>";

		}
        
	}
	
} else { 
	echo "<script> alert('VOCÊ NÃO PODE ENVIAR COM TODOS OS CAMPOS VAZIOS!'); window.history.back(); </script>";
}

?>