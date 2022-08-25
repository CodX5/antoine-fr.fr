<?php
$file = fopen('counter.txt', 'c+');
    $count = intval(fgets($file));
    $count++;
    fseek($file, 0);
    fputs($file, $count);
    fclose($file);