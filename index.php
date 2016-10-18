<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
       // print_r($array1);
        //echo '<hr>';
        
      //  foreach ($array1 as $k=>$v){
      //      echo 'key :'.$k.' / '.$v.'<br>';
      //  }
        
        $array2=['dmax','volvo','hitashi'];
        echo '<hr>';
        echo $array2[1];
        echo '<hr>';
        for($x=0;$x<count($array2);$x++){
            echo $array2[$x].'<br>';
        }
        ?>
    </body>
</html>
