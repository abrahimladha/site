<!DOCTYPE html>
<html>
<body bgcolor="black">

<?php
$files = glob('THUMBS/*.{jpg,png,gif,jpeg}', GLOB_BRACE);
foreach($files as $file) {
$fileshort = substr($file, 13);
list($width, $height, $type, $attr) = getimagesize($file);
//echo $size[0], "<br>";
echo "<a href=\"https://vgd.me/abrahimladha/art/IMG/$fileshort\"><img src=$file alt=$file style=\"width:$width;height:192px;padding:4px;border:thin solid black;\"></a>";
//echo "https://vgd.me/abrahimladha/art/$file", " ";
}
//echo "hello";  
?> 

</body>
</html>
