<?php

if(isset($_POST['name'])){
	$font="AGENCYR.TTF";
	$image=imagecreatefromjpeg("certificate.jpg");
	$color=imagecolorallocate($image,19,21,22);
	$name="NF Tushar";
	imagettftext($image,23,0,300,287,$color,$font,$_POST['name']);
	// $date="6th may 2022";
	// imagettftext($image,20,0,450,595,$color,"AGENCYR.TTF",$date);
	$file=time();
	$file_path="certificate/".$file.".jpg";
	
	// $file_path_pdf="certificate/".$file.".pdf";
	imagejpeg($image,$file_path);
	imagedestroy($image);
}


?>
<form method="post">
    <input type="textbox" name="name" />
    <!-- <input type="email" name="email" placeholder="Enter email" /> -->
    <input type="submit" name="submit" value="Submit">
</form>



<?php
 if(isset($_POST["submit"])){
	 ?>
	 Download Your Certificate
<a href=" <?php echo"$file_path"?>" ; Download='certificate'>Download</a>

<?php
 }else{
	echo "Input Your Data for your certificate";
 } 

?>

