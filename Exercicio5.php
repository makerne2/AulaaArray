<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 1</title>
    </head>
    <body>
        <?php
       $vetor= array();
       
       $vetor[0] = "Abelha";
       $vetor[1] = "Brabuleta";
       $vetor[2] = "Pato";
       $vetor[3] = "Macaco";
       $vetor[4] = "Rato";
       $vetor[5] = "Joaninha";
       $vetor[6] = "Ramster";
       $vetor[7] = "Gato";
       $vetor[8] = "Cachorro";
       $vetor[9] = "Carneiro";
        ?>
        
        <select>
            <option> Animais </option>
            <?php for($i=0; $i<10; $i++){ ?>
            <option> <?php echo $vetor[$i] ?> </option>
            <?php } ?>
        </select>    
    </body>
</html>

