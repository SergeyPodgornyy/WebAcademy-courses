<style type="text/css">

table, tr, th, td {border: 1px solid #333; padding: 5px; }
.mystyle {  color: red }

</style>
<?php

$cols = 10;
$rows = 5;

echo "<table>";
for ($i = 1; $i<=$rows; ++$i) {
    echo "<tr>";
    for ($j = 1; $j<=$cols; $j++) {
        if ($i == 1) {
            $tag = "th";
        } else {
            $tag = "td";
        }

        if ($i == $j) {
            $st =" class='mystyle'";
        } else {
            $st = '';
        }

        echo "<$tag $st>";
        echo "$i*$j=" . $i*$j;
        echo "</$tag>";
    }
    echo "</tr>";
}
echo "</table>";
