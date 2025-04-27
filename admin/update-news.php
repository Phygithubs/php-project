<?php 
    include('sidebar.php');
    $postID    = $_GET['id'];
    $tableName = 'news';
    $currentPost = getCurrentPost($postID, $tableName);

    // Check Is Pined
    $isPined = '';
    if($currentPost['pined'] == 1) {
        $isPined = 'checked';
    }
    else {
        $isPined = '';
    }
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>Update News</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <p class="message">
                                        </p>
                                    </div>

                                    <input type="hidden" name="id" value="<?php echo $currentPost['id'] ?>">
                                    <input type="hidden" name="old_thumbnail" value="<?php echo $currentPost['thumbnail'] ?>">

                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" value="<?php echo $currentPost['title'] ?>" name="title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Checkbox</label>
                                        <input type="checkbox" <?php echo $isPined   ?> name="pined" class="form-check-input">
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category" class="form-select">
                                            <?php 
                                                $currentCateID = $currentPost['category_id'];
                                                echo getAllCategory($currentCateID) 
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" name="thumbnail" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control">
                                            <?php echo $currentPost['description'] ?>
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="btn-update-news" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>