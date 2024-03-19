<?php
if(!empty($_POST["enviar"])) {
  $nome = $_POST["name"];
  $email = $_POST["email"];
  $assunto = "Contato pelo Site";
  $conteudo = $_POST["conteudo"];

  $enviarParaEmail = "email @ portal desenvolvedor . com";
  $mailCabecalhos = "De: " . $nome . "<". $email .">\r\n";
  if(mail($enviarParaEmail, $assunto , $conteudo, $mailCabecalhos)) {
      $message = "Seu contato foi recebido com sucesso.";
      $type = "Sucesso";
  }
}
require_once "resposta.php";
?>