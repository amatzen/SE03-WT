<?php
define('LENGTH_OF_PYRAMID', 7);

for ($i = 1; $i < LENGTH_OF_PYRAMID+1; $i++) {
    $arr = array_fill(0, $i, "#");
    echo join("", $arr) . "<br />";
}