<?php

$notas = [
    10,
    8,
    9,
    7,
    6
];

// o rsort ordena na ordem contrária, ou seja, decrescente
rsort($notas);
var_dump($notas);

//asort - ordena arrays associativas, por isso mantem o valor das chaves
//arsort - ordena em ordem decrescente, mantendo o valor das chaves
//ksort - ordena em ordem crescente, utilizando os valores das chaves
//krsorte - ordena em ordem decrescente, utilizando os valores das chaves

// if (gettype($notas) === 'array') {
//     echo "Sim, é um array";
// }

if (is_array($notas)) {
    echo "Sim, é um array";
}

//array_is_list - recebe uma array como parâmetro e retorna true ou false. Testa se as chaves são numeros naturais ordenados.

//array_key_exists(*valor buscado*, *array*) - verifica se determinada chave existe em uma array

//isset(*variavel ou item de array*) - verifica se o valor é diferente de null - boolean
                                  //  strict (opcional) - considera o tipo
//in_array(*item buscado*, *array*, true) - verifica se determinado valor existe em uma array retorna um boolean

//array_search(*valor*, *array*, true) - se o valor exite a chave é retornada, se não existe retorna false