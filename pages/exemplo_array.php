<?php


//criando um array classico, com chaves/keys numerais começando, por padrão, do 0.
$meuArray = array("oi", "sou", "valores", "de", "um", "array/vetor");

//pular umas linha pra fica bonito
echo "<br><br><br>";

//exemplos de como manipular a variavel $meuArray--------------------------------------------------------

//Um contador para ajudar a manipular as arrays
$cont = 0;

//como mostrar uma array classica com keys numerais
echo "$meuArray[0] $meuArray[1] $meuArray[2] $meuArray[3] $meuArray[4] $meuArray[5]";

//Função para pular linha.
function pularLinha(){
    echo "<br><br><br>";
}

//Um jeito de navegar pela array classica
for($cont = 0; $cont <= 5; $cont++){
    echo "$meuArray[$cont] ";
}

//pula algumas linhas pra deixa bonito
pularLinha();

//Outro jeito de fazer a mesma coisa q o for anterior
for($cont = 0; $cont < 6; $cont++){
    echo "$meuArray[$cont] ";
}

pularLinha();

//Função para mostrar o valor de uma array
function mostrar($array, $index){
    echo "$array[$index] ";
}

//resetar o contador
$cont = 0;

//outro jeito de fazer a mesma coisa mas com um while
while($cont < 6){
    mostrar($meuArray, $cont);
    $cont++;
}

pularLinha();

//resetar o contador, mas nesse caso para 5 que é o final da array
$cont = 5;

//neste caso foi feito com um do while mas mostrando do final da array para o começo
do{
    mostrar($meuArray, $cont);
    $cont--;
}while($cont > 0);

//Criando array com keys customizadas
$meuArray = array(
    "key1" => "valKey1",
    "key2" => "valKey2",
    "key3" => "valKey3",
    "key4" => "valKey4",
    "key5" => "valKey5",
);

pularLinha();

//como mostrar os valores de uma array
echo $meuArray["key1"]." ".$meuArray["key2"]." ".$meuArray["key3"]." ".$meuArray["key4"]." ". $meuArray["key5"];

pularLinha();

//Um jeito para navegar por uma array com keys
for($cont = 5; $cont>0;$cont--){

    //neste echo ele está apontando para a key'n' do meuArray
    /*
    quando cont for = 5
    echo $meuArray["key5"];
    ele vai procurar o $meuArray["key5"] que neste caso é "valKey5" e vai fazer isto:
    echo "valKey5";

    quando cont for = 4
    echo $meuArray["key4"];
    ele vai procurar o $meuArray["key4"] que neste caso é "valKey4" e vai fazer isto:
    echo "valKey4";

    ...

    */
    echo $meuArray["key$cont"]. " ";
}

$cont = 0;

pularLinha();

//Aqui é criado uma array que neste caso tem 2 arrays dentro dela, cada uma com seus respectivos keys e valores
/*
//Este é um jeito de ver esta array
meuArray
    arrayInArray1
        "key1" -> "val1",
        "key2" -> "val2",
        "key3" -> "val3"

    arrayInArray2
        "gey1" -> "vral1",
        "gey2" -> "vral2",
        "gey3" -> "vral3"
    

//ou assim sla
meuArray = {
    "arrayInArray1" : {
        "key1" : "val1",
        "key2" : "val2",
        "key3" : "val3"
    },
    "arrayInArray2" : {
        "gey1" : "vral1",
        "gey2" : "vral2",
        "gey3" : "vral3"
    }
}


*/
$meuArray = array(
    "arrayInArray1" => array(
        "key1" => "val1",
        "key2" => "val2",
        "key3" => "val3",
    ),
    "arrayInArray2" => array(
        "gey1" => "vral1",
        "gey2" => "vral2",
        "gey3" => "vral3",
    ),
);

//como mostrar os valores sem o foreach
echo $meuArray["arrayInArray1"]["key1"], ";" , $meuArray["arrayInArray1"]["key2"], ";" , $meuArray["arrayInArray1"]["key3"];

pularLinha();

//como mostrar os valores sem o foreach
echo $meuArray["arrayInArray2"]["gey1"], ";" , $meuArray["arrayInArray2"]["gey2"], ";" , $meuArray["arrayInArray2"]["gey3"];

pularLinha();

//Aqui esse foreach está navegando pela array, mas dentro dessa array tem outras arrays.
//A variavel "$nomeArray" é na verdade a key para o valor que é uma array.
//arrayInArray1 aponta para uma array q tem outras keys e valores.
//A variavel $A_array_de_vdd é a array/valor que a $nomeArray está apontando.
foreach($meuArray as $nomeArray => $A_array_de_vdd){

    //Echo para mostrar a key atual
    echo "Entrando na array: $nomeArray <br>";

    //Agora neste foreach estamos navegando pela array q acabamos de entrar
    //é uma array dentro de uma array.
    foreach($A_array_de_vdd as $chave => $valor){

        //mostra a chave e o valor q a chave está apontando
        echo "$chave=>$valor<br>";
    }
}
