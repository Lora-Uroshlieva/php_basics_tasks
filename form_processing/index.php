<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comments</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <h2>Leave the comment</h2>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div><br/>
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" class="form-control" rows="10"></textarea>
            </div><br/>
            <input type="hidden" name="token" value="">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>
</html>


<?php
    include __DIR__.'/comments_view.php';
    include __DIR__ . '/form_logic.php';
?>