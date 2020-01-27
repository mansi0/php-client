<?php
  $ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Upload Files</title>
  </head>

  <body>
    <form method="post" enctype="multipart/form-data">
      <input type="file" name="files[]" multiple />
      <input type="submit" value="Upload File" name="submit" onclick=reg(<?php echo(json_encode($url)); ?>)/>
    </form>

    <script src="./js/upload.js"></script>
  </body>
</html>