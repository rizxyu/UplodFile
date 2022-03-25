<?php

$file = $_FILES["file"];
$allowed = array("gif", "png", "jpg", "jpeg", "txt", "mp3", "mp4", "ogg");
$filename = $file["name"];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!in_array($ext, $allowed)) {
  echo $ext." extension not accepted";
  return;
}
move_uploaded_file($file["tmp_name"], "./upload/" . $file["name"]);
sleep(1);
header("Location: ". $_SERVER["HTTP_REFERER"]);

?>
