<html>
<head>
    <title>Sudoku Solver</title>
    <link rel='stylesheet' href="http://localhost/sudoku/public/css/custom.css">
</head><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$break = '';
if(isset($board)){
    foreach($board as $row_key => $row){
        foreach($row as $column_key => $column){
            if(!is_array($column)){
                echo "<input type='text' name='sudoku_array' style='width:50px;height:50px;' value='$column' class ='cell ";
            }
            else{
                echo "<input type='text' name='' style='width:50px;height:50px;' class='cell ";
            }
            if($column_key == 0){
                echo "left_border ";
            }
            if($column_key == 8){
                echo "right_border ";
            }
            if($row_key == 0){
                echo "top_border ";
            }
            if($row_key == 8){
                echo "bottom_border ";
            }
            if($column_key % 3 == 0){
                echo "left_border ";
            }
            if($row_key % 3 ==0){
                echo "top_border ";
            }
            echo "'>";
        }
        echo "<br />";
    }
}else {
    echo "<form action='http://localhost/sudoku/public/solve' method='POST'>";
    for ($i = 0; $i < 9; $i++) {
        for ($j = 0; $j < 9; $j++) {
            echo "<input type='text' name='sudoku_array[$i][$j]' style='width:50px;height:50px;' class='cell ";

            if ($j == 0) {
                echo "left_border ";
            }
            if ($j == 8) {
                echo "right_border ";
            }
            if ($i == 0) {
                echo "top_border ";
            }
            if ($i == 8) {
                echo "bottom_border ";
            }
            if ($j % 3 == 0) {
                echo "left_border ";
            }
            if ($i % 3 == 0) {
                echo "top_border ";
            }
            echo "'>";
        }
        echo "<br />";
    }

    echo "<button type='submit' value='submit'>submit</button>";
    echo "</form>";
}