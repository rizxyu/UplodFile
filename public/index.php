<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dragon File Uploader</title>
  </head>
  <body>
    <div class="all">
      <h1 style="background-color: white;">Dragon File Uploader</h1>
      <form method="POST" enctype="multipart/form-data" action="upload.php" style="background-color: white;">
        <input id="sub1" type="file" name="file" required/><br>
        <p style="background-color: white;">Limit File <?php echo ini_get("post_max_size")."B"; ?></p>
        <input id="sub2" type="submit" value="Upload"/>
      </form>
      <h2 style="background-color: white;">All Upload :</h2>
      <?php

      $files = array_values(array_diff(scandir("/upload/"), array("..", ".")));
      if(count($files) < 1) {
        echo "Null";
      } else {
        for($a = 0; $a < count($files); $a++) {
          echo "<p style=\"background-color: white;\">\n            <a href=\"/upload/".$files[$a]."\" style=\"background-color: Lime; border: 2px solid Lime; border-radius: 4px; padding: 4px;\">".$files[$a]."</a><br><br>\n            <a href=\"/upload/".$files[$a]."\" style=\"background-color: Dodgerblue; border: 2px solid Black; border-radius: 4px; padding: 4px;\" download=\"/upload/".$files[$a]."\">Download</a><hr>\n          </p>";
        };
      };

      ?>
    </div>
    <br>
    <span><b>File Uploader By <a href="https://github.com/Rizxyu">Rizxyu</a> & <a href="https://github.com/MuhammadRestu999">MuhammadRestu999</a></b></span>
  </body>
</html>
