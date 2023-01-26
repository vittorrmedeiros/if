<?php

$arr = [
    'nome' => 'José',
    'idade' => 18,
    'altura' => 1.60,
    'trabalha' => true,
    'profissão' => 'programador',
    'cônjuge' => true,
    'mora_soz' => false,
];

$nome = $arr['nome'];
$idade = $arr['idade'];
$altura = $arr['altura'];
$trabalha = $arr['trabalha'];
$profissao = $arr['profissão'];
$conjuge = $arr['cônjuge']; 
$mora_soz = $arr['mora_soz'];

echo "Seu nome é $nome <br>";

if($idade >= 18) {
    echo "$nome é maior de idade, tem $idade anos. <br>";
} else {
    echo "$nome é menor de idade. <br>";
}

if($altura > 1.60) {
    echo "$nome possuí uma alta estatura, tem $altura, acima do padrão de alta estatura. <br>";
} else {
    echo "$nome possuí uma baixa estatura, tem $altura, abaixo do padrão de alta estatura. <br>";
}

if($trabalha == true) {
    echo "$nome trabalha, ele é $profissao. <br>";
} else {
    echo "$nome é desempregado. <br>";
}

if($conjuge == true) {
echo "$nome é casado. <br>";
} else {
echo "$nome é solteiro. <br>";
}

if($mora_soz == true) {
echo "$nome mora sozinho. <br>";
} else {
echo "$nome não mora sozinho. <br>";
}

?>