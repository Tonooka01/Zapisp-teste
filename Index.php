<?php
$mensagem = 'Meu primeiro teste com a API do zapisp!';
$telefone = '5512988487645';
$apiToken = '150d53f78cc8057424da0c27cda93f2f';
$instancia_id = '52';
$api = "https://zapisp.com.br/api/whatsapp/v2/52";

$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $api);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'apiToken' => $apiToken,
    'telefone' => $telefone,
    'mensagem' => $mensagem,
    'instancia' => $instancia_id
]);

$response = curl_exec($ch);
curl_close($ch);
print_r($response);

echo "Mensagem enviado com sucesso";