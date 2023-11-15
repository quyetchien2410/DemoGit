<?php
function inHinhChuNhat($chieuRong, $chieuCao) {
    for ($i = 0; $i < $chieuCao; $i++) {
        for ($j = 0; $j < $chieuRong; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

$chieuRong = 5;
$chieuCao = 3;

inHinhChuNhat($chieuRong, $chieuCao);
?>