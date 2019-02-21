
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
       $pares = 2;
       for($i= 0; $i < 50; $i++){
          $vetor[$i] = $pares;
          $pares +=2;
          
          
          
        }   
       
       print_r($vetor). "<br>";
        
        
        
        ?>
    </body>
</html>

