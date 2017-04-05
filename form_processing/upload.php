<div class="container" style="margin-top: 30px">
        <h2>Leave the comment</h2>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div><br/>
            <div class="form-group">
            <label for="file">Upload the file</label>
            <input type="file" class="form-control" id="file" name="file" placeholder="file">
            </div><br/>
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" class="form-control" rows="10"></textarea>
            </div><br/>
            <input type="hidden" name="token" value="">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

<?php