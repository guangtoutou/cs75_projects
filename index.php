<?php
echo phpinfo();
$d = dir("./");

while(false !== ($e = $d->read()))
    echo "<a href= '${e}'> $e </a> <br/>";

$d->closedir()
?>