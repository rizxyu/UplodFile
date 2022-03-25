<?php

// Login
if(!isset($_SERVER['PHP_AUTH_USER'])) {
  header('WWW-Authenticate: Basic realm="My Realm"');
  header('HTTP/1.0 401 Unauthorized');
  echo "<h1>403</h1>\n<p>Access denied</p>";
  unset($_SERVER["PHP_AUTH_USER"]);
  unset($_SERVER["PHP_AUTH_PW"]);
  exit;
} else {
  $username = $_SERVER["PHP_AUTH_USER"];
  $password = $_SERVER["PHP_AUTH_PW"];
  if($username !== "Admin" && $password !== "admin") {
    echo "<h1>403</h1>\n<p>Access denied</p>";
    unset($_SERVER["PHP_AUTH_USER"]);
    unset($_SERVER["PHP_AUTH_PW"]);
    return;
  }
}

?>

<?php

// Create an upload folder if it doesn't exist
if(!is_dir("../upload")) {
  mkdir("../upload/");
}

function getFilesize($file) {
  $filesize = filesize($file); // bytes
  $filesize = round($filesize / 1024 / 1024, 1); // megabytes with 1 digit
  return($filesize);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Dragon File Uploader • /admin/</title>
  </head>
  <body>
    <div class="all">
      <h1 style="background-color: white;">Admin Page</h1>
      <h2 style="background-color: white;">All Uploaded Files :</h2>
      <?php

      $files = array_values(array_diff(scandir("../upload/"), array("..", ".")));
      if(count($files) < 1) {
        echo "Null";
      } else {
        for($a = 0; $a < count($files); $a++) {
          echo "<p style=\"background-color: white;\">\n            <a href=\"../upload/".$files[$a]."\" style=\"background-color: Lime; border: 2px solid Lime; border-radius: 4px; padding: 4px;\">".$files[$a]."</a><br><br>\n            <span style=\"background-color: white;\">File Size : ".getFilesize("../upload/".$files[$a])." MB</span><br><br>\n            <span style=\"background-color: white;\">Uploaded on ".date("Y-m-d H:m:d", filemtime("../upload/".$files[$a]))."</span><br><br>\n            <a href=\"/del.php?file=".$files[$a]."\" style=\"background-color: Dodgerblue; border: 2px solid Black; border-radius: 4px; padding: 4px;\">Delete</a><hr>\n          </p>";
        };
      };

      ?>
    </div>
    <br>
    <span><b>File Uploader By <a href="https://github.com/Rizxyu">Rizxyu</a> & <a href="https://github.com/MuhammadRestu999">MuhammadRestu999</a></b></span>
  </body>
</html>
