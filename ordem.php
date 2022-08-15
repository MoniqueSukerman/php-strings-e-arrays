<?php

$notas = [
    [
        "aluno" => "Maria", 
        "nota" => 10
    ],
    [
        "aluno" => "Vinicius",
        "nota" => 6
    ],
    [
        "aluno" => "Ana",
        "nota" => 9
    ]
];

//criando uma nova instância com os dados da array $notas
// $notasOrdenadas = $notas;

//passa a variável por referência, ordena em ordem crescente (númerica ou alfabetica)
// sort($notasOrdenadas);

// echo "Desordenadas:";
// var_dump($notas);

// echo "Ordenadas:";
// var_dump($notasOrdenadas);

//função callback onde podemos definir criterios de ordenação.
function ordenaNotas(array $nota1, array $nota2) : int
{
// o operador de espaçonave retorna -1 se o primeiro elemento for menor 1 se o primeiro elemento for maior e 0 se forem equivalentes
    return $nota2["nota"] <=> $nota1["nota"];

    // if ($nota1["nota"] > $nota2["nota"]) {
    //     return -1;
    // }
    // if ($nota2["nota"] > $nota1["nota"]) {
    //     return 1;
    // }

    // return 0;
}


//    &array  callback(deve retornar 1, -1 ou 0)
usort($notas,'ordenaNotas');

var_dump($notas);