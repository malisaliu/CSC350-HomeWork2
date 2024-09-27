<!doctype html>
<html lang="en">
<body>
<?php
echo "<pre style='font-family: 'Courier New', Courier, monospace'>";
echo "Problem 3: ASCII ART ";
echo "<br>";

$size = 13;
$edge = '|';
$topEdge = '-';
$botEdge = '_';
$middle = '+';
$upperLeftCorner = '/';
$lowerRightCorner = '/';
$upperRightCorner = '\\';
$lowerLeftCorner = '\\';

echo "$upperLeftCorner" . str_repeat("$topEdge ", $size - 2) . "$upperRightCorner" . "\n";

for ($i = 1; $i < ($size - 1)/2; $i++) {
    echo "$edge" . str_repeat (" ", ($size-3)) . "$edge " . str_repeat (" ", ($size-4)) . " $edge" . "\n";
}

echo "$edge" . str_repeat("$topEdge ", ($size-3)/2) . "$middle" . str_repeat(" $topEdge", ($size - 3)/2). " $edge" . "\n";

for ($i = 1; $i < ($size - 1)/2; $i++) {
    echo "$edge" . str_repeat (" ", ($size-3)) . "$edge " . str_repeat (" ", ($size-4)) . " $edge" . "\n";
}

echo "$lowerLeftCorner";
echo str_repeat("$botEdge ", $size - 2);
echo "$lowerRightCorner";

echo "</pre>";
?>
</body>
</hmtl>
