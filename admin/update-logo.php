<?php 
    include('sidebar.php');
    $postID = $_GET['id'];
    $currentPost = getCurrentPost($postID, 'website_logo');

    $isCheck = '';
    if($currentPost['pined'] == 1) {
        $isCheck = 'checked';
    }
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>Update Logo</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="postID" value="<?php echo $postID ?>">
                                    <input type="hidden" name="oldThumbnail" value="<?php echo $currentPost['thumbnail'] ?>">
                                    <div class="form-group">
                                        <label>Pined</label>
                                        <input type="checkbox" name="pined" value="1" <?php  echo $isCheck; ?> class="form-check-input">
                                    </div>

                                    <div class="form-group">
                                        <label>Thumbnail</label> <br>
                                        <img src="assets/image/<?php  echo $currentPost['thumbnail']; ?>" class="img-update">
                                        <input type="file" name="thumbnail" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="btn-update-logo">Save</button>
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