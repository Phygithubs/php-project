<?php 
    include('sidebar.php');
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>All Posts</h3>
                        </div>
                        <div class="bottom view-post">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <table class="table" border="1px">
                                        <tr>
                                            <th>ID</th>
                                            <th>Post Type</th>
                                            <th>Post ID</th>
                                            <th>Author</th>
                                            <th>Actions</th>
                                            <th>Created Date</th>
                                        </tr>
                                        <?php listLogs(); ?>
                                    </table>

                                    <!-- Modal -->
                                    <div class="modal fade" id="removeLogo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to remove this post?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="" method="post">
                                                        <input type="hidden" class="postID" name="postID">
                                                        <button type="submit" class="btn btn-danger" name="btn-remove-logo">Yes</button>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>  
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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