<?php
$compressed = gzcompress('Compress me', 9);
echo $compressed;
echo '<br/>';
$uncompressed = gzuncompress($compressed);
echo $uncompressed;
?>