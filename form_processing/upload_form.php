<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comments</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container" style="margin-top: 30px">
        <h2>Download the file</h2>
        <form action="upload_form.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="40000">

            <div class="form-group">
            <label for="myFile">Upload the file</label>
            <input type="file" id="myFile" name="myFile" class="form-control">
            </div><br/>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>

<?php

include __DIR__.'/include/file_upload.php';
include __DIR__.'/include/photo-view.php';