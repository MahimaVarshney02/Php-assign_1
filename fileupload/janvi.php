<?php 
    $fileName=$_FILES["file"] ["name"];
    $fileTmpName=$_FILES["file"]["tmp_name"];
    $uploaddirectory="upload/";
    $destination=$uploaddirectory.$fileName;
    move_uploaded_file($fileTmpName,$destination);
?>
<html>
    <head>
        <title>File uploaded Result</title>
</head>
<body>
    <h3>File Uploaded Successfully</h3>
    <img src="<?php echo $destination;?>" alt="uploaded image">
</body>
</html>
