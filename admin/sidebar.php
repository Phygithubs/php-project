<!DOCTYPE html>
<?php
    include('function.php');
    if(!empty($_SESSION['uid'])) {
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- @theme style -->
    <link rel="stylesheet" href="assets/style/theme.css">

    <!-- @Bootstrap -->
    <link rel="stylesheet" href="assets/style/bootstrap.css">

    <!-- @script -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!-- @tinyACE -->
    <script src="https://cdn.tiny.cloud/1/5gqcgv8u6c8ejg1eg27ziagpv8d8uricc4gc9rhkbasi2nc4/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body>
    <main class="admin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="content-left">
                        <div class="wrap-top">
                            <h5>Daily News System</h5>
                        </div>
                        <div class="wrap-center">
                            <?php
                                $userData = getCurrentProfile();
                                echo '
                                    <img src="assets/image/'.$userData['profile'].'" style="width:50px; height:50px; object-fit: cover">
                                    <h6 class="m-0">Welcome '.$userData['name'].'</h6>
                                ';
                            ?>
                        </div>
                        <div class="wrap-bottom">
                            <ul>
                                <!-- Nav Menu -->
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span>Posts</span>
                                        <img src="assets/icon/arrow-right.svg" style="width: 1.1rem">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="list-post.php">List Post</a>
                                            <a href="add-post.php">Add New</a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Website logo -->
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span>Logo</span>
                                        <img src="assets/icon/arrow-right.svg" style="width: 1.1rem">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="list-logo.php">List Post</a>
                                            <a href="add-logo.php">Add New</a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Category -->
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span>Category</span>
                                        <img src="assets/icon/arrow-right.svg" style="width: 1.1rem">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="list-category.php">List Post</a>
                                            <a href="add-category.php">Add New</a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- News -->
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span>News</span>
                                        <img src="assets/icon/arrow-right.svg" style="width: 1.1rem">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="list-news.php">List Post</a>
                                            <a href="add-news.php">Add New</a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- social- -->
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span>Social</span>
                                        <img src="assets/icon/arrow-right.svg" style="width: 1.1rem">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="add-social.php">Add Social</a>
                                            <a href="list-social.php">List Category</a>
                                        </li>
                                    </ul>
                                </li>


                                <!-- Log -->
                                <li class="parent">
                                    <a class="parent" href="list-log.php">
                                        <span>log Activity</span>
                                    </a>
                                </li>
                                
                                <!-- logout -->
                                <li class="parent">
                                    <button type="button" remove-id="1" class="parent btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Logout
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h5 class="modal-title" id="exampleModalLabel">Are you sure to logout?</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="" method="post">
                                            <button type="submit" class="btn btn-danger" name="btn-logout">Yes</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>  
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                
<?php
    }
    else {
        header('Location: login.php');
    }
?>