<?Php
header ("Content-type: image/jpg");
$name=$_POST['t1']; // Text to be written on Image.
$grade=$_POST['s1']; // Grade to be written
$x=260;
$file_name='gd-template.jpg'; // Image collected
$img_source = imagecreatefromjpeg($file_name); // Image created
$text_color = imagecolorallocate($img_source, 0, 0, 0);
ImageString($img_source,5,$x,$y,$name,$text_color); //
/// add grade ////
$x=260;
$y=250;
$text_color = imagecolorallocate($img_source, 255, 0, 0);
ImageString($img_source,5,$x,$y,$grade,$text_color); //
//ImageJpeg ($img_source,'gd-template2.jpg'); // image saved
ImageJpeg ($img_source); // image saved
imagedestroy($img_source); //memory is removed.
?>