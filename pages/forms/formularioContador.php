<form method="get">
    <input type="hidden" name="p" value="formCont">
    <label>Numero a contar :</label>
    <input type="text" name="cont"><br>
    <input type="submit">
</form>

<?php
//Verifica se cont está setado (se é NULL ou não)
if (!isset($_GET["cont"])) {
    echo "erro";
    //Esse "return;" faz com q o php pare de ser executado na página
    return;
}

//Verifica se cont está vazio
if ($_GET["cont"] == "") {
    echo "erro";
    //Sai do php
    return;
}

/*
//Esse é um exemplo de um switch sendo usado pra substituir um if
//Função similar ao if da linha 17
switch($_GET["cont"]){
    case "":
        echo "erro";
        break;
    default:
        break;
}
*/
//Pega o valor do cont passado pelas variáveis da URL
$cont = (int)$_GET["cont"];

/*Neste caso de "do while" a variavel que recebe o valor que o usuario escreveu,
está sendo usada como um contador para o "do while" também. Isso ocupa menas memória.
*/
do {
    //Mostre o cont na tela e pule uma linha
    echo $cont . "<br>";
    //Tire 1 do cont
    $cont--;

    //Enquanto cont for maior q 0
} while ($cont > 0);
?>
