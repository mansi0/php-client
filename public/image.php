<?php
  $ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];

  /*if(isset($_POST["submit"])) {
    $check=getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
      $image = $_FILES['image']['tmp_name'];
      $imgContent = addslashes(file_get_contents($image));
      $dataTime = date("Y-m-d H:i:s");
    }*/
   /* echo '<script type="text/javascript"> src="./js/image.js"',
     'imagevalue($imgContent);',
     '</script>'*/
?>
<!DOCTYPE html>
<html>
<body>
    <form method="post" enctype="multipart/form-data">
        select image to upload:
        <input type="file" name="image" id="image" onchange =imageValue(<?php echo(json_encode($url)); ?>)> <br>
        <input type="submit" name="submit" value="upload"> 
    </form>
    
</body>
<script src="./js/image.js">
</script>
</html>