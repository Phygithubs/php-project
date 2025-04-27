<?php
    function connectionDB() {
        $con = new mysqli('','root','','project');
        return $con;
    }

    // Get Logo
    function getlogo() {
        $sqlStr = "SELECT * FROM `website_logo` WHERE `pined` = 1 AND is_deleted = 1";
        $result = connectionDB()->query($sqlStr);
        $row    = mysqli_fetch_assoc($result);
        return $row['thumbnail'];
    }

    // Get Pined News
    function getPinedNews() {
        $sqlStr = "SELECT * FROM `news` WHERE `pined` = 1 AND is_deleted = 1";
        $result = connectionDB()->query($sqlStr);
        $row    = mysqli_fetch_assoc($result);
        echo '
            <div class="row">
                <div class="col-6">
                    <figcaption>
                        <h2>'. $row['title'] .'</h2>
                        <div>'. $row['description'] .'</div>
                        <a href="article.php?id='. $row['id'] .'">FIND OUT MORE</a>
                    </figcaption>
                </div>
                <div class="col-6">
                    <div class="thumbnail">
                        <img src="admin/assets/image/'.$row['thumbnail'].'" class="pined-news">
                    </div>
                </div>
            </div>
        ';
    }

    // Get Latest News
    function getLatestNews() {
        $sqlStr = "SELECT * FROM `news` WHERE is_deleted = 1 ORDER BY id DESC LIMIT 6";
        $result = connectionDB()->query($sqlStr);
        while($row = mysqli_fetch_assoc($result)) {
            $date       = date_create($row['created_at']);
            $dateFormat = date_format($date, 'd M,Y');
            echo '
                <div class="col-4">
                    <figure>
                        <div class="thumbnail">
                            <a href="article.php?id='. $row['id'] .'">
                                <img src="admin/assets/image/'.$row['thumbnail'].'" alt="">
                            </a>
                        </div>
                    </figure>
                    <figcaption>
                        <h3>
                            <a href="">'. $row['title'] .'</a>
                        </h3>
                        <div>
                            <img src="assets/icons/date.svg" alt="">
                            <span>'. $dateFormat .'</span>
                        </div>
                    </figcaption>
                </div>
            ';
        }
    }

    //get social

    function getSocial(){
        $sql_select ="SELECT * FROM `social` WHERE is_deleted =1 ORDER BY id DESC LIMIT 4";
        $rs = connectionDB()->query($sql_select);
        while($row = mysqli_fetch_assoc($rs)){
            echo '
                <li>
                        <a href="'.$row['url'].'">
                            <img src="admin/assets/image/'.$row['thumbnail'].'">
                        </a>
                </li>
            '; 
        }
    }
