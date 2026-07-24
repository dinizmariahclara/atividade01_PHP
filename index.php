<?php
header("Content-Type: application/json;charset=utf-8");
header("Access-Control-Allow-Origin: *");

$resposta = [
    "mensagem" => "Back-end respondendo com sucesso!",
    "status" => "Funcionando corretamente!",
    "filme" => "Pequena Miss Sunshine",
    "diva_pop" => "Taylor Swift",
    "idioma" => "Francês",
    "idade" => "16",
    "aniversário" => "210809"
];
echo json_encode($resposta);

?>