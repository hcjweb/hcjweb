<?php
  include ("smtp.class.php");
  $host = "smtp.hcjweb.com.br"; /*host do servidor SMTP */
  $mail = "helio@hcjweb.com.br";//o endereço de e-mail deve ser válido.
  $senha = "H3l10jvn10R";

  /* Configuração da classe.e smtp.class.php */
  $smtp = new Smtp($host, 587);
  $smtp->user = $mail; /*usuario do servidor SMTP */
  $smtp->pass = $senha; /* senha do usuario do servidor SMTP*/
  $smtp->debug = true; /*ativa a autenticacao SMTP */

  /* Prepara a mensagem para ser enviada. */
  $from = $mail;
  $to = $_POST['destino'];
  $subject = "contato efetuado pelo site";
  $msg = $_POST['msg'];
  /* $msg = "Mensagem enviada por: ". $_POST[email]; */

  /* faz o envio da mensagem */
  $enviou = $smtp->Send($to, $from, $subject, $msg, "text/html") ? 'enviou' : 'falhou';
  header('Location:index.php?status='.$enviou, "-r".$from);
?>
