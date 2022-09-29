<form method="get">
    <input type="hidden" name="p" value="formTemp">
    <label>Celsius :</label>
    <input type="text" name="celsius" value=
    <?php
    //Neste caso eu coloquei a execução do php dentro do atributo "value" para alterar o valor da tag "input"
    //deve ter um jeito mais facil manipulando o atributo "value" da tag "input" pelo "id" dela.

    //verifica se kelvin está setado
    if (isset($_GET["kelvin"])) {
        //echo (float)$_GET["celsius"];

        //retorna conta para atributo value
        echo (float)$_GET["kelvin"] - 273.15;
    }
    ?>
    ><br>
    <label>Kelvin :</label>
    <input type="text" name="kelvin"value=
    <?php
    //Mesma ideia do php de cima ali
    
    //verifica se celcius está setado
    if (isset($_GET["celsius"])) {
        //echo (float)$_GET["celsius"];

        //retorna conta para atributo value
        echo (float)$_GET["celsius"] + 273.15;
    }
    ?>
    ><br>
    <input type="submit">
</form>
