
<div class="all">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Dragon File Uploader</title>
<h1 style="background-color: white;">Dragon File Uploader</h1>
<form method="POST" enctype="multipart/form-data" action="upload.php" style="background-color: white;">
  <input id="sub1" type="file" name="file"/><br>
  <p style="background-color: white;">Limit File 8MB</p>
  <input id="sub2" type="submit" value="Upload"/>
</form>
<h2 style="background-color: white;">All Upload :</h2>
<?php

$files = scandir("upload");
for ($a = 0; $a < count($files); $a++) {
  ?>
  <p style="background-color: white;">
  <a href="upload/<?php echo $files[$a]; ?>" style="background-color: Lime; border: 2px solid Lime; border-radius: 4px; padding: 4px;"><?php echo $files[$a]; ?></a><br><br>
  <a href="upload/<?php echo $files[$a]; ?>" style="background-color: Dodgerblue; border: 2px solid Black; border-radius: 4px; padding: 4px;" download="upload/<?php echo $files[$a]; ?>">Download</a><hr>
  </p>
  <?php
}

?>
</div><br>
<span><b>File Uploader By Rizxyu</b></span>
