<?php
require_once("vendor/autoload.php");

use Rain\Tpl;

//Configurando E-mail
$config = array(
    "tpl_dir"       => "templates",
    "cache_dir"     => "cache"
);
Tpl::configure( $config );

//Instanciando classes
$mail = new PHPMailer;
$tpl  = new Tpl;

//Criando Variáveis
$tpl->assign( "name", "Gabriel" );
$tpl->assign("version", PHP_VERSION);

//Pegando o HTML
$html = $tpl->draw( "index", true);

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;

$mail->Username = "gabrielhsverde@gmail.com";
$mail->Password = "bnhd2qqr";
$mail->setFrom('gabrielhsverde@gmail.com', 'Gabriel V | Teste');
$mail->addReplyTo('gabrielhsverde@gmail.com', 'Gabriel V | Destino');
//Set who the message is to be sent to
$mail->addAddress('gabrielhsverde@outlook.com', 'Gabriel Verde');
$mail->Subject = 'Teste de E-mail';

$mail->msgHTML($html);
//Replace the plain text body with one created manually
$mail->AltBody = 'Teste de Envio de E-mail do curso de PHP7';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    if (save_mail($mail)) {
        echo "Message saved!";
    }
}

function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;
}
?>