<?php include('header.php') ?>
<section class="trending">
    <div class="container">
        <?php echo getPinedNews() ?>
    </div>
</section>

<section class="news">
    <div class="container">
        <div class="top">
            <h2>Latest News</h2>
        </div>
        <div class="row">
            <?php echo getLatestNews() ?>
        </div>
    </div>
</section>

<!-- <section class="news">
    <div class="container">
        <div class="top">
            <h2>Popular News</h2>
        </div>
        <div class="row">
            <div class="col-4">
                <figure>
                    <div class="thumbnail">
                        <a href="">
                            <img src="https://placehold.co/300" alt="">
                        </a>
                    </div>
                </figure>
                <figcaption>
                    <h3>
                        <a href="">
                            1990 World Cup Finals 3rd Shirt
                        </a>
                    </h3>
                    <div>
                        <img src="assets/icons/date.svg" alt="">
                        <span>19 Jun, 2023</span>
                    </div>
                </figcaption>
            </div>
        </div>
    </div>
</section> -->
<?php include('footer.php') ?>