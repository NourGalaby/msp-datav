<?php 
session_start();

//check if user have right to access.
	if($_SESSION['inside']!= 11){

header("Location: index.html");
exit;
}
 ?>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select Excel file to upload:<br />
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br />
    <input type="submit" value="Upload file" name="submit">
    <br />
</form>

</body>
</html> 