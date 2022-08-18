<?php
private class gerarPagamentoPicPay{

//iniciar o Curl
$curl_picpay = curl_init();
//url chamado
curl_setopt($curl_picpay, CURLOPT_URL, $url);
//URL chamado
curl_setopt($curl_picpay, CURLOPT_RETURNTRANSFER, true);
//dados enviados como json
curl_setopt($curl_picpay, CURLOPT_POSTFIELDS, json_encode($dados));
//requisição post
curl_setopt($curl_picpay, CURLOPT_POST, true);
//add HEADER
curl_setopt($curl_picpay, CURLOPT_HTTPHEADER, $header);
//resultado
$resultado = curl_exec($curl_picpay);
$ler = json_decode($resultado, true);
if(curl_error($curl_picpay)){
    die("erro:".curl_error($curl_picpay));
}
curl_close($curl_picpay);
  
}
?>
