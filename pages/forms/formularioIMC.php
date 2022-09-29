<form method="get">
    <input type="hidden" name="p" value="formIMC">
    <label class="labelAltura">Altura :</label>
    <input type="text" name="altura"><br>
    <label>Peso :</label>
    <input id="meuId" type="text" name="peso"><br>
    <input type="submit">
</form>

<style>
    
    .labelAltura {
        background-color: powderblue;
        color: red;
    }

    #meuId {
        background-color: yellow;
    }
</style>



<?php
//Verifica se altura e peso estão setados
if (!isset($_GET["altura"]) || !isset($_GET["peso"])) {
    echo "erro";
    //Esse "return;" faz com q o php pare de ser executado na página
    return;
}

//Verifica se altura e peso estão vazios
if ($_GET["altura"] == "" || $_GET["peso"] == "") {
    echo "erro";
    //sai do php
    return;
}
//pega valor das variaveis
$peso = (float)$_GET["peso"];
$altura = (float)$_GET["altura"];
$imc = $peso / ($altura * $altura);

//mostra conta
echo "IMC: " . number_format($imc, 2, '.', '');
?>