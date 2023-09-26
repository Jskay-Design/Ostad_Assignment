<?php
   
$text = "The quick brown fox jumps over the lazy dog.";

function convertText($text)
{
    echo $text = strtolower($text)."\n";
    echo  str_replace('brown', 'red', $text);
}

convertText($text); 