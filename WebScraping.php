<?php

$url = "put the URL here";

$dadosSite = file_get_contents($url);
$var1 = explode('<div class="">',$dadosSite);
$var2 = explode("</div>",$var1[1]);

print $var2[0];

?>