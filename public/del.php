<?php

$file = "./upload/".$_GET["file"];
unlink($file);
sleep(1);
header("Location: ". $_SERVER["HTTP_REFERER"]);

?>
