

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The form for uploading</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
    Enter login: <input type="text" name="login"><br>
    Enter password: <input type="password" name="password"><br>

    <p>Choose the file: </p>
    <input type="file" name="myFile"><br>
    Enter the new name of file<input type="text" name="new_name"><br>
    <input type="submit" name="Send file">
</form>
</body>
</html>