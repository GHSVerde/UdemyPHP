<?php

$email = $_POST['inputEmail'];

//Inicia o POST
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify"); // URL do CURL
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"   => "6LfOF2YUAAAAAKOFbKt3jLo4S3CZLqWV70hUjE8k",
    "response" => $_POST['g-recaptcha-response'],
    "remoteip" => $_SERVER['REMOTE_ADDR']
))); //Constroy uma query HTTP com os dados do array()
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Espera retorno

//Executa o CURL e pede o JSON_DECODE
$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch); //Fecha conexão

//Caso o resultado seja validado, o código é executado;
if ($recaptcha['success'] === true) {
   echo "OK: ".$_POST['inputEmail'];
}
//Caso não valide, volta pro cadastro
else {
    header("Location: reCAPTCHA.php");
}

?>
