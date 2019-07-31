<?php

$matrix = [
  [0,1,1,2],
  [0,5,0,0],
  [2,0,3,3]
];

function matrixElementsSum($matrix) {
    foreach($matrix as $rix){
      for($i = 0; $i < count($matrix[0]); $i++){
        print_r($rix[$i]);
        // print_r($matrix[$i][0]);
        // print_r($matrix[$i][1]);
        // print_r($matrix[$i][2]);
        // print_r($matrix[$i][3]);
        echo "    ";
      }
    }
}

matrixElementsSum($matrix);



?>