<?php
echo "Assalomu alaykum<br>";
$x = 1551;
$s = (string) $x;
$len = strlen($s);
$l = true;
for ($i = 0; $l && $i < (int)$len/2; $i ++)
    if ($s[$i] != $s[$len - $i - 1]) $l = false;
echo $l;
?>
