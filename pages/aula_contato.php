<p>Página de Contato</p>

<form method="get">
    <input type="hidden" name="p" value="contato">
    <label>Nome :</label>
    <input type="text" name="nome"><br>
    <label>E-mail :</label>
    <input type="text" name="email"><br>
    <label>Telefone :</label>
    <input type="text" name="telefone"><br>
    <input type="submit">
</form>
<?php

if (isset($_GET["nome"])) {

    echo "<hr> Nome: " . $_GET["nome"] . "<br>";
    echo "E-mail: " . $_GET["email"] . "<br>";
    echo "Telefone: " . $_GET["telefone"] . "<br>";

    if ($_GET["nome"] == "") {
        echo "preencha o Nome <br>";
    }
    $tel = (float)$_GET["telefone"];

    echo gettype($tel);
}


?>