<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <title>Comments</title>
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <form  method="post">
            <div class="form-group">
                <label for="username">Name of user</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>

</body>
</html>

<?php
var_dump($_POST);
?>