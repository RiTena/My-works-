<?php
function UMPKtest($word, $chast1, $chast2) {

    $combo = $chast1 . $chast2;
    for ($i = 0; $i < strlen($word); $i++) {
        $char = $word[$i];
        if (strpos($combo, $char) === false) {
            return false;
        }
        $pos = strpos($combo, $char);
        if ($pos !== false) {
            $combo = substr($combo, 0, $pos) . substr($combo, $pos + 1);
}}
    return true;
}

$Umpk = "umpk";

$chastslova1 = "um";
$chastslova2 = "pk";
echo "$Umpk - '$chastslova1', '$chastslova2' => " . (UMPKtest($Umpk, $chastslova1, $chastslova2) ? 'true' : 'false') . "<br>";

$chastslova1 = "u";
$chastslova2 = "pkm";
echo "$Umpk - '$chastslova1', '$chastslova2 => " . (UMPKtest($Umpk, $chastslova1, $chastslova2) ? 'true' : 'false') . "<br>";

$chastslova1 = "ym";
$chastslova2 = "pk";
echo "$Umpk - $chastslova1', '$chastslova2' => " . (UMPKtest($Umpk, $chastslova1, $chastslova2) ? 'true' : 'false') . "<br>";
?>