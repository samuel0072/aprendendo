<?php

/**
 * Operadores
 */

 $itemA = 10;
 $itemB = 20;
 $itemC = $itemA + $itemB + 10;

 echo  $itemC . PHP_EOL;

 $itemD = $itemC - $itemB;

 echo $itemD . PHP_EOL;

 $itemE = $itemC / $itemB;

 echo  $itemE . PHP_EOL;

 $itemF = $itemC * $itemB;

 echo  $itemF . PHP_EOL;

 $itemG = $itemC % $itemB;

 echo  $itemG . PHP_EOL;

 $itemA += 26;

 echo  $itemA . PHP_EOL;

 $itemA -= 26;

 echo  $itemA . PHP_EOL;

 $itemA /= 2;

 echo  $itemA . PHP_EOL;

 $itemA *= 7;

 echo  $itemA . PHP_EOL;

 $itemA %= 7;

 echo  $itemA . PHP_EOL;

 var_dump(1 == 1);
 var_dump(1 == 2);
 var_dump(1 > 1);
 var_dump(1 < 0);
 var_dump(5 >= 1);
 var_dump(1 <= 7);
 var_dump(1 != 2);
 var_dump('1' == 1);
var_dump('1' === 1);
var_dump('1' !== 1);
var_dump(1 === 1);